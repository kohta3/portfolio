<?php 
    require_once "../app/common/common.php";

    $common = new common();
    $session = $common->generate_csrf_token();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ページ</title>
    <link rel="stylesheet" href="../02_assets/src/css/admin.css">
    <link rel="stylesheet" href="../02_assets/src/css/common.css">
</head>
<body>
    <?php
    if (isset($_GET['param'])) {
        switch ($_GET['param']) {
            case 'example':
                include('./include_example.php'); 
                break;
            case 'blog':
                include('./include_blog.php'); 
                break;
            default:
                # code...
                break;
        } 
    }else{
        header("Location:./?param=blog");
        exit();
    }
    ?>
    <?php include('../component/footer.php'); ?>

</body>
</html>