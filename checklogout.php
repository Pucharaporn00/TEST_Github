<?php 
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['status']);

header("location:login.php");
?>