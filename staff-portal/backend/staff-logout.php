<?php
session_start();
unset($_SESSION['staff_id']);
echo "<script>location.href='../src/staff-login.php';</script>";