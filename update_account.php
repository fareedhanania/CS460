<?php
session_start();

// define Username for this session
$variable = $_SESSION['UserName'];

// define variables that have errors and set Errors
$Err=""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['User'])) {
    $Err = "Invalid Username";
}else $Username = $_POST['User'];
if(empty($_POST['Pass'])){
  	$Err = $Err."<br> Invalid Password.";
} else $Password = $_POST['Pass'];
if(empty($_POST['Text1'])){
  	$Err = $Err."<br> Invalid Firstname.";
} else $Firstname = $_POST['Text1'];
if(empty($_POST['Text2'])){
  	$Err = $Err."<br> Invalid Lastname.";
} else $Lastname = $_POST['Text2'];
if (empty($_POST['my_location'])){
$Err = $Err."<br> Invalid location.";
}else $Location= $_POST['my_location'];
if(empty($_POST['gender'])){
  	$Err = $Err."<br> Invalid gender choice.";
} else $Gender = $_POST['gender'];
if(empty($_POST['athlete'])){
  	$Err = $Err."<br> Invalid athlete choice.";
}else $Athlete = $_POST['athlete'];
if(empty($_POST['smoker'])){
  	$Err = $Err."<br> Invalid smoker choice.";
} else $Smoker = $_POST['smoker'];
if(empty($_POST['drinker'])){
  	$Err = $Err."<br> Invalid drinker choice.";
} else $Drinker = $_POST['drinker'];
if(empty($_POST['studyhours'])){
  	$Err = $Err."<br> Invalid study hours choice.";
} else $StudyHours = $_POST['studyhours'];
if(empty($_POST['studylocation'])){
  	$Err = $Err."<br> Invalid study location choice.";
}else $StudyLocation = $_POST['studylocation'];
if(empty($_POST['sleephours'])){
  	$Err = $Err."<br> Invalid sleep hours choice.";
} else $SleepHours = $_POST['sleephours'];
if(empty($_POST['sleepertype'])){
  	$Err = $Err."<br> Invalid sleeper type choice.";
} else $SleeperType = $_POST['sleepertype'];
if(empty($_POST['cleaning'])){
  	$Err = $Err."<br> Invalid cleaning habits choice.";
} else $CleaningHabits = $_POST['cleaning'];
if(empty($_POST['weekend'])){
  	$Err = $Err."<br>  Please select at least one weekend hobby.";
} else $Hobby = $_POST['weekend'];
if(empty($_POST['friendsover'])){
  	$Err = $Err."<br> Invalid friends over preference.";
} else $FriendsOver= $_POST['friendsover'];
if(empty($_POST['overnightguest'])){
  	$Err = $Err."<br> Invalid overnight guest preference.";
} else $OvernightGuests = $_POST['overnightguest'];
if(empty($_POST['roommate_friendsover'])){
  	$Err = $Err."<br> Invalid roommate having friends over preference.";
} else $Roommate_friendsover = $_POST['roommate_friendsover'];
if(empty($_POST['roommate_overnightguest'])){
  	$Err = $Err."<br> Invalid roommate having overnight guest preference.";
} else $Roommate_overnightguest = $_POST['roommate_overnightguest'];
if(empty($_POST['expectations'])){
  	$Err = $Err."<br> Invalid roommate expectation choice.";
}else $Expectations = $_POST['expectations'];
if(empty($_POST['sharing'])){
  	$Err = $Err."<br> Invalid roommate sharing choice.";
} else $Sharing = $_POST['sharing'];
if (empty($_POST['aboutyou'])){
	$Err."<br> Please enter something about yourself.";
} else $AboutYou = $_POST['aboutyou'];

echo $Err;
}
   
// define variables without errors 
if(isset($_POST["submit"])){
$YearOfGraduation = $_POST['yog'];
$ClassCode = $_POST['class_code'];
$Facebook = $_POST['facebook'];
$LinkedIn = $_POST['linkedin'];
$Instagram = $_POST['instagram'];
} 

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

// SQL statement to update profile
$sql2 = "UPDATE profile SET Firstname='$Firstname', Lastname='$Lastname', YOGID='$YearOfGraduation', ClassCode=$ClassCode, Gender='$Gender',Athlete='$Athlete',Smoker='$Smoker',Drinker='$Drinker',clean='$CleaningHabits',sleepType='$SleeperType',sleepHours='$SleepHours',studyHours='$StudyHours',locationOfStudy='$StudyLocation',friends='$FriendsOver',guest='$OvernightGuests',roommateFriend='$Roommate_friendsover',roommateGuest='$Roommate_overnightguest',expectations='$Expectations',belongings='$Sharing', AboutYou='$AboutYou', Facebook='$Facebook', LinkedIn='$LinkedIn', Instagram='$Instagram' WHERE  Username='$variable'";
if ($conn->query($sql2) === TRUE) {
    echo "Profile updated <br>";
} else {
    echo "Error with updating profile: " . $sql2. "<br>" . $conn->error;
}

// SQL Statement to 1. Delete locations from locationform table, 2. Readd existing and add new ones
$sqldelete ="DELETE FROM locationform WHERE User='thompso_emil@bentley.edu' AND location='Boylston' OR location='Collins' OR location='Copley North'OR location='Copley South'OR location='Falcone East'OR location='Falcone North'OR location='Falcone West' OR location='Fenway'OR location='Forest'OR location='Kresge'OR location='Miller'OR location='Orchard North'OR location='Orchard South'OR location='Rhodes'OR location='Slade'OR location='Trees'";
if ($conn->query($sqldelete)===True){
echo "location deleted";
}else {
    echo "Error with updating profile: " . $sqldelete . "<br>" . $conn->error;
}
foreach($Location as $value){
$sql3 = "INSERT INTO locationform (location, User) VALUES('$value','$variable')";
if ($conn->query($sql3) === TRUE) {
    echo "Profile updated <br>";
} else {
    echo "Error with updating profile: " . $sql3 . "<br>" . $conn->error;
}}

// SQL statement to 1. Delete hobbys from weekendhobby table, 2. Readd existing and add new ones
$sqldelete2 ="DELETE FROM weekendhobby WHERE User='thompso_emil@bentley.edu' AND hobby='Going out with friends' OR hobby='Netflix' OR hobby='Depends on homework' OR hobby='I go home' OR hobby='On campus events, clubs' OR hobby='Watching sports'";
if ($conn->query($sqldelete2)===True){
echo "hobbies deleted";
}else {
    echo "Error with updating profile: " . $sqldelete2 . "<br>" . $conn->error;
}
foreach($Hobby as $value2){
$sql3 = "INSERT INTO weekendhobby (hobby, user) VALUES('$value2','$variable')";
if ($conn->query($sql3) === TRUE) {
    echo "Profile updated <br>";
} else {
    echo "Error with updating profile: " . $sql3 . "<br>" . $conn->error;
}}

// close connection
$conn->close();
?>