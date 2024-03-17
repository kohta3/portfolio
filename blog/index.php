<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/app/controller/blog_controller.php";

    // $blobController = new BlobController();
    // $result = $blobController->create();
    // echo $result;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php
        $page_title ="portfolio ブログトップ"; 
        include('../component/header.php'); 
    ?>
</head>
<body>
    <?php include('../component/nav.php'); ?>
    <main>
        <div class="menu-title">
            <h1>blog</h1>
        </div>
        <div class="blog-ranking">
            <div class="blog-ranking-content -engineer">
                <h3>エンジニア</h3>
                <ol>
                    <li>testtitle</li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
            <div class="blog-ranking-content -hobby">
                <h3>趣味</h3>
                <ol>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
            <div class="blog-ranking-content -eat">
                <h3>ご飯</h3>
                <ol>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
        <div class="menu-title">
            <h4>すべてのカテゴリーの新着記事</h4>
        </div>
        <div class="blog-sort-content">
            <?php for($i=0; $i<10; $i++) { ?>
            <div class="blog-column">
                <div class="column-innner1">
                    <h3>テストタイトルですよ</h3>
                    <p>見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し見出し</p>
                    <ul class="blog-column-row">
                        <li>2024/03/11</li>
                        <li><img src="/02_assets/images/blog/tagicon.svg" alt="タグ"></li>
                    </ul>
                </div>
                <div class="column-innner2">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJWP8a9vbGKmeUKbagxvtnL6XsYxKaKeQ01Vm8uiQPdkAdpUQtSGaICZO9MY5P-uzPFhJ_i6txSb8aSjOlxNEgMTJEi8bh0QkHNv8L-96G4uERtiwIEDn7F9dj8Vie7_vCLxqOIH6Qtt0B/s800/job_programmer.png" alt="test">
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
    <?php include('../component/footer.php'); ?>
</body>
</html>