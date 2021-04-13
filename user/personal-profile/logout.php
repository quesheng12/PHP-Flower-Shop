<?php
session_start();
unset($_SESSION['username']);
echo "<script>alert('Logout Successfully!');location.href='../login-demo.html';</script>";