<?php

$contents = [
    '/digital-trends' => [
        'buttonNoVip' => '',
    ],
    '/digital-trends-registrado' => [
        'buttonNoVip' => ' <a href="#entradas" class="emms__cta hidden--vip" >HAZTE VIP</a>',
    ],
    '/*' => [
        'buttonNoVip' => '',
    ],
];

include_once($_SERVER['DOCUMENT_ROOT'] . '/components/helpers/urlHelper.php');
$normalizedUrl = getNormalizeUrl();
$content = $contents[$normalizedUrl] ?? $contents['/*'];


if (!function_exists('getDescriptionButton')) {
    /**
     * Genera un botón de redirección para la card de speaker.
     *
     * @param string $type El tipo de evento, debe ser 'networking' para mostrar el botón.
     * @param array $speakerUrl URL a donde va a dirigir el botón.
     * @return string HTML del botón generado o un string vació si no cumple los requisitos.
     */
    function getDescriptionButton($type, $speakerUrl, $content)
    {
        // Verificar si el tipo es válido
        if (!in_array($type, ['workshop', 'conference', 'interview'])) {
            return '';
        }

        // URL del speaker
        $speakerUrl = $speakerUrl ?? '';
        $isActive = !empty($speakerUrl);
        $class = $isActive ? 'emms__cta--nd' : 'inactive--button-card';

        // Definir atributos dinámicamente
        $attributes = $isActive
            ? 'target="_blank"'
            : 'aria-disabled="true" data-tooltip="El enlace aún no está disponible" title="El enlace aún no está disponible" disabled';

        // atributo href, is no tiene link se elimina el href para que no se genere vació
        $href = $isActive ? "href=\"{$speakerUrl}\"" : '';


        // lógica para agregar botones de compra para workshop vip
        $additionalContent = '';
        $vipClass = '';
        if ($type === 'workshop') {
            $additionalContent = $content['buttonNoVip'] ?? '';
            $vipClass = 'show--vip';
        }


        // Retorna el botón generado
        return <<<HTML
        <a {$href} class="emms__cta {$class} {$vipClass} speaker-button" {$attributes}>ACCEDE AHORA</a>
        {$additionalContent}
        HTML;
    }
}
?>

<?= getDescriptionButton($type, $speaker['youtube'], $content); ?>
