<?php
require_once('././config.php');
require_once('././src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('././src/components/head-ecommerce.php'); ?>
    <?php include_once('././src/components/head.php'); ?>
    <script type="module">
        import {
            getUrlWithParams
        } from './src/<?= VERSION ?>/js/common/index.js';
        import {
            eventsType
        } from './src/<?= VERSION ?>/js/enums/eventsType.enum.js';
        import {
            userRegisteredInEvent,
            checkEncodeUrl
        } from './src/<?= VERSION ?>/js/user.js';
        checkEncodeUrl();
        if (!userRegisteredInEvent(eventsType.ECOMMERCE)) {
            window.location.href = getUrlWithParams('/ecommerce');
        }
    </script>
</head>

<body class="emms__ecommerce emms__ecommerce-logueado">
    <?php include_once('././src/components/gtm.php'); ?>

    <!-- Header -->
    <header class="emms__header">
        <div class="emms__container--lg emms__fade-in">
            <div class="emms__header__logo emms__header__logo--ecommerce">
                <a href="/"><img src="src/img/logos/logo-emms-ecommerce.png" alt="Emms Ecommerce 2023"></a>
            </div>
            <a class="emms__header__nav--mb" id="btn-burger"></a>
            <nav class="emms__header__nav emms__header__nav--hidden" id="nav-mb">
                <ul class="emms__header__nav__menu">
                    <li><a href="/">home</a></li>
                    <li><a href="./ecommerce-registrado" class="active">e-commerce</a>
                    </li>
                    <li><a href="/sponsors">biblioteca de recursos</a></li>
                    <li class="emms__header__nav__menu__dropdown"><a href="./ediciones-anteriores-registrado">Qué es el EMMS</a>
                        <ul class="emms__header__nav__submenu">
                            <li><a href="./ediciones-anteriores-registrado#sobre-emms">Sobre el EMMS</a></li>
                            <li><a href="./ediciones-anteriores-registrado#ediciones-anteriores">Revive ediciones anteriores</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="emms__checkout">
            <!-- Form -->
            <div class="emms__checkout__container emms__checkout__card__container--form emms__fade-in">
                <div class="emms__checkout__card">
                    <?php include 'public/checkout.html' ?>
                </div>
                <a href="./ecommerce-registrado.php" class="emms__checkout__back">← Volver al sitio</a>
            </div>
        </div>
        <!-- Frequent Questions -->
        <section class="emms__frequentquestions" id="preguntas-frecuentes">
            <div class="emms__background-a"></div>
            <div class="emms__container--md">
                <h2 class="emms__fade-in">Preguntas frecuentes</h2>
                <ul class="emms__frequentquestions__list emms__fade-in">
                    <li class="emms__frequentquestions__list__item open">
                        <button class="emms__frequentquestions__list__item__head">¿Cómo puedo abonar mis entradas?</button>
                        <p class="emms__frequentquestions__list__item__content">Podrás abonar mediante tarjeta de crédito internacional, Visa, Mastercard o American Express. Para realizar la compra deberás completar los datos solicitados, proporcionarnos tu información de facturación y cargar los datos de la tarjeta. Una vez aprobado el pago, recibirás un mail de confirmación de compra al correo electrónico que hayas indicado como contacto.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">¿Cómo recibo mi entrada VIP?</button>
                        <p class="emms__frequentquestions__list__item__content">Una vez realizado el proceso de compra, recibirás un email de confirmación y ¡listo! Ya tendrás reservado tu cupo. Solamente deberás ingresar al evento con el email con el que te has registrado y tus datos de contacto para comenzar a vivir el EMMS E-commerce 2024.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">¿Cómo veré reflejado el pago de las entradas en mi cuenta?</button>
                        <p class="emms__frequentquestions__list__item__content">El cargo que se realice en tu tarjeta aparecerá en tu próximo resumen con la descripción “Entrada VIP EMMS E-commerce 2024”. Recuerda que los montos originales están expresados en dólares estadounidenses y los impuestos dependerán del método de pago elegido y el país donde se efectúe el pago.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">¿Obtendré factura por mi compra?</button>
                        <p class="emms__frequentquestions__list__item__content">Si requieres la facturación de la entrada VIP adquirida, escríbenos a <a href="mailto:billing@fromdoppler.com">billing@fromdoppler.com</a> con asunto “Factura entrada VIP EMMS E-commerce 2024” y en breve te enviaremos la factura digital correspondiente.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">¿Qué dato ingreso en el proceso de compra si no conozco mi Tax ID?</button>
                        <p class="emms__frequentquestions__list__item__content">Este dato corresponderá a tu NIF, CIF, CUIT, RFC, CC, RUC, DUI, RUT, Cédula o la opción fiscal adecuada a tu país de residencia. Si eres consumidor final, simplemente ingresa tu Documento de Identidad.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">¿Puedo pedir un reembolso?</button>
                        <p class="emms__frequentquestions__list__item__content">En caso de que te arrepientas de la compra, puedes solicitar la cancelación de la misma y posterior devolución del dinero hasta 48 hs antes del evento. Para ello, deberás enviarnos un correo a <a href="mailto:administracion@fromdoppler.com">administracion@fromdoppler.com</a> adjuntando la factura de compra que recibiste para que podamos gestionar el reembolso.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">¿A quién acudo si tengo problemas con mi pago?</button>
                        <p class="emms__frequentquestions__list__item__content">Si tienes registro de un débito erróneo en el resumen de tu tarjeta, te pedimos que nos envíes un correo a <a href="mailto:administracion@fromdoppler.com">administracion@fromdoppler.com</a> indicando lo sucedido para que podamos ayudarte.</p>
                    </li>
                    <li class="emms__frequentquestions__list__item close">
                        <button class="emms__frequentquestions__list__item__head">¿Qué beneficio tiene la entrada VIP?</button>
                        <p class="emms__frequentquestions__list__item__content">Dependiendo de la categoría de entrada elegida podrás reservar tu cupo individual para sumarte al Networking y a los Workshops prácticos, o simplemente acceder a las Conferencias gratuitas del EMMS E-commerce 2024.</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>
    <script src="src/<?= VERSION ?>/js/collapsibles.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="public/checkout.js?v=3" defer></script>

</body>

</html>
