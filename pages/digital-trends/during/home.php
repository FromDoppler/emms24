<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/home/head.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/head.php'); ?>
</head>

<body class="emms__home">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/gtm.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/hello-bar.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/navbar-unreg.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/share.php');
    ?>

    <main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/home/hello-module.php');   ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/central-video.php'); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/event-numbers.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/speakers-carousel.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/premium-content.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/users-comments.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/during/faqs.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/digital-trends/pre/companies-list.php') ?>

    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'); ?>

</body>

</html>
