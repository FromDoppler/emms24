<?php

$contents = [
    '/' => [
        'heading' => 'Súmate al EMMS Digital Trends 2024 y entérate las últimas innovaciones en Marketing Digital',
        'body' => 'Descubre en este video todo lo que pasó en la última edición y por qué miles de profesionales
y referentes en la industria eligen este evento para capacitarse.',
        'button' => 'RESERVA TU CUPO GRATIS',
        'link' => 'digital-trends#registro',
    ],
    '/digital-trends' => [
        'heading' => 'Inspírate con el mayor evento hispano de Marketing Digital',
        'body' => 'Conoce en este video qué hace al EMMS Digital Trends el lugar ideal para capacitarte
y aprender cómo hacer crecer tu negocio junto a los líderes del sector.',
        'button' => 'REGÍSTRATE AHORA',
        'link' => '#registro',
    ],
    '/*' => [
        'heading' => 'Súmate al EMMS Digital Trends 2024 y entérate las últimas innovaciones en Marketing Digital',
        'body' => 'Descubre en este video todo lo que pasó en la última edición y por qué miles de profesionales
y referentes en la industria eligen este evento para capacitarse.',
        'button' => 'RESERVA TU CUPO GRATIS',
        'link' => 'digital-trends#registro',
    ],
];


$url = $_SERVER['REQUEST_URI'];
$normalizedUrl = rtrim($url, '/');
$content = $contents[$normalizedUrl] ?? $contents['/*'];
?>

<section class="emms__centralvideo">
    <div class="emms__container--lg emms__container--lg--column ">
        <div class="emms__centralvideo__title emms__fade-in">
            <h2><?php echo ($content['heading']); ?></h2>
            <p><?php echo ($content['body']); ?></p>
        </div>
        <div class="emms__centralvideo__video emms__fade-in">
            <video src="src/img/EmmsDigitalTrends.mp4" controls></video>
        </div>
        <a href="<?php echo ($content['link']); ?>" class="emms__cta"><?php echo ($content['button']); ?></a>
    </div>
</section>
