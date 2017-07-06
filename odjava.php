<?php


session_start();
unset($_SESSION['email']);
unset($_SESSION['potvrda']);
unset($_SESSION['lozinka']);
session_destroy();
header("location:../index.php")
?>