
<?php
session_start();
$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];
echo $username;
$con= mysqli_connect("localhost","root");
 mysqli_select_db($con,"night_in_gale_db");
 $q= "insert into user(username,password,email) values('$username','$password','$email')";
 $status= mysqli_query($con,$q);
 mysqli_close($con);
 if($status){
   $_SESSION['username']=$username;
   header("location:../signin_page/signin.php");
 }
 else{
    header("location:login.php");
 }
?>
