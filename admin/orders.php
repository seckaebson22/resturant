<?php require_once 'inc/header-links.php';

// delete orders
if(isset($_GET['del'])){
    $id = $_GET['del'];

    $admin->deleteOrder($id);
}
?>

    <title>Resturant Management System | Orders</title>
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
                    <button class="btn btn-primary"><a href="dashboard.php">Dashboard</a></button>
                    <button class="btn btn-primary active"><a href="orders.php">Orders</a></button>
                    <button class="btn btn-primary"><a href="reservation.php">Reservation</a></button>
                    <button class="btn btn-primary"><a href="add-product.php">Add Product</a></button>
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
                    <h4 class="heading-title">All Orders</h4>
                    <h4 class="heading-date"><span class="fa fa-calendar"> Mon, December 1, 2020</span></h4>
                </div>
                <div class="dashboard-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Town/City</th>
                                        <th>Street Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                        $sql = $admin->displayOrders();
                                        foreach($sql as $row){
                                            $count = 1;
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['town']; ?></td>
                                        <td><?php echo $row['street_name']; ?></td>
                                        <td><?php echo $row['phone_number']; ?></td> 
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['posting_date']; ?></td>
                                        <td>
                                            <button class="btn btn-primary btn-edit">
                                                <a href="update-order.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a>
                                            </button>
                                            <button class="btn btn-danger btn-delete">
                                                <a href="orders.php?del=<?php echo $row['id']; ?>"><i class="fa fa-trash-o"></i></a>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <?php
                                        $count++; 
                                        }
                                    ?>
                                </table>
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