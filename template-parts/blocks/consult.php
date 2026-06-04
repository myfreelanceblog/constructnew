<section class="consult-section linear">
    <div class="container">
        <div class="consult pad">
            <h2 class="h1">Консультация <br>и подбор конфигурации</h2>

            <?php
            $consult = [
                [
                    'box' => [
                        [
                            'badge' => 'Бюджет',
                            'text' => 'Выбирайте подходящий вариант на ваш бюджет',
                        ],
                        [
                            'badge' => 'Конфигурация',
                            'text' => 'Меняйте модели и цвет комплектующих ',
                        ],
                    ],
                    'media' => [
                        [
                            'img' => 'consult1.webp',
                            'text' => 'кастомизация',
                        ]
                    ]
                ],
                [
                    'box' => [
                        [
                            'badge' => 'Дизайн',
                            'text' => 'Выбирайте дизайн, размеры и&nbsp;цвет корпуса',
                        ],
                        [
                            'badge' => 'спецзадачи',
                            'text' => 'Индивидуальный подбор с&nbsp;учетом любых пожеланий и&nbsp;задач',
                        ],
                    ],
                    'media' => [
                        [
                            'img' => 'consult2.webp',
                            'text' => 'Игры и графика',
                        ]
                    ]
                ]
            ];
            ?>
            <div class="consult__box">
                <?php foreach($consult as $index => $item): ?>
                <div class="consult-item<?php if($index % 2 === 1){echo ' reverse';} ?>">
                    <div class="consult-item__box">
                        <?php foreach($item['box'] as $box): ?>
                        <div class="consult-item__content border-pointer">
                            <div class="consult-item__top">
                                <div class="trapeze trapeze-reverse">
                                    <div class="trapeze__text uppercase"><?= $box['badge'] ?></div>
                                </div>
                            </div>

                            <div class="border-pointer__content">
                                <div class="text-gray"><?= $box['text'] ?></div>
                            </div>
                            
                            <div class="border-pointer__bottom"></div>
                            <div class="border-pointer__line"></div>
                            <div class="border-pointer__side"></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php foreach($item['media'] as $media): ?>
                    <div class="consult-item__img border-pointer img-absolute">
                        <img src="assets/img/content/<?= $media['img'] ?>" alt="consult" loading="lazy">
                        <div class="consult-item__bottom">
                            <div class="trapeze">
                                <div class="trapeze__text uppercase"><?= $media['text'] ?></div>
                            </div>
                        </div>
                        <div class="border-pointer__bottom"></div>
                        <div class="border-pointer__line"></div>
                        <div class="border-pointer__side"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>