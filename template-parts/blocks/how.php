<section class="how-section">
    <div class="container">
        <div class="how pad">
            <div class="how__top">
                <h2 class="how__title h1">Как оформить заказ <br>в&nbsp;нашем магазине</h2>
                <div class="how__desc">Высокопроизводительные рабочие станции и GPU-серверы для задач в сфере ИИ, 3D, видео и инженерных вычислений Выбирайте процессор, видеокарту, объём памяти и другие параметры — система автоматически проверит совместимость и покажет итоговую стоимость.</div>
            </div>
            <?php
            $steps = [
                [
                    'title' => 'Выбор платформы',
                    'text'  => 'Меняете компоненты по вашему желанию',
                ],
                [
                    'title' => 'Подтверждение заказа',
                    'text'  => 'После оформления заказа вы получаете товарный и кассовый чек',
                ],
                [
                    'title' => 'Проверка и сборка',
                    'text'  => 'Высылаем фотоотчет состава заказа, проводим стресс-тесты',
                ],
                [
                    'title' => 'Упаковка и доставка',
                    'text'  => 'Надежно упаковываем компьютер и отправляем доставкой СДЭК',
                ],
            ];
            ?>
            <div class="how__box">
                <?php foreach($steps as $k => $step): ?>
                <div class="how-item">
                    <div class="how-item__top">
                        <div class="how-item__step"><?= $k + 1 ?> этап</div>
                    </div>
                    <div class="how-item__content">
                        <div class="how-item__title h4"><?= $step['title'] ?></div>
                        <div class="how-item__desc"><?= $step['text'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>