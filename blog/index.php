<?php 
    require_once "../app/controller/blog_controller.php";

    $blobController = new BlobController();
    $result = $blobController->create();
    echo $result;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php
        $page_title ="test"; 
        include('../component/header.php'); 
    ?>
</head>
<body>
    <?php include('../component/nav.php'); ?>
    <?php include('../component/footer.php'); ?>
</body>
</html>