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
            toggleVipEcommerceElements
        } from './src/<?= VERSION ?>/js/toggleVipElements.js';

        toggleVipEcommerceElements();
    </script>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado emms__ecommerce-logueado--during">
    <?php include_once('././src/components/gtm.php'); ?>
    <!-- Header -->
    <?php if ($ecommerceStates['isLive']) : ?>
        <div class="emms__hellobar emms__hellobar--counter  hidden--vip">
            <div class="emms__hellobar__container emms__hellobar__container--during emms__fade-in">
                <p><strong>🎫 ¡Quedan pocas! Consigue tu entrada VIP para sumarte a las actividades exclusivas</strong><a href="#entradas">HAZTE VIP</a></p>
            </div>
        </div>
    <?php endif ?>
    <!-- Header -->
    <?php if ($ecommerceStates['isLive']) : ?>
        <div class="emms__hellobar emms__hellobar--counter show--vip">
            <div class="emms__hellobar__container emms__hellobar__container--during emms__fade-in">
                <p><strong>⭐ ¡No te pierdas las actividades VIP! Encuentra los links en la agenda para unirte a las salas.</strong><a href="#agenda">MIRA LA AGENDA</a></p>
            </div>
        </div>
    <?php endif ?>
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
        <section class="emms__hero-conference emms__hero-conference--live emms__hero-conference--chat">
            <div class="emms__container--lg">
                <?php if (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "youtube")) : ?>
                    <h1 class="emms__fade-in">¡Estamos en vivo en el #EMMS2024!</h1>
                    <div class="emms__hero-conference__video emms__fade-in">
                        <div class="emms__cropper-cont-16-9">
                            <div class="emms__cropper-cont ">
                                <div class="emms__cropper-cont-interno">
                                    <iframe src="https://www.youtube.com/embed/<?= $duringDaysArray[$dayDuring]['youtube'] ?>?rel=0&autoplay=1&mute=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="emms__hero-conference__aside emms__fade-in emms__hero-conference__video--chat">
                        <iframe src="https://www.youtube.com/live_chat?v=<?= $duringDaysArray[$dayDuring]['youtube'] ?>&embed_domain=<?= $_SERVER['HTTP_HOST'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "twitch")) : ?>
                    <h1 class="emms__fade-in">¡Estamos en vivo en el #EMMS2024!</h1>
                    <div class="emms__hero-conference__video emms__fade-in">
                        <div class="emms__cropper-cont-16-9">
                            <div class="emms__cropper-cont ">
                                <div class="emms__cropper-cont-interno">
                                    <iframe src="https://player.twitch.tv/?channel=<?= $duringDaysArray[$dayDuring]['twitch'] ?>&parent=<?= $_SERVER['HTTP_HOST'] ?>"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "twitch-migrate")) : ?>
                    <img src="src/img/banner-migrate-twitch.png" alt="Se migró a Twitch" class="banner">
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on") && ($settings_phase['transmission'] === "technical-problems")) : ?>
                    <img src="src/img/banner-technical-error.png" alt="Errores técnicos" class="banner">
                <?php elseif (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-off")) : ?>
                    <h2>PREPÁRATE PARA EL DÍA 2</h2>
                    <h1 class="emms__fade-in">¡Pronto seguimos con más EMMS E-commerce</h1>
                    <div class="emms__hero-conference__video emms__hero-conference__video--transition emms__fade-in">
                        <img src="../../../../../src/img/placa.png" alt="Preparata para el día 2!">
                    </div>
                    <div class="emms__hero-conference__aside emms__hero-conference__aside--transition emms__fade-in hidden--vip">
                        <p>Recuerda <a href="#entradas">reservar tu Entrada VIP</a> para acceder a todos los Workshops y
                            a sus grabaciones una vez finalizado
                            el evento.
                        </p>
                        <p> Además, mientras te alistas para otro emocionante día, en la <a href="/sponsors-registrado"> Biblioteca de Recursos</a> podrás disfrutar de E-books, material audiovisual, guías, beneficios en tus herramientas preferidas y mucho más contenido preparado por nuestros aliados especialmente para tí.</p>
                        <a class="emms__cta" href="/sponsors-registrado"> DESCÚBRELA AHORA</a>
                    </div>
                    <div class="emms__hero-conference__aside emms__hero-conference__aside--transition emms__fade-in show--vip">
                        <p>Mientras te alistas para otro emocionante día, en la<a href="/sponsors-registrado"> Biblioteca de Recursos</a> podrás disfrutar de E-books, material audiovisual, guías, beneficios en tus herramientas preferidas y mucho más contenido preparado por nuestros aliados especialmente para tí.</p>
                        <a class="emms__cta" href="/sponsors-registrado"> DESCÚBRELA AHORA</a>
                    </div>
                <?php endif; ?>
                <?php if (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on")) : ?>
                    <div class="live--certificate--container">
                        <div class="certificate--modal-info">
                            <img src=".../../../../../src/img/certificate-ribbon.png" alt="Emoji liston">
                            <p><a data-target="certificateModal" data-toggle="emms__certificate-modal">Descarga aquí </a> tu Certificado de Asistencia y compártelo en Redes Sociales utilizando el Hashtag #EMMS2024</p>
                        </div>
                        <div class="live--info-container">
                            <h6>IMPORTANTE :</h6>
                            <div class="bubble__live_info">
                                <img src="../../../../../src/img/icons/volume--icon.png" alt="Icono audio">
                                <span>Activa el audio</span>
                            </div>
                            <div class="bubble__live_info">
                                <img src="../../../../../src/img/icons/share--icon.png" alt="Icono share">
                                <span>Comparte en redes</span>
                            </div>
                            <div class="bubble__live_info">
                                <img src="../../../../../src/img/icons/expand--icon.png" alt="Icono zoom video">
                                <span>Reprodúcelo en 720px</span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-off")) : ?>
                    <div class="live--certificate--container">
                        <div class="certificate--modal-info certificate--modal-info--live-off">
                            <img src=".../../../../../src/img/certificate-ribbon.png" alt="Emoji liston">
                            <div>
                                <p>DESCARGA<a data-target="certificateModal" data-toggle="emms__certificate-modal"> AQUÍ </a>TU CERTIFICADO DE ASISTENCIA</p><br>
                                <span> Compártelo en Redes Sociales utilizando el Hashtag </span>
                                <br>
                                <p><b>#EMMSECOMMERCE</b> :)</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
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

        <!-- Certificate modal -->
        <div id="certificateModal" class="emms__certificate-modal">
            <div class="emms__certificate-modal__window">
                <img src="../../../src/img/certificate-image.png" alt="Imagen descarga certificado">
                <h3>¡Estás a un paso de descargar tu Certificado de Asistencia!</h3>
                <p>Ingresa tu nombre y apellido para descargarlo ahora 🙂</p>
                <form id="certificateForm">
                    <input type="text" placeholder="Ingresa aquí tu Nombre y Apellido" name="fullname">
                    <span class="certificateError">¡Ouch! Debes ingresar al menos 2 caracteres.</span>
                    <a class="emms__cta" type="button" id="certificateEcommerceCta"><span class="button__text">DESCÁRGALO AQUI</span></a>
                    <button class="emms__certificate-modal__window__close" data-dismiss="emms__certificate-modal"></button>
                </form>
            </div>
        </div>


        <!-- Calendar -->
        <section class="emms__calendar emms__calendar--live" id="agenda">
            <div class="emms__container--lg">
                <div class="emms__calendar__title emms__fade-in">
                    <h2>Agenda EMMS E-commerce 2024</h2>
                    <p>Descubre aquí los speakers internacionales y las actividades exclusivas que te esperan en esta edición. </p>
                </div>
                <!-- Speakers -->
                <?php include('./src/components/speakers.php') ?>
                <!-- End list -->
                <div class="emms__calendar__bottom emms__fade-in   hidden--vip">
                    <a href="#entradas" class="emms__cta">COMPRA TU ENTRADA VIP</a>
                </div>
            </div>
            <div class="emms__separator emms__separator--white emms__separator--white--live eventHiddenElements"></div>
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
                        <p class="emms__features__item__text__price emms__features__item__text__price--live"><em>SOLO POR </em>USD 10</p>
                        <a href="#entradas" class="emms__cta"> COMPRA TU ENTRADA AHORA
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

                    <a href="#entradas" class="emms__cta">HAZTE VIP AHORA</a>
                </ul>
                <div class="emms__centralvideo__video lg emms__fade-in">
                    <video src="src/img/EmmsEcommerceNew.mp4" controls></video>
                </div>
            </div>
        </section>

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
        <section class="emms__benefits-icons">
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
        <section class="emms__premium-content emms__premium-content--live">
            <div class="emms__container--lg">
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/biblioteca-recursos.png" alt="Biblioteca de recursos">
                </div>
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Accede a la Biblioteca de Recursos ¡gratis!</h2>
                    <p>Descubre contenidos descargables, herramientas y conferencias on-demand que te traen nuestros aliados para que puedas potenciar al máximo tu negocio.</p>
                    <a href="./sponsors" class="emms__cta sm emms__cta--nd emms__fade-in">INGRESA AHORA</a>
                </div>
            </div>
        </section>
        <div class="show--vip show--vip--hidden" id="speacial-flikity">
            <?php if (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-off")) : ?>
                <!-- Doppler Banner -->
                <?php include_once('././src/components/doppler-academy-banner.php'); ?>
            <?php endif; ?>
        </div>
        <!-- Companies list -->
        <?php include('./src/components/companiesList.php') ?>

    </main>


    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>
    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/certificateModal.js"></script>
    <script src="src/<?= VERSION ?>/js/mediaPartners.js"></script>
    <script src="src/<?= VERSION ?>/js/newDate.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/certificate/certificateEcommerce.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/dateCounter.js"></script>
    <script src="src/<?= VERSION ?>/js/newDate.js" type="module"></script>

</body>

</html>
