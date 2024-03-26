<?php include('./comp_header.php') ?>
<main>
    <?php include('./comp_sidebar.php') ?>
    <div class="admin-content add-colmun">
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
<script src="/02_assets/src/js/admin_blog.js"></script>
