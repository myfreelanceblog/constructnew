<section class="new-section">
    <div class="container">
        <div class="new pad">
            <div class="new-top">
                <h2 class="h1">Новое и полезное</h2>
                <a href="javascript:void(0);" class="btn-def new__btn">
                    <span>Перейти в блог</span>
                    <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-menu"></use></svg>
                </a>
            </div>

            <?php
            $news = [
                [
                    'img' => 'n1.webp',
                    'cat' => 'Розыгрыш',
                    'title' => 'Розыгрыш ПК от «Мира кораблей» и CONSTRUCT PC',
                ],
                [
                    'img' => 'n2.webp',
                    'cat' => 'Сборка',
                    'title' => 'Сборка ПК под ключ:  что происходит за кулисами',
                ],
                [
                    'img' => 'n3.webp',
                    'cat' => 'Геймерам',
                    'title' => 'Разрешение и FPS: как собрать идеальный игровой ПК',
                ],
            ];
            ?>
            <div class="grid-box new__box">
                <?php foreach($news as $item): ?>
                <?php include 'template-parts/components/news-item.php'; ?>
                <?php endforeach; ?>
            </div>

            <a href="javascript:void(0);" class="btn-def new__btn new__btn--mob">
                <span>Перейти в блог</span>
                <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-menu"></use></svg>
            </a>
        </div>
    </div>
</section>