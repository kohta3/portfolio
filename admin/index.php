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
    <section class="sp-header">
        <label for="adminSidebar">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </section>
    <input type="checkbox" name="adminSidebar" id="adminSidebar">
    <main>
        <section class="sidebar">
            <ul>
                <li><a href="./">記事一覧</a></li>
                <li><a href="./">記事の投稿</a></li>
                <!-- <li><a href="./">コンソール</a></li> -->
                <li><a href="/">トップページに戻る</a></li>
            </ul>
        </section>
        <div class="admin-content">
            <div>
                <h1>記事の投稿</h1>
            </div>
            <form action="../app/request/blog_request.php" method="post" enctype="multipart/form-data" id="admin-form">
                <input type="hidden" name="csrf_token" value="<?= $session ?>">
                <input type="hidden" name="post_type" value="colmun_create">
                <div>
                    <label for="title">記事のタイトル</label>
                    <input type="text" name="title" id="title">
                    <p class="errorText">タイトルを入力してください</p>
                </div>
                <div>
                    <label for="genre">ジャンル</label>
                    <select name="genre" id="genre">
                        <option selected disabled value="">ジャンルを選択してください</option>
                        <option value="エンジニア">エンジニア</option>
                        <option value="趣味">趣味</option>
                        <option value="ご飯">ご飯</option>
                    </select>
                    <p class="errorText">ジャンルを選択してください</p>
                </div>
                <div>
                    <label for="content">記事の内容</label>
                    <textarea name="content" id="content"></textarea>
                    <p class="errorText">記事を書いてください</p>
                </div>
                <!-- <div>
                    <label for="user_name">お名前</label>
                    <input type="text" name="user_name" id="user_name">
                </div> -->
                <div>
                    <label for="image">写真を添付</label>
                    <input type="file" name="image" id="image">
                    <p class="errorText">写真を添付してください</p>
                </div>
                <div class="btn-div">
                    <button id="adminSubmit" type="submit">投稿する</button>
                </div>
            </form>
        </div>
    </main> 
    <?php include('../component/footer.php'); ?>
</body>
</html>