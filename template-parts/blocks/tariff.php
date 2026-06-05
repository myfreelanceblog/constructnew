<section class="tariff-section linear">
    <div class="container">
        <div class="tariff pad">
            <div class="title-ui">
                <div class="title-ui__line"><span></span></div>
                <h2 class="h1 title-ui__text">Преимущества нашей гарантии</h2>
                <div class="title-ui__line"><span></span></div>
            </div>

            <?php
            $tariffs = [
                [
                    'title' => 'Тариф 24 месяца',
                    'items' => [
                        [
                            'label' => 'Распространение гарантии',
                            'value' => 'На все производственные дефекты и системные неисправности',
                        ],
                        [
                            'label' => 'Замена комплектующих на новые',
                            'value' => 'Бесплатная при гарантийном случае',
                        ],
                        [
                            'label' => 'Сохранение гарантии на комплектующие от производителя (до 10 лет)',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Техническая поддержка',
                            'value' => '2 года',
                        ],
                        [
                            'label' => 'Фотоотчет этапов работы',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Установка актуальных драйверов, настройка работы Windows',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Оптимизация работы ПК',
                            'value' => 'Настройка BIOS и вентиляторов, заводской разгон оперативной памяти',
                        ],
                        [
                            'label' => 'Стресс-тестирование',
                            'value' => '4 часа + фото отчет',
                        ],
                        [
                            'label' => 'Техническое обслуживание',
                            'value' => 'Нет',
                        ],
                        [
                            'label' => 'Покрытие транспортных расходов в случае неисправности ПК',
                            'value' => 'Нет',
                        ],
                        [
                            'label' => 'Фотосессия сборки',
                            'value' => 'Нет',
                        ],
                        [
                            'label' => 'Стоимость гарантии',
                            'value' => 'Включена',
                        ],
                    ],
                ],
                [
                    'title' => 'Тариф 36 месяцев',
                    'items' => [
                        [
                            'label' => 'Распространение гарантии',
                            'value' => 'На все производственные дефекты и системные неисправности',
                        ],
                        [
                            'label' => 'Замена комплектующих на новые',
                            'value' => 'Бесплатная при гарантийном случае',
                        ],
                        [
                            'label' => 'Сохранение гарантии на комплектующие от производителя (до 10 лет)',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Техническая поддержка',
                            'value' => 'Пожизненная',
                        ],
                        [
                            'label' => 'Фотоотчет этапов работы',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Установка актуальных драйверов, настройка работы Windows',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Оптимизация работы ПК',
                            'value' => 'Настройка BIOS для максимальной производительности и вентиляторов, заводской разгон оперативной памяти',
                        ],
                        [
                            'label' => 'Стресс-тестирование',
                            'value' => '4 часа + фото отчет + тестирование в реальных играх и ПО по выбору клиента',
                        ],
                        [
                            'label' => 'Техническое обслуживание',
                            'value' => 'Нет',
                        ],
                        [
                            'label' => 'Покрытие транспортных расходов в случае неисправности ПК',
                            'value' => 'Нет',
                        ],
                        [
                            'label' => 'Фотосессия сборки',
                            'value' => 'Нет',
                        ],
                        [
                            'label' => 'Стоимость гарантии',
                            'value' => '5% к стоимости компьютера',
                        ],
                    ],
                ],
                [
                    'title'  => 'Тариф 36 месяцев',
                    'active' => true,
                    'items'  => [
                        [
                            'label' => 'Распространение гарантии',
                            'value' => 'На все производственные дефекты и системные неисправности',
                        ],
                        [
                            'label' => 'Замена комплектующих на новые',
                            'value' => 'Бесплатная при гарантийном случае',
                        ],
                        [
                            'label' => 'Сохранение гарантии на комплектующие от производителя (до 10 лет)',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Техническая поддержка',
                            'value' => 'Пожизненная',
                        ],
                        [
                            'label' => 'Фотоотчет этапов работы',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Установка актуальных драйверов, настройка работы Windows',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Оптимизация работы ПК',
                            'value' => 'Настройка BIOS для максимальной производительности и вентиляторов, заводской разгон оперативной памяти',
                        ],
                        [
                            'label' => 'Стресс-тестирование',
                            'value' => '4 часа + фото отчет + тестирование в реальных играх и ПО по выбору клиента',
                        ],
                        [
                            'label' => 'Техническое обслуживание',
                            'value' => '2 раза в течение гарантийного срока',
                        ],
                        [
                            'label' => 'Покрытие транспортных расходов в случае неисправности ПК',
                            'value' => '2 раза в течение гарантийного срока',
                        ],
                        [
                            'label' => 'Фотосессия сборки',
                            'value' => 'Да',
                        ],
                        [
                            'label' => 'Стоимость гарантии',
                            'value' => '9% к стоимости компьютера',
                        ],
                    ],
                ],
            ];
            ?>
            <div class="tariff__slider">
                <div class="nav tariff__nav">
                    <button class="nav__item nav__prev tariff__prev" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                    <button class="nav__item nav__next tariff__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                </div>
                <div class="tariff__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($tariffs as $tariff): ?>
                        <div class="swiper-slide">
                            <div class="tariff-item border-pointer<?= !empty($tariff['active']) ? ' active' : ''; ?>">
                                <div class="tariff-item__top">
                                    <div class="trapeze trapeze-reverse">
                                        <div class="trapeze__text uppercase"><?= $tariff['title']; ?></div>
                                    </div>
                                </div>

                                <div class="border-pointer__content">
                                    <div class="table">
                                        <?php foreach ($tariff['items'] as $item): ?>
                                            <div class="table__item">
                                                <div class="table__label"><?= $item['label']; ?></div>
                                                <div class="table__value"><?= $item['value']; ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="border-pointer__bottom"></div>
                                <div class="border-pointer__line"></div>
                                <div class="border-pointer__side"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>