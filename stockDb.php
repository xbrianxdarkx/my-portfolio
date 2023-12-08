<?php
$hostName = "localhost";
$dbuser = "root";
$dbPassword = "";
$dbName = "stock";

$conn = mysqli_connect($hostName, $dbuser, $dbPassword, $dbName);

    if(!$conn){
        die(mysqli_error($conn));
    }
?>
