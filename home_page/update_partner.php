<?php
session_start();
$partner_username= $_POST['partner_username'];

$con= mysqli_connect("localhost","root");
 mysqli_select_db($con,"night_in_gale_db");
 $username= $_SESSION['username'];
 $q= "update user set partner_username='$partner_username' where username='$username'";
 $status= mysqli_query($con,$q);
 mysqli_close($con);
if($status){
    echo "It is updated";
}else{
    echo " Faild to update";
}
?>