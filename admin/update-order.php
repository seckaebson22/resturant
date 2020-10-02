<?php require_once 'inc/header-links.php';

// edit order
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = $admin->editOrder($id);

    foreach($sql as $row){
        $name = $row['name'];
        $town = $row['town'];
        $street_name = $row['street_name'];
        $phone_number = $row['phone_number'];
        $email = $row['email'];
        $price = $row['price'];
        $date = $row['posting_date'];
    }
}

// update product
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $town = $_POST['town'];
    $street_name = $_POST['street_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $price = $_POST['price'];
    $date = $_POST['posting_date'];

    $admin->updateOrder($name, $town, $street_name, $phone_number, $email, $price, $date);
    header("location: update-order.php");
}

?>

    <title>Resturant Management System | Add Product</title>
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
                    <button class="btn btn-primary"><a href="orders.php">Orders</a></button>
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
                    <h4 class="heading-title">Update Order</h4>
                    <h4 class="heading-date"><span class="fa fa-calendar"> Mon, December 1, 2020</span></h4>
                </div>
                <div class="dashboard-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?php if(isset($name)) echo $name; ?>" placeholder="Enter name" name="name" required>
                                </div>
                                <div class="form-group">
                                <label for="town">Town/City</label>
                                <input type="text" class="form-control" value="<?php if(isset($town)) echo $town; ?>" placeholder="Enter town/city" name="town" required>
                                </div>
                                <div class="form-group">
                                <label for="Street Name"></label>
                                <input type="text" class="form-control" value="<?php if(isset($street_name)) echo $street_name; ?>" placeholder="Enter street name" name="street_name" required>
                                </div>
                                <div class="form-group">
                                <label for="Phone Number"></label>
                                <input type="text" class="form-control" value="<?php if(isset($phone_number)) echo $phone_number; ?>" placeholder="Enter phone number" name="phone_number" required>
                                </div>
                                <div class="form-group">
                                <label for="Email"></label>
                                <input type="text" class="form-control" value="<?php if(isset($email)) echo $email; ?>" placeholder="Enter email address" name="email" required>
                                </div>
                                <div class="form-group">
                                <label for="Price"></label>
                                <input type="text" class="form-control" value="<?php if(isset($price)) echo $price; ?>" placeholder="Enter order price" name="price" required>
                                </div>
                                <div class="form-group">
                                <label for="date"></label>
                                <input type="text" class="form-control" value="<?php if(isset($date)) echo $date; ?>" placeholder="Enter order date" name="date" required>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary">update order</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </div>

<?php require_once 'inc/footer.php'; ?>