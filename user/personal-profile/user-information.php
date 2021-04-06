<?php
session_start();
include('../../utils/conn.php');

$username = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username=" . $username;

$user = mysqli_fetch_assoc(mysqli_query($conn, $sql));

echo '{
    "username": "' . $username . '",
    "header": "' . $user['header'] . '"}';
