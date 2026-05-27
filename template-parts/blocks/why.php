<section class="why-section">
    <div class="container">
        <div class="why pad">
            <h2 class="h1 title-side">Почему выбирают <span>Construct</span>_PC</h2>

            <?php
            $why_items = [
                [
                    'title' => 'Гарантия <br>на все сборки',
                    'desc' => 'Все компьютеры на нашем сайте проходят тщательную проверку перед продажей. Предоставляем официальную гарантию до 3 лет и сервисное обслуживание.',
                    'label' => 'Гарантия',
                    'img' => 'assets/img/content/w1.webp',
                    'img-pc' => 'assets/img/content/w1-pc.webp',
                ],
                [
                    'title' => 'Опытная команда',
                    'desc' => 'Наши специалисты имеют сертификацию ведущих производителей компьютерной техники и более 5 лет опыта в сборке игровых ПК.',
                    'label' => 'Опыт',
                    'img' => '',
                ],
                [
                    'title' => 'Быстрая доставка',
                    'desc' => 'Доставим заказ в любой район города за 1 день в день оформления при наличии товара на складе.',
                    'label' => 'Оперативность',
                    'img' => '',
                ],
                [
                    'title' => 'Всегда в тренде',
                    'desc' => 'Следим за новинками рынка и первыми привозим актуальные модели компьютеров. У нас вы найдете последние поколения.',
                    'label' => 'Ассортимент',
                    'img' => 'assets/img/content/w2.webp',
                    'img-pc' => 'assets/img/content/w2-pc.webp',
                ],
                [
                    'title' => 'Удобный конфигуратор',
                    'desc' => 'Выбирайте процессор, видеокарту, объём памяти и другие параметры — система автоматически проверит совместимость и покажет итоговую стоимость.',
                    'label' => 'Персонализация',
                    'img' => 'assets/img/content/w3.webp',
                    'img-pc' => 'assets/img/content/w3-pc.webp',
                ],
                [
                    'title' => 'Контроль качества',
                    'desc' => 'Каждая сборка проходит 7 этапов проверки: от визуального осмотра комплектующих до финального стресс-теста.',
                    'label' => 'Надёжность',
                    'img' => '',
                    'style' => 'blue',
                    'btn' => true,
                ],
            ];
            $index = 0;
            $count_item = 0;
            ?>
            <div class="why-box">
                <?php foreach ($why_items as $item) : $index++; $count_item++; ?>
                <?php
                $is_blue = (isset($item['style']) && $item['style'] == 'blue') ? ' why-box__item--blue' : '';
                ?>
                <div class="why-box__item why-item<?= $index ?> linear linear--border<?php echo $is_blue; ?>">
                    <?php if (!empty($item['img'])) : ?>
                    <div class="why-box__img">
                        <picture>
                            <source srcset="<?php echo $item['img']; ?>" media="(max-width: 768px)">
                            <img src="<?php echo $item['img-pc']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy">
                        </picture>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($item['btn'])) : ?>
                    <button class="border-side btn-secondary" type="button" aria-label="Собрать надёжный ПК" data-modal="config">
                        <div class="btn-secondary__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#garant"></use></svg></div>
                        <div class="btn-secondary__title">Собрать надёжный ПК</div>
                    </button>
                    <?php endif; ?>

                    <div class="why-box__content accent-line">
                        <div class="accent-line__title h2 why-box__title"><?php echo $item['title']; ?></div>
                        <div class="accent-line__desc"><?php echo $item['desc']; ?></div>
                    </div>
                    <div class="why-box__advantage">
                        <span><?php echo $item['label']; ?></span>
                        <svg width="12" height="12"><use href="assets/img/sprite.svg<?php echo $dev; ?>#plus"></use></svg>
                    </div>
                </div>
                <?php if($count_item == 6){$count_item = 0;} ?>
                <?php endforeach; ?>
            </div>
        </div>

        
    </div>
</section>