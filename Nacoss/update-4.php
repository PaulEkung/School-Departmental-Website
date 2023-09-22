<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
         <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.json">
</head>
<body>
<nav class="nav-divider bg-secondary p-4">
<a href="admin-manage-courses.php" class="bi bi-arrow-left-circle fs-2 btn btn-primary"></a>
</nav>
<br>
<br>
<br>
<br>
<?php
require "connection.php";

    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $sql = $connection->query("SELECT * from `hnd2` where `id` = '$id';");
        if($sql)
        {
            $row = mysqli_fetch_assoc($sql);

            $c_title = $row["course_title"];
            $c_code = $row["course_code"];
            $c_unit = $row["credit_load"];
            $id = $row["id"];
        }
    }

          ?>

<div class="container">

<div class="row">

<div class="col-sm-4"></div>
<div class="col-sm-4 ">

<div class="header p-3 bg-dark text-light text-center">Update <?php echo $c_code ?> Course Information</div>
<br>
<form action="update-4.php" method="post" autocomplete="off" class="p-4 shadow">
<input type="hidden" value="<?php echo $id ?>" name="id">
<input type="text" class="form-control" value="<?php echo $c_title ?>" Placeholder="Course title" name="title" autofocus>
<br>
<input type="text" class="form-control" value="<?php echo $c_code ?>" Placeholder="Course code" name="code">
<br>
<input type="text" class="form-control" value="<?php echo $c_unit ?>" Placeholder="Credit unit"  name="unit">
<br>
<input type="submit" value="Update" name="submit" class="btn btn-primary offset-3 w-50">
<br>

</form>
<br>
<?php
if(isset($_POST["submit"]))
{
$title = $_POST["title"];
$code = $_POST["code"];
$unit = $_POST["unit"];
$id = $_POST["id"];
$sql = $connection->query("UPDATE hnd2 set course_title='$title', course_code='$code', credit_load='$unit' where id = `hnd2`.id");
if($sql)
{
header("Location: admin-manage-courses.php?success");
}else{
header("Location: admin-manage-courses.php?failed");

}

}

?>
</div>
<div class="col-sm-4"></div>

</div>

</div>

    
</body>
</html>