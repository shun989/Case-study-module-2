<?php


namespace App\Model;


class Register
{
     protected \PDO $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn =$db->connect();
    }

    function checkCreate($email){
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        return $stmt->fetch();
    }

    function createUser($email, $password, $firstName, $lastName): bool
    {
        $sql = "INSERT INTO users VALUES ( null, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->bindParam(3, $firstName);
        $stmt->bindParam(4, $lastName);
        return $stmt->execute();
    }

}