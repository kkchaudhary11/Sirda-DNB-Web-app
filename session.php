<?php
ob_start();
// Establishing Connection with Server by passing server_name, user_id and pwrd as a parameter
require_once('dcon.php');
// Selecting Database
mysql_select_db($database_localhost,$localhost);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from login where username='$user_check'", $localhost);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row;
if(NULL==$login_session){
mysql_close($connection); // Closing Connection
 // Redirecting To Home Page
header('Location:webAdminLogin.php');
echo "<h1>Authentication Failed</h1>";
}
?>