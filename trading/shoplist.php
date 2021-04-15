<?php

include('../utils/conn.php');

$p = $_POST;

if($p['action'] == 1){
    item_query($conn, $p['page']);
}
else if($p['action'] == 2){
    item_number($conn);
}

mysqli_close($conn);

function item_query($conn, $page){
    $sql = "select * from item limit " . ($page-1)*12 . ", 12";
    $rst = mysqli_query($conn, $sql);
    $num = 1;
    $data = array();
    while ($arr = mysqli_fetch_assoc($rst)) {
        $node = array(
            "id" => $arr['id'],
            "name" => $arr['name'],
            "image" => $arr['image'],
            "price" => $arr['price'],
            "stock" => $arr['stock'],
            "description" => $arr['description']
        );
        $data[$num] = $node;
        $num++;
    }
    echo json_encode($data);
//    echo 200;
}

function item_number($conn){
    $sql = "select count(id) as num from item";
    $rst = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($rst);
    echo $arr['num'];
}