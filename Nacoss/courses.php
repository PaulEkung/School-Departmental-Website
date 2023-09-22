<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
        <!-- <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.json"> -->

</head>
<body>
<nav class="nav-divider bg-secondary p-4">
<a href="index.php" class="bi bi-arrow-left-circle text-light fs-2"></a>
<span class="offset-6 fs-2 text-light" style="font-family:sans-serif">All round courses for various lavels</span>
</nav>
<!-- <div class="container"> -->
<div class="row g-1">
<div class="col-md-3">
<div class="container shadow p-5">
<h2 class="lead alert alert-primary fw-bold text-center"> NDI Courses</h2>
<?php
$sql = $connection->query("SELECT * FROM `nd1`;");
if(mysqli_num_rows($sql) == true){

echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];

    echo "
    <div class='alert alert-warning'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    echo "<br>";
   
}


?>
</div>
</div>
<div class="col-md-3">
<div class="container shadow p-5">
<h2 class="lead alert alert-primary text-center fw-bold">NDII  Courses</h2>
<?php

$sql = $connection->query("SELECT * FROM `nd2`;");
if(mysqli_num_rows($sql) == true){

echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];

    echo "
    <div class='alert alert-warning'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    
}


?>
</div>
</div>
<div class="col-md-3">
<div class="container shadow p-5">
<h2 class="lead alert alert-primary text-center fw-bold">HNDI Courses</h2>

<?php

$sql = $connection->query("SELECT * FROM `hnd1`;");
if(mysqli_num_rows($sql) == true){

echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];

    echo "
    <div class='alert alert-primary'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    echo "<br>";
   
}


?>
</div>

</div>
<div class="col-md-3">
<div class="container shadow p-5">
<h2 class="lead alert alert-primary text-center fw-bold">HNDII Courses</h2>

<?php

$sql = $connection->query("SELECT * FROM `hnd2`;");
if(mysqli_num_rows($sql) == true){

echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];

    echo "
    <div class='alert alert-primary'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    echo "<br>";
    
}


?>
</div>

</div>
    
</body>
</html>