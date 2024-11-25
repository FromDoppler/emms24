<?php
// Establecer el tipo de contenido
header('Content-Type: image/png');
header("Access-Control-Allow-Origin: https://qa.goemms.com");

// Tamaño de la imagen
$img_w = 1080;
$img_h = 763;

// El texto a dibujar
$name = $_GET['fullname'];
$type = $_GET['type'];
$imgName =  'certificadoemms2024-' . $type . '.png';

if ($type === 'workshop') {
    $workshopType = $_GET['workshoptype'];
    $workshopMap = [
        'luisperez-56WWP' => 'luisperez',
        'anadiazdelrio-10FAS' => 'anadiazdelrio',
        'arturoyepez-38TBU' => 'arturoyepez',
        'norbertocerasale-60IYW' => 'norbertocerasale',
        'joserobles-38BUU' => 'joserobles',
        'andreabozzo-17LQW' => 'andreabozzo',
        'luismaram-28IMB' => 'luismaram',
        'jmgareli-56DVQ' => 'jmgareli',
    ];
    $imgName = 'certificadoemms2024-' . $workshopMap[$workshopType] . '.png';
}

// Crear la imagen
$im = imagecreatefrompng($imgName);

// Crear algunos colores
$txt_color = imagecolorclosest($im, 48, 33, 0);

// Fuentes
$ffontProximaItalic = './fonts/proxima-nova-italic.ttf';
$ffontGotham = './fonts/gothamroundedmedium.ttf';

// Centrar nombre
$bbox_name = imagettfbbox(44,0,$ffontGotham,$name);
$bbox_name_x = $bbox_name[0] + (imagesx($im) / 2) - ($bbox_name[4] / 2);

// Añadir el titulo
imagettftext($im, 44, 0, $bbox_name_x, 600, $txt_color, $ffontGotham, $name);

// Usar imagepng() resultará en un texto más claro comparado con imagejpeg()
imagepng($im);

imagedestroy($im);
