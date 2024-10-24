<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/components/helpers/urlHelper.php');
$normalizedUrl = getNormalizeUrl();
function getBlock($url)
{
    $blocks = [
        '/digital-trends' => [
            'block' => 'dt',
        ],
        '/digital-trends-registrado' => [
            'block' => 'dt-registrado',
        ],
        '/*' => [
            'block' => 'digital-trend',
        ],
    ];

    return $blocks[$url] ?? $blocks['/*'];
}
$block = getBlock($normalizedUrl);
?>

<section class="emms__calendar" id="agenda">
    <div class="emms__container--lg">
        <div class="emms__calendar__title emms__fade-in">
            <h2>Agenda EMMS Digital Trends 2024</h2>
            <p class="hidden--vip">Del 26 al 28 de noviembre podrás disfrutar de Conferencias y Workshops, como así también
                de un espacio de Networking diseñado especialmente para que puedas conectar y proyectar colaboraciones con especialistas de Marketing Digital.</p>
            <p class="show--vip">Descubre aquí los Speakers internacionales y las actividades exclusivas que te esperarán en esta edición. <br> Conferencias, Workshops, Casos de Éxito, Networking ¡y muchos más!</p>
        </div>
        <?php include('speakers.php') ?>

        <?php if ($block['block'] === 'dt') : ?>
            <div class="emms__calendar__bottom emms__fade-in  eventHiddenElements hidden--vip">
                <a href="#registro" class="emms__cta">REGÍSTRATE GRATIS</a>
            </div>
        <?php elseif ($block['block'] === 'dt-registrado') : ?>
            <div class="emms__calendar__bottom emms__fade-in hidden--vip">
                <a href="#entradas" class="emms__cta">COMPRA TU ENTRADA VIP</a>
            </div>
        <?php endif; ?>
    </div>
</section>
