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

<body class="emms__ecommerce emms__ecommerce-logueado">
    <?php include_once('././src/components/gtm.php'); ?>

    <?php if ($ecommerceStates['isPre']) : ?>
        <!-- Hellobar -->
        <div class="emms__hellobar emms__hellobar--counter">
            <div class="emms__hellobar__container emms__fade-in">
                <p>¡Aprovecha <strong>25% OFF</strong> en la compra de entradas VIP por tiempo limitado! <a href="#entradas">ADQUIERE TU ENTRADA VIP</a></p>
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
            <div class="emms__container--md">
                <h1 class="emms__fade-top"><em>¡YA ERES PARTE DEL EMMS E-COMMERCE 2024!</em>Vive la experiencia completa, hazte VIP</h1>
                <p class="emms__fade-in">Accede a contenido exclusivo: networking, workshops y recursos para asistentes VIP. Quisque laoreet, nunc nec ornare maximus, nunc neque hendrerit erat, sollicitudin volutpat mi tellus vitae velit.</p>
                <a href="#entradas" class="emms__cta emms__fade-in"><span>ADQUIERE TU ENTRADA VIP</span></a>
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
        <section class="emms__centralvideo">
            <div class="emms__centralvideo__head">
                <h2>Adquiere ahora tu entrada VIP a un precio especial</h2>
            </div>
            <div class="emms__container--lg reverse-mb">
                <ul class="emms__centralvideo__list emms__fade-in">
                    <p class="emms__centralvideo__tag-play">Dale play al video</p>
                    <li>In sollicitudin justo elit, sed <em>sagittis mauris</em> vestibulum in.</li>
                    <li>In sollicitudin justo elit, sed <em>sagittis mauris</em> vestibulum in.</li>
                    <li>In sollicitudin justo elit, sed <em>sagittis mauris</em> vestibulum in.</li>
                    <li>In sollicitudin justo elit, sed <em>sagittis mauris</em> vestibulum in.</li>
                    <a href="#entradas" class="emms__cta">ADQUIERE TU PASE VIP</a>
                </ul>
                <div class="emms__centralvideo__video lg emms__fade-in">
                    <video src="src/img/EmmsEcommerce.mp4" controls></video>
                </div>
            </div>
        </section>


        <!-- Features -->
        <div class="emms__features">
            <div class="emms__features__item emms__fade-in emms__features__item--reverse">
                <div class="emms__container--md">
                    <div class="emms__features__item__image">
                        <img src="src/img/pasevip.png" alt="Image">
                    </div>
                    <div class="emms__features__item__text">
                        <h3>Conoce todos los beneficios del pase VIP</h3>
                        <ul class="emms__features__item__text__list">
                            <li>Quisque laoreet, nunc nec ornare maximus, nunc neque hendrerit erat</li>
                            <li>Quisque laoreet, nunc nec ornare maximus</li>
                            <li>Quisque laoreet, nunc nec ornare maximus, nunc neque hendrerit erat</li>
                        </ul>
                        <p class="emms__features__item__text__price"><em>ACCEDE A 25% OFF</em>USD 7.50 <span> Antes US$10,00* </span></p>
                        <a href="#entradas" class="emms__cta">QUIERO MI PASE VIP</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="emms__bg-dark-gradient--2">

            <!-- Calendar -->
            <section class="emms__calendar" id="agenda">
                <div class="emms__container--lg">
                    <div class="emms__calendar__title emms__fade-in">
                        <h2>Agenda EMMS 2024</h2>
                        <p>Estos son los <strong>ponentes</strong> que nos acompañarán en esta edición y las <strong>temáticas</strong> de sus charlas. </p>
                    </div>
                    <!-- Speakers -->
                    <?php include('./src/components/speakers.php') ?>
                    <!-- End list -->
                    <div class="emms__calendar__bottom emms__fade-in">
                        <a href="#entradas" class="emms__cta">ADQUIERE TU ENTRADA VIP</a>
                    </div>
                </div>
            </section>


            <!-- Prices plans -->
            <div class="emms__plans" id="entradas">
                <div class="emms__container--lg">
                    <div class="emms__plans__title">
                        <h2>Precio de Entradas VIP</h2>
                        <p>Nunc ut turpis arcu. Phasellus ac gravida ex, consectetur sodales turpis. Cras accumsan, mi vel eleifend maximus, felis leo feugiat lacus, a rutrum orci tortor sit amet risus.</p>
                    </div>
                    <div class="emms__plans__cards">
                        <div class="emms__plans__card emms__plans__card--free">
                            <div class="emms__plans__card__head">
                                <h3 class="emms__plans__card__head__top">ASISTENTE FREE</h3>
                                <div class="emms__plans__card__head__price">
                                    <div class="emms__plans__card__head__price__content">
                                        <h4>GRATIS</h4>
                                        <p>Pellentesque id risus accumsan elit imperdiet condimentum at a lectus.</p>
                                    </div>
                                </div>
                                <a class="emms__cta inactive">ACCEDE AHORA</a>
                            </div>
                            <div class="emms__plans__card__main">
                                <h5>Beneficios</h5>
                                <ul>
                                    <li>Acceso a todas las <a href="">conferencias</a></li>
                                    <li>Volver a ver las conferencias todas las veces que quieras </li>
                                    <li>Participación en los sorteos </li>
                                    <li>Descuentos en herramientas y cursos </li>
                                    <li>Certificado de participación a las conferencias </li>
                                    <li>Acceso ilimitado a todos los Workshops prácticos </li>
                                </ul>
                            </div>
                        </div>
                        <div class="emms__plans__card emms__plans__card--vip">
                            <div class="emms__plans__card__head">
                                <h3 class="emms__plans__card__head__top">ASISTENTE VIP</h3>
                                <div class="emms__plans__card__head__price">
                                    <div class="emms__plans__card__head__price__content">
                                        <p class="emms__plans__card__head__price__discount">ACCEDE A 25% OFF* <span>*Precio promocional hasta el 00/00/00 inclusive</span></p>
                                        <h4>U$S 7,50 <span> Antes <span>US$10,00*</span></span></h4>
                                        <p>Pellentesque id risus accumsan elit imperdiet condimentum at a lectus.</p>
                                    </div>
                                </div>
                                <a href="./checkout.php" class="emms__cta">ACCEDE AHORA</a>
                            </div>
                            <div class="emms__plans__card__main">
                                <h5>Beneficios</h5>
                                <ul>
                                    <li>Acceso a todas las <a href="">conferencias</a></li>
                                    <li>Volver a ver las conferencias todas las veces que quieras </li>
                                    <li>Participación en los sorteos </li>
                                    <li>Descuentos en herramientas y cursos </li>
                                    <li>Certificado de participación a las conferencias </li>
                                    <li>Acceso ilimitado a todos los Workshops prácticos </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <!-- Features -->
        <div class="emms__features">
            <div class="emms__features__item emms__fade-in emms__features__item--reverse">
                <div class="emms__container--md">
                    <div class="emms__features__item__image">
                        <img src="src/img/entradas.png" alt="Image">
                    </div>
                    <div class="emms__features__item__text">
                        <h3>Accede a 25% OFF por tiempo limitado ¡Plazas reducidas, no te lo pierdas!</h3>
                        <p>In sollicitudin justo elit, sed sagittis mauris vestibulum in. Sed hendrerit aliquet posuere. Donec elit metus, sodales quis libero sed, luctus commodo nisi. <br><br>Donec nec ipsum volutpat, tempus orci sed, posuere turpis. Proin nulla justo, varius vitae aliquet vel, laoreet non tortor. Duis at ornare ligula. Nullam vel tortor massa.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Benefits Icons -->
        <section class="emms__benefits-icons">
            <div class="emms__container--lg">
                <div class="emms__benefits-icons__title emms__fade-in">
                    <h2>Conoce los beneficios que encontrarás en el EMMS</h2>
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
                    <h2>Capacítate con la Biblioteca de Recursos gratuita</h2>
                    <p><strong>Descubre contenidos descargables, herramientas y conferencias on-demand que te traen nuestros aliados para que puedas potenciar al máximo tu negocio.</strong></p>
                    <a href="./sponsors-registrado" class="emms__cta sm emms__cta--nd emms__fade-in">ACCEDE AHORA</a>
                </div>
            </div>
        </section>


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
                    <small><strong>Pronto podrás comprar tus entradas VIP para acceder a los Workshops y el Networking, ¡mantente pendiente a tu casilla de Email!</strong></small>
                </div>
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
                <a href="" class="emms__cta emms__cta--nd sm">CONVIÉRTETE EN SPONSOR</a>
            </div>
        </section>


        <!-- Doppler Banner -->
        <?php include_once('././src/components/doppler-academy-banner.php'); ?>

    </main>


    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>

    <script src="src/<?= VERSION ?>/js/calendarBio.js"></script>
    <script src="src/<?= VERSION ?>/js/date.js"></script>
    <script src="src/<?= VERSION ?>/js/dateCounter.js"></script>

</body>

</html>
