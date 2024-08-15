<?php
include_once('./components/helpers/urlHelper.php');
$normalizedUrl = getNormalizeUrl();
function getLinkByCurrentUrl($url)
{
    $urls = [
        '/' => [
            'twitter' => 'https://twitter.com/intent/tweet?text=¡Vuelve%20el%20EMMS%20Digital%20Trends!%20El%20evento%20online%20y%20gratuito%20de%20Marketing%20Digital%20más%20importante%20de%20España%20y%20Latinoamérica.%20Es%20gratis%20y%20online%20:%29%20Reserva%20tu%20lugar%20ahora:%20https://goemms.com/digital-trends',
            'linkedln' => 'https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fgoemms.com%2Fdigital-trends-registrado&title=%C2%A1Cuenta%20regresiva%20para%20una%20nueva%20edici%C3%B3n%20de%20EMMS%20Digital%20Trends!&summary=%C2%A1Cuenta%20regresiva%20para%20una%20nueva%20edici%C3%B3n%20de%20EMMS%20Digital%20Trends!%20Llega%20el%20evento%20online%20y%20gratuito%20de%20Marketing%20Digital%20m%C3%A1s%20importante%20de%20Espa%C3%B1a%20y%20Latinoam%C3%A9rica.%20Conferencias%2C%20Entrevistas%2C%20Casos%20de%20%C3%A9xito%2C%20Workshops%2C%20Networking%20%C2%A1y%20mucho%20m%C3%A1s!%20Cada%20a%C3%B1o%2C%20miles%20de%20profesionales%20y%20referentes%20en%20la%20industria%20eligen%20este%20evento%20para%20capacitarse.%20Es%20gratis%20y%20online%20%3A)%20Reserva%20tu%20lugar%20ahora%3A%20goemms.com%2Fdigital-trends&mini=true',
            'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https%3A//goemms.com/digital-trends-registrado',
        ],
        '/digital-trends-registrado' => [
            'twitter' => 'https://twitter.com/intent/tweet?text=¡Vuelve%20el%20EMMS%20Digital%20Trends!%20El%20evento%20online%20y%20gratuito%20de%20Marketing%20Digital%20más%20importante%20de%20España%20y%20Latinoamérica.%20Es%20gratis%20y%20online%20:%29%20Reserva%20tu%20lugar%20ahora:%20https://goemms.com/digital-trends',
            'linkedln' => 'https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fgoemms.com%2Fdigital-trends-registrado&title=%C2%A1Cuenta%20regresiva%20para%20una%20nueva%20edici%C3%B3n%20de%20EMMS%20Digital%20Trends!&summary=%C2%A1Cuenta%20regresiva%20para%20una%20nueva%20edici%C3%B3n%20de%20EMMS%20Digital%20Trends!%20Llega%20el%20evento%20online%20y%20gratuito%20de%20Marketing%20Digital%20m%C3%A1s%20importante%20de%20Espa%C3%B1a%20y%20Latinoam%C3%A9rica.%20Conferencias%2C%20Entrevistas%2C%20Casos%20de%20%C3%A9xito%2C%20Workshops%2C%20Networking%20%C2%A1y%20mucho%20m%C3%A1s!%20Cada%20a%C3%B1o%2C%20miles%20de%20profesionales%20y%20referentes%20en%20la%20industria%20eligen%20este%20evento%20para%20capacitarse.%20Es%20gratis%20y%20online%20%3A)%20Reserva%20tu%20lugar%20ahora%3A%20goemms.com%2Fdigital-trends&mini=true',
            'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https%3A//goemms.com/digital-trends-registrado',
        ],
        '/*' => [
            'twitter' => 'https://twitter.com/intent/tweet?text=¡Vuelve%20el%20EMMS%20Digital%20Trends!%20El%20evento%20online%20y%20gratuito%20de%20Marketing%20Digital%20más%20importante%20de%20España%20y%20Latinoamérica.%20Es%20gratis%20y%20online%20:%29%20Reserva%20tu%20lugar%20ahora:%20https://goemms.com/digital-trends',
            'linkedln' => 'https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fgoemms.com%2Fdigital-trends-registrado&title=%C2%A1Cuenta%20regresiva%20para%20una%20nueva%20edici%C3%B3n%20de%20EMMS%20Digital%20Trends!&summary=%C2%A1Cuenta%20regresiva%20para%20una%20nueva%20edici%C3%B3n%20de%20EMMS%20Digital%20Trends!%20Llega%20el%20evento%20online%20y%20gratuito%20de%20Marketing%20Digital%20m%C3%A1s%20importante%20de%20Espa%C3%B1a%20y%20Latinoam%C3%A9rica.%20Conferencias%2C%20Entrevistas%2C%20Casos%20de%20%C3%A9xito%2C%20Workshops%2C%20Networking%20%C2%A1y%20mucho%20m%C3%A1s!%20Cada%20a%C3%B1o%2C%20miles%20de%20profesionales%20y%20referentes%20en%20la%20industria%20eligen%20este%20evento%20para%20capacitarse.%20Es%20gratis%20y%20online%20%3A)%20Reserva%20tu%20lugar%20ahora%3A%20goemms.com%2Fdigital-trends&mini=true',
            'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https%3A//goemms.com/digital-trends-registrado',
        ],
    ];

    return $urls[$url] ??  $urls['/*'];
}

$link = getLinkByCurrentUrl($normalizedUrl);
?>

<div class="emms__share">
    <a id="btn-share" class="emms__share__open-list"><img src="src/img/icons/icon-share.svg" alt="Share"></a>
    <ul id="list-share" class="emms__share__list">
        <li>
            <a href="javascript: void(0);" onclick="window.open ('<?= $link['facebook']?>', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                <img src="src/img/Facebook-w.svg" alt="Facebook">
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" onclick="window.open ('<?= $link['twitter']?>', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                <img src="src/img/Twitter-w.svg" alt="Twitter">
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" onclick="window.open ('<?= $link['linkedln']?>', 'Linkedin', 'toolbar=0, status=0, width=550, height=550');">
                <img src="src/img/LinkedIn-w.svg" alt="LinkedIn">
            </a>
        </li>
    </ul>
</div>
