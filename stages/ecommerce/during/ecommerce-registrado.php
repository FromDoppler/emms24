<?php
require_once('././src/components/cacheSettings.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('././src/components/head-ecommerce.php'); ?>
    <?php include_once('././src/components/head.php'); ?>
    <script type="module">
        import {
            hiddenOrShowUserUI
        } from './src/<?= VERSION ?>/js/user.js';
        hiddenOrShowUserUI('digital-trends');
    </script>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado emms__ecommerce-logueado--during">
    <?php include_once('././src/components/gtm.php'); ?>
    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo emms__header__logo--ecommerce">
                <a href="/"><img src="src/img/logos/logo-emms-ecommerce.png" alt="Emms Ecommerce 2024"></a>
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
        <section class="emms__hero-conference emms__hero-conference--chat">
            <div class="emms__container--lg">
                <?php if (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "youtube")) : ?>
                    <h1 class="emms__fade-in">EN VIVO</h1>
                    <div class="emms__hero-conference__video emms__fade-in">
                        <div class="emms__cropper-cont-16-9">
                            <div class="emms__cropper-cont ">
                                <div class="emms__cropper-cont-interno">
                                    <iframe src="https://www.youtube.com/embed/<?= $duringDaysArray[$dayDuring]['youtube'] ?>?rel=0&autoplay=1&mute=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <small>Recuerda activar el sonido 🔊</small>
                    </div>
                    <div class="emms__hero-conference__aside emms__fade-in emms__hero-conference__video--chat">
                        <iframe src="https://www.youtube.com/live_chat?v=<?= $duringDaysArray[$dayDuring]['youtube'] ?>&embed_domain=<?= $_SERVER['HTTP_HOST'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "twitch")) : ?>
                    <h1 class="emms__fade-in">EN VIVO</h1>
                    <div class="emms__hero-conference__video emms__fade-in">
                        <div class="emms__cropper-cont-16-9">
                            <div class="emms__cropper-cont ">
                                <div class="emms__cropper-cont-interno">
                                    <iframe src="https://player.twitch.tv/?channel=<?= $duringDaysArray[$dayDuring]['twitch'] ?>&parent=<?= $_SERVER['HTTP_HOST'] ?>"></iframe>
                                </div>
                            </div>
                        </div>
                        <small>Recuerda activar el sonido 🔊</small>
                    </div>
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "twitch-migrate")) : ?>
                    <img src="src/img/banner-migrate-twitch.png" alt="Se migró a Twitch" class="banner">
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "technical-problems")) : ?>
                    <img src="src/img/banner-technical-error.png" alt="Errores técnicos" class="banner">
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-off")) : ?>
                    <div class="emms__hero-conference__video emms__hero-conference__video--transition emms__fade-in">
                        <h2>Prepárate, ¡se viene el día 2 del EMMS E-commerce 2023!</h2>
                        <small>Recuerda que podrás acceder a todas las grabaciones de las Conferencias una vez finalizado el evento desde la <a href="#agenda">Agenda</a>.</small>
                    </div>
                    <div class="emms__hero-conference__aside emms__hero-conference__aside--transition emms__fade-in">
                        <p>Mientras te preparas para el último día, accede a todo el contenido exclusivo que hemos preparado para ti: E-books gratuitos, cápsulas audiovisuales, guías, plantillas, beneficios, descuentos ¡y mucho más!</p>
                        <a class="emms__cta" href="/sponsors-registrado">ACCEDE AHORA</a>
                    </div>
                <?php endif; ?>
                <p class="emms__hero-conference__certificate emms__fade-in">Descarga <a data-target="certificateModal" data-toggle="emms__certificate-modal">aquí</a> tu Certificado de Asistencia y compártelo en Redes Sociales usando el Hashtag #EMMSECOMMERCE :)</p>
            </div>
        </section>

        <!-- Certificate modal -->
        <div id="certificateModal" class="emms__certificate-modal">
            <div class="emms__certificate-modal__window">
                <h3>¡Estás a un paso de descargar tu Certificado de Asistencia!</h3>
                <p>Ingresa tu nombre y apellido para descargarlo ahora 🙂</p>
                <form id="certificateForm">
                    <input type="text" placeholder="Nombre y apellido" name="fullname">
                    <span class="certificateError">¡Ouch! Debes ingresar al menos 2 caracteres.</span>
                    <a class="emms__cta" type="button" id="certificateEcommerceCta"><span class="button__text">QUIERO DESCARGARLO</span></a>
                    <button class="emms__certificate-modal__window__close" data-dismiss="emms__certificate-modal"></button>
                </form>
            </div>
        </div>

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

        <!-- Calendar -->
        <section class="emms__calendar" id="agenda">
            <div class="emms__container--lg">
                <div class="emms__calendar__title emms__fade-in">
                    <h2>Agenda EMMS E-commerce 2024</h2>
                    <p>La transmisión comienza a las 10:30hs a.m. (ARG). Si no eres de allí o estarás en otro lado, <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+E-commerce+2024+%7C+D%C3%ADa+1&iso=20240402T1030&p1=51&ah=6"> mira el horario local</a></p>
                </div>
                <!-- Speakers -->
                <?php include('./src/components/speakers.php') ?>
                <!-- End list -->
                <div class="emms__calendar__bottom emms__fade-in">
                    <a href="#registro" class="emms__cta">REGÍSTRATE GRATIS</a>
                </div>
            </div>
        </section>
        <!-- Separator -->
        <div class="emms__separator eventHiddenElements"></div>


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


        <!-- Doppler Banner -->
        <?php include_once('././src/components/doppler-academy-banner.php'); ?>

    </main>


    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>
    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/certificateModal.js"></script>
    <script src="src/<?= VERSION ?>/js/newDate.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/certificate/certificateEcommerce.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/dateCounter.js"></script>
    <script src="src/<?= VERSION ?>/js/newDate.js" type="module"></script>

</body>

</html>
