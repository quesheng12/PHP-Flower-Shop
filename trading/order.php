<?php
session_start();
$uid = $_SESSION['uid'];

include('../utils/conn.php');
include('../utils/authcode.php');

$p = $_POST;

if ($p['action'] == 1) {
    order_item($conn, orders($conn, $uid, $p['service'], $p['address'], $p['note'], $p['status'], $p['total_price']), $p['item'], $p['quantity']);
}

mysqli_close($conn);

//结算
function orders($conn, $user_id, $service, $address, $note, $status, $total)
{
    try {
        $sql = "insert into orders (user_id, service, address_id, note, status, time,total_price) values ('$user_id', '$service', '$address', '$note', '$status', NOW(),'$total')";
        mysqli_query($conn, $sql);
        $sql = "select id, time from orders where user_id = '$user_id' order by time desc limit 1";
        $rst = mysqli_query($conn, $sql);
        $arr = mysqli_fetch_assoc($rst);
        return $arr['id'];
    } catch (Exception $e) {
        echo 200;
    }
}

function order_item($conn, $oid, $item, $quantity)
{
    try {
        $oid_encode = authcode($oid, 'ENCODE');
        $sql = "insert into dictionary(value,input) values ('" . $oid . "','" . authcode($oid . '', 'ENCODE') . "')";
        mysqli_query($conn, $sql);
        for ($i = 0; $i < count($item); $i++) {
            $iid = $item[$i];
            $q = $quantity[$i];
            $sql = "insert into order_item values ('$oid', '$iid', '$q')";
            mysqli_query($conn, $sql);
        }
        echo $oid_encode;
//        echo "Error:" . $sql . "<br>" . $conn->error;
//        echo $oid_encode.'';
    } catch (Exception $e) {
        echo 200;
    }
}