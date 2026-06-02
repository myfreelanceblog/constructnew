<?php include 'header.php'; ?>
<?php $init_script = 0; ?>

<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a href="javascript:void(0);" itemprop="item">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="1">
                </a>
            </li>
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a href="javascript:void(0);" itemprop="item">
                    <span itemprop="name">Каталог</span>
                    <meta itemprop="position" content="2">
                </a>
            </li>
            <li class="breadcrumb__single">EXTRA CORE</li>
        </ul>
    </div>
</div>

<?php
$thumbs_count = 8;
?>
<section class="product-section">
    <div class="container">
        <div class="product pad pad-medium-top">
            <div class="product-media">
                <div class="product-slider">
                    <div class="gal-small">
                        <div class="gal-small__swiper swiper">
                            <div class="swiper-wrapper">
                                <?php for($i = 0; $i < $thumbs_count; $i++): ?>
                                <div class="swiper-slide">
                                    <div class="gal-small__item<?php if($i == 0){echo ' active';} ?>">
                                        <img src="assets/img/content/hero-pc.webp" alt="construct">
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="gal-big border-black">
                        <div class="nav gal-big__nav">
                            <button class="nav__item nav__prev gal-big__prev swiper-button-disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                            <button class="nav__item nav__next gal-big__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                        </div>
                        <div class="gal-big__swiper swiper">
                            <div class="swiper-wrapper">
                                <?php for($i = 0; $i < $thumbs_count; $i++): ?>
                                <div class="swiper-slide">
                                    <a href="assets/img/content/hero-pc.webp" class="gal-big__item" data-fancybox="product">
                                        <img src="assets/img/content/hero-pc.webp" alt="construct">
                                    </a>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <button type="button" class="zoom gal-zoom" aria-label="увеличить">
                            <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#zoom"></use></svg>
                        </button>
                        <div class="gal-numb">
                            <div class="trapeze">
                                <div class="trapeze__text">
                                    <span class="gal-numb__start">01</span>
                                    <span>/</span>
                                    <span class="gal-numb__end"><?= format_number_slides($thumbs_count) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-delivery">
                    <div class="product-delivery__top">
                        <div class="product-delivery__title h4">Доставка</div>
                        <?php
                        $options = [
                            [
                                'title' => 'Самовывоз из нашего офиса',
                                'desc' => 'г. Екатеринбург, ул. Шефская 4А',
                            ],
                            [
                                'title' => 'Доставка по Екатеринбургу',
                                'desc' => 'Курьером до двери.',
                            ],
                            [
                                'title' => 'Доставка по России ТК CDEK',
                                'desc' => '3-5 рабочих дней',
                            ],
                        ];
                        ?>
                        <div class="product-delivery__options">
                            <?php foreach($options as $k => $option): ?>
                            <div class="product-delivery__option">
                                <div class="product-delivery__option-icon">
                                    <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#deliv<?= $k+1 ?>"></use></svg>
                                </div>
                                <div class="product-delivery__option-info">
                                    <div class="product-delivery__option-name"><?= $option['title'] ?></div>
                                    <div class="product-delivery__option-desc"><?= $option['desc'] ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="product-delivery__bottom">
                        <div class="product-delivery__stat">
                            <div class="accent-line">
                                <div class="accent-line__title h4 best-item__title">1 800+ СБОРОК ПК</div>
                                <div class="accent-line__desc">Для клиентов по всей России</div>
                            </div>
                        </div>
                        <div class="product-delivery__stat">
                            <div class="accent-line">
                                <div class="accent-line__title h4 best-item__title">160+ ОТЗЫВОВ О НАС</div>
                                <div class="accent-line__desc">На независимых платформах</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            $colors = ['black', 'orange', 'white',];
            ?>
            <div class="product-content">
                <div class="product-content__top">
                    <h1 class="product-content__title h1 uppercase title-rec title-rec--lg">EXTRA CORE</h1>
                    <div class="colors product__colors">
                        <?php foreach($colors as $k => $color): ?>
                        <button class="colors__item color-<?= $color ?><?php if($k == 0){echo ' active';} ?>" type="button" aria-label="<?= $color ?>"></button>
                        <?php endforeach; ?>
                    </div>
                    <div class="product-price">
                        <div class="product-price__val h2"><span>205 900</span>  ₽</div>
                        <div class="product-price__text">Итоговая стоимость</div>
                    </div>
                    <div class="product__btns">
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
                </div>
                <div class="product-char">
                    <div class="product-char__title h5">Характеристики:</div>
                    <?php
                    $options = [
                        [
                            'icon' => 'c1.svg',
                            'title' => 'Корпус',
                            'desc' => 'Montech King 95 Pro — Белый',
                        ],
                        [
                            'icon' => 'c2.svg',
                            'title' => 'Видеокарта',
                            'desc' => 'RTX 5050 - RTX 5060Ti',
                        ],
                        [
                            'icon' => 'c3.svg',
                            'title' => 'Процессор',
                            'desc' => 'Intel Core i5/Core Ultra 5',
                        ],
                        [
                            'icon' => 'c4.svg',
                            'title' => 'Оперативная память',
                            'desc' => 'от 16Gb',
                        ],
                        [
                            'icon' => 'c5.svg',
                            'title' => 'Материнская плата',
                            'desc' => 'MSI PRO H610M-G DDR4',
                        ],
                        [
                            'icon' => 'c6.svg',
                            'title' => 'Охлаждение',
                            'desc' => 'DEEPCOOL LE360 V2 белая',
                        ],
                        [
                            'icon' => 'c7.svg',
                            'title' => 'Накопитель',
                            'desc' => '1000 ГБ M.2 NVMe накопитель ADATA LEGEND 860',
                        ],
                        [
                            'icon' => 'c8.svg',
                            'title' => 'Блок питания',
                            'desc' => 'PHANTEKS AMP BH, 750W, 80+ Bronze',
                        ],
                    ];
                    ?>
                    <div class="options product__options">
                        <?php foreach($options as $k => $single_opt): ?>
                        <div class="options__item">
                            <div class="options__icon">
                                <img src="assets/img/content/<?= $single_opt['icon'] ?>" alt="gpu" loading="lazy">
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
            <div class="product-delivery-mob"></div>
        </div>
    </div>
