<?php
include('./conn.php');

$type = $_POST['type'];
$imgname = $_FILES['myfile']['name'];
$tmp = $_FILES['myfile']['tmp_name'];
$filepath = $_SERVER['DOCUMENT_ROOT'];

$filepathIndex = array(
    "header" => "/images/user/header/"
);

$sqlStatementIndex = array(
    "header" => ""
);

//$returnHrefIndex = array(
//    "header" => $_SERVER['DOCUMENT_ROOT'] . '/user/personal-profile/personal-profile-demo.html'
//);

$filepath = $filepath . $filepathIndex[$type];


if (move_uploaded_file($tmp, $filepath . $imgname)) {
    $sql = $sqlStatementIndex[$type];
    if ($conn->query($sql) === TRUE) {
        echo 100;
    } else {
        echo 200;
    }
} else {
    echo 300;
}

mysqli_close($conn);
