<?php
include("../../utils/conn.php");

$arr = array(
    '1' => "DELIVERING",
    '2' => "OFFLINE",
    '3' => "FINISHED",
    '4' => "CANCELED"
);

$oid = $_POST['oid'];
$status = $arr[$_POST['status']];


$sql = "UPDATE orders SET status='" . $status . "' WHERE id= " . $oid;

if ($conn->query($sql) === TRUE) {
    echo $status;
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}