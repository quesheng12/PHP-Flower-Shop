<?php
if (!isset($_POST['username'])) {
    echo "<script>location.href='register.html';</script>";
    exit;
}

include("../utils/conn.php");

$username = $_POST['username'];
$password = $_POST['password'];
$email=$_POST['email'];

$sql = "select username from user where username=$username";
$rst = mysqli_query($conn, $sql);

if ($arr = mysqli_fetch_assoc($rst)) {
    echo 200;
    exit;
}

//向数据库中插入注册用户信息
$sql = "INSERT INTO user (username,password,email) VALUES ($username,$password,$email);";
if ($conn->query($sql) === TRUE) {
    echo 100;
} else {
    echo 300;
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);