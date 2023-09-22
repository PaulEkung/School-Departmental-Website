<?php 
// session_start();
require_once "connection.php";
require_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <script src="js.js"></script>
        </head>
        <body class="bg-primary">

        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- <div class="text-center bg-success offset-4 w-25 p-2 text-light shadow font-monospace" style="">Sign In</div> -->
        <!-- <div class="text-center bg-success offset-3 w-50 fw-bold p-2 text-light shadow font-monospace text-uppercase" style="">Sign In</div> -->

        <br>

        <div class="container">

        <div class="row">

        <div class="col-sm-4">
        <a href="welcome_Page.php" class="text-light bi bi-arrow-left-circle fs-1"></a>
        </div>
        <div class="col-sm-4 bg-light p-4 shadow">
        <div class="header p-3 bg-dark text-light text-center">Sign In</div>
        <br>
        
        <?php $login_check = login($connection); ?>
    
        <form action="Login.php" method="post" class="" autocomplete="off">
        <br>
        <input type="email" class="form-control" Placeholder="Email Address" name="email" autofocus>
        <br>
        <input type="password" class="form-control" Placeholder="Password" id="password" name="password">
        <br>
        &nbsp;<input type="checkbox" onclick="showPwd()" style="cursor:pointer"> Show Password
        <br>
        <br>
        <br>
        <input type="submit" value="Login" name="submit" class="btn btn-success offset-3 w-50">
        <br>
        <br>
        <br>
        <span class="offset-2"> Already have an account?
         <a href="Registration.php" class="text-decoration-none fw-bold"> Sign Up </a> </span>
        </form>
        
       
        </div>
        <div class="col-sm-4"></div>

        </div>

        </div>

       
    
</body>
</html>