<?php
session_start();
include("../../utils/conn.php");
if (!isset($_POST) || !isset($_SESSION['staff_id'])) {
    echo "<script>location.href='../src/be_pages_ecom_orders.php';</script>";
    exit;
}

$sql = "UPDATE item SET name = '" . $_POST['name'] . "', price = '" . $_POST['price'] . "', stock = '" . $_POST['stock'] . "', description = '" . $_POST['description'] . "' WHERE id= " . $_POST['id'];

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Successfully Edit!');location.href='../src/be_pages_ecom_orders.php';</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}



