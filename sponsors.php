<?php
require_once('././config.php');
require_once('./utils/DB.php');
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
            window.location.href = getUrlWithParams('/sponsors-registrado');
        }
    </script>
</head>

<body class="emms__sponsors">
    <?php include_once('././src/components/gtm.php'); ?>
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
                    <li><a href="/">home</a></li>
                    <li><a href="#" class="active">biblioteca de recursos</a></li>
                    <li><a href="ediciones-anteriores">ediciones anteriores</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <!-- Hero -->
        <section class="emms__sponsors__hero">
            <div class="emms__sponsors__hero__title emms__fade-top">
                <h1><em>Herramientas gratis para potenciar tu estrategia digital</em> Biblioteca de Recursos exclusiva para registrados al EMMS 2023</h1>
                <p>🔒 Desbloquea beneficios, recursos descargables y material audiovisual preparados especialmente para ti</p>
                <a class="emms__cta emms__fade-in" data-target="modalRegister" data-toggle="emms__register-modal">REGÍSTRATE GRATIS AHORA</a>
            </div>
        </section>


        <!-- Sponsors List -->
        <section class="emms__sponsors__list">
            <div class="emms__container--lg">
                <div class="emms__sponsors__list__title">
                    <h2 class="emms__fade-in">Aquí encontrarás...</h2>
                    <ul class="emms__fade-in">
                        <li>E-books</li>
                        <li>Conferencias</li>
                        <li>Plantillas y guías</li>
                        <li>Beneficios exclusivos</li>
                    </ul>
                </div>
                <ul class="emms__sponsors__list__content emms__fade-in">
                    <?php
                    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                    $sponsors = $db->getSponsorsCards('SPONSOR');
                    foreach ($sponsors as $sponsor) :
                    ?>
                        <li class="emms__sponsors__list__item">
                            <div class="emms__sponsors__list__item__logo">
                                <img src="./adm23/server/modules/sponsors/uploads/<?= $sponsor['logo_company'] ?>" alt="<?= $sponsor['alt_logo_company'] ?>">
                            </div>
                            <h3><?= $sponsor['title'] ?></h3>
                            <p><?= $sponsor['description_card'] ?></p>
                            <?php if ($sponsor['slug'] === '') : ?>
                                <a class="inactive">Accede →</a>
                            <?php else : ?>
                                <a data-target="modalRegister" data-toggle="emms__register-modal" slug=<?= $sponsor['slug'] ?>>Accede →</a>
                            <?php endif ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <!-- Section conferences -->
        <section class="emms__conferences no-registered">
            <div class="emms__conferences__container">
                <div class="emms__conferences__wrapper">
                    <div class="emms__conferences__title emms__fade-in">
                        <h2>Más conferencias exclusivas</h2>
                        <p>Te traemos breves videos en los que podrás descubrir las últimas tendencias y ver interesantes análisis de la mano de especialistas.</p>
                        <p>¡Capacítate e inspírate con el EMMS 2023!</p>
                    </div>
                    <div class="emms__conferences__cards__container">
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-mujeresqueemprenden.png" alt="Conferencias exclusivas">
                                <h4>Trucos para vender más en tu E-commerce</h4>
                                <p>Duración: 00:19:45</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-chinarodriguez.png" alt="Conferencias exclusivas">
                                <h4>Campañas de remarketing de alto impacto</h4>
                                <p>Duración: 00:20:48</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-realtrends.png" alt="Conferencias exclusivas">
                                <h4>Cómo profesionalizar y optimizar la comunicación con mis compradores</h4>
                                <p>Duración: 00:11:27</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-martin-gelpi.png" alt="Conferencias exclusivas">
                                <h4>Marketing de escasez: la clave del furor en ventas</h4>
                                <p>Duración: 00:08:22</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-christian-canizales.png" alt="Conferencias exclusivas">
                                <h4>5 Técnicas SEO para eCommerce</h4>
                                <p>Duración: 00:09:20</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-dario-conti.png" alt="Conferencias exclusivas">
                                <h4>Matriz de Impacto Digital para lograr aumento de ventas</h4>
                                <p>Duración: 00:22:11</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-mundobrandes-min.png" alt="Conferencias exclusivas">
                                <h4>5 Errores Comunes al Iniciar en el Ecommerce</h4>
                                <p>Duración: 00:14:11</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-cyberclick.png" alt="Conferencias exclusivas">
                                <h4>5 tendencias de marketing digital para 2024</h4>
                                <p>Duración: 00:13:53</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-veronicasequeira-min.png" alt="Conferencias exclusivas">
                                <h4>El arte de la persuasión para vender más y mejor</h4>
                                <p>Duración: 00:18:08</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-youtube-lujanalonso-min.png" alt="Conferencias exclusivas">
                                <h4>Soft Skills 2.0: habilidades blandas clave para entornos digitales</h4>
                                <p>Duración: 00:06:09</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-natalia-tabares-min.png" alt="Conferencias exclusivas">
                                <h4>Saca el máximo provecho de las novedades en Meta con tu tienda online en Jumpseller</h4>
                                <p>Duración: 00:09:21</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-mariafernanda-rangel-castillo-min.png" alt="Conferencias exclusivas">
                                <h4>Vender es otra cosa</h4>
                                <p>Duración: 00:07:29</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-denborg-min.png" alt="Conferencias exclusivas">
                                <h4>4 pilares para la comunicación de tu marca personal</h4>
                                <p>Duración: 00:10:22</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="src/img/conferences/portada-juancruz-arocena.png" alt="Conferencias exclusivas">
                                <h4>Hacks para impulsar tu marca personal</h4>
                                <p>Duración: 00:17:40</p>
                                <span>¡No te lo pierdas!</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Register modal -->
        <div id="modalRegister" class="emms__register-modal">
            <div class="emms__register-modal__window">
                <!-- Form -->
                <form class="emms__form" id="sponsorsForm" novalidate autocomplete="off">
                    <h3>Regístrate aquí para acceder 🙂</h3>
                    <h4>Regístrate gratis. Accederás a la Biblioteca de Recursos, a las ediciones anteriores ¡y serás parte de la próxima!</h4>
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
                        <button class="emms__cta" id="register-button" type="button"><span class="button__text">RESERVA TU LUGAR</span></button>
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
                <button class="emms__register-modal__window__close" data-dismiss="emms__register-modal"></button>
            </div>
        </div>

        <!-- Doppler Academy Banner -->
        <?php include_once('././src/components/doppler-academy-banner.php'); ?>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>

    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>
    <script src="src/<?= VERSION ?>/js/sponsors.js" type="module"></script>
    <script src="src/<?= VERSION ?>/js/vendors/intlTelInput.min.js"></script>
    <?php include_once('././src/components/intellInput.php'); ?>


</body>

</html>
