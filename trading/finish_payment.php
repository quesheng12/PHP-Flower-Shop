<?php
include('../utils/conn.php');
$id = $_POST['id'];
$sql = "SELECT value FROM dictionary WHERE input = '" . $id . "'";
$id = mysqli_fetch_assoc(mysqli_query($conn, $sql))['value'];

$sql = 'SELECT status FROM orders WHERE id=' . $id;
$status = mysqli_fetch_assoc(mysqli_query($conn, $sql))['status'];
if ($status == "DELIVERY_WAIT_PAYMENT") {
    $status = "FOR_DELIVERY";
} else if ($status == "OFFLINE_WAIT_PAYMENT") {
    $status = "OFFLINE";
}

$sql = 'UPDATE orders SET status="' . $status . '" WHERE id=' . $id;
if ($conn->query($sql) === TRUE) {
    echo "100";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}