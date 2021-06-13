<?php
//if (!isset($_POST['password'])) {
//    echo "<script>location.href='login.php';</script>";
//    exit;
//}
//连接数据库
include('../utils/conn.php');
$sql = 'SELECT value FROM dictionary WHERE input=\'' . $_POST['id'] . "'";
$id = mysqli_fetch_assoc(mysqli_query($conn, $sql))['value'];

$sql = 'UPDATE user SET password=' . $_POST['password'] . ' WHERE id=' . $id;

if ($conn->query($sql) == TRUE) {
    echo 100;
} else {
    echo 200;
}

mysqli_close($conn);