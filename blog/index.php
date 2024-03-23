<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/app/controller/blog_controller.php";

    $blobController = new BlobController();
    $sortCreateAt = $blobController->show(null,10);
    $sortEngineer = $blobController->show("エンジニア",3);
    $sortHobby = $blobController->show("趣味",3);
    $sortEat = $blobController->show("ご飯",3);
    
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
                    <?php
                        foreach ($sortEngineer as $col):
                            echo '<li><a href="./show.php?colmun='.$col['id'].'">'.$col['title'].'</a></li>';
                        endforeach;
                        if (count($sortEngineer) < 3):
                            for ($i = count($sortEngineer); $i < 3; $i++) {
                                echo "<li>coming soon..</li>";
                            }
                        endif;
                    ?>
                </ol>

            </div>
            <div class="blog-ranking-content -hobby">
                <h3>趣味</h3>
                <ol>
                    <?php
                        foreach ($sortHobby as $col):
                            echo '<li><a href="./show.php?colmun='.$col['id'].'">'.$col['title'].'</a></li>';
                        endforeach;
                        if (count($sortHobby) < 3):
                            for ($i = count($sortHobby); $i < 3; $i++) {
                                echo "<li>coming soon..</li>";
                            }
                        endif;
                    ?>
                </ol>
            </div>
            <div class="blog-ranking-content -eat">
                <h3>ご飯</h3>
                <ol>
                    <?php
                        foreach ($sortEat as $col):
                            echo '<li><a href="./show.php?colmun='.$col['id'].'">'.$col['title'].'</a></li>';
                        endforeach;
                        if (count($sortEat) < 3):
                            for ($i = count($sortEat); $i < 3; $i++) {
                                echo "<li>coming soon..</li>";
                            }
                        endif;
                    ?>
                </ol>
            </div>
        </div>
        <div class="menu-title">
            <h4>すべてのカテゴリーの新着記事</h4>
        </div>
        <div class="blog-sort-content">
            <?php foreach ($sortCreateAt as $row) { ?>
            <a class="blog-column rainbow " href="./show.php?colmun=<?= $row['id'] ?>">
                <div class="column-innner1">
                    <h3><?= $row['title'] ?></h3>
                    <p><?= $row['content'] ?></p>
                    <ul class="blog-column-row">
                        <li><?= $row['create_at'] ?></li>
                        <li><img src="/02_assets/images/blog/tagicon.svg" alt="タグ"><?= $row['genre'] ?></li>
                    </ul>
                </div>
                <div class="column-innner2">
                    <img src="<?= $row['image_url']?>" alt="コンテンツ">
                </div>
            </a>
            <?php } ?>
        </div>
    </main>
    <?php include('../component/footer.php'); ?>
</body>
</html>