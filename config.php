<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "loginn";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die("Connection faied: " .$conn->connect_error);
}
?>