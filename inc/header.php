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