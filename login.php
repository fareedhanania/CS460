<html>
<head>
<title>Find a Falcon</title>
<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
<?php
session_start();
$LoginErr=$_SESSION['Login'];
?>
<!-- Centers whole page -->
<div id="page-wrap" align="center">
<!-- Logo -->
	<img align="middle" alt="LOGO" src="images/Find a Falcon FINAL logo.png" title="Logo">
	<table>
		<tr>
			<th colspan="3" style="padding-left: 5px; padding-top: 80px;" valign="top">
			<p style="width: 415px; word-wrap: normal; text-align: center; valign: top; font-family: Ebrima; font-size: 20px">
			Welcome to Find A Falcon! This application is designed for Bentley University 
			students and recent graduates who are looking for a roommate. After 
			filling out your profile preferences you will be matched with a compatible 
			roommate in no time! Check out our testimonial video below!</p>
			</th>
			<th colspan="2" valign="top"><img src="images/Divider.png" alt="Divider graphic"></th>
			<th align="left" colspan="3" style="padding: 30px">
			<form action="loginPHP.php" method="post" style="width: 300px; font-family: Verdana">
				<div style="height: 50px; padding-top: 10px">
				<font id="error" align="center"><?php echo $LoginErr?></font>
					<label for="email"><br>
					<input maxlength="24" name="email" placeholder="Username (Bentley Email)" size="40" style="height: 34px; font-size: 20px; width: 295px;" type="text"><br>
					</label></div>
				<div style="height: 50px">
					<label for="Password"><br>
					<input name="Password" placeholder="Password" size="40" style="height: 34px; font-size: 20px; width: 295px;" type="password"><br>
					</label></div>
				<br>
				<div align="center" style="height: 50px">
					<input id="submit" name="submit" type="submit" value="Login">
				</div>
				<div align="center">
					<p>OR</p>
				</div>
			</form>
			<div align="center" style="height: 50px;">
				<label for="createaccountbutton">
				<a href="create_account_start.php"> <!-- On click go to create_account_start-->
				<button id="submit" type="button">Create Account</button></a>
				</label></div>
			</th>
		</tr>
	</table>
</div>
</body>
</html>
