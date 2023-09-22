<?php require "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body class="alert alert-light">
<br>
<br>
<div class="container">
<div class="row">
<div class="col-sm-4">
<br>
<a href="admin.php" class="bi bi-arrow-left-circle fs-1 text-secondary offset-2"></a>
</div>
<div class="col-sm-4">
<br>
<div class="header alert alert-primary text-center">

<i class="bi bi-envelope-fill fs-4"></i> <span class="lead">Send an email to your client</b></span>
</div>
<form action="contact.php" method="post" class="shadow p-4 rounded-3" autocomplete="off">

<br>
<div class="form-checked-content">
<input type="text" name="email" id="email"  class="form-control" placeholder="Reciever's email" autofocus>
<br>
<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" autofocus>
<br>
<textarea name="message" class="form-check-input-placeholder form-control textarea" id="message" cols="30" rows="10" placeholder="Message" autofocus></textarea>
</div>
<br>
<button type="submit" name="send" class="btn btn-primary w-25 offset-4"> <i class="bi bi-send-fill"></i> send</button>
</form>
<br>
<?php
 if(isset($_POST["send"]))
 {
     $sql = $connection->query("SELECT * FROM `nacossusers`");
     if($sql){
         $result = mysqli_fetch_assoc($sql);
         $db_email = $result["email"];
             }
     
$to = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$headers = "From: pauldrums32@gmail.com";
if(empty($to) || empty($subject) || empty($message))
{

    $msg[] = "<div class=\"alert alert-danger text-center\">Please fill in all input fields</div>";

}else if($to !== $db_email){

    $msg[] = "<div class=\"alert alert-danger text-center\">The email address does not belong to any user</div>";
    
}else if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
    
    $msg[] = "<div class=\"alert alert-danger text-center\">Invalid email address format</div>";
}else{
    if(mail($to, $subject, $message, $headers)){
        
        $msg[] = "<div class=\"alert alert-success text-center\">Mail sent successfully</div>";
        
    }else{
        $msg[] = "<div class=\"alert alert-danger text-center\">Failed to send mail!
        Please check your internet connection and retry</div>";
        
    }
}

foreach($msg as $signal){
    echo $signal;
}
}


?>

</div>
<div class="col-sm-4"></div>
</div>
</div>

    
</body>
</html>