<?php require_once 'inc/header-links.php';

// delete product
if(isset($_POST['id']) && is_numeric($_POST['id'])){

    $admin->deleteProducts();
    header("location: all-product.php");
}

?>

    <title>Resturant Management System | Reservation</title>
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
                    <button class="btn btn-primary active"><a href="all-product.php">All Products</a></button>
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
                    <h4 class="heading-title">All Products</h4>
                    <h4 class="heading-date"><span class="fa fa-calendar"> Mon, December 1, 2020</span></h4>
                </div>
                <div class="dashboard-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <p style="color: red">This record is deleted</p> -->
                                <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>PRICE</th>
                                        <th>MEAL TYPE</th>
                                        <th>IMAGE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = $admin->displayProducts();
                                        $count = 1;
                                        foreach($sql as $row){
                                            $id = $row['id'];
                                    ?>
                                    <tr class="deleted">
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['meal_type']; ?></td>
                                        <td><?php echo $row['image']; ?></td>
                                        <td class="delete_col">
                                                <button class="btn btn-primary btn-edit">
                                                    <a href="update-product.php?id=<?php echo $id; ?>" id="edit" name="edit"><i class="fa fa-pencil"></i></a>
                                                </button>
                                                <button class="btn btn-danger btn-delete">
                                                    <a href="#" class="delete" id="<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a>
                                                </button>
                                        </td>
                                    </tr>
                                    <?php
                                        $count++;
                                        }
                                    ?>
                                    </tbody>
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

    <script type="text/javascript">
        $(function(){
            $('.delete').click(function(){
            var element = $('.delete_col .delete');
            var del_id = element.attr('id');
            var info = 'id='+ del_id;
            if(confirm('Are you sure you want to delete this?')){
                $.ajax({
                    type: 'POST',
                    url: 'all-product.php',
                    data: info,
                    success: function(){
                          
                    }
                });
                $(this).parents('.deleted').hide(500);
            }
            return false;
            });
        });
    </script>

<?php require_once 'inc/footer.php'; ?>