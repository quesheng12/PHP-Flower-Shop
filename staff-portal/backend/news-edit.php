<?php
include('../../utils/conn.php');

$id = $_POST['id'];

if ($_FILES['pre_image']['name']!='') {
    $file = $_FILES['pre_image'];
//文件名后加毫秒级时间戳避免文件名重复
    $name = explode('.', $file['name']);
    $imgname = $name[0] . (explode(' ', microtime())[0] * 10000000) . "." . $name[1];
    $file['name'] = $imgname;
    $tmp = $file['tmp_name'];
    $filepath = $_SERVER['DOCUMENT_ROOT'] . '/images/news/' . $id . '/';

//文本替换
    $_POST['content'] = str_replace('"', '\\"', $_POST['content']);
    $_POST['content'] = str_replace("'", "\\'", $_POST['content']);

    if (!is_dir($filepath)) {
        mkdir($filepath);
    }

    if (move_uploaded_file($tmp, $filepath . $imgname)) {
        $file['tmp_name'] = "1";
        // echo $i;
    } else {
        echo "<script>alert('图片储存失败');</script>";
    }
}

$dt = new DateTime();
$now = $dt->format('Y-m-d H:i:s');

if ($_FILES['pre_image']['name']!='') {
    $sql = "UPDATE news SET title='" . $_POST['title'] . "',excerpt='" . $_POST['excerpt'] . "',content='"
        . $_POST['content'] . "',date='" . $now . "',pre_image='/images/news/" . $id . "/" . $imgname . "' WHERE id=" . $id . ";";
} else {
    $sql = "UPDATE news SET title='" . $_POST['title'] . "',excerpt='" . $_POST['excerpt'] . "',content='"
        . $_POST['content'] . "',date='" . $now . "' WHERE id=" . $id . ";";
}

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('更改成功');location.href='../src/be_pages_blog_story.php?id=" . $id . "';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
