<?php
session_start();
include("../../utils/conn.php");
if (!isset($_POST) || !isset($_SESSION['staff_id'])) {
    echo "<script>location.href='../src/be_pages_ecom_orders.php';</script>";
    exit;
}

$sqlDic = array(
    'edit' => "UPDATE item SET name = '" . $_POST['name'] . "', price = '" . $_POST['price'] . "', stock = '" . $_POST['stock'] . "', description = '" . $_POST['description'] . "' WHERE id= " . $_POST['id'],
    'add' => "INSERT INTO item (name,price,stock,description) VALUES ('" . $_POST['name'] . "','"
        . $_POST['price'] . "','" . $_POST['stock'] . "','".$_POST['description']."' );"
);

$sql = $sqlDic[$_POST['type']];

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Successfully Edit!');location.href='../src/be_pages_ecom_products.php';</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}



