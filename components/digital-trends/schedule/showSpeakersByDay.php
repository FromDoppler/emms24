<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/DB.php');

function showEventDatetimeByDay($day, $digitalTrendsStates)
{
    if ($day === 1) {
?>
        <div class="emms__calendar__date emms__fade-in">
            <div class="emms__calendar__date__country">
                <?php if ($digitalTrendsStates['isPre']) : ?>
                    <p> La transmisión comienza a las</p>
                    <span><img src="/src/img/flag-argentina.png" alt="Argentina">(ARG) 10:30</span>.
                    <p>Si no eres de allí o estarás en otro lado,</p> <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+E-commerce+2024+%7C+D%C3%ADa+1&iso=20240502T1030&p1=51&ah=6" target="_blank">mira el horario de tu país</a>
                <?php endif ?>
                <?php if ($digitalTrendsStates['isLive']) : ?>
                    <p> A partir de las</p>
                    <span><img src="/src/img/flag-argentina.png" alt="Argentina">
                        (ARG) 10:30</p>
                    </span>
                    <p>. Si no eres de allí o estarás en otro lado
                    </p>
                    <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+E-commerce+2024+%7C+D%C3%ADa+1&iso=20240502T1030&p1=51&ah=6" target="_blank">mira el horario de tu país</a> <?php endif ?>
                <?php if ($digitalTrendsStates['isTransition']) : ?>
                    <p>El primer día ya ha finalizado ¡pero puedes registrarte y acceder a todas las grabaciones pronto! </p>
                <?php endif ?>
            </div>
        </div>
    <?php
    } else if ($day === 2) {
    ?>
        <div class="emms__calendar__date emms__fade-in">
            <div class="emms__calendar__date__country">
                <p> La transmisión comienza a las</p>
                <span><img src="/src/img/flag-argentina.png" alt="Argentina">(ARG) 10:30</span>.
                <p>Si no eres de allí o estarás en otro lado,</p> <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+E-commerce%3A+d%C3%ADa+2&iso=20240503T1030&p1=51&ah=6" target="_blank">mira el horario de tu país</a>
            </div>
        </div>
    <?php
    } else if ($day === 3) {
    ?>
        <div class="emms__calendar__date emms__fade-in">
            <div class="emms__calendar__date__country">
                <p class="emms__calendar__date__country--comming-son">Próximamente</p>
            </div>
        </div>
<?php
    }
}
?>

