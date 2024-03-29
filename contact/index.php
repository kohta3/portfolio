<?php 
    $bool = false;
    if (isset($_COOKIE['contactSuccess'])) {
        $bool = $_COOKIE['contactSuccess'];
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php
        $page_title ="portfolio お問い合わせページ"; 
        include('../component/header.php'); 
    ?>
</head>
<body>
    <?php include('../component/nav.php'); ?>

    <section class="alertText" style="visibility: <?php if($bool):?> visible <?php else: ?> hidden <?php endif; ?>">
        <div>
            <p>送信に成功しました</p>
        </div>
    </section>
    <section class="contact">
        <div class="contact-inner">
            <picture>
                <source>
                <img src="/02_assets/images/contact/mail.png" alt="">
            </picture>
            <h2>Contact</h2>
            <form action="" method="post" id="form">
                <input type="hidden" name="post_type" value="contact_send">
                <div class="contact-input">
                    <label for="name">お名前<em>*</em></label>
                    <div>
                        <input type="text" name="name" id="name">
                        <p>入力してください</p>
                    </div>
                </div>
                <div class="contact-input">
                    <label for="email">メールアドレス<em>*</em></label>
                    <div>
                        <input type="mail" name="email" id="email">
                        <p>入力してください</p>
                    </div>
                </div>
                <div class="contact-input">
                    <label for="confirm">確認メールアドレス<em>*</em></label>
                    <div>
                        <input type="mail" name="confirm" id="confirm">
                        <p>入力してください</p>
                    </div>
                    
                </div>
                <div class="contact-input">
                    <label for="genre">お問い合わせジャンル <em>*</em></label>
                    <div>
                        <select name="genre" id="genre">
                            <option value="" disabled selected>ジャンルを選択してください</option>
                            <option value="仕事の依頼について">仕事の依頼について</option>
                            <option value="その他">その他</option>
                        </select>
                        <p>選択してください</p>
                    </div>
                </div>
                <div class="contact-input">
                    <label for="about">お問い合わせ内容<em>*</em></label>
                    <div>
                        <textarea name="about" id="about" cols="30" rows="10"></textarea>
                        <p>入力してください</p>
                    </div>
                </div>
                <div class="checkbox-div">
                    <div class="checkbox-div-inner">
                        <input type="checkbox" name="allow" id="allow"><label for="allow">個人情報の取り扱いに同意する<em>*</em></label>
                        <p>チェックしてください</p>
                    </div>
                </div>
                <button class="button">メールを送信する</button>
            </form>
        </div>
    </section>

    <?php include('../component/footer.php'); ?>
</body>
</html>