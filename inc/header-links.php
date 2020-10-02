<?php 
    session_start();
    require_once 'phpFiles/User.php';
    $user = new User();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $person = $_POST['person'];

        $user->sendReservation($name, $email, $phone, $date, $time, $person);
        $_SESSION['reservation_message'] = "You have successfully booked a table";
    }

    // add to cart
    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['shopping_cart'])){
            $item_array_id = array_column($_SESSION['shopping_cart'], 'item_id');
            if(!in_array($_GET['id'], $item_array_id)){
                $count = count($_SESSION['shopping_cart']);
                // get all item details
                $item_array = array(
                    'item_id' => $_GET['id'],
                    'item_name' => $_POST['hidden_name'],
                    'item_image' => $_POST['hidden_image'],
                    'item_price' => $_POST['hidden_price'],
                    'item_quantity' => $_POST['quantity']
                );
                $_SESSION['shopping_cart'][$count] = $item_array;
            }else{
                // product added then display block
                echo "<script>alert('Item already added')</script>";
                echo "<script>window.location = 'menu.php';</script>";
            }
        }else{
            // Cart is empty execute this block
            $item_array = array(
                'item_id' => $_GET['id'],
                'item_name' => $_POST['hidden_name'],
                'item_image' => $_POST['hidden_image'],
                'item_price' => $_POST['hidden_price'],
                'item_quantity' => $_POST['quantity']
            );
            $_SESSION['shopping_cart'][0] = $item_array;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <!-- scripts -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/sweetalert.js"></script>