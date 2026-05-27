<div class="card-item<?= ($i > 2) ? ' hidden' : '' ?>">
    <div class="card-item__top">
        <a href="javascript:void(0);" class="card-item__slider">
            <div class="card-item__swiper swiper">
                <div class="swiper-wrapper">
                    <?php foreach($item['gal'] as $img): ?>
                    <div class="swiper-slide">
                        <div class="card-item__img img-absolute">
                            <img src="assets/img/content/<?= $img; ?>" alt="hit" loading="lazy">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card-item__pagination"></div>
        </a>
        <div class="card-item__content">
            <div class="colors">
                <?php foreach($item['color'] as $k => $color): ?>
                <button class="colors__item color-<?= $color ?><?php if($k == 0){echo ' active';} ?>" type="button" aria-label="<?= $color ?>"></button>
                <?php endforeach; ?>
            </div>
            <div class="card-item__header">
                <a href="javascript:void(0);" class="card-item__title h2"><?= $item['title'] ?></a>
                <div class="card-item__price h4"><?= $item['price'] ?></div>
            </div>
            <div class="card-item__btns">
                <a href="javascript:void(0);" class="btn pointer cart-add">
                    <div class="pointer__top"></div>
                    <div class="pointer__bottom"></div>
                    <div class="btn__content">
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#cart"></use></svg>
                        <span>В корзину</span>
                    </div>
                </a>
                <button class="border-side btn-secondary" type="button" aria-label="Изменить конфигурацию" data-modal="config">
                    <div class="btn-secondary__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#config"></use></svg></div>
                    <div class="btn-secondary__title">Изменить конфигурацию</div>
                </button>
            </div>

            <?php
            $options = [
                [
                    'title' => 'Видеокарта',
                    'desc' => 'RTX 5050 - RTX 5060Ti',
                ],
                [
                    'title' => 'Процессор',
                    'desc' => 'Intel Core i5/Core Ultra 5',
                ],
                [
                    'title' => 'Оперативная память',
                    'desc' => 'от 16Gb',
                ],
            ];
            ?>
            <div class="options">
                <?php foreach($options as $k => $single_opt): ?>
                <div class="options__item">
                    <div class="options__icon">
                        <img src="assets/img/content/opt<?= ($k + 1) ?>.svg" alt="gpu" loading="lazy">
                    </div>
                    <div class="options__content">
                        <div class="options__title"><?= $single_opt['title'] ?></div>
                        <div class="options__desc"><?= $single_opt['desc'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" class="border-side btn-secondary btn-secondary--transparent">
        <div class="btn-secondary__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#plus-small"></use></svg></div>
        <div class="btn-secondary__title">Все характеристики</div>
    </a>
</div>