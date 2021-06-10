<?php
session_start();
include('../../utils/conn.php');

if (!isset($_SESSION['username'])) {
    echo "<script>location.href='../login.php';</script>";
    exit;
}

//用户信息
$username = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username='".$username."'";
$user = mysqli_fetch_assoc(mysqli_query($conn, $sql));

//用户地址
$sql = "SELECT * FROM address WHERE user_id=" . $user['id'];
$rst = mysqli_query($conn, $sql);
$address_str = "{";
$i = 1;
while ($address = mysqli_fetch_assoc($rst)) {
    $address_str .= '"' . $i . '":{';
    $address_str .= '"id":"' . $address['id'] . '",';
    $address_str .= '"name":"' . $address['name'] . '",';
    $address_str .= '"province":"' . $address['province'] . '",';
    $address_str .= '"city":"' . $address['city'] . '",';
    $address_str .= '"area":"' . $address['area'] . '",';
    $address_str .= '"detail":"' . $address['detail'] . '",';
    $address_str .= '"phone":"' . $address['phone'] . '"},';
    $i++;
}
$address_str = rtrim($address_str, ",");
$address_str .= "}";

echo '{
    "username": "' . $username . '",
    "first_name": "' . $user['first_name'] . '",
    "last_name": "' . $user['last_name'] . '",
    "phone": "' . $user['phone'] . '",
    "email": "' . $user['email'] . '",
    "header": "' . $user['header'] . '",
    "address":' . $address_str . '
    }';
