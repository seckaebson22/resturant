<?php 
    require_once 'inc/header-links.php';

    // Remove items from cart
    if(isset($_GET['action'])){
        if($_GET['action'] == "delete"){
            foreach($_SESSION['shopping_cart'] as $key => $value){
                if($value['item_id'] == $_GET['id']){
                    unset($_SESSION['shopping_cart'][$key]);
                    echo '<script>alert("Item removed")</script>';
                    echo '<script>window.location = "add-to-cart.php";</script>';
                }
            }
        }
    }
?>

    <title>Resturant Management System | Order Now</title>
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
                <h2>Oder Now</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home <i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="add-to-cart.php">Add to cart <i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- add to cart section -->
<section class="add-to-cart">
    <div class="container">
        <div class="row">
            <?php 
                if(!empty($_SESSION['shopping_cart'])){
                    $total = 0;
            ?>
            <div class="col-md-9">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Item Details</th>
                        <th>Quantity</th>
                        <th>Item Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php 
                        foreach($_SESSION['shopping_cart'] as $key => $value){
                    ?>
                    <tbody>
                    <tr>
                        <td><img src="assets/images/delicious/1.png" alt="" style="min-width: 100px; max-height: 40px;"> <?php echo $value['item_name']?> </td>
                        <td><?php echo $value['item_quantity']; ?></td>
                        <td>$<?php echo $value['item_price']; ?></td>
                        <td>$<?php echo number_format($value['item_quantity'] * $value['item_price'], 2); ?></td>
                        <td><a href="add-to-cart.php?action=delete&id=<?php echo $value['item_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    <?php 
                        $total = $total + ($value['item_quantity'] * $value['item_price']);
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            </div>
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
                        <button type="submit" class="btn btn-primary"><a href="checkout.php">Checkout</a></button>
                    </div>
                    <div class="meansofbooking">
                        <p>We accept: <span class="fa fa-cc-visa"></span> <span class="fa fa-credit-card"></span> <span class="fa fa-cc-paypal"></span></p>
                    </div>
                </div>
            </div>
            <?php 
                }else{
            ?>
            <div class="col-md-12">
                <div class="cart-body">
                <div class="cart-logo text-center">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="cart-content">
                    <h3 class="text-center">Your Cart Is Empty</h3>
                    <button class="btn btn-primary btn-order"><a href="menu.php">Click to Order</a></button>
                </div>
                </div>
            </div>
            <?php
                } 
            ?>
        </div>
    </div>
</section>


<?php require_once 'inc/footer.php'; ?>