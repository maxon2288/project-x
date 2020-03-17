<?php
$productColor = $colorSuperwhite;
?>
<article id="biomed-gum-superwhite" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-gum-superwhite">
                    <div class="gum"><span class="magnify" data-img="upload/pr/gms/gum-superwhite.png"></span></div>
                    <a href="https://www.ozon.ru/context/detail/id/158866617" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1 small">Ополаскиватель</div>
                <div class="line-2" data-color="<?=$productColor?>">SUPERWHITE</div>
            </div>
            <h3>Бережное<br/>отбеливание</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Бережно отбеливает</b><br/>
                За счет натуральных компонентов</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Усиленно расщепляет налет</b><br/>
                Папаин эффективно борется с любым белковым налетом на зубах</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Защищает от бактерий</b><br/>
                Ферментированный экстракт кокоса обладает антибактериальным эффектом</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Секрет бережного<br/>отбеливания</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'coconut', 'title' => 'Ферментированный экстракт кокоса', 'text' => 'Обладает антибактериальным эффектом'),
            array('img' => 'plantain', 'title' => 'Подорожник и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'ksilit', 'title' => 'Ксилит', 'text' => 'Подслащивает ополаскиватель, но не провоцирует появление кариеса'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Активно борется с бактериями и воспалением полости рта'),
            array('img' => 'mentol', 'title' => 'Ментол', 'text' => 'Освежает и снижает зубную боль'),
            array('img' => 'papaya', 'title' => 'Папаин', 'text' => 'Эффективно борется с любым белковым налетом на зубах'),
            array('img' => 'arginin', 'title' => 'Аргинин', 'text' => 'Аргинин снижает гиперчувствительность зубов — можно спокойно есть горячее, холодное и сладкое'),
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
                <p><b style="color: #<?=$productColor?>">Здоровые зубы</b><br/>Ферментированный экстракт кокоса обладает антибактериальным эффектом, экстракты подорожника и листьев березы оказывают противокариесный эффект</p>
            </li>
            <?php
            include('section-product--why-items-2.php');
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
                с ополаскивателем Biomed Superwhite</h3>
        </div>

        <div class="also-list cols-3">
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
            <div class="also-product slide-to" data-to="product" data-product="biomed-white-complex">
                <div class="img paste" data-img="upload/pr/pst/biomed-white-complex.png"></div>
                <div class="also-description">
                    <h3>Biomed White Complex</h3>
                    <p>Отбеливает зубы на 2 оттенка. Эффект достигается через месяц за счет комбинации бамбукового, древесного и активированного угля</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/143817289" target="_blank" class="price" style="background: #<?=$colorWhiteComplex?>">
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