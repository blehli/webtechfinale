<?php

//connection credentials
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="loginsystem";

//mysqli object
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

//error handler
if($conn->connect_error){
    printf("Connection Failed: %s\n", $conn->connect_error);
    exit();
}