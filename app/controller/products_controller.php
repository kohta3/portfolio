<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/app/models/products_model.php';

    class ProductsController {
        private $products;

        function __construct() {
            $this->products = new Products();
        }

        function create($product_name, $price, $discription, $image1, $image2, $categorise, $labels) {
            try {
                $this->products->create($product_name, $price, $discription, $image1, $image2, $categorise, $labels);
            } catch (\Throwable $th) {
                return $th;
            }

            return "登録しました";
        }

        function show(?String $genre,?Int $limit) {
            return $this->products->show($genre,$limit);
        }
    }
?>
