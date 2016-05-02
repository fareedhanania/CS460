<html>
<head>
<title>PictureUpload</title>
<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
<?php
session_start();
$variable=$_SESSION['UserName'];
?>
<div id="form" align="center">
	<img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo">
	<br><font id="welcome">Welcome <?php echo $variable?>!</font>
	<br><br><font id="introduction">Upload a profile picture! Square pictures work best.</font>
<form action="changePicturePHP.php" method="POST" enctype="multipart/form-data">
    <font face="Ebrima" >Select image to upload:</font>
    <input type="file" name="profilePicture" id="profilePicture"><br><br>   
    <input type="submit" id="submit" value="Upload Image" name="submit" style="width: 140px; height: 44px">
</form>
<a href="create_account.php"><button id="submit" style="width: 140px">Skip &#10095; </button></a>
</div>
</body>
</html>