</section>

<?php
$games = [
    [
        'title' => 'Counter Strike 2',
        'resolutions' => [
            'fhd' => 406,
            'k2'  => 273,
            'k4'  => 194,
        ],
    ],
    [
        'title' => 'World of Tanks',
        'resolutions' => [
            'fhd' => 301,
            'k2'  => 226,
            'k4'  => 150,
        ],
    ],
    [
        'title' => 'PUBG',
        'resolutions' => [
            'fhd' => 163,
            'k2'  => 112,
            'k4'  => 107,
        ],
    ],
    [
        'title' => 'Fortnite',
        'resolutions' => [
            'fhd' => 201,
            'k2'  => 135,
            'k4'  => 81,
        ],
    ],
    [
        'title' => 'The Last Of Us Part 2',
        'resolutions' => [
            'fhd' => 94,
            'k2'  => 77,
            'k4'  => 47,
        ],
    ],
    [
        'title' => 'RUST',
        'resolutions' => [
            'fhd' => 145,
            'k2'  => 99,
            'k4'  => 46,
        ],
    ],
    [
        'title' => 'GTA 5',
        'resolutions' => [
            'fhd' => 167,
            'k2'  => 135,
            'k4'  => 67,
        ],
    ],
    [
        'title' => 'Apex Legends',
        'resolutions' => [
            'fhd' => 198,
            'k2'  => 153,
            'k4'  => 96,
        ],
    ],
];

