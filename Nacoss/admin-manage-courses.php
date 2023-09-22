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
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.json">

</head>
<body>
<nav class="nav-divider bg-secondary p-4">
<a href="admin.php" class="bi bi-arrow-left-circle fs-2 btn btn-primary"></a>
<span class="offset-6 fs-2 text-light" style="font-family:sans-serif">Manage all round courses for various lavels</span>
</nav>
<!-- <div class="container"> -->
<div class="row g-1">
<div class="col-md-3">
<div class="container shadow p-5">
<h2 class="lead alert alert-primary fw-bold text-center"> NDI Courses</h2>
<?php
$sql = $connection->query("SELECT * FROM `nd1`;");
if(mysqli_num_rows($sql) == true){
echo  "<a href=\"add-courses1.php\" class=\"bi bi-plus-circle fs-1 text-secondary offset-5\"></a>";
echo "<br>";
echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];
    $id = $row["id"];

    echo "
    <div class='alert alert-warning'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    <a href=\"update-1.php?id=$id\" class=\"btn btn-warning\">Update</a>
    <a href=\"delete.php?nd1=$id\" class=\"bi bi-trash-fill text-danger text-decoration-none fs-4 offset-7\"></a>
    <br>
    <br>
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    echo "<br>";
    echo "<a href=\"add-courses1.php\" class=\"btn btn-primary\">Add course</a>";
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
echo  "<a href=\"add-courses2.php\" class=\"bi bi-plus-circle fs-1 text-secondary offset-5\"></a>";
echo "<br>";
echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];
    $id = $row["id"];

    echo "
    <div class='alert alert-warning'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    <a href=\"update-2.php?id=$id\" class=\"btn btn-warning\">Update</a>
    <a href=\"delete.php?nd2=$id\" class=\"bi bi-trash-fill text-danger text-decoration-none fs-4 offset-7\"></a>
    <br>
    <br>
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    echo "<br>";
    echo "<a href=\"add-courses2.php\" class=\"btn btn-primary\">Add course</a>";
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
echo  "<a href=\"add-courses3.php\" class=\"bi bi-plus-circle fs-1 text-secondary offset-5\"></a>";
echo "<br>";
echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];
    $id = $row["id"];

    echo "
    <div class='alert alert-primary'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    <a href=\"update-3.php?id=$id\" class=\"btn btn-primary\">Update</a>
    <a href=\"delete.php?hnd1=$id\" class=\"bi bi-trash-fill text-danger text-decoration-none fs-4 offset-7\"></a>
    <br>
    <br>
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    echo "<br>";
    echo "<a href=\"add-courses3.php\" class=\"btn btn-primary\">Add course</a>";
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
echo  "<a href=\"add-courses4.php\" class=\"bi bi-plus-circle fs-1 text-secondary offset-5\"></a>";
echo "<br>";
echo "<br>";
while($row = mysqli_fetch_assoc($sql))
{
    $c_code = $row["course_code"];
    $c_title = $row["course_title"];
    $c_unit = $row["credit_load"];
    $id = $row["id"];

    echo "
    <div class='alert alert-primary'>
    <b>Course title :</b> $c_title
    <br>
    <b>Course code :</b> $c_code
    <br>
    <b>Credit unit :</b> $c_unit
    
    </div>
    <a href=\"update-4.php?id=$id\" class=\"btn btn-primary\">Update</a>
    <a href=\"delete.php?hnd2=$id\" class=\"bi bi-trash-fill text-danger text-decoration-none fs-4 offset-7\"></a>
    <br>
    <br>
    ";

}

}else{
    echo "<div class=\"alert alert-danger text-center\">No course avaliable</div>";
    echo "<br>";
    echo "<a href=\"add-courses4.php\" class=\"btn btn-primary\">Add course</a>";
}


?>
</div>

</div>
    
</body>
</html>