<?php
$url_ptr = explode("/", isset($_SERVER['REQUEST_URI']));
?>

<div class="emms__calendar__tabs">


    <div class="emms__container--lg">
        <div class="emms__calendar__date emms__fade-in">
            <div class="emms__calendar__date__country emms__calendar__date__country--post">
                <h2>Descubre la agenda del evento</h2>
                <p>Speakers internacionales de las marcas más reconocidas y las principales entidades de la industria <br>
                    del Comercio Electrónico en Latinoamérica compartieron en esta edición sus casos de éxito, proyecciones <br>
                    para el mercado, experiencias y las mejores estrategias prácticas. ¡Descúbrelos aquí!</p>
            </div>
        </div>
        <?php
        require_once('./utils/DB.php');
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $speakers = $db->getAllSpeakers(); ?>
        <!-- List -->
        <ul class="emms__calendar__list emms__calendar__list--dk emms__fade-in">
            <?php
            foreach ($speakers as $speaker) :
                $isSpeakerEcommerce = $speaker['event'] === "ecommerce";
                $isSpeakerExposeDebate = $speaker['exposes'] === "debate";
                $isSpeakerExposesType = ($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "networking") || ($isSpeakerExposeDebate);
            ?>
                <?php if ($isSpeakerExposesType && $isSpeakerEcommerce) : ?>
                    <li class="emms__calendar__list__item">
                        <div class="emms__calendar__list__item__card">

                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--free">
                                    <p>Conferencia</p>
                                </div>
                            <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--vip">
                                    <p>Workshop - exclusivo VIP</p>
                                </div>
                            <?php elseif ($speaker['exposes'] === "networking") : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--vip">
                                    <p>Networking - exclusivo VIP</p>
                                </div>
                            <?php elseif ($isSpeakerExposeDebate) : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--free">
                                    <p>Mesa de debate</p>
                                </div>
                            <?php endif; ?>

                            <?php if (($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop")) : ?>
                                <div class="emms__calendar__list__item__card__speaker">
                                    <div class="emms__calendar__list__item__card__speaker__image">
                                        <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                    </div>
                                    <div class="emms__calendar__list__item__card__speaker__text">
                                        <h4><?= $speaker['name'] ?></h4>
                                        <h5><?= $speaker['job'] ?></h5>
                                        <ul>
                                            <?php if (!empty($speaker['sm_twitter'])) : ?>
                                                <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="src/img/icons/icono-twitter.png" alt="Twitter"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                                <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="src/img/icons/icono-linkedin.png" alt="LinkedIn"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_instagram'])) : ?>
                                                <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="src/img/icons/icono-instagram.png" alt="Instagram"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_facebook'])) : ?>
                                                <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="src/img/icons/icono-facebook.png" alt="Facebook"></a></li>
                                            <?php endif; ?>
                                            <?php if (($speaker['bio']) != '0') : ?>
                                                <li><a class="emms__calendar__list__item__card__btn-bio">Ver Bio →</a>
                                                    <div class="emms__calendar__list__item__card__bio emms__calendar__list__item__card__bio--hide bio-speaker">
                                                        <?php if ($speaker['exposes'] === "conference") : ?>
                                                            <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--free">
                                                                <p>Conferencia</p>
                                                            </div>
                                                            <div class="emms__calendar__list__item__card__bio__content emms__calendar__list__item__card__bio__content--free">
                                                                <div class="emms__calendar__list__item__card__speaker__image">
                                                                    <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                                                </div>
                                                                <h4><?= $speaker['name'] ?></h4>
                                                                <h5><?= $speaker['job'] ?></h5>
                                                                <p><?= $speaker['bio'] ?></p>
                                                            </div>
                                                            <a class="emms__calendar__list__item__card__btn-bio-hide"> Volver</a>
                                                        <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                                            <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--vip">
                                                                <p>Workshop - exclusivo VIP</p>
                                                            </div>
                                                            <div class="emms__calendar__list__item__card__bio__content emms__calendar__list__item__card__bio__content--vip">
                                                                <div class="emms__calendar__list__item__card__speaker__image">
                                                                    <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                                                </div>
                                                                <h4><?= $speaker['name'] ?></h4>
                                                                <h5><?= $speaker['job'] ?></h5>
                                                                <p><?= $speaker['bio'] ?></p>
                                                            </div>
                                                            <a class="emms__calendar__list__item__card__btn-bio-hide"> Volver</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($isSpeakerExposeDebate) : ?>
                                <div class="emms__calendar__list__item__card__speaker">
                                    <div class="emms__calendar__list__item__card__speaker__image--debate">
                                        <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="emms__calendar__list__item__card__description">
                                <?php if ($speaker['exposes'] === "conference") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                    <h3 class="title-workshop"><?= $speaker['title'] ?></h3>
                                <?php elseif ($isSpeakerExposeDebate) : ?>
                                    <h3 class="title-debate"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "networking") : ?>
                                    <h3 class="title-networking"><?= $speaker['title'] ?></h3>
                                <?php endif; ?>
                                <p><?= $speaker['description'] ?></p>

                                <?php if (($speaker['exposes'] === "conference"  || $isSpeakerExposeDebate) && ($speaker['slug'])) : ?>
                                    <a href="./speaker-interna?slug=<?= $speaker['slug'] ?>" class="emms__cta">VER CONFERENCIA</a>
                                <?php endif; ?>
                                <?php if (($speaker['exposes'] === "networking") || ($speaker['exposes'] === "workshop")) : ?>
                                    <a href="#entradas" class="emms__cta  hidden--vip">HAZTE VIP</a>
                                <?php endif; ?>
                                <?php if (($speaker['exposes'] === "networking")) : ?>
                                    <a href="#" class="emms__cta inactive  show--vip" disabled>VIDEO PRONTO DISPONIBLE</a>
                                <?php endif; ?>
                                <?php if (($speaker['exposes'] === "workshop")) : ?>
                                    <a href="https://www.youtube.com/watch?v=<?= $speaker['youtube'] ?>" class="emms__cta   show--vip" target="_blank">VER VIDEO</a>
                                <?php endif; ?>
                            </div>

                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__business">
                                    <img src="./admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php elseif ($isSpeakerExposeDebate) : ?>
                                <div class="emms__calendar__list__item__card__business--debate">
                                    <img src="./admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php elseif ($speaker['exposes'] === "networking") : ?>
                                <div class="emms__calendar__list__item__card__business vip">
                                    &nbsp;
                                </div>
                            <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                <div class="emms__calendar__list__item__card__business vip">
                                    <img src="./admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php endif; ?>

                            <!-- <a href="../../speakers-interna.php?slug=nombrespeaker" class="emms__calendar__list__item__card__btn-conference">Ver conferencia</a> -->
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <ul class="emms__calendar__list emms__calendar__list--mb main-carousel emms__fade-in" data-flickity>
            <?php
            foreach ($speakers as $speaker) :
                $isSpeakerEcommerce = $speaker['event'] === "ecommerce";
                $isSpeakerExposeDebate = $speaker['exposes'] === "debate";
                $isSpeakerExposesType = ($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "networking") || ($isSpeakerExposeDebate);

            ?>
                <?php if ($isSpeakerExposesType &&  $isSpeakerEcommerce) :
                ?>
                    <li class="emms__calendar__list__item">

                        <div class="emms__calendar__list__item__card">
                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--free">
                                    <p>Conferencia</p>
                                </div>
                            <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--vip">
                                    <p>Workshop - exclusivo VIP</p>
                                </div>
                            <?php elseif ($speaker['exposes'] === "networking") : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--vip">
                                    <p>Networking - exclusivo VIP</p>
                                </div>
                            <?php elseif ($isSpeakerExposeDebate) : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--free">
                                    <p>Mesa de debate</p>
                                </div>
                            <?php endif; ?>

                            <?php if (($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop")) : ?>
                                <div class="emms__calendar__list__item__card__speaker">
                                    <div class="emms__calendar__list__item__card__speaker__image">
                                        <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                    </div>
                                    <div class="emms__calendar__list__item__card__speaker__text">
                                        <h4><?= $speaker['name'] ?></h4>
                                        <h5><?= $speaker['job'] ?></h5>
                                        <ul>
                                            <?php if (!empty($speaker['sm_twitter'])) : ?>
                                                <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="src/img/icons/icono-twitter.png" alt="Twitter"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                                <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="src/img/icons/icono-linkedin.png" alt="LinkedIn"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_instagram'])) : ?>
                                                <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="src/img/icons/icono-instagram.png" alt="Instagram"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_facebook'])) : ?>
                                                <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="src/img/icons/icono-facebook.png" alt="Facebook"></a></li>
                                            <?php endif; ?>
                                            <?php if (($speaker['bio']) != '0') : ?>
                                                <li><a class="emms__calendar__list__item__card__btn-bio">Ver Bio →</a>
                                                    <div class="emms__calendar__list__item__card__bio emms__calendar__list__item__card__bio--hide bio-speaker">
                                                        <?php if ($speaker['exposes'] === "conference") : ?>
                                                            <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--free">
                                                                <p>Conferencia</p>
                                                            </div>
                                                            <div class="emms__calendar__list__item__card__bio__content emms__calendar__list__item__card__bio__content--free">
                                                                <div class="emms__calendar__list__item__card__speaker__image">
                                                                    <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                                                </div>
                                                                <h4><?= $speaker['name'] ?></h4>
                                                                <h5><?= $speaker['job'] ?></h5>
                                                                <p><?= $speaker['bio'] ?></p>
                                                            </div>
                                                            <a class="emms__calendar__list__item__card__btn-bio-hide"> Volver</a>
                                                        <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                                            <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--vip">
                                                                <p>Workshop - exclusivo VIP</p>
                                                            </div>
                                                            <div class="emms__calendar__list__item__card__bio__content emms__calendar__list__item__card__bio__content--vip">
                                                                <div class="emms__calendar__list__item__card__speaker__image">
                                                                    <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                                                </div>
                                                                <h4><?= $speaker['name'] ?></h4>
                                                                <h5><?= $speaker['job'] ?></h5>
                                                                <p><?= $speaker['bio'] ?></p>
                                                            </div>
                                                            <a class="emms__calendar__list__item__card__btn-bio-hide"> Volver</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($isSpeakerExposeDebate) : ?>
                                <div class="emms__calendar__list__item__card__speaker">
                                    <div class="emms__calendar__list__item__card__speaker__image--debate">
                                        <img src="./admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="emms__calendar__list__item__card__description">
                                <?php if ($speaker['exposes'] === "conference") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                    <h3 class="title-workshop"><?= $speaker['title'] ?></h3>
                                <?php elseif ($isSpeakerExposeDebate) : ?>
                                    <h3 class="title-debate"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "networking") : ?>
                                    <h3 class="title-networking"><?= $speaker['title'] ?></h3>
                                <?php endif; ?>
                                <p><?= $speaker['description'] ?></p>

                                <?php if (($speaker['exposes'] === "conference"  || $isSpeakerExposeDebate) && ($speaker['slug'])) : ?>
                                    <a href="./speaker-interna?slug=<?= $speaker['slug'] ?>" class="emms__cta">VER CONFERENCIA</a>
                                <?php endif; ?>
                                <?php if (($speaker['exposes'] === "networking") || ($speaker['exposes'] === "workshop")) : ?>
                                    <a href="#entradas" class="emms__cta  hidden--vip">HAZTE VIP</a>
                                <?php endif; ?>
                                <?php if (($speaker['exposes'] === "networking")) : ?>
                                    <a href="#" class="emms__cta inactive  show--vip" disabled>VIDEO PRONTO DISPONIBLE</a>
                                <?php endif; ?>
                                <?php if (($speaker['exposes'] === "workshop")) : ?>
                                    <a href="https://www.youtube.com/watch?v=<?= $speaker['youtube'] ?>" class="emms__cta   show--vip" target="_blank">VER VIDEO</a>
                                <?php endif; ?>
                            </div>

                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__business">
                                    <img src="./admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php elseif ($isSpeakerExposeDebate) : ?>
                                <div class="emms__calendar__list__item__card__business--debate">
                                    <img src="./admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php elseif ($speaker['exposes'] === "networking") : ?>
                                <div class="emms__calendar__list__item__card__business vip">
                                    &nbsp;
                                </div>
                            <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                <div class="emms__calendar__list__item__card__business vip">
                                    <img src="./admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php endif; ?>
                            <!-- <a href="../../speakers-interna.php?slug=nombrespeaker" class="emms__calendar__list__item__card__btn-conference">Ver conferencia</a> -->
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <?php ?>
    </div>

</div>
