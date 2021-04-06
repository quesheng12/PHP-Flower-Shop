<?php
$conn = mysqli_connect("123.56.136.219", "root", "123456");

if (!$conn) {
    die("数据库链接失败!");
}

//2、设置操作的数据库===================================
mysqli_select_db($conn, "flowershop"); //设置操作的数据库


//3、设置操作编码=======================================
mysqli_query($conn, "set names utf8");
