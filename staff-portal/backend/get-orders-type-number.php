<?php
include("../../utils/conn.php");
$type = $_POST['type'];
$sql_array = array(
    'all' => "select COUNT('id') as num from orders ORDER BY time",
    'wait-payment' => "select COUNT('id') as num from orders WHERE status='OFFLINE_WAIT_PAYMENT' or status='DELIVERY_WAIT_PAYMENT' ",
    'for-delivery' => "select COUNT('id') as num from orders WHERE status='FOR_DELIVERY' ",
    'finished' => "select COUNT('id') as num from orders WHERE status='FINISHED' ",
    'canceled' => "select COUNT('id') as num from orders WHERE status='CANCELED'",
    'delivering' => "select COUNT('id') as num from orders WHERE status='DELIVERING' ",
    'offline' => "select COUNT('id') as num from orders WHERE status='OFFLINE'",
);

$sql = $sql_array[$type];
$num = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num'];
echo $num;