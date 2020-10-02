<?php require_once 'inc/header-links.php'; ?>

    <title>Resturant Management System | login Page</title>
</head>
<body>

    <div class="registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center" style="color: red;">
                        <?php 
                            if(isset($_SESSION['login_error_message'])){
                                echo $_SESSION['login_error_message'];
                                unset($_SESSION['login_error_message']);
                            }            
                        ?>
                    </p>
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="password" name="password" required>
                        </div>
                        <button type="submit" name="login_admin" class="btn btn-primary">Sign in</button>
                        <p>Not registered? <a href="signup.php"> Create an account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>