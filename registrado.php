<?php
require_once('././src/components/cacheSettings.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('././src/components/head-home.php'); ?>
    <?php include_once('././src/components/head.php'); ?>
    <script type="module">
        import {
            isUserLogged,
            getUrlWithParams
        } from './src/<?= VERSION ?>/js/common/index.js';

        if (!isUserLogged()) {
            window.location.href = getUrlWithParams('/index');
        }
        import {
            registerEventsCardsCheck,
        } from './src/<?= VERSION ?>/js/user.js';
        registerEventsCardsCheck();
    </script>
    <script src='./src/<?= VERSION ?>/js/vendors/socket.io.min.js?version=<?= VERSION ?>'></script>
    <script>
        const socket = io("wss://<?= URL_REFRESH ?>", {
            path: "/<?= PATH_REFRESH ?>/socket.io"
        });
        socket.on("state", (args) => {
            location.reload();
        });
    </script>
</head>

<body class="emms__home emms__home-logueado">
    <?php include_once('././src/components/gtm.php'); ?>

    <?php if ($ecommerceStates['isPre']) : ?>
        <!-- Hellobar -->
        <div class="emms__hellobar">
            <div class="emms__hellobar__container emms__fade-in">
                <p><strong>¡Vuelve el EMMS E-commerce!</strong> 18 y 19 de abril. Apúntate y descubre todas las novedades.</p>
            </div>
        </div>
    <?php endif ?>

    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo">
                <a href="/"><img src="src/img/logos/logo-emms.png" alt="Emms 2023"></a>
            </div>
            <?php if ($digitalTrendsStates['isLive']) : ?>
                <div class="emms__header__live">
                    <p>¡ESTAMOS EN VIVO EN EMMS DIGITAL TRENDS!</p>
                </div>
            <?php endif ?>

            <a class="emms__header__nav--mb" id="btn-burger"></a>
            <nav class="emms__header__nav emms__header__nav--hidden" id="nav-mb">
                <ul class="emms__header__nav__menu">
                    <li><a href="#" class="active">home</a></li>
                    <li><a href="./ecommerce-registrado">e-commerce</a></li>
                    <li><a href="./sponsors-registrado">biblioteca de recursos</a></li>
                    <li class="emms__header__nav__menu__dropdown"><a href="./ediciones-anteriores-registrado">Qué es el EMMS</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="./ediciones-anteriores-registrado#sobre-emms">Sobre el EMMS</a></li>
                            <li><a href="./ediciones-anteriores-registrado#ediciones-anteriores">Revive ediciones anteriores</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Share -->
    <div class="emms__share">
        <a id="btn-share" class="emms__share__open-list"><img src="src/img/icons/icon-share.svg" alt="Share"></a>
        <ul id="list-share" class="emms__share__list">
            <li>
                <a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgoemms.com', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Facebook-w.svg" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https%3A%2F%2Fgoemms.com&text=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Twitter-w.svg" alt="Twitter">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com&title=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!', 'Linkedin', 'toolbar=0, status=0, width=550, height=550');">
                    <img src="src/img/LinkedIn-w.svg" alt="LinkedIn">
                </a>
            </li>
        </ul>
    </div>

    <main>

        <!-- Hero -->
        <section class="emms__home__hero">
            <?php if ($ecommerceStates['isPre']) : ?>
                <div class="emms__home__hero__title emms__fade-top">
                    <h1><em>TODAS LAS TENDENCIAS DE MARKETING DIGITAL EN UN SOLO LUGAR</em> EMMS 2024, ¡está llegando!</h1>
                    <h2>ONLINE Y GRATUITO</h2>
                    <p>Revoluciona tu forma de hacer negocios y potencia tus resultados con el mayor evento de Latam y España. Disfruta de <strong>2 ediciones exclusivas</strong> para capacitarte e inspirarte con los líderes de tu industria.</p>
                    <div id="EMMS2024-ediciones"></div>
                </div>
            <?php endif ?>
            <?php if ($ecommerceStates['isDuring']) : ?>
                <div class="emms__home__hero__title emms__fade-top">
                    <h1><em>LLEGÓ EL EVENTO DE MARKETING DIGITAL MÁS ESPERADO</em> Vuelve el EMMS, ¡recargado!</h1>
                    <h2>ONLINE Y GRATUITO</h2>
                    <p>Tras <strong>15 años</strong> como el evento líder en Latam y España, <strong>el EMMS evolucionó</strong>. Accede ahora a la <strong>última edición del año</strong> con 4 jornadas a puro aprendizaje, <strong>¡ya comenzó!</strong></p>
                    <div id="EMMS2024-ediciones"></div>
                </div>
            <?php endif ?>
            <?php if ($ecommerceStates['isPost']) : ?>
                <div class="emms__home__hero__title emms__fade-top">
                    <h1><em>TODAS LAS TENDENCIAS EN MARKETING DIGITAL, EN UN SOLO LUGAR</em> Revive el EMMS 2023</h1>
                    <h2>ONLINE Y GRATUITO</h2>
                    <p><span>Tras <strong>15 años</strong> como el evento líder en Marketing Digital de Latam y España, <strong>el EMMS evolucionó</strong>. </span>Revive las <strong>ediciones E-commerce y Digital Trends</strong> para aprender e inspirarte con referentes en la industria.</p>
                    <div id="EMMS2024-ediciones"></div>
                </div>
            <?php endif ?>

            <!-- Event cards -->
            <div class="emms__eventCards">
                <div class="emms__container--lg">
                    <ul class="emms__eventCards__list emms__eventCards__list--dk emms__fade-in">
                        <li class="emms__eventCards__list__item ecommerceCard">
                            <div class="not--loged">
                                <div class="emms__eventCards__list__item__picture">
                                    <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                    <?php if ($ecommerceStates['isPost']) : ?>
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                    <?php endif ?>
                                </div>
                                <?php if ($ecommerceStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce <span>EN VIVO</span></h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="ecommerce" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="ecommerce" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria te contarán qué <strong>tendencias y estrategias emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="ecommerce" class="emms__cta">REGÍSTRATE GRATIS</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="loged">
                                <?php if ($ecommerceStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce <span>EN VIVO</span></h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria te contarán qué <strong>tendencias y estrategias emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">ACCEDE</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </li>
                        <li class="emms__eventCards__list__item digitalTCard">
                            <div class="not--loged">
                                <?php if ($digitalTrendsStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends <span>EN VIVO</span></h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner hide">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a class="emms__cta inactive">PRÓXIMAMENTE</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="loged">
                                <?php if ($digitalTrendsStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends <span>EN VIVO</span></h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends-registrado" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends-registrado" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends-registrado" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner hide">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a class="emms__cta inactive">PRÓXIMAMENTE</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </li>
                    </ul>

                    <ul class="emms__eventCards__list emms__eventCards__list--mb emms__fade-in main-carousel" data-flickity='{ "initialIndex": 1 }'>
                        <li class="emms__eventCards__list__item ecommerceCard">
                            <div class="not--loged">
                                <div class="emms__eventCards__list__item__picture">
                                    <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                    <?php if ($ecommerceStates['isPost']) : ?>
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                    <?php endif ?>
                                </div>
                                <?php if ($ecommerceStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce <span>EN VIVO</span></h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="ecommerce" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="ecommerce" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria te contarán qué <strong>tendencias y estrategias emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="ecommerce" class="emms__cta">REGÍSTRATE GRATIS</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="loged">
                                <?php if ($ecommerceStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce <span>EN VIVO</span></h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($ecommerceStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-ecommerce-24.png" alt="Image Ecommerce">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p>18 Y 19 DE ABRIL</p>
                                        </div>
                                        <h3>EMMS E-commerce</h3>
                                        <p>Referentes internacionales de la industria te contarán qué <strong>tendencias y estrategias emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/ecommerce-registrado" class="emms__cta">ACCEDE</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </li>
                        <li class="emms__eventCards__list__item digitalTCard">
                            <div class="not--loged">
                                <?php if ($digitalTrendsStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends <span>EN VIVO</span></h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner hide">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a class="emms__cta inactive">PRÓXIMAMENTE</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="loged">
                                <?php if ($digitalTrendsStates['isLive']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends <span>EN VIVO</span></h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends-registrado" class="emms__cta">ACCEDE AL VIVO</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends-registrado" class="emms__cta">SÚMATE AHORA</a>
                                        </div>
                                    </div>
                                <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p class="top hide">EVENTO FINALIZADO</p>
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a href="/digital-trends-registrado" class="emms__cta">REVIVE EL EVENTO</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="emms__eventCards__list__item__picture">
                                        <img src="src/img/card-image-digitaltrends-24.png" alt="Image Digital Trends">
                                        <p>YA TE HAS REGISTRADO</p>
                                    </div>
                                    <div class="emms__eventCards__list__item__text">
                                        <div class="emms__eventCards__list__item__text--corner hide">
                                            <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                        </div>
                                        <h3>EMMS Digital Trends</h3>
                                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores-registrado">reviviendo la edición 2023</a>.</strong></p>
                                        <p class="emms__eventCards__list__item__text--feature"><img src="src/img/icons/icon-ticket-fill.svg" alt="Icon">Online y gratuito</p>
                                        <div class="emms__eventCards__list__item__text--bottom">
                                            <a class="emms__cta inactive">PRÓXIMAMENTE</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Central Video -->
        <section class="emms__centralvideo">
            <div class="emms__background-a"></div>
            <div class="emms__container--md">
                <div class="emms__centralvideo__title emms__fade-in">
                    <?php if ($ecommerceStates['isPre']) : ?>
                        <h2>Súmate al EMMS E-commerce y aprende con los mayores especialistas en venta electrónica</h2>
                    <p>Descubre en este video todo lo que pasó en la última edición y por qué miles de profesionales y referentes en la industria eligen este evento para capacitarse.</p>
                    <?php endif ?>
                    <?php if ($ecommerceStates['isDuring']) : ?>
                        <h2>¡Llega un EMMS renovado! Ahora, disfruta de dos ediciones imperdibles</h2>
                        <p>Descubre en este video con qué te sorprenderá este año el EMMS, el evento más elegido por profesionales y expertos del Marketing Digital.</p>
                    <?php endif ?>
                    <?php if ($ecommerceStates['isPost']) : ?>
                        <h2>¡El EMMS se renovó! Ahora, disfruta de dos ediciones imperdibles</h2>
                        <p>Descubre en este video todo lo que el EMMS trajo en este 2023 junto a los máximos referentes en Marketing Digital y las marcas más reconocidas de la industria.</p>
                    <?php endif ?>
                </div>
                <div class="emms__centralvideo__video emms__fade-in">
                    <span></span>
                    <video src="src/img/20230313-EMMS-General.mp4" controls></video>
                </div>
            </div>
        </section>

        <!-- Separator -->
        <div class="emms__separator mb"></div>

        <!-- Event numbers -->
        <section class="emms__eventnumbers emms__eventnumbers--large" id="boxNumberLarge">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">El EMMS en números</h2>
                <ul class="emms__fade-in">
                    <li>
                        <img src="src/img/icons/icon-eventnumber-1.svg" alt="Icon">
                        <p class="number" id="count1L">315</p>
                        <span>REGISTRADOS</span>
                    </li>
                    <li>
                        <img src="src/img/icons/icon-eventnumber-2.svg" alt="Icon">
                        <p class="number" id="count4L">210</p>
                        <span>Speakers</span>
                    </li>
                    <li>
                        <img src="src/img/icons/icon-eventnumber-3.svg" alt="Icon">
                        <p class="number" id="count3L">10</p>
                        <span>Países</span>
                    </li>
                    <li>
                        <img src="src/img/icons/icon-eventnumber-4.svg" alt="Icon">
                        <p class="number" id="count2L">16</p>
                        <span>Años</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Separator -->
        <div class="emms__separator"></div>

        <!-- Speakers -->
        <section class="emms__home__speakers">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Algunos de los conferencistas que nos han acompañado en las últimas ediciones:</h2>
                <div class="emms__speakerslist emms__fade-in">
                    <ul>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-neil-patel.png" alt="Neil Patel" class="emms__speakerslist__item__photo">
                            <p>Neil Patel</p>
                            <img src="src/img/logos/logo-np-digital.png" alt="NP Digital" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-fernando-dacunto.png" alt="Fernando D’Acunto" class="emms__speakerslist__item__photo">
                            <p>Fernando D’Acunto</p>
                            <img src="src/img/logos/logo-youtube.png" alt="Youtube" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-tim-ash.png" alt="Tim Ash" class="emms__speakerslist__item__photo">
                            <p>Tim Ash</p>
                            <img src="src/img/logos/logo-timash.png" alt="TimAsh.com" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-julia-rayeb.png" alt="Julia Rayeb" class="emms__speakerslist__item__photo">
                            <p>Julia Rayeb</p>
                            <img src="src/img/logos/logo-facebook.png" alt="Facebook" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-vedant-misra.png" alt="Vedant Misra" class="emms__speakerslist__item__photo">
                            <p>Vedant Misra</p>
                            <img src="src/img/logos/logo-google.png" alt="Google" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-vilma-nunez.png" alt="Vilma Nuñez" class="emms__speakerslist__item__photo">
                            <p>Vilma Nuñez</p>
                            <img src="src/img/logos/logo-vilma.png" alt="Vilma" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-marcos-pueyrredon.png" alt="Marcos Pueyrredón " class="emms__speakerslist__item__photo">
                            <p>Marcos Pueyrredón </p>
                            <img src="src/img/logos/logo-vtex.png" alt="Vtex" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-diego-dagnino.png" alt="Diego Dagnino" class="emms__speakerslist__item__photo">
                            <p>Diego Dagnino</p>
                            <img src="src/img/logos/logo-canva.png" alt="Canva" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-diana-ramirez-2.png" alt="Diana Ramirez" class="emms__speakerslist__item__photo">
                            <p>Diana Ramirez</p>
                            <img src="src/img/logos/logo-spotify.png" alt="Spotify" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-juan-lombana.png" alt="Juan Lombana" class="emms__speakerslist__item__photo">
                            <p>Juan Lombana</p>
                            <img src="src/img/logos/logo-mercatitlan.png" alt="Mercatitlan" class="emms__speakerslist__item__logo">
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Premium content -->
        <section class="emms__premium-content emms__premium-content--dark">
            <div class="emms__container--lg">
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Accede a la Biblioteca de Recursos ¡gratis!</h2>
                    <p>Descubre <strong>contenidos descargables, herramientas y conferencias on-demand</strong> que te traen nuestros aliados para potenciar al máximo tu negocio.</p>
                    <a href="./sponsors-registrado" class="emms__cta emms__fade-in">ACCEDE AHORA</a>
                </div>
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/download--locked-24.png" alt="Contenido Premium">
                </div>
            </div>
        </section>

        <!-- Users comments -->
        <section class="emms__userscomments">
            <div class="emms__background-a"></div>
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Nuestros asistentes dicen...</h2>
                <ul class="emms__userscomments__list emms__userscomments__list--dk emms__fade-in">
                    <li class="emms__userscomments__list__item">
                        <p>“Recomiendo este evento porque ofrece contenido de un valor excepcional que supera incluso a los eventos pagos más destacados, ¡y gratis!”<em>Yolanda<img src="src/img/flag-mexico.png" alt="México"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Ver las conferencias online es increíble. Pude disfrutar de la última edición en el trabajo y verlo con mis compañeros”<em>Pedro<img src="src/img/flag-espana.png" alt="España"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Me encanta poder irme con ideas nuevas para mi negocio cada año, además de pasar tiempo con expertos y colegas”.<em>Nadia<img src="src/img/flag-argentina.png" alt="Argentina"></em></p>
                    </li>
                </ul>
                <ul class="emms__userscomments__list emms__userscomments__list--mb main-carousel" data-flickity>
                    <li class="emms__userscomments__list__item">
                        <p>“Recomiendo este evento porque ofrece contenido de un valor excepcional que supera incluso a los eventos pagos más destacados, ¡y gratis!”<em>Yolanda<img src="src/img/flag-mexico.png" alt="México"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Ver las conferencias online es increíble. Pude disfrutar de la última edición en el trabajo y verlo con mis compañeros”<em>Pedro<img src="src/img/flag-espana.png" alt="España"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Me encanta poder irme con ideas nuevas para mi negocio cada año, además de pasar tiempo con expertos y colegas”.<em>Nadia<img src="src/img/flag-argentina.png" alt="Argentina"></em></p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Frequent Questions -->
        <section class="emms__frequentquestions" id="preguntas-frecuentes">
            <div class="emms__background-a"></div>
            <div class="emms__container--md">
                <h2 class="emms__fade-in">Preguntas frecuentes</h2>
                <ul class="emms__frequentquestions__list emms__fade-in">
                    <li class="emms__frequentquestions__list__item open">
                        <button class="emms__frequentquestions__list__item__head">🕵️‍♀️ ¿Por qué asistir al EMMS?</button>
                        <p class="emms__frequentquestions__list__item__content">Es el <strong>evento online y gratuito de Marketing Digital</strong> más importante de <strong>España y Latinoamérica</strong>. Cada año nos eligen expertos de compañías líderes de la industria para dar a conocer las principales tendencias en su sector.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">🎁 ¿Qué obtengo al registrarme al evento?</button>
                        <p class="emms__frequentquestions__list__item__content">Con tu registro podrás acceder a todas las conferencias de esta y todas las ediciones anteriores para siempre. Además, desbloquearás <strong>una biblioteca repleta de recursos como E-books, Plantillas, descuentos y material audiovisual</strong> para que puedas hacer crecer tu negocio aún más.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">📅 ¿Cuándo se realizará el EMMS 2024?</button>
                        <p class="emms__frequentquestions__list__item__content">El EMMS 2024 constará de 2 ediciones: <strong>E-commerce y Digital Trends</strong>, a realizarse en <strong>abril y noviembre</strong>, respectivamente. Registrándote al evento recibirás por Email todos las novedades.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">📍 ¿Dónde serán los eventos?</button>
                        <p class="emms__frequentquestions__list__item__content">El EMMS es un evento online. Es decir, podrás verlo desde cualquier dispositivo, estés donde estés e incluso volver a ver las <strong><a href="./ediciones-anteriores-registrado">ediciones anteriores</a></strong>.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">💵 ¿Tengo que pagar inscripción?</button>
                        <p class="emms__frequentquestions__list__item__content">El EMMS tiene un <strong>registro totalmente gratuito</strong>, válido para acceder a las Conferencias y a la Biblioteca de Recursos. Si además quieres capacitarte con Workshops prácticos, a los que puedes acceder de por vida, y sesiones de networking pronto podrás <strong>comprar tu entrada VIP</strong>.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">✍ ¿Puedo apuntarme a más de una edición?</button>
                        <p class="emms__frequentquestions__list__item__content">¡Sí! Cuando la fecha del evento esté confirmada, podrás elegir <a href="#eventos">aquí</a> la edición a la que te interese para inscribirte gratis. Completa tus datos y ¡listo! Tu lugar ya quedará reservado.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">💻 ¿Cómo accedo a la transmisión del EMMS si ya me registré?</button>
                        <p class="emms__frequentquestions__list__item__content">Podrás seguir la transmisión del EMMS directamente desde el Sitio Web en la fecha del evento, accediendo según corresponda a Digital Trends o <a href="./ecommerce-registrado.php">E-commerce</a></p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">🎥 ¿Están disponibles las grabaciones después del evento?</button>
                        <p class="emms__frequentquestions__list__item__content">Las conferencias de las ediciones pasadas están grabadas y puedes acceder a ellas desde esta misma Web. Elige Digital Trends, E-commerce o dirígete en la navigation bar a la sección Qué es el EMMS para ver ediciones anteriores.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">🤔 Me apunté al evento y aún no recibí el Email de confirmación, ¿qué hago?</button>
                        <p class="emms__frequentquestions__list__item__content">Comunícate con el equipo de Atención al Cliente de Doppler enviando un Email a <a href="mailto:soporte@fromdoppler.com">soporte@fromdoppler.com</a> para ayudarte a resolverlo.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">📣 Me interesa ser aliado en el evento, ¿todavía estoy a tiempo de sumarme?</button>
                        <p class="emms__frequentquestions__list__item__content">¡Sí claro! Comunícate al Email <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a> para que podamos contarte cuáles son las oportunidades de participar y cómo podrías sumarte.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">🎙Quiero ser speaker del EMMS, ¿puedo postularme?</button>
                        <p class="emms__frequentquestions__list__item__content">¡Por supuesto! Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a> para comentarnos por qué deberías ser ponente en EMMS y te responderemos a la brevedad.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">📝 ¿Obtengo un certificado de participación por asistir al evento?</button>
                        <p class="emms__frequentquestions__list__item__content">¡Sí! Podrás descargar tu certificado de asistencia a cada una de las ediciones del EMMS.</p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Companies list -->
        <section class="emms__companies ">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Nos han acompañado en ediciones anteriores</h2>
                <ul class="emms__companies__list emms__fade-in">
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-metricool.png" alt="Metricool"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-asociacion-marketing-espana.png" alt="Asociación de Marketing de España"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-capece.png" alt="Capece"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-amvo.png" alt="AMVO"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-linkedin.png" alt="LinkedIn"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-bigbox.png" alt="Bigbox"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-semrush.png" alt="Semrush"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-crehana.png" alt="Crehana"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-vtex.png" alt="VTEX"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-banco-frances.png" alt="BBVA Francés"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-airbnb.png" alt="Airbnb"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-woocomerce.png" alt="Woocommerce"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-doofinder.png" alt="Doofinder"></li>
                    <li class="emms__companies__list__item"><img src="src/img/logos/logo-easycommerce.png" alt="Easycommerce"></li>
                </ul>
                <small class="emms__fade-in">¿Quieres ser aliado del EMMS? ¡Hablemos! Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></small>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>
    <script src="src/<?= VERSION ?>/js/counterAnimation.js"></script>
    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>

</body>

</html>
