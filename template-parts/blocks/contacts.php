<section class="contacts-section linear">
    <div class="container">
        <div class="contacts pad">
            <div class="title-ui">
                <div class="title-ui__line"><span></span></div>
                <h2 class="h1 title-ui__text contacts__title">Контакты</h2>
                <div class="title-ui__line"><span></span></div>
            </div>

            <div class="contacts__box">
                <?php
                $contacts = [
                    [
                        'title' => 'Адрес',
                        'label' => 'Прием по предварительной записи',
                        'desc'  => 'г. Екатеринбург, ул. Шефская, 4 А',
                    ],
                    [
                        'title' => 'По всем вопросам',
                        'label' => 'Телефон',
                        'desc'  => '+7-912-048-89-98',
                        'href'  => 'tel:+79120488998',
                    ],
                    [
                        'title' => 'Режим работы',
                        'label' => 'Работаем ежедневно',
                        'desc'  => '11:00 до 20:00 по ЕКБ',
                    ],
                    [
                        'title' => 'Электронная почта',
                        'label' => 'Сотрудничество и реклама',
                        'desc'  => 'constructpc.ekb@gmail.com',
                        'href'  => 'mailto:constructpc.ekb@gmail.com',
                    ],
                ];
                ?>
                <div class="contacts__items">
                    <?php foreach ($contacts as $item): ?>
                    <div class="contacts-item">
                        <div class="trapeze trapeze-reverse contacts-item__title">
                            <div class="trapeze__text uppercase"><?= $item['title']; ?></div>
                        </div>
                        <div class="contacts-item__content">
                            <div class="contacts-item__label"><?= $item['label']; ?></div>
                            <?php if (!empty($item['href'])): ?>
                            <a href="<?= $item['href']; ?>" class="contacts-item__desc h4"><?= $item['desc']; ?></a>
                            <?php else: ?>
                            <div class="contacts-item__desc h4"><?= $item['desc']; ?></div>
                            <?php endif; ?>
                            <div class="contacts-item__line"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="contacts-map border-black">
                    <div id="map"></div>
                    <div class="contacts-map__title">
                        <div class="trapeze">
                            <div class="trapeze__text">
                                <div class="contacts-map__row">
                                    <span>г. Екатеринбург, ул. Шефская, 4 А</span>
                                    <span></span>
                                    <span>Прием по предварительной записи</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>