<?php
require_once "connection.php";
session_start();
if(isset($_SESSION["sessionId"])){
    unset($_SESSION["sessionId"]);
    header("Location: Login.php");
}

