<?php

session_start();

// define variables and set to empty values


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
}

// Gender Values
$GenderChoice="";
for($x=0; $x<count($Gender); $x++){
if($x==0){
$GenderChoice='"'.$Gender[$x].'"';
} else if ($x>0){
$GenderChoice=$GenderChoice.',"'.$Gender[$x].'"';
}
}


// Year of Graduation Values
$Year="";
for($x=0; $x<count($YearOfGraduation); $x++){
if($x==0){
$Year='"'.$YearOfGraduation[$x].'"';
} else if ($x>0){
$Year=$Year.',"'.$YearOfGraduation[$x].'"';
}
}

// Cllass Code Values
$Class="";
for($x=0; $x<count($ClassCode); $x++){
if($x==0){
$Class='"'.$ClassCode[$x].'"';
} else if ($x>0){
$Class=$Class.',"'.$ClassCode[$x].'"';
}
}

// Location Values
$LocationChoice="";
for($x=0; $x<count($Location); $x++){
if($x==0){
$LocationChoice='"'.$Location[$x].'"';
} else if ($x>0){
$LocationChoice=$LocationChoice.',"'.$Location[$x].'"';
}
}

// Athlete Values
$AthleteChoice="";
for($x=0; $x<count($Athlete); $x++){
if($x==0){
$AthleteChoice='"'.$Athlete[$x].'"';
} else if ($x>0){
$AthleteChoice=$AthleteChoice.',"'.$Athlete[$x].'"';
}
}

// Smoking Values
$Smoker="";
for($x=0; $x<count($SmokingHabits); $x++){
if($x==0){
$Smoker='"'.$SmokingHabits[$x].'"';
} else if ($x>0){
$Smoker=$Smoker.',"'.$SmokingHabits[$x].'"';
}
}

// Drinking Values
$Drinker="";
for($x=0; $x<count($DrinkingHabits); $x++){
if($x==0){
$Drinker='"'.$DrinkingHabits[$x].'"';
} else if ($x>0){
$Drinker=$Drinker.',"'.$DrinkingHabits[$x].'"';
}
}

// Cleaning Values
$Clean="";
for($x=0; $x<count($CleaningHabits); $x++){
if($x==0){
$Clean='"'.$CleaningHabits[$x].'"';
} else if ($x>0){
$Clean=$Clean.',"'.$CleaningHabits[$x].'"';
}
}

// Studying Values
$Study="";
for($x=0; $x<count($StudyHabits); $x++){
if($x==0){
$Study='"'.$StudyHabits[$x].'"';
} else if ($x>0){
$Study=$Study.',"'.$StudyHabits[$x].'"';
}
}


//echo 'SELECT Firstname FROM profile WHERE Gender IN ('.$GenderChoice.')';
//$sql2 = 'SELECT Firstname FROM profile WHERE Gender IN ('.$GenderChoice.')';


echo 'SELECT * FROM profile WHERE GENDER IN ('.$GenderChoice.') AND YOGID IN ('.$Year.') AND classCodeID IN ('.$Class.') AND Athlete IN ('.$AthleteChoice.') AND Smoker IN ('.$Smoker.') AND Drinker IN ('.$Drinker.') AND clean IN ('.$Clean.') AND studyHours IN ('.$Study.')';
$sql1 = 'SELECT * FROM profile WHERE GENDER IN ('.$GenderChoice.') AND YOGID IN ('.$Year.') AND classCodeID IN ('.$Class.') AND Athlete IN ('.$AthleteChoice.') AND Smoker IN ('.$Smoker.') AND Drinker IN ('.$Drinker.') AND clean IN ('.$Clean.') AND studyHours IN ('.$Study.')';
$result=$conn->query($sql1);

if($result->num_rows>0) {
foreach($result as $row){
$Username = $row['Username'];
$FirstName = $row['Firstname'];
$LastName = $row['Lastname'];
$YearOfGraduation = $row['YOGID'];
$ClassCode = $row['classCodeId'];
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

echo '<table width="85px" align="center"><tr><td align="center" width="1px"><img src="images/openheart.png" alt="heart"></td><td width="10px"><font face="Ebrima">Profile Picture here!</font></td><td width="5px">';
echo '<font id=name>'.$FirstName.' '.$LastName.'</font><br>';
echo '<font id="information"> Class of '.$YearOfGraduation.'<br>'.$Smoker.'<br>'.$Drinker.'<br>'.$Athlete.'</font>';
echo '</td><td width="50px">';
echo '<font id="aboutme">'.$AboutYou.'</font>';
echo '</td><td width="20px" align="center">';
echo'<a href="'.$Facebook.'">';
echo '<img src="images/facebook.png" alt="facebook" height="36" width="38"></a><br><a href="'.$Instagram.'">';
echo '<img src="images/instagram.gif" alt="instagram" height="37" width="41"></a><br>.<a href="'.$LinkedIn.'">';
echo '<img src="images/linkedin.png" alt="Linkedin" height="41" width="43"></a><br></td></tr></table>';
}
}else echo '0 results';

$conn->close();
?>