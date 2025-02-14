<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/digital-trends/head.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/head.php'); ?>
    <script type="module">
        import {
            hiddenOrShowUserUI
        } from '/src/<?= VERSION ?>/js/user.js';
        hiddenOrShowUserUI('digital-trends24');
    </script>
    <script type="module">
        import {
            toggleVipDigitalTrendsElements
        } from '/src/<?= VERSION ?>/js/toggleVipElements.js';

        toggleVipDigitalTrendsElements();
    </script>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/gtm.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/hello-bar.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar-reg.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/share.php') ?>
    <main>
        <section class="emms__hero-conference emms__hero-conference--live emms__hero-conference--chat">
            <div class="emms__container--lg">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/digital-trends/event-live.php') ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/digital-trends/certificate/certificate.php') ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/marquee.php') ?>
            </div>
        </section>
        <div class="emms__bg-dark-gradient">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/schedule/schedule.php') ?>
        </div>
        <div class="hidden--vip">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/video-ticketing.php') ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/vip-features.php') ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/entry-plans.php') ?>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/benefit-icons.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/premium-content.php') ?>
        <!-- Academy Banner === show--vip, This class is not used to prevent interfering with flickity -->
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/doppler-academy-banner.php'); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/sponsorsList.php') ?>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'); ?>
    <script src="src/<?= VERSION ?>/js/newDate.js" type="module"></script>

</body>

</html>
