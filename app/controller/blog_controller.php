<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/app/models/blog_model.php';

    $referer = $_SERVER['HTTP_REFERER'];
    $url = 'kohta.starfree.jp';
    $referer_url = parse_url($referer)['host'];

    $redirect = $_SERVER['DOCUMENT_ROOT']."/404";

    if (stristr($referer_url, $url) || count($_POST) > 0) {
        $blogController = new BlobController();

        switch ($_POST['post_type']) {
            case 'colmun_create':
                break;
            
            default:
                # code...
                break;
        }
    }else{
        header(`Location:  $redirect`);
        exit(); 
    }
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
