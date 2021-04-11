<?php
session_start();
include("../../utils/conn.php");

if (!isset($_SESSION['username'])) {
    echo "<script>location.href='../login-demo.html';</script>";
    exit;
}

if ($_POST['type'] == 'add') {
    $sql = "select id from user WHERE username='" . $_SESSION['username'] . "'";
    $id = mysqli_fetch_assoc(mysqli_query($conn, $sql))['id'];
    $attr_str = "user_id,";
    $value_str = $id . ",";
    foreach ($_POST as $key => $value) {
        if ($key != 'type') {
            $attr_str .= $key . ",";
            $value_str .= "'" . $value . "',";
        }
    }
    $attr_str = rtrim($attr_str, ",");
    $value_str = rtrim($value_str, ",");

    $sql = "INSERT INTO address (" . $attr_str . ") VALUES (" . $value_str . ");";
} else {
    $edit_str = "";
    foreach ($_POST as $key => $value) {
        if ($key != "id" && $key != 'type') {
            $edit_str .= $key . "='" . $value . "',";
        }
    }

    $edit_str = rtrim($edit_str, ",");
    $sql = "UPDATE address SET " . $edit_str . " WHERE id='" . $_POST['id'] . "'";
}

if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='personal-profile.html';alert('Edit Successfully!')</script>";
} else {
    echo "<script>location.href='personal-profile.html';alert('Edit Failed')</script>";
    echo "Error:" . $sql . "<br>" . $conn->error;
}