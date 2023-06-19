<?php
require_once "models/UserModel.php";

class UserController {
    private $userModel;

    public function __construct() {


        $this->userModel = new UserModel();
    }

    public function createNewProducts($products,$files) {
     
            unset($_SESSION['Already-Exists']);
        if($products && $files){
            $this->userModel->insertdata($products,$files);

        }else{
            require "views/products/createProducts.php";
        }

    }

    public function edit($product,$files) {
//        var_dump($product);
var_dump($files);
        $this->userModel->update($product,$files);
        require 'views/products/edit.php';

       
    }

    public function deleteProduct($id) {
//        echo"$id";
        $this->userModel->deleteOnDb($id);
        header("location:/");
        
    }

    public function listOffAllProducts() {
    

        $allproducts=$this->userModel->getAllProductsFromDb();
        require 'views/products/listOffAllProducts.php';
    }

    public function viewOneProduct($id) {
        $particularProduct=$this->userModel->read("$id");
        require 'views/products/edit.php';


       
    }
}
