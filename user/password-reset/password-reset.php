<?php
require_once "../../mail/Smtp.class.php";
include('../../utils/conn.php');
include('../../utils/authcode.php');
//******************** 配置信息 ********************************
$smtpserver = "smtp.qq.com";//SMTP服务器
$smtpserverport = 25;//SMTP服务器端口
$smtpusermail = "2872839866@qq.com";//SMTP服务器的用户邮箱
$smtpemailto = $_POST['toemail'];//发送给谁
$smtpuser = "2872839866@qq.com";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名
$smtppass = "wjtssohmarjkdhcj";//SMTP服务器的授权码
$mailtitle = "FlowerShop Password Reset";//邮件主题

$sql = "SELECT id FROM user WHERE email='" . $smtpemailto . "'";
$uid = mysqli_fetch_assoc(mysqli_query($conn, $sql))['id'];

$sql = 'INSERT INTO dictionary(input, value) VALUE (' . authcode($uid, 'ENCODE') . ',' . $uid . ')';
$conn->query();

$mailcontent = "Click the link to reset your password:<br>http://localhost:8902/user/reset.php?id=" . authcode($uid, 'ENCODE');//邮件内容
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
//************************ 配置信息 ****************************
$smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp->debug = false;//是否显示发送的调试信息
$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

if ($state == "") {
    echo 200;
} else {
    echo 100;
}