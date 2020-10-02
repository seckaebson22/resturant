<?php

class Admin {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "resturant_system";
    private $conn;

    function __construct(){
        try {
            $this->conn = new PDO("mysql:host=". $this->servername. ";dbname=".$this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
            }
    }

    public function registerAdmin($name, $email, $username, $password){
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO admin (name, email, username, password) VALUES
        ('$name', '$email', '$username', '$password_hash')";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }

    public function addProduct($name, $price, $meal_type, $image){
        $query = "INSERT INTO product (name, price, meal_type, image) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $price);
        $stmt->bindParam(3, $meal_type);
        $stmt->bindParam(4, $image);
        $stmt->execute();
    }

    public function displayProducts(){
        $query = "SELECT * FROM product";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteProducts(){
        $id = $_POST['id'];
        $query = "DELETE FROM product WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        if($stmt){
            $_SESSION['deleted_product'] = "Record deleted successfully";
        }
    }

    public function editProduct($id){
        $query = "SELECT * FROM product WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateProduct($name, $price, $meal_type, $image){
        $id = $_GET['id'];
        $query = "UPDATE product SET name=?, price=?, meal_type=?, image=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $price);
        $stmt->bindParam(3, $meal_type);
        $stmt->bindParam(4, $image);
        $stmt->bindParam(5, $id);
        $stmt->execute();
    }

    public function loginAdmin($username, $password){
        if(!empty($username) && !empty($password)){
            $query = "SELECT * FROM admin WHERE username=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $username);

            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($password, $data[0]['password'])){
                $_SESSION['username'] = $username;

                header("location: dashboard.php");
            }else{
                $_SESSION['login_error_message'] = "Invalid Username or Password";
                header("location: index.php");
            }

        }
    }

    public function fetchReservation(){
        $query = "SELECT * FROM reservation";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteReservation($id){
        $query = "DELETE FROM reservation WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function displayOrders(){
        $query = "SELECT * FROM tbl_order";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteOrder($id){
        $query = "DELETE FROM tbl_order WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function editOrder($id){
        $query = "SELECT * FROM tbl_order WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateOrder($name, $town, $street_name, $phone_number, $email, $price, $date){
        $id = $_GET['id'];
        $query = "UPDATE tbl_order SET name=?, town=?, street_name=?, phone_number=?, email=?, price=?, posting_date=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $town);
        $stmt->bindParam(3, $street_name);
        $stmt->bindParam(4, $phone_number);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $price);
        $stmt->bindParam(7, $date);
        $stmt->bindParam(8, $id);
        $stmt->execute();
    }

    public function countNumberOfItems($item_name){
        // count total number of rows in the item
        $query = "SELECT COUNT(*) as total_rows FROM $item_name";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        // get total rows
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $total_number_rows = $row['total_rows'];

        echo $total_number_rows;
    }
}