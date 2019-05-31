<?php
$host = "localhost";
$user = "root";
$pass = "sliit";
$database = "IWTProject";


if(!mysql_connect($host, $user, $pass,$database) || !mysql_select_db($database))
{
    die(mysql_error());
}

$MatID = $_POST["MatID"];
$Matname = $_POST["Matname"];
$Category = $_POST["Category"];
$MatDes = $_POST["MatDes"];
$price = $_POST["price"];

$insertQuery = "INSERT INTO Store VALUES ('$MatID','$Matname','$Category','$price', '$MatDes')";

if(!mysql_query($insertQuery))
{
    die('Error : '.mysql_error());
}
else
{
    echo "<script type ='text/javascript'>alert('You have Sucessfully Added the Material');</script>";
    require "AdminManageMaterials.php";
}