<footer>
    <div class="footer-img"><img src="/02_assets/images/site_icon/profile_icon.jpg" alt="プロフィールの犬"></div>
    <div class="footer-content">
        <h3>webエンジニア オカムラコウタ</h3>
        <ul>
            <li>D2C企業でweb制作に従事しており、フロントエンドからサーバーサイドまで幅広く対応しています。</li>
            <li>お問い合わせは<a href="/contact">こちら</a>からお願いします。</li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php 
    $path = rtrim($_SERVER['REQUEST_URI'], '/'); // 末尾のスラッシュを削除する

    switch ($path) {
        case '':
            break;
        case '/example':
            // 他のページに対する処理を追加
            break;
        case '/blog':
            // 他のページに対する処理を追加
            break;
        case '/contact':
            echo '<script src="/02_assets/src/js/contact.js"></script>';
            break;
        default:
            // デフォルトの処理を追加
            break;
    }
?>