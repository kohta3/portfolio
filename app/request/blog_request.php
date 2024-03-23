<?php
    require $_SERVER['DOCUMENT_ROOT'].'/app/controller/blog_controller.php';
    require $_SERVER['DOCUMENT_ROOT'].'/app/common/googleapi.php';

    $blog = new BlobController();
    $referer = $_SERVER['HTTP_REFERER'];
    $url = 'kohta.starfree.jp';
    $referer_url = parse_url($referer)['host'];
    $redirect = $_SERVER['DOCUMENT_ROOT']."/404";

    if (stristr($referer_url, $url) || count($_POST) > 0) {

        $imagePath = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name']; 

        switch ($_POST['post_type']) {
            case 'colmun_create':
                $image_uploader = new GoogleDriveUploader();
                $imageUrl = $image_uploader->uploadImage($imagePath,$imageName);
                $blog->create($_POST['title'], $_POST['genre'], $_POST['content'], 'Kohta', $imageUrl);
                break;
            default:
                // その他の処理
                die("その他の処理");

                break;
        }

    }else{
        header(`Location:  $redirect`);
        exit(); 
    }