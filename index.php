<?php
session_start();
$_SESSION['Login']="";
header("location:login.php");
?>