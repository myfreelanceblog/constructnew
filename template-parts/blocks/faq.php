<section class="faq-section">
    <div class="container">
        <div class="faq pad">
            <h2 class="faq__title h1">Ответы на часто задаваемые вопросы</h2>

            <?php
            $tabs = [
                [
                    'title' => 'Гарантия',
                    'items' => [
                        [
                            'question' => 'Гарантируете ли вы совместимость выбранных компонентов?',
                            'answer' => 'Да, все сборки проходят проверку на совместимость. Наш конфигуратор автоматически блокирует комбинации, которые не могут работать вместе (например, несовместимые сокеты процессора и материнской платы).',
                        ],
                        [
                            'question' => 'Какая гарантия на сборку и комплектующие?',
                            'answer' => 'На все комплектующие действует официальная гарантия производителя. На саму сборку предоставляется гарантия нашего сервиса.',
                        ],
                        [
                            'question' => 'Проходит ли сборка тестирование перед отправкой?',
                            'answer' => 'Да, перед отправкой каждая сборка проходит стресс-тестирование и проверку стабильности работы.',
                        ],
                    ],
                ],
                [
                    'title' => 'Доставка и оплата',
                    'items' => [
                        [
                            'question' => 'Какие способы оплаты доступны?',
                            'answer' => 'Вы можете оплатить заказ банковской картой, переводом по реквизитам или наличными при самовывозе.',
                        ],
                        [
                            'question' => 'Сколько занимает доставка?',
                            'answer' => 'Срок доставки зависит от региона и выбранного способа отправки. В среднем доставка занимает от 1 до 7 рабочих дней.',
                        ],
                    ],
                ],
                [
                    'title' => 'Сборка',
                    'items' => [
                        [
                            'question' => 'Можно ли собрать компьютер под мои задачи?',
                            'answer' => 'Да, мы подбираем конфигурацию индивидуально под игры, работу, монтаж, 3D или другие задачи.',
                        ],
                        [
                            'question' => 'Устанавливаете ли вы Windows и драйверы?',
                            'answer' => 'По запросу мы можем установить операционную систему, необходимые драйверы и базовое программное обеспечение.',
                        ],
                    ],
                ],
            ];
            ?>
            <div class="faq-box">
                <div class="faq-tab">
                    <?php foreach($tabs as $k => $tab_item): ?>
                    <button class="faq-tab__item<?php if($k == 0){echo ' active';} ?>" type="button"><?= $tab_item['title'] ?></button>
                    <?php endforeach; ?>
                </div>
                <div class="faq-box__content" itemscope itemtype="https://schema.org/FAQPage">
                    <?php foreach($tabs as $k => $tab_item): ?>
                    <div class="faq-box__item<?php if($k == 0){echo ' active';} ?>">
                        <div class="faq-box__wrap">
                            <?php foreach($tab_item['items'] as $quest): ?>
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-item">
                                <div class="faq-item__content">
                                    <button type="button" class="faq-item__title h3" itemprop="name"><span><?php echo $quest['question']; ?></span></button>
                                    <div class="faq-item__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text"><?php echo $quest['answer']; ?></div>
                                    </div>
                                </div>
                                <button type="button" class="faq-item__icon" aria-label="<?php echo $quest['question']; ?>">
                                    <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg>
                                </button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>