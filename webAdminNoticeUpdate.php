<?php
include("header.php");
include('session.php');
if($login_session)
{
?>
  
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
<script>
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        ;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

 <div id="home-sec">

 
 <div class="container" id="home" >
        <div class="row text-center">
  
<!----------------------fform--------------------------------------------->




 <div class="container1">
	<section id="content">
		<form action="webAdminNoticeUpdated.php" method="post" enctype="multipart/form-data">
			<h1>UPDATE NOTICE</h1>
			<div>
				<input type="text" placeholder="Title" required="true" id="title" tabindex="1" name="title" autofocus/>
			</div>
		<font color="grey">
						<div>
				<textarea name="desc" cols="37" rows="3" placeholder="Description" required="true" spellcheck="true" tabindex="3"></textarea>
			</div>
			<br>
			<div >
			
			<input name="uploaded_file" type='file' onchange="readURL(this);" style="margin-left:3em;"/>
			</div>
			<br>
			
			<div>
			
			<input type="radio" name="sel" id="r1" value="btech" checked> <label for="r1">B.Tech  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
  <input type="radio" name="sel" value="diploma" id="r2" ><label for="r2">Diploma </label><br>
			</div>
				
			
			<br>
		
			
			<div>
			<select name="dept">
  <option value="All">All</option>
  <option value="CE">CE</option>
  <option value="CSE">CSE</option>
  <option value="ME">ME</option>
    <option value="AE">AE</option>
</select>
	<select style="margin-left:2em;" name="cat" >
  <option value="miscellaneous">miscellaneous</option>
  <option value="Function">Function</option>
  <option value="University">University</option>
    <option value="Attendance">Attendance</option>
  <option value="Exam">Exam</option>
</select>
</div>

<br>

<div>
  <br>
    <img id="blah" src="C:\Documents and Settings\Administrator\My Documents\My Pictures\Google Talk Received Images\logo.png" alt="your image" height="200" width="200" border="1" />
</font>
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
    
   
  
   <br><br>

<?php
}
include("footer.php");
?>
