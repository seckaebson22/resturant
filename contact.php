<?php 
    require_once 'inc/header-links.php';
?>

    <title>Resturant Management System | Contact</title>
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
                    <h2>Contact</h2>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home <i class="fa fa-arrow-right"></i></a></li>
                        <li><a href="menu.php">Contact <i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
</header>

<!-- contact section -->
<section class="site-contact">
    <div class="container">
        <div class="heading-section">
            <span class="subheading">Get in Touch</span>
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <form action="">
                    <div class="form-group">
                    <label for="">Your Name</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="name">
                    </div>
                    <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter address" name="email">
                    </div>
                    <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="message" class="form-control" placeholder="Type Your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="send_message">
                            Send Message
                        </button>
                    </div>
                </form>
           </div>
           <div class="col-md-12 col-lg-6">
               <div class="contact-info">
                   <div class="contact-content">
                       <h3>Office Address</h3>
                       <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia temporibus corporis ea non consequatur porro corrupti hic voluptatibus assumenda, doloribus.
                       </p>
                       <address>
                           <p><i class="fa fa-phone"> +220 3937617</i></p>
                           <p><i class="fa fa-envelope-o">  seckaebson22@gmail.com</i></p>
                           <p><i class="fa fa-map-marker">  Tallinding, The Gambia</i></p>
                       </address>
                   </div>
                   <div class="contact-content">
                       <h3>Open Hours</h3>
                       <address>
                           <p><span>Monday - Friday</span> 9.00 am to 12pm</p>
                           <p><span>Saturday</span> 9.00 am to 10 pm</p>
                           <p><span>Sunday</span> 10.00 am to 12pm</p>
                       </address>
                   </div>
               </div>
           </div>
        </div>
    </div>
</section>

<?php require_once 'inc/footer.php'; ?>