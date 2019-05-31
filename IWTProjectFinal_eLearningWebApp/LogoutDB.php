<?php
$host = "localhost";
$user = "root";
$pass = "sliit";
$database = "IWTProject";


session_start();
$uname = $_SESSION['userNameTemp'];
$pwrd = $_SESSION['pword'];

if(!mysql_connect($host, $user, $pass, $database) || !mysql_select_db($database))
{
    die(mysql_error());
}


if($uname == 'admin' and $pwrd == 'admin1234' )
{
    echo "<script type ='text/javascript'>alert('You have Sucessfully Logged Out from Administrator Page');</script>";
    require "Homepage.html";
    session_destroy();
}
else
{   date_default_timezone_set('Asia/Colombo');
    $date = date('Y-M-d H:i:s');
    $insertQuery = "INSERT INTO UserLogOutTime (Username, Date_Time) VALUES ('$uname','$date')";
    if (!mysql_query($insertQuery)) {
        die('Error : ' . mysql_error());
    }
    echo "<script type ='text/javascript'>alert('You have Sucessfully Logged Out');</script>";
    require "Homepage.html";
    session_destroy();
}
?>