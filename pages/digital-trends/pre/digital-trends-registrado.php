<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/head.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/head.php'); ?>
    <script type="module">
        import {
            toggleVipDigitalTrendsElements
        } from '/src/<?= VERSION ?>/js/toggleVipElements.js';

        toggleVipDigitalTrendsElements();
    </script>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/gtm.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar-reg.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/share.php') ?>
    <main>
        <div class="show--vip">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/hello-module.php') ?>
        </div>
        <div class="hidden--vip">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/hello-vip-module.php') ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/video-ticketing.php') ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/vip-features.php') ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/entry-plans.php') ?>
        </div>
        <div class="emms__bg-dark-gradient show--vip">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/schedule/schedule.php') ?>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/benefit-icons.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/premium-content.php') ?>

        <!-- Academy Banner === show--vip, This class is not used to prevent interfering with flickity -->
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/doppler-academy-banner.php'); ?>
        <div class="hidden--vip">
            <?php include('./src/components/companiesList.php') ?>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'); ?>

</body>

</html>