$maxFps = max(array_merge(...array_map(
    fn($g) => array_values($g['resolutions']),
    $games
)));
?>
<section class="games-section gray">
    <div class="container">
        <div class="games pad">
            <h2 class="h1 title-side">Производительность в&nbsp;играх</h2>

            <?php
            $resolutions = [
                [
                    'title' => 'Full HD разрешение (1920×1080)',
                    'resolution' => 'fhd',
                ],
                [
                    'title' => '2K разрешение (2560×1440)',
                    'resolution' => '2k',
                ],
                [
                    'title' => '4K разрешение (3840×2160)',
                    'resolution' => '4k',
                ],
            ];
            ?>
            <div class="resolutions">
                <?php foreach($resolutions as $r): ?>
                <div class="resolutions__item resolution-<?= $r['resolution'] ?>">
                    <div class="resolutions__title"><?= $r['title'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="games-list">
                <?php foreach($games as $game): ?>
                <div class="games-item">
                    <div class="games-item__img img-absolute">
                        <img src="assets/img/content/g1.jpg" alt="<?= $game['title'] ?>" loading="lazy">
                    </div>
                    <div class="games-item__content">
                        <div class="games-item__top h4 uppercase">
                            <span><?= $game['title'] ?></span>
                            <span>FPS</span>
                        </div>
                        <div class="games-options">
                            <?php foreach($game['resolutions'] as $k => $fps): ?>
                            <?php $percent = round($fps / $maxFps * 100, 1); ?>
                            <div class="games-options__item">
                                <div class="games-bar">
                                    <div class="games-bar__line games-bar__line--<?= $k ?>">
                                        <span class="games-bar__percent" style="width: <?= $percent ?>%"></span>
                                        <div class="games-bar__pointer"><span></span></div>
                                    </div>
                                </div>
                                <div class="games-options__fps"><?= $fps ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
$char = [
    [
        'title' => 'Характеристики',
        'items' => [
            [
                'title' => 'Корпус',
                'value' => 'Montech King 95 Pro — Белый',
            ],
            [
                'title' => 'Процессор',
                'value' => 'Intel Core i5-12400F',
            ],
            [
                'title' => 'Материнская плата',
                'value' => 'MSI PRO H610M-G DDR4',
            ],
            [
                'title' => 'Видеокарта',
                'value' => 'Palit GeForce RTX 5050 Dual',
            ],
            [
                'title' => 'Охлаждение',
                'value' => 'DEEPCOOL LE360 V2 белая',
            ],
            [
                'title' => 'Накопитель',
                'value' => '1000 ГБ M.2 NVMe накопитель ADATA LEGEND 860',
            ],
            [
                'title' => 'Блок питания',
                'value' => 'PHANTEKS AMP BH, 750W, 80+ Bronze',
            ],
            [
                'title' => 'Райзер',
                'value' => 'Классическая установка видеокарты',
            ],
            [
                'title' => 'Операционная система',
                'value' => 'Windows 11/10 PRO Лицензионная',
            ],
        ],
    ],
    [
        'title' => 'Сервис',
        'items' => [
            [
                'title' => 'Фирменная гарантия',
                'value' => '2 года на всю сборку с заменой любой детали на новую',
            ],
            [
                'title' => 'Глубокая оптимизация',
                'value' => 'Обновление BIOS с полной настройкой, установка драйверов и необходимого ПО',
            ],
            [
                'title' => '4-х часовое тестирование',
                'value' => 'На брак и стабильность под 100% нагрузкой',
            ],
            [
                'title' => 'Техподдержка и консультации',
                'value' => 'Обращайтесь по любому вопросу',
            ],
            [
                'title' => 'Официальные поставщики',
                'value' => 'Только новые комплектующие с официальной гарантией',
            ],
            [
                'title' => 'Безопасная упаковка',
                'value' => 'Для доставки по всей России',
            ],
        ],
    ],
];
?>
<div class="char-section gray">
    <div class="container">
        <div class="char pad">
            <div class="h1 title-side">Характеристики и&nbsp;сервис</div>
            <div class="char__box">
                <?php foreach($char as $item): ?>
                <div class="char-item">
                    <div class="char-item__title h4"><?= $item['title'] ?>:</div>
                    <div class="table">
                        <?php foreach($item['items'] as $row): ?>
                        <div class="table__item">
                            <div class="table__label"><?= $row['title'] ?></div>
                            <div class="table__value"><?= $row['value'] ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
$faq_btn = true;
$faq_title = 'Ответы по сборке <span>EXTRA CORE</span>';
$tabs = [
    [
        'title' => 'Ответы по сборке EXTRA CORE',
        'items' => [
            [
                'question' => 'Гарантируете ли вы совместимость выбранных компонентов?',
                'answer' => 'Да, все сборки проходят проверку на совместимость. Наш конфигуратор автоматически блокирует комбинации, которые не могут работать вместе (например, несовместимые сокеты процессора и материнской платы).',
            ],
            [
                'question' => 'Какая гарантия на сборку и комплектующие?',
                'answer' => 'На все комплектующие действует официальная гарантия производителя. На саму сборку предоставляется гарантия нашего сервиса.',
            ],
            [
                'question' => 'Проходит ли сборка тестирование перед отправкой?',
                'answer' => 'Да, перед отправкой каждая сборка проходит стресс-тестирование и проверку стабильности работы.',
            ],
        ],
    ],
];
?>
<?php include 'template-parts/blocks/faq.php'; ?>

<section class="excellence-section gray">
    <div class="container">
        <div class="excellence pad">
            <div class="title-ui">
                <div class="title-ui__line"><span></span></div>
                <h2 class="h1 title-ui__text excellence__title">Превосходство</h2>
                <div class="title-ui__line"><span></span></div>
            </div>

            <?php
            $excellence = [
                [
                    'title' => 'Надежность упаковки',
                    'description' => 'Безопасная упаковка для доставки по всей России',
                    'text' => '
                        <p>Надежно упаковываем компьютер для транспортировки и отправляем службой доставки CDEK. Будьте уверены — Ваш компьютер дойдет в целости и сохранности.</p>
                        <p><strong>После отправки вы получите:</strong></p>
                        <ul>
                            <li>Трек-номер для отслеживания заказа</li>
                            <li>Финальный отчет с деталями упаковки</li>
                            <li>Оформим страховку груза через ТК СДЭК</li>
                            <li>Деревянная обрешетка (СДЭК)</li>
                        </ul>
                    ',
                    'images' => [
                        'assets/img/content/ex1.jpg',
                        'assets/img/content/ex2.jpg',
                    ],
                ],
                [
                    'title' => 'Фирменная гарантия',
                    'description' => 'От 2-х лет на всю сборку с заменой любой детали на новую',
                    'text' => '
                        <p>Предоставляем фирменную гарантию на готовую сборку сроком от 2-х лет. Перед отправкой компьютер проходит проверку под нагрузкой, поэтому вы получаете полностью готовую к работе систему.</p>
                    ',
                    'images' => [],
                ],
                [
                    'title' => 'Глубокая оптимизация',
                    'description' => 'Обновление BIOS, установка драйверов и необходимого ПО',
                    'text' => '
                        <p>После сборки настраиваем компьютер и проверяем стабильность его работы. Вам не придется самостоятельно устанавливать драйверы, искать нужные настройки или разбираться с обновлениями.</p>
                    ',
                    'images' => [],
                ],
                [
                    'title' => 'Техподдержка и консультация',
                    'description' => 'Мы ежедневно готовы помочь по любым вопросам',
                    'text' => '
                        <p>Остаемся на связи после покупки и помогаем разобраться с любыми вопросами по работе компьютера. Подскажем, как подключить оборудование, настроить систему или решить возникшую проблему.</p>
                    ',
                    'images' => [],
                ],
            ];
            ?>
            <div class="excellence-box">
                <?php foreach($excellence as $k => $quest): ?>
                <div class="excellence-item<?php echo $k === 0 ? ' active' : ''; ?>">
                    <div class="excellence-item__top">
                        <div class="excellence-item__title h3 uppercase"><?php echo $quest['title']; ?></div>
                        <div class="excellence-item__sub text-gray"><?php echo $quest['description']; ?></div>
                        <button type="button" class="excellence-item__icon" aria-label="<?php echo $quest['title']; ?>">
                            <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg>
                        </button>
                    </div>
                    <div class="excellence-item__bottom">
                        <div class="excellence-item__content<?php if(!$quest['images']){echo ' wide';} ?>">
                            <div class="excellence-item__text text-ui text-gray">
                                <?php echo $quest['text']; ?>
                            </div>
                            <?php if($quest['images']): ?>
                            <div class="excellence-item__gal">
                                <?php foreach($quest['images'] as $images): ?>
                                <a href="<?= $images ?>" class="border-black line-border img-absolute excellence-item__img" data-fancybox="ex-<?= $k ?>">
                                    <div class="line-gal line-gal--top"></div>
                                    <div class="line-gal line-gal--bottom"></div>
                                    <img src="<?= $images ?>" alt="gal" loading="lazy">
                                </a>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php $hit_title = 'Альтернативные конфигурации'; ?>
<?php include 'template-parts/blocks/hit.php'; ?>
    
<?php include 'footer.php'; ?>