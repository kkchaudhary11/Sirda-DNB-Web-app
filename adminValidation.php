<?php
include("header.php");
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {
 if (empty($_POST['username']) || empty($_POST['password'])) {
 $error = "Pleae Enter Username/Passsword";
header( "refresh:3;url=admin.php" );
 }
else{
// Define $name and $pwrd
$name=$_POST['username'];
$pwrd=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
require_once('dcon.php');
// Selecting Database
mysql_select_db($database_localhost,$localhost);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$pwrd' AND username='$name'", $localhost);
$rows = mysql_num_rows($query);
if ($rows >0){
  $_SESSION['login_user']=$name; // Initializing Session variable
  header("location: webAdminAccount.php"); // Redirecting To Other Page
}
else {	
header( "refresh:3;url=webAdminLogin.php" );
echo "<div><h1>UserName OR Password Incorrect</h1><h2>&nbsp &nbsp You'll be Redirected shortly<h2></div>";
}
}
print"$error";
}
?>

