<?php
session_start();
$uid = $_SESSION['uid'];

include ('../utils/conn.php');

$p = $_POST;

if($p['action'] == 1){
    orders($conn, $p['user_id'], $p['item_id'], $p['quantity'], $p['service'], $p['address'], $p['tel']);
}

mysqli_close($conn);

//结算
function orders($conn, $user_id, $service, $address, $note, $status){
    try{
        $sql = "insert into orders user_id, service, address_id, note, status, time values ('$user_id', '$service', '$address', '$note', '$status', NOW())";
        mysqli_query($conn, $sql);
        echo 100;
    }catch (Exception $e){
        echo 200;
    }
}

function order_query(){

}