<?php

$contents = [
    '/' => [
        'heading' => 'Súmate al EMMS Digital Trends 2024 y entérate las últimas innovaciones en Marketing Digital',
        'body' => 'Descubre en este video por qué miles de profesionales y referentes en la industria eligen este evento para capacitarse.',
        'button' => 'RESERVA TU CUPO GRATIS',
        'link' => 'digital-trends#registro',
        'videoName' => 'EMMS-dt-no-registrado.mp4',
    ],
    '/digital-trends' => [
        'heading' => 'Inspírate con el mayor evento hispano de Marketing Digital',
        'body' => 'Conoce en este video qué hace al EMMS Digital Trends el lugar ideal para capacitarte
y aprender cómo hacer crecer tu negocio junto a los líderes del sector.',
        'button' => 'REGÍSTRATE AHORA',
        'link' => '#registro',
        'videoName' => 'EMMS-registrado.mp4',
    ],
    '/*' => [
        'heading' => 'Súmate al EMMS Digital Trends 2024 y entérate las últimas innovaciones en Marketing Digital',
        'body' => 'Descubre en este video por qué miles de profesionales y referentes en la industria eligen este evento para capacitarse.',
        'button' => 'RESERVA TU CUPO GRATIS',
        'link' => 'digital-trends#registro',
        'videoName' => 'EMMS-dt-no-registrado.mp4',
    ],
];

// Due to the size of the videos, they cannot be uploaded to GitHub.
// A reference to them will be left in drive files.

// videoName no register https://drive.google.com/file/d/1cxqw-0DrW7W09y-q3K9k3XLGOKeo1W9N/view
// videoName register  https://drive.google.com/file/d/1jSMbjg3YvUm2lC87ysm8VAReRnK60lac/view

include_once('./components/helpers/urlHelper.php');
$normalizedUrl = getNormalizeUrl();
$content = $contents[$normalizedUrl] ?? $contents['/*'];
?>

<section class="emms__centralvideo">
    <div class="emms__container--lg emms__container--lg--column ">
        <div class="emms__centralvideo__title emms__fade-in">
            <h2><?php echo ($content['heading']); ?></h2>
            <p><?php echo ($content['body']); ?></p>
        </div>
        <div class="emms__centralvideo__video emms__fade-in">
            <video src="src/videos/<?php echo ($content['videoName']); ?>" controls></video>
        </div>
        <a href="<?php echo ($content['link']); ?>" class="emms__cta"><?php echo ($content['button']); ?></a>
    </div>
</section>
