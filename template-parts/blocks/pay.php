<section class="pay-section">
    <div class="container">
        <div class="pay pad">
            <div class="title-ui">
                <div class="title-ui__line"><span></span></div>
                <h2 class="h1 title-ui__text">Как проходит оплата</h2>
                <div class="title-ui__line"><span></span></div>
            </div>

            <?php
            $steps = [
                [
                    'image' => 'pay1.webp',
                    'title' => 'Уточняем контактную информацию',
                    'text'  => 'Для формирования товарного чека CONSTRUCT PC с полной технической спецификацией',
                ],
                [
                    'image' => 'pay2.webp',
                    'title' => 'При заказе оплачивается полная стоимость компьютера',
                    'text'  => '100% оплата позволяет нам зарезервировать необходимые комплектующие',
                ],
                [
                    'image' => 'pay3.webp',
                    'title' => 'После оплаты вы получаете полный комплект документов',
                    'text'  => 'Кассовый чек, товарный чек с технической спецификацией компьютера и гарантийный талон',
                ],
            ];
            ?>
            <div class="pay__box">
                <?php foreach ($steps as $item) : ?>
                <div class="pay-item">
                    <div class="pay-item__img border-black img-absolute">
                        <div class="line-gal line-gal--top"></div>
                        <div class="line-gal line-gal--bottom"></div>
                        <img src="assets/img/content/<?= $item['image'] ?>" alt="pay" loading="lazy">
                    </div>
                    <div class="accent-line">
                        <div class="accent-line__title h3"><?= $item['title'] ?></div>
                        <div class="accent-line__desc"><?= $item['text'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>