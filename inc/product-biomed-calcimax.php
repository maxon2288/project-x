<?php
$productColor = $colorCalcimax;
?>
<article id="biomed-calcimax" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-calcimax">
                    <a href="https://www.ozon.ru/context/detail/id/135004021/" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1">Biomed</div>
                <div class="line-2" data-color="<?=$productColor?>">Calcimax</div>
            </div>
            <h3>Сила моря<br/>для крепкой эмали</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Крепкие десны</b><br/>
                Глубоководные водоросли и розовая глина стимулирует обменные процессы и помогает тканям срастаться</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Оказывает мощный антикариесный эффект</b><br/>
                За счет гидроксиапатита, экстракта подорожника и листьев березы</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Придает сил</b><br/>
                Эфирные масла тимьяна освежают дыхание и заряжают бодростью на целый день</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head-2">
            <h3 style="color: #<?=$productColor?>">В чем<br/>сила моря</h3>
            <h4>Состав</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'glina', 'title' => 'Каолин (розовая глина)', 'text' => 'Полезна для десен: стимулирует обмен веществ и помогает тканям срастаться'),
            array('img' => 'digidrat', 'title' => 'Дикальций фосфат дигидрат', 'text' => 'Реминализирует зубы: сохраняет эмаль и мягко очищает зубы от налета'),
            array('img' => 'calcium', 'title' => 'Кальций и L-аргинин', 'text' => 'Реминализируют эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'mentol', 'title' => 'Ментол', 'text' => 'Освежает и снижает зубную боль'),
            array('img' => 'laktat', 'title' => 'Ментил Лактат', 'text' => 'Обеспечивает свежее дыхание на целый день'),
            array('img' => 'cink', 'title' => 'Цитрат цинка', 'text' => 'Обладает антибактериальными и противовоспалительными свойствами. После каждого применения проходит неприятных запах изо рта'),
            array('img' => 'thyme', 'title' => 'Тимьян', 'text' => 'Заживляет раны и порезы десен. Препятствует размножению бактерий и воспалению в полости рта'),
            array('img' => 'spirulina', 'title' => 'Спирулина', 'text' => 'Проявляет антибактериальные свойства и защищает организм от воспалений'),
            array('img' => 'sage', 'title' => 'Перечная мята', 'text' => 'Защищает десны от бактерий и воспаления'),
            array('img' => 'plantain', 'title' => 'Подорожник и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта'),
            array('img' => 'laminaria', 'title' => 'Ламинария', 'text' => 'Снабжает организм недостающими микроэлементами'),
            array('img' => 'fucus', 'title' => 'Фукус', 'text' => 'Защищает от бактерий'),
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
        <div class="scrolling img calcimax-ball" data-img="upload/pr/pg/ball-2.png"></div>

        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Calcimax</span></h3>
        </div>
        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Сила моря</b><br/>Морские ингредиенты не только укрепляют эмаль и лечат десны, но придают заряд бодрости на целый день</p>
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
                с пастой Biomed Calcimax</h3>
        </div>

        <div class="also-list">
            <div class="also-product slide-to" data-to="product" data-product="biomed-gum-sensitive">
                <div class="img gum" data-img="upload/pr/gms/gum-sensitive-small.png"></div>
                <div class="also-description">
                    <h4>Ополаскиватель</h4>
                    <h3>Sensitive</h3>
                    <p>Обладает реминерализирующим действием, снижает чувствительность зубов</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/158866619" target="_blank" class="price" style="background: #<?=$colorSensitive?>">
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
                <a href="https://www.ozon.ru/context/detail/id/146285711/" target="_blank class="price" style="background: #<?=$colorWhiteComplex?>">
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