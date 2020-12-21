<!DOCTYPE html>

<?php
session_start();
 include('includes/header.php');
 include('includes/connection.php');
 
?>
<html>
    <head>
        <title>Find People</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
     <div class= "row">
         <div class="col-sm-12">
             <center><h2>Find New People</h2></center>
             <div class="row"> 
                
                 </form></div>
                 <div class="col-sm-4"></div>
                 
             </div><br>
             </div>
     </div>
 
            </body>

</html>
   <?php
    $get_user= "SELECT * FROM users";
    $res=mysqli_query($con,$get_user);
    
    $resultCheck = mysqli_num_rows($res);
    if($resultCheck>0){
      while($rows = mysqli_fetch_assoc($res)){
        $first_name=$rows['f_name'];
        $last_name=$rows['l_name'];
        $user_profile=$rows['user_image'];
        $user_id= $rows['user_id'];
      
      echo "
    <div class='row' style='background-color: white;'>
    <div class='col-sm-3' >
    </div>
    <div class='col-sm-6'>
    </div>
    <div class='row' id='find_people'  style='width:auto; margin-left:40%; margin-right:30%; background-color: white;'>
    <div class='col-sm-4'>
        <a href='user_profile.php'?u_id=$user_id>
        <img src = '../social_network/users/$user_profile'  title =' $user_id' style=  'width:150px;' , 'height:auto;' , 'float:left;' ,'margin:auto;'/>
         </a>
     </div><br><br> 
 <div class='col-sm--6' style='background-color: white; width:100%;'>
    <a href ='user_profile.php?u_id=$user_id' >
    <center> <strong><h2>$first_name $last_name</h2></strong> <center> </a> 
    </div>
    <div class='col-sm-3>
    </div>
    </div>
    </div>
    <div class='col-sm-4'>
    </div>
    </div><br>
    "; 

      }
    }
    else{echo 'something ';}
      ?>
