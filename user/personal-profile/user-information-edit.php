<?php
session_start();
include("../../utils/conn.php");

$origin_password = $_POST['origin_password'];
$password = $_POST['password'];

$sql = "SELECT password FROM user WHERE username='" . $_SESSION['username'] . "'";

if (!(mysqli_fetch_assoc(mysqli_query($conn, $sql))['password'] == $origin_password)) {
    echo 300;
    exit;
}

$sql = "UPDATE user SET password='" . $password . "' WHERE username='" . $_SESSION['username'] . "'";

if ($conn->query($sql) === TRUE) {
//    echo 100;
} else {
    echo 200;
}