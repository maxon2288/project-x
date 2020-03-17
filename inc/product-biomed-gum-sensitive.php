<?php
$productColor = $colorSensitive;
?>
<article id="biomed-gum-sensitive" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-gum-sensitive">

                    <div class="grape"><span class="magnify" data-img="upload/kv/gum-sensitive/grape.png"></span></div>
                    <div class="splash"><span class="magnify" data-img="upload/kv/gum-sensitive/splash.png"></span></div>
                    <div class="zerno"><span class="magnify" data-img="upload/kv/gum-sensitive/zerno.png"></span></div>
                    <div class="crystal"><span class="magnify" data-img="upload/kv/gum-sensitive/crystal.png"></span></div>
                    <div class="base"><span class="magnify" data-img="upload/kv/gum-sensitive/base.png"></span></div>

                    <a href="https://www.ozon.ru/context/detail/id/158866619" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1 small">Ополаскиватель</div>
                <div class="line-2" data-color="<?=$productColor?>">SENSITIVE</div>
            </div>
            <h3>Снижает<br/>
                чувствительность<br/>
                зубов после<br/>
                первого применения</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Обладает реминерализирующим действием</b><br/>
                Косточки винограда борются с кариесом и свободными радикалами</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Останавливает кровоточивость десен и снимает воспаление</b><br/>
                Этому способствует экстракт коры дуба</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Укрепляет эмаль</b><br/>
                За счет натуральных компонентов</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Секрет здоровой эмали</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'grape', 'title' => 'Красный<br/>виноград', 'text' => 'Косточки винограда обладают антиоксидантными свойствами и борются со свободными радикалами и кариесом'),
            array('img' => 'plantain', 'title' => 'Подорожник<br/>и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'oak', 'title' => 'Экстракт<br/>коры дуба', 'text' => 'Снижает воспаление и кровоточивость десен'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта'),
            array('img' => 'ananas', 'title' => 'Бромелаин<br/>из экстракта ананаса', 'text' => 'Снимает воспаление, расщепляет и удаляет зубной налет'),
            array('img' => 'limon-2', 'title' => 'Эфирное масло<br/>кожуры лимона', 'text' => 'Борется с бактериями в полости рта'),
            array('img' => 'cink', 'title' => 'Глюконат<br/>цинка', 'text' => 'Останавливает размножение бактерий. После каждого применения проходит неприятных запах изо рта'),
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
        <div class="scrolling img sensitive-ball" data-img="upload/pr/pg/ball-2.png"></div>

        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Sensitive</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Сила винограда</b><br/>Косточки винограда обладают антиоксидантными свойствами и борются со свободными радикалами и кариесом, вызванным стрептококком</p>
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
                с ополаскивателем Biomed Sensitive</h3>
        </div>

        <div class="also-list cols-3">
            <div class="also-product slide-to" data-to="product" data-product="biomed-sensitive">
                <div class="img paste" data-img="upload/pr/pst/biomed-sensitive.png"></div>
                <div class="also-description">
                    <h3>Biomed Sensitive</h3>
                    <p>Бережно очищает и полирует зубы. У зубов снижается чувствительность и укрепляется эмаль</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/163333060" target="_blank" class="price" style="background: #<?=$colorSensitive?>">
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
            <div class="also-product slide-to" data-to="product" data-product="biomed-silver">
                <div class="img brush" data-img="upload/pr/brsh/biomed-silver-pink.png"></div>
                <div class="also-description">
                    <h4>Щетка</h4>
                    <h3>Biomed Silver</h3>
                    <p>Щетина c антибактериальным
                        покрытием обеспечивает
                        бережное удаление зубного
                        налета и препятствует
                        размножению бактерий
                    </p>
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