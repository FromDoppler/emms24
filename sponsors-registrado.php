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

        if (!isUserLogged()) {
            window.location.href = getUrlWithParams('/sponsors');
        }
    </script>
</head>

<body class="emms__sponsors">
    <?php include_once('././src/components/gtm.php'); ?>
    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo">
                <a href="./"><img src="src/img/logos/logo-emms.png" alt="Emms 2023"></a>
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
                    <li><a href="./ecommerce-registrado">e-commerce</a>
                    </li>
                    <li><a href="#" class="active">biblioteca de recursos</a></li>
                    <li class="emms__header__nav__menu__dropdown"><a href="./ediciones-anteriores">Qué es el EMMS</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="./ediciones-anteriores-registrado#sobre-emms">Sobre el EMMS</a></li>
                            <li><a href="./ediciones-anteriores-registrado#ediciones-anteriores">Revive ediciones anteriores</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <!-- Hero -->
        <section class="emms__sponsors__hero">
            <div class="emms__sponsors__hero__title emms__fade-top">
                <h1><em>Herramientas gratis para optimizar tu tienda online</em> Biblioteca de Recursos exclusiva para registrados al EMMS</h1>
                <p>Descubre todos los beneficios, recursos descargables y el material audiovisual que nuestros aliados han preparado para ti</p>
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
                    foreach ($sponsors as $sponsor) : ?>
                        <li class="emms__sponsors__list__item">
                            <div class="emms__sponsors__list__item__logo">
                                <img src="./adm24/server/modules/sponsors/uploads/<?= $sponsor['logo_company'] ?>" alt="<?= $sponsor['alt_logo_company'] ?>">
                            </div>
                            <h3><?= $sponsor['title'] ?></h3>
                            <p><?= $sponsor['description_card'] ?></p>
                            <?php if ($sponsor['slug'] === '') : ?>
                                <a class="inactive">Accede →</a>
                            <?php else : ?>
                                <a href="sponsors-interna?slug=<?= $sponsor['slug'] ?>" target="_blank">Accede ahora</a>
                            <?php endif ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <!-- Section conferences -->
        <section class="emms__conferences">
            <div class="emms__conferences__container">
                <div class="emms__conferences__wrapper">
                    <div class="emms__conferences__title emms__fade-in">
                        <h2>Conferencias exclusivas</h2>
                        <p>Tus mayores referentes comparten las mejores estrategias para hacer crecer tu negocio en breves videos.</p>
                        <p>¡Capacítate e inspírate con el EMMS!</p>
                    </div>
                    <div class="emms__conferences__cards__container">
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=QsVkJsqDEUU" target="_blank">
                                <img src="src/img/conferences/portada-youtube-mujeresqueemprenden.png" alt="Conferencias exclusivas">
                                <h4>Trucos para vender más en tu E-commerce</h4>
                                <p>Duración: 00:19:45</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://youtu.be/6vAI_hk37Lw" target="_blank">
                                <img src="src/img/conferences/portada-youtube-chinarodriguez.png" alt="Conferencias exclusivas">
                                <h4>Campañas de remarketing de alto impacto</h4>
                                <p>Duración: 00:20:48</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>

                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=Jb_ryd3huU4" target="_blank">
                                <img src="src/img/conferences/portada-youtube-realtrends.png" alt="Conferencias exclusivas">
                                <h4>Cómo profesionalizar y optimizar la comunicación con mis compradores</h4>
                                <p>Duración: 00:11:27</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=gcOgawrnBeg" target="_blank">
                                <img src="src/img/conferences/portada-youtube-martin-gelpi.png" alt="Conferencias exclusivas">
                                <h4>Marketing de escasez: la clave del furor en ventas</h4>
                                <p>Duración: 00:08:22</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=oWAU4RDbJu4" target="_blank">
                                <img src="src/img/conferences/portada-youtube-christian-canizales.png" alt="Conferencias exclusivas">
                                <h4>5 Técnicas SEO para eCommerce</h4>
                                <p>Duración: 00:09:20</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=RBz5KNC84YQ" target="_blank">
                                <img src="src/img/conferences/portada-youtube-dario-conti.png" alt="Conferencias exclusivas">
                                <h4>Matriz de Impacto Digital para lograr aumento de ventas</h4>
                                <p>Duración: 00:22:11</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=dA214KV7oS8" target="_blank">
                                <img src="src/img/conferences/portada-youtube-mundobrandes-min.png" alt="Conferencias exclusivas">
                                <h4>5 Errores Comunes al Iniciar en el Ecommerce</h4>
                                <p>Duración: 00:14:11</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://youtu.be/TaA1Ea9fei4" target="_blank">
                                <img src="src/img/conferences/portada-youtube-cyberclick.png" alt="Conferencias exclusivas">
                                <h4>5 tendencias de marketing digital para 2024</h4>
                                <p>Duración: 00:13:53</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://youtu.be/-QlyiRGqCXY" target="_blank">
                                <img src="src/img/conferences/portada-youtube-veronicasequeira-min.png" alt="Conferencias exclusivas">
                                <h4>El arte de la persuasión para vender más y mejor</h4>
                                <p>Duración: 00:18:08</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://youtu.be/tERlFk6wjMk" target="_blank">
                                <img src="src/img/conferences/portada-youtube-lujanalonso-min.png" alt="Conferencias exclusivas">
                                <h4>Soft Skills 2.0: habilidades blandas clave para entornos digitales</h4>
                                <p>Duración: 00:06:09</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://youtu.be/ljJpXqGsAEQ" target="_blank">
                                <img src="src/img/conferences/portada-natalia-tabares-min.png" alt="Conferencias exclusivas">
                                <h4>Saca el máximo provecho de las novedades en Meta con tu tienda online en Jumpseller</h4>
                                <p>Duración: 00:09:21</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://youtu.be/QUc7TKIOZQY" target="_blank">
                                <img src="src/img/conferences/portada-mariafernanda-rangel-castillo-min.png" alt="Conferencias exclusivas">
                                <h4>Vender es otra cosa</h4>
                                <p>Duración: 00:07:29</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=ayHNXA_irr8" target="_blank">
                                <img src="src/img/conferences/portada-denborg-min.png" alt="Conferencias exclusivas">
                                <h4>4 pilares para la comunicación de tu marca personal</h4>
                                <p>Duración: 00:10:22</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a href="https://www.youtube.com/watch?v=aIhHohOyrHk" target="_blank">
                                <img src="src/img/conferences/portada-juancruz-arocena.png" alt="Conferencias exclusivas">
                                <h4>Hacks para impulsar tu marca personal</h4>
                                <p>Duración: 00:17:40</p>
                                <span>Ver ahora</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Doppler Academy Banner -->
        <?php include_once('././src/components/doppler-academy-banner.php'); ?>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>

    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>

</body>

</html>
