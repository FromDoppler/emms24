<?php
require_once('././config.php');
require_once('././src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('././src/components/head-ecommerce.php'); ?>
    <?php include_once('././src/components/head.php'); ?>
    <script type="module">
        import {
            toggleVipEcommerceElements
        } from './src/<?= VERSION ?>/js/toggleVipElements.js';

        toggleVipEcommerceElements();
    </script>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado">
    <?php include_once('././src/components/gtm.php'); ?>

    <?php if ($ecommerceStates['isPre']) : ?>
        <!-- Hellobar -->
        <div class="emms__hellobar emms__hellobar--counter hidden--vip">
            <div class="emms__hellobar__container emms__fade-in">
                <p><strong>¡Últimos días! ¿Aún no tienes tu pase VIP? Adquiérelo y accede a los mejores Workshops y Networking.</strong> <a href="#entradas">COMPRA TU ENTRADA</a></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo emms__header__logo--ecommerce">
                <a href="/"><img src="src/img/logos/logo-emms-ecommerce.png" alt="Emms Ecommerce 2023"></a>
            </div>
            <a class="emms__header__nav--mb" id="btn-burger"></a>
            <nav class="emms__header__nav emms__header__nav--hidden" id="nav-mb">
                <ul class="emms__header__nav__menu">
                    <li><a href="/">home</a></li>
                    <li><a href="#" class="active">e-commerce</a>
                    </li>
                    <li><a href="/sponsors">biblioteca de recursos</a></li>
                    <li class="emms__header__nav__menu__dropdown"><a href="./ediciones-anteriores-registrado">Qué es el EMMS</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="./ediciones-anteriores-registrado#sobre-emms">Sobre el EMMS</a></li>
                            <li><a href="./ediciones-anteriores-registrado#ediciones-anteriores">Revive ediciones anteriores</a></li>
                        </ul>
                    </li>
                    <li><a href="/sponsors-promo">sponsors</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Share -->
    <div class="emms__share">
        <a id="btn-share" class="emms__share__open-list"><img src="src/img/icons/icon-share.svg" alt="Share"></a>
        <ul id="list-share" class="emms__share__list">
            <li>
                <a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgoemms.com%2Fecommerce', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Facebook-w.svg" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https%3A%2F%2Fgoemms.com%2Fecommerce&text=Vuelve%20el%20EMMS%20%C2%A1y%20con%20una%20nueva%20edici%C3%B3n!%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20la%20industria%20E-commerce.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20lugar%20ahora!%20', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Twitter-w.svg" alt="Twitter">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com%2Fecommerce&title=Vuelve%20el%20EMMS%20%C2%A1y%20con%20una%20nueva%20edici%C3%B3n!%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20la%20industria%20E-commerce.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20lugar%20ahora!%20', 'Linkedin', 'toolbar=0, status=0, width=550, height=550');">
                    <img src="src/img/LinkedIn-w.svg" alt="LinkedIn">
                </a>
            </li>
        </ul>
    </div>

    <main>

        <!-- Hero -->
        <section class="emms__hero-registration--registered">
            <div class="emms__container--md hidden--vip">
                <h1 class="emms__fade-top"><em>¡YA ERES PARTE DEL EMMS E-COMMERCE 2024!</em>Y eso no es todo… ¡Vive la experiencia completa con tu Entrada VIP!</h1>
                <p class="emms__fade-in">Si te has cansado de las estrategias que no funcionan, eleva tus conocimientos sumándote también a Workshops y sesiones de Networking para llevarte contactos e ideas prácticas a implementar en tu Tienda Online ahora mismo.</p>
                <a href="#entradas" class="emms__cta emms__fade-in"><span>COMPRA TU ENTRADA VIP</span></a>
            </div>
            <div class="emms__container--md show--vip">
                <h1 class="emms__fade-top"><em>¡YA ERES PARTE DEL EMMS E-COMMERCE 2024!</em>Falta poco para tu evento favorito, ¡comienza a prepararte!</h1>
                <p class="emms__fade-in">Revisa la agenda y descubre todos los contenidos que tenemos para que <br> vayas capacitándote.</p>
            </div>
            <!-- Marquee -->
            <div class="emms__hero-registration__bottom images emms__fade-in">
                <p>
                    <img src="src/img/marquee/google.png" alt="Google">
                    <img class="sm" src="src/img/marquee/meta.png" alt="Meta">
                    <img src="src/img/marquee/youtube.png" alt="Youtube">
                    <img src="src/img/marquee/amazon.png" alt="Amazon">
                    <img src="src/img/marquee/metricool.png" alt="Metricool">
                    <img src="src/img/marquee/microsoft.png" alt="Microsoft">
                    <img class="sm" src="src/img/marquee/tiktok.png" alt="TikTok">
                    <img src="src/img/marquee/linkedin.png" alt="LinkedIn">
                    <img src="src/img/marquee/spotify.png" alt="Spotify">
                    <img src="src/img/marquee/vtex.png" alt="Vtex">

                    <!--  Repeated marquee items -->
                    <img src="src/img/marquee/google.png" alt="Google">
                    <img class="sm" src="src/img/marquee/meta.png" alt="Meta">
                    <img src="src/img/marquee/youtube.png" alt="Youtube">
                    <img src="src/img/marquee/amazon.png" alt="Amazon">
                    <img src="src/img/marquee/metricool.png" alt="Metricool">
                    <img src="src/img/marquee/microsoft.png" alt="Microsoft">
                    <img class="sm" src="src/img/marquee/tiktok.png" alt="TikTok">
                    <img src="src/img/marquee/linkedin.png" alt="LinkedIn">
                    <img src="src/img/marquee/spotify.png" alt="Spotify">
                    <img src="src/img/marquee/vtex.png" alt="Vtex">

                    <!--  Repeated marquee items -->
                    <img src="src/img/marquee/google.png" alt="Google">
                    <img class="sm" src="src/img/marquee/meta.png" alt="Meta">
                    <img src="src/img/marquee/youtube.png" alt="Youtube">
                    <img src="src/img/marquee/amazon.png" alt="Amazon">
                    <img src="src/img/marquee/metricool.png" alt="Metricool">
                    <img src="src/img/marquee/microsoft.png" alt="Microsoft">
                    <img class="sm" src="src/img/marquee/tiktok.png" alt="TikTok">
                    <img src="src/img/marquee/linkedin.png" alt="LinkedIn">
                    <img src="src/img/marquee/spotify.png" alt="Spotify">
                    <img src="src/img/marquee/vtex.png" alt="Vtex">

                    <!--  Repeated marquee items -->
                    <img src="src/img/marquee/google.png" alt="Google">
                    <img class="sm" src="src/img/marquee/meta.png" alt="Meta">
                    <img src="src/img/marquee/youtube.png" alt="Youtube">
                    <img src="src/img/marquee/amazon.png" alt="Amazon">
                    <img src="src/img/marquee/metricool.png" alt="Metricool">
                    <img src="src/img/marquee/microsoft.png" alt="Microsoft">
                    <img class="sm" src="src/img/marquee/tiktok.png" alt="TikTok">
                    <img src="src/img/marquee/linkedin.png" alt="LinkedIn">
                    <img src="src/img/marquee/spotify.png" alt="Spotify">
                    <img src="src/img/marquee/vtex.png" alt="Vtex">
                </p>
            </div>
        </section>


        <!-- Central Video -->
        <section class="emms__centralvideo hidden--vip">
            <div class="emms__centralvideo__head">
                <h2>¡Quedan pocas entradas!</h2>
                <span> Corre a reservar
                    tu entrada VIP si...</span>
            </div>
            <div class="emms__container--lg reverse-mb">
                <ul class="emms__centralvideo__list emms__fade-in">
                    <p class="emms__centralvideo__tag-play">Dale play al video</p>
                    <li>Te has quedado <em>sin ideas para crear contenido</em> </li>
                    <li>Sientes que el crecimiento de tu E-commerce <em> se ha estancado</em> </li>
                    <li>Crees que solo con <em>hablar de tu producto alcanza</em></li>
                    <li>No logras hacer que los visitantes de tu tienda <em>terminen el checkout</em> </li>
                    <li>Tus clientes <em>no vuelven a comprarte</em> </li>
                    <li>O tienes <em>muchos carritos abandonado </em> </li>

                    <a href="#entradas" class="emms__cta">HAZTE VIP AHORA</a>
                </ul>
                <div class="emms__centralvideo__video lg emms__fade-in">
                    <video src="src/img/EmmsEcommerceNew.mp4" controls></video>
                </div>
            </div>
        </section>


        <!-- Features -->
        <div class="emms__features hidden--vip">
            <div class="emms__features__item emms__fade-in emms__features__item--reverse">
                <div class="emms__container--md">
                    <div class="emms__features__item__image">
                        <img src="src/img/pasevip.png" alt="Image">
                    </div>
                    <div class="emms__features__item__text">
                        <h3>Con tu pase VIP te llevarás</h3>
                        <ul class="emms__features__item__text__list">
                            <li>Nuevos contactos y potenciales aliados de las sesiones de networking</li>
                            <li>Acceso de por vida a talleres súper prácticos con los
                                que más saben de Marketing Digital aplicado a
                                E-commerce y Retail</li>
                            <li>Certificados por los Workshops tomados en vivo</li>
                            <li>Guías y más herramientas para aplicar y multiplicar tus ventas</li>
                        </ul>
                        <p class="emms__features__item__text__price"><em>SOLO POR </em>USD 10</p>
                        <a href="#entradas" class="emms__cta"> COMPRA TU ENTRADA AHORA
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="emms__bg-dark-gradient--2 ">
            <!-- Prices plans -->
            <div class="emms__plans  hidden--vip" id="entradas">
                <div class="emms__container--lg">
                    <div class="emms__plans__title">
                        <h2>Hazte VIP y lleva tu Tienda al siguiente nivel</h2>
                        <p>Compra tu pase y accede a conferencias, Workshops con certificado, sesiones
                            de Networking, docenas de recursos exclusivos ¡y mucho más!</p>
                    </div>
                    <div class="emms__plans__cards">
                        <div class="emms__plans__card emms__plans__card--vip">
                            <div class="emms__plans__card__head">
                                <h3 class="emms__plans__card__head__top">ASISTENTE VIP</h3>
                                <div class="emms__plans__card__head__price">
                                    <div class="emms__plans__card__head__price__content">
                                        <p class="emms__plans__card__head__price__sub-title">Precio entrada VIP</p>
                                        <h4>US$10,00</h4>
                                    </div>
                                </div>
                                <a href="./checkout.php" class="emms__cta">ACCEDE AHORA</a>
                            </div>
                            <div class="emms__plans__card__main">
                                <h5>Beneficios</h5>
                                <ul>
                                    <li><a href="http://goemms.com/ecommerce-registrado#agenda"> Workshops prácticos </a></li>
                                    <li>Sesiones de <a href="http://goemms.com/ecommerce-registrado#agenda">Networking</a></li>
                                    <li>Acceso de por vida a los <a href="http://goemms.com/ecommerce-registrado#agenda"> Workshops</a></li>
                                    <li>Certificado de asistencia a <a href="http://goemms.com/ecommerce-registrado#agenda"> Workshops</a></li>
                                    <li>Más guías con herramientas
                                        y tips exclusivos</li>
                                    <li>Sesiones de preguntas y respuestas
                                        con tus referentes del Marketing</li>
                                    <li>Acceso a todas las <a href="http://goemms.com/ecommerce-registrado#agenda">conferencias</a> con speakers internacionales </li>
                                    <li>Volver a ver las conferencias todas las veces que quieras </li>
                                    <li>Ingreso a la <a href="http://goemms.com/sponsors-registrado">Biblioteca de Recursos</a>
                                        con E-books, plantillas, material
                                        audiovisual y más</li>
                                    <li>Participación en sorteos</li>
                                    <li>Descuentos en herramientas
                                        y capacitaciones</li>
                                </ul>
                            </div>
                        </div>
                        <div class="emms__plans__card emms__plans__card--free">
                            <div class="emms__plans__card__head">
                                <h3 class="emms__plans__card__head__top">ASISTENTE FREE</h3>
                                <div class="emms__plans__card__head__price">
                                    <div class="emms__plans__card__head__price__content">
                                        <p class="emms__plans__card__head__price__sub-title">Precio entrada FREE</p>
                                        <h4>GRATIS</h4>
                                    </div>
                                </div>
                                <a class="emms__cta inactive">ACCEDE AHORA</a>
                            </div>
                            <div class="emms__plans__card__main">
                                <h5>Beneficios</h5>
                                <ul>
                                    <li class="exclude"><a href="http://goemms.com/ecommerce-registrado#agenda"> Workshops prácticos </a></li>
                                    <li class="exclude">Sesiones de <a href="http://goemms.com/ecommerce-registrado#agenda">Networking</a></li>
                                    <li class="exclude">Acceso de por vida a los <a href="http://goemms.com/ecommerce-registrado#agenda"> Workshops</a></li>
                                    <li class="exclude">Certificado de asistencia a <a href="http://goemms.com/ecommerce-registrado#agenda"> Workshops</a></li>
                                    <li class="exclude">Más guías con herramientas
                                        y tips exclusivos</li>
                                    <li class="exclude">Sesiones de preguntas y respuestas
                                        con tus referentes del Marketing</li>
                                    <li>Acceso a todas las <a href="http://goemms.com/ecommerce-registrado#agenda">conferencias</a> con speakers internacionales </li>
                                    <li>Volver a ver las conferencias todas las veces que quieras </li>
                                    <li>Ingreso a la <a href="http://goemms.com/sponsors-registrado">Biblioteca de Recursos</a>
                                        con E-books, plantillas, material
                                        audiovisual y más</li>
                                    <li>Participación en sorteos</li>
                                    <li>Descuentos en herramientas
                                        y capacitaciones</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="emms__border-separator  hidden--vip">
                <div class="emms__separator emms__separator--white">
                </div>
            </div>
            <!-- Calendar -->
            <section class="emms__calendar" id="agenda">
                <div class="emms__container--lg">
                    <div class="emms__calendar__title emms__fade-in">
                        <h2>Agenda EMMS E-commerce 2024</h2>
                        <p><strong>Descubre aquí los speakers internacionales y las actividades exclusivas que te esperarán en esta edición. <br>
                                Ya falta poco pero, si no quieres olvidarte del evento, <a href="https://www.addevent.com/event/fz20154258">guarda un recordatorio en tu calendario.</a> </strong></p>
                    </div>
                    <!-- Speakers -->
                    <?php include('./src/components/speakers.php') ?>
                    <!-- End list -->
                    <div class="emms__calendar__bottom emms__fade-in  hidden--vip">
                        <a href="#entradas" class="emms__cta">COMPRA TU ENTRADA VIP</a>
                    </div>
                </div>
            </section>


            <div class="emms__separator emms__separator--white  hidden--vip">
            </div>


        </div>
        <!-- Benefits Icons -->
        <section class="emms__benefits-icons show--vip">
            <div class="emms__container--lg">
                <div class="emms__benefits-icons__title emms__fade-in">
                    <h2>Más allá de la Agenda: encuentra también en el EMMS E-commerce</h2>
                </div>
                <ul class="emms__benefits-icons__list">
                    <li class="emms__benefits-icons__list__item emms__fade-in">
                        <img src="src/img/icons/iconocapsulas.png" alt="Cápsulas">
                        <p>Cápsulas</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconocursos.png" alt="Cursos">
                        <p>Cursos</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconopromos.png" alt="Promociones">
                        <p>Promociones</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconoinfografia.png" alt="Infografías">
                        <p>Infografías</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconoguia.png" alt="Guías">
                        <p>Guías</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconoebook.png" alt="E-Books">
                        <p>E-Books</p>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Premium content -->
        <section class="emms__premium-content show--vip">
            <div class="emms__container--lg">
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/biblioteca-recursos.png" alt="Biblioteca de recursos">
                </div>
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Accede a la Biblioteca de Recursos ¡gratis!</h2>
                    <p>Descubre contenidos descargables, herramientas y conferencias on-demand que te traen nuestros aliados para potenciar al máximo tu tienda online.</p>
                    <a href="./sponsors-registrado" class="emms__cta sm emms__cta--nd emms__fade-in">INGRESA AHORA</a>
                </div>
            </div>
        </section>

        <!-- Grid -->
        <section class="emms__grid emms__grid--3">
            <div class="emms__container--md">
                <div class="emms__grid__title emms__fade-in">
                    <h2>Descubre la experiencia completa con tu entrada VIP</h2>
                </div>
                <ul class="emms__grid__content emms__fade-in">
                    <li class="emms__grid__item">
                        <div class="emms__grid__item__image">
                            <img src="src/img/conferencias.png" alt="Image">
                        </div>
                        <div class="emms__grid__item__text">
                            <h3>Conferencias</h3>
                            <p>Encuentra a tus máximos referentes internacionales compartiendo ideas y experiencias en un mismo lugar para descubrir las últimas tendencias en Marketing Digital.</p>
                        </div>
                    </li>
                    <li class="emms__grid__item">
                        <div class="emms__grid__item__image">
                            <img src="src/img/entrevistas.png" alt="Image">
                        </div>
                        <div class="emms__grid__item__text">
                            <h3>Entrevistas</h3>
                            <p>Asiste a conversaciones con directivos y profesionales que marcan tendencia con sus negocios para escuchar sus mejores consejos, experiencias y proyecciones del mercado. </p>
                        </div>
                    </li>
                    <li class="emms__grid__item">
                        <div class="emms__grid__item__image">
                            <img src="src/img/casos-de-exito.png" alt="Image">
                        </div>
                        <div class="emms__grid__item__text">
                            <h3>Casos de Éxito</h3>
                            <p>Descubre las estrategias que impulsaron el éxito de las compañías líderes del mundo, de la voz de sus representantes más destacados.</p>
                        </div>
                    </li>
                    <li class="emms__grid__item">
                        <div class="emms__grid__item__image">
                            <img src="src/img/networking.png" alt="Image">
                        </div>
                        <div class="emms__grid__item__text">
                            <h3>Networking</h3>
                            <p>Únete a valiosas conversaciones con los exponentes del sector, conoce nuevos colegas y expande las redes de tu negocio para impulsar su crecimiento.</p>
                        </div>
                    </li>
                    <li class="emms__grid__item">
                        <div class="emms__grid__item__image">
                            <img src="src/img/workshop.png" alt="Image">
                        </div>
                        <div class="emms__grid__item__text">
                            <h3>Workshops</h3>
                            <p>Capacítate en talleres prácticos de asistencia reducida con especialistas destacados en la industria. Interactúa y pon en práctica tus conocimientos.</p>
                        </div>
                    </li>
                    <li class="emms__grid__item">
                        <div class="emms__grid__item__image">
                            <img src="src/img/recursos.png" alt="Image">
                        </div>
                        <div class="emms__grid__item__text">
                            <h3>Recursos</h3>
                            <p>Encuentra E-books, infografías, cápsulas audiovisuales, guías, plantillas y muchos más contenidos descargables y gratuitos en la sección Biblioteca de Recursos.</p>
                        </div>
                    </li>
                </ul>
                <div class="emms__grid__bottom  hidden--vip">
                    <p>Reserva tu pase VIP para acceder a los Workshops y el Networking.
                        ¡Solamente quedan unas pocas plazas! ⏰
                    </p>
                    <a href="#entradas" class="emms__cta emms__fade-in">COMPRA TU ENTRADA</a>
                </div>
            </div>
        </section>



        <!-- Benefits Icons -->
        <section class="emms__benefits-icons hidden--vip">
            <div class="emms__container--lg">
                <div class="emms__benefits-icons__title emms__fade-in">
                    <h2>Más allá de la Agenda: encuentra también en el EMMS E-commerce</h2>
                </div>
                <ul class="emms__benefits-icons__list">
                    <li class="emms__benefits-icons__list__item emms__fade-in">
                        <img src="src/img/icons/iconocapsulas.png" alt="Cápsulas">
                        <p>Cápsulas</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconocursos.png" alt="Cursos">
                        <p>Cursos</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconopromos.png" alt="Promociones">
                        <p>Promociones</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconoinfografia.png" alt="Infografías">
                        <p>Infografías</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconoguia.png" alt="Guías">
                        <p>Guías</p>
                    </li>
                    <li class="emms__benefits-icons__list__item">
                        <img src="src/img/icons/iconoebook.png" alt="E-Books">
                        <p>E-Books</p>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Premium content -->
        <section class="emms__premium-content hidden--vip">
            <div class="emms__container--lg">
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/biblioteca-recursos.png" alt="Biblioteca de recursos">
                </div>
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Accede a la Biblioteca de Recursos ¡gratis!</h2>
                    <p>Descubre contenidos descargables, herramientas y conferencias on-demand que te traen nuestros aliados para potenciar al máximo tu tienda online.</p>
                    <a href="./sponsors-registrado" class="emms__cta sm emms__cta--nd emms__fade-in">INGRESA AHORA</a>
                </div>
            </div>
        </section>

        <div class="hidden--vip">
            <!-- Companies list -->
            <?php include('./src/components/companiesList.php') ?>
        </div>
        <div class="show--vip show--vip--hidden" id="speacial-flikity">
            <!-- Doppler Banner -->
            <?php include_once('././src/components/doppler-academy-banner.php'); ?>
        </div>

    </main>


    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>



    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/newDate.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/dateCounter.js"></script>

</body>

</html>
