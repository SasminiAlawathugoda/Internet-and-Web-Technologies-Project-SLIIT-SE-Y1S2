<?php
$host = "localhost";
$user = "root";
$pass = "sliit";
$database = "IWTProject";


    if(!mysql_connect($host, $user, $pass,$database) || !mysql_select_db($database))
    {
        die(mysql_error());
    }

    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $insertQuery = "INSERT INTO User (Username, Email, Password) VALUES ('$uname','$email','$password')";
    $createQuery = "CREATE TABLE CART$uname (MaterialID int PRIMARY KEY, MatName text, Category varchar(30), Price float, Description varchar(50))";

    if(!mysql_query($createQuery)) {
        die('Error : ' . mysql_error());
    }
    else {
        if (!mysql_query($insertQuery)) {
            die('Error : ' . mysql_error());
        } else {
            echo "<script type ='text/javascript'>alert('You have Sucessfully Registered');</script>";
            require "Homepage.html";
        }
    }
