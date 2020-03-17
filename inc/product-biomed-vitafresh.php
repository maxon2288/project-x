<?php
$productColor = $colorVitafresh;
?>
<article id="biomed-vitafresh" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-vitafresh">
                    <a href="https://www.ozon.ru/context/detail/id/150821277" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1">Biomed</div>
                <div class="line-2" data-color="<?=$productColor?>">Vitafresh</div>
            </div>
            <h3>Для свежего дня</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Заряжает энергией</b><br/>
                Цитрусовые масла, кальций и экстракты подорожника сохраняют дыхание свежим на 12 часов</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Снижает зубную боль</b><br/>
                Паста успокаивает десны и укрепляет эмаль — тебе проще добиваться целей</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Приятна на вкус</b><br/>
                При этом паста не меняет вкусовых ощущений и не раздражает слизистую</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Сила Vitafresh —<br/>в цитрусовой свежести</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'citrus', 'title' => 'Масла мандарина, грейпфрута, лимона и мяты', 'text' => 'Защищают десны от бактерий и воспаления'),
            array('img' => 'ananas', 'title' => 'Бромелаин из экстракта ананаса', 'text' => 'Снимает воспаление. Расщепляет и удаляет зубной налет'),
            array('img' => 'calcium', 'title' => 'Кальций и L-аргинин', 'text' => 'Реминализируют эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'cink', 'title' => 'Глюконат цинка', 'text' => 'Обладает антибактериальными и противовоспалительными свойствами. После каждого применения проходит неприятных запах изо рта'),
            array('img' => 'polivinill', 'title' => 'Поливинил-пирролидон', 'text' => 'Растворяет зубной налет, улучшает трофику пародонта и слизистой полости рта. Очищает зубы от налета табака, чая, кофе'),
            array('img' => 'chamomile', 'title' => 'Бисаболол', 'text' => 'Защищает зубы от бактерий и микробов'),
            array('img' => 'laktat', 'title' => 'Ментил лактат', 'text' => 'Обладает сильным охлаждающим эффектом, обеспечивает свежее дыхание на целый день'),
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
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Vitafresh</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Первая мандариновая паста в России!</b></p>
            </li>
            <?php
            include('section-product--why-items.php');
            ?>
            <li class="why-item"><br/><br/><br/></li>
        </ul>
    </div>



    <?php
    include('section-product--research.php');
    ?>



    <div class="fade-block also">
        <div class="head">
            <h3>Для  максимального<br/>
                эффекта используй<br/>
                с пастой Biomed Vitafresh</h3>
        </div>

        <div class="also-list">
            <div class="also-product slide-to" data-to="product" data-product="biomed-gum-vitafresh">
                <div class="img gum" data-img="upload/pr/gms/gum-vita-fresh-small.png"></div>
                <div class="also-description">
                    <h4>Ополаскиватель</h4>
                    <h3>Vita Fresh</h3>
                    <p>Борется с кариесом и воспалением в полости рта. Дарит свежее дыхание и душевное равновесие</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/158866615" target="_blank" class="price" style="background: #<?=$colorVitafresh?>">
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