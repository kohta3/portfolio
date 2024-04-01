<?php

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php
        $page_title ="portfolio ECサンプルサイト"; 
        include('../component/header.php'); 
    ?>
</head>

<body style="background-color: #efefef;">
    <?php include('../component/nav.php'); ?>

    <section class="example-header">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><a href="./">
                    <picture>
                        <source media="(min-width: )" srcset="">
                        <img src="/02_assets/images/example/slider1.png" alt="カルーセル1">
                    </picture>
                </a></div>
                <div class="swiper-slide"><a href="./">
                    <picture>
                        <source media="(min-width: )" srcset="">
                        <img src="/02_assets/images/example/slider2.png" alt="カルーセル2">
                    </picture>    
                </a></div>
                <div class="swiper-slide"><a href="./">
                    <picture>
                        <source media="(min-width: )" srcset="">
                        <img src="/02_assets/images/example/slider3.png" alt="カルーセル3">
                    </picture>
                </a></div>
                <div class="swiper-slide"><a href="./">
                    <picture>
                        <source media="(min-width: )" srcset="">
                        <img src="/02_assets/images/example/slider1.png" alt="カルーセル1">
                    </picture>
                </a></div>
            </div>
            <div class="swiper-pagination" id="pagination"></div>
            
            <div class="swiper-button-prev" id="prev"></div>
            <div class="swiper-button-next" id="next"></div>
        </div>
    </section>
    <main>
        <div class="container">
            <section class="sidebar">
                <ul>
                    <li><h3>カテゴリーから探す</h3></li>
                    <li><a href="すべて">すべて</a></li>
                    <li><a href="ゴールド">ゴールド</a></li>
                    <li><a href="シルバー">シルバー</a></li>
                    <li><a href="パール風">パール風</a></li>
                    <li><a href="クリスタル風">クリスタル風</a></li>
                    <li><a href="フラワー">フラワー</a></li>
                    <li><a href="リボン">リボン</a></li>
                    <li><a href="リング">リング</a></li>
                </ul>
                <select id="categorySelector">
                    <option value="すべて">すべて</option>
                    <option value="ゴールド">ゴールド</option>
                    <option value="シルバー">シルバー</option>
                    <option value="パール風">パール風</option>
                    <option value="クリスタル風">クリスタル風</option>
                    <option value="フラワー">フラワー</option>
                    <option value="リボン">リボン</option>
                    <option value="リング">リング</option>
                </select>
            </section>
            <section class="example-content">
                <div>
                    <h3>人気のおすすめアイテム</h3>
                    <div class="example-cards">
                        <ul>
                            <?php for ($i=0; $i < 5 ; $i++): ?>
                            <li class="example-card">
                                <a href=""><img src="/02_assets/images/example/slider1.png" alt=""></a>
                                <div class="example-card-content">
                                    <p>商品名</p>
                                    <p>カテゴリー名</p>
                                    <p>&yen;1,000円</p>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>
                        <button class="prev"><</button>
                        <button class="next">></button>
                    </div>
                </div>
                <div>
                    <h3>新着のアイテム</h3>
                    <div class="example-cards">
                        <ul>
                            <?php for ($i=0; $i < 5 ; $i++): ?>
                            <li class="example-card">
                                <a href=""><img src="/02_assets/images/example/slider1.png" alt=""></a>
                                <div class="example-card-content">
                                    <p>商品名</p>
                                    <p>カテゴリー名</p>
                                    <p>&yen;1,000円</p>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
                <div>
                    <h3>人気のおすすめアイテム</h3>
                    <div class="example-cards">
                        <ul>
                            <?php for ($i=0; $i < 5 ; $i++): ?>
                            <li class="example-card">
                                <a href=""><img src="/02_assets/images/example/slider1.png" alt=""></a>
                                <div class="example-card-content">
                                    <p>商品名</p>
                                    <p>カテゴリー名</p>
                                    <p>&yen;1,000円</p>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include('../component/footer.php'); ?>
</body>

</html>