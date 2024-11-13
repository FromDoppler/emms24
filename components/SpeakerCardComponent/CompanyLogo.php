<?php if (!empty($speaker['image_company'])): ?>
    <?php
    $class_suffix = '';
    switch ($type) {
        case 'debate':
            $class_suffix = '--debate';
            break;
        case 'networking':
        case 'workshop':
            $class_suffix = ' vip';
            break;
    }
    ?>
    <div class="emms__calendar__list__item__card__business<?= $class_suffix ?>">
        <img src="<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
    </div>
<?php endif; ?>
