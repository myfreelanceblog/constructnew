<?php include 'header.php'; ?>

<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a href="javascript:void(0);" itemprop="item">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="1">
                </a>
            </li>
            <li class="breadcrumb__single">Каталог</li>
        </ul>
    </div>
</div>

<section class="category-section">
    <div class="container">
        <div class="category pad-medium">
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
            ];
            ?>
            <?php foreach ($best as $item): ?>
            <div class="category-item linear linear--border">
                <div class="category-item__img"><img src="<?= $item['img']; ?>" alt="<?= $item['ttl']; ?>" loading="lazy"></div>
                <div class="category-item__content accent-line">
                    <div class="accent-line__title h2 uppercase"><?= $item['ttl']; ?></div>
                    <div class="accent-line__desc"><?= $item['desc']; ?></div>
                </div>
                    
                <?php if($item['type'] == 'btn'): ?>
                <button class="category-item__btn border-side btn-secondary" type="button" aria-label="<?= $item['btn']; ?>" data-modal="config">
                <?php else: ?>
                <a href="javascript:void(0);" class="category-item__btn border-side btn-secondary">
                <?php endif; ?>
                    <div class="btn-secondary__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#<?= $item['icon'] ?>"></use></svg></div>
                    <div class="btn-secondary__title"><?= $item['btn']; ?></div>
                <?php if($item['type'] != 'btn'): ?>
                </a>
                <?php else: ?>
                </button>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="all-section">
    <div class="container">
        <div class="all pad-top" data-container>
            <h1 class="title-side h1">Все компьютеры</h1>

            <?php
            $hit = [
                [
                    'gal' => ['card1.webp', 'card2.webp', 'card3.webp', 'card2.webp', 'card3.webp',],
                    'color' => ['black'],
                    'title' => 'FLOW MISTRAL',
                    'price' => 'от 110 900 ₽',
                ],
                [
                    'gal' => ['card2.webp', 'card1.webp', 'card3.webp',],
                    'color' => ['black', 'orange', 'white',],
                    'title' => 'EXTRA MODEL 5',
                    'price' => 'от 234 700 ₽',
                ],
                [
                    'gal' => ['card3.webp', 'card1.webp',],
                    'color' => ['black', 'white',],
                    'title' => 'APEX ULTRA',
                    'price' => 'от 484 900 ₽',
                ],
                [
                    'gal' => ['card1.webp', 'card2.webp', 'card3.webp',],
                    'color' => ['black', 'orange', 'white',],
                    'title' => 'FLOW MISTRAL',
                    'price' => 'от 110 900 ₽',
                ],
                [
                    'gal' => ['card3.webp', 'card1.webp',],
                    'color' => ['black', 'white',],
                    'title' => 'APEX ULTRA',
                    'price' => 'от 484 900 ₽',
                ],
                [
                    'gal' => ['card1.webp', 'card2.webp', 'card3.webp',],
                    'color' => ['black', 'orange', 'white',],
                    'title' => 'FLOW MISTRAL',
                    'price' => 'от 110 900 ₽',
                ],
            ];
            ?>
            <div class="grid-cat grid-cat--more-mob pad-medium-top">
                <?php foreach($hit as $i => $item): ?>
                    <?php include 'template-parts/components/card-item.php'; ?>
                <?php endforeach; ?>
            </div>
            <div class="line-btn category__more">
                <button type="button" class="btn-def more-btn" data-count="99" data-items=".card-item" data-more>
                    <span>Показать еще</span>
                </button>
            </div>
        </div>
    </div>
</section>

<?php include 'template-parts/blocks/cta.php'; ?>
<?php include 'template-parts/blocks/way.php'; ?>
    
<?php include 'footer.php'; ?>