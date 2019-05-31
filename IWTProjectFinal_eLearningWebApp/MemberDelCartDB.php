<?php
$host = "localhost";
$user = "root";
$pass = "sliit";
$database = "IWTProject";


if(!mysql_connect($host, $user, $pass,$database) || !mysql_select_db($database))
{
    die(mysql_error());
}

session_start();
$matID = $_SERVER['QUERY_STRING'];
$uname = $_SESSION['userNameTemp'];
$tempCart = "CART$uname";


$delQuery = "DELETE from $tempCart where MaterialID = '$matID'";

if(!mysql_query($delQuery))
{
    die('Error : '.mysql_error());
}
else
{
    $string = "You have Sucessfully Removed Material ID : $matID from your cart";
    echo "<script type ='text/javascript'>alert('$string');</script>";
    require "MemberCart.php";
}
?>