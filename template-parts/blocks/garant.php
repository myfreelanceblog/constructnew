<section class="garant-section">
    <div class="container">
        <div class="garant pad pad-medium-top">
            <h1 class="title-side h1">Гарантия</h1>

            <?php
            $garant = [
                [
                    [
                        'caption' => 'Фирменная гарантия',
                        'title'   => 'От CONSTRUCTPC до 3 лет',
                        'text'    => 'Распространяется на всю сборку с заменой любой детали на новую',
                    ],
                    [
                        'caption' => 'Проверенные партнёры',
                        'title'   => 'Официальные поставщики',
                        'text'    => 'Только новые комплектующие с официальной гарантией',
                    ],
                ],
                [
                    [
                        'caption' => 'Без сторонних сервисов',
                        'title'   => 'Сервис «под ключ»',
                        'text'    => 'Распространяется на всю сборку с заменой любой детали на новую',
                    ],
                    [
                        'caption' => 'Техническая поддержка',
                        'title'   => 'По любому вопросу',
                        'text'    => 'Даже самому глупому, мы за настоящий человеческий сервис',
                    ],
                ],
            ];
            ?>
            <div class="garant__row">
                <?php foreach ($garant as $key => $column) { ?>
                    <div class="garant__content">
                        <?php foreach ($column as $item) { ?>
                            <div class="garant-item">
                                <div class="garant-item__caption badge uppercase">
                                    <span><?= $item['caption']; ?></span>
                                </div>

                                <div class="garant-item__content">
                                    <div class="h3"><?= $item['title']; ?></div>
                                    <div class="text-gray"><?= $item['text']; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <?php if ($key === 0) { ?>
                        <div class="garant__img img-absolute border-black">
                            <div class="line-gal line-gal--top"></div>
                            <img src="assets/img/content/garant.webp" alt="Комплектующие для сборки компьютера">
                            <div class="line-gal line-gal--bottom"></div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>