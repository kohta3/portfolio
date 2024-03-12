<?php 
    require_once '../app/models/blog_model.php';

    class BlobController {
        private $blog;

        function __construct() {
            $this->blog = new Blog();
        }

        function create() {
            try {
                $this->blog->create("test","test","test","test","test");
            } catch (\Throwable $th) {
                return $th;
            }

            return "登録しました";
        }

        function show() {
            // Show method implementation goes here
        }
    }
?>