<?php
function showSpeakersByDay($day, $digitalTrendsStates)
{
    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $speakers = $db->getSpeakersByDay($day); ?>

    <div class="emms__container--lg" role="tabpanel" aria-labelledby="day<?= $day ?>">
        <?php
        showEventDatetimeByDay($day, $digitalTrendsStates);
        ?>
        <!-- List -->
        <ul class="emms__calendar__list emms__calendar__list--dk emms__fade-in">
            <?php
            foreach ($speakers as $speaker) :
                $isSpeakerDT = $speaker['event'] === "digital-trends";
                $isSpeakerExposeDebate = $speaker['exposes'] === "debate";
                $isSpeakerExposesType = ($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "networking") || ($speaker['exposes'] === "successStory") || ($isSpeakerExposeDebate);
            ?>
                <?php if (($isSpeakerExposesType) && $isSpeakerDT) : ?>
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
                            <?php elseif ($speaker['exposes'] === "successStory") : ?>
                                <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--success-story">
                                    <p>CASO DE ÉXITO</p>
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

                            <?php if (($speaker['exposes'] === "conference") || ($speaker['exposes'] === "workshop") || ($speaker['exposes'] === "successStory")) : ?>
                                <div class="emms__calendar__list__item__card__speaker">
                                    <div class="emms__calendar__list__item__card__speaker__image">
                                        <img src="/admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                    </div>
                                    <div class="emms__calendar__list__item__card__speaker__text">
                                        <h4><?= $speaker['name'] ?></h4>
                                        <h5><?= $speaker['job'] ?></h5>
                                        <ul>
                                            <?php if (!empty($speaker['sm_twitter'])) : ?>
                                                <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="/src/img/icons/icono-twitter.png" alt="Twitter"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                                <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="/src/img/icons/icono-linkedin.png" alt="LinkedIn"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_instagram'])) : ?>
                                                <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="/src/img/icons/icono-instagram.png" alt="Instagram"></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($speaker['sm_facebook'])) : ?>
                                                <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="/src/img/icons/icono-facebook.png" alt="Facebook"></a></li>
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
                                                                    <img src="/admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                                                </div>
                                                                <h4><?= $speaker['name'] ?></h4>
                                                                <h5><?= $speaker['job'] ?></h5>
                                                                <p><?= $speaker['bio'] ?></p>
                                                            </div>
                                                            <a class="emms__calendar__list__item__card__btn-bio-hide"> Volver →</a>
                                                        <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                                            <div class="emms__calendar__list__item__card__label emms__calendar__list__item__card__label--vip">
                                                                <p>Workshop - exclusivo VIP</p>
                                                            </div>
                                                            <div class="emms__calendar__list__item__card__bio__content emms__calendar__list__item__card__bio__content--vip">
                                                                <div class="emms__calendar__list__item__card__speaker__image">
                                                                    <img src="/admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                                                </div>
                                                                <h4><?= $speaker['name'] ?></h4>
                                                                <h5><?= $speaker['job'] ?></h5>
                                                                <p><?= $speaker['bio'] ?></p>
                                                            </div>
                                                            <a class="emms__calendar__list__item__card__btn-bio-hide"> Volver →</a>
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
                                        <img src="/admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="emms__calendar__list__item__card__description">

                                <?php if ($speaker['exposes'] === "conference") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                    <h3 class="title-workshop"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "successStory") : ?>
                                    <h3 class="title-conference"><?= $speaker['title'] ?></h3>
                                <?php elseif ($isSpeakerExposeDebate) : ?>
                                    <h3 class="title-debate"><?= $speaker['title'] ?></h3>
                                <?php elseif ($speaker['exposes'] === "networking") : ?>
                                    <h3 class="title-networking"><?= $speaker['title'] ?></h3>
                                <?php endif; ?>
                                <p><?= $speaker['description'] ?></p>
                                <?php if (($speaker['time']) != '') : ?>
                                    <div class="emms__calendar__list__item__country">
                                        <span><img src="/src/img/flags/arg.png" alt="">(ARG) <?= $speaker['time'] ?></span>
                                        <a href="<?= $speaker['link_time'] ?>" target="_blank">Mira el horario de tu país</a>
                                    </div>
                                <?php endif; ?>
                                <?php if (($speaker['exposes'] === "networking") || ($speaker['exposes'] === "workshop")) : ?>
                                    <a href="<?= $speaker['youtube'] ?>" class="emms__cta  show--vip">ACCEDE AHORA</a>
                                <?php endif; ?>
                            </div>

                            <?php if ($speaker['exposes'] === "conference" || $speaker['exposes'] === "successStory") : ?>
                                <div class="emms__calendar__list__item__card__business">
                                    <img src="/admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php elseif ($isSpeakerExposeDebate) : ?>
                                <div class="emms__calendar__list__item__card__business--debate">
                                    <img src="/admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php elseif ($speaker['exposes'] === "networking") : ?>
                                <div class="emms__calendar__list__item__card__business vip">
                                    &nbsp;
                                </div>
                            <?php elseif ($speaker['exposes'] === "workshop") : ?>
                                <div class="emms__calendar__list__item__card__business vip">
                                    <img src="/admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <?php include('mobile-carousel.php') ?>
    </div>
<?php
}
showSpeakersByDay(1, $digitalTrendsStates);
showSpeakersByDay(2, $digitalTrendsStates);
showSpeakersByDay(3, $digitalTrendsStates);

?>
