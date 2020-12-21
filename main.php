<!DOCTYPE html>
<html>
<head>
<title>Sunleaf.Net</title>  <!-- title-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <style>
      body{
        overflow-x: hidden;   /* <!-- kinda remove the horizontal scrolling--> */ 
        }

        #centered1 {
          position: absolute;
          font-size: 10vw;
          top: 30%;
          Left: 30%;
          transform: translate(-50%,-50%);
      }
        #centered2 {
          position: absolute;
          font-size: 10vw;
          top: 50%;
          Left: 40%;
          transform: translate(-50%,-50%);
      }
        #centered3 {
          position: absolute;
          font-size: 10vw;
          top: 70%;
          Left: 30%;
          transform: translate(-50%,-50%);
      }
      #signup{
        width:60%;
        border-radius: 30px;
        width:60%;
        background-color:  #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        border-radius: 30px;
      }
      #login{
        width:60%;
        background-color:  #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        border-radius: 30px;

      }
      #home{
        width:60%;
         
        border-radius: 30px;

      }
      #login:hover{
        width:60%;
        background-color:  #fff;
        border: 2px solid #1da1f2;
        color: #1da1f2;
        border-radius: 30px;

      }
      .well{
        background-color: #187AFB;
      }
 </style>

<body>
    <div class="row">
    <div class="col-sm-12"> 
    <div class="well">
            <center><h1 style="color: white;">Sunleaf.Net</h1></center> 

    </div>
    </div>
    </div>

  <div class ="row">
        <div class="col-sm-6" style = "Left:0.5%;">
          <img src= "images/2.jpg" class="img-rounded" title="logo" width="750px" height="560px">      <!--logo image-->

          <div id="centered1" class="centred"><h3 style="color:white;">
          <span class="glyphicon glyplhicon-search"></span>&nbsp&nbsp<strong>Your Interests.</strong>
          </h3></div>

          <div id="centered2" class="centred"><h3 style="color:white;">
          <span class="glyphicon glyplhicon-search"></span>&nbsp&nbsp<strong>Hear What people are talking about.</strong>
          </h3></div> 

          <div id="centered3" class="centred"><h3 style="color:white;">
          <span class="glyphicon glyplhicon-search"></span>&nbsp&nbsp<strong>Join Conversation.</strong>
          </h3></div> 

         </div>
         <div class ="col-sm-6" style="left:8%;">
         <img src= "images/logoM.png" class="img-rounded" title="logo" width="300px" height="80px">      <!--logo image-->
        <h2><strong>See what's happening in <br> the world right now.</strong></h2></br>
        <h4><strong>Join today <br> the world right now</strong></h4></br>
        
        
        <form method="post" action="">
        <button id="home" class="btn btn-info btn-lg" name="home"> Home</button><br><br>
        <?php
        if(isset($_POST['signup']))
        {
          echo "<script>window.open('signup.php','_self')</script>"; }
        ?>
      <button id="login" class="btn btn-info btn-lg" name="login"> Log in</button><br><br>
        <?php
        if(isset($_POST['login']))
        {
          echo "<script>window.open('login.php','_self')</script>"; }
        ?>
         
        <button id="signup" class="btn btn-info btn-lg" name="signup"> Sign up</button><br><br>
        <?php
        if(isset($_POST['signup']))
        {
          echo "<script>window.open('signup.php','_self')</script>"; }
        ?>

        
        </form>

          </div>         
</div>

</body>
</html>