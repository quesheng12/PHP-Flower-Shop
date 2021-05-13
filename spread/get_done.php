<?php
include("../utils/conn.php");

$input = $_POST['input'].'';

//查询字典获取订单id
$sql = "select value from dictionary where input=".$input;
$id = mysqli_fetch_assoc(mysqli_query($conn, $sql))['value'];

//查询订单信息
$sql = "select user_id, spread_done from orders where id=" . $id;
$order = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$done = $order['spread_done'];

$sql = "select nickname from user where id=" . $order['user_id'];
$name = mysqli_fetch_assoc(mysqli_query($conn, $sql))['nickname'];

$res = array(
    'done' => $done,
    'name' => $name,
);

echo json_encode($res);