<?php
$username= $_GET['username'];
$audio_url= $_GET['audio_url'];
$con= mysqli_connect("localhost","root");
 mysqli_select_db($con,"night_in_gale_db");
 $q= "select * from user where username='$username'";
 $status= mysqli_query($con,$q);
 $num= mysqli_num_rows($status);
 if($num>0){
   $result= mysqli_fetch_assoc($status);

   $first_username= $result['username'];
   $second_username= $result['partner_username'];
   $q= "insert into audio (first_username,second_username,audio_url) values('$first_username','$second_username','$audio_url')";
  $status= mysqli_query($con,$q);
  if($status){
    echo "It is succefully Submited";
  }else{
    echo "It is not submited";
  }
 }

?>