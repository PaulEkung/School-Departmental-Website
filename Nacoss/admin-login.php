<?php 
require_once "connection.php";
session_start();
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
        <a href="welcome_Page.php" class="bi bi-arrow-left-circle text-light fs-1"></a>
        </div>
        <div class="col-sm-4 bg-light p-4 shadow">
        <div class="header p-3 bg-dark text-light text-center">Login to your dashboard</div>
        <br>
        
        <?php $login_check = adminLogin($connection); ?>
    
        <form action="admin-login.php" method="post" class="">
        <br>
        <input type="password" class="form-control" Placeholder="Enter password" id="password" name="password">
        <br>
        &nbsp;<input type="checkbox" onclick="showPwd()" style="cursor:pointer"> Show Password
        <br>
        <br>
        <input type="submit" value="Login" name="submit" class="btn btn-success offset-3 w-50">
        
        </form>
        
       
        </div>
        <div class="col-sm-4"></div>

        </div>

        </div>

         <?php 

     function adminLogin($connection){

    if($_SERVER['REQUEST_METHOD'] == "POST")
       {
    
    //something was posted
    $password = $_POST['password'];

    // To protect SQL injection
    $password = stripslashes($password);
    $password = mysqli_real_escape_string($connection, $password);

    if(empty($password))
    {
        echo "<div class=' alert alert-danger offset-0 text-center shadow'>Please provide your password to login</div>";
        
    }else{

        $sql = "SELECT password FROM `admin` WHERE password = ?;";

        $stmt = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($stmt, $sql)){

            echo "<center>" . "<div class='alert alert-danger' style='color:red;
             background: transparent; border: 2px solid red'>"
             . "Unable to perform request" . "</div>" . "</center>";
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $password);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $pwd = $row["password"];
                if($password !== $pwd){

               
               echo "<div class='text-center alert alert-danger  shadow offset-0'>Incorrect password</div>";

                }else {
             
                      
                        $_SESSION['sessionPwd'] = $row['password'];
                        $_SESSION['sessionMessage'] = "<div class='text-light'> Login successful!  </div>";
                    
                        
                        $msg = "<script type='text/javascript'> window.alert(\"Login Sucessfull\")</script>";
                              
                        header("Location: admin.php?success=$msg");
                        die;
           
           
                           }
                           
                    
                        }
                        
                     
                        echo "<div class='text-center alert alert-danger  shadow offset-0'>Incorrect password</div>";
        
                        }

                        mysqli_stmt_close($stmt);
                        mysqli_close($connection);
                        
                    }
                    }
                }




    ?>

    
</body>
</html>