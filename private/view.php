<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Keywords" content="">
    
    <meta name='wmail-verification' content='9ba589bfb0dd6a1f9bc1e344e45cf86a' /> <!-- индексация на mail.ru -->

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= config('title') ?>">
    <meta property="og:title" content="Продвижение товаров и услуг в интернете">
    <meta property="og:description" content="Студия интернет-рекламы «Click» успешно занимается управлением рекламными проектами любой сложности.">
    <meta property="og:url" content="http://<?= DOMAIN ?>/index.php">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="http://<?= DOMAIN ?>/imgs/ogp.jpg">
    <meta property="og:image:width" content="1074">
    <meta property="og:image:height" content="480">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Продвижение товаров и услуг в интернете">
    <meta name="twitter:description" content="Студия интернет-рекламы «Click» успешно занимается управлением рекламными проектами любой сложности.">
    <meta name="twitter:image:src" content="http://<?= DOMAIN ?>/imgs/ogp.jpg">
    <meta name="twitter:url" content="http://<?= DOMAIN ?>/index.php">
    <meta name="twitter:domain" content="<?= DOMAIN ?>">

    <link rel="shortcut icon" href="/imgs/klik_itog2.png">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <!--[if lt IE 9]>
    <script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script>
    <![endif]-->

    <title><?= config('title') ?></title>
</head>

<body>

<?php
require_once '_page.php';
require_once '_widgets.php';
?>

<footer class="com">
    <div class="">
        <div id="cl-logo"></div>
        <div id="f-tx">
            <p>
                Разработано компанией
                <br>
                <a href="http://pelican.bz/">&#171;PELICAN&#187;</a>
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
</footer>

<script type="text/javascript" src="/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="/swiper/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        slidesPerView: 3,
        spaceBetween: 50,
        breakpoints: {
            1300: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20
            }
        }
    });
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45587322 = new Ya.Metrika({
                    id:45587322,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45587322" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>