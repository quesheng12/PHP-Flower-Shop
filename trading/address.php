<?php
session_start();
$uid = $_SESSION['uid'];

include('../utils/conn.php');

$p = $_POST;

address($conn, $uid);

mysqli_close($conn);

function address($conn, $uid){
    $sql = "select id, name, province, city, area, detail, phone from address where user_id = " . $uid;
    $rst = mysqli_query($conn, $sql);
    $num = 1;
    $data = array();
    while ($arr = mysqli_fetch_assoc($rst)) {
        $node = array(
            "id" => $arr['id'],
            "name" => $arr['name'],
            "province" => $arr['province'],
            "city" => $arr['city'],
            "area" => $arr['area'],
            "detail" => $arr['detail'],
            "phone" => $arr['phone']
        );
        $data[$num] = $node;
        $num++;
    }
    echo json_encode($data);
}