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

<body class="emms__ecommerce emms__ecommerce--during">
    <?php include_once('././src/components/gtm.php'); ?>
    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo emms__header__logo--ecommerce">
                <a href="/"><img src="src/img/logos/logo-emms-ecommerce.png" alt="Emms Ecommerce 2023"></a>
            </div>
            <?php if (($settings_phase['event'] === "ecommerce24") && ($settings_phase['during'] === 1) && ($settings_phase['transition'] === "live-on")) : ?>
                <div class="emms__header__live">
                    <p>¡ESTAMOS EN VIVO EN EMMS E-COMMERCE!</p>
                </div>
            <?php endif; ?>
            <a class="emms__header__nav--mb" id="btn-burger"></a>
            <nav class="emms__header__nav emms__header__nav--hidden" id="nav-mb">
                <ul class="emms__header__nav__menu">
                    <li><a href="/">home</a></li>
                    <li class="emms__header__nav__menu__dropdown"><a href="#" class="active">e-commerce</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="#agenda">AGENDA</a></li>
                            <li><a href="#aliados">ALIADOS</a></li>
                        </ul>
                    </li>
                    <li><a href="/digital-trends">digital trends</a></li>
                    <li><a href="/sponsors">contenido exclusivo</a></li>
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
        <section class="emms__hero-registration eventHiddenElements" id="registro">
            <div class="emms__hero-registration__columns">
                <div class="emms__hero-registration__text emms__fade-in">
                    <p class="emms__hero-registration__text__live">EN VIVO</p>
                    <h1><em>EVENTO ONLINE Y GRATUITO - 16 Y 17 DE MAYO</em> EMMS E-commerce 2023</h1>
                    <p>Inspírate y aprende con un evento exclusivo pensado para tu Tienda Online. No te lo pierdas, ¡ya comenzó! </p>
                    <ul class="emms__hero-registration__text__checklist">
                        <li>SPEAKERS INTERNACIONALES</li>
                        <li>TENDENCIAS E INNOVACIÓN</li>
                        <li>HERRAMIENTAS Y RECURSOS</li>
                    </ul>
                </div>
                <div class="emms__hero-registration__form emms__fade-in">
                    <!-- Form -->
                    <form class="emms__form" id="ecommerceForm" novalidate autocomplete="off">
                        <ul class="emms__form__field-group">
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="name">Nombre *</label>
                                    <input type="text" name="name" id="name" placeholder="Tu nombre" class="required error-name nameLength" autocomplete="off">
                                </div>
                            </li>
                            <li class="emms__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="email">Email *</label>
                                    <input type="email" name="email" id="email" placeholder="&iexcl;No olvides usar @!" class="email required" autocomplete="off">
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
                            <button class="emms__cta" id="register-button" type="button"><span class="button__text">ACCEDE GRATIS</span></button>
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
                    <!-- End form -->
                </div>
            </div>
            <div class="emms__hero-registration__bottom emms__fade-in">
                <p>IA >> AUTOMATION MARKETING >> UX >> CRO >> MARKETPLACES >> SEO >> RETARGETING >> SOCIAL SELLING >> EMAIL MARKETING >> ESTRATEGIAS DE VENTA >></p>
                <p>IA >> AUTOMATION MARKETING >> UX >> CRO >> MARKETPLACES >> SEO >> RETARGETING >> SOCIAL SELLING >> EMAIL MARKETING >> ESTRATEGIAS DE VENTA >></p>
            </div>
        </section>

        <!-- Hero without form-->
        <section class="emms__hero-registration emms__hero-registration--noform eventHiddenElements eventShowElements" id="registro">
            <div class="emms__hero-registration__text">
                <h1>¡Estás a un paso de acceder al EMMS Ecommerce!</h1>
                <p>Inspírate y aprende cómo potenciar tu Tienda Online en un evento exclusivo para tu industria, 100% gratis. Revisa en la <a href="#agenda">agenda</a> los referentes internacionales que nos acompañan.</p>
                <button type="button" class="emms__cta ecommerceBtn"><span class="button__text">ACCEDE AL VIVO</span></button>
            </div>
            <div class="emms__hero-registration__bottom emms__fade-in">
                <p>IA >> AUTOMATION MARKETING >> UX >> CRO >> MARKETPLACES >> SEO >> RETARGETING >> SOCIAL SELLING >> EMAIL MARKETING >> ESTRATEGIAS DE VENTA >></p>
                <p>IA >> AUTOMATION MARKETING >> UX >> CRO >> MARKETPLACES >> SEO >> RETARGETING >> SOCIAL SELLING >> EMAIL MARKETING >> ESTRATEGIAS DE VENTA >></p>
            </div>
        </section>


        <!-- Calendar -->
        <section class="emms__calendar" id="agenda">
            <div class="emms__container--lg">
                <div class="emms__calendar__title emms__fade-in">
                    <h2>Agenda EMMS E-commerce 2023</h2>
                </div>
                <!-- Speakers -->
                <?php include('./src/components/speakers.php') ?>
                <!-- End list -->
                <div class="emms__calendar__bottom emms__fade-in eventHiddenElements">
                    <p>Recuerda que al finalizar el evento podrás acceder a los videos de todas las conferencias.</p>
                    <a href="#registro" class="emms__cta">ACCEDE AL VIVO</a>
                </div>
                <div class="emms__calendar__bottom emms__fade-in eventHiddenElements eventShowElements">
                    <p>Recuerda que al finalizar el evento podrás acceder a los videos de todas las conferencias.</p>
                    <a class="emms__cta ecommerceBtn"><span class="button__text">ACCEDE AL VIVO</span></a>
                </div>
            </div>
            <div class="emms__background-b"></div>
            <div class="emms__background-c"></div>
        </section>


        <!-- Premium content -->
        <section class="emms__premium-content emms__premium-content--dark">
            <div class="emms__container--lg">
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Desbloquea Contenido Premium ¡gratis! </h2>
                    <p>Descubre <strong>recursos descargables, herramientas y conferencias on-demand</strong> que te traen nuestros aliados para que puedas ponerlos en práctica y potenciar tu E-commerce.</p>
                    <a href="./sponsors" class="emms__cta emms__fade-in">ACCEDE AHORA</a>
                </div>
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/download--locked.png" alt="Contenido Premium">
                </div>
            </div>
        </section>


        <!-- Central Video -->
        <section class="emms__centralvideo">
            <div class="emms__background-b"></div>
            <div class="emms__background-a"></div>
            <div class="emms__container--md">
                <div class="emms__centralvideo__title emms__fade-in">
                    <h2>Comenzó una nueva edición del EMMS, exclusiva para la industria E-commerce</h2>
                    <p>Conoce en este video por qué es el lugar ideal para capacitarte y aprender cómo escalar tu Tienda.</p>
                </div>
                <div class="emms__centralvideo__video emms__fade-in">
                    <video src="src/img/EmmsEcommerce.mp4" controls></video>
                </div>
                <div class="emms__centralvideo__cta emms__fade-in eventHiddenElements">
                    <a href="#registro" class="emms__cta">REGÍSTRATE GRATIS</a>
                    <small class="eventHiddenElements"><i>¿Tienes dudas sobre el EMMS 2023?</i> <a href="./#preguntas-frecuentes" target="_blank">Haz clic aquí</a> y encuentra las preguntas más frecuentes sobre el evento.</small>
                    <small class="eventHiddenElements eventShowElements"><i>¿Tienes dudas sobre el EMMS 2023?</i> <a href="./registrado#preguntas-frecuentes" target="_blank">Haz aquí</a> y encuentra las preguntas más frecuentes sobre el evento.</small>
                </div>
                <div class="emms__centralvideo__cta emms__fade-in eventHiddenElements eventShowElements">
                    <a class="emms__cta ecommerceBtn"><span class="button__text">REGÍSTRATE GRATIS</span></a>
                    <small class="eventHiddenElements"><i>¿Tienes dudas sobre el EMMS 2023?</i> <a href="./#preguntas-frecuentes" target="_blank">Haz clic aquí</a> y encuentra las preguntas más frecuentes sobre el evento.</small>
                    <small class="eventHiddenElements eventShowElements"><i>¿Tienes dudas sobre el EMMS 2023?</i> <a href="./registrado#preguntas-frecuentes" target="_blank">Haz aquí</a> y encuentra las preguntas más frecuentes sobre el evento.</small>
                </div>
            </div>
        </section>


        <!-- Users comments -->
        <section class="emms__userscomments emms__userscomments--dark">
            <div class="emms__background-b mb"></div>
            <div class="emms__background-b mb"></div>
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Nuestros asistentes dicen:</h2>
                <ul class="emms__userscomments__list emms__userscomments__list--dk emms__fade-in">
                    <li class="emms__userscomments__list__item">
                        <p>“Con el EMMS siempre me llevo muchos tips para mi tienda. Y ahora, la edición para E-commerce ¡no me lo pierdo!”.<em>María Alejandra<img src="src/img/flag-colombia.png" alt="Colombia"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Me sirve mucho escuchar cada año a los mayores referentes del mundo para saber qué le conviene sumar a mi negocio.”<em>Sergio<img src="src/img/flag-espana.png" alt="España"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Encontrar un evento internacional y gratis es invaluable. ¡Cuenten con mi participación para seguir aprendiendo!”.<em>Ricardo<img src="src/img/flag-mexico.png" alt="México"></em></p>
                    </li>
                </ul>
                <ul class="emms__userscomments__list emms__userscomments__list--mb main-carousel" data-flickity>
                    <li class="emms__userscomments__list__item">
                        <p>“Con el EMMS siempre me llevo muchos tips para mi tienda. Y ahora, la edición para E-commerce ¡no me lo pierdo!”.<em>María Alejandra<img src="src/img/flag-colombia.png" alt="Colombia"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Me sirve mucho escuchar cada año a los mayores referentes del mundo para saber qué le conviene sumar a mi negocio.”<em>Sergio<img src="src/img/flag-espana.png" alt="España"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Encontrar un evento internacional y gratis es invaluable. ¡Cuenten con mi participación para seguir aprendiendo!”.<em>Ricardo<img src="src/img/flag-mexico.png" alt="México"></em></p>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Companies list -->
        <section class="emms__companies emms__companies--categories" id="aliados">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Nos acompañan en esta edición:</h2>
                <h3>SPONSORS</h3>
                <ul class="emms__companies__list emms__companies__list--lg  emms__fade-in">
                    <?php $sponsors = $db->getSponsorsByType('SPONSOR');
                    foreach ($sponsors as $sponsor) : ?>
                        <li class="emms__companies__list__item">
                            <?php if ($sponsor['link_site']) : ?>
                                <a href="<?= $sponsor['link_site'] ?>" target="_blank">
                                <?php endif ?>
                                <img src="./adm23/server/modules/sponsors/uploads/<?= $sponsor['logo_company'] ?>" alt="<?= $sponsor['alt_logo_company'] ?>">
                                <?php if ($sponsor['link_site']) : ?>
                                </a>
                            <?php endif ?>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <div class="emms__companies__divisor"></div>
                <h3>MEDIA PARTNERS EXCLUSIVE</h3>
                <ul class="emms__companies__list emms__companies__list  emms__fade-in">
                    <?php $sponsors = $db->getSponsorsByType('PREMIUM');
                    foreach ($sponsors as $sponsor) : ?>
                        <li class="emms__companies__list__item">
                            <?php if ($sponsor['link_site']) : ?>
                                <a href="<?= $sponsor['link_site'] ?>" target="_blank">
                                <?php endif ?>
                                <img src="./adm23/server/modules/sponsors/uploads/<?= $sponsor['logo_company'] ?>" alt="<?= $sponsor['alt_logo_company'] ?>">
                                <?php if ($sponsor['link_site']) : ?>
                                </a>
                            <?php endif ?>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <div class="emms__companies__divisor"></div>
                <h3>MEDIA PARTNERS STARTERS</h3>
                <ul class="emms__companies__list emms__companies__list  emms__fade-in" id="mediaPartenersStarters">
                </ul>
                <small class="emms__fade-in"><strong>¿Quieres ser aliado del EMMS?</strong> ¡Hablemos! Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></small>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>


    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>
    <script src="src/<?= VERSION ?>/js/dateCounter.js"></script>
    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/mediaPartners.js"></script>
    <script src="src/<?= VERSION ?>/js/homeEcommerce.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/date.js"></script>

</body>

</html>
