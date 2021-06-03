<?php
if (!isset($_POST['username'])) {
    echo "<script>location.href='login.php';</script>";
    exit;
}

//连接数据库
include('../utils/conn.php');


$p = $_POST;
//4、执行SQL&处理结果===================================
$sql = "select * from user";
$rst = mysqli_query($conn, $sql);

$match = false;
while ($arr = mysqli_fetch_assoc($rst)) {
    // print_r($p);
    if (($p['username'] == $arr['username'] || $p['username'] == $arr['email']) && $p['password'] == $arr['password']) {
        $match = true;
        //写入session
        session_start();
        $_SESSION['username'] = $p['username'];
        $_SESSION['password'] = $p['password'];
        $_SESSION['uid'] = $arr['id'];
        echo 100;
    }
}

if (!$match) {
    echo 200;
}

mysqli_close($conn);