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
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a href="javascript:void(0);" itemprop="item">
                    <span itemprop="name">Блог</span>
                    <meta itemprop="position" content="2">
                </a>
            </li>
            <li class="breadcrumb__single"><span>Ведьмак 3 спустя 10 лет: актуальные требования к ПК в 2026</span></li>
        </ul>
    </div>
</div>

<section class="single-section pad-medium-top">
    <div class="container">
        <article class="single">
            <header class="single__header">
                <div class="accent-line">
                    <h1 class="accent-line__title h1">Ведьмак 3 спустя 10 лет: актуальные требования к ПК в 2026</h1>
                    <div class="accent-line__desc">Ведьмак 3: Дикая Охота» — одна из тех игр, которые не теряют актуальности даже спустя годы после выхода. Благодаря масштабному обновлению до версии Next‑Gen игра заиграла новыми красками: улучшенная графика, трассировка лучей, более детализированные текстуры. Разберёмся, какой компьютер понадобится, чтобы насладиться игрой по максимуму.</div>
                </div>
                <div class="single__media border-black img-absolute">
                    <img src="assets/img/content/news.jpg" alt="news">
                    <div class="trapeze trapeze-reverse single__date">
                        <div class="trapeze__text uppercase">25 апреля 2026</div>
                    </div>
                    <a href="javascript:void(0);" class="single__cat trapeze">
                        <div class="trapeze__text">ГЕЙМЕРАМ</div>
                    </a>
                </div>
            </header>

            <div class="single__content">
                <div class="single__line"><div class="line-ui"><span></span></div></div>
                <div class="single__body text-ui article-content text-gray">
                    <h2>Культовой игре «Ведьмак 3: Дикая Охота исполнилось 10 лет</h2>
                    <p>За это время игра не просто не потеряла популярности — она получила масштабное обновление до версии Next‑Gen, которое добавило трассировку лучей, улучшенные текстуры, более реалистичное освещение и поддержку ультрашироких мониторов. Благодаря этим изменениям мир ведьмака заиграл новыми красками, но и требования к компьютеру заметно выросли.</p>
                    <h2>Фоторежим в игре The Witcher 3</h2>
                    <p>Скриншоты в «Ведьмаке 3» — это не просто память о прохождении, а возможность создать собственную галерею фантастического мира. Запускайте игру, открывайте фоторежим и отправляйтесь на охоту за кадрами — Каэр Морхен, Скеллиге и Новиград ждут, чтобы стать  частью вашей коллекции! </p>
                    
                    <?php
                    $gal = [
                        'Геральт и Плотва на архипелаге Скеллиге',
                        'Максимальные требования 1440p/4K',
                    ];
                    ?>
                    <div class="pc-gallery">
                        <div class="pc-gallery__slider border-black">
                            <div class="pc-gallery__swiper swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach($gal as $k => $item): ?>
                                    <div class="swiper-slide">
                                        <a href="assets/img/content/news.webp" class="pc-gallery__img img-absolute" data-fancybox="pc-gallery" data-caption="<?= $item ?>">
                                            <img src="assets/img/content/news.webp" alt="pc-gallery" loading="lazy">
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                            <div class="nav pc-gallery__nav">
                                <button class="nav__item nav__prev pc-gallery__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                                <button class="nav__item nav__next pc-gallery__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                            </div>

                            <button type="button" class="zoom pc-gallery__zoom" aria-label="увеличить">
                                <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#zoom"></use></svg>
                            </button>

                            <div class="pc-gallery-numb trapeze">
                                <div class="trapeze__text">
                                    <span class="pc-gallery-numb__start">01</span>
                                    <span>/</span>
                                    <span class="pc-gallery-numb__end"><?= format_number_slides(count($gal)) ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="pc-gallery__captions">
                            <?php foreach($gal as $k => $item): ?>
                            <div class="pc-gallery__caption<?php if($k == 0){echo ' active';} ?>"><?= $item ?></div>
                            <?php endforeach; ?>
                        </div>

                        <div class="nav nav--gray pc-gallery__nav-mob">
                            <button class="nav__item nav__prev pc-gallery__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                            <button class="nav__item nav__next pc-gallery__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                        </div>
                    </div>

                    <h2>Максимальные требования 1440p/4K</h2>
                    <p>Для тех, кто хочет увидеть «Ведьмака 3» во всей красе с трассировкой лучей и высоким разрешением.</p>
                    <p><b>КОНФИГУРАЦИЯ:</b></p>
                    <ul>
                        <li>Процессор: Intel Core i9‑9900K или AMD Ryzen 7 3700X;</li>
                        <li>Видеокарта: NVIDIA GeForce RTX 3070 или AMD Radeon RX 6800 (8+ ГБ);</li>
                        <li>Оперативная память: 16 ГБ DDR4;</li>
                        <li>Место на диске: 50 ГБ на высокоскоростном NVMe SSD;</li>
                        <li>ОС: Windows 11 64‑bit (оптимально для Ray Tracing.</li>
                    </ul>
                    <p><b>ЧТО ПОЛУЧИТЕ:</b></p>
                    <ul class="list-plus">
                        <li>60+ FPS в 1440p с включённой трассировкой лучей;</li>
                        <li>Кинематографическое качество изображения;</li>
                        <li>Ультрадетализированные текстуры;</li>
                        <li>Плавная работа в густонаселённых локациях (Новиград, Скеллиге).</li>
                    </ul>
                    <h2>Нестабильность работы переиздания</h2>
                    <p>Обновление практически «сломало» поддержку пользовательских модификаций. Большинство популярных модов, которые улучшали геймплей, графику или интерфейс, перестали работать. </p>
                    <p><strong>ТЕХНИЧЕСКИЕ СБОИ И ВЫЛЕТЫ</strong></p>
                    <ul class="list-line">
                        <li>Частые вылеты при запуске или во время игры;</li>
                        <li>Проблемы с оверлеем Steam (он может отключаться);</li>
                        <li>Сбои при попытке включить трассировку лучей (Ray Tracing);</li>
                        <li>Некорректная работа технологии масштабирования DLSS </li>
                    </ul>
                </div>
                <div class="single__line"><div class="line-ui"><span></span></div></div>
            </div>
        </article>
    </div>
</section>

<section class="same-section">
    <div class="container">
        <div class="same pad">
            <div class="top">
                <h2 class="h1 top__title">Читайте так же</h2>
                <div class="nav top__nav nav--gray">
                    <button class="nav__item nav__prev same__prev" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                    <button class="nav__item nav__next same__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                </div>
            </div>
            
            <?php
            $news = [
                [
                    'img' => 'n1.webp',
                    'cat' => 'Розыгрыш',
                    'title' => 'Розыгрыш ПК от «Мира кораблей» и CONSTRUCT PC',
                ],
                [
                    'img' => 'n2.webp',
                    'cat' => 'Сборка',
                    'title' => 'Сборка ПК под ключ:  что происходит за кулисами',
                ],
                [
                    'img' => 'n3.webp',
                    'cat' => 'Геймерам',
                    'title' => 'Разрешение и FPS: как собрать идеальный игровой ПК',
                ],
                [
                    'img' => 'n2.webp',
                    'cat' => 'Сборка',
                    'title' => 'Сборка ПК под ключ:  что происходит за кулисами',
                ],
            ];
            ?>
            <div class="same__slider">
                <div class="same__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($news as $item): ?>
                        <div class="swiper-slide">
                            <?php include 'template-parts/components/news-item.php'; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <a href="javascript:void(0);" class="btn-def same__btn">
                <span>Перейти в блог</span>
                <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-menu"></use></svg>
            </a>
        </div>
    </div>
</section>
    
<?php include 'footer.php'; ?>