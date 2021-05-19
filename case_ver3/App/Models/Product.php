<?php


namespace App\Model;


class Product
{
    protected $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function showProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id =:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}