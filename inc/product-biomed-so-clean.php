<?php
$productColor = $colorVitafresh;
?>
<article id="biomed-so-clean" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-so-clean">
                    <div class="double thread-1">
                        <span class="magnify" data-img="upload/pr/thrd/biomed-thread-1.png"></span>
                        <a href="javascript:void(0);" target="_blank" class="price">
                            <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                            <span><?=$GLOBALS['ICON']['CART']?></span>
                        </a>
                    </div>
                    <div class="double thread-2">
                        <span class="magnify" data-img="upload/pr/thrd/biomed-thread-2.png"></span>
                        <div class="price">
                            <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                            <span><?=$GLOBALS['ICON']['CART']?></span>
                        </div>
                    </div>
                </div>
                <div class="double-change prev"><?=$GLOBALS['ICON']['BACK']?></div>
                <div class="double-change next"><?=$GLOBALS['ICON']['BACK']?></div>
            </div>
        </div>

        <div class="description">
            <div class="name">
                <div class="line-1 small">Зубные нити</div>
                <div class="line-2">Biomed <span style="color: #<?=$productColor?>">So'Clean</span></div>
            </div>
            <h3 class="blue">С ароматом кокоса<br/>и эфирным маслом корицы.<br/>Нити можно использовать<br/>с 7 лет</h3>
        </div>
    </div>


    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Аромат кокоса и корицы</b><br/>Ароматы кокоса и корицы освежают дыхание и заряжают энергией на целый день</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Технология Riser Floss</b><br/>Нити Biomed на 43%<sup>*</sup> эффективнее очищают межзубные промежутки от пищи</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Антимикробное действие пчелиного воска</b><br/>Борется с микробами и окислением в полости рта</p>
        </div>
    </div>



    <div class="fade-block catalog">
        <div class="head-2">
            <h3>Нити усиливают<br/>очищающий эффект<br/>всех паст Biomed</h3>
        </div>

        <div class="paste-catalog">
            <div class="paste-product slide-to" data-to="product" data-product="biomed-vitafresh">
                <div class="img" data-img="upload/pr/pst/biomed-vitafresh.png"></div>
            </div>
            <div class="paste-product slide-to" data-to="product" data-product="biomed-white-complex">
                <div class="img" data-img="upload/pr/pst/biomed-white-complex.png"></div>
            </div>
            <div class="paste-product slide-to" data-to="product" data-product="biomed-biocomplex">
                <div class="img" data-img="upload/pr/pst/biomed-biocomplex.png"></div>
            </div>
            <div class="paste-product slide-to" data-to="product" data-product="biomed-superwhite">
                <div class="img" data-img="upload/pr/pst/biomed-superwhite.png"></div>
            </div>
            <div class="paste-product slide-to" data-to="product" data-product="biomed-sensitive">
                <div class="img" data-img="upload/pr/pst/biomed-sensitive.png"></div>
            </div>
            <div class="paste-product slide-to" data-to="product" data-product="biomed-propoline">
                <div class="img" data-img="upload/pr/pst/biomed-propoline.png"></div>
            </div>
            <div class="paste-product slide-to" data-to="product" data-product="biomed-calcimax">
                <div class="img" data-img="upload/pr/pst/biomed-calcimax.png"></div>
            </div>
        </div>
    </div>



    <?php
    include('section-product--research.php');
    ?>

    <?php
    include('section-product--footer.php');
    ?>
</article>