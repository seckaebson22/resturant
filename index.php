<?php 
    require_once 'inc/header-links.php';
?>

    <title>Resturant Management System | Welcome</title>
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

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/images/bg_1.jpg">
            <div class="carousel-caption">
                <h3>Best Resturant</h3>
                <button class="btn btn-primary">
                    <a href="#reservation">Book a table</a>
                </button>
            </div>   
            </div>
            <div class="carousel-item">
            <img src="assets/images/bg_2.jpg" alt="Chicago">
            <div class="carousel-caption">
                <h3>Delicious Specialties</h3>
                <button class="btn btn-primary">
                    <a href="#reservation">Book a table</a>
                </button>
            </div>    
            </div>
            <div class="carousel-item">
            <img src="assets/images/bg_3.jpg" alt="New York">
            <div class="carousel-caption">
                <h3>Nutrious &amp; Tasty</h3>
                <button class="btn btn-primary">
                    <a href="#reservation">Book a table</a>
                </button>
            </div>    
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</header>

<!-- reservation section -->
<section class="site-reservation" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="heading-section">
                    <span class="subheading">Book a table</span>
                    <h2>Make Reservation</h2>
                </div>
                <p class="delivery-message text-center" style="color: red; ">
                    <?php
                        if(isset($_SESSION['reservation_message'])){
                            echo $_SESSION['reservation_message'];
                            unset($_SESSION['reservation_message']);
                        }
                    ?>
                </p>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control" id="book_date" placeholder="Date" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Time</label>
                                <input type="time" class="form-control" id="book_time" placeholder="Time" name="time" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Person</label>
                                <input type="text" class="form-control" placeholder="no. of persons" name="person" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    Make a Reservation 
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'inc/footer.php'; ?>