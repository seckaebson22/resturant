<?php
 require_once 'inc/header-links.php'; 
 
//  register admin
if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin->registerAdmin($name, $email, $username, $password);
    $_SESSION['message'] = "You have successfully registered";
    header("location: signup.php");
}
