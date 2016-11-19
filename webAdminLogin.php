

<?php
include('adminValidation.php'); // Includes Login Script
require_once('dcon.php');
// Selecting Database
mysql_select_db($database_localhost,$localhost);
if(isset($_SESSION['login_user']))
{
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from login where username='$user_check'", $localhost);
$row = mysql_fetch_assoc($ses_sql);
$login =$row;
header("location: webAdminAccount.php");
}
include("header.php");
?>

         
    <!--HOME SECTION-->
    

<div id="home-sec">

 
 <div class="container" id="home" >
        <div class="row text-center">
  
<!----------------------fform--------------------------------------------->




 <div class="container1">
	<section id="content">
		<form action="adminValidation.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="true" id="username" name="username" tabindex="1" autofocus />
			</div>
			<div>
				<input type="password" placeholder="Password" required="true" id="password" name="password" tabindex="2"/>
			</div>
			<div >
			
				<input type="submit" name="login" value="LOG IN" tabindex="3" />
				
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->

<!-----------------------------------------------------end form----------------------------->
            </div>
        
		</div>
   </div>
    
 <!--END HOME SECTION-->
  
<?php

include("footer.php");
?>
