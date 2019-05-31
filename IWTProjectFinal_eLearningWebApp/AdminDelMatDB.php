<?php
$host = "localhost";
$user = "root";
$pass = "sliit";
$database = "IWTProject";


if(!mysql_connect($host, $user, $pass,$database) || !mysql_select_db($database))
{
    die(mysql_error());
}

$matID = $_SERVER['QUERY_STRING'];
$tempCart = $_SESSION['cartID'];
$delQuery = "DELETE from $tempCart where MaterialID = '$matID'";

if(!mysql_query($delQuery))
{
    die('Error : '.mysql_error());
}
else
{
    $string = "You have Sucessfully Deleted Material $matID";
    echo "<script type ='text/javascript'>alert('$string');</script>";
    require "AdminManageMaterials.php";
}
?>


