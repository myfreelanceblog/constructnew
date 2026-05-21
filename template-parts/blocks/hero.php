<section class="hero">
    <div class="hero__swiper swiper">
        <div class="swiper-wrapper">
            <?php
            $slides = array(
                [
                    'title' => 'Персональная сборка ПК&nbsp;под&nbsp;ваши задачи',
                    'desc' => 'Мы собираем ПК, идеально подходящие именно вам, делая выбор простым, а результат — безупречным.',
                    'info' => true,
                    'img' => true,
                ],
                [
                    'title' => 'Компьютеры за которые ручаемся',
                    'desc' => 'До 3 лет фирменной гарантии',
                    'img' => true,
                ],
                [
                    'title' => 'Персональная сборка ПК&nbsp;под&nbsp;ваши задачи',
                    'desc' => 'Мы собираем ПК, идеально подходящие именно вам, делая выбор простым, а результат — безупречным.',
                    'info' => true,
                ],
                [
                    'title' => 'Компьютеры за которые ручаемся',
                    'desc' => 'До 3 лет фирменной гарантии',
                    'img' => true,
                ],
            );
            ?>
            <?php foreach($slides as $item): ?>
            <div class="swiper-slide">
                <div class="hero__wrap">
                    <img src="assets/img/content/hero.webp" alt="construct" class="hero__bg">
                    <div class="container">
                        <div class="hero-item">
                            <div class="hero-item__content">
                                <?php if(isset($item['info'])): ?>
                                <div class="hero-info">
                                    <div class="hero-info__img">
                                        <img src="assets/img/content/hero-info.png" alt="construct">
                                    </div>
                                    <div class="info">
                                        <div class="info-pointer info-pointer--top"><span></span></div>
                                        <div class="info__text">
                                            <div class="info__title">1000+</div>
                                            <div class="info__desc">клиентов по всей РФ</div>
                                        </div>
                                        <div class="info-pointer info-pointer--bottom"><span></span></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="hero-item__bottom">
                                    <h1 class="hero-item__title h1"><span><?= $item['title'] ?></span></h1>
                                    <div class="hero-item__desc"><?= $item['desc'] ?></div>
                                    <a href="javascript:void(0);" class="btn hero-item__btn pointer">
                                        <div class="pointer__top"></div>
                                        <div class="pointer__bottom"></div>
                                        <div class="btn__content">
                                            <span>В каталог</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="hero-item__img">
                                <?php if(isset($item['img'])): ?>
                                <img src="assets/img/content/hero-pc.webp" alt="construct">
                                <?php endif; ?>
                                <div class="nav hero__nav">
                                    <button class="nav__item nav__prev hero__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                                    <button class="nav__item nav__next hero__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="hero-numb">
        <div class="trapeze">
            <div class="trapeze__text">
                <span class="hero-numb__start">01</span>
                <span>/</span>
                <span class="hero-numb__end"><?= format_number_slides(count($slides)) ?></span>
            </div>
        </div>
    </div>
</section>