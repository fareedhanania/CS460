<?php
session_start();

// define variables and set to empty values
$ErrorLog="";
$ExistsError="";
$PasswordErr="";

// If server method is post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['User'])) {
    $Err = "Invalid Username";
}else $UserName = $_POST['User'];
if(empty($_POST['Pass'])){
  	$Err = $Err."<br> Invalid Password.";
} else $Password = $_POST['Pass'];
if(empty($_POST['PassCheck'])){
  	$Err = $Err."<br> Please retype password.";
} else $PasswordCheck = $_POST['PassCheck'];


$UserName=strtolower($UserName);

// Connection Credentials
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

// Check to see if username already is in database
$sql="SELECT Username FROM logintable";
$Users = $conn->query($sql);
if ($Users->num_rows>0){
foreach($Users as $row){
if ($row['Username']===$UserName){
$ExistsError="<br>Username already exists, please login.";
}}
}

// Check to see if passwords match
if ($Password!=$PasswordCheck){
$PasswordErr="Passwords do not match";
}

// If username does not exist, enter it into database
if (empty($ExistsError) && empty($Err) && empty($PasswordErr)){
echo $ExistsError." is empty";
$sql1 = "INSERT INTO logintable (Username, Password) VALUES ('$UserName', '$Password')";
if ($conn->query($sql1) === TRUE) {
	$ErrorLog="";
} else {
    $ErrorLog= "Error with login. ";
}}else echo $ExistsError;
}

// Set session variables
$_SESSION['ExistsError']=$ExistsError;
$_SESSION['UserName']=$UserName;
$_SESSION['ErrorLog']=$ErrorLog." ".$Err." ".$PasswordErr;
$variable=$_SESSION['UserName'];

// Go to next location
if (empty($ErrorLog) && empty($ExistsError) && empty($Err) && empty($PasswordErr)){
header("location:picture.php");
} else {
header("location:UsernamePassword.php");
}
?>
