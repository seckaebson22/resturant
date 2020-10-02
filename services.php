<?php 
    require_once 'inc/header-links.php';
?>

    <title>Resturant Management System | Services</title>
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
                <h2>Services</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home <i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="menu.php">Services <i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- services section -->
<section class="site-services" id="services">
    <div class="container">
        <div class="heading-section">
            <span class="subheading text-center">Services</span>
            <h2>Catering Services</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="icon">
                    <span class="fa fa-birthday-cake"></span>
                </div>
                <div class="media-body">
                    <h3 class="heading">Birthday Party</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon">
                    <span class="fa fa-building-o"></span>
                </div>
                <div class="media-body">
                    <h3 class="heading">Business Meeting</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon">
                    <span class="fa fa-cutlery"></span>
                </div>
                <div class="media-body">
                    <h3 class="heading">Weeding Party</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require_once 'inc/footer.php'; ?>