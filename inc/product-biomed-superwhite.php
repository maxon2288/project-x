<?php
$productColor = $colorSuperwhite;
?>
<article id="biomed-superwhite" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-superwhite">
                    <a href="https://www.ozon.ru/context/detail/id/163333065" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1">Biomed</div>
                <div class="line-2" data-color="<?=$productColor?>">Superwhite</div>
            </div>
            <h3>Сила кокоса<br/>для твоих зубов</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Пряная свежесть</b><br/>
                Кокосовое масло и экстракт корицы борются с бактериями и оставляют неповторимый вкус</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Скорлупа для зубов</b><br/>
                Кокос восстанавливает и укрепляет эмаль. Подходит для чувствительных зубов</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Бережно полирует эмаль</b><br/>
                А после каждого применения проходит неприятных запах изо рта</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Чем сильна<br/>кокосовая паста</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'coconut', 'title' => 'Кокосовое масло', 'text' => 'Восстанавливает минеральный баланс, тонизирует и препятствует окислению'),
            array('img' => 'ananas', 'title' => 'Бромелаин из экстракта ананаса', 'text' => 'Снимает воспаление. Расщепляет и удаляет зубной налет'),
            array('img' => 'plantain', 'title' => 'Подорожник и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'calcium', 'title' => 'Кальций и L-аргинин', 'text' => 'Реминерализуют эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'cink', 'title' => 'Цитрат цинка', 'text' => 'Обладает антибактериальными и противовоспалительными свойствами. После каждого применения проходит неприятных запах изо рта'),
            array('img' => 'mentol', 'title' => 'Ментол', 'text' => 'Освежает и снижает зубную боль'),
            array('img' => 'laktat', 'title' => 'Ментил Лактат', 'text' => 'Обеспечивает свежее дыхание на целый день'),
            array('img' => 'sage', 'title' => 'Перечная мята', 'text' => 'Защищает десны от бактерий и воспаления'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта'),
            array('img' => 'thyme', 'title' => 'Тимьян', 'text' => 'Заживляет раны и порезы десен. Препятствует размножению бактерий и воспалению в полости рта'),
            array('img' => 'kamfora', 'title' => 'Камфора', 'text' => 'Снимает воспаление, препятствует окислению и размножению бактерий'),
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
        <div class="scrolling img superwhite-coconut" data-img="upload/kv/biomed-superwhite/coconut@2x.png"></div>

        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Superwhite</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Сила кокоса</b><br/>Кокос скорее треснет, чем даст твоим зубам разрушиться. Он восстанавливает минеральный баланс, тонизирует и препятствует окислению в полости рта</p>
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
                с пастой Biomed Superwhite</h3>
        </div>

        <div class="also-list">
            <div class="also-product slide-to" data-to="product" data-product="biomed-gum-superwhite">
                <div class="img gum" data-img="upload/pr/gms/gum-superwhite-small.png"></div>
                <div class="also-description">
                    <h4>Ополаскиватель</h4>
                    <h3>Superwhite</h3>
                    <p>Обеспечивает усиленное расщепление белкового налета, укрепляет и восстанавливает зубную эмаль, обладает антибактериальным эффектом</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/158866617" target="_blank" class="price" style="background: #<?=$colorSuperwhite?>">
                    <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                    <span><?=$GLOBALS['ICON']['CART']?></span>
                </a>
            </div>
            <div class="also-product slide-to" data-to="product" data-product="biomed-silver">
                <div class="img brush" data-img="upload/pr/brsh/biomed-silver-pink.png"></div>
                <div class="also-description">
                    <h4>Щетка</h4>
                    <h3>Biomed Silver</h3>
                    <p>Щетина c антибактериальным
                        покрытием обеспечивает бережное удаление зубного налета и препятствует
                        размножению бактерий</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/146285712/" target="_blank" class="price" style="background: #<?=$colorWhiteComplex?>">
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