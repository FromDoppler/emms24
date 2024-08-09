<?php
require_once('././config.php');
require_once('././src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./components/digital-trends/pre/digital-trends/head.php'); ?>
    <?php include('./components/head.php'); ?>
    <script type="module">
        import {
            hiddenOrShowUserUI
        } from './src/<?= VERSION ?>/js/user.js';
        hiddenOrShowUserUI('digital-trends24');
    </script>
</head>

<body class="emms__ecommerce">
    <?php include('./components/gtm.php'); ?>
    <?php include('./components/navbar-unreg.php') ?>
    <?php include('./components/share.php') ?>
    <main>
        <div class="register-form__container eventShowElements">
            <?php include('./components/digital-trends/pre/register-form.php') ?>
        </div>
        <div class="register-noform__container  eventHiddenElements">
            <?php include('./components/digital-trends/pre/register-withoutform.php') ?>
        </div>
        <div class="emms__bg-dark-gradient">
            <?php include('./components/digital-trends/pre/grid-event-types.php') ?>
            <?php include('./components/digital-trends/pre/event-numbers.php') ?>
        </div>
        <?php include('./components/digital-trends/pre/speakers-carousel.php') ?>

        <?php include('./components/digital-trends/pre/premium-content.php') ?>
        <?php include('./components/digital-trends/pre/central-video.php') ?>
        <?php include('./components/digital-trends/pre/users-comments.php') ?>
        <?php include('./components/digital-trends/pre/companies-list.php') ?>
    </main>
    <?php include('./components/footer.php'); ?>
</body>

</html>
