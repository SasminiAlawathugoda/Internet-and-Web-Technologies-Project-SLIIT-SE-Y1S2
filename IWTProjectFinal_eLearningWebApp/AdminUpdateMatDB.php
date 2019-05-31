<?php
$host = "localhost";
$user = "root";
$pass = "sliit";
$database = "IWTProject";

session_start();
$matID = $_SESSION['materialIDUp'];

$name = $_POST["FMatname"];
$cat = $_POST["FCategory"];
$price = $_POST["Fprice"];
$desc = $_POST["FMatDes"];


if(!mysql_connect($host, $user, $pass,$database) || !mysql_select_db($database))
{
    die(mysql_error());
}

$updatequery = "UPDATE Store SET MatName = '$name', Category = '$cat', Price = '$price', Description = '$desc' WHERE MaterialID = '$matID'";

if(!mysql_query($updatequery))
{
    die('Error : '.mysql_error());
}
else
{
    $string = "You have Sucessfully Updated $matID";
    echo "<script type ='text/javascript'>alert('$string');</script>";
    require "AdminManageMaterials.php";
}
?>