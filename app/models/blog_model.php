<?php

    require_once '../app/models/common_model.php';

    class Blog {
        private $common;

        function __construct() {
            $this->common = new common_model();
        }

        function create($title, $genre, $content, $userName, $imageUrl) {
            $connect = $this->common->connectDB();
        
            $query = "INSERT INTO blog_colmun (title, genre, content, user_name, image_url) VALUES ('$title', '$genre', '$content', '$userName', '$imageUrl')";
            $connect->query($query);
            
            $connect->close();
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
