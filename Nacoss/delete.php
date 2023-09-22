<?php
include "connection.php";
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    $sql = $connection->query("DELETE FROM `nacossusers` where unique_id = '$id'");
    if($sql)
    {
        header("Location: admin.php?deleted");
    }else{
        header("Location: admin.php?failed");

    }
}
if(isset($_GET["nd1"]))
{
    $id = $_GET["nd1"];
    $sql = $connection->query("DELETE FROM `nd1` where id = '$id'");
    if($sql == true)
    {
        header("Location: admin-manage-courses.php?deleted");
    }else{
        header("Location: admin-manage-courses.php?failed");
    }

}
if(isset($_GET["nd2"]))
{
    $id = $_GET["nd2"];
    $sql = $connection->query("DELETE FROM `nd2` where id = '$id'");
    if($sql == true)
    {
        header("Location: admin-manage-courses.php?deleted");
    }else{
        header("Location: admin-manage-courses.php?failed");
    }

}

if(isset($_GET["hnd1"]))
{
    $id = $_GET["nd1"];
    $sql = $connection->query("DELETE FROM `hnd1` where id = '$id'");
    if($sql == true)
    {
        header("Location: admin-manage-courses.php?deleted");
    }else{
        header("Location: admin-manage-courses.php?failed");
    }

}

if(isset($_GET["hnd2"]))
{
    $id = $_GET["nd1"];
    $sql = $connection->query("DELETE FROM `hnd2` where id = '$id'");
    if($sql == true)
    {
        header("Location: admin-manage-courses.php?deleted");
    }else{
        header("Location: admin-manage-courses.php?failed");
    }

}