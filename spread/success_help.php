<?php
include("../utils/conn.php");
$username = $_POST['username'];
$done = (int)$_POST['done'];
$input = $_POST['input'] . '';

//查询字典获取订单id
$sql = "select value from dictionary where input=" . $input;
$oid = mysqli_fetch_assoc(mysqli_query($conn, $sql))['value'];

$sql = "select id from user where username=" . $username;
$uid = mysqli_fetch_assoc(mysqli_query($conn, $sql))['id'];

$sql = "SELECT * FROM spread_help WHERE user_id=" . $uid . " AND order_id=" . $oid;
$rst = mysqli_query($conn, $sql) or die(mysqli_error());
if (!$arr = mysqli_fetch_assoc($rst)) {
    $sql = "INSERT INTO spread_help(user_id, order_id) VALUE (" . $uid . ", " . $oid . ")";
    if ($conn->query($sql) === TRUE) {
        $sql = "UPDATE orders SET spread_done=" . $done . " WHERE id=" . $oid;
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} else {
}

