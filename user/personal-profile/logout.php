<?php
session_start();
unset($_SESSION['username']);
echo "<script>location.href='../login-demo.html';</script>";