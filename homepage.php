<html>
<head>
<title>Find a Falcon</title>
<link rel="stylesheet" type="text/css" href="final.css">
<style type="text/css">
.dropdown-check-list {
	display: inline-block;
}
.dropdown-check-list .anchor {
	position: relative;
	cursor: pointer;
	display: inline-block;
	padding: 5px 50px 5px 10px;
	border: 1px solid #ccc;
}
.dropdown-check-list .anchor:after {
	position: absolute;
	content: "";
	border-left: 2px solid black;
	border-top: 2px solid black;
	padding: 5px;
	right: 10px;
	top: 20%;
	-moz-transform: rotate(-135deg);
	-ms-transform: rotate(-135deg);
	-o-transform: rotate(-135deg);
	-webkit-transform: rotate(-135deg);
	transform: rotate(-135deg);
}
.dropdown-check-list .anchor:active:after {
	right: 8px;
	top: 21%;
}
.dropdown-check-list ul.items {
	padding: 2px;
	display: none;
	margin: 0;
	border-top: none;
}
.dropdown-check-list ul.items li {
	list-style: none;
}
.dropdown-check-list.visible .anchor {
	color: white;
	font-weight:bold;
}
.dropdown-check-list.visible .items {
	display: block;
	color:white;
	font-weight:normal;
}
</style>

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


<?php 
session_start(); 
  if(!isset($_SESSION['UserName']) && !isset($_SERVER['login'])){ 
      header("Location: index.php"); }
$variable = $_SESSION['UserName']; 
?>

<div id="page-wrap" align="center">		
		<img src="images/Find a Falcon FINAL logo.png" align="middle" title="Logo"
			alt="LOGO"  >
			<ul id="menu">
				<li><a href="homepage.php"style="color:#0075BE">HOME</a></li>
				<li><a href="UsersILike.php">MY LIKES</a></li>
				<li><a href="account.php" >MY PROFILE</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
			<br >
			
		
			
<!-- Start of search form (dropdowns) HTML FOR DROPDOWNS -->
		
<form action="homepage.php" method="post">
<table id="filters" align="center" style="width: 65%">
<tr align="center">

<!-- Gender td filter -->
<td align="center">
<div id="Gender" class="dropdown-check-list" tabindex="100"align="left">
	<span class="anchor">Gender</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="Male"name="gender[]"  checked="checked">Male 
		 </li>
		<li>
		<input type="checkbox" value="Female"name="gender[]" checked="checked" >Female</li>
		<li>
		<input type="checkbox" value="Other"name="gender[]"  checked="checked">Other 
		 </li>
	</ul>
</div>
</td>

<!-- YOG td filter -->
<td align="center">
<div id="YOG" class="dropdown-check-list" tabindex="100"align="left">
	<span class="anchor">Year of Graduation</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="2016" name="yog[]" checked="checked">2016 
		 </li>
		<li>
		<input type="checkbox" value="2017" name="yog[]"checked="checked" >2017</li>
		<li>
		<input type="checkbox" value="2018" name="yog[]" checked="checked" >2018 
		 </li>
		<li>
		<input type="checkbox" value="2019" name="yog[]" checked="checked" >2019 
		 </li>
		<li>
		<input type="checkbox" value="Graduate" name="yog[]" checked="checked" >Graduate 
		 </li>
	</ul>
</div></td>

<!-- Class Code td filter -->
<td align="center">
<div id="ClassCode" class="dropdown-check-list" tabindex="100"align="left">
	<span class="anchor">Class Code</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="1" name="class_code[]"checked="checked"  > 1</li>
		<li>
		<input type="checkbox" value="2" name="class_code[]"checked="checked"  >2</li>
		<li>
		<input type="checkbox" value="3" name="class_code[]" checked="checked" >3 
		 </li>
		<li>
		<input type="checkbox" value="4" name="class_code[]"  checked="checked">4 
		 </li>
		<li>
		<input type="checkbox" value="5" name="class_code[]" checked="checked" >5 
		 </li>
		<li>
		<input type="checkbox" value="6" name="class_code[]" checked="checked" >6 
		 </li>
		<li>
		<input type="checkbox" value="7" name="class_code[]" checked="checked" >7</li>
		<li>
		<input type="checkbox" value="8" name="class_code[]"  checked="checked">8</li>
	</ul>
