<section class="package-section gray">
    <div class="container">
        <div class="package pad">
            <div class="package__top">
                <h2 class="h1">Ваш компьютер дойдет в&nbsp;целости и сохранности</h2>
                <div class="text-gray">Внутри каждого компьютера находится специальный упаковочный поролон, обеспечивающий надежную защиту при транспортировке. По Вашему желанию можно докупить деревянную обрешетку и страхование груза от ТК СДЕК</div>
            </div>
            <?php
            $features = [
                [
                    'image' => 'pack1.webp',
                    'title' => 'Специальный упаковочный поролон',
                    'text'  => 'Внутри каждого компьютера находится специальный упаковочный поролон, обеспечивающий надежную защиту при транспортировке',
                ],
                [
                    'image' => 'pack2.webp',
                    'title' => 'Деревянная обрешетка (СДЭК)',
                    'text'  => 'Жесткий деревянный каркас надежно защищает корпус ПК от ударов и повреждений во время транспортировки',
                ],
                [
                    'image' => 'pack3.webp',
                    'title' => 'Страхование от повреждений при перевозке',
                    'text'  => 'Оформим страховку груза через ТК СДЭК. Если при транспортировке случилась поломка, мы заменим неисправные комплектующие',
                ],
                [
                    'image' => 'pack4.webp',
                    'title' => 'Гарантия работоспособности после доставки',
                    'text'  => 'Ваш ПК приедет готовым к работе. Поможем с первым включением и настройкой',
                ],
            ];
            ?>
            <div class="package__box">
                <?php foreach ($features as $index => $item): ?>
                <div class="package-item<?= ($index % 4 >= 2) ? ' reverse' : '' ?>">
                    <div class="package-item__content">
                        <div class="accent-line">
                            <div class="accent-line__title h4"><?= htmlspecialchars($item['title']) ?></div>
                            <div class="accent-line__desc"><?= htmlspecialchars($item['text']) ?></div>
                        </div>
                    </div>
                    <div class="package-item__img img-absolute corner">
                        <img src="assets/img/content/<?= htmlspecialchars($item['image']) ?>" alt="package" loading="lazy">
                        <div class="corner__bottom"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>