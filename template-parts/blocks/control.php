<section class="control-section">
    <div class="container">
        <div class="control pad">
            <div class="top">
                <h2 class="h1 top__title">Проверка и сборка</h2>
                <div class="nav top__nav nav--gray">
                    <button class="nav__item nav__prev control__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                    <button class="nav__item nav__next control__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                </div>
            </div>

            <?php
            $controls = [
                [
                    'img' => 'control1.webp',
                    'title' => 'Сборка компьютера',
                    'text' => 'Аккуратная сборка с идеальным кабель-менеджментом для эстетики и эффективного охлаждения',
                ],
                [
                    'img' => 'control2.webp',
                    'title' => 'Настройка системы',
                    'text' => 'Обновление BIOS, настройка вентиляторов, заводской разгон оперативной памяти (XMP), оптимизация настроек BIOS',
                ],
                [
                    'img' => 'control3.webp',
                    'title' => 'Тестирование',
                    'text' => 'Проводим стресс-тесты всех элементов под максимальной нагрузкой для проверки стабильности',
                ],
                [
                    'img' => 'control4.webp',
                    'title' => 'Установка ПО',
                    'text' => 'Лицензионная Windows 10/11PRO с оригинальной активацией ключом. Все необходимые драйверы и программы.',
                ],
                [
                    'img' => 'control5.webp',
                    'title' => 'Фотоотчет',
                    'text' => 'Высылаем отчет о температурах и тестах. Отправляем фото готовой сборки',
                ],
            ];
            ?>
            <div class="control__slider">
                <div class="control__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($controls as $control): ?>
                        <div class="swiper-slide">
                            <div class="control-item">
                                <div class="control-item__img img-absolute">
                                    <img src="assets/img/content/<?= $control['img'] ?>" alt="control" loading="lazy">
                                </div>
                                <div class="control-item__body">
                                    <div class="info-pointer info-pointer--top"><span></span></div>
                                    <div class="control-item__content">
                                        <div class="h3 uppercase"><?= $control['title'] ?></div>
                                        <div class="text-gray"><?= $control['text'] ?></div>
                                    </div>
                                    <div class="info-pointer info-pointer--bottom"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="nav control__nav-mob nav--gray">
                <button class="nav__item nav__prev control__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                <button class="nav__item nav__next control__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
            </div>
        </div>
    </div>
</section>