<html>

<head>
<link rel="stylesheet" type="text/css" href="final.css">
<title>Matches</title>
	<script type="text/javascript" src="js/homepage.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
			$(".clickimage").click(function(){
			var imageId =$(this).attr('id');
			var imagesrc =$(this).attr('src');
			$.ajax({
				url:'heart.php',
				data:{imageId:imageId,imagesrc:imagesrc}, 
				success:function(data){
					$("#likestuff").html(data);
				} 
			});
			
		});
	});
	</script>

</head>
<body>
<div id="page-wrap" align="center">
	<!-- CENTER WHOLE DOC -->
	<a href="homepage.php"><img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo"></a>
	<ul id="menu">
		<li><a href="homepage.php">HOME</a></li>
		<li><a href="UsersILike.php"style="color: #4E79CB">MY LIKES</a></li>
		<li><a href="account.php" >MY PROFILE</a></li>
		<li><a href="aboutus.php">ABOUT</a></li>
		<li><a href="logout.php">LOGOUT</a></li>
	</ul>
	<br>
	
	<ul id="tabs" style="height: 16px">
	<li id="item"><a id="tab"href="UsersILike.php">USERS I LIKE</a></li>
	<li id="item"><a id="tab" href="UsersWhoLikeMe.php">USERS WHO LIKE ME</a></li>
	<li id="selected"><a id ="tab" href="Matches.php">MATCHES</a></li>
	</ul>	
	<br>
</div>

<?php 

session_start();
  if(!isset($_SESSION['UserName']) && !isset($_SERVER['login'])){ 
      header("Location: index.php"); }
$variable = $_SESSION['UserName']; 

$variable = $_SESSION['UserName'];

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

//$variable = $_SESSION['UserName'];
$sql1= "Select otherUser From like_tbl where username='".$variable."'";
$result78= $conn->query($sql1);
$UserArr=array();

if($result78->num_rows>0){
foreach($result78 as $row){
array_push($UserArr,$row['otherUser']);
}}

$sql="Select username, otherUser From like_tbl where username='".$variable."' AND otherUser in (Select username from like_tbl Where otherUser='".$variable."')";
$result=$conn->query($sql);
 if ($result->num_rows>0){
 while ($row=$result->fetch_assoc()){
 $Username=$row['username'];
 $otherUser=$row['otherUser'];

$sql2 = "Select * from profile WHERE Username='".$otherUser."'";
$result2 = $conn->query($sql2);

// Save data from table into variables
if($result2->num_rows>0) {
foreach($result2 as $row){
$Username = $row['Username'];
$FirstName = $row['Firstname'];
$LastName = $row['Lastname'];
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

if (in_array($Username, $UserArr)){
 $heart="images/redheart.png";
 }  else {
 $heart="images/openheart.png";
 }

// Print out table format for data
echo '<table id="results" align="center" width="60%"><tr id="result"><td align="center" width="1px"><img id='.$Username.' onclick="changeImage()" src="'.$heart.'" alt="heart" class="clickimage"></td><td width="100px"><font face="Ebrima">Profile Picture here!</font></td><td width="100px">';
echo '<a href="profile.php?name='.$Username.'" id="name">'.$FirstName.' '.$LastName.'</a><br>';
echo '<font id="information"> Class of '.$YearOfGraduation.'<br>'.$Smoker.'<br>'.$Drinker.'<br>'.$Athlete.'</font>';
echo '</td><td width="200px">';
echo '<font id="aboutme">'.$AboutYou.'</font>';
echo '</td><td width="100px" align="center">';

// IF no social media links entered, do not show icons
if ($Facebook!=""){
echo'<a href="'.$Facebook.'">';
echo '<img src="images/facebook.png" alt="facebook" height="36" width="38"></a><br>';
}
if ($Instagram!=""){
echo '<a href="'.$Instagram.'">';
}
if ($LinkedIn!=""){
echo '<img src="images/instagram.gif" alt="instagram" height="37" width="41"></a><br>.<a href="'.$LinkedIn.'"><img src="images/linkedin.png" alt="Linkedin" height="41" width="43"></a><br>';
}
echo '</td></tr></table>';
}}else echo '<font face="Ebrima">No results, please try another search.</font>';

}}
$conn->close();

?>

<script type="text/javascript">function changeImage() {
	var name = changeImage.caller.arguments[0].target.id;
	var image = document.getElementById(name);
    if (image.src.match("images/openheart.png")) {
        image.src = "images/redheart.png";
        $sql
    } else {
        image.src = "images/openheart.png";
    }
}
</script>
<p id="likestuff"></p>
</body>
</html>