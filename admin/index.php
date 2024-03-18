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
    <main>
        <section class="sidebar">
            <ul>
                <li><a href="./">記事一覧</a></li>
                <li><a href="./">記事の投稿</a></li>
                <li><a href="./">コンソール</a></li>
            </ul>
        </section>
        <div class="admin-content">
            <div>
                <h1>記事の投稿</h1>
            </div>
            <form action="../app/request/blog_request.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="csrf_token" value="<?= $session ?>">
                <input type="hidden" name="post_type" value="colmun_create">
                <div>
                    <label for="title">記事のタイトル</label>
                    <input type="text" name="title" id="title">
                </div>
                <div>
                    <label for="genre">ジャンル</label>
                    <select name="genre" id="genre">
                        <option selected disabled>ジャンルを選択してください</option>
                        <option value="筋トレ">筋トレ</option>
                        <option value="ご飯">ご飯</option>
                    </select>
                </div>
                <div>
                    <label for="content">記事の内容</label>
                    <textarea name="content" id="content"></textarea>
                </div>
                <div>
                    <label for="user_name">お名前</label>
                    <input type="text" name="user_name" id="user_name">
                </div>
                <div>
                    <label for="image">写真を添付</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="btn-div">
                    <button type="submit">投稿する</button>
                </div>
            </form>
        </div>
    </main> 
    <?php include('../component/footer.php'); ?>
</body>
</html>