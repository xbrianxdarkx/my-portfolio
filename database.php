<?php

    $hostName = "localhost";
    $dbuser = "root";
    $dbPassword = "";
    $dbName = "regform";

    $conn = mysqli_connect($hostName, $dbuser, $dbPassword, $dbName);
    if(!$conn){
        die("Something Went Wrong");
    }

?>
