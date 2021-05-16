<?php

include('../utils/conn.php');

$p = $_POST;

if($p['action'] == 1){
    item_query($conn, $p['color'], $p['type'], $p['search'], $p['sort'], $p['page']);
}
else if($p['action'] == 2){
    item_number($conn, $p['color'], $p['type'], $p['search']);
}

mysqli_close($conn);

function item_query($conn, $color, $type, $search, $sort, $page){
    $header = "select * from item ";
    $footer = "limit " . ($page - 1) * 12 . ", 12";
    $color_sql = "";
    $type_sql = "";
    $search_sql = "";
    $sort_sql = "";
    if($color) {
        $color_sql = "where color like '%$color%' ";
    }
    if($type){
        $type_sql = "where type like '%$type%' ";
    }
    if($search){
        $search_sql = "where name like '%$search%' ";
    }
    if ($sort == 'best-selling') {
        $sort_sql = " ";
    } elseif ($sort == 'title-ascending') {
        $sort_sql = "order by name ";
    } elseif ($sort == 'title-descending') {
        $sort_sql = "order by name desc ";
    } elseif ($sort == 'price-ascending') {
        $sort_sql = "order by price ";
    } elseif ($sort == 'price-descending') {
        $sort_sql = "order by price desc ";
    }

    $sql = $header . $color_sql . $type_sql . $search_sql . $sort_sql . $footer;
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
            "description" => $arr['description'],
            "color" => $arr['color'],
            "type" => $arr['type']
        );
        $data[$num] = $node;
        $num++;
    }
    echo json_encode($data);

//    echo 200;
}

function item_number($conn, $color, $type, $search){
    $header = "select count(id) as num from item ";
    $color_sql = "";
    $type_sql = "";
    $search_sql = "";
    if($color) {
        $color_sql = "where color like '%$color%' ";
    }
    if($type){
        $type_sql = "where type like '%$type%' ";
    }
    if($search){
        $search_sql = "where name like '%$search%' ";
    }
    $sql = $header . $color_sql . $search_sql . $type_sql;
    $rst = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($rst);
    echo $arr['num'];
}