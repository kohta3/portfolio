<?php

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php
        $page_title ="test"; 
        include('../component/header.php'); 
    ?>
</head>

<body>
    <?php include('../component/nav.php'); ?>

    <section class="example-header">
    </section>
    <main>
        <section class="sidebar">
            <ul>
                <li><h3>カテゴリーから探す</h3></li>
                <li><a href="ゴールド">ゴールド</a></li>
                <li><a href="シルバー">シルバー</a></li>
                <li><a href="パール風">パール風</a></li>
                <li><a href="クリスタル風">クリスタル風</a></li>
                <li><a href="フラワー">フラワー</a></li>
                <li><a href="リボン">リボン</a></li>
                <li><a href="リング">リング</a></li>
            </ul>
        </section>
        <section class="example-content">

        </section>
    </main>
    <?php include('../component/footer.php'); ?>
</body>

</html>