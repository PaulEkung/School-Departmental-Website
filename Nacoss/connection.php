<?php
// Databse setting
     $host ="localhost";
     $user ="root";
     $password ="Musical+1937";
     $dbName ="nacoss";

    //Connecting to database
     $connection = mysqli_connect($host, $user, $password, $dbName);
     if(!$connection){
       die("Failed to connect" . mysqli_connect_error());
       return $connection;
     }
       
      
    
    
 





    
 