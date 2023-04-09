<?php

$username= $_GET['username'];

$con= mysqli_connect("localhost","root");
 mysqli_select_db($con,"night_in_gale_db");
 $q= "select * from audio where second_username='$username'";
 $status= mysqli_query($con,$q);
 $num= mysqli_num_rows($status);
 if($num>0){
   $result= mysqli_fetch_assoc($status);
   $url= $result['audio_url'];
   echo($result['audio_url']);
   $q= "delete from audio where audio_url='$url'";
   mysqli_query($con,$q);
 }
 else{
    echo "error";
 }
?>