</div></td>
<!-- Location td filter -->
<td align="center">
<div id="Location" class="dropdown-check-list" tabindex="100" align="left">
	<span class="anchor">Location</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="Boylston" name="my_location[]" checked="checked" >Boylston 
		 </li>
		<li>
		<input type="checkbox" value="Copley North"name="my_location[]" checked="checked" >Copley North</li>
		<li>
		<input type="checkbox" value="Copley South"name="my_location[]" checked="checked" >Copley South 
		 </li>
		<li>
		<input type="checkbox" value="Falcone North"name="my_location[]"  checked="checked">Falcone North 
		 </li>
		<li>
		<input type="checkbox" value="Falcone East"name="my_location[]" checked="checked" >Falcone East 
		 </li>
		<li>
		<input type="checkbox" value="Falcone West"name="my_location[]" checked="checked" >Falcone West</li>
		<li>
		<input type="checkbox" value="Fenway"name="my_location[]" checked="checked" >Fenway</li>
		<li>
		<input type="checkbox" value="Forest"name="my_location[]" checked="checked" >Forest</li>
		<li>
		<input type="checkbox" value="Kresge"name="my_location[]" checked="checked" >Kresge</li>
		<li>
		<input type="checkbox" value="Miller"name="my_location[]"checked="checked"  >Miller</li>
		<li>
		<input type="checkbox" value="North Campus"name="my_location[]" checked="checked" >North Campus</li>
		<li>
		<input type="checkbox" value="Rhodes"name="my_location[]"checked="checked"  >Rhodes</li>
		<li>
		<input type="checkbox" value="Slade"name="my_location[]"checked="checked"  >Slade</li>
		<li>
		<input type="checkbox" value="Trees"name="my_location[]" checked="checked" >Trees</li>
	</ul>
</div></td>

<!-- Athlete td filter -->
<td align="center">
<div id="Athlete" class="dropdown-check-list" tabindex="100" align="left">
	<span class="anchor">Athlete</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="Athlete"name="athlete[]"  checked="checked">Athlete 
		 </li>
		<li>
		<input type="checkbox" value="Non-Athlete"name="athlete[]"  checked="checked">Non-Athlete</li>
	</ul>
</div>
</td>
</tr>

<!-- CleaningHabits td filter -->
<tr align="center">
<td align="center">
<div id="CleaningHabits" class="dropdown-check-list" tabindex="100" align="left">
	<span class="anchor">Cleaning Habits</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="cleanmachine"name="cleaningHabits[]" checked="checked" >Clean Machine 
		 </li>
		<li>
		<input type="checkbox" value="helpout"name="cleaningHabits[]"  checked="checked">Helps Out</li>
		<li>
		<input type="checkbox" value="messy"name="cleaningHabits[]"  checked="checked">Pretty Messy 
		 </li>
	</ul>
</div></td>

<!-- StudyHabits td filter -->
<td align="center">
<div id="StudyHabits" class="dropdown-check-list" tabindex="100" align="left">
	<span class="anchor">Study Habits</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="barelystudy"name="studyHabits[]"  checked="checked">Barely Studies 
		 </li>
		<li>
		<input type="checkbox" value="5to10hours"name="studyHabits[]"  checked="checked">5 to 10 hours a week 
		 </li>
		<li>
		<input type="checkbox" value="10hours"name="studyHabits[]" checked="checked" >More than 10 hours a week</li>
	</ul>
</div></td>

<!-- DrinkingHabits td filter -->
<td align="center">
<div id="DrinkingHabits" class="dropdown-check-list" tabindex="100" align="left">
	<span class="anchor">Drinking Habits</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="Party Drinker"name="drinkingHabits[]"  checked="checked">Party Drinker 
		 </li>
		<li>
		<input type="checkbox" value="Social Drinker"name="drinkingHabits[]"  checked="checked">Social Drinker</li>
		<li>
		<input type="checkbox" value="Non-Drinker"name="drinkingHabits[]"  checked="checked">Non-Drinker 
		 </li>
	</ul>
</div></td>

<!-- SmokingHabits td filter -->
<td align="center">
<div id="SmokingHabits" class="dropdown-check-list" tabindex="100" align="left">
	<span class="anchor">Smoking Habits</span>
	<ul class="items">
		<li>
		<input type="checkbox" value="Smoker"name="smokingHabits[]"  checked="checked">Smoker 
		 </li>
		<li>
		<input type="checkbox" value="Casual Smoker"name="smokingHabits[]" checked="checked" >Casual Smoker</li>
		<li>
		<input type="checkbox" value="Non-Smoker"name="smokingHabits[]" checked="checked" >Non-Smoker 
		 </li>
	</ul>
