<?php
$url = $_SERVER['REQUEST_URI'];

$normalizedUrl = rtrim($url, '/');
function getCompaniesBlock($url)
{
    $blocks = [
        '/' => [
            'block' => 'noButtonBlock',
        ],
        '/registrado' => [
            'block' => 'noButtonBlock',
        ],
        '/digital-trends' => [
            'block' => 'buttonBlock',
        ],
        '/digital-trends-registrado' => [
            'block' => 'buttonBlock',
        ],
        '/*' => [
            'block' => 'noButtonBlock',
        ],
    ];

    return $blocks[$url] ?? $blocks['/*'];
}
$block = getCompaniesBlock($normalizedUrl);

?>
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
        <?php if ($block['block'] === 'noButtonBlock') : ?>
    <?php elseif ($block['block'] === 'buttonBlock') : ?>
        <a href="/sponsors-promo" class="emms__cta emms__fade-in emms__cta--nd xl">CONVIÉRTETE EN ALIADO</a>
    <?php endif; ?>
        <small class="emms__fade-in"><strong>¿Tienes dudas sobre el EMMS? <a href="/#preguntas-frecuentes">Haz clic aquí</a> y encuentra las preguntas más frecuentes sobre el evento.</strong></small>
    </div>

</section>
