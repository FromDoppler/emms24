<?php
if (!function_exists('getDescriptionButton')) {
    /**
     * Genera un botón de redirección para la card de speaker.
     *
     * @param string $type El tipo de evento, debe ser 'networking' para mostrar el botón.
     * @param array $speakerUrl URL a donde va a dirigir el botón.
     * @return string HTML del botón generado o un string vació si no cumple los requisitos.
     */
    function getDescriptionButton($type, $speakerUrl)
    {
        // Verificar si el tipo es válido
        if (!in_array($type, ['workshop'])) {
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

        // Retorna el botón generado
        return <<<HTML
        <a {$href} class="emms__cta {$class} show--vip" {$attributes}>ACCEDE AQUI</a>
        <a href="#entradas" class="emms__cta hidden--vip" >HAZTE VIP</a>
        HTML;
    }
}
?>

<?= getDescriptionButton($type, $speaker['youtube']); ?>
