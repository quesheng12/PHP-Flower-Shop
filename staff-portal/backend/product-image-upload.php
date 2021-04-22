<?php
session_start();
include('../../utils/conn.php');

$imgname = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$filepath = $_SERVER['DOCUMENT_ROOT'];

$id = $_POST['id'];

$filepath = $filepath . "/images/item/pre-image/" . $id . "/";

if (!is_dir($filepath)) {
    mkdir($filepath);
}

if (move_uploaded_file($tmp, $filepath . $imgname)) {
    $sql = "UPDATE item SET image='" . "/images/item/pre-image/" . $id . "/" . $imgname . "' WHERE id='" . $id . "'";
    if ($conn->query($sql) === TRUE) {
        echo 100;
    } else {
        echo 300;
    }
} else {
    echo 400;
}

mysqli_close($conn);