<?php include "connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="refresh" content="900; url = logout.php"> -->
    <title>manage staffs</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.json">
   
</head>
<body class="bg-light">
<section>
    <nav class="bg-secondary p-4">
    <a href="admin.php" class="bi bi-arrow-left-circle fs-1 text-light"></a>
    
    </nav>
   
    </section>
    <br>
    <center>
    <a href="add-staffs.php" class="bi bi-plus-circle p-4 fs-1 text-secondary"></a>
    </center>
    <br>
    <br>
    <div class="container">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <?php 
    $sql = $connection->query("SELECT * FROM `staffs`");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql))
        {
            $image = $row["image"];
            $name = $row["name"];
            $rank = $row["rank"];

            echo "
            <div class=\"alert alert-primary\" style=\"\">
            
            <div class='row'>
            <div class='col-sm-4'>
            
            <img src='uploads/$image' style='width: 150px' class='rounded-circle'>
            </div>
            <div class='col-sm-4'>
            <span class=\"offset-0 text-secondary\">
            $name
            <br>
            <br>
            <br>
            <br>

            <b class='offset-0 bg-light rounded-2 p-3'>$rank</b>
            </span>
            
            </div>
            <div class='col-sm-4'>
            
            <a href=\"\" class=\"btn btn-primary offset-4\">Update</a>
            <a href=\"\" class=\"bi bi-trash-fill offset-2 fs-3 text-danger\"></a>
            </div>
            </div>
            
            
            </div>

            ";
        }
    }else{  
        echo "bpbpb";
    }
    ?>
    </div>
    <div class="col-md-2"></div>
    </div>
    </div>

    
</body>
</html>