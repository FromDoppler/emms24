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
    </script>
</head>

<body class="emms__ecommerce emms__ecommerce--during">
    <?php include_once('././src/components/gtm.php'); ?>
    <!-- Header -->
    <?php if ($ecommerceStates['isLive']) : ?>
        <div class="emms__hellobar emms__hellobar--counter">
            <div class="emms__hellobar__container emms__hellobar__container--during emms__fade-in">
                <p><strong>📢 ¡Ya estamos en vivo! 📢 ¿Todavía no te has registrado? Súmate gratis.</strong><a href="#registro">ÚNETE AHORA</a></p>
            </div>
        </div>
    <?php endif ?>
    <?php if ($ecommerceStates['isTransition']) : ?>
        <div class="emms__hellobar emms__hellobar--counter">
            <div class="emms__hellobar__container emms__hellobar__container--during emms__fade-in">
                <p><strong>¡Queda más EMMS E-commerce! ¿Aún no te has registrado? Súmate gratis para unirte al día 2.</strong><a href="#registro">ÚNETE AHORA</a></p>
            </div>
        </div>
    <?php endif ?>
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
                    <li class="emms__header__nav__menu__dropdown"><a href="./ediciones-anteriores">Qué es el EMMS</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="./ediciones-anteriores#sobre-emms">Sobre el EMMS</a></li>
                            <li><a href="./ediciones-anteriores#ediciones-anteriores">Revive ediciones anteriores</a></li>
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

        <!-- Hero with form-->
        <section class="emms__hero-registration" id="registro">
            <div class="emms__hero-registration__columns">
                <div class="emms__hero-registration__text emms__hero-registration__text--live emms__fade-in">
                    <?php if ($ecommerceStates['isLive']) : ?>
                        <h2><em><span>EN VIVO</span> - EVENTO ONLINE Y GRATUITO</em></h2>
                    <?php endif ?>
                    <?php if ($ecommerceStates['isTransition']) : ?>
                        <h2><em><span>PREPÁRATE PARA EL DÍA 2</span> - EVENTO ONLINE Y GRATUITO</em></h2>
                    <?php endif ?>
                    <h1>
                        <span>¡Ya empezó el</span>
                        <span>EMMS</span>
                        <span>E-commerce </span>
                        <span>2024!</span>
                    </h1>
                    <p>Inspírate y aprende con un evento exclusivo pensado para tu Tienda Online. No te lo pierdas, ¡ya comenzó! </p>
                    <ul class="emms__hero-registration__text__checklist">
                        <li>SPEAKERS INTERNACIONALES</li>
                        <li>HERRAMIENTAS Y RECURSOS</li>
                        <li>WORKSHOP Y NETWORKING</li>
                    </ul>
                </div>
                <div class="emms__hero-registration__form emms__fade-in" id="registro">
                    <!-- Form -->
                    <div class="emms_switch__container">
                        <span class="emms_switch__container__switch">
                            <input type="checkbox" name="swith" id="swith" checked>
                            <label for="switch"></label>
                        </span>
                    </div>
                    <form class="emms__form emms__fade-in" novalidate autocomplete="off" id="ecommerceForm">
                        <ul class="emms__form__field-group">
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="email">Email *</label>
                                    <input type="email" name="email" id="email" placeholder="&iexcl;No olvides usar @!" class="email required" autocomplete="off">
                                </div>
                            </li>
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="name">Nombre *</label>
                                    <input type="text" name="name" id="name" placeholder="Tu nombre" class="required error-name nameLength" autocomplete="off">
                                </div>
                            </li>
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="company">Empresa *</label>
                                    <input type="text" name="company" id="company" placeholder="Nombre de tu empresa o negocio" class="email required" autocomplete="off">
                                </div>
                            </li>
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="jobPosition">Cargo *</label>
                                    <select class="required" name="jobPosition" id="jobPosition" autocomplete="off">
                                        <option disabled selected value>Elige un cargo</option>
                                        <option value="CEO / Director General">CEO / Director General</option>
                                        <option value="CMO / Marketing Manager">CMO / Marketing Manager</option>
                                        <option value="Gerente de Ventas">Gerente de Ventas</option>
                                        <option value="E-commerce Manager">E-commerce Manager</option>
                                        <option value="Project Manager / Líder de equipo">Project Manager / Líder de equipo</option>
                                        <option value="Especialista / Consultor en Marketing">Especialista / Consultor en Marketing Digital</option>
                                        <option value="Asistente de Marketing / Comunicación / Ventas">Asistente de Marketing / Comunicación / Ventas</option>
                                        <option value="Ejecutivo/a de Cuentas">Ejecutivo/a de Cuentas</option>
                                        <option value="Redactor/a de contenidos / Copywriter">Redactor/a de contenidos / Copywriter</option>
                                        <option value="Diseñador/a">Diseñador/a</option>
                                        <option value="Pasante / interno / trainee">Pasante / interno / trainee</option>
                                        <option value="Estudiante">Estudiante</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </li>
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="telefono">Teléfono</label>
                                    <input type="tel" name="phone" id="phone" class="phone phone-number" autocomplete="off">
                                </div>
                            </li>
                        </ul>
                        <ul class="emms__form__field-group">
                            <li class="emms__form__field-item emms__form__field-item__checkbox">
                                <div class="holder">
                                    <input name="privacy" type="checkbox" id="acepto-politicas" value="true" class="required check acept-politic"><span class="checkmark"></span><label for="acepto-politicas">
                                        Acepto la Pol&iacute;tica de Privacidad de Doppler *
                                    </label>
                                </div>
                            </li>
                            <li class="emms__form__field-item emms__form__field-item__checkbox">
                                <div class="holder">
                                    <input name="promotions" type="checkbox" id="acepto-promociones" value="true"><span class="checkmark"></span><label for="acepto-promociones">
                                        Acepto recibir promociones de Doppler</label>
                                </div>
                            </li>
                        </ul>
                        <div class="emms__form__btn">
                            <button class="emms__cta emms__cta--during" id="register-button" type="button"><span class="button__text">ACCEDE AL VIVO</span></button>
                        </div>
                        <div class="emms__form__legal close">
                            <a class="emms__form__legal__btn" id="legalBtn">Información básica sobre privacidad </a>
                            <p>Doppler te informa que los datos de car&aacute;cter personal que nos proporciones al rellenar el presente formulario ser&aacute;n tratados por Doppler LLC como responsable de esta Web.<br>
                                <strong>Finalidad: </strong>Gestionar el alta de registro a la capacitación, enviarte material vinculado a la misma e información sobre Doppler así como nuestros futuros eventos o capacitaciones.<br>
                                <strong>Legitimaci&oacute;n: </strong>Consentimiento del interesado. <br>
                                <strong>Destinatarios: </strong>Tus datos ser&aacute;n guardados por Doppler y los co-organizadores del evento, Unbounce como empresa de creaci&oacute;n de Landing Pages, DigitalOcean como empresa de hosting y Zapier como herramienta de integraci&oacute;n de apps.<br>
                                <strong>Informaci&oacute;n adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank" rel="noopener">Pol&iacute;tica de Privacidad</a> de Doppler encontrar&aacute;s informaci&oacute;n adicional
                                sobre la recopilaci&oacute;n y el uso de su informaci&oacute;n personal por parte de Doppler, incluida
                                informaci&oacute;n sobre acceso, conservaci&oacute;n, rectificaci&oacute;n, eliminaci&oacute;n, seguridad,
                                transferencias
                                transfronterizas y otros temas. <br>
                            </p>
                        </div>
                    </form>
                    <form class="emms__form  emms__fade-in dp--none alreadyAccountForm" novalidate autocomplete="off" id="alreadyAccountForm">
                        <h2>Ingresa tu email</h2>
                        <ul class="emms__form__field-group">
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="email">Email *</label>
                                    <input type="email" name="email" id="email" placeholder="&iexcl;No olvides usar @!" class="email required" autocomplete="off">
                                </div>
                            </li>
                        </ul>
                        <div class="emms__form__btn">
                            <button class="emms__cta emms__cta--during" id="register-button" type="submit"><span class="button__text">ACCEDE AL VIVO</span></button>
                        </div>
                    </form>
                    <!-- End form -->
                </div>
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


        <!-- Calendar -->
        <section class="emms__calendar" id="agenda">
            <div class="emms__container--lg">
                <?php if ($ecommerceStates['isPre']) : ?>
                    <div class="emms__calendar__title emms__fade-in">
                        <h2>Agenda EMMS E-commerce 2024</h2>
                        <p>La transmisión comienza a las 10:30hs a.m. (ARG). Si no eres de allí o estarás en otro lado, <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+E-commerce+2024+%7C+D%C3%ADa+1&iso=20240502T1030&p1=51&ah=6"> mira el horario local</a></p>
                    </div>
                <?php endif ?>

                <?php if ($ecommerceStates['isTransition'] || $ecommerceStates['isLive']) : ?>
                    <div class="emms__calendar__title emms__fade-in">
                        <h2>Agenda EMMS E-commerce 2024</h2>
                        <p>Descubre aquí los speakers internacionales y las actividades exclusivas que te esperan en esta edición.</p>
                    </div>
                <?php endif ?>

                <!-- Speakers -->
                <?php include('./src/components/speakers.php') ?>
                <!-- End list -->
                <div class="emms__calendar__bottom emms__fade-in">
                    <a href="#registro" class="emms__cta">REGÍSTRATE GRATIS</a>
                </div>
            </div>
        </section>

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



        <!-- Benefits Carousel -->
        <section class="emms__benefits-carousel  emms__benefits-carousel--live emms__bg-section-3">
            <!-- Central Video -->
            <section class="emms__centralvideo emms__centralvideo--live emms__centralvideo--dark">
                <div class="emms__container--lg">
                    <div class="emms__centralvideo__title emms__fade-in">
                        <h2>¡Llegó el mayor evento hispano de E-commerce! Únete ahora, aún estás a tiempo</h2>
                        <p>Conoce en este video qué hace al EMMS E-commerce
                            el lugar ideal para capacitarte y aprender cómo escalar
                            tu tienda junto a los líderes del sector.</p>
                        <a href="#registro" class="emms__cta">ÚNETE AL VIVO</a>
                    </div>
                    <div class="emms__centralvideo__video emms__fade-in">
                        <video src="src/img/EMMS-EcommerceHome.mp4" controls></video>
                    </div>
                </div>
            </section>
            <div class="emms__container--lg">
                <div class="emms__benefits-carousel__title emms__fade-in">
                    <h2>Regístrate al EMMS y accede a +25 beneficios exclusivos</h2>
                    <p>¿Sabías que, por ser parte del evento, podrás aprovechar descuentos en tus plataformas favoritas, becas, licencias gratuitas en herramientas y mucho más?</p>
                </div>
                <ul class="emms__benefits-carousel__container emms__fade-in main-carousel" data-flickity='{"wrapAround": "true"}'>
                    <li class="emms__benefits-carousel__item">
                        <div class="emms__benefits-carousel__item__content">
                            <div class="emms__benefits-carousel__item__image">
                                <img src="src/img/benefits/beneficio-mochila.png" alt="Beneficio dscuento mochilas">
                            </div>
                            <div class="emms__benefits-carousel__item__text">
                                <h3>DESCUENTO DEL 15%</h3>
                                <p>En mochilas (solamente válido para modelos Luxury y Elite)</p>
                            </div>
                        </div>
                    </li>
                    <li class="emms__benefits-carousel__item">
                        <div class="emms__benefits-carousel__item__content">
                            <div class="emms__benefits-carousel__item__image">
                                <img src="src/img/benefits/beneficio-cursos.png" alt="Beneficio cursos">
                            </div>
                            <div class="emms__benefits-carousel__item__text">
                                <h3>MEDIA BECA</h3>
                                <p>En curso de Community Manager</p>
                            </div>
                        </div>
                    </li>
                    <li class="emms__benefits-carousel__item">
                        <div class="emms__benefits-carousel__item__content">
                            <div class="emms__benefits-carousel__item__image">
                                <img src="src/img/benefits/beneficio-pack-mentoria.png" alt="Beneficio 50% pack mentoria">
                            </div>
                            <div class="emms__benefits-carousel__item__text">
                                <h3>DESCUENTO DEL 50%</h3>
                                <p>En el primer pack de mentorías</p>
                            </div>
                        </div>
                    </li>
                    <li class="emms__benefits-carousel__item">
                        <div class="emms__benefits-carousel__item__content">
                            <div class="emms__benefits-carousel__item__image">
                                <img src="src/img/benefits/beneficios-curso-algoritmos.png" alt="Beneficio 25% curso algoritmos">
                            </div>
                            <div class="emms__benefits-carousel__item__text">
                                <h3>DESCUENTO DEL 25%</h3>
                                <p>En el curso online "Estrategias digitales a prueba de algoritmos"</p>
                            </div>
                        </div>
                    </li>
                    <li class="emms__benefits-carousel__item">
                        <div class="emms__benefits-carousel__item__content">
                            <div class="emms__benefits-carousel__item__image">
                                <img src="src/img/benefits/beneficio-ebook.png" alt="Beneficio ebook gratuito">
                            </div>
                            <div class="emms__benefits-carousel__item__text">
                                <h3>REGALO DEL E-BOOK</h3>
                                <p>"Cómo aumentar tus ventas mediante Whatsapp" de Swann Marketing</p>
                            </div>
                        </div>
                    </li>
                    <li class="emms__benefits-carousel__item">
                        <div class="emms__benefits-carousel__item__content">
                            <div class="emms__benefits-carousel__item__image">
                                <img src="src/img/benefits/beneficio-swann.png" alt="Beneficio 10% Swann Marketing">
                            </div>
                            <div class="emms__benefits-carousel__item__text">
                                <h3>DESCUENTO DEL 10%</h3>
                                <p>En capacitaciones de la academia
                                    de Swann Marketing</p>
                            </div>
                        </div>
                    </li>
                    <li class="emms__benefits-carousel__item">
                        <div class="emms__benefits-carousel__item__content">
                            <div class="emms__benefits-carousel__item__image">
                                <img src="src/img/benefits/beneficio-plantilla.png" alt="Beneficio % de descuento">
                            </div>
                            <div class="emms__benefits-carousel__item__text">
                                <h3>DESCUENTO DEL 30%</h3>
                                <p>En la plantilla Acción Estratégica PASS</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="emms__benefits-carousel__bottom">
                    <a href="#registro" class="emms__cta">APÚNTATE GRATIS</a>
                </div>
            </div>
        </section>

        <!-- Companies list -->
        <?php include('./src/components/companiesList.php') ?>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>


    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>
    <script src="src/<?= VERSION ?>/js/dateCounter.js"></script>
    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/mediaPartners.js"></script>
    <script src="src/<?= VERSION ?>/js/homeEcommerce.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/newDate.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/vendors/intlTelInput.min.js"></script>
    <?php include_once('././src/components/intellInput.php'); ?>
</body>

</html>
