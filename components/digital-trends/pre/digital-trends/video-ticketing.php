<section class="emms__centralvideo hidden--vip">
    <div class="emms__centralvideo__head">
        <h2>¡Quedan pocas entradas!</h2>
        <span>Apúrate a reservar tu entrada VIP si…</span>
    </div>
    <div class="emms__container--lg reverse-mb">
        <ul class="emms__centralvideo__list emms__centralvideo__list--live emms__fade-in">
            <p class="emms__centralvideo__tag-play emms__centralvideo__tag-play--live tag-play--playable" id="playVideo">Dale play al video</p>
            <li>Te has quedado sin ideas para crear contenido</li>
            <li>Necesitas una asesoría personalizada </li>
            <li>Sientes que el crecimiento de tu negocio se ha estancado</li>
            <li>Necesitas aumentar tu visibilidad de marca</li>
            <li>Buscas una experiencia inmersiva de Marketing</li>
            <a href="#entradas" class="emms__cta">HAZTE VIP AHORA</a>
        </ul>
        <div class="emms__centralvideo__video lg emms__fade-in">
            <!-- TODO: Replace video -->
            <video id="videoTicketing" src="src/img/EmmsEcommerceNew.mp4" controls></video>
        </div>
    </div>
</section>
<script>
    const playParagraph = document.getElementById('playVideo');
    const videoTicketing = document.getElementById('videoTicketing');

    playParagraph.addEventListener('click', () => {
        videoTicketing.play();
    });
</script>
