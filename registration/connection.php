<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "socialdonors";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("connection failed: ".mysql_connect_error());
}