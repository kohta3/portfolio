<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app/models/common_model.php';

    class Product {
        private $common;

        function __construct() {
            $this->common = new common_model();
        }

        function create($product_name, $price, $discription, $image1, $image2, $categorise, $labels) {
            $connect = $this->common->connectDB();
        
            $query = "INSERT INTO products (product_name, price, discription, image1, image2, categorise, labels) VALUES ('$product_name', '$price', '$discription', '$image1', '$image2', '$categorise', '$labels')";
            $connect->query($query);
            
            $connect->close();
        }
        

        function show() {
            $connect = $this->common->connectDB();        
            $connect->close();
        }
        
    }
?>
