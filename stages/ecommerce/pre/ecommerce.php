<?php
require_once('././config.php');
require_once('././src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('././src/components/head-ecommerce.php'); ?>
    <?php include_once('././src/components/head.php'); ?>
</head>

<body class="emms__ecommerce">
    <?php include_once('././src/components/gtm.php'); ?>

    <?php if ($ecommerceStates['isPre']) : ?>
        <!-- Hellobar -->
        <div class="emms__hellobar emms__hellobar--counter">
            <div class="emms__hellobar__container emms__fade-in">
                <p>¡Llega el <strong>EMMS E-Commerce 2024</strong>! Reserva tu lugar.!</p>
                <ul class="emms__counter">
                    <li class="emms__counter__number">
                        <div><span class="d"></span></div>
                        <span class="emms__counter__number--data">días</span>
                    </li>
                    <li class="emms__counter__number">
                        <div><span class="h"></span></div>
                        <span class="emms__counter__number--data">horas</span>
                    </li>
                    <li class="emms__counter__number">
                        <div><span class="m"></span></div>
                        <span class="emms__counter__number--data">minutos</span>
                    </li>
                    <li class="emms__counter__number">
                        <div><span class="s"></span></div>
                        <span class="emms__counter__number--data">segundos</span>
                    </li>
                </ul>

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
                    <li class="emms__header__nav__menu__dropdown"><a href="./ediciones-anteriores">Qué es el EMMS</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="./ediciones-anteriores#sobre-emms">Sobre el EMMS</a></li>
                            <li><a href="./ediciones-anteriores#ediciones-anteriores">Revive ediciones anteriores</a></li>
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
        <section class="emms__hero-registration" id="registro">
            <div class="emms__hero-registration__columns">
                <div class="emms__hero-registration__text emms__fade-in">
                    <h1><em>EVENTO ONLINE Y GRATUITO - 02 Y 03 DE MAYO</em> <span class="top">EMMS</span> E-commerce <span class="bottom">2024</span></h1>
                    <p>Inspírate y aprende con un evento exclusivo pensado para tu Tienda Online.</p>
                    <ul class="emms__hero-registration__text__checklist">
                        <li>SPEAKERS INTERNACIONALES</li>
                        <li>HERRAMIENTAS Y RECURSOS</li>
                        <li>WORKSHOPS Y NETWORKING</li>
                    </ul>
                </div>
                <div class="emms__hero-registration__form emms__fade-in">
                    <!-- Form -->
                    <form class="emms__form" novalidate autocomplete="off" id="ecommerceForm">
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
                            <button class="emms__cta" id="register-button" type="button"><span class="button__text">REGÍSTRATE GRATIS</span></button>
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
        <div class="hide">
            <?php include('./src/components/speakers.php') ?>
        </div>

        <!-- Bg dark gradient -->
        <div class="emms__bg-dark-gradient">

            <!-- Grid -->
            <section class="emms__grid emms__grid--3">
                <div class="emms__container--md">
                    <div class="emms__grid__title emms__fade-in">
                        <h2>Vive la experiencia completa en EMMS E-commerce</h2>
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
                                <p>Descubre las estrategia que impulsaron el éxito de las compañías líderes del mundo, de la voz de sus representantes más destacados.</p>
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
                                <h3>Biblioteca de Recursos</h3>
                                <p>Encuentra E-books, infografías, cápsulas audiovisuales, guías, plantillas y muchos más contenidos descargables y gratuitos en la sección Biblioteca de Recursos.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="emms__grid__bottom">
                        <a href="#registro" class="emms__cta">REGÍSTRATE GRATIS</a>
                    </div>
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

        </div>


        <!-- Speakers -->
        <section class="emms__speakers emms__bg-section-3">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Algunos de los conferencistas que nos han acompañado en las últimas ediciones:</h2>
                <div class="emms__speakerslist emms__fade-in">
                    <ul>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people--gradient/ricardo-tayer.png" alt="Ricardo Tayer" class="emms__speakerslist__item__photo">
                            <p>Ricardo Tayer</p>
                            <img src="src/img/logos--white/logo-flat-101.png" alt="Flat 101" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people--gradient/ana-ivars.png" alt="Ana Ivars" class="emms__speakerslist__item__photo">
                            <p>Ana Ivars</p>
                            <img src="src/img/logos--white/logo-ana-ivars.png" alt="Ana Ivars" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people--gradient/federico-munoz-villavicencio.png" alt="Federico Muñoz Villavicencio" class="emms__speakerslist__item__photo">
                            <p>Federico Muñoz Villavicencio</p>
                            <img src="src/img/logos--white/logo-meta.png" alt="Meta" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people--gradient/ana-laura-fleba.png" alt="Ana Laura Fleba" class="emms__speakerslist__item__photo">
                            <p>Ana Laura Fleba</p>
                            <img src="src/img/logos--white/logo-unilever.png" alt="Unilever" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people--gradient/manuel-garcia-cuerva.png" alt="Manuel García Cuerva" class="emms__speakerslist__item__photo">
                            <p>Manuel García Cuerva</p>
                            <img src="src/img/logos--white/logo-vtex.png" alt="Vtex" class="emms__speakerslist__item__logo">
                        </li>
                    </ul>
                </div>
                <small class="emms__fade-in"><strong>¡Muy pronto revelaremos los speakers de la edición 2024!</strong><br>Regístrate y mantente pendiente a tu casilla de correo para conocerlos</small>
                <a href="#registro" class="emms__cta emms__fade-in">APÚNTATE GRATIS</a>
            </div>
        </section>


        <!-- Premium content -->
        <section class="emms__premium-content">
            <div class="emms__container--lg">
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/biblioteca-recursos.png" alt="Biblioteca de recursos">
                </div>
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Capacítate con la Biblioteca de Recursos gratuita</h2>
                    <p><strong>Descubre contenidos descargables, herramientas y conferencias on-demand que te traen nuestros aliados para que puedas potenciar al máximo tu negocio.</strong></p>
                    <a href="./sponsors" class="emms__cta sm emms__cta--nd emms__fade-in">ACCEDE AHORA</a>
                </div>
            </div>
        </section>


        <!-- Central Video -->
        <section class="emms__centralvideo">
            <div class="emms__container--lg">
                <div class="emms__centralvideo__title emms__fade-in">
                    <h2>Inspírate con el mayor evento hispano de E-commerce</h2>
                    <p>Conoce en este video qué hace al EMMS E-commerce el lugar ideal para capacitarte y aprender cómo escalar tu tienda junto a los líderes del sector.</p>
                    <a href="#registro" class="emms__cta">REGÍSTRATE AHORA</a>
                </div>
                <div class="emms__centralvideo__video emms__fade-in">
                    <video src="src/img/EmmsEcommerce.mp4" controls></video>
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
                            <p class="emms__userscomments__list__item__text">“Asistí al EMMS E-commerce y me deslumbraron los tips que compartieron los speakers. ¡Este año no me lo pierdo por nada!”.</p>
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
                            <p class="emms__userscomments__list__item__text">“Me sirve mucho escuchar cada año a los mayores referentes del mundo para saber qué le conviene sumar a mi negocio.”</p>
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
                            <p class="emms__userscomments__list__item__text">“No puedo recomendar este evento lo suficiente. Su contenido gratuito es de una calidad excepcional, superando a muchos eventos de pago en términos de valor y relevancia”.</p>
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
                            <p class="emms__userscomments__list__item__text">“Asistí al EMMS E-commerce y me deslumbraron los tips que compartieron los speakers. ¡Este año no me lo pierdo por nada!”.</p>
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
                            <p class="emms__userscomments__list__item__text">“Me sirve mucho escuchar cada año a los mayores referentes del mundo para saber qué le conviene sumar a mi negocio.”</p>
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
                            <p class="emms__userscomments__list__item__text">“No puedo recomendar este evento lo suficiente. Su contenido gratuito es de una calidad excepcional, superando a muchos eventos de pago en términos de valor y relevancia”.</p>
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
                <small class="emms__fade-in"><strong>¿Tienes dudas sobre el EMMS? <a href="/#preguntas-frecuentes">Haz clic aquí</a> y encuentra las preguntas más frecuentes sobre el evento.</strong></small>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>


    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>
    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/mediaPartners.js"></script>
    <script src="src/<?= VERSION ?>/js/homeEcommerce.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/dateCounter.js"></script>
    <script src="src/<?= VERSION ?>/js/date.js"></script>
    <script src="src/<?= VERSION ?>/js/vendors/intlTelInput.min.js"></script>
    <?php include_once('././src/components/intellInput.php'); ?>

</body>

</html>
