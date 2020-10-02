
<?php
 require_once 'inc/header-links.php'; 
?>

    <title>Resturant Management System | Sign Up</title>
</head>
<body>

    <div class="registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12 error">
                    <p style="color: red;">
                        <?php 
                            if(isset($_SESSION['message'])){
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                            }
                        ?>
                    </p>
                </div>
                <div class="col-md-12">
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="password" name="password" required>
                        </div>
                        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                        <p>Registered? <a href="index.php"> Click to login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>