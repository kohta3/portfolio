<?php include('./comp_header.php') ?>
<main>
    <?php include('./comp_sidebar.php') ?>
    <div class="admin-content example">
        <div>
            <h1>商品登録</h1>
        </div>
        <form action="../app/request/products_request.php" method="post" enctype="multipart/form-data" id="admin-form">
            <input type="hidden" name="csrf_token" value="<?= $session ?>">
            <input type="hidden" name="post_type" value="products_create">
            <div>
                <label for="product_name">商品名</label>
                <input type="text" name="product_name" id="product_name">
                <p class="errorText">商品名を入力してください</p>
            </div>
            <div>
                <label for="product_category">カテゴリー</label>
                <div class="product_category">
                    <div>
                        <input type="checkbox" name="product_category[]" id="category_gold" value="ゴールド">
                        <label for="category_gold">ゴールド</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_category[]" id="category_silver" value="シルバー">
                        <label for="category_silver">シルバー</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_category[]" id="category_pearl" value="パール">
                        <label for="category_pearl">パール風</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_category[]" id="category_crystal" value="クリスタル">
                        <label for="category_crystal">クリスタル風</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_category[]" id="category_flower" value="フラワー">
                        <label for="category_flower">フラワー</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_category[]" id="category_ribbon" value="リボン">
                        <label for="category_ribbon">リボン</label>
                    </div>
                    <div>
                        <input type="checkbox" name="product_category[]" id="category_ring" value="リング">
                        <label for="category_ring">リング</label>
                    </div>
                </div>
                <p class="errorText">カテゴリーを1つ以上選択してください</p>
            </div>
            <div>
                <label for="discription">商品の説明</label>
                <textarea name="discription" id="discription"></textarea>
                <p class="errorText">説明文を書いてください</p>
            </div>
            <div>
                <label for="price">価格</label>
                &yen;<input type="number" name="price" id="price">円
                <p class="errorText">値段を入力してください</p>
            </div>
            <div>
                <label for="">写真を添付</label>
                <div class="images">
                    <label for="image1">
                        <img src="/02_assets/images/admin/camera.svg" alt="image1" width=256 class="example_image_in">
                        <img src="" alt="画像プレビュー1" id="image1_preview" style="display:none">  
                    </label>
                    <input type="file" name="image1" id="image1">
                    <label for="image2">
                        <img src="/02_assets/images/admin/camera.svg" alt="image2" width=256 class="example_image_in">
                        <img src="" alt="画像プレビュー2" id="image2_preview" style="display:none">  
                    </label>
                    <input type="file" name="image2" id="image2">                    
                </div>
                <p class="errorText">写真を1~2枚を添付してください</p>
            </div>
            <div class="btn-div">
                <button id="adminSubmit" type="submit">登録する</button>
            </div>
        </form>
    </div>
</main>
<?php if(isset($_COOKIE['productMessage'])): ?>
    <div class="productMessage">
        <?= $_COOKIE['productMessage'] ? "<p style='background:#00ff7f;'>登録が完了しました。</p>" : "<p style='background:#ff4500;'>登録が失敗しました。</p>"; ?>
    </div>
<?php endif; ?>
<script src="/02_assets/src/js/admin_products.js"></script>
