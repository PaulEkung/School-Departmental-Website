        <?php 
        require_once 'connection.php'; 
        session_start();

        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration</title>
        <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
        <script src="js.js"></script>
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">

        </head>
        <body>
        <br>
        <br>
        <a href="welcome_page.php" class="bi bi-arrow-left-circle fs-1 offset-1 text-secondary"></a>
        <br>
        <br>
        <!-- <span class="text-center bg-success p-3 fw-bold text-light shadow font-monospace offset-5 w-50 text-uppercase"  -->
        <!-- style="">Create A Quick Account Now!</span> -->
        <!-- <div class="text-center bg-success offset-3 w-50 fw-bold p-2 text-light shadow font-monospace text-uppercase" style="">Create A Quick Account Now!</div> -->
    

        <div class="container">

        <div class="row">

        <div class="col-sm-4">
        <!-- <a href="welcome_Page.php" class="text-light bi bi-arrow-left-circle fs-1"></a> -->
        </div>
        <div class="col-sm-4 ">
        <div class="header p-3 bg-dark text-light text-center">Create Your Account Now!</div>
        <br>
        <form action="Registration.php" method="post" autocomplete="off" class="p-4 shadow">
        <input type="text" class="form-control" Placeholder="Username" name="name" autofocus>
        <br>
        <input type="text" class="form-control" Placeholder="Email Address" name="email">
        <br>
        <input type="password" class="form-control" Placeholder="Password" id="password" name="password">
        <br>
        &nbsp;<input type="checkbox" onclick="showPass()"> Show Password
        <br>
        <br>
        <input type="submit" value="Continue" name="submit" class="btn btn-success offset-3 w-50">
        <br>
        <br>
        <br>
        <span class="offset-2"> Already have an account? 
        <a href="Login.php" class="text-decoration-none fw-bold"> Sign In </a> </span>
        <br>
        <br>
        </form>
        
        <?php echo register($connection) ?> 
        <br>
        </div>
        <div class="col-sm-4"></div>

        </div>

        </div>
        <!-- Getting users data by Post http method -->
        <?php 
        function register($connection){

        
        if(isset($_POST["submit"])){

        $username = ucwords($_POST["name"]);

        $email = $_POST["email"];

        $password = $_POST["password"];

        $unique_id = bin2hex(random_int(666, 999));
        //   Preventing SQL injection  
        $username = stripslashes($username);

         $username = mysqli_real_escape_string($connection, $username);

        $email = stripslashes($email); 

        $email = mysqli_real_escape_string($connection, $email);

        $password = stripslashes($password); 
        
        $password = mysqli_real_escape_string($connection, $password);

            // Checking form submission
        if(empty($username) || empty($email) || empty($password)){
       
        echo "<div class='text-center alert alert-danger shadow offset-0'>Please fill in all required fields</div>";
        
       }elseif(is_numeric($username)){
        
        echo "<div class='text-center alert alert-danger shadow offset-0'>Invalid username</div>";

        }elseif(!filter_var($email, FILTER_SANITIZE_EMAIL) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        
        echo "<div class='alert alert-danger text-center'>Invalid email address format
        </div>";
        
        }else if(!preg_match("/^[a-zA-Z0-9 ]*$/", $username)){
            echo "<div class=' text-center alert alert-danger'>Invalid username characters</div>";
        }else{
        $sql = "SELECT name FROM `nacossusers` WHERE name = ?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "<center>" . "<div class='alert alert-danger' style='color:red;
            background: transparent; border: 2px solid red'>"
            . "Unable to perform request" . "</div>" . "</center>";
            die;
        }else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
            if($rowCount > 0){
                echo "<script type='text/javascript'> window.alert(\"The name '$username' already exist\")</script>";
                        
            }else{
                $query = "INSERT INTO `nacossusers` (unique_id, name, email, password) VALUES (?,?,?,?)";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query)){
                echo "<center>" . "<div class='alert alert-danger' style='color:red;
                 background: transparent; border: 2px solid red'>"
                 . "Unable to perform request" . "</div>" . "</center>";
                  exit();
                }else{

                    $hashPass = password_hash($password, PASSWORD_DEFAULT);// Hashing users passwod
                    mysqli_stmt_bind_param($stmt, "ssss",$unique_id, $username, $email, $hashPass);
                    mysqli_stmt_execute($stmt);
                    header("Location: Login.php");
                }
            }
        }

        //Closing connection
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
        }
        }
    }
        

        ?>



        </body>
        </html>