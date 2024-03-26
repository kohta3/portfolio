<?php
    require $_SERVER['DOCUMENT_ROOT'].'/app/controller/products_controller.php';
    require $_SERVER['DOCUMENT_ROOT'].'/app/common/googleapi.php';

    $imageArray = array();
    $referer = $_SERVER['HTTP_REFERER'];
    $url = 'kohta.starfree.jp';
    $referer_url = parse_url($referer)['host'];
    $redirect = $_SERVER['DOCUMENT_ROOT']."/404";

    if (stristr($referer_url, $url) || count($_POST) > 0) {

        switch ($_POST['post_type']) {
            case 'products_create':
                $products = new ProductsController();

                if (isset($_FILES['image1'])) {
                    array_push($imageArray, $_FILES['image1']);
                } 
    
                if (isset($_FILES['image2'])) {
                    array_push($imageArray, $_FILES['image2']);
                }
    
                try {
                    if (count($imageArray) > 0) {
                        $image_uploader = new GoogleDriveUploader();
                        foreach ($imageArray as $key => $image) {
                            $imageUrl[] = $image_uploader->uploadImage($image['tmp_name'], $image['name'], "1AoMIRQB3jMZQ423uG2zjd0_gBmgZ_Nj-");
                        }
                    }
    
                    $image1 = isset($imageUrl[0])?$imageUrl[0]:null;
                    $image2 = isset($imageUrl[1])?$imageUrl[1]:null;
                    $categorise = implode(",", $_POST['product_category']);
                    $products->create($_POST['product_name'], $_POST['price'], $_POST['discription'], $image1, $image2, $categorise, null);
                    setcookie("productMessage", true, time()+3);
                } catch (\Throwable $th) {
                    setcookie("productMessage", false, time()+3);
                }

                header("Location: $referer");
                exit();

                break;
            default:
                header("Location:  $redirect"); // URLはダブルクォートで囲む必要があります
                exit(); 
                break;
        }
    
    }else{
        header("Location:  $redirect"); // URLはダブルクォートで囲む必要があります
        exit(); 
    }