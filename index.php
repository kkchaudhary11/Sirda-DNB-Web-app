
<?php

include("header.php");
?>
    <div id="home-sec">

   
    <div class="container" id="home" >
        <div class="row text-center g-pad-bottom">
            <div class="col-md-12">
                 <span class="head-main">NOTICE BOARD</span>
              
            </div>
        </div>


        <div class="row text-center">
            <div class="col-md-4  col-sm-4">
                 <a href="webAdminLogin.php"><i class="fa fa-user faa-vertical animated icon-round bk-color-red"></i></a>
                            <h4>Admin</h4>
                          
                           
                </div>
             <div class="col-md-4  col-sm-4">
			 	<script>
				function myFunction() {
if(document.getElementById('r1').checked) {
 window.location.href = "webNotice.php?pid=NULL&study=btech";
}else if(document.getElementById('r2').checked) {
   window.location.href = "webNotice.php?pid=NULL&study=diploma";
}
}
</script>
                <button type="button" class="studentbutton" onclick="myFunction()" ><i class="fa fa-group faa-ring animated icon-round bk-color-red"></i></button>
							
                            <h4>Students</h4><br>
							<font color="#b71c1c">
							<input type="radio" name="study" id="r1" checked><label for="r1">B.Tech &nbsp </label>
							<input type="radio" name="study" id="r2"><label for="r2">Diploma</label>
							
							
							</font>
							
							
                         
                           
                </div>
            <div class="col-md-4  col-sm-4">
                   <a href="webSuggestion.php"> <i class="fa fa-pencil  faa-shake animated icon-round bk-color-red"></i></a>
                            <h4>Suggestion</h4>
                           
                           
                </div>
            </div>
        
    </div>
         </div>
    
    <!--END HOME SECTION-->
  
   

<?php

include("footer.php");
?>
