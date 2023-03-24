<?php

include "datatable.php";
$uname = $_POST['uname'];
$password = $_POST['password'];


$con = new mysqli("localhost", "root", "", "contactform");
if($con->connect_error) {
    die("Failed to connect : " .$con->connect_error);
} else {
    $stmt = $con->prepare("select * from users where uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
       if($data['password'] === $password) {
           header ("Location:datatable.php");
       } 
    } else {
        echo "<h1>INVALID USERNAME OR PASSWORD";
    }
}

?>




























