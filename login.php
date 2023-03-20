<?php

$uname = $_POST['uname'];
$password = $_POST['password'];


$con = new mysqli("localhost", "root", "", "login form");
if($con->connect_error) {
    die("Failed to connect : " .$con->connect_error);
} else {
    $stmt = $con->prepare("select * from user where uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
       if($data['password'] === $password) {
       echo "<h1> LOGIN SUCCESSFULLY </h1>";
       } 
    } else {
        echo "<h1>INVALID USERNAME OR PASSWORD";
    }
}

?>




























