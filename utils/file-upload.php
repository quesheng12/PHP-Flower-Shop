<?php
session_start();
include('./conn.php');

if (!isset($_FILES['myfile'])) {
    echo 200;
    exit;
}

$type = $_POST['type'];
$imgname = $_FILES['myfile']['name'];
$tmp = $_FILES['myfile']['tmp_name'];
$filepath = $_SERVER['DOCUMENT_ROOT'];
//$filepath = "";

$sql = "SELECT * FROM user WHERE username=" . $_SESSION['username'];
$user = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$id = $user['id'];

$filepathIndex = array(
    "header" => "/image/user/header/" . $id . "/"
);

$sqlStatementIndex = array(
    "header" => "UPDATE user SET header='" . $filepathIndex[$type] . $imgname . "' WHERE username='" . $_SESSION['username'] . "'"
);

//$returnHrefIndex = array(
//    "header" => $_SERVER['DOCUMENT_ROOT'] . '/user/personal-profile/personal-profile-demo.html'
//);

$filepath = $filepath . $filepathIndex[$type];

if (!is_dir($filepath)) {
    mkdir($filepath);
}

if (move_uploaded_file($tmp, $filepath . $imgname)) {
    $sql = $sqlStatementIndex[$type];
    if ($conn->query($sql) === TRUE) {
        echo 100;
    } else {
        echo 300;
    }
} else {
    echo 400;
}

mysqli_close($conn);