<?php

include("header.php");
include('session.php');
if($login_session)
{
?>
  
<div id="home-sec">

 
 <div class="container" id="home" >
        <div class="row text-center">
  
<!----------------------fform--------------------------------------------->


 <div class="container1" >
	<section id="content" >
			<font color="grey" size="8px"><b>Suggestions</b></font>
<div  style="color:grey; text-align:left; padding-left:5px; padding-right:5px;">
      <!-------------php code--------------->
<?php
 
/*
 * Following code will list all the products
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once('dcon.php'); mysql_select_db($database_localhost,$localhost);
 

 
// get all products from products table
$result = mysql_query("SELECT * FROM feedback") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
   
 ;
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array

        $pid = $row["id"];
        $name = $row["name"];
        $dept = $row["email"];
        $review = $row["review"];
 
        echo "
		<div style=' width:65%; overflow:hidden;'>
					 <div><font color='#b71c1c' size='4px'><b>".$row['id']."</b></font></div><font color='grey'><div><b>"
					 .$row['name']."</b></font></div><div>"
					 .$row['email']
					 ."</div><div><font color='black' size='2px'>"
					 .$row['review']."</font></div></div>";
					 
                     echo"<hr>";
    }
    // success
   
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    // echo no users JSON
    echo json_encode($response);
}
?>


</div>			
				
		
	</section><!-- content -->
</div><!-- container -->


<!-----------------------------------------------------end form----------------------------->








            </div>
        
    </div>
         </div>
    
    <!--END HOME SECTION-->
  
   <br><br>
   
<?php
}
include("footer.php");
?>

