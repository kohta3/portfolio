<?php
    // データベース接続
    $servername = "mysql1.php.starfree.ne.jp"; // データベースのホスト名
    $username = "kohta_admin"; // データベースのユーザー名
    $password = "kohta1009"; // データベースのパスワード
    $dbname = "kohta_portfolio"; // データベースの名前

    $conn = new mysqli($servername, $username, $password, $dbname);

    // テーブルのクエリ
    // $query = "INSERT INTO blog_colmun (title, genre, content, user_name, image_url) VALUES ('$title', '$genre', '$content', '$userName', '$imageUrl')";
    $query = "SELECT * FROM blog_colmun";
    $result = $conn->query($query);

    // 接続を閉じる
    $conn->close();
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