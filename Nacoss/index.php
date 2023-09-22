        <?php
        require 'connection.php';
        // session_start();
        require_once 'function.php';
        $check_login = checkLogin($connection);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>HomePage</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
            <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
            <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
            
            <script src="js.js"></script>

            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/
            css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhF1dvKuh
            fTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/
            font/bootstrap-icons.css"> -->

        <style type="text/css" media="all">

        @import url("https://fonts.googlealis/css?family=Anonymous+Pro");

        .sidenav{
        height: 50%;
        width: 0;
        position: fixed;
        z-index: 100;
        top: 30px;
        right: 0;
        background: rgba(0, 3, 32, 0.753);
        overflow-x: hidden;
        padding-top: 90px;
        transition: 0.3s;

        }


        .sidenav a{
            
        display: block;
        padding: 8px 8px 8px 30px;
        text-decoration: none;
        font-size: 22px;
        transition: 0.3s;
        color: aliceblue;
        font-family: 'Courier New', Courier, monospace;;
        /* font-weight: bold; */
        text-transform: capitalize;
        font-weight: 700;

        }

        .sidenav a:hover{
            background-color: rgba(4, 48, 56, 0.781);
            color:gold;
            transform: scale(1.1);
            font-weight: 500;
        }

        .sidenav .closebtn{
            position: absolute;
            color: black;
            top: 45px;
            right: 20px;
            font-size: 36px;
            margin-left: 50px;
            cursor: pointer;
            color: aliceblue;
        }

        /* carousel sliding styling starts here */
        .carousel-inner{
            width: 100vw;
            margin-left: -4.5rem;
            margin-top: -40px;
            
        }

        .carousel-item img{
            height: 50vh;
            width: 100%;
        }

        .carousel-control-prev:hover{
            background:  #6b1e1e30;
        }
        
        .carousel-control-next:hover{
            background:  #6b1e1e30;
        }

        /* carousel sliding styling ends here */

        .navbar-brand{
            border: 3px solid #999999;
            /* width: 22%; */
            padding: 7px;
        }

       
            </style>
            


        </head>
        <body>


                    <div class="container">
                        <div class="row">
                        <div class="container">

                            <div id="mySidenav" class="sidenav">
                            <span class="closebtn" onclick="closeNav()">&times;</span>
                            <a href="courses.php">Courses</a>
                            <a href="#contact-info">Contact</a>
                            <a href="about.php">About Us</a>
                            <a href="#rate" data-bs-toggle="modal">Rate</a>
                                <a href="#myModal" role="button" data-bs-target="#myModal" data-bs-toggle="modal">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                <div class="row">
                <div class="modal fade" id="rate">
                <div class="container">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <span class="bi bi-stars fs-3"></span>&nbsp; Rate us now!
                <span class="bi bi-x-circle-fill fs-3 btn" data-bs-dismiss="modal"></span>
                </div>
                <div class="modal-body">

                <span class="bi bi-star-fill fs-2 offset-3" onclick="changeColor(this)" style="color:black;cursor:pointer" id="star1"></span>
                <span class="bi bi-star-fill fs-2 offset-1"  onclick="changeColor(this)" style="color:black;cursor:pointer" id="star2"></span>
                <span class="bi bi-star-fill fs-2 offset-1"  onclick="changeColor(this)" style="color:black;cursor:pointer" id="star3"></span>
                <span class="bi bi-star-fill fs-2 offset-1"  onclick="changeColor(this)" style="color:black;cursor:pointer" id="star4"></span>
                <br>
                <br>
                
                <script>
            function changeColor(element)
        {
            var currentColor = element.style.color;
            if(currentColor == "black"){
                element.style.color = "blue";
            }else{
                element.style.color = "black"
            }
        }
    
                </script>
                
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="index.php?rating=success" class="btn btn-success offset-4 w-25 fs-5">Rate</a>
                
               <?php 
               if(isset($_GET['rating']))
               {
                   $alert = $_GET['rating'];
                   if($alert == 'success')
                   {
                       $conn = connection_status();
                       if($conn === true)
                       {
                       echo "<script type='text/javascript'>window.alert('Your rating has successfully been sent. Thanks for your support')</script>";
                    }else{
                        echo "<script type='text/javascript'>window.alert('Failed to send rating! Please check your internet connection and try again')</script>";

                   }
                }
               }
               ?>
               
               
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-3"></div>
                </div>
                </div>
                </div>
                </div>
                </div>

                <a href="#" id="topMost"></a>
        
            <!-- <svg xmlns="http://www.w3.org/2000/svg"></svg> -->
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md bg-secondary navbar-dark py-3 fixed-top">

                <div class="container">

                    <a href="#" class="navbar-brand text-center text-warning fw-bold">One Nacoss</a>
                    <div id="message" class="">
                    <?php
                    if(isset($_SESSION['sessionMessage'])){
                        echo $_SESSION["sessionMessage"];
                    }
                    ?>
                    <script type="text/javascript">
                    var message = document.getElementById("message");
                    message.onclick = setTimeout(function(){
                        message.style.visibility ="hidden";
                        <?php 
                        if(isset($_SESSION["sessionMessage"])){
                            unset($_SESSION["sessionMessage"]);
                        }
                        ?>
                    }, 3000);
                    </script>
                    
                    </div>

                    <button class="navbar-toggler" onclick="openNav()" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                    <div class="collapse navbar-collapse " id="navmenu">

                        <ul class="navbar-nav ms-auto" id="lock">

                            <li class="nav-item">
                                <a href="#instructor" class="nav-link active">Administrators</a>
                            </li>
                            <li class="nav-item">
                                <a href="#questions" class="nav-link active"> Questions</a>
                            </li>
                            <li class="nav-item">
                                <a href="#learn " class="nav-link active"> Learn </a>
                            </li>
                            <li class="nav-item">
                                <button  onclick="myFunction()"
                                class="nav-link btn btn-secondary text-white"
                                >More</button>
                            </li>

                        </ul>
                        
                    </div>

                </div>
            </nav>
            
            <!-- Loguot modal -->

            <div class="container-fluid">
                <div class="row">
                    <div class="modal fade" role="dialog" id="myModal" tabindex="1" aria-labelledby="costumModalLabel"
                     aria-hidden="true" data-easein="shake">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-light lead mt-5">
                                    We will miss you! Hope you visit us soon.
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-dialog">
                                <div class="modal-content">
                        <div class="modal-header p-2 bg-dark text-warning lead"><b>Ready to leave</b></div>
                            <div class="modal-body p-4 text-white" style="background: rgb(1, 11, 24)">
                                <p class="text-center fs-4">Are you sure you want to logout? </p>
                                <br>
                                <button class="btn btn-danger offset-4" data-bs-dismiss="modal">No</button>
                                <a href="logout.php" class="btn btn-primary offset-2">Yes</a>
                            </div>
                            <!-- <div class="modal-footer p-1"> -->
                            <!-- </div> -->
                        </div>
                        </div>
                    </div>
                </div>  
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rating Modal -->
            <div class="container">
                <div class="row">
                    <div class="modal fade" id="courses" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-secondary text-light">Select programme to view courses
                                <span data-bs-dismiss="modal" class="closebtn close btn btn fs-3 text-light">&times;</span>
                                </div>
                                <div class="modal-body">
                                <ul>
                                <li>
                                    <a href="" class="bs-tooltip-start text-dark text-decoration-none">National Diploma Courses</a>
                                </li>
                                <br>
                                
                                <li>
                                    <a href="" class="bs-tooltip-start text-dark text-decoration-none">Higher National Diploma Courses</a>
                                </li>
                                </ul>
                                  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Courses -->

            <!-- Showcase -->
            <br>
            <br>
            <section class="bg-black text-light p-lg-5 pb-lg-0 text-center text-sm-start">

                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div>
                        <?php 
                        if(isset($_SESSION['sessionId'])){
                            echo "<div class='btn btn-success btn-sm'>" . 
                            "<script type='text/javascript'>document.write('Welcome')</script> " . "</div>" .
                            "&nbsp;&nbsp;\t" . ucwords($_SESSION['sessionName']);
                        }else{
                            echo "You are logged in!";
                        }
                        ?>
                        <!-- <?php 
                        // $sql = "SELECT * FROM users WHERE id = 1";
                        // $result = mysqli_query($conn, $sql);
                        // $rowCount = mysqli_num_rows($result);
                        // if($rowCount > 0){
                        //     while ($row = mysqli_fetch_assoc($result)){
                        //      echo $row['username'];
                        //     }
                        // }else{
                        //     echo "No result found";
                        // }
                        ?> -->
                            <h2>Know much about our department<span class="text-warning"></span></h2>
                            <p class="text-warning">We intend to build students towards technological freedom</p>
                            
                            <!-- <button class="btn btn-primary btn-lg my-2">Start Enrollment</button> -->
                        </div>
                        <!-- <div> -->
                        <img class="image-fluid ms-auto d-none d-sm-block mb-5" src="Nac_images/nacoss.jpg" alt="..."
                        style="width:15vw; height:15vh;">
                        <!-- </div> -->
                    </div>
                </div>
            </section>

            <!-- News Letter -->
           
            <!-- Boxes -->

 <section class="p-5 bg-light">

