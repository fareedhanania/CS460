<?php
session_start();
$_SESSION['Login']="";

// define variables 
if(isset($_POST["submit"])){
$UserName= $_POST['email'];
$Password=$_POST['Password'];

// connect to database
$login = mysql_connect("frodo.bentley.edu","cs460teamd","cs460teamd") or die (mysql_error());
mysql_select_db("cs460teamd",$login);
$query=mysql_query("SELECT * FROM logintable WHERE UserName='".$UserName."'AND Password='".$Password."'");
$numrows=mysql_num_rows($query);
if ($numrows!=0){
while ($row=mysql_fetch_assoc($query))
{
$dbusername =$row['Username'];
$dbpassword = $row['Password'];
}
$UserName=strtolower($UserName);
if ($UserName==$dbusername && $Password==$dbpassword){
header("Location: homepage.php");
$_SESSION['UserName']=$UserName;
}}
else{
echo "Invalid username or password!";
$_SESSION['Login']="Invalid username or password.";
header("Location:login.php");
}}
?>