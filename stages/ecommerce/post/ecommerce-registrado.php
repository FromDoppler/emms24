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

<body class="emms__ecommerce emms__ecommerce-logueado emms__ecommerce-logueado--post">
    <?php include_once('././src/components/gtm.php'); ?>
    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo emms__header__logo--ecommerce">
                <a href="/"><img src="src/img/logos/logo-emms-ecommerce.png" alt="Emms Ecommerce 2024"></a>
            </div>
            <?php if ($digitalTrendsStates['isLive']) : ?>
                <div class="emms__header__live">
                    <p>¡ESTAMOS EN VIVO EN EMMS DIGITAL TRENDS!</p>
                </div>
            <?php endif ?>
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
        <section class="emms__hero-registration--registered emms__hero-registration--registered--post">
            <div class="emms__container--md">
                <h1 class="emms__fade-top">EMMS E-commerce 2024</h1>
                <p class="emms__fade-in">Revive el evento exclusivo pensado para tu Tienda Online. Descubre las estrategias más poderosas para aumentar tus ventas con las mejores conferencias y workshops. ¡Inspírate
                    y pon manos a la obra ahora!</p>
                <a class="emms__cta hidden--vip" href="#agenda">MIRA LAS CONFERENCIAS</a>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/marquee.php') ?>
        </section>
        <section class="emms__calendar emms__calendar--post " id="agenda">
            <!-- Speakers -->
            <?php include('./src/components/speakersPostRegistrado.php') ?>
            <a class="emms__cta hidden--vip" href="#agenda">COMPRA TU ENTRADA VIP</a>
            <div class="emms__separator emms__separator--white hidden--vip"></div>
        </section>

        <!-- Features -->
        <div class="emms__features hidden--vip">
            <div class="emms__features__item emms__fade-in emms__features__item--reverse">
                <div class="emms__container--md">
                    <div class="emms__features__item__image">
                        <img src="src/img/pasevip.png" alt="Image">
                    </div>
                    <div class="emms__features__item__text">
                        <h3>¿Todavía no eres VIP? Consigue tu entrada ahora para llevarte también</h3>
                        <ul class="emms__features__item__text__list">
                            <li>Acceso de por vida a talleres súper prácticos con los que más saben de Marketing Digital aplicado a E-commerce y Retail</li>
                            <li>Guías y más herramientas para aplicar y multiplicar tus ventas</li>
                        </ul>
                        <p class="emms__features__item__text__price emms__features__item__text__price--live"><em>SOLO POR </em>USD 10</p>
                        <a href="./ecommerce-registrado.php#entradas" class="emms__cta"> COMPRA TU ENTRADA
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Central Video -->
        <section class="emms__centralvideo hidden--vip">
            <div class="emms__centralvideo__head">
                <h2>¡Quedan pocas entradas!</h2>
                <span> Corre a reservar
                    tu entrada VIP si...</span>
            </div>
            <div class="emms__container--lg reverse-mb">
                <ul class="emms__centralvideo__list emms__centralvideo__list--live emms__fade-in">
                    <p class="emms__centralvideo__tag-play emms__centralvideo__tag-play--live">Dale play al video</p>
                    <li>Te has quedado <em>sin ideas para crear contenido</em> </li>
                    <li>Sientes que el crecimiento de tu E-commerce <em> se ha estancado</em> </li>
                    <li>Crees que solo con <em>hablar de tu producto alcanza</em></li>
                    <li>No logras hacer que los visitantes de tu tienda <em>terminen el checkout</em> </li>
                    <li>Tus clientes <em>no vuelven a comprarte</em> </li>
                    <li>O tienes <em>muchos carritos abandonado </em> </li>

                    <a href="#entradas" class="emms__cta">HAZTE VIP </a>
                </ul>
                <div class="emms__centralvideo__video lg emms__fade-in">
                    <video src="src/img/EmmsEcommerceNew.mp4" controls></video>
                </div>
            </div>
        </section>

        <div class="emms__bg-dark-gradient--2 hidden--vip">
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
                                <a class="emms__cta inactive"> YA TE HAS REGISTRADO</a>
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
        <section class="emms__premium-content">
            <div class="emms__container--lg">
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/biblioteca-recursos.png" alt="Biblioteca de recursos">
                </div>
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Accede a la Biblioteca de Recursos ¡gratis!</h2>
                    <p>Descubre contenidos descargables, herramientas y conferencias on-demand que te traen para que puedas potenciar al máximo tu tienda online.</p>
                    <a href="./sponsors" class="emms__cta sm emms__cta--nd emms__fade-in">INGRESA AHORA</a>
                </div>
            </div>
        </section>

        <!-- Companies list -->
        <?php include('./src/components/companiesList.php') ?>

        <!-- Doppler Banner -->
        <?php include_once('././src/components/doppler-academy-banner.php'); ?>

    </main>


    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>

    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/certificateModal.js"></script>

</body>

</html>
