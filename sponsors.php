<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/DB.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/head-home.php'); ?>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/head.php'); ?>
    <script type="module">
        import {
            isUserLogged,
            getUrlWithParams
        } from '/src/<?= VERSION ?>/js/common/index.js';

        if (isUserLogged()) {
            window.location.href = getUrlWithParams('/sponsors-registrado');
        }
    </script>
</head>

<body class="emms__sponsors">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/gtm.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/hello-bar.php') ?>

    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo">
                <a href="/"><img src="/src/img/logos/logo-emms.png" alt="Emms 2024"></a>
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
                    <li><a href="/digital-trends">digital trends</a>
                    </li>
                    <li><a href="#" class="active">biblioteca de recursos</a></li>
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

    <main>

        <!-- Hero -->
        <section class="emms__sponsors__hero">
            <div class="emms__sponsors__hero__title emms__fade-top">
                <h1><em>Herramientas gratis para optimizar tu tienda online</em> Biblioteca de Recursos exclusiva para registrados al EMMS</h1>
                <p>🔒 Desbloquea todos los beneficios, recursos descargables y el material audiovisual que nuestros aliados han preparado para ti</p>
                <a class="emms__cta emms__fade-in" data-target="modalRegister" data-toggle="emms__register-modal">REGÍSTRATE GRATIS</a>
            </div>
            <div class="emms__sponsors__hero__image__container">
                <img src="/src/img/sponsors-promo.svg" alt="Posibilidades para capacitarte">
            </div>
        </section>

        <!-- Sponsors List -->
        <?php
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sponsors = $db->getSponsorsCards('SPONSOR');
        if (!empty($sponsors)) {
        ?>
            <section class="emms__sponsors__list">
                <div class="emms__container--lg">
                    <div class="emms__sponsors__list__title">
                        <h2 class="emms__fade-in">Continúa capacitándote e inspirándote con estos recursos</h2>
                    </div>
                    <ul class="emms__sponsors__list__content emms__fade-in">
                        <?php
                        $index = 0;
                        $texts = array(0 => "RECURSO EXCLUSIVO", 1 => "¡NO TE LO PIERDAS!", 2 => "SOLO PARA TI", 3 => "¡HAZ CLIC AHORA!");
                        foreach ($sponsors as $sponsor) :
                        ?>
                            <li class="emms__sponsors__list__item">
                                <div class="emms__sponsors__list__item__ribon">
                                    <img src="/src/img/emoji-book.svg" alt="Book emoji">
                                    <?= $texts[$index] ?>
                                </div>

                                <h3><?= $sponsor['title'] ?></h3>
                                <p><?= $sponsor['description_card'] ?></p>
                                <?php if ($sponsor['slug'] === '') : ?>
                                    <a class="inactive">Accede →</a>
                                <?php else : ?>
                                    <a data-target="modalRegister" data-toggle="emms__register-modal" slug=<?= $sponsor['slug'] ?>>Accede ahora</a>
                                <?php endif ?>
                                <div class="emms__sponsors__list__item__logo">
                                    <img src="./adm24/server/modules/sponsors/uploads/<?= $sponsor['logo_company'] ?>" alt="<?= $sponsor['alt_logo_company'] ?>">
                                </div>
                            </li>
                        <?php
                            $index++;
                        endforeach; ?>
                    </ul>
                </div>
            </section>
        <?php } ?>
        <!-- Section conferences -->
        <section class="emms__conferences no-registered">
            <div class="emms__conferences__container">
                <div class="emms__conferences__wrapper">
                    <div class="emms__conferences__title emms__fade-in">
                        <h2>Conferencias exclusivas</h2>
                        <p>Tus mayores referentes comparten las mejores estrategias para hacer crecer tu negocio en breves videos. ¡Capacítate e inspírate con el EMMS!</p>
                    </div>
                    <div class="emms__conferences__cards__container">
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal" data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="/src/img/conferences24/portada-capsula-quintino-min.png" alt="Conferencias exclusivas">
                                <div class="emms__conferences__cards__info">
                                    <h4>Logística de Ecommerce el eslabón clave de la recompra orgánica</h4>
                                    <span>Ver ahora →</span>
                                    <div class="emms__conferences__cards__info__image-container">
                                        <img src="/src/img/conferences24/logos/quintino-logo.png" alt="Quintino Logo">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="/src/img/conferences24/portada-capsula-vivimarketing-min.png" alt="Conferencias exclusivas">
                                <div class="emms__conferences__cards__info">
                                    <h4 class="shortTitle">Estrategias de Marketing para rentabilizar tu Ecommerce</h4>
                                    <span>Ver ahora →</span>
                                    <div class="emms__conferences__cards__info__image-container">
                                        <img src="/src/img/conferences24/logos/vivimarketing-logo.png" alt="Vivimarketing Logo">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="/src/img/conferences24/portada-capsula-juanmanuel-card-min.png" alt="Conferencias exclusivas">
                                <div class="emms__conferences__cards__info">
                                    <h4 class="shortTitle">Las nuevas tendencias en META para incrementar tu ROAS</h4>
                                    <span>Ver ahora →</span>
                                    <div class="emms__conferences__cards__info__image-container">
                                        <img src="/src/img/conferences24/logos/juan-manuel-emprende-logo.png" alt="Juan Manuel Emprende Logo">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="emms__conferences__cards emms__fade-in">
                            <a data-target="modalRegister" data-toggle="emms__register-modal">
                                <img src="/src/img/conferences24/portada-wextion-min.png" alt="Conferencias exclusivas">
                                <div class="emms__conferences__cards__info">
                                    <h4 class="shortTitle">Potenciando la Programática con Creatividades Dinámicas Efectivas</h4>
                                    <span>Ver ahora →</span>
                                    <div class="emms__conferences__cards__info__image-container">
                                        <img src="/src/img/conferences24/logos/wextion-exclusive-logo.png" alt="Wextion Exclusive Logo">
                                    </div>
                                </div>
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
                <?
                $formTitle = 'Regístrate aquí';
                $formSubTitle = 'Desbloquea la Biblioteca de Recursos, accede a conferencias de años anteriores y súmate gratis a la edición 2024';
                $eventType = DIGITALTRENDS;
                ?>
                <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/components/register-form-component.php'); ?>
                <!-- End form -->
                <button class="emms__register-modal__window__close" data-dismiss="emms__register-modal"></button>
            </div>
        </div>

        <!-- Doppler Academy Banner -->
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/doppler-academy-banner.php'); ?>

    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/sponsorsList.php') ?>
    <!-- Footer -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/footer.php'); ?>

    <script src="/src/<?= VERSION ?>/js/collapsibles.js"></script>
    <script src="/src/<?= VERSION ?>/js/sponsors.js" type="module"></script>

</body>

</html>
