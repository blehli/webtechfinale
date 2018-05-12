<?php

//connection credentials
$dbServername ="localhost";
$dbUserername ="root";
$dbPassword ="";
$dbName ="loginsystem";

//mysqli object
$conn = mysqli_connect($dbServername,$dbUserername,$dbPassword,$dbName);

//error handler
if($conn->connect_error){
    printf("Connection Failed: %s\n", $conn->connect_error);
    exit();
}