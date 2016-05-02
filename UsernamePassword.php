<html>
<head>
<title>UsernamePassword</title>
<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
<?php
session_start();
$ExistsError=$_SESSION['ExistsError'];
$ErrorLog=$_SESSION['ErrorLog'];
if(empty($ErrorLog) && empty($ExistsError)){
$ExistsError=$ErrorLog="";
} else if (!empty($ErrorLog)){
$ExistsError= $_SESSION['ExistsError'];
$ErrorLog=$_SESSION['ErrorLog'];
}
?>
<div id="page-wrap" align="center">
	<!-- CENTER WHOLE DOC -->
	<div align="left">
	<a id="question" href="index.php"><button id="submit">&#10094; Back to Login</button></a></div> <!-- Back to login page link-->
	<img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo">
	<form action="UsernamePasswordPHP.php" enctype="multipart/form-data" method="POST"> <!-- Goes to UsernamePasswordPHP.php -->
		<!-- Username, password -->
		<div id="Username" align="center">
			<font id="error"><?php echo $ErrorLog;?></font><br><font id="error">
			<?php echo $ExistsError;?></font><br><font id="introduction">Username 
			(Bentley Email) </font><br>
			<input name="User" style="width: 270px; height: 42px;" type="text"><br>
		</div>
		<div id="Password" align="center">
			<font id="introduction">Password </font><br>
			<input name="Pass" style="width: 272px; height: 42px;" type="password"><br>
		</div>
		<div id="Password" align="center">
		<font id="introduction">Re-type Password </font><br>
		<input name="PassCheck" style="width: 272px; height: 42px;" type="password"><br>
		</div>
		<br>
		<input id="submit" name="submit" style="width: 130px; height: 44px" type="submit" value="Next &#10095;">
	</form>
</div>
</body>
</html>
