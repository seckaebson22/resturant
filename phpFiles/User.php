<?php 

class User {
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

    public function sendReservation($name, $email, $phone, $date, $time, $person){
        $query = "INSERT INTO reservation (name, email, phone, date, time, person) VALUES
        (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $phone);
        $stmt->bindParam(4, $date);
        $stmt->bindParam(5, $time);
        $stmt->bindParam(6, $person);
        $stmt->execute();
    }

    public function getMealType($meal_type){
        $query = "SELECT * FROM product WHERE meal_type=? ORDER BY id ASC LIMIT 6 ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $meal_type);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function placeOrder($name, $town, $street_name, $phone_number, $email, $price){
        $query = "INSERT INTO tbl_order (name, town, street_name, phone_number, email, price) VALUES
        (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $town);
        $stmt->bindParam(3, $street_name);
        $stmt->bindParam(4, $phone_number);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $price);
        $stmt->execute();
    }
}