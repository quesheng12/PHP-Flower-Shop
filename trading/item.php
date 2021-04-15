<?php

include ('../utils/conn.php');

$p = $_POST;

item_query($conn, $p['item_id']);

mysqli_close($conn);

function item_query($conn, $item_id){
    $sql = "select name, image, price, price, stock, description from item where id = " . $item_id;
    $rst = mysqli_query($conn, $sql);
    if (mysqli_num_rows($rst) > 0) {
        $arr = mysqli_fetch_assoc($rst);

        $data = array(
            "name" => $arr['name'],
            "image" => $arr['image'],
            "price" => $arr['price'],
            "stock" => $arr['stock'],
            "description" => $arr['description']
        );
        echo json_encode($data);
    }
    else echo 200;
}
