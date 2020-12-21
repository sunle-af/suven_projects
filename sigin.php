<?php 
session_start();
 
include("includes/connection.php");
$username=$_POST['username'];

$password=$_POST['password'];

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
 
$sql="SELECT * FROM users WHERE user_email='$username' and user_pass='$password'";
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result); 
$submit_button = $_POST['login'];

$sql_query= "SELECT * FROM users WHERE user_email='$username' and user_pass='$password'";
$res=mysqli_query($con,$sql_query);

$resultCheck = mysqli_num_rows($res);
if($resultCheck>0){
  while($rows = mysqli_fetch_assoc($res)){
    $_SESSION['user']=$rows['user_name'];
      echo $_SESSION['user'];
  }
}else{echo 'something ';}





if(isset($_POST['login'])){
    if(isset($submit_button)){
     if(mysqli_num_rows($result) == 1)
 {  
  
 
  // Initializing Session
  header("location: profile.php"); // Redirecting To Other Page
  }else {echo 'Failed to login please check your password';}  
} 
else
{   echo 'failed'; }  
} 

?>
 