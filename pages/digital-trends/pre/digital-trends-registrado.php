<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/head.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/head.php'); ?>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/gtm.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar-reg.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/share.php') ?>
    <main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/hello-module.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/video-ticketing.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/vip-features.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/digital-trends/entry-plans.php') ?>
        <div class="emms__bg-dark-gradient">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/schedule/schedule.php') ?>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/premium-content.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/grid-event-types.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/companies-list.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/doppler-academy-banner.php'); ?>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'); ?>

</body>

</html>
