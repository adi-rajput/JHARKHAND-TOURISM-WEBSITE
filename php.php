<?php

$servername = "localhost";
$username ="root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

$sql = "CREATE DATABASE INTOVANLANDS";
mysqli_querry($conn, $sql);

if (!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "connection was successful";
}
?>