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
$uname = $_SESSION['userNameTemp'];
$tempCart = "CART$uname";

$matID = $_SERVER['QUERY_STRING'];
$matname = "";
$matCat = "";
$matprice = 0;
$matdes = "";



    $selectString = "SELECT * FROM Store where MaterialID = '$matID'";
    $query = mysql_query($selectString);
    while ($row = mysql_fetch_array($query)) {
        $matname = $row['MatName'];
        $matCat = $row['Category'];
        $matprice = $row['Price'];
        $matdes = $row['Description'];
    }

    $insertString = "INSERT INTO $tempCart VALUES ('$matID','$matname','$matCat','$matprice','$matdes')";

    if (!mysql_query($insertString)) {
        echo "<script type ='text/javascript'>alert('You have Already Added $matname to the Cart');</script>";
        require "MemberStore.php";
    } else {
        echo "<script type ='text/javascript'>alert('You have Sucessfully Added $matname to the Cart');</script>";
        require "MemberStore.php";
    }


?>
