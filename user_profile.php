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

           if(isset($_GET['user_id'])){
            $user_id = $_GET['user_id'];

        }
        if($user_id<0 || $u_id== ""){
            echo "something";
        }
        ?> 
        <div class="col-sm-12">
            <?php
            if(isset($_GET['user_id'])){
                global $con;
                $user_id = $get['user_id'];
                $select =" SELECT * from users where user_id = '$user_id";
                $run = mysqli_query($con,$select);
                $rows= mysqli_fetch_array($run);
                $name =$rows['user_name'];

            }  ?>
             
            <?php
            if(isset($_GET['user_id'])){
                global $con;
                $user_id = $get['user_id'];
                $select =" SELECT * from users where user_id = '$user_id";
                $run = mysqli_query($con,$select);
                $rows= mysqli_fetch_array($run);
                $name =$rows['user_name'];

                $user_id=$rows['user_id'];	 
                $first_name=$rows['f_name'];
               $last_name=$rows['l_name'];
                $describe_user=$rows['describe_user']; 
                $Relationship_status=$rows['relationship'];
           
                 $user_profile=$rows['user_image'];
               
                $user_gender=$rows['user_gender'];
             
                $user_birthday=$rows['user_bday'];
                        echo "
                                <div class='row'>
                                <div class='col-sm-1'>
                                
                                </div>
                        <center>
                                <div style='background-color: #e6e6e6;' class='col-sm-3'>
                                <h2>Information about</h2>
                                <img class= 'img-circle' src='users/$user_profile' width=150px height=150px>
                                <br><br>
                                <ul class='list-group>
                                <li class='list-group-item' title='Username'><strong>$first_name $last_name</strong>
                                </li>
                                <li class='list-group-item' title='User Status'><strong>$describe_user</strong>
                                </li>
                                <li class='list-group-item' title='Gender'><strong>$user_gender</strong>
                                </li>
                                <li class='list-group-item' title='Birthday'><strong>$user_birthday</strong>
                                </li>
                                <li class='list-group-item' title='Relationship Status'><strong>$Realtionship</strong>
                                </li>
                                </ul>
                                </div>
                        
                                </div>
                        
                        
                        
                        
                        ";

            }  ?>
        </div>
    </div>
 
            </body>

</html>
   