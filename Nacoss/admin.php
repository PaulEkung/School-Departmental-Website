<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.json">
        <script defer src="js.js"></script>
        <style>
         .sidenav{
        height: 30%;
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
        </style>
</head>
<body>

 <div class="container">
                        <div class="row">
                        <div class="container">

                            <div id="mynav" class="sidenav">
                            <span class="closebtn" onclick="close_nav_bar()">&times;</span>
                            <br>
                            <a href="admin-manage-courses.php">Manage Courses</a>
                            <a href="staffs.php">Manage Staffs</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="bg-dark p-3">
<a href="#logout" data-bs-toggle="modal" class="bi bi-lock-fill text-decoration-none btn btn-dark">Logout</a>

<span class="bi bi-list text-light fs-2 btn offset-10" onclick="open_nav_bar()"></span>
                
                </nav>
<br>
<h2 style="font-family:sans-serif" class="offset-5">
 Total  Users
<a href="contact.php" class="fs-4 offset-6 alert alert-primary text-decoration-none"><i class="bi bi-envelope-check-fill"></i> Contact Users</a>
 
 </h2>
<br>
<table class='table table-bordered p-5 table-condensed table-lg text-center table-responsive alert alert-secondary'>

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Date of registration</th>
<th>Action</th>
</tr>
</thead>

<?php 
include "connection.php";
$sql = $connection->query("SELECT * FROM `nacossusers`");
if($sql == true){
    $row = mysqli_fetch_assoc($sql);
    do{
        echo "
        <tr>
        <td>".$row['unique_id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['date']."</td>
        <td>
        <a href='delete.php?id=".$row['unique_id']."' class='bi bi-trash-fill fs-4 text-danger'></a>
        
        
        </td>
        </tr>
        ";
    }while($row = mysqli_fetch_assoc($sql));  
    
}
if(isset($_GET["deleted"]))
{
    echo "<script type='text/javascript'>alert('User removed successfully')</script>";

}else if(isset($_GET["failed"])){
    
    echo "<script type='text/javascript'>alert('Failed to remove user')</script>";
}else{
    echo null;
}
?>  
<div class="container">
<div class="row">
<div class="modal fade" role="dialog" id="logout">
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form action="dashboard.php" method="post" autocomplete="off">
<div class="form-group shadow p-3 bg-light">
<p class="fs-6 lead fw-bold text-center ">Are you sure you want to logout?</p>
<br>
<a href="#" class="bi bi-x-circle fs-2 offset-3 text-danger" data-bs-dismiss="modal"></a>
<?php 

print("<a href='admin-logout.php' class='bi bi-check-circle fs-2 text-success offset-4'></a>");

?>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-sm-4"></div>
</div>
</div>
</div>
</div>
</div>


<script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script> 

</table>

<script>
function open_nav_bar(){
        document.getElementById("mynav").style.width ="250px";
    }
    function close_nav_bar(){
        document.getElementById("mynav").style.width = "0";
        }
</script>
</body>
</html>