</div>
</td>

<!-- Search button -->
<td id="searchbox">
<button id="search" type="submit" name="submit" >SEARCH</button>

<!-- <img src="images/search.png" alt="search icon" height="30" width="25"> ** not sure if we want to keep** -->



</td>
</tr>
</table>
</form>  <!-- End of HTML form for dropdowns -->

		

<br >

		

<script type="text/javascript"> // JAVASCRIPT FOR DROPDOWNS
//<!-- Gender List -->
        var GenderList = document.getElementById('Gender');
		GenderList.getElementsByClassName('anchor')[0].onclick = function (evt) {
		if (GenderList.classList.contains('visible'))
			GenderList.classList.remove('visible');
		else
			GenderList.classList.add('visible');
        }
        
//<!-- YOG List -->
		var YOGList = document.getElementById('YOG');
		YOGList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (YOGList.classList.contains('visible'))
				YOGList.classList.remove('visible');
            else
            	YOGList.classList.add('visible');
        }
        
//<!-- ClassCode List -->
		var ClassCodeList = document.getElementById('ClassCode');
		ClassCodeList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (ClassCodeList.classList.contains('visible'))
				ClassCodeList.classList.remove('visible');
            else
                ClassCodeList.classList.add('visible');
        }
        
//<!-- Location List -->
		var LocationList = document.getElementById('Location');
		LocationList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (LocationList.classList.contains('visible'))
                LocationList.classList.remove('visible');
            else
                LocationList.classList.add('visible');
        }
        
//<!-- Athlete List -->
		var AthleteList = document.getElementById('Athlete');
		AthleteList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (AthleteList.classList.contains('visible'))
                AthleteList.classList.remove('visible');
            else
                AthleteList.classList.add('visible');
        }
        
//<!-- Cleaning List -->
		var CleaningList = document.getElementById('CleaningHabits');
		CleaningList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (CleaningList.classList.contains('visible'))
                CleaningList.classList.remove('visible');
            else
                CleaningList.classList.add('visible');
        }
//<!-- Study List -->
		var StudyList = document.getElementById('StudyHabits');
		StudyList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (StudyList.classList.contains('visible'))
                StudyList.classList.remove('visible');
            else
                StudyList.classList.add('visible');
        }
//<!-- Drinking List -->        
		var DrinkingList = document.getElementById('DrinkingHabits');
		DrinkingList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (DrinkingList.classList.contains('visible'))
                DrinkingList.classList.remove('visible');
            else
                DrinkingList.classList.add('visible');
        }
//<!-- Smoking List -->        
		var SmokingList = document.getElementById('SmokingHabits');
		SmokingList.getElementsByClassName('anchor')[0].onclick = function (evt) {
			if (SmokingList.classList.contains('visible'))
                SmokingList.classList.remove('visible');
            else
                SmokingList.classList.add('visible');
        }

    </script> <!-- End of Javascript for dropdowns -->


<?php // Start of PHP for data

// Connection credentials
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

