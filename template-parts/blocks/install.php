<section class="install-section linear">
    <div class="container">
        <div class="install pad">
            <div class="top install__top">
                <h2 class="h1 top__title install__title">Сборка под заказ</h2>
                <div class="nav top__nav">
                    <button class="nav__item nav__prev install__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                    <button class="nav__item nav__next install__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                </div>
            </div>

            <?php
            $install = [
                [
                    'title' => 'Индивидуальный ПК, который подойдет именно Вам',
                    'desc' => 'Создаём персональные компьютеры с нуля: от выбора процессора до дизайна корпуса',
                ],
                [
                    'title' => 'Двухфакторная гарантия',
                    'desc' => 'Вы получаете гарантию не только на сборку но также и на все комплектующие для вашего ПК!',
                ],
            ];
            ?>
            <div class="install-slider">
                <div class="install__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($install as $j => $item): ?>
                        <div class="swiper-slide">
                            <div class="install-slide">
                                <div class="install-slide__gal">
                                    <?php for($i = 0; $i <= 3; $i++): ?>
                                    <a href="assets/img/content/i<?= $i+1 ?>.webp" data-fancybox="install-gal-<?= $j ?>" class="img-absolute">
                                        <img src="assets/img/content/i<?= $i+1 ?>.webp" alt="install" loading="lazy">
                                    </a>
                                    <?php endfor; ?>
                                </div>

                                <div class="nav top__nav install__nav-mob">
                                    <button class="nav__item nav__prev install__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                                    <button class="nav__item nav__next install__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                                </div>

                                <div class="install-slide__content">
                                    <div class="accent-line">
                                        <div class="accent-line__title h3"><?= $item['title'] ?></div>
                                        <div class="accent-line__desc"><?= $item['desc'] ?></div>
                                    </div>
                                    <button class="btn install__btn pointer" type="button" aria-label="Заказать сборку" data-modal="order">
                                        <div class="pointer__top"></div>
                                        <div class="pointer__bottom"></div>
                                        <div class="btn__content">
                                            <span>Заказать сборку</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>