<?php

$contents = [
    '/' => [
        'heading' => '¡Únete al EMMS Digital Trends 2024!',
        'subHeading' => 'Te damos la bienvenida al evento más importante de Marketing Digital de Latam y España.Tres días para capacitarte gratis y aprender de líderes internacionales.  <a href="/digital-trends.php">¡Ya comenzó! </a>',
        'DTCardButton' => 'REGÍSTRATE GRATIS',
        'registerAdvise' => '',
    ],
    '/registrado' => [
        'heading' => '¡Únete al EMMS Digital Trends 2024!',
        'subHeading' => 'Capacítate e inspírate con los líderes del Marketing Digital en Latam y España. <b>¡Estamos en vivo!</b>.  <a href="/digital-trends.php">Disfruta ahora </a> de una nueva edición con Conferencias, Panel de Expertos, Workshops, y mucho más!.',
        'DTCardButton' => 'ÚNETE AL VIVO',
        'registerAdvise' => '<small class="success-register">🗹 YA TE HAS REGISTRADO</small>',
    ],
    '/*' => [
        'heading' => '¡Únete al EMMS Digital Trends 2024!',
        'subHeading' => 'Te damos la bienvenida al evento más importante de Marketing Digital de Latam y España.Tres días para capacitarte gratis y aprender de líderes internacionales.  <a href="/digital-trends.php">¡Ya comenzó! </a>',
        'DTCardButton' => 'REGÍSTRATE GRATIS',
        'registerAdvise' => '',
    ],
];


include_once($_SERVER['DOCUMENT_ROOT'] . '/components/helpers/urlHelper.php');
$normalizedUrl = getNormalizeUrl();
$content = $contents[$normalizedUrl] ?? $contents['/*'];
?>

