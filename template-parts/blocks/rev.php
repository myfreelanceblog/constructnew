<section class="rev-section gray">
    <div class="container">
        <div class="rev pad">
            <div class="top">
                <h2 class="h1 top__title">Отзывы покупателей</h2>
                <div class="nav top__nav rev__nav">
                    <button class="nav__item nav__prev rev__prev" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                    <button class="nav__item nav__next rev__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                </div>
            </div>
            <?php
            $reviews = [
                [
                    'name' => 'Евгений Калюжный',
                    'avatar' => 'r1.jpg',
                    'images' => [
                        'rev1.jpg',
                        'rev2.jpg',
                        'rev3.jpg',
                    ],
                    'text' => 'Уже давно задумывался по покупке себе хорошего ПК, так как мой старичок ноутбук на GTX 880m уже требовал уйти на заслуженную пенсию. И вот сидя в YouTube Shorts неоднократно попадались видео о сборках ПК, и я не мог определиться к кому обратиться за помощью, и тут...',
                ],
                [
                    'name' => 'Марта Миронова',
                    'avatar' => 'r2.jpg',
                    'images' => [
                        'rev1.jpg',
                        'rev2.jpg',
                        'rev3.jpg',
                        'rev4.jpg',
                        'rev5.jpg',
                        'rev6.jpg',
                    ],
                    'text' => 'Заказывала сборку из представленных конфигураций на сайте. Быстро ответили, проконсультировали по интересующим комплектующим и учли пожелания. Было сопровождение на всех этапах сборки и доставки, регулярно высылались отчёты. Благодарю за качественную работу и ис...',
                ],
                [
                    'name' => 'Евгений Калюжный',
                    'avatar' => 'r1.jpg',
                    'images' => [
                        'rev1.jpg',
                        'rev2.jpg',
                        'rev3.jpg',
                    ],
                    'text' => 'Уже давно задумывался по покупке себе хорошего ПК, так как мой старичок ноутбук на GTX 880m уже требовал уйти на заслуженную пенсию. И вот сидя в YouTube Shorts неоднократно попадались видео о сборках ПК, и я не мог определиться к кому обратиться за помощью, и тут...',
                ],
            ];
            ?>
            <div class="rev__slider">
                <div class="rev__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($reviews as $k => $rev): ?>
                        <div class="swiper-slide">
                            <div class="rev-item">
                                <div class="rev-item__top">
                                    <div class="rev-author">
                                        <div class="rev-author__icon">
                                            <img src="assets/img/content/<?= $rev['avatar'] ?>" alt="<?= $rev['name'] ?>" loading="lazy">
                                        </div>
                                        <div class="rev-author__name h5"><?= $rev['name'] ?></div>
                                    </div>
                                    <div class="rev-gal">
                                        <?php foreach($rev['images'] as $img): ?>
                                        <a href="assets/img/content/<?= $img ?>" class="rev-gal__item" data-fancybox="rev-<?= $k ?>">
                                            <img src="assets/img/content/<?= $img ?>" alt="rev" loading="lazy">
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="rev-item__content"><?= $rev['text'] ?></div>
                                </div>
                                <div class="rev-item__bottom">
                                    <a href="javascript:void(0);" class="border-side btn-secondary rev-item__btn" target="_blank">
                                        <div class="btn-secondary__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#vk"></use></svg></div>
                                        <div class="btn-secondary__title">Читать далее</div>
                                    </a>
                                    <div class="rev-item__date">15 апреля 2026</div>
                                </div>
                                
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="nav top__nav rev__nav-mob">
                <button class="nav__item nav__prev rev__prev" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                <button class="nav__item nav__next rev__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
            </div>

            <div class="info rev__info">
                <div class="info-pointer info-pointer--bottom"><span></span></div>
                <div class="info__text">
                    <div class="info__desc">140+ отзывов</div>
                    <div class="info__desc">на независимых платформах</div>
                </div>
                <div class="info-pointer info-pointer--top"><span></span></div>
            </div>
        </div>
    </div>
</section>