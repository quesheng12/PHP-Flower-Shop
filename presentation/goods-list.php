<?php
include "../utils/conn.php";

$attrs = $_POST['attrs'];
//$attrs = ["name", "stock"];

$sql = "SELECT * FROM item";
$rst = mysqli_query($conn, $sql);

$result = [];
while ($item = mysqli_fetch_assoc($rst)) {
    $attrs_list = [];
    foreach ($attrs as $attr) {
        $attrs_list[$attr] = $item[$attr];
    }
    $result[$item["id"]] = $attrs_list;
}

echo json_encode($result);