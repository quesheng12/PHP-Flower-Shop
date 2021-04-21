<?php
include('../../utils/conn.php');

$accepted_origins = array("http://localhost:9080", "http://192.168.1.1", "http://example.com");

if (isset($_GET['edit'])) {
    $id = $_GET['id'];
} else {
    $sql = "SELECT id FROM news ORDER BY id DESC LIMIT 1";
    if ($res = mysqli_fetch_assoc(mysqli_query($conn, $sql))) {
        $id = $res['id'] + 1;
    } else {
        $id = 1;
    }
}

$imageFolder = '../../images/news/' . $id . '/';
if (!is_dir($imageFolder)) {
    mkdir($imageFolder);
}

reset($_FILES);
$temp = current($_FILES);
if (!is_uploaded_file($temp['tmp_name'])) {
    // 通知编辑器上传失败
    header("HTTP/1.1 500 Server Error");
    exit;
}

//if (isset($_SERVER['HTTP_ORIGIN'])) {
//    // 验证来源是否在白名单内
//    if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
//        header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
//    } else {
//        header("HTTP/1.1 403 Origin Denied");
//        exit;
//    }
//}

//if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
//    header("HTTP/1.1 400 Invalid file name.");
//    exit;
//}

if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png", "jpeg", "webp"))) {
    header("HTTP/1.1 400 Invalid extension.");
    exit;
}

$filetowrite = $imageFolder . $temp['name'];
move_uploaded_file($temp['tmp_name'], $filetowrite);

// { location : '/your/uploaded/image/file.jpg'}
echo json_encode(array('location' => $filetowrite));