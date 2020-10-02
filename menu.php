<?php 
    require_once 'inc/header-links.php';
?>

    <title>Resturant Management System | Menu</title>
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
                <h2>Resturant Menu</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home <i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="menu.php">Menu <i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- menu section -->
<section class="site-menu" id="menu">
    <div class="container">
        <h2 class="text-center">Delicious Food For You</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#dinner" class="nav-link active" data-toggle="tab">
                    <div class="single-menu text-center">
                        <div class="icon">
                            <i class="fa fa-lemon-o"></i>
                        </div>
                        <h4>Dinner</h4>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="#breakfast" class="nav-link" data-toggle="tab">
                    <div class="single-menu text-center">
                        <div class="icon">
                            <i class="fa fa-coffee"></i>
                        </div>
                        <h4>Breakfast</h4>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="#lunch" class="nav-link" data-toggle="tab">
                    <div class="single-menu text-center">
                        <div class="icon">
                            <i class="fa fa-cutlery"></i>
                        </div>
                        <h4>Lunch</h4>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="dinner">
                <div class="row">
                        <?php 
                            $sql = $user->getMealType('Dinner');
                            $count = 1;
                            foreach($sql as $row){
                        ?>
                        <div class="single-delicious col-md-6">
                            <form action="menu.php?action=add&id=<?php echo $row['id']; ?>" method="POST">
                                <div class="thumb">
                                    <img src="assets/images/delicious/<?php echo $row['image']; ?>" alt="">
                                </div>
                                <div class="info">
                                    <h3>#<?php echo $count; ?>. <?php echo $row['name']; ?></h3>
                                    <h5 class="text-center">$<?php echo $row['price']; ?></h5>
                                    <div class="price">
                                        <input type="text" name="quantity" value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>">
                                        <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
                                        <input type="submit" class="btn btn-primary" name="add_to_cart" value="Add to Cart" id="add_to_cart">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            $count++;
                            }
                        ?>
                </div>
            </div>
            <div class="tab-pane fade" id="breakfast">
                <div class="row">
                        <?php 
                            $sql = $user->getMealType('Breakfast');
                            $count = 1;
                            foreach($sql as $row){
                        ?>
                        <div class="single-delicious col-md-6">
                            <form action="menu.php?action=add&id=<?php echo $row['id']; ?>" method="POST">
                                <div class="thumb">
                                    <img src="assets/images/delicious/<?php echo $row['image']; ?>" alt="<?php echo $row['image']; ?>">
                                </div>
                                <div class="info">
                                    <h3>#<?php echo $count; ?>. <?php echo $row['name']; ?></h3>
                                    <h5 class="text-center">$<?php echo $row['price']; ?></h5>
                                    <div class="price">
                                        <input type="text" name="quantity" value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>">
                                        <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
                                        <input type="submit" class="btn btn-primary" name="add_to_cart" value="Add to Cart">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            $count++; 
                            }
                        ?>
                </div>
            </div>
            <div class="tab-pane fade" id="lunch">
            <div class="row">
                <?php 
                    $sql = $user->getMealType('Lunch');
                    $count = 1;
                    foreach($sql as $row){
                ?>
                <div class="single-delicious col-md-6">
                    <form action="menu.php?action=add&id=<?php echo $row['id']; ?>" method="POST">
                        <div class="thumb">
                            <img src="assets/images/delicious/<?php echo $row['image']; ?>" alt="<?php echo $row['image']; ?>">
                        </div>
                        <div class="info">
                            <h3>#<?php echo $count; ?>. <?php echo $row['name']; ?></h3>
                            <h5 class="text-center">$<?php echo $row['price']; ?></h5>
                            <div class="price">
                                <input type="text" name="quantity" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>">
                                <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
                                <input type="submit" class="btn btn-primary" name="add_to_cart" value="Add to Cart">
                            </div>
                        </div>
                     </form>
                </div>
                <?php
                    $count++; 
                    }
                ?>
            </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'inc/footer.php'; ?>