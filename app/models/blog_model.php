<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app/models/common_model.php';

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
        

        function show(?String $genre, ?Int $limit) {
            $connect = $this->common->connectDB();
        
            if ($genre != null && $limit != null) {
                $query = "SELECT * FROM blog_colmun WHERE genre = '$genre' ORDER BY create_at DESC LIMIT $limit";
            } elseif ($genre != null) {
                $query = "SELECT * FROM blog_colmun WHERE genre = '$genre' ORDER BY create_at DESC";
            } elseif ($limit != null) {
                $query = "SELECT * FROM blog_colmun ORDER BY create_at DESC LIMIT $limit;";
            } else {
                $query = "SELECT * FROM blog_colmun ORDER BY create_at DESC";
            }
        
            try {
                $result = $connect->query($query);
                $blogs = array();
                while ($row = $result->fetch_assoc()) {
                    $blogs[] = $row;
                }
                return $blogs;
            } catch (\Throwable $th) {
                return $th;
            }
        
            $connect->close();
        }
        
    }
?>
