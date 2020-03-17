<?php
$productColor = $colorPropoline;
?>
<article id="biomed-propoline" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-propoline">
                    <a href="https://www.ozon.ru/context/detail/id/135004022/" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1">Biomed</div>
                <div class="line-2" data-color="<?=$productColor?>">Propoline</div>
            </div>
            <h3>Поддерживает<br/>здоровье<br/>десен</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Борется с микробами</b><br/>
                Обладает антимикробным действием, направленным на борьбу со стрептококком — кариесогенной бактерией</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Поддерживает тонус и здоровье десен</b><br/>
                Прополис заживляет десны, борется с токсинами и воспалением</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Восстанавливает и укрепляет зубную эмаль</b><br/>
                Витамины C и E снижают риск развития кариеса и прочих заболеваний ротовой полости</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Ингредиенты,<br/>
                поддерживающие<br/>
                здоровье десен
            </h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'propolis', 'title' => 'Прополис', 'text' => 'Обладает мощным антибактериальным действием, используется при лечении слизистой оболочки полости рта. Стимулирует организм в борьбе с инфекциями: заживляет десны, борется с токсинами и воспалением'),
            array('img' => 'digidrat', 'title' => 'Дикальций фосфат дигидрат', 'text' => 'Реминализирует зубы: сохраняет эмаль и мягко очищает зубы от налета'),
            array('img' => 'mentol', 'title' => 'Ментол', 'text' => 'Освежает и снижает зубную боль'),
            array('img' => 'calcium', 'title' => 'Кальций и L-аргинин', 'text' => 'Реминализируют эмаль, защищают от кариеса и кислотной эрозии'),
            array('img' => 'laktat', 'title' => 'Ментил Лактат', 'text' => 'Обеспечивает свежее дыхание на целый день'),
            array('img' => 'cink', 'title' => 'Цитрат цинка', 'text' => 'Обладает антибактериальными и противовоспалительными свойствами. После каждого применения проходит неприятных запах изо рта'),
            array('img' => 'thyme', 'title' => 'Тимьян', 'text' => 'Заживляет раны и порезы десен. Препятствует размножению бактерий и воспалению в полости рта'),
            array('img' => 'manuka', 'title' => 'Эфирное масло мануки', 'text' => 'Оказывает противомикробное и заживляющее действие. Формирует сладкий медовый аромат с пряной нотой прополиса'),
            array('img' => 'sage', 'title' => 'Перечная мята', 'text' => 'Защищает десны от бактерий и воспаления'),
            array('img' => 'limon-2', 'title' => 'Эфирное масло кожуры лимона', 'text' => 'Борется с бактериями в полости рта. Витамин C, E. Активные антиоксиданты. Стимулируют иммунитет, снижают риск развития кариеса и прочих заболеваний ротовой полости'),
            array('img' => 'plantain', 'title' => 'Подорожник и листья березы', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта'),
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
        <div class="scrolling img propoline-ball" data-img="upload/pr/pg/ball-2.png"></div>

        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Propoline</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">Сила прополиса</b><br/>Помогает победить кариес, успокаивает зубы и заживляет десны</p>
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
                с пастой Biomed Propoline</h3>
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