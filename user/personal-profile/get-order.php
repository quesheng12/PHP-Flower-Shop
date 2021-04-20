<?php
include('../../utils/conn.php');
$oid = $_POST['oid'];
$total_price = 0;
$sql = "select * from order_item where oid=" . $oid;
$rst = mysqli_query($conn, $sql);
$str = "";
while ($arr = mysqli_fetch_assoc($rst)) {
    $sql = "select name,price,stock from item where id=" . $arr['item_id'] . " ORDER BY id";
    $item = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    $str .= '
    <tr>
        <td>
            <a href="javascript:0;"><strong>' . $item['name'] . '</strong></a>
        </td>
        <td class="text-center"><strong>' . $arr['quantity'] . '</strong></td>
        <td class="text-right">¥' . $item['price'] . '</td>
        <td class="text-right">¥' . $arr['quantity'] * $item['price'] . '</td>
    </tr>';
    $total_price += $arr['quantity'] * $item['price'];
}

$sql = "select status from orders where id=" . $oid;
$order = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$array = array(
    'str' => $str,
    'total_price' => $total_price,
    'status' => $order['status']
);

echo json_encode($array);