// IF FORM IS POSTED
if(isset($_POST["submit"])){
$Gender = $_POST['gender'];
$YearOfGraduation = $_POST['yog'];
$ClassCode = $_POST['class_code'];
$Location = $_POST['my_location'];
$Athlete = $_POST['athlete'];
$SmokingHabits = $_POST['smokingHabits'];
$DrinkingHabits = $_POST['drinkingHabits'];
$CleaningHabits = $_POST['cleaningHabits'];
$StudyHabits = $_POST['studyHabits'];

// Gender Values
$GenderChoice="";
for($x=0; $x<count($Gender); $x++){
if($x==0){
$GenderChoice='"'.$Gender[$x].'"';
} else if ($x>0){
$GenderChoice=$GenderChoice.',"'.$Gender[$x].'"';
}}

// Year of Graduation Values
$Year="";
for($x=0; $x<count($YearOfGraduation); $x++){
if($x==0){
$Year='"'.$YearOfGraduation[$x].'"';
} else if ($x>0){
$Year=$Year.',"'.$YearOfGraduation[$x].'"';
}}

// Class Code Values
$Class="";
for($x=0; $x<count($ClassCode); $x++){
if($x==0){
$Class='"'.$ClassCode[$x].'"';
} else if ($x>0){
$Class=$Class.',"'.$ClassCode[$x].'"';
}}

// Location Values
$LocationChoice="";
for($x=0; $x<count($Location); $x++){
if($x==0){
$LocationChoice='"'.$Location[$x].'"';
} else if ($x>0){
$LocationChoice=$LocationChoice.',"'.$Location[$x].'"';
}}

// Athlete Values
$AthleteChoice="";
for($x=0; $x<count($Athlete); $x++){
if($x==0){
$AthleteChoice='"'.$Athlete[$x].'"';
} else if ($x>0){
$AthleteChoice=$AthleteChoice.',"'.$Athlete[$x].'"';
}}

// Smoking Values
$Smoker="";
for($x=0; $x<count($SmokingHabits); $x++){
if($x==0){
$Smoker='"'.$SmokingHabits[$x].'"';
} else if ($x>0){
$Smoker=$Smoker.',"'.$SmokingHabits[$x].'"';
}}

// Drinking Values
$Drinker="";
for($x=0; $x<count($DrinkingHabits); $x++){
if($x==0){
$Drinker='"'.$DrinkingHabits[$x].'"';
} else if ($x>0){
$Drinker=$Drinker.',"'.$DrinkingHabits[$x].'"';
}}

// Cleaning Values
$Clean="";
for($x=0; $x<count($CleaningHabits); $x++){
if($x==0){
$Clean='"'.$CleaningHabits[$x].'"';
} else if ($x>0){
$Clean=$Clean.',"'.$CleaningHabits[$x].'"';
}}

// Studying Values
$Study="";
for($x=0; $x<count($StudyHabits); $x++){
if($x==0){
$Study='"'.$StudyHabits[$x].'"';
} else if ($x>0){
$Study=$Study.',"'.$StudyHabits[$x].'"';
}}

// SQL STATEMENT WHEN FORM IS POSTED
$sql1 = 'SELECT profile.* FROM (profile) INNER JOIN (SELECT User FROM locationform Where location IN('.$LocationChoice.')) locationform ON locationform.User = profile.Username WHERE GENDER IN ('.$GenderChoice.') AND YOGID IN ('.$Year.') AND ClassCode IN ('.$Class.') AND Athlete IN ('.$AthleteChoice.') AND Smoker IN ('.$Smoker.') AND Drinker IN ('.$Drinker.') AND clean IN ('.$Clean.') AND studyHours IN ('.$Study.')';
//echo 'SELECT profile.* FROM (profile) INNER JOIN (SELECT User FROM locationform Where location IN('.$LocationChoice.') GROUP BY User) locationform ON locationform.User = profile.Username WHERE GENDER IN ('.$GenderChoice.') AND YOGID IN ('.$Year.') AND classCodeID IN ('.$Class.') AND Athlete IN ('.$AthleteChoice.') AND Smoker IN ('.$Smoker.') AND Drinker IN ('.$Drinker.') AND clean IN ('.$Clean.') AND studyHours IN ('.$Study.')';
$result = $conn->query($sql1);

} // end of is form posted

// IF FORM HAS NOT BEEN POSTED! i.e When page loads for first time
else {
$sql1 = 'Select * from profile';
//echo 'Select * from profile';
$result = $conn->query($sql1);
}

// Save data from table into variables
$sql78= "Select otherUser From like_tbl where username='".$variable."'";
$result78= $conn->query($sql78);
$otherUser=array();

if($result78->num_rows>0){
foreach($result78 as $row){
array_push($otherUser,$row['otherUser']);
}}

if($result->num_rows>0) {
foreach($result as $row){
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

if (in_array($Username, $otherUser)){
 $heart="images/redheart.png";
 }  else {
 $heart="images/openheart.png";
 }
  
// Print out table format for data
echo '<table width="65%" align="center"><tr ="result" height="120px"><td align="center" width="1px"><img id="'.$Username.'" onclick="changeImage()" src="'.$heart.'" alt="heart" class="clickimage"></td><td width="100px"><font face="Ebrima">Profile Picture here!</font></td><td width="100px">';
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
echo '<img src="images/instagram.gif" alt="instagram" height="37" width="41"></a><br><a href="'.$LinkedIn.'"><img src="images/linkedin.png" alt="Linkedin" height="41" width="43"></a><br>';
}
echo '</td></tr></table>';
}
}

$conn->close();  // close connection
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
</div>
<p id="likestuff"></p>
</body>
</html>