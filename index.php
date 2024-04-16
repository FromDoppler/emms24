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

        if (isUserLogged()) {
            window.location.href = getUrlWithParams('/registrado');
        }
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

<body class="emms__home">
    <?php include_once('././src/components/gtm.php'); ?>

    <?php if ($ecommerceStates['isPre']) : ?>
        <!-- Hellobar -->
        <div class="emms__hellobar">
            <div class="emms__hellobar__container emms__fade-in">
                <p><strong>⏳ ¡Últimos días para registrarte al EMMS E-commerce! 2 y 3 de mayo: conferencias, workshops y networking.
                    </strong></p>
                <a href="./ecommerce">REGÍSTRATE GRATIS</a>
            </div>
        </div>
    <?php endif; ?>

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
                    <li><a href="./ecommerce">e-commerce</a></li>
                    <li><a href="./sponsors">biblioteca de recursos</a></li>
                    <li class="emms__header__nav__menu__dropdown"><a href="./ediciones-anteriores">Qué es el EMMS</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="./ediciones-anteriores#sobre-emms">Sobre el EMMS</a></li>
                            <li><a href="./ediciones-anteriores#ediciones-anteriores">Revive ediciones anteriores</a></li>
                        </ul>
                    </li>
                    <li><a href="./sponsors-promo">Sponsors</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Share -->
    <div class="emms__share">
        <a id="btn-share" class="emms__share__open-list"><img src="src/img/icons/icon-share.svg" alt="Share"></a>
        <ul id="list-share" class="emms__share__list">
            <li>
                <a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgoemms.com%2Findex.php', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Facebook-w.svg" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https%3A%2F%2Fgoemms.com%2Findex.php&text=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Twitter-w.svg" alt="Twitter">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com%2Findex.php&title=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!', 'Linkedin', 'toolbar=0, status=0, width=550, height=550');">
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
                    <h1><em>TODAS LAS TENDENCIAS DE MARKETING DIGITAL EN UN SOLO LUGAR</em> ¡Llega el EMMS E-commerce 2024!</h1>
                    <h2>ONLINE Y GRATUITO</h2>
                    <p>Revoluciona tu forma de hacer negocios y potencia tus resultados con el mayor evento de Latam y España. Disfruta de <strong>2 ediciones exclusivas</strong> para capacitarte e inspirarte con los líderes de tu industria.</p>
                </div>
            <?php endif ?>
            <?php if ($ecommerceStates['isDuring']) : ?>
                <div class="emms__home__hero__title emms__fade-top">
                    <h1><em>LLEGÓ EL EVENTO DE MARKETING DIGITAL MÁS ESPERADO</em> Vuelve el EMMS, ¡recargado!</h1>
                    <h2>ONLINE Y GRATUITO</h2>
                    <p>Tras <strong>15 años</strong> como el evento líder en Latam y España, <strong>el EMMS evolucionó</strong>. Accede ahora a la <strong>última edición del año</strong> con 4 jornadas a puro aprendizaje, <strong>¡ya comenzó!</strong></p>
                </div>
            <?php endif ?>
            <?php if ($ecommerceStates['isPost']) : ?>
                <div class="emms__home__hero__title emms__fade-top">
                    <h1><em>TODAS LAS TENDENCIAS EN MARKETING DIGITAL, EN UN SOLO LUGAR</em> Revive el EMMS 2023</h1>
                    <h2>ONLINE Y GRATUITO</h2>
                    <p id="registro"><span>Tras <strong>15 años</strong> como el evento líder en Marketing Digital de Latam y España, <strong>el EMMS evolucionó</strong>. </span>Accede a las <strong>ediciones E-commerce y Digital Trends</strong> para aprender e inspirarte con referentes en la industria.</p>
                </div>
            <?php endif ?>
            <div id="eventos"></div>

            <!-- Event cards -->
            <div class="emms__eventCards">
                <div class="emms__container--lg">
                    <ul class="emms__eventCards__list emms__eventCards__list--dk emms__fade-in">
                        <li class="emms__eventCards__list__item">
                            <div class="emms__eventCards__list__item__picture">
                                <img src="src/img/card-image-ecommerce.png" alt="Image Ecommerce">
                                <?php if ($ecommerceStates['isPost']) : ?>
                                    <p class="top hide">EVENTO FINALIZADO</p>
                                <?php endif ?>
                            </div>
                            <div class="emms__eventCards__list__item__text">
                                <?php if ($ecommerceStates['isLive']) : ?>
                                    <h3>EMMS E-commerce <span>EN VIVO</span></h3>
                                <?php else : ?>
                                    <h3>EMMS E-commerce </h3>
                                <?php endif ?>
                                <?php if ($ecommerceStates['isPre']) : ?>
                                    <p>Referentes internacionales de la industria te contarán qué <strong>tendencias y estrategias emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                <?php endif ?>
                                <?php if ($ecommerceStates['isDuring']) : ?>
                                    <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                <?php endif ?>
                                <?php if ($ecommerceStates['isPost']) : ?>
                                    <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                <?php endif ?>
                                <div class="emms__eventCards__list__item__text--bottom">
                                    <?php if ($ecommerceStates['isPre']) : ?>
                                        <a href="ecommerce" class="emms__cta">REGÍSTRATE GRATIS</a>
                                    <?php elseif ($ecommerceStates['isLive']) : ?>
                                        <a href="ecommerce" class="emms__cta">ACCEDE AL VIVO</a>
                                    <?php elseif ($ecommerceStates['isDuring']) : ?>
                                        <a href="ecommerce" class="emms__cta">SÚMATE AHORA</a>
                                    <?php elseif ($ecommerceStates['isPost']) : ?>
                                        <a href="ecommerce" class="emms__cta">REVIVE EL EVENTO</a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>
                        <li class="emms__eventCards__list__item">
                            <div class="emms__eventCards__list__item__picture">
                                <img src="src/img/card-image-digitaltrends.png" alt="Image Digital Trends">
                                <?php if ($digitalTrendsStates['isPost']) : ?>
                                    <p class="top hide">EVENTO FINALIZADO</p>
                                <?php endif ?>
                            </div>
                            <div class="emms__eventCards__list__item__text">
                                <?php if ($digitalTrendsStates['isLive']) : ?>
                                    <h3>EMMS Digital Trends <span>EN VIVO</span></h3>
                                <?php else : ?>
                                    <h3>EMMS Digital Trends </h3>
                                <?php endif ?>
                                <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. ¡Novedades muy pronto! Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores#ediciones-anteriores">reviviendo la edición 2023</a>.</strong></p>
                                <div class="emms__eventCards__list__item__text--bottom">
                                    <?php if ($digitalTrendsStates['isPre']) : ?>
                                        <a class="emms__cta inactive">PRÓXIMAMENTE</a>
                                    <?php elseif ($digitalTrendsStates['isLive']) : ?>
                                        <a href="/digital-trends" class="emms__cta">ACCEDE AL VIVO</a>
                                    <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                        <a href="/digital-trends" class="emms__cta">SÚMATE AHORA</a>
                                    <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                        <a href="/digital-trends" class="emms__cta">REVIVE EL EVENTO</a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="emms__eventCards__list emms__eventCards__list--mb emms__fade-in main-carousel" data-flickity>
                        <li class="emms__eventCards__list__item">
                            <div class="emms__eventCards__list__item__picture">
                                <img src="src/img/card-image-ecommerce.png" alt="Image Ecommerce">
                                <?php if ($ecommerceStates['isPost']) : ?>
                                    <p class="top hide">EVENTO FINALIZADO</p>
                                <?php endif ?>
                            </div>
                            <div class="emms__eventCards__list__item__text">
                                <?php if ($ecommerceStates['isLive']) : ?>
                                    <h3>EMMS E-commerce <span>EN VIVO</span></h3>
                                <?php else : ?>
                                    <h3>EMMS E-commerce </h3>
                                <?php endif ?>
                                <?php if ($ecommerceStates['isPre']) : ?>
                                    <p>Referentes internacionales de la industria te contarán qué <strong>tendencias y estrategias emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos. Descubre la agenda y reserva tu plaza</p>
                                <?php endif ?>
                                <?php if ($ecommerceStates['isDuring']) : ?>
                                    <p>Súmate ahora y conoce <strong>qué tendencias y estrategias emplean los referentes de la industria en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                <?php endif ?>
                                <?php if ($ecommerceStates['isPost']) : ?>
                                    <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
                                <?php endif ?>
                                <div class="emms__eventCards__list__item__text--bottom">
                                    <?php if ($ecommerceStates['isPre']) : ?>
                                        <a href="ecommerce" class="emms__cta">REGÍSTRATE GRATIS</a>
                                    <?php elseif ($ecommerceStates['isLive']) : ?>
                                        <a href="ecommerce" class="emms__cta">ACCEDE AL VIVO</a>
                                    <?php elseif ($ecommerceStates['isDuring']) : ?>
                                        <a href="ecommerce" class="emms__cta">SÚMATE AHORA</a>
                                    <?php elseif ($ecommerceStates['isPost']) : ?>
                                        <a href="ecommerce" class="emms__cta">REVIVE EL EVENTO</a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>
                        <li class="emms__eventCards__list__item">
                            <div class="emms__eventCards__list__item__picture">
                                <img src="src/img/card-image-digitaltrends.png" alt="Image Digital Trends">
                                <?php if ($digitalTrendsStates['isPost']) : ?>
                                    <p class="top hide">EVENTO FINALIZADO</p>
                                <?php endif ?>
                            </div>
                            <div class="emms__eventCards__list__item__text">
                                <?php if ($digitalTrendsStates['isPre'] || $digitalTrendsStates['isDuring']) : ?>
                                    <div class="emms__eventCards__list__item__text--corner hide">
                                        <p><span>13 <em>-</em> 16</span>NOVIEMBRE</p>
                                    </div>
                                <?php endif ?>
                                <?php if ($digitalTrendsStates['isLive']) : ?>
                                    <h3>EMMS Digital Trends <span>EN VIVO</span></h3>
                                <?php else : ?>
                                    <h3>EMMS Digital Trends </h3>
                                <?php endif ?>
                                <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. ¡Novedades muy pronto! Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores#ediciones-anteriores">reviviendo la edición 2023</a>.</strong></p>
                                <div class="emms__eventCards__list__item__text--bottom">
                                    <?php if ($digitalTrendsStates['isPre']) : ?>
                                        <a class="emms__cta inactive">PRÓXIMAMENTE</a>
                                    <?php elseif ($digitalTrendsStates['isLive']) : ?>
                                        <a href="/digital-trends" class="emms__cta">ACCEDE AL VIVO</a>
                                    <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                        <a href="/digital-trends" class="emms__cta">SÚMATE AHORA</a>
                                    <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                        <a href="/digital-trends" class="emms__cta">REVIVE EL EVENTO</a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </section>

        <!-- Central Video -->

        <section class="emms__centralvideo">
            <div class="emms__container--lg emms__container--lg--column">
                <div class="emms__centralvideo__title emms__fade-in">
                    <h2>Súmate al EMMS E-commerce y aprende con los
                        mayores especialistas en venta electrónica
                    </h2>
                    <p>Descubre en este video todo lo que pasó en la última edición y por qué miles de profesionales <br>
                        y referentes en la industria eligen este evento para capacitarse.</p>
                </div>
                <div class="emms__centralvideo__video emms__fade-in">
                    <video src="src/img/EmmsEcommerce.mp4" controls></video>
                </div>
                <a href="./ecommerce" class="emms__cta  emms__fade-in">RESERA TU CUPO GRATIS</a>
            </div>
        </section>


        <!-- Event numbers -->
        <section class="emms__eventnumbers emms__eventnumbers--large" id="boxNumberLarge">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">El EMMS en números</h2>
                <ul class="emms__fade-in">
                    <li>
                        <img src="src/img/icons/icon-eventnumber-speakers.svg" alt="Icon">
                        <p class="number" id="count4L">210</p>
                        <span>Speakers</span>
                    </li>
                    <li>
                        <img src="src/img/icons/icon-eventnumber-registered.svg" alt="Icon">
                        <p class="number" id="count1L">315</p>
                        <span>REGISTRADOS</span>
                    </li>
                    <li>
                        <img src="src/img/icons/icon-eventnumber-countries.svg" alt="Icon">
                        <p class="number" id="count3L">10</p>
                        <span>Países</span>
                    </li>
                    <li>
                        <img src="src/img/icons/icon-eventnumber-years.svg" alt="Icon">
                        <p class="number" id="count2L">16</p>
                        <span>Años</span>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Speakers -->
        <section class="emms__speakers emms__bg-section-3">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Algunos de los conferencistas que nos han acompañado en las últimas ediciones:</h2>
                <div class="emms__speakerslist emms__fade-in">
                    <ul class="main-carousel" data-flickity='{ "initialIndex": ".is-initial-select", "wrapAround": "true" }'>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/ricardo-tayer.png" alt="Ricardo Tayer" class="emms__speakerslist__item__photo">
                                <p>Ricardo Tayer <span>CEO y Fundador de Flat 101</span></p>
                                <img src="src/img/logos--white/logo-flat-101.png" alt="Flat 101" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/ana-ivars.png" alt="Ana Ivars" class="emms__speakerslist__item__photo">
                                <p>Ana Ivars <span>Founder & CEO en Dinamiza Digital</span></p>
                                <img src="src/img/logos--white/logo-ana-ivars.png" alt="Ana Ivars" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item is-initial-select">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/federico-munoz-villavicencio.png" alt="Federico Muñoz Villavicencio" class="emms__speakerslist__item__photo">
                                <p>Federico Muñoz Villavicencio <span>Client Solutions Manager en Meta</span></p>
                                <img src="src/img/logos--white/logo-meta.png" alt="Meta" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/ana-laura-fleba.png" alt="Ana Laura Fleba" class="emms__speakerslist__item__photo">
                                <p>Ana Laura Fleba <span>Digital Selling & Commerce Director en Unilever</span></p>
                                <img src="src/img/logos--white/logo-unilever.png" alt="Unilever" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/manuel-garcia-cuerva.png" alt="Manuel García Cuerva" class="emms__speakerslist__item__photo">
                                <p>Manuel García Cuerva <span>Head Global VTEX Profit Pools en VTEX</span></p>
                                <img src="src/img/logos--white/logo-vtex.png" alt="Vtex" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/alvaro.png" alt="Álvaro Peña de Luna" class="emms__speakerslist__item__photo">
                                <p>Álvaro Peña de Luna <span>Co-CEO y Head of SEO e IA en iSocialWeb</span></p>
                                <img src="src/img/logos--white/logo-isocial.png" alt="iSocialWeb" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/alicia.png" alt="Alicia Macías Hernández" class="emms__speakerslist__item__photo">
                                <p>Alicia Macías Hernández <span>Fundadora de eCommerce efectivo</span></p>
                                <img src="src/img/logos--white/logo-ecommerce-efectivo.png" alt="Ecommerce Efectivo" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/federico-osorio.png" alt="Federico Osorio" class="emms__speakerslist__item__photo">
                                <p>Federico Osorio <span>Co-fundador de Tiipe</span></p>
                                <img src="src/img/logos--white/logo-tiipe.png" alt="Tiipe" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/emiliano-canova.png" alt="Emiliano Canova" class="emms__speakerslist__item__photo">
                                <p>Emiliano Canova <span>CEO & Co-founder en GoCuotas</span></p>
                                <img src="src/img/logos--white/logo-gocuotas.png" alt="GoCuotas" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                        <li class="emms__speakerslist__item">
                            <div class="emms__speakerslist__item__content">
                                <img src="src/img/people--gradient/ana-victoria-odonel.png" alt="Ana Victoria Odonel" class="emms__speakerslist__item__photo">
                                <p>Ana Victoria Odonel <span>Digital Planner en Tramontina México</span></p>
                                <img src="src/img/logos--white/logo-tramontina.png" alt="Tramontina" class="emms__speakerslist__item__logo">
                            </div>
                        </li>
                    </ul>
                </div>
                <small class="emms__fade-in"><strong>¡Ya llegó EMMS E-commerce 2024! Conoce la agenda <br>
                        Seguimos confirmando más speakers, workshops y novedades para esta edición. <br>
                        Quedan pocos días, regístrate gratis ahora y no te lo pierdas.</strong>
                </small>
                <a href="./ecommerce" class="emms__cta emms__fade-in">APÚNTATE GRATIS</a>
            </div>
        </section>

        <!-- Premium content -->
        <section class="emms__premium-content">
            <div class="emms__container--lg">
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/biblioteca-recursos.png" alt="Biblioteca de recursos">
                </div>
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Accede a la Biblioteca de Recursos ¡gratis!</h2>
                    <p><strong>Descubre contenidos descargables, herramientas y conferencias on-demand que te traen para que puedas potenciar al máximo tu tienda online.</strong></p>
                    <a href="./sponsors" class="emms__cta sm emms__cta--nd emms__fade-in">INGRESA AHORA</a>
                </div>
            </div>
        </section>

        <!-- Users comments -->
        <section class="emms__userscomments">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Nuestros asistentes dicen:</h2>
                <ul class="emms__userscomments__list emms__userscomments__list--dk emms__fade-in">
                    <li class="emms__userscomments__list__item">
                        <div class="emms__userscomments__list__item__content">
                            <p class="emms__userscomments__list__item__text">“Asístí al EMMS y la magnitud de los speakers y de todo el evento me sorprendió muchísimo. Lo que más destaco es el hecho de poder interactuar y hacer preguntas a estos referentes.”</p>
                            <div class="emms__userscomments__list__item__author">
                                <img class="emms__userscomments__list__item__author--photo" src="src/img/quotes/quote-adriana.png" alt="Adriana">
                                <div class="emms__userscomments__list__item__author--name">
                                    <p>Adriana</p>
                                    <img src="src/img/flag-colombia.png" alt="Colombia">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <div class="emms__userscomments__list__item__content">
                            <p class="emms__userscomments__list__item__text">“¡Ver las conferencias de expertos de todo el mundo y poder hacerlo online es increíble! Cada año me apunto para saber qué conviene aplicar en mi negocio.”</p>
                            <div class="emms__userscomments__list__item__author">
                                <img class="emms__userscomments__list__item__author--photo" src="src/img/quotes/quote-sergio.png" alt="Sergio">
                                <div class="emms__userscomments__list__item__author--name">
                                    <p>Sergio</p>
                                    <img src="src/img/flag-espana.png" alt="España">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <div class="emms__userscomments__list__item__content">
                            <p class="emms__userscomments__list__item__text">“¡No puedo recomendar este evento lo suficiente! Su contenido gratuito es de una calidad excepcional, superando a muchos eventos pagos.”</p>
                            <div class="emms__userscomments__list__item__author">
                                <img class="emms__userscomments__list__item__author--photo" src="src/img/quotes/quote-ricardo.png" alt="Ricardo">
                                <div class="emms__userscomments__list__item__author--name">
                                    <p>Ricardo</p>
                                    <img src="src/img/flag-mexico.png" alt="México">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="emms__userscomments__list emms__userscomments__list--mb main-carousel" data-flickity>
                    <li class="emms__userscomments__list__item">
                        <div class="emms__userscomments__list__item__content">
                            <p class="emms__userscomments__list__item__text">“Asístí al EMMS y la magnitud de los speakers y de todo el evento me sorprendió muchísimo. Lo que más destaco es el hecho de poder interactuar y hacer preguntas a estos referentes.”</p>
                            <div class="emms__userscomments__list__item__author">
                                <img class="emms__userscomments__list__item__author--photo" src="src/img/quotes/quote-adriana.png" alt="Adriana">
                                <div class="emms__userscomments__list__item__author--name">
                                    <p>Adriana</p>
                                    <img src="src/img/flag-colombia.png" alt="Colombia">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <div class="emms__userscomments__list__item__content">
                            <p class="emms__userscomments__list__item__text">“¡Ver las conferencias de expertos de todo el mundo y poder hacerlo online es increíble! Cada año me apunto para saber qué conviene aplicar en mi negocio.”</p>
                            <div class="emms__userscomments__list__item__author">
                                <img class="emms__userscomments__list__item__author--photo" src="src/img/quotes/quote-sergio.png" alt="Sergio">
                                <div class="emms__userscomments__list__item__author--name">
                                    <p>Sergio</p>
                                    <img src="src/img/flag-espana.png" alt="España">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <div class="emms__userscomments__list__item__content">
                            <p class="emms__userscomments__list__item__text">“¡No puedo recomendar este evento lo suficiente! Su contenido gratuito es de una calidad excepcional, superando a muchos eventos pagos”.</p>
                            <div class="emms__userscomments__list__item__author">
                                <img class="emms__userscomments__list__item__author--photo" src="src/img/quotes/quote-ricardo.png" alt="Ricardo">
                                <div class="emms__userscomments__list__item__author--name">
                                    <p>Ricardo</p>
                                    <img src="src/img/flag-mexico.png" alt="México">
                                </div>
                            </div>
                        </div>
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
                        <p class="emms__frequentquestions__list__item__content">El EMMS es un evento online. Es decir, podrás verlo desde cualquier dispositivo, estés donde estés e incluso volver a ver las <strong><a href="./ediciones-anteriores">ediciones anteriores</a></strong>.</p>
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
                        <p class="emms__frequentquestions__list__item__content">Podrás seguir la transmisión del EMMS directamente desde el Sitio Web en la fecha del evento, accediendo según corresponda a Digital Trends o <a href="./ecommerce">E-commerce</a></p>
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
                <small class="emms__fade-in">¿Quieres ser aliado del EMMS 2024? ¡Hablemos! Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></small>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>
    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>

</body>

</html>