<?php if (!empty($speaker['bio']) && $speaker['bio'] != '0'): ?>
    <li>
        <a class="emms__calendar__list__item__card__btn-bio">Ver Bio →</a>

        <div class="emms__calendar__list__item__card__bio emms__calendar__list__item__card__bio--hide bio-speaker">

            <?php
            $labelClass = $type === 'conference' ? 'emms__calendar__list__item__card__label--free' : 'emms__calendar__list__item__card__label--vip';
            $labelText = $type === 'conference' ? 'Conferencia' : 'Workshop - exclusivo VIP';
            $bioContentClass = $type === 'conference' ? 'emms__calendar__list__item__card__bio__content--free' : 'emms__calendar__list__item__card__bio__content--vip';
            ?>

            <!-- Etiqueta de tipo de evento -->
            <div class="emms__calendar__list__item__card__label <?= $labelClass ?>">
                <p><?= $labelText ?></p>
            </div>

            <!-- Contenido de la biografía -->
            <div class="emms__calendar__list__item__card__bio__content <?= $bioContentClass ?>">
                <div class="emms__calendar__list__item__card__speaker__image">
                    <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                </div>
                <h4><?= $speaker['name'] ?></h4>
                <h5><?= $speaker['job'] ?></h5>
                <p><?= $speaker['bio'] ?></p>
            </div>

            <!-- Botón para cerrar la biografía -->
            <a class="emms__calendar__list__item__card__btn-bio-hide"> Volver</a>
        </div>
    </li>
<?php endif; ?>
