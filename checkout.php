<?php 
    require_once 'inc/header-links.php';

    // place order
    if(isset($_POST['place_order'])){
        $name = $_POST['name'];
        $town = $_POST['town'];
        $street_name = $_POST['street_name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $price = $_POST['price'];

        $user->placeOrder($name, $town, $street_name, $phone_number, $email, $price);
        header("location: checkout.php");
    }
?>

    <title>Resturant Management System | Check out</title>
</head>
<body>


<!-- header section -->
<header class="site-header">
    <div class="main-nav">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Seckaby</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="add-to-cart.php">
                            <i class="fa fa-shopping-cart"></i>
                            <i class="counter">
                                <?php 
                                    if(!empty($_SESSION['shopping_cart'])){
                                        echo count($_SESSION['shopping_cart']);
                                    }else{
                                        echo 0;
                                    }
                                ?>
                            </i>
                        </a>
                    </li>  
                    </ul>
                </div>  
            </div>
        </nav>
    </div>

    <!-- banner -->
    <div class="banner-logo">
        <div class="banner-content">
            <div class="banner-title">
                <h2>Place Order</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home <i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="add-to-cart.php">Place Order <i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- add to cart section -->
<section class="add-to-cart">
    <div class="container">
            <form action="" method="POST">
                <div class="row">
                <div class="col-md-9 checkout-form">
                    <h2>Address Information</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Town/City" name="town" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Street name" name="street_name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone Number" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Order Price" name="price" required>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary " name="place-order">Place Order</button> -->
                </div>
                <?php 
                    $total = 0;
                    foreach($_SESSION['shopping_cart'] as $key => $value){
                        $total = $total + ($value['item_quantity'] * $value['item_price']);
                ?>
                <div class="col-md-3">
                    <div class="order-box">
                        <h4>Order Summary</h4>
                        <div class="subtotal">
                            <h5>Subtotal</h5>
                            <p>$<?php echo $total; ?></p>
                        </div>
                        <div class="total">
                            <h5>Total</h5>
                            <p>$<?php echo $total; ?></p>
                        </div>
                        <div class="checkout-btn">
                        <button type="submit" class="btn btn-primary " name="place_order">Place Order</button>
                        </div>
                        <div class="meansofbooking">
                            <p>We accept: <span class="fa fa-cc-visa"></span> <span class="fa fa-credit-card"></span> <span class="fa fa-cc-paypal"></span></p>
                        </div>
                    </div>
                </div>
                <?php 
                    break;
                    }
                ?>
                </div>
            </form>
    </div>
</section>


<?php require_once 'inc/footer.php'; ?>