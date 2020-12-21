<?php
include("connection.php");
//include("../functions/functions.php");
 
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Sunleaf.Net</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
 	<?php 
		
		$user= $_SESSION['user'];

		$sql_query= "SELECT * FROM users WHERE user_name='$user'";
		$res=mysqli_query($con,$sql_query);
		
		$resultCheck = mysqli_num_rows($res);
		if($resultCheck>0){
		  while($rows = mysqli_fetch_assoc($res)){
			  
		 //	  describe_user Relationship_status user_country register_date user_gender user_birthday
 
	  $user_id = $rows['user_id']; 
	  $user_name = $rows['user_name'];
	  $first_name = $rows['f_name'];
	  $last_name = $rows['l_name'];
	  $describe_user = $rows['describe_user'];
	  $Relationship_status = $rows['relationship'];
	  $user_pass = $rows['user_pass'];
	  $user_email = $rows['user_email'];
  
	  $user_gender = $rows['user_gender'];
	  $user_birthday = $rows['user_bday'];
	  $user_image = $rows['user_image'];
	  $user_cover = $rows['user_cover'];
	  $recovery_account = $rows['recovery_account'];
	  $register_date = $rows['user_reg_date'];
			  
  
	 
	 
		   }
		}else{echo 'Failed ';}
	  
			
			$user_posts = "select * from posts where user_id='$user_id'"; 
			$run_posts = mysqli_query($con,$user_posts); 
			$posts = mysqli_num_rows($run_posts);
			?>




	        <li><a href='profile.php?<?php echo "u_id=$user_id" ?>'><?php echo "$first_name"; ?></a></li>
 
			<li><a href='../social_network/member.php'>Find People</a></li>
			<li><a href="messages.php?u_id=new">Messages</a></li>


					<?php
						echo"

						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class='glyphicon glyphicon-chevron-down'></i></span></a>
							<ul class='dropdown-menu'>
								<li>
									<a href='my_post.php?u_id=$user_id'>My Posts <span class='badge badge-secondary'>$posts</span></a>
								</li>
								<li>
									<a href='edit_profile.php?u_id=$user_id'>Edit Account</a>
								</li>
								<li role='separator' class='divider'></li>
								<li>
									<a href='../social_network/logout.php'>Logout</a>
								</li>
							</ul>
						</li>
						";
					?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<form class="navbar-form navbar-left" method="get" action="results.php">
						<div class="form-group">
							<input type="text" class="form-control" name="user_query" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-info" name="search">Search</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>




<?php // include("../profile.php");?>