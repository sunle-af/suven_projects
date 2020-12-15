<?php
session_start();
include("includes/connection.php");
$username=$_POST['username'];

$password=$_POST['password'];

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
 
$sql="SELECT * FROM users WHERE user_email='$username' and user_pass='$password'";
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$submit_button = $_POST['login'];
 
if(isset($_POST['login'])){
    if(isset($submit_button)){
     if(mysqli_num_rows($result) == 1)
 {  $_SESSION['email'] = $login_user;   echo 'no. rows is 1';// Initializing Session
    header("location: home.php"); // Redirecting To Other Page
  }else {echo 'Failed to login please check your password';}  
} 
else
{   echo 'failed'; }  
} 

?>
 