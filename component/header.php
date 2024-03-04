<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<?php  $page_url = "https://test.jp" . $_SERVER['REQUEST_URI']; ?>
<title><?= $page_title ?></title>

<meta name="description" content="福岡でwebエンジニアとして働いているOkamuraKohtaです。フロントからサーバーサイドまでフルコーディングするサイトや、CMSを使った内製化しやすいサイトをクライアントの目線で制作させていただきます。">
<meta name="keywords" content="ポートフォリオ,皓太のポートフォリオ,自己紹介,webエンジニア">
<meta property=”og:url” content="<?= $page_url ?>" />
<meta property=”og:title” content="<?= $page_title ?>" />
<meta property=”og:type” content= "website" />
<meta property=”og:description” content=福岡でwebエンジニアとして働いているOkamuraKohtaです。フロントからサーバーサイドまでフルコーディングするサイトや、CMSを使った内製化しやすいサイトをクライアントの目線で制作させていただきます。 />
<meta property=”og:image” content=”画像URL” />
<meta property=”og:site_name” content=”OkamuraKohtaのポートフォリオ” />
<meta property=”og:local” content=”ja_JP” />

<meta name="twitter:card" content="カードの種類" />
<meta name="twitter:site" content="@ユーザー名" />

<link rel="icon" href="/02_assets/images/site_icon/site_icon_16.webp" sizes="16x16" type="image/png" /> 
<link rel="icon" href="/02_assets/images/site_icon/site_icon_32.webp" sizes="32x32" type="image/png" />  
<link rel="icon" href="/02_assets/images/site_icon/site_icon_48.webp" sizes="48x48" type="image/png" /> 
<link rel="icon" href="/02_assets/images/site_icon/site_icon_62.webp" sizes="62x62" type="image/png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">

<?php 
    $path = rtrim($_SERVER['REQUEST_URI'], '/'); // 末尾のスラッシュを削除する

    switch ($path) {
        case '':
            echo '<link rel="stylesheet" href="/02_assets/src/css/about.css" />';
            break;
        case '/example':
            // 他のページに対する処理を追加
            break;
        case '/blog':
            // 他のページに対する処理を追加
            break;
        case '/contact':
            // 他のページに対する処理を追加
            break;
        default:
            // デフォルトの処理を追加
            break;
    }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="/02_assets/src/css/common.css" />
<script src="/02_assets/src/js/common.js"></script>