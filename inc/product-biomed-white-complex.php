<?php
$productColor = $colorWhiteComplex;
?>
<article id="biomed-white-complex" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-white-complex">
                    <a href="https://www.ozon.ru/context/detail/id/143817289" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1">Biomed</div>
                <div class="line-2" data-color="<?=$productColor?>">White Complex</div>
            </div>
            <h3>Темная паста<br/>
                для белых зубов
            </h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Отбеливает зубы на 2 оттенка</b><br/>
                Эффект достигается через месяц за счет комбинации бамбукового, древесного и активированного угля</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Сохраняет эмаль</b><br/>
                Хотя паста сильно отбеливает зубы, она не раздражает эмаль и защищает десны от кровотечения</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Освежает</b><br/>
                Зубы остаются гладкими, а дыхание — свежим</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Секрет белых зубов</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'coal', 'title' => 'Бамбуковый, древесный и активированный уголь', 'text' => 'Удаляют зубной налет и отбеливают зубную эмаль на 2 оттенка. Борются с алкалоидами и токсинами'),
            array('img' => 'ananas', 'title' => 'Бромелаин из экстракта ананаса', 'text' => 'Снимает воспаление. Расщепляет и удаляет зубной налет'),
            array('img' => 'plantain', 'title' => 'Подорожник и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'calcium', 'title' => 'Кальций и L-аргинин', 'text' => 'Реминерализует эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'cink', 'title' => 'Цитрат цинка', 'text' => 'Обладает антибактериальными и противовоспалительными свойствами. После каждого применения проходит неприятных запах изо рта'),
            array('img' => 'digidrat', 'title' => 'Дикальций фосфат дигидрат', 'text' => 'Реминерализует зубы: сохраняет эмаль и мягко очищает зубы от налета'),
            array('img' => 'laktat', 'title' => 'Ментил Лактат', 'text' => 'Обеспечивает свежее дыхание на целый день'),
            array('img' => 'sage', 'title' => 'Перечная мята', 'text' => 'Защищает десны от бактерий и воспаления'),
            array('img' => 'kamfora', 'title' => 'Камфора', 'text' => 'Снимает воспаление, препятствует окислению и размножению бактерий'),
            array('img' => 'cedar', 'title' => 'Кедр', 'text' => 'Успокаивает и тонизирует организм: усиливает кровообмен, оптимизирует усвоение кислорода, помогает тканевому дыханию. Вызывает чувство душевного комфорта и уверенности на целый день'),
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
        <div class="scrolling img white-complex-charcoal" data-img="upload/pr/pg/charcoal.png"></div>
        <div class="scrolling img white-complex-ball" data-img="upload/pr/pg/ball.png"></div>

        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">White Complex</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Тройная система угля растительного происхождения</b>
                    Борются с алкалоидами и токсинами. Не раздражает эмаль и защищает десны от кровотечения</p>
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
                больше угольной защиты</h3>
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