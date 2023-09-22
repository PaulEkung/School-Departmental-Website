<?php
 include "connection.php";
 include "function.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add courses</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
<nav class="nav-divider bg-secondary p-4">
<a href="admin-manage-courses.php" class="bi bi-arrow-left-circle fs-2 btn btn-primary"></a>
<!-- <span class="offset-6 fs-2 text-light" style="font-family:sans-serif">Manage all round courses for various lavels</span> -->
</nav>
<br>
<br>
<br>
<div class="container">

<div class="row">

<div class="col-sm-4"></div>
<div class="col-sm-4 ">

<div class="header p-3 bg-dark text-light text-center">Add ND2 Courses</div>
<br>
<form action="add-courses2.php" method="post" autocomplete="off" class="p-4 shadow">
<input type="text" class="form-control" Placeholder="Course title" name="title" autofocus>
<br>
<input type="text" class="form-control" Placeholder="Course code" name="code">
<br>
<input type="text" class="form-control" Placeholder="Credit unit" id="password" name="unit">
<br>
<input type="submit" value="Add course" name="submit" class="btn btn-success offset-3 w-50">
<br>

</form>
<br>
<?php
echo adder_2($connection);

?>
</div>
<div class="col-sm-4"></div>

</div>

</div>
    
</body>
</html>