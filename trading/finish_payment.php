<?php
session_start();
include('../utils/conn.php');
$id = $_POST['id'];
$sql = "SELECT value FROM dictionary WHERE input = '" . $id . "'";
$id = mysqli_fetch_assoc(mysqli_query($conn, $sql))['value'];

$sql = 'SELECT user_id,status,total_price FROM orders WHERE id=' . $id;
$status = mysqli_fetch_assoc(mysqli_query($conn, $sql))['status'];
$uid = mysqli_fetch_assoc(mysqli_query($conn, $sql))['user_id'];
$total_price = mysqli_fetch_assoc(mysqli_query($conn, $sql))['total_price'];
if ($status == "DELIVERY_WAIT_PAYMENT" || $status == "OFFLINE_WAIT_PAYMENT") {
    if ($status == "DELIVERY_WAIT_PAYMENT") {
        $sta = "FOR_DELIVERY";
    } else if ($status == "OFFLINE_WAIT_PAYMENT") {
        $sta = "OFFLINE";
    }

    $sql = 'UPDATE orders SET status="' . $sta . '" WHERE id=' . $id;
    if ($conn->query($sql) === TRUE) {
        echo 100;
    } else {
        echo 200;
        exit();
    }

    $sql = 'SELECT email FROM user WHERE id=' . $uid;
    require_once "../mail/Smtp.class.php";
//******************** 配置信息 ********************************
    $smtpserver = "smtp.qq.com";//SMTP服务器
    $smtpserverport = 25;//SMTP服务器端口
    $smtpusermail = "2872839866@qq.com";//SMTP服务器的用户邮箱
    $smtpemailto = mysqli_fetch_assoc(mysqli_query($conn, $sql))['email'];//发送给谁
    $smtpuser = "2872839866@qq.com";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名
    $smtppass = "wjtssohmarjkdhcj";//SMTP服务器的授权码
    $mailtitle = 'Thank you for shopping in our store!';//邮件主题
    $mailcontent = "Your payment has been confirmed, thanks for your shopping!";//邮件内容
    $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
//************************ 配置信息 ****************************
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $smtp->debug = false;//是否显示发送的调试信息
    $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
    updateLevel($total_price);
}

function updateLevel($price)
{
    //$price 用户下单所付的钱，这里暂时设置为0；
    $exp = $price / 50;//用户获得的经验值，因为好像价格都比较高，除10降低数值
    $sql = "select level from user where id=" . $_SESSION['uid'];//用户当前的等级值
    $current = mysqli_fetch_assoc(mysqli_query($conn, $sql))['level'];
    $update = $exp + $current;
    $sql = "update user set level = '$update' where id=" . $_SESSION['uid'];//上传到数据库
    $conn->query($sql);
}