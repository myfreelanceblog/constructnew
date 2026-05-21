<section class="best-section">
    <div class="container">
        <div class="best pad">
            <div class="title-ui">
                <div class="title-ui__line"><span></span></div>
                <h2 class="h1 title-ui__text">Лучшие решения для игр и рабочих задач</h2>
                <div class="title-ui__line"><span></span></div>
            </div>

            <?php
            $best = [
                [
                    'ttl' => 'Рабочие СТАНЦИИ',
                    'desc' => 'Высокопроизводительные рабочие станции и GPU-серверы для задач в сфере ИИ, 3D, видео и инженерных вычислений',
                    'btn' => 'Выбрать рабочую станцию',
                    'img' => 'assets/img/content/best.png',
                    'icon' => 'pc-mob',
                    'type' => 'link',
                    'style' => 'normal',
                ],
                [
                    'ttl' => 'ИГРОВЫЕ КОМПЬЮТЕРЫ',
                    'desc' => 'Мощные игровые компьютеры для тех, кто хочет получать максимум от игрового процесса',
                    'btn' => 'Выбрать игровой компьютер',
                    'img' => 'assets/img/content/best.png',
                    'icon' => 'game',
                    'type' => 'link',
                    'style' => 'normal',
                ],
                [
                    'ttl' => 'КОНФИГУРАТОР',
                    'desc' => 'Создайте компьютер мечты — мощность, стиль и технологии по собственным правилам.',
                    'btn' => 'Собрать свой ПК',
                    'img' => 'assets/img/content/best-conf.png',
                    'icon' => 'config',
                    'type' => 'btn',
                    'style' => 'wide',
                ],
            ];
            ?>
            <div class="best-box">
                <?php foreach ($best as $item): ?>
                    <div class="best-item linear<?= ($item['style'] == 'wide') ? ' best-item--wide' : ''; ?>">
                        <div class="best-item__top accent-line">
                            <div class="accent-line__title h2 best-item__title"><?= $item['ttl']; ?></div>
                            <div class="accent-line__desc"><?= $item['desc']; ?></div>
                        </div>
                        <div class="best-item__bottom">
                            <div class="best-item__img"><img src="<?= $item['img']; ?>" alt="<?= $item['ttl']; ?>" loading="lazy"></div>
                            <?php if($item['type'] == 'btn'): ?>
                            <button class="best-item__btn border-side btn-white" type="button" aria-label="<?= $item['btn']; ?>" data-modal="config">
                            <?php else: ?>
                            <a href="javascript:void(0);" class="best-item__btn border-side btn-white">
                            <?php endif; ?>
                                <div class="btn-white__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#<?= $item['icon'] ?>"></use></svg></div>
                                <div class="btn-white__title"><?= $item['btn']; ?></div>
                            <?php if($item['type'] != 'btn'): ?>
                            </a>
                            <?php else: ?>
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>