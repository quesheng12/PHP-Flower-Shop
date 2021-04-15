<?php
include("../../utils/conn.php");

if (!isset($_SESSION['username'])) {
    echo "<script>location.href='../login.html';</script>";
    exit;
}

$id = $_POST['id'];

$sql = "DELETE FROM address WHERE id= " . $id;
if ($conn->query($sql) === TRUE) {
    echo "Delete Successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
