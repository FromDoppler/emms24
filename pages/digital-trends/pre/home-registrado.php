<?php
require_once('././src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./components/digital-trends/pre/home/head.php'); ?>
    <?php include('./components/head.php'); ?>
</head>

<body class="emms__home">
    <?php include('./components/gtm.php'); ?>
    <?php include('./components/navbar-reg.php') ?>
    <?php include('./components/share.php') ?>
    <main>
        <?php include('./components/digital-trends/pre/home/hello-module.php') ?>
        <?php include('./components/digital-trends/pre/event-numbers.php') ?>
        <?php include('./components/digital-trends/pre/speakers-carousel.php') ?>
        <?php include('./components/digital-trends/pre/premium-content.php') ?>
        <?php include('./components/digital-trends/pre/doppler-academy-banner.php'); ?>
        <?php include('./components/digital-trends/pre/faqs.php') ?>
        <?php include('./components/digital-trends/pre/companies-list.php') ?>
    </main>
    <?php include('./components/footer.php'); ?>
</body>

</html>
