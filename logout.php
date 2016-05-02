<?php 
session_start();
unset($_SESSION['Username']);
unset($_SESSION['Login']);
session_destroy();
header("location:index.php");
?>