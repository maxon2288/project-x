<?php
$productColor = $colorBiocomplex;
?>
<article id="biomed-gum-well-gum" class="product-page">

    <div class="block promo">
        <div class="main-carousel product-carousel">
            <div class="carousel-cell">
                <div class="key-visual" data-product="biomed-gum-well-gum">
                    <div class="gum"><span class="magnify" data-img="upload/pr/gms/gum-well-gum.png"></span></div>
                    <a href="https://www.ozon.ru/context/detail/id/158866616" target="_blank" class="price" style="background: #<?=$productColor?>">
                        <b>99</b> <?=$GLOBALS['ICON']['RUB']?>
                        <span><?=$GLOBALS['ICON']['CART']?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="description" style="color:#<?=$productColor?>;">
            <div class="name">
                <div class="line-1 small">Ополаскиватель</div>
                <div class="line-2" data-color="<?=$productColor?>">Well Gum</div>
            </div>
            <h3>Сила природы<br/>
                для здоровых десен</h3>
        </div>
    </div>

    <div class="fade-block features cols-3">
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">1</b>
            </div>
            <p><b>Укрепляет и восстанавливает зубную эмаль</b><br/>
                Кедр усиливает кровообмен, оптимизирует усвоение кислорода, помогает тканевому дыханию
            </p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">2</b>
            </div>
            <p><b>Устраняет налет</b><br/>
                Бромелаин из экстракта ананаса расщепляет и удаляет зубной налет</p>
        </div>
        <div class="feature">
            <div class="number">
                <b style="color: #<?=$productColor?>">3</b>
            </div>
            <p><b>Снимает воспаление десен</b><br/>
                Эфирные масла эвкалипта, аниса, кедра, гвоздики и розмарина защищают от инфекций и кровоточивости</p>
        </div>
    </div>

    <div class="fade-block ingredients">
        <div class="head">
            <h3>Состав</h3>
            <h4 style="color: #<?=$productColor?>">Сила природы<br/>
                в Well Gum</h4>
        </div>

        <?php
        $ingredients = array(
            array('img' => 'plantain', 'title' => 'Подорожник, листья березы и шалфей', 'text' => 'Успокаивают десны, защищают от инфекций и кровоточивости'),
            array('img' => 'rosmarin', 'title' => 'Розмарин', 'text' => 'Бодрит и помогает сохранять концентрацию внимания'),
            array('img' => 'stevia', 'title' => 'Стевия', 'text' => 'Природный подсластитель. Борется с бактериями и воспалением полости рта'),
            array('img' => 'evkalipt', 'title' => 'Эвквалипт', 'text' => 'Борется с воспалением полости рта'),
            array('img' => 'anis', 'title' => 'Анис', 'text' => 'Снижает зубную боль'),
            array('img' => 'gvozd', 'title' => 'Гвоздика', 'text' => 'Обладает противогерпесными свойствами'),
            array('img' => 'cedar', 'title' => 'Кедр', 'text' => 'Усиливает кровообмен, оптимизирует усвоение кислорода, помогает тканевому дыханию. Вызывает чувство душевного комфорта'),
            array('img' => 'arginin', 'title' => 'Аргинин', 'text' => 'Снижает гиперчувствительность зубов: можно спокойно есть горячее, холодное и сладкое'),
            array('img' => 'ananas', 'title' => 'Бромелаин из экстракта ананаса'),
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
        <div class="head">
            <h3>Почему<br/>Biomed <span style="color: #<?=$productColor?>">Well Gum</span></h3>
        </div>

        <ul class="why-list">
            <li class="why-item">
                <p><b style="color: #<?=$productColor?>">5 эфирных масел.</b><br/>Эвкалипт, анис, кедр, гвоздика и розмарин снимают воспаление десен, защищают от инфекций и кровоточивости, успокаивают и тонизируют полость рта</p>
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
                с ополаскивателем Well Gum</h3>
        </div>

        <div class="also-list cols-3">
            <div class="also-product slide-to" data-to="product" data-product="biomed-biocomplex">
                <div class="img paste" data-img="upload/pr/pst/biomed-biocomplex.png"></div>
                <div class="also-description">
                    <h3>Biomed Biocomplex</h3>
                    <p>Натуральные эфирные масла шалфея, эвкалипта, розмарина и кедра обеспечивают антиоксидантное действие и радуют восхитительным природным ароматом. Отлично дополняют ополаскиватель</p>
                </div>
                <a href="https://www.ozon.ru/context/detail/id/163333565" target="_blank" class="price" style="background: #<?=$colorBiocomplex?>">
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