<?php
$host = "Localhost";
$user = "root";
$password = "";
$database = "Excersice_products";



$connection =mysqli_connect($host, $user, $password, $database);
//Check if the connection failed
if (!isset($connection)){
    die("Connection failed");
}