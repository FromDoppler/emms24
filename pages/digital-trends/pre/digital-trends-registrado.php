<?php
require_once('././config.php');
require_once('././src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./components/digital-trends/pre/digital-trends/head.php'); ?>
    <?php include('./components/head.php'); ?>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado">
    <?php include('./components/gtm.php'); ?>
    <?php include('./components/navbar-reg.php') ?>
    <?php include('./components/share.php') ?>
    <main>
        <?php include('./components/digital-trends/pre/digital-trends/hello-module.php') ?>
        <?php include('./components/digital-trends/pre/central-video.php') ?>
        <?php include('./components/digital-trends/pre/premium-content.php') ?>
        <?php include('./components/digital-trends/pre/grid-event-types.php') ?>
        <?php include('./components/digital-trends/pre/companies-list.php') ?>
        <?php include('./components/digital-trends/pre/doppler-academy-banner.php'); ?>
    </main>
    <?php include('./components/footer.php'); ?>

</body>

</html>
