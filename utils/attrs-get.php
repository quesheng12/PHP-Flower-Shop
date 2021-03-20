<?php
include "conn.php";

$attrs = $_POST['attrs'];
$table = $_POST['table'];

$sql = "SELECT * FROM " . $table;
$rst = mysqli_query($conn, $sql);

$result = [];
while ($item = mysqli_fetch_assoc($rst)) {
    foreach ($attrs as $attr) {
        $result[$attr] = $item[$attr];
    }
}

echo json_encode($result);