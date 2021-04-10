<?php
session_start();
include("../../utils/conn.php");
if (!isset($_SESSION['username'])) {
    echo "<script>location.href='../login-demo.html';</script>";
    exit;
}

$password_set = true;
$information_set = true;

if (isset($_POST['c-password']) && isset($_POST['new-password'])) {
    $current_password = $_POST['c-password'];
    $password = $_POST['new-password'];

    $sql = "SELECT password FROM user WHERE username='" . $_SESSION['username'] . "'";

    if (mysqli_fetch_assoc(mysqli_query($conn, $sql))['password'] != $current_password) {
        $password_set = false;
    } else {
        $sql = "UPDATE user SET password='" . $password . "' WHERE username='" . $_SESSION['username'] . "'";

        if ($conn->query($sql) === TRUE) {
            $password_set = true;
        } else {
            $password_set = false;
        }
    }
}

$edit_str = "";
foreach ($_POST as $key => $value) {
    if ($key != 'c-password' && $key != 'new-password') {
        $edit_str .= $key . "='" . $value . "',";
    }
}

if ($edit_str != "") {
    $edit_str = rtrim($edit_str, ",");
    $sql = "UPDATE user SET " . $edit_str . " WHERE username='" . $_SESSION['username'] . "'";
    if ($conn->query($sql) === TRUE) {
        $information_set = true;
    } else {
        $information_set = false;
    }
}

