<?php
session_start();
$username= $_POST['username'];
$con= mysqli_connect("localhost","root");
 mysqli_select_db($con,"night_in_gale_db");
 $q= "select * from user where username='$username'";
 $status= mysqli_query($con,$q);
 $num= mysqli_num_rows($status);
 mysqli_close($con);
 if($num>0){
   $_SESSION['username']=$username;
   header("location:../home_page/home.php");
 }
 else{
    echo "Please sine up first";
 }
?>