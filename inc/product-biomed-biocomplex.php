<?php
$productColor = $colorBiocomplex;
?>
<article id="biomed-biocomplex" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-biocomplex">
                    <a href="https://www.ozon.ru/context/detail/id/163333565" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1">Biomed</div>
                <div class="line-2" data-color="<?=$productColor?>">Biocomplex</div>
            </div>
            <h3>Для свежего<br/>настроения</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Заряд свежести на целый день</b><br/>
                Природные антисептики борются
                с воспалением и неприятным запахом</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Здоровые десны</b><br/>
                Натуральные эфирные масла шалфея, эвкалипта, розмарина
                и кедра обеспечивают антиоксидантное действие
                и радуют восхитительным природным ароматом</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Крепкая эмаль</b><br/>
                Гидроксиапатит кальция
                и L-Аргинин укрепляют эмаль и снижают чувствительность зубов</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head-2">
            <h3 style="color: #<?=$productColor?>">Biocomplex соединил в себе<br/>
                лучшие растения для долгого<br/>
                и свежего дыхания</h3>
            <h4>Состав</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'rosehip', 'title' => 'Шиповник', 'text' => 'Борется с окислением и воспалением в полости рта'),
            array('img' => 'len', 'title' => 'Лен', 'text' => 'Заживляет ткани десен'),
            array('img' => 'shalfey', 'title' => 'Шалфей', 'text' => 'Мощный антиоксидант. Эффективен, если десны кровоточат'),
            array('img' => 'plantain', 'title' => 'Подорожник и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'sage', 'title' => 'Перечная мята', 'text' => 'Защищает десны от бактерий и воспаления'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта'),
            array('img' => 'chamomile', 'title' => 'Ромашка', 'text' => 'Помогает заживлять раны, сохраняет дыхание свежим'),
            array('img' => 'rosmarin', 'title' => 'Розмарин', 'text' => 'Бодрит и помогает сохранять концентрацию внимания'),
            array('img' => 'evkalipt', 'title' => 'Эвкалипт', 'text' => 'Борется с микробами и воспалением в полости рта'),
            array('img' => 'osina', 'title' => 'Экстракт коры осины', 'text' => 'Восстанавливает и укрепляет десны, останавливает воспаление и кровоточивость'),
            array('img' => 'calcium', 'title' => 'Кальций и L-аргинин', 'text' => 'Реминерализует эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'mentol', 'title' => 'Ментол', 'text' => 'Освежает и снижает зубную боль'),
            array('img' => 'laktat', 'title' => 'Ментил Лактат', 'text' => 'Обеспечивает свежее дыхание на целый день'),
            array('img' => 'cink', 'title' => 'Цитрат цинка', 'text' => 'Обладает антибактериальными и противовоспалительными свойствами. После каждого применения проходит неприятных запах изо рта'),
            array('img' => 'digidrat', 'title' => 'Дикальций фосфат дигидрат', 'text' => 'Реминерализует зубы: сохраняет эмаль и мягко очищает зубы от налета'),
            array('img' => 'anetol', 'title' => 'Транс-Анетол', 'text' => 'Снижает зубную боль'),
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
        <div class="scrolling img biocomplex-crystal" data-img="upload/pr/pg/crystal.png"></div>

        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Biocomplex</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Технологичное сочетание растений</b><br/>Паста не только борется с окислением и бактериями в полости рта, но и помогает укреплять десны, освежить дыхание и тонизировать весь организм</p>
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
                с пастой Biomed Biocomplex</h3>
        </div>

        <div class="also-list">
            <div class="also-product slide-to" data-to="product" data-product="biomed-gum-well-gum">
                <div class="img gum" data-img="upload/pr/gms/gum-well-gum-small.png"></div>
                <div class="also-description">
                    <h4>Ополаскиватель</h4>
                    <h3>Well Gum</h3>
                    <p>Обладают противовоспалительным, антисептическим и антиоксидантным действием. Расщепляет белковый налет, укрепляет и восстанавливает эмаль</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/158866616" target="_blank" class="price" style="background: #<?=$colorBiocomplex?>">
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