<?php require_once 'inc/header-links.php';

// edit product
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = $admin->editProduct($id);

    foreach($sql as $row){
        $name = $row['name'];
        $price = $row['price'];
        $meal_type = $row['meal_type'];
        $file_name = $row['image'];
    }
}

// update product
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $meal_type = $_POST['meal_type'];

    $target_dir = "uploads/";
        $file_name = $_FILES['image']['name'];
        $target_file = $target_dir . basename($file_name);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        
        if ($target_file == "uploads/") {
            $msg = "cannot be empty";
            $uploadOk = 0;
        } // Check if file already exists
        else if (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
            $uploadOk = 0;
        } // Check file size
        else if ($_FILES["image"]["size"] > 5000000) {
            $msg = "Sorry, your file is too large.";
            $uploadOk = 0;
        } // Check if $uploadOk is set to 0 by an error
        else if ($uploadOk == 0) {
            $msg = "Sorry, your file was not uploaded.";
    
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $msg = "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            }
        }

        $admin->updateProduct($name, $price, $meal_type, $file_name);
        header("location: update-product.php");
}

?>

    <title>Resturant Management System | Update Product</title>
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
                    <h4 class="heading-title">Update Product</h4>
                    <h4 class="heading-date"><span class="fa fa-calendar"> Mon, December 1, 2020</span></h4>
                </div>
                <div class="dashboard-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" value="<?php if(isset($name)) echo $name; ?>" placeholder="Enter name" name="name" required>
                                </div>
                                <div class="form-group">
                                <label for="price">Product Price</label>
                                <input type="text" class="form-control" value="<?php if(isset($price)) echo $price; ?>" placeholder="Enter price" name="price" required>
                                </div>
                                <div class="form-group">
                                <label for="meal type">Meal Type</label>
                                <select class="custom-select" value="<?php if(isset($meal_type)) echo $meal_type; ?>" name="meal_type" required>
                                <option selected>Dina</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="image">Product Image</label>
                                <input type="file" class="form-control" value="<?php if(isset($file_name)) echo $file_name; ?>" name="image" required>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary">Add product</button>
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