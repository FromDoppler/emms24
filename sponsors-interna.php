<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/DB.php');

if (isset($_GET['slug'])) {
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $sponsor = $db->getSponsorsBySlug($_GET['slug']);
    if (count($sponsor) != 0) {
        $sponsor = $sponsor[0];
    } else {
        header('Location: ' . 'sponsors');
    }
} else {
    header('Location: ' . 'sponsors');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/head-home.php'); ?>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/head.php'); ?>
</head>

<body class="emms__internal-sponsors">

    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo">
                <a href="./"><img src="/src/img/logos/logo-emms.png" alt="Emms 2024"></a>
            </div>
            <div class="emms__header__logo">
                <a href="<?= $sponsor['link_site'] ?>"><img src="./adm24/server/modules/sponsors/uploads/<?= $sponsor['image_landing'] ?>" alt="<?= $sponsor['alt_image_landing'] ?>"></a>
            </div>
        </div>
    </header>

    <main>

        <?php if (!empty($sponsor['youtube'])) :  ?>
            <!-- Hero -->
            <section class="emms__internal-sponsors__hero emms__bg-section-2">
                <div class="emms__container--lg emms__fade-top">
                    <div class="emms__internal-sponsors__hero__content">
                        <h1><?= $sponsor['title'] ?></h1>
                        <p><?= $sponsor['description'] ?></p>
                    </div>
                    <div class="emms__internal-sponsors__hero__video">
                        <iframe src="https://www.youtube.com/embed/<?= $sponsor['youtube'] ?>"></iframe>
                    </div>
                </div>
            </section>

            <!-- Resource -->
            <section class="emms__internal-sponsors__resource">
                <div class="emms__container--md emms__fade-in">
                    <div class="emms__internal-sponsors__resource__picture">
                        <img src="/src/img/sponsor-asset.png" alt="download">
                    </div>
                    <div class="emms__internal-sponsors__resource__text">
                        <p><?= $sponsor['description_magnet'] ?></p>
                        <a href="<?= $sponsor['link_magnet'] ?>" class="emms__cta">ACCEDE</a>
                    </div>
                </div>
            </section>

        <?php else : ?>

            <!-- Resource -->
            <section class="emms__internal-sponsors__resource mt">
                <div class="emms__container--md emms__fade-in">
                    <div class="emms__internal-sponsors__resource__picture">
                        <img src="/src/img/download--locked-24.png" alt="download">
                    </div>
                    <div class="emms__internal-sponsors__resource__text">
                        <h2><?= $sponsor['title_magnet'] ?></h2>
                        <p><?= $sponsor['description_magnet'] ?></p>
                        <a href="<?= $sponsor['link_magnet'] ?>" class="emms__cta">ACCEDE</a>
                    </div>
                </div>
            </section>

        <?php endif; ?>

        <!-- Description -->
        <section class="emms__internal-sponsors__description">
            <div class="emms__container--md emms__fade-in">
                <h2>Conoce más sobre <?= $sponsor['title_promo_company'] ?></h2>
                <p><?= $sponsor['description_promo_company'] ?></p>
                <a href="<?= $sponsor['link_promo_company'] ?>" class="emms__cta">CONOCE MÁS</a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/footer.php'); ?>

</body>

</html>
