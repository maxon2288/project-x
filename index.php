<?
require_once("inc/icons.php");

define('SITE_TEMPLATE_PATH', '');
$arSite['NAME'] = 'Зубная паста Biomed';
?>
<!doctype html>
<html class="no-js" lang="ru">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89402894-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-89402894-1');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(41781059, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41781059" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Изобретателен от природы | <?=$arSite['NAME']?></title>
    <meta name="keywords" content="biomed, биомед, sensitive, superwhite, white complex, propoline, vitafresh, biocomplex" />
    <meta name="description" content="Линейка зубных паст Biomed является пионером на российском рынке гигиенических средств по уходу за полостью рта, сочетая в себе быстрое и качественное очищение на весь день и 99% натуральности ингредиентов." />

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" href="favicon.ico?v1" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/android-chrome-192x192.png" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="assets/smalltile.png" />
    <meta name="msapplication-square150x150logo" content="assets/mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="assets/widetile.png" />
    <meta name="msapplication-square310x310logo" content="assets/largetile.png" />

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>css/normalize.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>css/main.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>css/styles.min.css?1577098799<?//=time();?>">
</head>

<body id="index" class="loading">

    <!-- loading -->

    <div id="loading">
        <div class="spinner"><?=$GLOBALS['ICON']['SPINNER']?></div>
        <div class="logo"><?=$GLOBALS['ICON']['B_SYMBOL']?></div>
    </div>

    <!-- header -->

    <header id="header">
        <div class="wrap">
            <a href="#promo" data-to="promo" class="logo slide-to"><?=$GLOBALS['ICON']['LOGO']?></a>
            <nav id="nav">
                <a href="#products" data-to="products" class="slide-to">Все продукты</a>
                <a href="#toothpaste" data-to="toothpaste" class="slide-to">Пасты</a>
                <a href="#contents" data-to="contents" class="slide-to">Состав</a>
                <a href="#research" data-to="research" class="slide-to">Сертификаты</a>
                <a href="#s30sec" data-to="s30sec" class="slide-to">30 секунд</a>
            </nav>
            <div class="menu"><div class="line"></div></div>
            <div class="social">
                <a href="https://vk.com/biomed_russia" target="_blank"><?=$GLOBALS['ICON']['SOCIAL_VK']?></a>
                <a href="https://www.instagram.com/biomed_russia" target="_blank"><?=$GLOBALS['ICON']['SOCIAL_IG']?></a>
            </div>
        </div>
    </header>

    <div class="header-gradient"></div>

    <?php
    //Colors
    $colorVitafresh = 'FFA134';
    $colorWhiteComplex = '333333';
    $colorSensitive = 'D76289';
    $colorSuperwhite = 'C0673C';
    $colorBiocomplex = '6C9E3F';
    $colorPropoline = 'ffce08';
    $colorCalcimax = '87AFC5';

    // Sections -->
    include('inc/section-main.php');

    // Products -->
    include('inc/section-products.php');

    // Product -->
    include('inc/section-product.php');
    ?>

    <!-- droid -->

    <div id="droid">
        <div class="droid-offset">
            <div class="droid"></div>
            <div class="shadow"></div>
        </div>
    </div>

    <!-- menu -->

    <div id="menu">
        <ul>
            <li><a href="#products" data-to="products" class="slide-to">Все продукты</a></li>
            <li><a href="#toothpaste" data-to="toothpaste" class="slide-to">Пасты</a></li>
            <li><a href="#contents" data-to="contents" class="slide-to">Состав</a></li>
            <li><a href="#research" data-to="research" class="slide-to">Сертификаты</a></li>
            <li><a href="#s30sec" data-to="s30sec" class="slide-to">30 секунд</a></li>
        </ul>

        <p>Вы всегда можете купить<br/>
            продукцию Biomed<br/>
            в любой аптеке<br/>
            или супермаркете.<br/>
            В наших маркетплейсах: OZON, беру!</p>
    </div>

    <!-- additional scripts -->

    <script src="<?=SITE_TEMPLATE_PATH;?>js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?=SITE_TEMPLATE_PATH;?>js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/plugins.min.js"></script>

    <script src="<?=SITE_TEMPLATE_PATH;?>js/animatescroll.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/anime.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/fittext.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/circle-progress.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/counter.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/mousewheel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/lazyload.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>js/touchSwipe.min.js"></script>

    <script src="<?=SITE_TEMPLATE_PATH;?>js/scripts.min.js?1577098799<?//=time();?>"></script>

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>js/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>css/flickity.min.css">

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>js/range.min.js"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>css/range.min.css">
</body>

</html>
