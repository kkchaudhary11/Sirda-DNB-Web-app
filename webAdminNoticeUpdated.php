<?php

include("header.php");
include('session.php');
if($login_session)
{
 $file_path = "uploads/";

    $file_path = $file_path .basename( $_FILES['uploaded_file']['name']);
    $title =$_FILES['title'];
    //$descr=$file_path .basename( $_FILES['uploaded_file']['desc']);
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
echo "<div><br><br><h3>&nbsp &nbspImage Uploaded</h3>";
    } else{
echo "<div><br><br><h3>&nbsp &nbspImage Not Uploaded</h3>";
    }
    $name=$_FILES['uploaded_file']['name'];
	
require_once('dcon.php'); mysql_select_db($database_localhost,$localhost);

date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
$date= date("Y-m-d");

$title = $_REQUEST["title"];
$descr = $_REQUEST["desc"];
$dept = $_REQUEST["dept"];
$cat = $_REQUEST["cat"];
$sel = $_REQUEST["sel"];

$query_search = "INSERT INTO $sel (sub,descr,branch,category,name,time,date) VALUES ('$title','$descr','$dept','$cat','$name','$time','$date')";
$query_exec = mysql_query($query_search) 
or die(mysql_error());
echo "<div><h1>Updated Successfully</h1><h2>&nbsp &nbsp You'll be Redirected shortly<h2></div>";
header( "refresh:3;url=webAdminAccount.php" );


// Your ID and token
if($sel=="btech"){
	$sed="/topics/btech";
}
else{
	$sed="/topics/diploma";	
}

$authToken = 'key=AIzaSyASSTUam4lTXSotzZlF2eSFuZYtl3GGTOI';

// The data to send to the API
$postData = array(
    'data' => array('notice' => $title,'descr' => $descr),
   'to' => $sed
);

// Setup cURL
$ch = curl_init('https://gcm-http.googleapis.com/gcm/send');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization: '.$authToken,
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

// Send the request
$response = curl_exec($ch);


// Check for errors
if($response === FALSE){
    die(curl_error($ch));
}

// Decode the response
$responseData = json_decode($response, TRUE);

// Print the date from the response
echo $responseData['published'];
}
?>
