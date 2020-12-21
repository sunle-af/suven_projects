<!DOCTYPE html>
<html>
<head>
<title>login</title>  <!-- title-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <style>
    
    body {
        overflow-x:hidden;

    }
    .main-content{
        width: 50%;
        height:50%;
        margin:10px auto;
        background-color:#fff;
        border: 2px solid #e6e6e6;
        padding: 40px 50px;
    }
    .header{
        border:0px solid #000;
        margin-bottom:5px;

    } 
    .well{
        background-color: #187FAB;;
    }
    .overlap-text{
        position: relative;

    }
    .overlap-text a{
        position: absolute;
        top:8px;
        right: 10px;
        font-size: 14px;
        text-decoration: none;
        font-family: 'Overpass Mono', monospace;
        letter-spacing: -1px;
    }
    #login{
        width:60%;
        border-radius:30px;
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

    <div class="row">
        <div class="col-sm-12">
            <div class= "main-content">
                <div class ="header">
                    <h3 style= "text-align:center;">Login to Sunleaf.Net</h3>
                </div>
                <div class="l-part">
                    <form action="sigin.php" method="POST">
                        <input type = "email" name="username" placeholder="Email" required="required" class="form-control input-md"><br>
                        <div class="overlap-text">
                            <input type="password" name="password" placeholder="Password" required="required" class="form-control input-md"><br>
                             <a style="text-decoration:  none; float: right; color:#187FAB;" data-toggle="tooltip" title="ResetPassword"
                    href="forgotpass.php">Forgot? </a>
                        </div>
                      
                        <a style="text-decoration:  none; float: right; color:#187FAB;" data-toggle="tooltip" title="signup"
                    href="signup.php">Don't have an account? </a><br><br> 

                    <center> <input type="submit" class="btn btn-info btn-lg" name="login" value="Login"/></center>   
                                            
                    </form>
                
                </div>  <form action="main.php" method="post">
                    <br> <center> <input type="submit" class="btn btn-info btn-lg" name="Home" value="Home"/></center> 
                    <?php if(isset($_POST['Home'])){
                                header("Location: main.php");

                    } 
                    ?>
                </form>  
            </div>
        </div>
    </div>

</body>


</html>