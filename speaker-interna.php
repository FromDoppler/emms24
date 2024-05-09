<?php
require_once('./config.php');
require_once('./utils/DB.php');


if (!isset($_GET['slug']) or (trim($_GET['slug']) === '')) {
    header('Location: ' . 'index');
    exit;
}
$db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$speaker = $db->getSpeakerBySlug($_GET['slug'])[0];
$db->close();
// $event = $_GET['event'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('././src/components/head-speaker-interna.php'); ?>
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
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo emms__header__logo--ecommerce">
                <a href="/"><img src="src/img/logos/logo-emms-ecommerce.png" alt="Emms Ecommerce 2024"></a>
            </div>
            <a class="emms__header__nav--mb" id="btn-burger"></a>
            <nav class="emms__header__nav emms__header__nav--hidden" id="nav-mb">
                <ul class="emms__header__nav__menu">
                    <li><a href="/">home</a></li>
                    <li><a href="/ecommerce" class="active">e-commerce</a>
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
                <a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgoemms.com%2Fspeaker-interna', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Facebook-w.svg" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https%3A%2F%2Fgoemms.com%2Fspeaker-interna%26slug%3D<?= $speaker['slug'] ?>&text=<?= $speaker['meta_twitter'] ?>', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                    <img src="src/img/Twitter-w.svg" alt="Twitter">
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com%2Fspeaker-interna&title=textodetw', 'Linkedin', 'toolbar=0, status=0, width=550, height=550');">
                    <img src="src/img/LinkedIn-w.svg" alt="LinkedIn">
                </a>
            </li>
        </ul>
    </div>

    <main>

        <!-- Hero -->
        <section class="emms__hero-conference emms__hero-conference--bio">
            <div class="emms__container--lg">
                <h1 class="emms__fade-in"><?= $speaker['description'] ?></h1>
                <div class="emms__hero-conference__video emms__fade-in">
                    <!--Video -->
                    <div class="emms__cropper-cont-16-9 dp--none" id="speakerVideo">
                        <div class="emms__cropper-cont ">
                            <div class="emms__cropper-cont-interno">
                                <iframe src="https://www.youtube.com/embed/<?= $speaker['youtube'] ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="formContainer" class="dp--none">
                        <!-- Registro con Form -->
                        <div class="emms_switch__container">
                            <span class="emms_switch__container__switch">
                                <input type="checkbox" name="swith" id="swith" checked>
                                <label for="switch"></label>
                            </span>
                        </div>
                        <form class="emms__form emms__fade-in eventHiddenElements" novalidate autocomplete="off" id="speakerForm">
                            <h2>Regístrate gratis ahora y accede a todas las conferencias del EMMS</h2><br>
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
                                <li class="emms__form__field-item">
                                    <div class="holder">
                                        <label class="required-label" for="telefono">Teléfono</label>
                                        <input type="tel" name="phone" id="phone" class="phone phone-number" autocomplete="off">
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
                                <button class="emms__cta" id="register-button" type="button"><span class="button__text">REGÍSTRATE GRATIS</span></button>
                            </div>
                            <div class="emms__form__legal">
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
                                <button class="emms__cta" id="register-button" type="submit"><span class="button__text">INGRESAR</span></button>
                            </div>
                        </form>
                        <!-- FIN Registro con Form -->
                    </div>

                </div>
                <div class="emms__hero-conference__aside emms__fade-in">
                    <h2><?= $speaker['name'] ?></h2>
                    <p><?= $speaker['bio'] ?></p>
                    <ul>
                        <?php if ($speaker['sm_linkedin']) : ?>
                            <li><a href="<?= $speaker['sm_linkedin'] ?>"><img src="src/img/icons/icono-linkedin-b.svg" alt="LinkedIn"></a></li>
                        <?php endif; ?>
                        <?php if ($speaker['sm_twitter']) : ?>
                            <li><a href="<?= $speaker['sm_twitter'] ?>"><img src="src/img/icons/icono-twitter-b.svg" alt="Twitter"></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
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
                <h3>¡Estás a un paso de descargar tu Certificado de Asistencia!</h3>
                <p>Ingresa tu nombre y apellido para descargarlo ahora 🙂</p>
                <form id="certificateForm">
                    <input type="text" placeholder="Nombre y apellido" name="fullname">
                    <span class="certificateError">¡Ouch! Debes ingresar al menos 2 caracteres.</span>
                    <a class="emms__cta emms__fade-in" type="button" id="certificateCta"><span class="button__text">QUIERO DESCARGARLO</span></a>
                    <button class="emms__certificate-modal__window__close" data-dismiss="emms__certificate-modal"></button>
                </form>
            </div>
        </div>
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


        <!-- Doppler Banner -->
        <?php include_once('././src/components/doppler-academy-banner.php'); ?>

    </main>


    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>

    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/certificateModal.js"></script>
    <script src="src/<?= VERSION ?>/js/speakersInterna.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/certificate/certificateSpeaker.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/vendors/intlTelInput.min.js"></script>
    <?php include_once('././src/components/intellInput.php'); ?>

</body>

</html>
