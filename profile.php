<html>
<head>
<title>Find a Falcon</title>
<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
<?php
session_start();
  if(!isset($_SESSION['UserName'])){ 
      header("Location: index.html"); }
$name=$_GET['name'];

$servername = "frodo.bentley.edu";
$username = "cs460teamd";
$password = "cs460teamd";
$dbname = "cs460teamd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * FROM profile WHERE Username='$name'";
$result = $conn->query($sql1);
if($result->num_rows>0) {
while ($row = $result->fetch_assoc()) {
$Username = $row['Username'];
$Firstname = $row['Firstname'];
$Lastname = $row['Lastname'];
$YearOfGraduation = $row['YOGID'];
$ClassCode = $row['classCode'];
$Gender = $row['Gender'];
$Athlete = $row['Athlete'];
$Smoker = $row['Smoker'];
$Drinker = $row['Drinker'];
$StudyHours = $row['studyHours'];
$StudyLocation = $row['locationOfStudy'];
$SleepHours = $row['sleepHours'];
$SleeperType = $row['sleepType'];
$CleaningHabits = $row['clean'];
$FriendsOver= $row['friends'];
$OvernightGuests = $row['guest'];
$Roommate_friendsover = $row['roommateFriend'];
$Roommate_overnightguest = $row['roommateGuest'];
$Expectations = $row['expectations'];
$Sharing = $row['belongings'];
$AboutYou = $row['AboutYou'];
$Facebook = $row['Facebook'];
$LinkedIn = $row['LinkedIn'];
$Instagram = $row['Instagram'];
}
} else {
	echo '0 results';
	}

$sql2 = "SELECT location FROM locationform WHERE User='$Username'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT hobby FROM weekendhobby WHERE user='$Username'";
$result3 = $conn->query($sql3);

$conn->close();	
?>
<div id="page-wrap" align="center">
		<!-- CENTER WHOLE DOC -->

		<a href="homepage.php"><img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo"></a>
			<ul id="menu">
				<li><a href="homepage.php">HOME</a></li>
				<li><a href="UsersILike.php">MY LIKES</a></li>
				<li><a href="account.php">MY PROFILE</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
			<br>
			<table width="50%" align="center">
			<tr>
			<td colspan="3" align="center">
			<a href="message.php?name=<?php echo $Username?>"><button id="submit">Send Email</button><br></a>
			</td>
			</tr>
			<tr>
			<td style="width: 160px">
			<img src="uploadedPictures/<?php echo $name?>.jpg" alt="profile picture" width="150px" height="150px">
			</td>
			<td style="width: 322px">
			<font style="color:#0075BE; font-family:Ebrima; font-size:32px; font-weight:bold;"><?php echo $Firstname." ".$Lastname?></font><br>
			<font id="information">Class Code <?php echo $ClassCode?></font><br>
			<font id="information">Class of <?php echo $YearOfGraduation?></font><br>
			<?php if ($Facebook!==""){
			echo '<a href="'.$Facebook.'"><img src="images/facebook.png" alt="facebook" height="36" width="38"></a>';
			}?>
			<?php if ($Instagram!==""){
			echo '<a href="'.$Instagram.'"><img src="images/instagram.gif" alt="instagram" height="37" width="41"></a>';
			}?>
			<?php if ($LinkedIn!==""){
			echo '<a href="'.$LinkedIn.'"><img src="images/linkedin.png" alt="linkedin" height="41" width="43"></a>';
			}?></td>
			<td>
			<p id="aboutme"><?php echo $AboutYou?></p>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<br>
			<font style="font-family:Ebrima; font-size:16px;font-weight:bold">Preferred Locations:</font><br>
			<font style="font-family:Ebrima; font-size:14px"><?php foreach($result2 as $row){echo "-".$row['location']."<br>";}?></font>
			</td>
			<td colspan="1">
			<br>
			<font style="font-family:Ebrima; font-size:16px;font-weight:bold">Hobbies:</font><br>
			<font style="font-family:Ebrima; font-size:14px"><?php foreach($result3 as $row){echo "-".$row['hobby']."<br>";}?></font>
			</td>

			</tr>
			</table>
			<h1 style="font-family:Ebrima">Profile:</h1>
<img src="images/<?php echo $Gender?>%20icon.png" alt="gender">
<img src="images/<?php echo $Athlete?>%20icon.png" alt="athlete">
<img src="images/<?php echo $Smoker?>%20icon.png" alt="smoker">
<img src="images/<?php echo $Drinker?>%20icon.png" alt="drinker">
<br>
<img src="images/<?php echo $SleepHours?>%20icon.png" alt="sleephours">
<img src="images/<?php echo $StudyHours?>%20icon.png" alt="studyhours">
<img src="images/<?php echo $StudyLocation?>%20icon.png" alt="studylocation">
<br>
<img src="images/<?php echo $SleeperType?>%20icon.png" alt="sleepertype">
<img src="images/<?php echo $CleaningHabits?>%20icon.png" alt="cleaninghabits">
<img src="images/<?php echo $Expectations?>%20icon.png" alt="expectations">
<img src="images/<?php echo $Sharing?>%20icon.png" alt="sharing">

<table width="30%" align="center">
<tr>
<td align="center">
<br>
<font style="font-family:Ebrima; font-size:16px;font-weight:bold">I have friends over:</font><br>
<?php if($FriendsOver=="friends_sometimes"){
echo '<img src="images/sometimes icon.png" alt="friends_sometimes">';
}else if ($FriendsOver=="friends_notoften icon"){
echo '<img src="images/not often icon.png" alt="friends_notoften">';
} else {
echo '<img src="images/all the time icon.png" alt="friends_allthetime">';
}?>
</td>
<td align="center">
<br>
<font style="font-family:Ebrima; font-size:16px;font-weight:bold">I have overnight guests:</font><br>
<?php if($OvernightGuests=="overnight_sometimes"){
echo '<img src="images/sometimes icon.png" alt="overnight_sometimes">';
}else if($OvernightGuests=="overnight_notoften"){
echo '<img src="images/not often icon.png" alt="overnight_notoften">';
}else {
echo '<img src="images/all the time icon.png" alt="overnight_allthetime">';
}?>
</td></tr>
<tr>
<td align="center">
<br>
<font style="font-family:Ebrima; font-size:16px;font-weight:bold">I prefer my roommate<br>have friends over:</font><br>
<?php if($Roommate_friendsover=="roommatefriends_sometimes"){
echo '<img src="images/sometimes icon.png" alt="roomatefriends_sometimes">';
}else if($Roommate_friendsover=="roommatefriends_notoften"){
echo '<img src="images/once%20in%20awhile%20icon.png" alt="roommateovernight_notoften">';
}else {
echo '<img src="images/all the time icon.png" alt="roommateovernight_allthetime">';
}?>
</td>
<td align="center">
<br>
<font style="font-family:Ebrima; font-size:16px;font-weight:bold">I prefer my roommate<br>has overnight guests:</font><br>
<?php if($Roommate_overnightguest=="roommateovernight_sometimes"){
echo '<img src="images/sometimes icon.png" alt="roommate_overnightguest_sometimes">';
}else if($Roommate_overnightguest=="roommateovernight_notoften"){
echo '<img src="images/once%20in%20awhile%20icon.png" alt="roommateovernight_notoften">';
}else {
echo '<img src="images/all the time icon.png" alt="roommateovernight_allthetime">';
}
?>
</td>
</tr>
</table>
</div>
</body>
</html>