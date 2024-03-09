<?php
    // common_model.php ファイルを読み込む
    require_once '../01_app/models/common_model.php';

    // common_model クラスのインスタンスを作成する
    $common = new common_model();

    // connectDB メソッドを呼び出してデータベースに接続する
    $conn = $common->connectDB();

    // データベースに接続できたことを確認する
    echo "データベースに接続しました";
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