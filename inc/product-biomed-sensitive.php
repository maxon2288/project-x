<?php
$productColor = $colorSensitive;
?>
<article id="biomed-sensitive" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-sensitive">
                    <a href="https://www.ozon.ru/context/detail/id/163333060" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1">Biomed</div>
                <div class="line-2" data-color="<?=$productColor?>">Sensitive</div>
            </div>
            <h3>Сила винограда<br/>в борьбе с кариесом</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Бережно очищает и полирует зубы</b><br/>
                У зубов снижается чувствительность и укрепляется эмаль.</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Защищает от кариеса</b><br/>
                Косточки винограда борются с кариесом и свободными радикалами</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Укрепляет десны</b><br/>
                Этому способствуют тимьян, экстракт коры дуба и масло ладана</p>
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
            array('img' => 'dicalcium', 'title' => 'Дикальций<br/>фосфат<br/>дигидрат', 'text' => 'Реминерализует зубы: сохраняет эмаль и мягко очищает зубы от налета'),
            array('img' => 'mentol', 'title' => 'Ментол', 'text' => 'Освежает и снижает зубную боль'),
            array('img' => 'calcium', 'title' => 'Кальций<br/>и L-аргинин', 'text' => 'Реминерализует эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'laktat', 'title' => 'Ментил<br/>Лактат', 'text' => 'Обеспечивает свежее дыхание на целый день'),
            array('img' => 'cink', 'title' => 'Цитрат<br/>цинка', 'text' => 'Обладает антибактериальными и противовоспалительными свойствами. После каждого применения проходит неприятных запах изо рта'),
            array('img' => 'thyme', 'title' => 'Тимьян', 'text' => 'Заживляет раны и порезы десен. Препятствует размножению бактерий и воспалению в полости рта'),
            array('img' => 'ananas', 'title' => 'Бромелаин<br/>из экстракта ананаса', 'text' => 'Снимает воспаление, расщепляет и удаляет зубной налет'),
            array('img' => 'plantain', 'title' => 'Подорожник<br/>и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'sage', 'title' => 'Перечная<br/>мята', 'text' => 'Защищает десны от бактерий и воспаления'),
            array('img' => 'oak', 'title' => 'Экстракт<br/>коры дуба', 'text' => 'Снижает воспаление и кровоточивость десен'),
            array('img' => 'ladan', 'title' => 'Эфирное масло ладана', 'text' => 'Обладает антистрессовым действием: укрепляют десны и борется с воспалением'),
            array('img' => 'limon-2', 'title' => 'Эфирное масло кожуры лимона', 'text' => 'Борется с бактериями в полости рта'),
            array('img' => 'nim', 'title' => 'Масло Нима', 'text' => 'Борется с микробами в полости рта, обладает антигрибковым и противовирусным свойствами'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта')
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
                с пастой Biomed Sensitive</h3>
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