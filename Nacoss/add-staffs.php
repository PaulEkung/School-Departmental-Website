<?php
 include "connection.php";
 
 ?>
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
    </head>
    <body>
    <section>
    <nav class="bg-secondary p-4">
    <a href="staffs.php" class="bi bi-arrow-left-circle fs-2 text-light"></a>
    
    </nav>
    </section>
        <br>
        <br>
        <br>
<footer class="nav-divider bg-secondary p-5 fixed-bottom">

<!-- <span class="offset-6 fs-2 text-light" style="font-family:sans-serif">Manage all round courses for various lavels</span> -->
</footer>
<br>
<br>
<div class="container">

<div class="row">

<div class="col-sm-4"></div>
<div class="col-sm-4 ">

<div class="header p-3 bg-dark text-light text-center">Add staffs</div>
<br>
<form action="add-staffs.php" method="post" autocomplete="off" enctype="multipart/form-data" class="p-4 shadow">
<input type="text" class="form-control" Placeholder="Name of Staff" name="name" autofocus>
<br>
<input type="text" class="form-control" Placeholder="Rank" name="rank">
<br>
<input type="file" class="form-control" Placeholder="Image"  name="image">
<br>
<input type="submit" value="Add staff" name="submit" class="btn btn-primary offset-3 w-50">
<br>

</form>
<br>
<?php
if(isset($_POST["submit"]) && isset($_FILES["image"]["name"]))
{
    $name = $_POST["name"];
    $rank = $_POST["rank"];
    $image_name = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $image_size = $_FILES["image"]["size"];
    $image_error = $_FILES["image"]["error"]; 
    if($image_error === 0){
        $image_exe = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_exe_to_lc = strtolower($image_exe);
        $allowed_exe = array('jpg', 'jpeg', 'png');
        if(!in_array($image_exe_to_lc, $allowed_exe))
        {
            echo "
            <script type=\"text/javascript\">
            alert(\"You can't upload images of this type.\")
            </script>
            ";
        }elseif($image_size > 4000000)
        {
            echo "
            <script type=\"text/javascript\">
            alert(\"Sorry! The image size is too large.\")
            </script>
            ";
        }else{
            $new_image_name = uniqid("$name", true).'.'.$image_exe_to_lc;
            $image_upload_path = './uploads/'. $new_image_name;
        }
    }else{
        echo null;
    }

}if(empty($name) || empty($rank) || empty($image_name)){
    $msg[] = "<div class='alert alert-danger text-center'>Empty Inputs </div>";
}else{
    $sql = $connection->query("INSERT INTO `staffs` (name, rank, image) values ('$name', '$rank', '$new_image_name')");
    if($sql)
    {
        move_uploaded_file($tmp_name, $image_upload_path);
        $msg[] = "<div class='alert alert-success text-center'>Staff added successfully </div>";
    }else{
        $msg[] = "<div class='alert alert-danger text-center'>Failed to add staff </div>";
    }
    foreach($msg as $alerts)
    {
        echo $alerts;
    }
}

?>
</div>
<div class="col-sm-4"></div>

</div>

</div>
    
    </body>
    </html>
