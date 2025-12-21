<?php


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password']; 

$hashpassword = password_hash($password,PASSWORD_DEFAULT);

$sql = "INSERT INTO users 
        ( first_name,last_name,user_name,email,password)
        VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssss",
    $first_name,
    $last_name,
    $user_name,
    $email,
    $hashpassword,
);

if($stmt->execute()){
    header("Location: /");
    exit();
}else{echo "error";}

$stmt->close();
$conn->close();


die();