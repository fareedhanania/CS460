<html>
<head>
<title>CreateAccount</title>
</head>
<body>
<?php
session_start();
$_SESSION['AccountErr']="";
$_SESSION['ExistsError']="";
header("location:UsernamePassword.php");
?>
</body>
</html>

