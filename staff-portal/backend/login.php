<?php
if (!isset($_POST)) {
    echo "<script>location.href='../src/staff-login.php';</script>";
    exit;
}

//连接数据库
include('../../utils/conn.php');


$p = $_POST;
//4、执行SQL&处理结果===================================
$sql = "select id,username,password from staff";
$rst = mysqli_query($conn, $sql);

$match = false;
while ($arr = mysqli_fetch_assoc($rst)) {
    // print_r($p);
    if ($p['username'] == $arr['username'] && $p['password'] == $arr['password']) {
        $match = true;
        //写入session
        session_start();
        $_SESSION['staff_id'] = $arr['id'];
        echo "<script>location.href='../src/be_pages_ecom_orders.php';</script>";
    }
}

if (!$match) {
    echo "<script>location.href='../src/staff-login.php';alert('Username or password wrong!')</script>";
}

mysqli_close($conn);