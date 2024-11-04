     <!-- Companies list -->
     <?php
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sponsors = $db->getSponsorsCards('SPONSOR');
        if (!empty($sponsors)) {
        ?>
         <section class="emms__companies emms__companies--categories" id="aliados">
             <div class="emms__container--lg">
                 <h2 class="emms__fade-in">Nos acompañan en esta edición:</h2>
                 <h3>SPONSORS</h3>
                 <ul class="emms__companies__list emms__companies__list--lg  emms__fade-in">
                     <?php
                        $sponsors = $db->getSponsorsByType('SPONSOR');
                        foreach ($sponsors as $sponsor) : ?>
                         <li class="emms__companies__list__item">
                             <?php if ($sponsor['link_site']) : ?>
                                 <a href="<?= $sponsor['link_site'] ?>" target="_blank">
                                 <?php endif ?>
                                 <img src="./adm24/server/modules/sponsors/uploads/<?= $sponsor['logo_company'] ?>" alt="<?= $sponsor['alt_logo_company'] ?>">
                                 <?php if ($sponsor['link_site']) : ?>
                                 </a>
                             <?php endif ?>
                         </li>

                     <?php endforeach; ?>
                 </ul>
                 <div class="emms__companies__divisor"></div>
                 <h3>MEDIA PARTNERS EXCLUSIVE</h3>
                 <ul class="emms__companies__list emms__companies__list  emms__fade-in">
                     <?php
                        $sponsors = $db->getSponsorsByType('PREMIUM');
                        foreach ($sponsors as $sponsor) : ?>
                         <li class="emms__companies__list__item">
                             <?php if ($sponsor['link_site']) : ?>
                                 <a href="<?= $sponsor['link_site'] ?>" target="_blank">
                                 <?php endif ?>
                                 <img src="./adm24/server/modules/sponsors/uploads/<?= $sponsor['logo_company'] ?>" alt="<?= $sponsor['alt_logo_company'] ?>">
                                 <?php if ($sponsor['link_site']) : ?>
                                 </a>
                             <?php endif ?>
                         </li>

                     <?php endforeach; ?>
                 </ul>
                 <div class="emms__companies__divisor"></div>
                 <h3>MEDIA PARTNERS STARTERS</h3>
                 <ul class="emms__companies__list emms__companies__list  emms__fade-in" id="mediaPartenersStarters">
                 </ul>
                 <small class="emms__fade-in"><strong>¿Tienes dudas sobre el EMMS? <a href="https://goemms.com/#preguntas-frecuentes"> Haz clic aquí </a>y encuentra las preguntas más frecuentes sobre el evento</strong></small>
                 <a href="https://goemms.com/sponsors-promo" class="emms__cta">CONVIÉRTETE EN ALIADO</a>
             </div>
         </section>
         <script src="/src/<?= VERSION ?>/js/sponsors.js"></script>
     <?php }
     $db->close();
     ?>
