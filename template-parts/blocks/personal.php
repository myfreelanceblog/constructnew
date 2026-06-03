<section class="personal pad">
    <div class="container">
        <div class="top">
            <h2 class="h1 top__title">Персональные сборки</h2>
            <div class="nav top__nav nav--gray">
                <button class="nav__item nav__prev personal__prev" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                <button class="nav__item nav__next personal__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
            </div>
        </div>
    </div>

    <div class="personal__slider">
        <div class="personal__swiper swiper">
            <div class="swiper-wrapper">
                <?php for($i = 0; $i < 10; $i++): ?>
                <div class="swiper-slide">
                    <div class="personal-item">
                        <div class="personal-item__content">
                            <div class="personal-item__img img-absolute">
                                <img src="assets/img/content/n1.webp" alt="personal" loading="lazy">
                            </div>
                            <button type="button" class="btn pointer personal__btn" data-modal="order">
                                <div class="pointer__top"></div>
                                <div class="pointer__bottom"></div>
                                <div class="btn__content">
                                    <span>Заказать сборку</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>