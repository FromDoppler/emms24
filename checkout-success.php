<?php
require_once('././config.php');
require_once('././src/components/cacheSettings.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('././src/components/head-ecommerce.php'); ?>
    <?php include_once('././src/components/head.php'); ?>
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
                    <section id="success" class="hidden">
                        <div class="emms__checkout__container emms__checkout__card__container--success emms__fade-in">
                        <div class="emms__checkout__card">
                            <div class="emms__checkout__card__main">
                                <h2>¡Felicitaciones adquiriste con éxito tus entradas VIP!</h2>
                                <h3>Accedes a todos estos beneficio del evento:</h3>
                                <ul class="emms__checkout__card__main__list">
                                    <li>Cápsulas</li>
                                    <li>Cursos</li>
                                    <li>Promociones</li>
                                    <li>Infografías</li>
                                    <li>Guías</li>
                                    <li>E-books</li>
                                </ul>
                            </div>
                            <div class="emms__checkout__card__aside">
                                <h3>Detalle de tu compra</h3>
                                <table>
                                    <tr>
                                        <td>Titular:</td>
                                        <td><div id="customerName"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Categoría:</td>
                                        <td><div id="ticketName"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Medio de pago:</td>
                                        <td>Tarjeta de Crédito</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de compra:</td>
                                        <td> <div id="date"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Monto:</td>
                                        <td><div id="amount"></div></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <a href="./ecommerce-registrado.php" class="emms__checkout__back">← Volver al sitio</a>
                        </div>
                    </section>
                </div>
                <a href="./ecommerce-registrado.php" class="emms__checkout__back">← Volver al sitio</a>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php include_once('././src/components/footer.php'); ?>
    <script src="public/return.js?v=3" defer></script>
</body>

</html>
