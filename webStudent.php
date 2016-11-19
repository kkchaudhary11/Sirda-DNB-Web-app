

<?php

include("header.php");
?>
  


 <div id="home-sec">

 
 <div class="container" id="home" >
        <div class="row text-center">
  
<!----------------------fform--------------------------------------------->




 <div class="container1">
	<section id="content">
	<h1>SELECT STUDY</h1><hr><br>
		<font color="#b71c1c">
							<input type="radio" name="study" id="r1" checked><label for="r1">B.Tech &nbsp &nbsp &nbsp &nbsp &nbsp </label>
							<input type="radio" name="study" id="r2"><label for="r2">Diploma</label><br><br><br>
							<button type="button"  style="font-size:17px" onclick="myFunction()" > <b>Find</b> <i class="fa fa-search"></i></button>
							<br><br>
		</font><br>
							 							 							
<script>
function myFunction() {
if(document.getElementById('r1').checked) {
 window.location.href = "webNotice.php?pid=NULL&study=btech";
}else if(document.getElementById('r2').checked) {
   window.location.href = "webNotice.php?pid=NULL&study=diploma";
}
}
</script>
               
					
		
	</section><!-- content -->
</div><!-- container -->


<!-----------------------------------------------------end form----------------------------->








            </div>
        
    </div>
         </div>
    
    <!--END HOME SECTION-->
  
  
<!--
<div id="home-sec" style="color:black;">






 <form action="#">

  <header>
    <h2>Submit your suggestion here</h2>
  </header>
  
  <div>
    <label class="desc" id="title1" for="Field1">Full Name</label>
    <div>
      <input id="Field1" name="name" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
    
  <div>
    <label class="desc" id="title3" for="Field3">
      Email
    </label>
    <div>
      <input id="Field3" name="mail" type="email" spellcheck="false" value="" maxlength="255" tabindex="3"> 
   </div>
  </div>
    
  <div>
    <label class="desc" id="title4" for="Field4">
      Message
    </label>
  
    <div>
      <textarea id="Field4" name="review" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  </div>
    
  
  <div>
		<div>
  		<input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
	</div>
  
</form>
</div>
           
         </div>
    
    <!--END HOME SECTION-->
  










   

<?php

include("footer.php");
?>
