<?php
    require_once 'inc/header-links.php';

    if(isset($_SESSION['username'])){
        header("location: dashboard.php");
    }    

    // login admin
    if(isset($_POST['login_admin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $admin->loginAdmin($username, $password);
    }