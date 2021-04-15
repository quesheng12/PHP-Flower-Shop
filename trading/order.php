<?php

include ('../utils/conn.php');

$p = $_POST;

if($p['action'] == 1){
    order_generate($conn, $p['user_id'], $p['item_id'], $p['quantity'], $p['service'], $p['address'], $p['tel']);
}

mysqli_close($conn);

//结算
function order_generate($conn, $user_id, $item_id, $quantity, $service, $address, $tel){
    try{
        $sql = "insert into order values (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iiiissi", $user_id, $item_id, $quantity, $service, $address, $tel, 1);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo 100;
    }catch (Exception $e){
        echo 200;
    }
}

function order_query(){

}