<div id="slides" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#slides" data-bs-slide-to="0" class="active bg-primary">

</button>
<button type="button" data-bs-target="#slides" data-bs-slide-to="1" class="bg-primary">

</button>
<button type="button" data-bs-target="#slides" data-bs-slide-to="2" class="bg-primary">

</button>
</div>

<div class="carousel-inner">
<div class="carousel-item active">
<img src="Nac_images/hero.jpg" class="d-block w-100" alt="">
</div> 
<div class="carousel-item ">
<img src="Nac_images/group1 (4).jpg" class=" d-block w-100" alt="">
</div>
    <div class="carousel-item "> 
<img src="Nac_images/group1 (2).jpg"
    class=" d-block w-100" alt="">
</div>
<!-- <div class="carousel-item">
<img src="Nac_images/about.png" class="d-block w-100" alt="">
</div> -->
<button class="carousel-control-prev" data-bs-target="#slides" data-bs-slide="prev"
    type="button">
    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">prev</span>
</button>
<button class="carousel-control-next" data-bs-target="#slides" data-bs-slide="next"
    type="button">
    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">next</span>
</button>
</div>
</div>
</section>

<section id="instructor" class="p-3 bg-primary">
        <!-- <div class="container"> -->
            <h2 class="text-center text-white">
                Top Departmental Administrators.
            </h2>
            <p class="lead text-center text-white mb-4">
                Our administrators all have 10+ years working as staffs
                in the department.
                <span class="glyphicon glyphicon-user"></span>
            </p>
            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                            class="rounded-circle mb-3" alt=""> -->
                           
                            <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'M.A Malachi'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo strtoupper($row['name']) ?></h4>
                <p class="card-text">
                   <?php echo ucwords($row['rank']) ?>

                                <?php
                            }
                            ?>
                </p>
                <a href="" class="btn btn-primary text-light mx-1">follow on &nbsp; <i class="bi bi-twitter"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                YOU CAN ALSO USE "WOMEN"(portraits/women/13.jpg)
                                class="rounded-circle mb-3" alt=""> -->
                                <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'Goodluck Emereonye'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo ucwords($row['name']) ?></h4>
                <p class="card-text">
                   <?php echo ucwords($row['rank']) ?>

                                <?php
                            }
                            ?>
                </p>
                <a href="" class="btn btn-dark text-light mx-1">follow on &nbsp; <i class="bi bi-facebook"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                    class="rounded-circle mb-3" alt=""> -->
                                    <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'Chris Mike'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo ucwords($row['name']) ?></h4>
                <p class="card-text">
                   <?php echo ucwords($row['rank']) ?>

                                <?php
                            }
                            ?>
                    </p>
                    <a href="" class="btn btn-dark text-light mx-1">follow on &nbsp; <i class="bi bi-instagram"></i></a>

                                </div>
                            </div>
                        </div>
                    <div class="col-md-6 col-lg-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                    class="rounded-circle mb-3" alt=""> -->
                                    <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'Beberick Awu'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo ucwords($row['name']) ?></h4>
                <p class="card-text">
                   <?php echo ucwords($row['rank']) ?>

                                <?php
                            }
                            ?>
                    </p>
                    <a href="" class="btn btn-dark text-light mx-1">follow on &nbsp; <i class="bi bi-youtube"></i></a>

                                </div>
                            </div>
                        </div>
                    <div class="col-md-6 col-lg-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                    class="rounded-circle mb-3" alt=""> -->
                                    <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'Clement Kings'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo ucwords($row['name']) ?></h4>
                <p class="card-text">
                   <?php echo ucwords($row['rank']) ?>

                                <?php
                            }
                            ?>
                    </p>
                    <a href="" class="btn btn-secondary text-light mx-1">follow on &nbsp; <i class="bi bi-linkedin"></i></a>

                                </div>
                            </div>
                        </div>
                    <div class="col-md-6 col-lg-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                    class="rounded-circle mb-3" alt=""> -->
                                    <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'Hillary Abdul'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo ucwords($row['name']) ?></h4>
                <p class="card-text">
                 

                                <?php
                            }
                            ?>
                    <p class="card-text">
                        Assistant HOD
                    </p>
                    <a href="" class="btn btn-secondary text-light mx-1">follow on &nbsp; <i class="bi bi-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                    <div class="col-md-6 col-lg-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                    class="rounded-circle mb-3" alt=""> -->
                                    <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'Benard Harry'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo ucwords($row['name']) ?></h4>
                <p class="card-text">
                   <?php echo ucwords($row['rank']) ?>

                                <?php
                            }
                            ?>
                    </p>
                    <a href="" class="btn btn-secondary text-light mx-1">follow on &nbsp; <i class="bi bi-linkedin"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                        YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                                        class="rounded-circle mb-3" alt=""> -->
                                        <?php
                            $sql = $connection->query("SELECT * FROM staffs where name = 'Luiz Pascal'");
                            if($sql)
                            $row = mysqli_fetch_assoc($sql);
                            {
                                ?>
                                <?php echo "<img src='uploads/".$row['image']."' class=\"rounded-circle w-50 \" alt=\"\"> "?>
                <h4 class="card-title mb-3"> <?php echo ucwords($row['name']) ?></h4>
                <p class="card-text">
                   <?php echo ucwords($row['rank']) ?>

                                <?php
                            }
                            ?>
                        </p>
                        <a href="" class="btn btn-secondary text-light mx-1">follow on &nbsp; <i class="bi bi-facebook"></i></a>

                                    </div>
                                </div>
                            </div>
                
            </div>
        </div>
    </section>

            <section class="p-2" style="background:rgba(0, 3, 32, 0.808)">
            
                    <div class="row text-center">
                        <img src="Nac_images/lab.jpg" alt="" style="width: 200rem; height:25rem">
                        <span class="position-absolute fs-1 text-light" style="margin-top:20rem;font-family:sans-serif">Practical Laboratory</span>
                            </div>
                        
                </section>
                

               <!-- <b>

               
                <section class="bg-image"
                    style="background-image:
                    linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.8)), url('N ac_images/group1 (1).jpg');
                    height:55vh;background-attachment:fixed;background-repeat:no-repeat;background-size:cover">
                
                
              
               <br>
               <br>
                <p style="font-family:sans-serif;font-size:5rem" class="text-center mt-0 text-light lead">
                2021 Graduating Batch
                </p>
                <p class="text-right p-2 text-light text-center"> <br>
                Successfully graduated batch of 2021 computer science students
                    </p>

                
                </section> -->

                <!-- Learn section -->
                <section id="learn" class="p-3">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6https://github.com/PaulEkung/Form001.git">
                                <img src="Nac_images/webman.jpg" class="image-fluid w-100 mb-5" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2>Learn The Fundametals</h2>
                                <p class="lead">
                                    <b>
                                    Learn the fundamentals of ICT in just 3 hours. You'll get more insights on the concept of ICT and computing in other to begin your carrier in the field of IT
                                    </b>
                                </p>

                                <p class="lead" style="color:rgb(3, 22, 59)">
                                   Kindly click the start course button bellow to sign up and begin course for completely free.
                                </p>
                                <a href="https://www.ictskillstraining.com" class="btn btn-dark mt-3"> 
                                    
                                    Start Course
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="learn" class="p-2 bg-dark">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">

                                <div class="col-md">
                                <h2 class="text-warning">Learn Web Development</h2>
                                <p class="lead text-light">
                                    Learn our web development courses online and get cetified for totaly free. We improve your 
                                    skills on web development and introduce you to web with zero knwoledge of programming
                                </p>

                                <p class="lead text-light">
                                   You can simply enroll by clicking the start course button below to get started
                                </p>
                                <a href="https://www.freewebdevcourse.com" class="btn btn-primary mt-3"> 
                                    
                                    Start Course
                                </a>
                            </div>
                            <div class="col-md">
                                    <img src="Nac_images/Artboard11-IMG.png" class="image-fluid w-75" alt="">
                                </div>
                        </div>
                    </div>
                </section>

                <!-- Tags -->

                <section class="bg-image p-2 text-center shadow-1-strong"
                    style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.6)), 
                    url('Nac_images/group1 (3).jpg');background-size: cover; background-repeat: no-repeat;height:45vh;
                    background-attachment: fixed">
                    <!-- <h2 class="text-light display-5">You might have a few question to ask about how we operate?</h2> -->
                    <!-- <img class="p-3 mt-0 rounded-circle" src="images/admin.jpeg" alt=""> -->
                    <p class="text-warning lead mt-5 p-5">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit <br>
                        Eum officiis quia aut mollitia illo rerum.
                        Quibusdam vel molestias voluptate quidem?
                    </p>

                </section>
                
                <!-- Question Accordion -->
                <section id="questions" class="p-5">
                    <div class="container">
                        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                        <div class="accordion accordion-flush" id="questions">
                            <!-- item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#question-one">
                                    
                                <h3 class="lead"><b>How can I gain admission into this department?</b></h3>
                                    
                                    </button>

                                    </h2>
                                    <div id="question-one" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne"
                                    data-bs-parent="#questions">
                                    <div class="accordion-body fw-normal">
                                        You need to score at least 180 marks in your Jamb to get admitted into this department. <br>
                                        Also, you need to have a good grade in mathematics, physics, chemistry, biology and english language in your WAEC result in other to be compitent enough to gain admission.
                                        
                                        </div>
                                    </div>

                                </div>

                                <!-- Item 2 -->

                                <div class="accordion-item">
                                        <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#question-two"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseTwo" >
                                                    
                                                    <h3 class="lead"><b>What field should I put interest in?</b></h3>
                                                    
                                                    </button>
                        
                                                    </h2>

                                    <div id="question-two" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo"
                                    data-bs-parent="#questions">
                                    <div class="accordion-body fw-normal">
                                       All fields in computer science are very good fields of interest. However, computer science is primarily engaged in <code>Software Development</code>. As thus, computer programming is a highly recommended field of interest in computer science.
                                        </div>

                                    </div>
                            
                                    </div>

                                    <!-- Item 3 -->

                                    <div class="accordion-item">
                                            <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#question-three"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseThree" >
                                                        
                                                        <h3 class="lead"><b>How many courses do you offer in the department?</b></h3>
                                                        
                                                        </button>
                            
                                                        </h2>
            
                                        <div id="question-three" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree"
                                        data-bs-parent="#questions">
                                        <div class="accordion-body fw-normal">
                                           There are quite a lot of good courses thought in the department?
                                           
                                           Kindly click on the <code>Courses</code> link above to view all of our courses
                                            </div>
            
                                        </div>
                                
                                        </div>
                                        
                                        <div class="accordion-item">
                                                <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingFour">
                                                            <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#question-four"
                                                            aria-expanded="false"
                                                            aria-controls="flush-collapseFour" >
                                                            
                                                            <h3 class="lead"><b>Does the department give scholarships to best all round students?</b></h3>
                                                            
                                                            </button>
                                
                                                            </h2>
                
                                            <div id="question-four" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo"
                                            data-bs-parent="#questions">
                                            <div class="accordion-body fw-normal">
                                               The department for several years have put a lot of students who are best all round students on scholarships.
                                                </div>
                
                                            </div>
                                    
                                            </div>
                

                                    </div>
                                            
                                    </div>
                                    </div>

                                </section>

                                <!-- Instructors -->
                               

                <section class="p-5 bg-light">
                    <div class="container" id="contact-info">
                        <div class="row g-4">
                            <div class="col-md">
                                <h2 class="text-center mb-4">Contact Info</h2>
                                <ul class="list-group list-group-flush lead">
                                    <li class="list-group-item">
                                        <span class="fw-bold">Main Location:</span> School Of Science Block B, Akanu ibiam Federal Polytechnic Unwana Afikpo, Ebonyi State.     
                                        
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">Departmenttal Email:</span> info@polyunwananacoss
                                        
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">Student Email:</span> polyunwananacstudents@gmail.com
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md g-4" id="communities"> 
                                <h2 class="text-center p-0 ms-5">Visit Our Communities On:</h2>

                                <div class="center-block ms-5 mt-4 text-center p-4">
                                <br>
                                    <a href="" class="text-center mt-5"><img src="Nac_images/Linkedin-Logo-IMG.png" class="" alt="" style="width:70px"></a>
                                    &nbsp;&nbsp;&nbsp;
                                
                                    <a href="" class="text-center">  <img src="Nac_images/ig icon.png" class="" alt="" style="width:70px"></a>
                                    &nbsp;&nbsp;
                                    <a href="" class="text-center"> <img src="Nac_images/Facebook-Logo-IMG.png" class="" alt="" style="width:70px"></a>
                                    &nbsp;&nbsp;
                                    <a href="" class="text-center"> <img src="Nac_images/Youtube-Logo-IMG.png" class="" alt="" style="width:70px"></a>
                                    &nbsp;&nbsp;
                                    <a href="" class="text-center"> <img src="Nac_images/twitter.jpg" class="" alt="" style="width:70px"></a>
                                    <!-- <a href="" class="text-center"> <img src="Nac_images/Facebook-Logo-IMG.png" class="" alt="" style="width:70px"></a> -->

                                
                            </div>
                        </div>
                </div>
                    </div>

                </section>
                <!-- footer -->
                <footer class="p-3 bg-dark text-white text-center position-relative lead">
                    <div class="container">
                        <p class="">
                            Copyright &copy; 2022 Department Of Computer Science A.I.F.P.U
                        
                            
                            <a href="#topMost" class="position-absolute bottom-0 p-3 mb-3 end-0 btn btn-primary">
                                Back to top
                            </a>
                        </p>
                    </div>
                </footer>


        <!-- <script src="https://cdn/jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0G1n4gmtz2m1QnikT1wXgYsOg+OMhuP+I1RH9sENBOOLRn5q+8nbTov4+1p" crossorigin="anonymous">
            
            </script> -->
            <script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
        </body>
        </html>