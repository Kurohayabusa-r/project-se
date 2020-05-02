<?php

$host = "localhost";
$name = "root";
$password = "";
$dbname = "tokokomputer";

$conn = new mysqli($host,$name,$password,$dbname);

if(!$conn){
    die("Database not found.");
}

?>