
<?php
include("header.php");
include('session.php');
if($login_session)
{

?>
    <div id="home-sec">

   
    <div class="container" id="home" >
        <div class="row text-center g-pad-bottom">
		<div class="col-md-4 col-sm-4" >
                 
               </div>
            <div class="col-md-4 col-sm-4" >
                 <span class="head-main" >ADMIN</span>
               </div>
				<div class="col-md-4 col-sm-4">
				<br>
					<font color="#b71c1c">
				<button type="button" onclick="logout()" ><b>LOG OUT</b> &nbsp <i class="fa fa-power-off "></i></button></font>
				<script>
							function logout() {
window.location.href = "logout.php";
}
</script>
		
        </div>
        </div>


        <div class="row text-center">
		
            <div class="col-md-4  col-sm-4">
                 <a href="webAdminNoticeUpdate.php"><i class="fa fa-edit faa-vertical animated icon-round bk-color-red"></i></a>
                            <h4>Create</h4>
                          
                           
                </div>
             <div class="col-md-4  col-sm-4">
               <script>
				function myFunction() {
if(document.getElementById('r1').checked) {
 window.location.href = "webAdminNoticeDelete.php?pid=NULL&study=btech";
}else if(document.getElementById('r2').checked) {
   window.location.href = "webAdminNoticeDelete.php?pid=NULL&study=diploma";
}
}
</script>
                <button type="button" class="studentbutton" onclick="myFunction()" ><i class="fa fa-group faa-ring animated icon-round bk-color-red"></i></button>
							
                            <h4>Delete</h4><br>
							<font color="#b71c1c">
							<input type="radio" name="study" id="r1" checked><label for="r1">B.Tech &nbsp </label>
							<input type="radio" name="study" id="r2"><label for="r2">Diploma</label>
							
							
							</font>
							
                           
                </div>
            <div class="col-md-4  col-sm-4">
                  <a href="webAdminViewSuggestion.php"> <i class="fa fa-thumbs-up  faa-shake animated icon-round bk-color-red"></i></a>
                            <h4>View Suggestion</h4>
                           
                           
                </div>
            </div>
			<br><br>
			<font color='red'><h5 align="center"> <i class="fa fa-info-circle"></i>&nbsp Make sure you are <b>LOGGED-OUT</b> before leaving your device</h5>
        
    </div>
         </div>
    
    <!--END HOME SECTION-->
  
<?php
include("footer.php");
}
?>
