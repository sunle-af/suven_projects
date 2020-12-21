<?php  
session_start();
  include('includes/connection.php');
  include ('includes/header.php');
if(!isset($_SESSION['user']))
{
   header("location: index.php");
  
}
?>

<html>
<head>
<?php
   $user= $_SESSION['user'];
  
   $sql_query= "SELECT * FROM users WHERE user_name='$user'";
   $res=mysqli_query($con,$sql_query);
   
   $resultCheck = mysqli_num_rows($res);
   if($resultCheck>0){
     while($rows = mysqli_fetch_assoc($res)){
		 
	//	  describe_user Relationship_status user_country register_date user_gender user_birthday

   $user_id=$rows['user_id'];	 
   $first_name=$rows['f_name'];
  $last_name=$rows['l_name'];
   $describe_user=$rows['describe_user']; 
   $Relationship_status=$rows['relationship'];
	$user_cover=$rows['user_cover'];
	$user_profile=$rows['user_image'];
   $register_date=$rows['user_reg_date'];
   $user_gender=$rows['user_gender'];

   $user_birthday=$rows['user_bday'];
   $cover= $rows['user_cover'];
    
       }
   }
   else{echo 'Failed ';} 
 
  


?> 
 
    <title><?php echo "$first_name"; ?></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

	<body> 
 
<div class="row" style="margin-left: auto; margin-left: auto;">
	<div class="col-sm-2">	
	</div>
	<div class="col-sm-8">
  
  <?php
echo "

<div style=' width: 100%;'>
<div style=' margin-left:none; margin-top:10%; width: 15%; height: 100px; float: left; background: green;'> 
         <div id='profile-img'>

			 <img  class='img-rounded' src='users/$user_profile' style = 'max-width:100%;' height='auto;'  alt='Profile'></div>
			 
				<form action='profile.php?u_id='$user_id' method='post' enctype='multipart/form-data'>
				 
			
				<ul class='nav pull-left' style='position:relative;' >  
				<li class='dropdown'>
					<button class='dropdown-toggle btn btn-default' data-toggle='dropdown'>Change Profile</button>
					<div class='dropdown-menu'>
						<center>
						<p>Click <strong>Select Profile</strong> and then click the <br> <strong>Update Profile</strong></p>
						<label class='btn btn-info'> Select Profile
						<input type='file' name='u_image' size='60' />
						</label><br><br>
						<button name='update' class='btn btn-info'>Update Profile</button>
						</center>
					</div>
				</li>
			</ul>
          </form>
			</div>	

</div>


<div style='margin-left: 20%; width:75%; height: 430px; postion:relative; background: blue;'> 
			


				<form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>
				 <img id='cover-img' class='img-rounded' src='cover/$cover'  style= 'max-width:100%;' 'max-height:auto;' '  auto alt='cover'> 
 					<ul class='nav pull-left' style='postion:relative;'   >  
					<li class='dropdown'>
						<button style='postion:relative;' class='dropdown-toggle btn btn-default' ' data-toggle='dropdown'>Change Cover</button>
						<div class='dropdown-menu'>
							<center>
							<p>Click <strong>Select Cover</strong> and then click the <br> <strong>Update Cover</strong></p>
							<label class='btn btn-info'> Select Cover
							<input type='file' name='u_cover' size='60' />
							</label><br><br>
							<button name='submit' class='btn btn-info'>Update Cover</button>
							</center>
						</div>
					</li>
					</ul>
				</form>
</div>

</div>
<div>
				<div>
 				
			    </div>

			<br></div>
			";
		?>	
 
 
	<div class="col-sm-2"  style="float:right; background-color: #e6e6e6;text-align: center;left: 0.9%;border-radius: 5px; margin-right:auto;">
		<?php
		echo"
			<center><h2><strong>About</strong></h2></center> 
			<center><h4><strong>$first_name $last_name</strong></h4></center>
			<p><strong><i style='color:grey;'>$describe_user</i></strong></p><br>
			<p><strong>Relationship Status: </strong> $Relationship_status</p><br>
			 
			<p><strong>Member Since: </strong> $register_date</p><br>
			<p><strong>Gender: </strong> $user_gender</p><br>
			<p><strong>Date of Birth: </strong> $user_birthday</p><br>
		";
		?>
	</div>
 


		<?php

			if(isset($_POST['submit'])){

				$u_cover = $_FILES['u_cover']['name'];
				$image_tmp = $_FILES['u_cover']['tmp_name'];
				$random_number = rand(1,100);

				if($u_cover==''){
					echo "<script>alert('Please Select Cover Image')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "cover/$u_cover");
					$update = "update users set user_cover='$u_cover' where user_id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Your Cover Updated')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					}
				}

			}

		?>
	</div>


	<?php
		if(isset($_POST['update'])){

				$u_image = $_FILES['u_image']['name'];
				$image_tmp = $_FILES['u_image']['tmp_name'];
				$random_number = rand(1,100);

				if($u_image==''){
					echo "<script>alert('Please Select Profile Image on clicking on your profile image')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "users/$u_image");
					$update = "update users set user_image='$u_image' where user_id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Your Profile Updated')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					}
				}

			}
	?>



</body>

 
</html>
 