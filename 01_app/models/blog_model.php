<?php
    require_once './common_model.php';

    class Blog {
        private $connect;

        function __construct() {
            $this->connect = new common_model();
        }

        function create($title,$genre,$content,$userName,$imageUrl) {
            $title = $this->connect->escapeString($title);
            $genre = $this->connect->escapeString($genre);
            $content = $this->connect->escapeString($content);
            $userName = $this->connect->escapeString($userName);
            $imageUrl = $this->connect->escapeString($imageUrl);
    
            $query = "INSERT INTO blog_colmun (title, genre, content, user_name, image_url) VALUES ('$title', '$genre', '$content', '$userName', '$imageUrl')";
            $this->connect->query($query);
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
