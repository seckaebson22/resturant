<?php 
    require_once 'inc/header-links.php';
?>

    <title>Resturant Management System | About Us</title>
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
                <h2>About Us</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home <i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="menu.php">About Us <i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- about section -->
<section class="site-about" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-logo">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/about/about1.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/about/about2.jpg">   
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/about/about3.jpg">  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 about-content">
                <h2 class="heading">About</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, impedit suscipit natus facere consequatur reiciendis eos sequi provident dolor ab officia eveniet aspernatur atque, optio saepe deserunt ratione corporis repellat.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde odit suscipit, fuga facilis qui dolorum voluptas doloremque tempora aut hic voluptate, error cumque iure quis dolores magnam! Quod, tenetur inventore.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, fuga. Natus excepturi ipsa dignissimos sequi exercitationem temporibus, a, vitae nihil quam unde esse, nostrum placeat illum cumque. Pariatur, dolores magnam.
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once 'inc/footer.php'; ?>