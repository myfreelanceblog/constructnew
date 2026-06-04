<section class="delivery-section">
    <div class="container">
        <div class="delivery pad pad-medium-top">
            <h1 class="title-side h1">Способы доставки</h1>
            <?php
            $delivery = [
                [
                    'title'    => 'Самовывоз',
                    'subtitle' => 'Забрать ПК лично',
                    'image'    => 'deliv1.webp',
                    'label'    => 'Из нашего офиса',
                    'desc'     => 'Прямо по предварительной записи',
                    'text'     => 'г. Екатеринбург, ул. Шефская, 4 «А»',
                ],
                [
                    'title'    => 'По Екатеринбургу',
                    'subtitle' => 'Доставка нашим курьером',
                    'image'    => 'deliv2.webp',
                    'label'    => 'Прямо к вашей двери',
                    'desc'     => 'Стоимость рассчитывается индивидуально',
                    'text'     => 'Доставим ваш ПК домой или в офис',
                ],
                [
                    'title'    => 'Доставка по России',
                    'subtitle' => 'ТК СДЕК',
                    'image'    => 'deliv3.webp',
                    'label'    => '3–5 рабочих дней',
                    'desc'     => 'Вы получите трек-номер для отслеживания заказа',
                    'text'     => 'И финальный отчет с деталями упаковки',
                ],
            ];
            ?>
            <div class="delivery__box">
                <?php foreach ($delivery as $item) : ?>
                <div class="delivery-item linear linear--border">
                    <div class="delivery-item__header">
                        <div class="h3 uppercase"><?= $item['title']; ?></div>
                        <div class="delivery-item__sub"><?= $item['subtitle']; ?></div>
                    </div>
                    <div class="delivery-item__media">
                        <div class="delivery-item__img img-absolute">
                            <img src="assets/img/content/<?= $item['image']; ?>" alt="<?= $item['title']; ?>">
                        </div>
                        <div class="delivery-item__caption badge"><span><?= $item['label']; ?></span></div>
                    </div>
                    
                    <div class="delivery-item__bottom">
                        <div class="delivery-item__info"><?= $item['desc']; ?></div>
                        <div class="delivery-item__text"><?= $item['text']; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>