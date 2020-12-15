<?php
include ("includes/connection.php"); 

if(isset($_POST['signup'])) {
    $frist_name=htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
    
    $last_name=htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
    
    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
     
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));

    $gen=htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));

    $bday=htmlentities(mysqli_real_escape_string($con,$_POST['u_bday']));

    $uid = sprintf('%05d' , rand(0,99999));

    $status= "verified";
    
    $posts="no";
    
    $username = strtolower($frist_name. "_". $last_name . "_" . $uid);
    $check_username = "select user_name from users where user_email='$email'";
    $run_username = mysqli_query($con, $check_username);
    if(strlen($pass)<9){
       echo "<scipt>alert('Should be minimum 9 characters!')</script>";
       exit();
   }
   
   $check_email="select * from users where user_email='$email'";
   $run_email= mysqli_query($con,$check_email);
   $check = mysqli_num_rows($run_email);

   if($check==1){
       echo "<script>alert('Email already exists')</script>";
       echo "<script>window.open('signup.php','_self') </script>"; 
       exit();
   }
   $profile_pic = "1.png";
   
   $cover = "cover.png";

    $submit_button = $_POST['signup'];

    $sql=" INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `user_name`, `describe_user`, `relationship`, `user_pass`, `user_email`, `user_gender`, `user_bday`, `user_image`, `user_cover`, `user_reg_date`, `status`, `posts`, `recovery_account`) 
    VALUES ('$uid', '$frist_name', '$last_name', '$username', 'defalutstatus', '...', '$pass', '$email', '$gen', '$bday', '$profile_pic', '$cover', current_timestamp(), '$status', '$posts', 'TBS');";

    if(isset($submit_button))
    {
       $query= mysqli_query($con, $sql);
        if($query){echo "DONE";   }
        
        else echo "failed";var_dump($_POST);
    
    } 
} 
 

 
 
 /*
 $frist_name=htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
   echo "1";
   $last_name=htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
   echo "2";
   $pass=htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
   echo "3";
   $email=htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
   echo "4";
   $gen=htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
   echo "5";
   $bday=htmlentities(mysqli_real_escape_string($con,$_POST['u_bday']));
   $status= "verified";
   $posts="no";
    $newgid = sprintf('%05d' , rand(0,99999));
   $username = strtolower($frist_name. "_". $last_name . "_" . $newgid);
   $check_username = "select user_name from users where user_email='$email'";
   $run_username = mysqli_query($con, $check_username);
   if(strlen($pass)<9){
       echo "<scipt>alert('Should be minimum 9 characters!')</script>";
       exit();
   }
   
   $check_email="select * from users where user_email='$email'";
   $run_email= mysqli_query($con,$check_email);
   $check = mysqli_num_rows($run_email);

   if($check==1){
       echo "<script>alert('Email already exists')</script>";
       echo "<script>window.open('signup.php','_self') </script>"; 
       exit();
   }
   
   $rand = rand(1,2);
   if($rand==1)
   $profile_pic = "1.png";
   else if($rand==2)
   $profile_pic = "2.jpg";
   $insert="insert into users(f_name,l_name,user_email,user_bday,u_gender,u_pass,user_id) 
   values('$frist_name','$last_name','$email','$bday','$gen','$pass','$newgid')";
    */ 
 /* user_id	
 f_name	
 l_name	
 user_name	
 describe_user	
 relationship	
 user_pass	
 user_email	
 user_gender	
 user_bday	
 user_image
 	user_cover	
 user_reg_date
 	status	
 posts	
 recovery_account	     
  $insert = "insert into users(f_name,l_name,user_name,describe_user,relationship,user_pass,user_email,
                     user_gender,user_bday,user_image,user_cover,user_reg_date,status,posts,recovery_account)
                     values('$frist_name','$last_name','$username','Defalut status!','...','$pass','$email',
                             '$gen','$bday','$profile_pic','cover.jpg',NOW(),$status,$posts,'recovery')";
   */          /*$query = mysqli_query($con,$insert);
   if($query){
      echo "<script>alert('Well Done.')</script>";
      echo "<script>window.open('login.php','_self') </script>";

   }* */   
 


      ?>