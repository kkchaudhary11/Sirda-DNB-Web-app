<?php
include("header.php");
$form=$_GET['pid'];
$study=$_GET['study'];
require_once('dcon.php');       
mysql_select_db($database_localhost,$localhost);
?>
    
<div id="home-sec">
	<div class="container" id="home" >
        <div class="row text-center">
<!----------------------fform--------------------------------------------->
			<div class="container1" >
				<section id="content" >
					<font color="grey" size="8px"><b>NOTICES &nbsp</b></font><font color="#b71c1c"><?php echo "[".$study."]";?></font>
						<div  style="color:grey; text-align:left; padding-left:5px; padding-right:5px;">
      <!-------------php code--------------->
						<?php
 
						if($form=='NULL'){
							$query="SELECT * FROM $study ORDER BY id DESC LIMIT 10";   
						}
						else
						{
							$form=$form-10;
							$query="SELECT * FROM $study WHERE(id<='$form')ORDER BY id DESC LIMIT 10 ";
						}

						$result=mysql_query($query);                          
						echo "<hr style=' border: 1px solid #ccc;'>";
						while($row = mysql_fetch_assoc($result))
						{
							$srno = $row['id'];
							$hash = "#" . $srno;
							$descr = $row['descr'];
							$time=$row["time"];
							$date=$row["date"];
							$update_time = $date." ".$time;
							$timeago=time_elapsed_string($update_time, false);
							//check for the image in notice
							if(!$row['name']){
								echo "
								<div  style='float:left; width:90%; overflow:hidden; '><font color='#b71c1c' size='4px' ><b>".$row['sub']."</b></font></div>
								<div style='float:right; width:10%; overflow:hidden; text-align:right;'><font color='grey'>".$hash."</font></div>
								<div style='width:100%; overflow:hidden; margin-bottom: 2px;'><font color='grey'>".makeLinks("$descr")."</font></div> 
								<div style='float:left; text-align:left; width:75%; overflow:hidden;'>Department:&nbsp".$row['branch']."</div>
								<div style='float:left; text-align:right; width:25%; overflow:hidden;' ><font color='black' size='2px'>".$timeago."</font></div>		
								<div style='float:left; text-align:center; width:100%; overflow:hidden;'> <hr style=' border: 1px solid #ccc;'></div>
								";
							}
							else{
								echo "<a href=uploads/".$row['name']." style=' text-decoration: none;'>
								<div  style='float:left; width:90%; overflow:hidden; '><font color='#b71c1c' size='4px' ><b>".$row['sub']."</b></font></div>
								<div style='float:right; width:10%; overflow:hidden; text-align:right;'><font color='grey'>".$hash."</font></div>
								<div style='width:100%; overflow:hidden; margin-bottom: 2px;'><font color='grey'>".$row['descr']."</font></div> 
								<div style='float:left; text-align:left; width:75%; overflow:hidden;'>Department:&nbsp".$row['branch']."</div>
								<div style='float:left; text-align:right; width:25%; overflow:hidden;' ><font color='black' size='2px'>".$timeago."</font></div>
								</a>
								<div style='float:left; text-align:center; width:100%; overflow:hidden;'> <hr style=' border: 1px solid #ccc;'></div>
								";
							}
                     
						} 
            
						if($form=='NULL'){
							$query="SELECT * FROM $study ORDER BY id DESC LIMIT 1";               
						}
						else{
							$form=$form-10;
							$query="SELECT * FROM $study WHERE id<='$form'  ORDER BY id DESC LIMIT 1 ";
						}

						$result=mysql_query($query);
						while($row = mysql_fetch_assoc($result)){
							echo "<form action='webNotice.php' method='get'>	
							<input type='hidden' name='pid' value='".$row['id']."'>
							<input type='submit' value='Older'/>	
							</form>";
						}
						?>

					</div>							
				</section><!-- content -->
			</div><!-- container -->
<!----------------------------------------end form----------------------------->
       </div>    
   </div>
</div>  
<!------------------------------------END HOME SECTION------------------------------->
<br><br>

<?php
include("footer.php");
?>

<!----------------------------identify time----------------------------->
<?php
function time_elapsed_string($datetime, $full = false) {
	date_default_timezone_set("Asia/Kolkata");
    $now = new DateTime;
	
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

//identify urls in the description text
function makeLinks($str) {
	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	$urls = array();
	$urlsToReplace = array();
	if(preg_match_all($reg_exUrl, $str, $urls)) {
		$numOfMatches = count($urls[0]);
		$numOfUrlsToReplace = 0;
		for($i=0; $i<$numOfMatches; $i++) {
			$alreadyAdded = false;
			$numOfUrlsToReplace = count($urlsToReplace);
			for($j=0; $j<$numOfUrlsToReplace; $j++) {
				if($urlsToReplace[$j] == $urls[0][$i]) {
					$alreadyAdded = true;
				}
			}
			if(!$alreadyAdded) {
				array_push($urlsToReplace, $urls[0][$i]);
			}
		}
		$numOfUrlsToReplace = count($urlsToReplace);
		for($i=0; $i<$numOfUrlsToReplace; $i++) {
			$str = str_replace($urlsToReplace[$i], "<a href=\"".$urlsToReplace[$i]."\">".$urlsToReplace[$i]."</a> ", $str);
		}
		return $str;
	} else {
		return $str;
	}
}
?>
