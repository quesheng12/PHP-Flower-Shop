<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if (!isset($_SESSION['staff_id'])) {
    echo "<script>location.href='staff-login_back.php';</script>";
    exit();
}