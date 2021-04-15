<?php

include ('../utils/conn.php');

$p = $_POST;

if($p['action'] == 1){
    show_cart($conn, $p['user_id']);
}
else if($p['action'] == 2){
    add_to_cart($conn, $p['user_id'], $p['item_id'], $p['quantity']);
}
else if($p['action'] == 3){
    delete_from_cart($conn, $p['user_id'], $p['item_id']);
}

mysqli_close($conn);

//获取购物车所以商品 返回json
function show_cart($conn, $user_id){
    try {
        $sql = "select item_id, name, image, price, stock from cart natural join item where user_id = " . $user_id;
        $rst = mysqli_query($conn, $sql);
        if (mysqli_num_rows($rst) > 0) {
            $data = '{"items": [';
            while ($arr = mysqli_fetch_assoc($rst)) {
                $data = $data . '{"item_id": ' . $arr['item_id'] . ', "name": ' . $arr['name'] . ', "image": ' . $arr['image'] . ', "price": ' . $arr['price'] . ', "stock": ' . $arr['stock'] . '}, ';
            }
            $data = chop($data, ", ");
            $data = $data . ']}';
            echo json_encode($data);
        } else {
            echo 300;
        }
    }catch (Exception $e){
        echo 200;
    }
}

//添加商品到购物车
function add_to_cart($conn, $user_id, $item_id, $quantity){
    try{
        $sql = "insert into cart values (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iii", $user_id, $item_id, $quantity);
        if(mysqli_stmt_execute($stmt)){
            echo 100;
        }
        else {
            $sql = "update cart set quantity = quantity + '$quantity' where user_id = '$user_id' and item_id = '$item_id'";
            mysqli_query($conn, $sql);
            echo 300;
        }
    }catch (Exception $e){
        echo 200;
    }
}

//从购物车中删除
function delete_from_cart($conn, $user_id, $item_id){
    try {
        $sql = "delete from cart where user_id = " . $user_id . " and item_id = " . $item_id;
        mysqli_query($conn, $sql);
        echo 100;
    }catch (Exception $e){
        echo 200;
    }
}


