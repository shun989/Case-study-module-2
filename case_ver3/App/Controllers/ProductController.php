<?php


namespace App\Controller;
use App\Model;

class ProductController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new Model\Product();
    }

    public function index()
    {
        $products = $this->productModel->getAllProduct();
        include "../../Resource/Views/Product/product-list.php";
    }

    public function productDetail($id)
    {
        $showProduct = $this->productModel->showProduct($id);
        include "../../Resource/Views/Product/product-show.php";
    }
}