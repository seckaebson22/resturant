<?php require_once 'inc/header-links.php';

    if(!isset($_SESSION['username'])){
        header("location: index.php");
    }
?>
    <title>Resturant Management System | Admin Dashboard</title>
</head>
<body>
    
    <div class="dashboard">
        <div class="container">
        <div class="row">
            <section class="aside col-lg-2">
                <div class="dashboard-title-logo">
                    <h2 class="text-center">Seckaby</h2>
                </div>
                <div class="tabs">
                    <button class="btn btn-primary active"><a href="dashboard.php">Dashboard</a></button>
                    <button class="btn btn-primary"><a href="orders.php">Orders</a></button>
                    <button class="btn btn-primary"><a href="reservation.php">Reservation</a></button>
                    <button class="btn btn-primary"><a href="add-product.php">Add Products</a></button>
                    <button class="btn btn-primary"><a href="all-product.php">All Products</a></button>
                </div>
            </section>
            <section class="main-content col-lg-10">
                <div class="main-content-nav">
                    <nav>
                        <ul>
                            <li><a href="#"><span class="fa fa-bell"></span></a></li>
                            <li><a href="#">Ebrima Secka <span class="fa fa-sort-desc"></span></a>
                                <ul>
                                    <li><a href="logout.php" class="btn btn-primary">logout</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="assets/images/login-logo.jpg" class="rounded-circle" alt=""></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="dashboard-title">
                    <h4 class="heading-title">Dashboard</h4>
                    <h4 class="heading-date"><span class="fa fa-calendar"> Mon, December 1, 2020</span></h4>
                </div>
                <div class="dashboard-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 orders">
                                <div class="dashboard-center">
                                    <div class="dashboard-report">
                                        <p>Total Orders</p>
                                        <span class="report-number">
                                            <?php 
                                                $admin->countNumberOfItems('tbl_order');
                                            ?>
                                        </span>
                                    </div>
                                    <div class="report-logo">
                                        <span class="fa fa-birthday-cake"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 sales">
                                <div class="dashboard-center">
                                    <div class="dashboard-report">
                                        <p>Total Reservation</p>
                                        <span class="report-number">
                                        <?php 
                                                $admin->countNumberOfItems('reservation');
                                            ?>
                                        </span>
                                    </div>
                                    <div class="report-logo">
                                        <span class="fa fa-line-chart"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 profits">
                                <div class="dashboard-center">
                                    <div class="dashboard-report">
                                        <p>Total Products</p>
                                        <!-- <p>$<span class="report-number">30</span></p> -->
                                        <span class="report-number">
                                        <?php 
                                            $admin->countNumberOfItems('product');
                                        ?>
                                        </span>
                                    </div>
                                    <div class="report-logo">
                                        <span class="fa fa-money"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </div>

<?php require_once 'inc/footer.php'; ?>