<!-- Hero -->
<section class="emms__home__hero">
    <div class="emms__home__hero__title emms__fade-top">
        <h1><em>TODAS LAS TENDENCIAS EN MARKETING DIGITAL, EN UN SOLO LUGAR</em> <?php echo ($content['heading']); ?>
        </h1>
        <h2>ONLINE Y GRATUITO</h2>
        <p>
            <?php echo ($content['subHeading']); ?>
        </p>
    </div>
    <div id="eventos"></div>
    <!-- Event cards -->
    <div class="emms__eventCards">
        <div class="emms__container--lg">
            <ul class="emms__eventCards__list emms__eventCards__list--dk emms__fade-in">
                <li class="emms__eventCards__list__item">
                    <div class="emms__eventCards__list__item__picture">
                        <img src="/src/img/card-image-digitaltrends-pre.png" alt="Image Digital Trends">
                        <?php if ($digitalTrendsStates['isLive']) : ?>
                            <div class="ribbon__live">
                                <img src="/src/img/icons/play-icon.png" alt="Play" class="ribbon__live-text ">
                                <span class="ribbon__live-text"> EN VIVO</span>
                            </div>
                        <?php endif ?>
                        <?php if ($digitalTrendsStates['isPost']) : ?>
                            <p class="top hide">EVENTO FINALIZADO</p>
                        <?php endif ?>
                    </div>
                    <div class="emms__eventCards__list__item__text">
                        <h3>EMMS Digital Trends </h3>
                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. ¡No te lo pierdas! <br> Es gratis y online.</p>
                        <?php echo ($content['registerAdvise']); ?>
                        <span>ONLINE Y GRATUITO</span>
                        <div class="emms__eventCards__list__item__text--bottom">
                            <?php if ($digitalTrendsStates['isPre']) : ?>
                                <a class="emms__cta" href="/digital-trends"><?php echo ($content['DTCardButton']); ?></a>
                            <?php elseif ($digitalTrendsStates['isLive']) : ?>
                                <a href="/digital-trends" class="emms__cta">ACCEDE AL VIVO</a>
                            <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                <a href="/digital-trends" class="emms__cta">REGISTRATE GRATIS</a>
                            <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                <a href="/digital-trends" class="emms__cta">REVIVE EL EVENTO</a>
                            <?php endif ?>
                        </div>
                    </div>
                </li>
                <li class="emms__eventCards__list__item">
                    <div class="emms__eventCards__list__item__picture">
                        <div class="ribbon__end">
                            PRÓXIMAMENTE
                        </div>
                        <img src="/src/img/card-image-ecommerce-new.png" alt="Ecommerce image">
                    </div>
                    <div class="emms__eventCards__list__item__text">
                        <h3>EMMS E-commerce </h3>
                        <p>Referentes internacionales de la industria te cuentan las <b>tendencias y estrategias que emplean en sus Tiendas Online </b> para captar nuevos clientes y aumentar sus ingresos. <a href="/ediciones-anteriores" class="emms__purple-common-anchor">Revive la última edición </a> para nutrirte de ideas para tu negocio.</p>
                        <span>ONLINE Y GRATUITO</span>
                        <div class="emms__eventCards__list__item__text--bottom">
                            <a href="ecommerce" class="emms__cta inactive">PRÓXIMAMENTE</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="emms__eventCards__list emms__eventCards__list--mb emms__fade-in main-carousel" data-flickity>
                <li class="emms__eventCards__list__item">
                    <div class="emms__eventCards__list__item__picture">
                        <img src="/src/img/card-image-digitaltrends-pre.png" alt="Image Digital Trends">
                        <?php if ($digitalTrendsStates['isPost']) : ?>
                            <p class="top hide">EVENTO FINALIZADO</p>
                        <?php endif ?>
                    </div>
                    <div class="emms__eventCards__list__item__text">
                        <?php if ($digitalTrendsStates['isLive']) : ?>
                            <h3>EMMS Digital Trends <span>EN VIVO</span></h3>
                        <?php else : ?>
                            <h3>EMMS Digital Trends </h3>
                        <?php endif ?>
                        <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. Conferencias, Entrevistas, Casos de éxito, Workshops, Networking ¡y mucho más! Reserva tu lugar ahora.</p>
                        <span>ONLINE Y GRATUITO</span>
                        <div class="emms__eventCards__list__item__text--bottom">
                            <?php if ($digitalTrendsStates['isPre']) : ?>
                                <a class="emms__cta" href="/digital-trends"><?php echo ($content['DTCardButton']); ?></a>
                            <?php elseif ($digitalTrendsStates['isLive']) : ?>
                                <a href="/digital-trends" class="emms__cta">ACCEDE AL VIVO</a>
                            <?php elseif ($digitalTrendsStates['isDuring']) : ?>
                                <a href="/digital-trends" class="emms__cta">SÚMATE AHORA</a>
                            <?php elseif ($digitalTrendsStates['isPost']) : ?>
                                <a href="/digital-trends" class="emms__cta">REVIVE EL EVENTO</a>
                            <?php endif ?>
                        </div>
                    </div>
                </li>
                <li class="emms__eventCards__list__item">
                    <div class="emms__eventCards__list__item__picture">
                        <div class="ribbon__end">
                            EVENTO FINALIZADO
                        </div>
                        <img src="/src/img/card-image-ecommerce-new.png" alt="Ecommerce image">
                    </div>
                    <div class="emms__eventCards__list__item__text">
                        <h3>EMMS E-commerce </h3>
                        <p>Referentes internacionales de la industria te contarán qué tendencias y estrategias emplean en sus Tiendas Online para captar nuevos clientes y aumentar sus ingresos. Mientras esperas por la siguiente edición, nútrete de nuevas ideas para implementar en tu negocio reviviendo la edición 2024.</p>
                        <span>ONLINE Y GRATUITO</span>
                        <div class="emms__eventCards__list__item__text--bottom">
                            <a href="ecommerce" class="emms__cta emms_cta--secondary">REVÍVELO AHORA</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>
