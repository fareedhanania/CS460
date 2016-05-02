<html>
<head>
<link rel="stylesheet" type="text/css" href="final.css">
<title>AboutUs</title>
</head>
<body>

<?php
session_start();
  if(!isset($_SESSION['UserName']) && !isset($_SERVER['login'])){ 
      header("Location: index.php"); }
$variable = $_SESSION['UserName']; 
?>

<div id="page-wrap" align="center">
	<!-- CENTER WHOLE DOC -->
	<a href="homepage.php"><img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo"></a>
	<ul id="menu">
		<li><a href="homepage.php">HOME</a></li>
		<li><a href="UsersILike.php">MY LIKES</a></li>
		<li><a href="account.php" >MY PROFILE</a></li>
		<li><a href="aboutus.php" style="color: #4E79CB">ABOUT US </a></li>
		<li><a href="logout.php">LOGOUT</a></li>
	</ul>
	
	<br>
	
	<a href="horror_stories.php"><button id="submit" >Roommate Horror Stories  &#10097;</button></a>
	<br><br>
	<a href="success_stories.php"><button id="submit" onclick="sucess_stories.php">Our Success Stories &#10097;</button></a>
	<br><br>
	
	<table width="50%" align cellspacing="2px">
	<tr>
	<td>
	<img src="images/Julio.jpg" alt="image of Julio" height="130" width="130">
	</td>
	<td style="width: 240px">
	<font id="name">Julio Tejeda</font><br>
	<font id="descrip">Project Manager<br>
	Class of 2016</font>
	</td>
		<td>
	<img src="images/Melanie.jpg" alt="image of Melanie" height="130" width="130">
	</td>
	<td>
	<font id="name">Melanie Huynh</font><br>
	<font id="descrip">Document Manager<br>
	Class of 2016</font>
	</td>
	</tr>
	
		<tr>
	<td>
	<img src="images/Emily.jpg" alt="image of Emily" height="130" width="130">
	</td>
	<td style="width: 240px">
	<font id="name">Emily Thompson</font><br>
	<font id="descrip">Lead Analyst<br>
	Class of 2016</font>
	</td>
		<td>
	<img src="images/Rishi.jpg" alt="image of Rishi" height="130" width="130">
	</td>
	<td>
	<font id="name">Rishi Patel</font><br>
	<font id="descrip">Web Analyst<br>
	Class of 2017</font>
	</td>
</tr>
		<tr>
	<td>
	<img src="images/Freddy.jpg" alt="image of Freddy" height="130" width="130">
	</td>
	<td style="width: 240px">
		<font id="name">Freddy Hanania</font><br>
	<font id="descrip">Database Analyst/QA Manager<br>
	Class of 2016</font>
	</td>
		<td>
	<img src="images/Khaled.jpg" alt="image of Khaled" height="130" width="130">
	</td>
	<td style="height: 95px">
	<font id="name">Khaled Guliad</font><br>
	<font id="descrip">Database Analyst<br>
	Class of 2016</font>
	</td>
</tr>
<tr>
	<td>
	<img src="images/Borui.jpg" alt="image of Borui" height="130" width="130">
	</td>
	<td style="width: 240px">
	<font id="name">Borui Yang</font><br>
	<font id="descrip">Web Analyst<br>
	Class of 2016</font>
	</td>
</tr>

	
	</table>
	</div>

</body>


</html>
