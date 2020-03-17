<?php
$productColor = $colorVitafresh;
?>
<article id="biomed-gum-vita-fresh" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-gum-vita-fresh">

                    <div class="splash"><span class="magnify" data-img="upload/kv/gum-vita-fresh/splash.png"></span></div>
                    <div class="crystal"><span class="magnify" data-img="upload/kv/gum-vita-fresh/crystal.png"></span></div>
                    <div class="mandarin-small"><span class="magnify" data-img="upload/kv/gum-vita-fresh/mandarin-small.png"></span></div>
                    <div class="formula"><span class="magnify" data-img="upload/kv/gum-vita-fresh/formula.png"></span></div>
                    <div class="limon"><span class="magnify" data-img="upload/kv/gum-vita-fresh/limon.png"></span></div>
                    <div class="base"><span class="magnify" data-img="upload/kv/gum-vita-fresh/base.png"></span></div>

                    <a href="https://www.ozon.ru/context/detail/id/158866615" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1 small">Ополаскиватель</div>
                <div class="line-2" data-color="<?=$productColor?>">VITA FRESH</div>
            </div>
            <h3>Уникальный<br/>цитрусовый вкус!</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Расщепляет белковый налет</b><br/>
                Особенно в комбинации с пастой Biomed Vitafresh</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Обеспечивает длительное свежее дыхание</b><br/>
                Лактат кальция реминализирует эмаль, а ментол освежает дыхание</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Дарит душевное равновесие</b><br/>
                Подорожник и листья березы успокаивают десны, защищают от инфекций и кровоточивости</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Секрет цитрусовой<br/>свежести</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'calcium', 'title' => 'Лактат кальция и L-аргинин', 'text' => 'Реминализируют эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'plantain', 'title' => 'Подорожник и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'mentol', 'title' => 'Ментол', 'text' => 'Освежает и снижает зубную боль'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта'),
            array('img' => 'ananas', 'title' => 'Бромелаин из экстракта ананаса', 'text' => 'Снимает воспаление. Расщепляет и удаляет зубной налет'),
        );
        ?>

        <div class="main-carousel ingredients-carousel">
            <?foreach($ingredients as $ingredient):?>
                <div class="carousel-cell">
                    <div class="img" data-img="upload/ct/content-<?=$ingredient['img']?>.png"></div>
                    <h3><?=$ingredient['title']?></h3>
                    <p><?=$ingredient['text']?></p>
                </div>
            <?endforeach;?>
        </div>
    </div>



    <div class="fade-block why">
        <div class="scrolling img vitafresh-base" data-img="upload/kv/biomed-vitafresh/base@2x.png"></div>

        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Citrus Fresh</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Усиливает освежающий эффект</b><br/>В комбинации с пастой Biomed Vitafresh ты получаешь еще больше свежего дыхания</p>
            </li>
            <?php
            include('section-product--why-items-2.php');
            ?>
        </ul>
    </div>



    <?php
    include('section-product--research.php');
    ?>



    <div class="fade-block also">
        <div class="head">
            <h3>Для  максимального<br/>
                эффекта используй<br/>
                с ополаскивателем Biomed Vita Fresh</h3>
        </div>

        <div class="also-list cols-3">
            <div class="also-product slide-to" data-to="product" data-product="biomed-vitafresh">
                <div class="img paste" data-img="upload/pr/pst/biomed-vitafresh.png"></div>
                <div class="also-description">
                    <h3>Biomed Vitafresh</h3>
                    <p>Борется с кариесом и воспалением в полости рта. Дарит свежее дыхание и душевное равновесие</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/150821277" target="_blank" class="price" style="background: #<?=$colorVitafresh?>">
                    <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                    <span><?=$GLOBALS['ICON']['CART']?></span>
                </a>
            </div>
            <div class="also-product slide-to" data-to="product" data-product="biomed-superwhite">
                <div class="img paste" data-img="upload/pr/pst/biomed-superwhite.png"></div>
                <div class="also-description">
                    <h3>Biomed Superwhite</h3>
                    <p>Кокосовое масло и экстракт корицы борются с бактериями и оставляют неповторимый вкус</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/163333065" target="_blank" class="price" style="background: #<?=$colorSuperwhite?>">
                    <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                    <span><?=$GLOBALS['ICON']['CART']?></span>
                </a>
            </div>
            <div class="also-product slide-to" data-to="product" data-product="biomed-black">
                <div class="img brush" data-img="upload/pr/brsh/biomed-black-green.png"></div>
                <div class="also-description">
                    <h4>Щетка</h4>
                    <h3>Biomed Black</h3>
                    <p>Древесный уголь очищает зубы от налета и стимулирует защиту десен</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/146285711/" target="_blank" class="price" style="background: #<?=$colorWhiteComplex?>">
                    <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                    <span><?=$GLOBALS['ICON']['CART']?></span>
                </a>
            </div>
        </div>
    </div>

    <?php
    include('section-product--footer.php');
    ?>
</article>