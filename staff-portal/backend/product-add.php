<?php
include('../../utils/conn.php');

//查找id，设置本条id
$sql = "SELECT id FROM item ORDER BY id DESC LIMIT 1";
if ($res = mysqli_fetch_assoc(mysqli_query($conn, $sql))) {
    $id = $res['id'] + 1;
} else {
    $id = 1;
}

$file = $_FILES['pre_image'];
//文件名后加毫秒级时间戳避免文件名重复
$name = explode('.', $file['name']);
$imgname = $name[0] . (explode(' ', microtime())[0] * 10000000) . "." . $name[1];
$file['name'] = $imgname;
$tmp = $file['tmp_name'];
$filepath = $_SERVER['DOCUMENT_ROOT'] . '/images/item/' . $id . '/';

//文本替换
//$_POST['content'] = str_replace('"', '\\"', $_POST['content']);
//$_POST['content'] = str_replace("'", "\\'", $_POST['content']);

if (!is_dir($filepath)) {
    mkdir($filepath);
}
// echo $filepath;
if (move_uploaded_file($tmp, $filepath . $imgname)) {
    $file['tmp_name'] = "1";
    // echo $i;
} else {
    echo "<script>alert('图片储存失败');</script>";
}

$sql = "INSERT INTO item (name,price,stock,description) VALUES ('" . $_POST['name'] . "','"
    . $_POST['price'] . "','" . $_POST['stock'] . "','" . $_POST['description'] . "' )";


if ($conn->query($sql) === TRUE) {
    echo "<script>alert('提交成功');location.href='../src/be_pages_ecom_products.php';</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
