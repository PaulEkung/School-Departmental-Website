<?php
session_start(); 
// function for logout session
require_once 'connection.php';

 function checkLogin($connection){
    if(!isset($_SESSION["sessionId"])){

        header("Location: Login.php");
        die;
        
    }
}

// function for login user

function login($connection){

    if($_SERVER['REQUEST_METHOD'] == "POST")
       {
    
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    // To protect SQL injection
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    if(empty($email) || empty($password))
    {
        
         echo "<div class=' alert alert-danger offset-0 text-center shadow'>Please fill in all input fields</div>";
        
        
    }else{
        $sql = "SELECT * FROM nacossusers where email = ? OR password = ?;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            die("Failed to connect to database");
        }else{

            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           if($result && mysqli_stmt_num_rows($stmt) === 0){
            if($row = mysqli_fetch_assoc($result)){
            $pwd = $row["password"];
            $r_email = $row["email"];
            $password_verify = password_verify($password, $pwd);
            if($email !== $r_email)
            {
                echo "<div class=' alert alert-danger offset-0 text-center shadow'>Unknown email address provided</div>";
                
            }else if($password_verify !== true){
                echo "<div class=' alert alert-danger offset-0 text-center shadow'>Incorrect password provided</div>";

            }else{

                $_SESSION['sessionId'] = $row["id"];
                $_SESSION['sessionMessage'] = "<div class='text-light'>Login successful</div>";
                $_SESSION['sessionName'] = $row["name"];
                header("Location: index.php");
            }
        }
        }
    }
    
            mysqli_stmt_close($stmt);
            mysqli_close($connection);

            } 

            }
            }
            // function for nd course registration
            function adder_1($connection){

        if(isset($_POST["submit"]))
            {
            $courseTitle = $_POST["title"];
            $courseCode = $_POST["code"];
            $creditLoad = $_POST["unit"];
            
        if(empty($courseTitle) || empty($courseCode) ||     empty($creditLoad))
            {
            echo "<div class='alert alert-danger text-center'>Please fill in all input fields</div>";
           
        }else{

            $sql = "SELECT course_code from `nd1` where course_code = ?;";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt, $sql)){
            die("Failed to connect");
            
        }else{

        mysqli_stmt_bind_param($stmt, "s", $courseCode);
        mysqli_stmt_execute($stmt);
         mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
         if($rowCount > 0){
            echo "<div class='alert alert-danger text-center'>The course code $courseCode already exist</div>";

         }else{

        $q = $connection->query("INSERT into `nd1`(course_code, course_title, credit_load) values ('$courseCode', '$courseTitle', '$creditLoad')");

         if($q)

            {
            echo "<div class='alert alert-success text-center'>Course added successfully</div>";
            
        }else{

            echo "<div class='alert alert-danger text-center'>Failed to add course! Something went wrong</div>";
            }
            }
            }

            mysqli_stmt_close($stmt);
            mysqli_close($connection);
            }
            }
            }

            // function for nd2 course registration

        function adder_2($connection){

            if(isset($_POST["submit"]))

             {             
         $courseTitle = $_POST["title"];
         $courseCode = $_POST["code"];
         $creditLoad = $_POST["unit"];

        if(empty($courseTitle) || empty($courseCode) || empty($creditLoad))
        {
            echo "<div class='alert alert-danger text-center'>Please fill in all input fields</div>";
        }else{
            $sql = "SELECT course_code from `nd2` where course_code = ?;";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                die("Failed to connect");
            }else{
            mysqli_stmt_bind_param($stmt, "s", $courseCode);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
            if($rowCount > 0){
                    echo "<div class='alert alert-danger text-center'>The course code $courseCode already exist</div>";
                }else{
            $q = $connection->query("INSERT into `nd2`(course_code, course_title, credit_load) values ('$courseCode', '$courseTitle', '$creditLoad')");
            if($q)
            {
                echo "<div class='alert alert-success text-center'>Course added successfully</div>";
            }else{
                echo "<div class='alert alert-danger text-center'>Failed to add course! Something went wrong</div>";
            }
                }
            }
    
            mysqli_stmt_close($stmt);
            mysqli_close($connection);
        }
    }
    }
// function for hnd1 course registration
    function adder_3($connection){

        if(isset($_POST["submit"]))
        {
            $courseTitle = $_POST["title"];
            $courseCode = $_POST["code"];
            $creditLoad = $_POST["unit"];
            if(empty($courseTitle) || empty($courseCode) || empty($creditLoad))
            {
                echo "<div class='alert alert-danger text-center'>Please fill in all input fields</div>";
            }else{
                $sql = "SELECT course_code from `hnd1` where course_code = ?;";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    die("Failed to connect");
                }else{
            mysqli_stmt_bind_param($stmt, "s", $courseCode);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
            if($rowCount > 0){
                echo "<div class='alert alert-danger text-center'>The course code $courseCode already exist</div>";
            }else{
                $q = $connection->query("INSERT into `hnd1`(course_code, course_title, credit_load) values ('$courseCode', '$courseTitle', '$creditLoad')");
                if($q)
                {
                    echo "<div class='alert alert-success text-center'>Course added successfully</div>";
                }else{
                    echo "<div class='alert alert-danger text-center'>Failed to add course! Something went wrong</div>";
                }
            }
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
        }
        }

        // function for hnd2 course registration

        function adder_4($connection){
    
            if(isset($_POST["submit"]))
            {
        $courseTitle = $_POST["title"];
        $courseCode = $_POST["code"];
        $creditLoad = $_POST["unit"];
        if(empty($courseTitle) || empty($courseCode) || empty($creditLoad))
        {
            echo "<div class='alert alert-danger text-center'>Please fill in all input fields</div>";
        }else{
        $sql = "SELECT course_code from `hnd2` where course_code = ?;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            die("Failed to connect");
        }else{
        mysqli_stmt_bind_param($stmt, "s", $courseCode);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowCount = mysqli_stmt_num_rows($stmt);
        if($rowCount > 0){
            echo "<div class='alert alert-danger text-center'>The course code $courseCode already exist</div>";
        }else{
            $q = $connection->query("INSERT into `hnd2`(course_code, course_title, credit_load) values ('$courseCode', '$courseTitle', '$creditLoad')");
            if($q)
            {
                echo "<div class='alert alert-success text-center'>Course added successfully</div>";
            }else{
                echo "<div class='alert alert-danger text-center'>Failed to add course! Something went wrong</div>";
                    }
                }
            }

            mysqli_stmt_close($stmt);
            mysqli_close($connection);
        }
        }
        }

    
        
       


    