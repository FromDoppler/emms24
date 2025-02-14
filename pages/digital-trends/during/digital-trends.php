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
        import {
            eventsType
        } from '/src/<?= VERSION ?>/js/enums/eventsType.enum.js';
        hiddenOrShowUserUI(eventsType.ECOMMERCE);
    </script>
    <script type="module">
        import {
            toggleVipDigitalTrendsElements
        } from '/src/<?= VERSION ?>/js/toggleVipElements.js';
        toggleVipDigitalTrendsElements();
    </script>
</head>

<body class="emms__ecommerce">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/gtm.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/hello-bar.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar-unreg.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/share.php') ?>

    <main>
        <div class="register-form__container eventHiddenElements">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/register-form.php') ?>
        </div>
        <div class="register-noform__container  eventShowElements">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/register-withoutform.php') ?>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/schedule/schedule.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/benefit-icons.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/premium-content.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/central-video.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/sponsorsList.php') ?>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'); ?>
</body>

</html>
