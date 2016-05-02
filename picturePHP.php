<?php 
session_start();
$variable=$_SESSION['UserName'];
echo $variable;
$ErrorLog="";
$_SESSION['ErrorLog']=$ErrorLog;
echo $_SERVER["REQUEST_METHOD"]; 
if(empty($_FILES))
echo 'empty';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_FILES['profilePicture'])){
$file_name = $_FILES['profilePicture']['name'];
$file_size = $_FILES['profilePicture']['size'];
$file_tmp = $_FILES['profilePicture']['tmp_name'];
$file_type = $_FILES['profilePicture']['type'];
print_r($_FILES['profilePicture']);
}
// Check to see if Method has been posted
if(!empty($_POST)){
if(isset($_POST['name'])){
$name=$_POST['profilePicture'];
}}
// Make sure the file isn't empty
if(!empty($_FILES)){
$extensions = array("jpeg", "jpg", "png");
$file_ext=explode('.',$_FILES['profilePicture']['name']);
$file_ext=end($file_ext);
$file_ext=strtolower($file_ext);
}
// Make sure it is an image
if(in_array($file_ext,$extensions)===false){
$errors[]="extension not allowed";
}
//Make sure file size is not too big
if($file_size > 2097152){
	$errors[]='File size must be less tham 2 MB';
}	
// If there are no errors than show picture            
if(empty($errors)==true){
	$filename=$variable.'.jpg';
    move_uploaded_file($file_tmp,"uploadedPictures/".$filename);
    echo "Your picture has been uploaded";
    echo '<img src="uploadedPictures/'.$filename.'" alt="profpic" width=130px" height="130px">';
}else{
	foreach ($errors as $Error){
	echo ($Error);
	}}
	}
header("location:create_account.php");
	?>