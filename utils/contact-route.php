<?php
session_start();
if (!isset($_SESSION['uid'])) {
//    header('/user/login.php');
    echo "<script>location.href='/user/login.php'</script>";
} else {
//    header("http://42.193.97.82/index.php/index/index/index?fromid=" . $_SESSION['uid'] . "&toid=101");
    echo "<script>location.href='http://42.193.97.82/index.php/index/index/index?fromid=" . $_SESSION['uid'] . "&toid=101</script>";
}