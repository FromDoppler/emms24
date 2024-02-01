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
                <p><strong>EMMS E-commerce:</strong> ¡disfruta de un día más de aprendizaje! <strong>16 y 17 de mayo</strong></p>
                <a href="./ecommerce">ASEGURA TU CUPO GRATIS</a>
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
                    <li><a href="/sponsors">biblioteca de recursos</a></li>
                    <li><a href="/ediciones-anteriores">ediciones anteriores</a></li>
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
            <div class="emms__home__hero__title emms__fade-top">
                <h1><em>2024</em> EARLYBIRDS</h1>
            </div>
            </div>
        </section>


        <!-- Separator -->
        <div class="emms__separator mb"></div>

        <!-- Event numbers -->
        <section class="emms__eventnumbers emms__eventnumbers--large" id="boxNumberLarge">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">EMMS a lo largo del tiempo</h2>
                <ul class="emms__fade-in">
                    <li>
                        <p class="number" id="count1L">265</p>
                        <span>REGISTRADOS</span>
                    </li>
                    <li>
                        <p class="number" id="count4L">190</p>
                        <span>Speakers</span>
                    </li>
                    <li>
                        <p class="number" id="count3L">10</p>
                        <span>Países</span>
                    </li>
                    <li>
                        <p class="number" id="count2L">15</p>
                        <span>Años</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Separator -->
        <div class="emms__separator"></div>

        <!-- Speakers -->
        <section class="emms__home__speakers">
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Algunos de los conferencistas que nos han acompañado en las últimas ediciones:</h2>
                <div class="emms__speakerslist emms__fade-in">
                    <ul>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-neil-patel.png" alt="Neil Patel" class="emms__speakerslist__item__photo">
                            <p>Neil Patel</p>
                            <img src="src/img/logos/logo-np-digital.png" alt="NP Digital" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-vero-ruiz-del-vizo.png" alt="Vero Ruiz del Vizo" class="emms__speakerslist__item__photo">
                            <p>Vero Ruiz del Vizo</p>
                            <img src="src/img/logos/logo-vero.png" alt="Veró" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-tim-ash.png" alt="Tim Ash" class="emms__speakerslist__item__photo">
                            <p>Tim Ash</p>
                            <img src="src/img/logos/logo-timash.png" alt="TimAsh.com" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-vedant-misra.png" alt="Vedant Misra" class="emms__speakerslist__item__photo">
                            <p>Vedant Misra</p>
                            <img src="src/img/logos/logo-google.png" alt="Google" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-guillermo-pujadas.png" alt="Guillermo Pujadas" class="emms__speakerslist__item__photo">
                            <p>Guillermo Pujadas</p>
                            <img src="src/img/logos/logo-meta.png" alt="Meta" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-julia-rayeb.png" alt="Julia Rayeb" class="emms__speakerslist__item__photo">
                            <p>Julia Rayeb</p>
                            <img src="src/img/logos/logo-facebook.png" alt="Facebook" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-pablo-laucirica.png" alt="Pablo Laucirica" class="emms__speakerslist__item__photo">
                            <p>Pablo Laucirica</p>
                            <img src="src/img/logos/logo-microsoft.png" alt="Microsoft" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-vilma-nunez.png" alt="Vilma Nuñez" class="emms__speakerslist__item__photo">
                            <p>Vilma Nuñez</p>
                            <img src="src/img/logos/logo-vilma.png" alt="Vilma" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-marcos-pueyrredon.png" alt="Marcos Pueyrredón " class="emms__speakerslist__item__photo">
                            <p>Marcos Pueyrredón </p>
                            <img src="src/img/logos/logo-vtex.png" alt="Vtex" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-diana-ramirez.png" alt="Diana Ramirez" class="emms__speakerslist__item__photo">
                            <p>Diana Ramirez</p>
                            <img src="src/img/logos/logo-spotify.png" alt="Spotify" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-angela-blones.png" alt="Ángela Blones" class="emms__speakerslist__item__photo">
                            <p>Ángela Blones</p>
                            <img src="src/img/logos/logo-angela-blones.png" alt="Ángela Blones" class="emms__speakerslist__item__logo">
                        </li>
                        <li class="emms__speakerslist__item">
                            <img src="src/img/people/speaker-albert-esplugas.png" alt="Albert Esplugas" class="emms__speakerslist__item__photo">
                            <p>Albert Esplugas</p>
                            <img src="src/img/logos/logo-amazon.png" alt="Amazon" class="emms__speakerslist__item__logo">
                        </li>
                    </ul>
                </div>
                <small class="emms__fade-in">Regístrate gratis para ver las conferencias de este año y recibir todas las novedades sobre la edición 2024.</small>
                <a href="#registro" class="emms__cta emms__fade-in">REVIVE EL EMMS</a>
            </div>
        </section>

        <!-- Premium content -->
        <section class="emms__premium-content emms__premium-content--dark">
            <div class="emms__container--lg">
                <div class="emms__premium-content__text emms__fade-in">
                    <h2>Accede a la Biblioteca de Recursos ¡gratis!</h2>
                    <p>Descubre <strong>contenidos descargables, herramientas y conferencias on-demand</strong> que te traen nuestros aliados para que puedas potenciar al máximo tu negocio.</p>
                    <a href="./sponsors" class="emms__cta emms__fade-in">ACCEDE AQUÍ</a>
                </div>
                <div class="emms__premium-content__picture emms__fade-in">
                    <img src="src/img/download--locked.png" alt="Contenido Premium">
                </div>
            </div>
        </section>

        <!-- Users comments -->
        <section class="emms__userscomments">
            <div class="emms__background-a"></div>
            <div class="emms__container--lg">
                <h2 class="emms__fade-in">Nuestros asistentes dicen...</h2>
                <ul class="emms__userscomments__list emms__userscomments__list--dk emms__fade-in">
                    <li class="emms__userscomments__list__item">
                        <p>“Lo que más valoro del EMMS es poder ver en qué están las empresas más importantes del sector, ¡y gratis!”<em>Yolanda<img src="src/img/flag-mexico.png" alt="México"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Ver las conferencias online es increíble. Pude disfrutar de la última edición en el trabajo y verlo con mis compañeros”<em>Pedro<img src="src/img/flag-espana.png" alt="España"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Me encanta poder irme con ideas nuevas para mi negocio cada año, además de pasar tiempo con expertos y colegas”.<em>Nadia<img src="src/img/flag-argentina.png" alt="Argentina"></em></p>
                    </li>
                </ul>
                <ul class="emms__userscomments__list emms__userscomments__list--mb main-carousel" data-flickity>
                    <li class="emms__userscomments__list__item">
                        <p>“Lo que más valoro del EMMS es poder ver en qué están las empresas más importantes del sector, ¡y gratis!”<em>Yolanda<img src="src/img/flag-mexico.png" alt="México"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Ver las conferencias online es increíble. Pude disfrutar de la última edición en el trabajo y verlo con mis compañeros”<em>Pedro<img src="src/img/flag-espana.png" alt="España"></em></p>
                    </li>
                    <li class="emms__userscomments__list__item">
                        <p>“Me encanta poder irme con ideas nuevas para mi negocio cada año, además de pasar tiempo con expertos y colegas”.<em>Nadia<img src="src/img/flag-argentina.png" alt="Argentina"></em></p>
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
                        <p class="emms__frequentquestions__list__item__content">Con tu registro podrás acceder a todas las conferencias de esta y todas las ediciones anteriores para siempre. Además, desbloquearás <strong>una biblioteca repleta de recursos como E-books, Plantillas, descuentos y material audiovisual</strong> para que puedas hacer crecer tu negocio aún más. ¿Lo mejor de todo? Podrás obtener un certificado de asistencia para compartir tus nuevos conocimientos en Redes Sociales ;)</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">📅 ¿Cuándo tuvo lugar el EMMS 2023?</button>
                        <p class="emms__frequentquestions__list__item__content">El EMMS 2023 tuvo 2 ediciones: <strong>E-commerce y Digital Trends</strong>, en <strong>mayo y noviembre</strong> respectivamente.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">📍 ¿Dónde puedo ver los eventos?</button>
                        <p class="emms__frequentquestions__list__item__content">El EMMS es un evento <strong>online</strong>. Es decir, podrás revivirlo desde cualquier dispositivo, accediendo a cada evento en esta misma Web.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">💵 ¿Tengo que pagar inscripción?</button>
                        <p class="emms__frequentquestions__list__item__content">El EMMS tiene un registro <strong>totalmente gratuito</strong>, válido para acceder a las Conferencias y para acceder a la Biblioteca de Recursos. Si además quieres capacitarte con más de 15 Workshops prácticos y tenerlos de por vida, puedes comprar una <a href="https://goemms.com/digital-trends#entradas">entrada VIP</a></p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">✍ ¿Cómo me registro?</button>
                        <p class="emms__frequentquestions__list__item__content">Elige en esta URL la edición a la que te interese asistir y desde allí podrás registrarte de forma gratuita. Para acceder además a los contenidos VIP del EMMS Digital Trends deberás comprar tu <a href="https://goemms.com/digital-trends#entradas">entrada VIP</a></p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">💻 ¿Cómo accedo a la transmisión del EMMS una vez que me registré?</button>
                        <p class="emms__frequentquestions__list__item__content">Las conferencias de las ediciones pasadas están grabadas y puedes acceder desde esta misma Web. Elige Digital Trends, EMMS E-commerce o dirígete en la navigation bar a Ediciones Anteriores para ver otras.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">🎥 ¿Están disponibles las grabaciones después del evento?</button>
                        <p class="emms__frequentquestions__list__item__content">Sí, cada vez que termina una edición del EMMS las conferencias quedan subidas al sitio web del evento. Puedes revivirlas las veces que desees.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">🤔 Me anoté al evento y aún no recibí el Email de confirmación, ¿qué hago?</button>
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
                        <p class="emms__frequentquestions__list__item__content">¡Sí! Podrás descargar tu certificado de asistencia a la edición E-commerce 2023 y Digital Trends 2023. Al entrar a la conferencia que deseas ver, tendrás un link de descarga debajo del cuadro de reproducción.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">🛠 Si asisto a los Workshops, ¿podré descargar un certificado que corrobore que me he capacitado?</button>
                        <p class="emms__frequentquestions__list__item__content">¡Por supuesto! Si accedes en vivo a los Workshops prácticos, luego de haber finalizado cada jornada del evento te llegará un email que te permitirá obtener tu certificado de asistencia a la capacitación. Ten en cuenta que solamente podrás obtenerlo si has asistido en vivo, no así viéndolos on demand una vez finalizado el evento. ¿No te ha llegado el correo o no pudiste obtener el tuyo? Contáctanos a <a href="mailto:soporte@fromdoppler.com">soporte@fromdoppler.com</a> y te contactaremos para asistirte en breve.</p>
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
                <small class="emms__fade-in">¿Quieres ser aliado del EMMS? ¡Hablemos! Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></small>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>
    <script src="src/<?= VERSION ?>/js/counterAnimation.js"></script>
    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>

</body>

</html>
