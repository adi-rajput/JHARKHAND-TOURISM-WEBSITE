<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//create database
$conn = new mysqli('localhost','root','','intovanlands')
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullname,email,username,password)
            values(?,?,?,?)")
        $stmt->bind_param("ssss",$fullname,$email,$password,$username);
        $stmt->execute();
        echo "registration successful....";
        $stmt->close();
        $conn->close();

    }
?