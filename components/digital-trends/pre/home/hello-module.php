<!-- Hero -->
<section class="emms__home__hero">
  <div class="emms__home__hero__title emms__fade-top">
    <h1><em>TODAS LAS TENDENCIAS EN MARKETING DIGITAL, EN UN SOLO LUGAR</em> El EMMS 2024 llegó para quedarse</h1>
    <h2>ONLINE Y GRATUITO</h2>
    <p>Revoluciona tu forma de hacer negocios y potencia tus resultados con el mayor evento de Latam y España. Mientras esperas por la edición de tendencias digitales, <a href="./ecommerce">revive el EMMS E-commerce.</a>
    </p>
  </div>
  <div id="eventos"></div>
  <!-- Event cards -->
  <div class="emms__eventCards">
    <div class="emms__container--lg">
      <ul class="emms__eventCards__list emms__eventCards__list--dk emms__fade-in">
        <li class="emms__eventCards__list__item">
          <div class="ribbon ribbon--registered ">
            <span class="ribbon3 ribbon3--post"><img src="src/img/play.png" alt=""> MUY PRONTO</span>
          </div>
          <div class="emms__eventCards__list__item__picture">
            <img src="src/img/card-image-digitaltrends.png" alt="Image Digital Trends">
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
            <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. ¡Novedades muy pronto! Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores#ediciones-anteriores">reviviendo la edición 2023</a>.</strong></p>
            <div class="emms__eventCards__list__item__text--bottom">
              <?php if ($digitalTrendsStates['isPre']) : ?>
                <a class="emms__cta inactive">PRÓXIMAMENTE</a>
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
            <div class="ribbon ribbon--registered ">
              <span class="ribbon3 ribbon3--post"><img src="src/img/play.png" alt=""> EVENTO FINALIZADO</span>
            </div>
            <img src="src/img/card-image-ecommerce.png" alt="Play icon">
            <p class="top hide">EVENTO FINALIZADO</p>
          </div>
          <div class="emms__eventCards__list__item__text">
            <h3>EMMS E-commerce </h3>
            <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
            <div class="emms__eventCards__list__item__text--bottom">
              <a href="ecommerce" class="emms__cta">REVÍVELO GRATIS</a>
            </div>
          </div>
        </li>
      </ul>
      <ul class="emms__eventCards__list emms__eventCards__list--mb emms__fade-in main-carousel" data-flickity>
        <li class="emms__eventCards__list__item">
          <div class="emms__eventCards__list__item__picture">
            <img src="src/img/card-image-ecommerce.png" alt="Play icon">
            <p class="top hide">EVENTO FINALIZADO</p>
          </div>

          <div class="emms__eventCards__list__item__text">
            <h3>EMMS E-commerce </h3>
            <p>Referentes internacionales de la industria comparten contigo las <strong>tendencias y estrategias que emplean en sus Tiendas Online</strong> para captar nuevos clientes y aumentar sus ingresos.</p>
            <div class="emms__eventCards__list__item__text--bottom">
              <a href="ecommerce" class="emms__cta">REVIVE EL EVENTO</a>
            </div>
          </div>
        </li>
        <li class="emms__eventCards__list__item">
          <div class="emms__eventCards__list__item__picture">
            <img src="src/img/card-image-digitaltrends.png" alt="Image Digital Trends">
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
            <p>Descubre las últimas innovaciones en Marketing Digital aplicadas por las empresas que marcan tendencia en la industria. ¡Novedades muy pronto! Mientras esperas por la siguiente, nútrete de nuevas <strong>ideas para implementar en tu negocio <a href="./ediciones-anteriores#ediciones-anteriores">reviviendo la edición 2023</a>.</strong></p>
            <div class="emms__eventCards__list__item__text--bottom">
              <?php if ($digitalTrendsStates['isPre']) : ?>
                <a class="emms__cta inactive">PRÓXIMAMENTE</a>
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
      </ul>
    </div>
  </div>
  </div>
</section>