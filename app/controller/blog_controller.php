<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/app/models/blog_model.php';

    class BlobController {
        private $blog;

        function __construct() {
            $this->blog = new Blog();
        }

        function create($title, $genre, $content, $userName, $imageUrl) {
            try {
                $this->blog->create($title, $genre, $content, $userName, $imageUrl);
            } catch (\Throwable $th) {
                return $th;
            }

            return "登録しました";
        }

        function show(?String $genre,?Int $limit) {
            return $this->blog->show($genre,$limit);
        }
    }
?>
