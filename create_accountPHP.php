<?php

session_start();
$variable=$_SESSION['UserName'];

//$ErrorLog="";

// define variables and set to empty values
$FNErr=$LNErr=$LErr=$YOGErr=$GErr=$AErr=$SErr=$DErr=$CErr=$STErr=$SHErr=$STHErr=$SLErr=$FRErr=$GUErr=$RFRErr=$RGUErr=$EXErr=$BErr=$AYErr=$WErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST['Text1'])){
  	$FNErr = "Invalid Firstname.";
} else $Firstname = $_POST['Text1'];
if(empty($_POST['Text2'])){
  	$LNErr = "Invalid Lastname.";
} else $Lastname = $_POST['Text2'];
if (empty($_POST['my_location'])){
	$LErr = "Please select atleast one location.";
} else $Location = $_POST['my_location'];
if(empty($_POST['gender'])){
  	$GErr =  "Invalid choice.";
} else $Gender = $_POST['gender'];
if(empty($_POST['athlete'])){
  	$AErr = " Invalid choice.";
}else $Athlete = $_POST['athlete'];
if(empty($_POST['smoker'])){
  	$SErr = "Invalid choice.";
} else $Smoker = $_POST['smoker'];
if(empty($_POST['drinker'])){
  	$DErr = "Invalid choice.";
} else $Drinker = $_POST['drinker'];
if(empty($_POST['studyhours'])){
  	$STHErr = "Invalid choice.";
} else $StudyHours = $_POST['studyhours'];
if(empty($_POST['studylocation'])){
  	$SLErr = "Invalid choice.";
}else $StudyLocation = $_POST['studylocation'];
if(empty($_POST['sleephours'])){
  	$SHErr = "Invalid choice.";
} else $SleepHours = $_POST['sleephours'];
if(empty($_POST['sleepertype'])){
  	$STErr = "Invalid choice.";
} else $SleeperType = $_POST['sleepertype'];
if(empty($_POST['cleaning'])){
  	$CErr = "Invalid choice.";
} else $CleaningHabits = $_POST['cleaning'];
if(empty($_POST['weekend'])){
  	$WErr = "  Please select at least one weekend hobby.";
} else $Hobby = $_POST['weekend'];
if(empty($_POST['friendsover'])){
  	$FRErr = "Invalid choice.";
} else $FriendsOver= $_POST['friendsover'];
if(empty($_POST['overnightguest'])){
  	$GUErr = "Invalid choice.";
} else $OvernightGuests = $_POST['overnightguest'];
if(empty($_POST['roommate_friendsover'])){
  	$RFRErr = "Invalid choice.";
} else $Roommate_friendsover = $_POST['roommate_friendsover'];
if(empty($_POST['roommate_overnightguest'])){
  	$RGUErr = "Invalid choice.";
} else $Roommate_overnightguest = $_POST['roommate_overnightguest'];
if(empty($_POST['expectations'])){
  	$EXErr = "Invalid choice.";
}else $Expectations = $_POST['expectations'];
if(empty($_POST['sharing'])){
  	$BErr = "Invalid choice.";
} else $Sharing = $_POST['sharing'];
if (empty($_POST['aboutyou'])){
	$AYErr=" Please enter something about yourself.";
} else $AboutYou = $_POST['aboutyou'];

$AccountErr= $FNErr.$LNErr.$LErr.$GErr.$AErr.$SErr.$DErr.$CErr.$STErr.$SHErr.$STHErr.$SLErr.$FRErr.$GUErr.$RFRErr.$RGUErr.$EXErr.$BErr.$AYErr.$WErr;
echo 'ErrorLog is: '.$AccountErr.'!';

$_SESSION['AccountErr']=$AccountErr;
$_SESSION['FirstError']=$FNErr;
$_SESSION['LastError']=$LNErr;
$_SESSION['LocationError']=$LErr;
$_SESSION['GenderError']=$GErr;
$_SESSION['AthleteError']=$AErr;
$_SESSION['SmokerError']=$SErr;
$_SESSION['DrinkerError']=$DErr;
$_SESSION['CleanError']=$CErr;
$_SESSION['SleepTypeError']=$STErr;
$_SESSION['SleepHoursError']=$SHErr;
$_SESSION['StudyHoursError']=$STHErr;
$_SESSION['StudyLocationError']=$SLErr;
$_SESSION['FriendError']=$FRErr;
$_SESSION['GuestError']=$GUErr;
$_SESSION['RFriendError']=$RFRErr;
$_SESSION['RGuestError']=$RGUErr;
$_SESSION['ExpectationsError']=$EXErr;
$_SESSION['BelongingsError']=$BErr;
$_SESSION['AboutYouError']=$AYErr;
$_SESSION['Weekend']=$WErr;

}
    
if(isset($_POST["submit"])){
$YearOfGraduation = $_POST['yog'];
$ClassCode = $_POST['class_code'];
$Facebook = $_POST['facebook'];
$LinkedIn = $_POST['linkedin'];
$Instagram = $_POST['instagram'];
}

$servername = "frodo.bentley.edu";
$username = "cs460teamd";
$password = "cs460teamd";
$dbname = "cs460teamd";

if (empty($AccountErr)){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else echo 'error log not empty';

$sql2 = "INSERT INTO profile (Firstname, Lastname, YOGID, ClassCode, Gender,Athlete,Smoker,Drinker,clean,sleepType,sleepHours,studyHours,locationOfStudy,friends,guest,roommateFriend,roommateGuest,expectations,belongings, Username, AboutYou, Facebook, LinkedIn, Instagram) VALUES ('$Firstname', '$Lastname', '$YearOfGraduation', '$ClassCode','$Gender', '$Athlete', '$Smoker', '$Drinker', '$CleaningHabits', '$SleeperType', '$SleepHours', '$StudyHours', '$StudyLocation', '$FriendsOver', '$OvernightGuests', '$Roommate_friendsover', '$Roommate_overnightguest', '$Expectations', '$Sharing', '$variable', '$AboutYou', '$Facebook', '$LinkedIn', '$Instagram')";
if ($conn->query($sql2) === TRUE) {
    echo "New profile created successfully <br>";
} else {
    $Error= "Error with profile: " . $sql2. "<br>" . $conn->error;
}

foreach($Location as $value){
$sql3 = "INSERT INTO locationform (location, User) VALUES('$value','$variable')";
if ($conn->query($sql3) === TRUE) {
    echo "Locations added <br>";
} else {
    $Error= "Error with adding location: " . $sql3. "<br>" . $conn->error;
}}

foreach($Hobby as $value2){
$sql4 = "INSERT INTO weekendhobby (hobby, user) VALUES('$value2','$variable')";
if ($conn->query($sql4) === TRUE) {
    echo "Hobby added <br>";
} else {
    $Error="Error with adding hobby: " . $sql3. "<br>" . $conn->error;
}}


$conn->close();
}
if (empty($AccountErr)){
header ("location:homepage.php");
} else {
header("location:create_account.php");
}
?>