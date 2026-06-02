<?php include 'header.php'; ?>

<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a href="javascript:void(0);" itemprop="item">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="1">
                </a>
            </li>
            <li class="breadcrumb__single">Корзина</li>
        </ul>
    </div>
</div>

<section class="cart-section">
    <div class="container">
        <div class="cart pad pad-medium-top">
            <h1 class="cart__title h1 title-side">Корзина</h1>

            <?php
            $cart = [
                [
                    'w' => 2,
                    'icon' => 'pointer',
                    'title' => 'В наличии',
                ],
                [
                    'w' => 24,
                    'icon' => 'config',
                    'title' => 'Сборка под заказ',
                ],
            ];
            ?>
            <div class="cart-box">
                <div class="cart-content">
                    <?php foreach($cart as $item): ?>
                    <div class="cart-item">
                        <div class="cart-item__badge">
                            <div class="trapeze trapeze-reverse">
                                <div class="trapeze__text uppercase">
                                    <svg width="<?= $item['w'] ?>" height="<?= $item['w'] ?>"><use href="assets/img/sprite.svg<?php echo $dev; ?>#<?= $item['icon'] ?>"></use></svg>
                                    <span><?= $item['title'] ?></span>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="cart-item__remove">
                            <div class="trapeze trapeze-reverse">
                                <div class="trapeze__text uppercase">
                                    <span>Удалить товар</span>
                                    <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                                </div>
                            </div>
                        </button>

                        <div class="cart-item__body">
                            <a href="javascript:void(0);" class="cart-item__image img-absolute">
                                <img src="assets/img/content/hero-pc.webp" alt="EXTRA CORE">
                            </a>
                            <div class="cart-item__info">
                                <a href="javascript:void(0);" class="cart-item__title h4 title-rec uppercase">EXTRA CORE</a>
                                <div class="cart-item__info-bottom">
                                    <div class="cart-item__price-label">Стоимость (за 1 шт)</div>
                                    <div class="cart-item__price h4">205 900 ₽</div>
                                </div>
                            </div>
                            <div class="qty">
                                <button class="qty__btn qty__minus"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#minus"></use></svg></button>
                                <input type="text" name="qty" value="1" readonly="" class="qty__input">
                                <button class="qty__btn qty__plus"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#plus-small"></use></svg></button>
                            </div>
                        </div>

                        <div class="cart-item__bottom">
                            <button class="cart-item__more">
                                <span class="h5">Характеристики</span>
                                <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg>
                            </button>
                            <div class="cart-item__char">
                                <div class="cart-item__char-wrap">
                                <div class="table">
                                    <div class="table__item">
                                        <div class="table__label">Корпус</div>
                                        <div class="table__value">Montech King 95 Pro — Белый</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Процессор</div>
                                        <div class="table__value">Intel Core i5-12400F</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Материнская плата</div>
                                        <div class="table__value">MSI PRO H610M-G DDR4</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Видеокарта</div>
                                        <div class="table__value">Palit GeForce RTX 5050 Dual</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Охлаждение</div>
                                        <div class="table__value">DEEPCOOL LE360 V2 белая</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Накопитель</div>
                                        <div class="table__value">1000 ГБ M.2 NVMe накопитель ADATA LEGEND 860</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Блок питания</div>
                                        <div class="table__value">PHANTEKS AMP BH, 750W, 80+ Bronze</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Райзер</div>
                                        <div class="table__value">Классическая установка видеокарты</div>
                                    </div>
                                                            <div class="table__item">
                                        <div class="table__label">Операционная система</div>
                                        <div class="table__value">Windows 11/10 PRO Лицензионная</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="cart-sidebar">
                    <div class="cart-sidebar__title h4">Гарантия</div>

                    <?php
                    $garants = [
                        [
                            'title' => 'Стандартная 24 месяца',
                            'price' => '0 ₽',
                        ],
                        [
                            'title' => '36 месяцев PRO',
                            'price' => '+ 5% к стоимости',
                        ],
                        [
                            'title' => '36 месяцев ULTRA',
                            'price' => '+9% к стоимости',
                        ],
                    ];
                    ?>
                    <div class="cart-sidebar__options">
                        <?php foreach($garants as $g => $garant): ?>
                        <div class="radio">
                            <div class="radio__input"><input type="radio" name="garant" value="<?= $garant['title'] ?>"<?php if($g == 0){echo ' checked';} ?>></div>
                            <label class="radio__label">
                                <div class="radio__content">
                                    <div class="radio__title"><?= $garant['title'] ?></div>
                                    <div class="radio__price"><?= $garant['price'] ?></div>
                                </div>
                            </label>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <a href="javascript:void(0);" class="cart-sidebar__link">Подробнее о тарифах гарантии</a>

                    <div class="modal-line"><span></span></div>

                    <div class="cart-price">
                        <div class="cart-price__text">
                            <div class="cart-price__label">Итоговая стоимость</div>
                            <div class="cart-price__numb h2"><span>205 900</span> ₽</div>
                        </div>
                        
                        <a href="javascript:void(0);" class="btn pointer cart-price__btn">
                            <div class="pointer__top"></div>
                            <div class="pointer__bottom"></div>
                            <div class="btn__content">
                                <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-menu"></use></svg>
                                <span>Перейти к оформлению</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php include 'footer.php'; ?>