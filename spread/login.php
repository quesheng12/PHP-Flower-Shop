<?php
if (!isset($_POST['username'])) {
    echo "<script>location.href='login.html';</script>";
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
    if ($p['username'] == $arr['username'] && $p['password'] == $arr['password']) {
        $match = true;

        echo 100;
    }
}

if (!$match) {
    echo 200;
}

mysqli_close($conn);