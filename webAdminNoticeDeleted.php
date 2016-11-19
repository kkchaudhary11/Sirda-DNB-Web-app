<?php

include("header.php");
include('session.php');
if($login_session)
{
$study=$_GET['study'];
 $del=$_GET['srno'];
 require_once('dcon.php'); mysql_select_db($database_localhost,$localhost);
  $query_search = "delete from $study where id='$del'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);
//echo $rows;
 if($rows == 0) { 
 echo "<div><h1>Deleted Successfully</h1><h2>&nbsp &nbsp You'll be Redirected shortly<h2></div>";
header( "refresh:3;url=webAdminNoticeDelete.php?pid=NULL&study=$study" );
 }
 else  {
    echo "<div><h1>Deletion Failed</h1><h2>&nbsp &nbsp You'll be Redirected shortly<h2></div>";
header( "refresh:3;url=webAdminNoticeDelete.php?pid=NULL&study=$study" );
}
 
}
?> 