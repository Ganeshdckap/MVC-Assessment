<?php

class database
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=mvc",
                "root",
                "welcome");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

class UserModel extends database {


    public function insertdata($products,$files)
    {
    
            $sku =$products['sku'];
            move_uploaded_file($files["tmp_name"],"upload/" .$files["name"]);
            $imagePath= "upload/".$files["name"];
            $products_name =$products['product_name'];
            $price =$products['price'];
            $sku =$products['sku'];
            $brands =$products['brands'];
            $manufactured =$products['manufactured'];
            $avl_stock =$products['stock'];
            $this->db ->query( "Insert into products (product_name,price,image,sku,brand,manufactured,availabe_stock) values ('$products_name','$price','$imagePath','$sku','$brands','$manufactured','$avl_stock')");
                        header("location:/");



    }
    public function read($id) {
      
        $query =$this->db->query("select * from products where id =$id");
        $datas=$query->fetchAll(PDO::FETCH_OBJ);
        return $datas;

    }

    public function update($products,$files) {
       
        move_uploaded_file($files["tmp_name"],"upload/" .$files["name"]);
        $imagePath= "upload/".$files["name"];

        $products_name =$products['product_name'];
        $price =$products['price'];
        $sku =$products['sku'];
        $brands =$products['brands'];
        $manufactured =$products['manufactured'];
        $avl_stock =$products['stock'];
        $id =$products['id'];
            $this->db ->query("Update products set product_name ='$products_name',                                     price='$price',image='$imagePath',sku='$sku',brand='$brands',                                    manufactured=$manufactured,availabe_stock=$avl_stock where id='$id'");
        header("location:/");

    }

    public function deleteOnDb($id) {
        echo $id;
        $this->db ->query( "DELETE FROM products WHERE id = $id;");

        
    }

    public function getAllProductsFromDb() {
       $query =$this->db->query("select * from products");
       $datas=$query->fetchAll(PDO::FETCH_OBJ);
       return $datas;

    }

}