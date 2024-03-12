<?php

    require_once '../app/models/common_model.php';

    class Blog {
        private $connect;

        function __construct() {
            $this->connect = new common_model();
        }

        function create($title, $genre, $content, $userName, $imageUrl) {
            $common = new common_model();
            $common->connectDB(); // データベースに接続
        
            // エスケープ処理
            $title = $common->escapeString($title);
            $genre = $common->escapeString($genre);
            $content = $common->escapeString($content);
            $userName = $common->escapeString($userName);
            $imageUrl = $common->escapeString($imageUrl);
        
            $query = "INSERT INTO blog_colmun (title, genre, content, user_name, image_url) VALUES ('$title', '$genre', '$content', '$userName', '$imageUrl')";
            $conn = $common->getConnection(); // データベース接続オブジェクトを取得
            $conn->query($query); // クエリを実行
        }
        

        function show() {
            $query = "SELECT * FROM blog_colmun";
            $result = $this->connect->query($query);

            $articles = array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $article = new stdClass(); 
                    $article->title = $row['title'];
                    $article->genre = $row['genre'];
                    $article->content = $row['content'];
                    $article->userName = $row['user_name'];
                    $article->imageUrl = $row['image_url'];
                    
                    $articles[] = $article;
                }
            }

            return $articles;
        }
    }
?>
