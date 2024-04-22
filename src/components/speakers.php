<?php $url_ptr = explode("/", isset($_SERVER['REQUEST_URI'])); ?>

<div class="emms__calendar__tabs">
    <div class="emms__calendar__tab__list">
        <button class="emms__calendar__tab" role="tab" aria-selected="true" id="day1">02 de mayo</button>
        <button class="emms__calendar__tab" role="tab" aria-selected="false" id="day2">03 de mayo</button>
    </div>


    <!---------------------------------------------- DÍA 1 ------------------------------------------------>

    <div class="emms__container--lg" role="tabpanel" aria-labelledby="day1">
        <div class="emms__calendar__date emms__fade-in">
            <div class="emms__calendar__date__country">
                <p>La transmisión en vivo dará inicio</p>
                <span><img src="src/img/flag-argentina.png" alt="Argentina">(ARG) 14:00</span>
                <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+E-commerce+2024+%7C+D%C3%ADa+1&iso=20240502T1030&p1=51&ah=6" target="_blank">Mira el horario de tu país</a>
            </div>
        </div>

        <!-- List -->
        <ul class="emms__calendar__list emms__calendar__list--dk emms__fade-in">
            <?php
            require_once('./utils/DB.php');
            $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $speakers = $db->getSpeakersByDay(1);
            foreach ($speakers as $speaker) : ?>
                <?php if ((($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "networking")) && ($speaker['event'] === "ecommerce")) : ?>
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
                            <div class="emms__calendar__list__item__card__description">
                                <?php if ($speaker['exposes'] === "conference") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                    <h3 class="title-workshop"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "networking") : ?>
                                    <h3 class="title-networking"><?= $speaker['title'] ?></h3>
                                <?php endif; ?>
                                <p><?= $speaker['description'] ?></p>
                                <?php if (($speaker['time']) != '') : ?>
                                    <div class="emms__calendar__list__item__country">
                                        <span><img src="src/img/flags/arg.png" alt="">(ARG) <?= $speaker['time'] ?></span>
                                        <a href="<?= $speaker['link_time'] ?>" target="_blank">Mira el horario de tu país</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__business">
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
            require_once('./utils/DB.php');
            $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $speakers = $db->getSpeakersByDay(1);
            foreach ($speakers as $speaker) : ?>
                <?php if ((($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "networking")) && ($speaker['event'] === "ecommerce")) : ?>
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
                            <div class="emms__calendar__list__item__card__description">
                                <?php if ($speaker['exposes'] === "conference") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                    <h3 class="title-workshop"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "networking") : ?>
                                    <h3 class="title-networking"><?= $speaker['title'] ?></h3>
                                <?php endif; ?>
                                <p><?= $speaker['description'] ?></p>
                                <?php if (($speaker['time']) != '') : ?>
                                    <div class="emms__calendar__list__item__country">
                                        <span><img src="src/img/flags/arg.png" alt="">(ARG) <?= $speaker['time'] ?></span>
                                        <a href="<?= $speaker['link_time'] ?>" target="_blank">Mira el horario de tu país</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__business">
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

    </div>




    <!---------------------------------------------- DÍA 2 ------------------------------------------------>

    <div class="emms__container--lg" role="tabpanel" aria-labelledby="day2" hidden>
        <div class="emms__calendar__date emms__fade-in">
            <div class="emms__calendar__date__country">
                <span><img src="src/img/flag-argentina.png" alt="Argentina">(ARG) 14:00</span>
                <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+E-commerce%3A+d%C3%ADa+2&iso=20240503T1030&p1=51&ah=6" target="_blank">Mira el horario de tu país</a>
            </div>
        </div>

        <!-- List -->
        <ul class="emms__calendar__list emms__calendar__list--dk emms__fade-in">
            <?php
            require_once('./utils/DB.php');
            $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $speakers = $db->getSpeakersByDay(2);
            foreach ($speakers as $speaker) : ?>
                <?php if ((($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "networking")) && ($speaker['event'] === "ecommerce")) : ?>
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
                            <div class="emms__calendar__list__item__card__description">
                                <?php if ($speaker['exposes'] === "conference") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                    <h3 class="title-workshop"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "networking") : ?>
                                    <h3 class="title-networking"><?= $speaker['title'] ?></h3>
                                <?php endif; ?>
                                <p><?= $speaker['description'] ?></p>
                                <?php if (($speaker['time']) != '') : ?>
                                    <div class="emms__calendar__list__item__country">
                                        <span><img src="src/img/flags/arg.png" alt="">(ARG) <?= $speaker['time'] ?></span>
                                        <a href="<?= $speaker['link_time'] ?>" target="_blank">Mira el horario de tu país</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__business">
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
            require_once('./utils/DB.php');
            $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $speakers = $db->getSpeakersByDay(2);
            foreach ($speakers as $speaker) : ?>
                <?php if ((($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "networking")) && ($speaker['event'] === "ecommerce")) : ?>
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
                            <div class="emms__calendar__list__item__card__description">
                                <?php if ($speaker['exposes'] === "conference") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                    <h3 class="title-workshop"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "networking") : ?>
                                    <h3 class="title-networking"><?= $speaker['title'] ?></h3>
                                <?php endif; ?>
                                <p><?= $speaker['description'] ?></p>
                                <?php if (($speaker['time']) != '') : ?>
                                    <div class="emms__calendar__list__item__country">
                                        <span><img src="src/img/flags/arg.png" alt="">(ARG) <?= $speaker['time'] ?></span>
                                        <a href="<?= $speaker['link_time'] ?>" target="_blank">Mira el horario de tu país</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($speaker['exposes'] === "conference") : ?>
                                <div class="emms__calendar__list__item__card__business">
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

    </div>




</div>
