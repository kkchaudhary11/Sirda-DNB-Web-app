

<?php

include("header.php");
?>
  


 <div id="home-sec">

 
 <div class="container" id="home" >
        <div class="row text-center">
  
<!----------------------fform--------------------------------------------->




 <div class="container1">
	<section id="content">
		<form action="webSuggestionUpdated.php" method="post">
			<h1>SUGGESTIONS</h1>
			<div>
				<input type="name" placeholder="Name" required="true" id="name" name="name" tabindex="1" autofocus/>
			</div>
			<div>
				<input type="email" placeholder="email" required="true" id="email" name="email" tabindex="2"/>
			</div>
						<div>
				<textarea name="info" cols="37" rows="5" placeholder="Suggestion/Complaint/Review" required="true" spellcheck="true" tabindex="3"></textarea>
			</div>
			<div >
			
				<input type="submit" value="POST" tabindex="5"/>
				
			</div>
		</form><!-- form -->
		
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
