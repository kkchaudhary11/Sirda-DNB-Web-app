
<?php

include("header.php");
?>
  

<?php
require_once('dcon.php'); mysql_select_db($database_localhost,$localhost);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $review = $_POST['info'];

 $query_search = "insert into feedback (name,email,review) values ('$name','$email','$review')";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);
//echo $rows;
 if($rows == 0) { 
 echo "<div><h1>Suggestion Posted Successfully</h1><h2>&nbsp &nbsp You'll be Redirected shortly<h2></div>";
header( "refresh:3;url=index.php" );
 }
 else  {
   echo "<div><h1>Suggestion Not Posted</h1><h2>&nbsp &nbsp You'll be Redirected shortly<h2></div>";
header( "refresh:3;url=index.php" ); 
}
?>  