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
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a href="javascript:void(0);" itemprop="item">
                    <span itemprop="name">Каталог</span>
                    <meta itemprop="position" content="2">
                </a>
            </li>
            <li class="breadcrumb__single">Игровые компьютеры</li>
        </ul>
    </div>
</div>

<section class="category-inner-section">
    <div class="container">
        <div class="category-inner pad-medium" data-container>
            <div class="category-top linear linear--border">
                <h1 class="category-top__title h1">Игровые компьютеры</h1>
                <div class="category-top__icon">
                    <img src="assets/img/content/best.png" alt="Рабочие СТАНЦИИ" loading="lazy">
                </div>
            </div>
            <div class="category-inner__box grid-cat grid-cat--more-mob">
                <?php
                $items = [
                    [
                        'price' => 'от 60 000 ₽',
                        'image' => 'assets/img/content/best.png',
                        'title' => 'elementary',
                        'text' => 'Игровые ПК для игр до 120 000 рублей. Максимальная производительность за минимальную стоимость.',
                    ],
                    [
                        'price' => 'от 130 000 ₽',
                        'image' => 'assets/img/content/best.png',
                        'title' => 'advanced',
                        'text' => 'Сочетание высокой производительности и яркого дизайна. Идеальные сборки для игры в 2K разрешении.',
                    ],
                    [
                        'price' => 'от 230 000 ₽',
                        'image' => 'assets/img/content/best.png',
                        'title' => 'extreme',
                        'text' => 'Сверхмощные ПК для 4К гейминга на ультра настройках и быстрой работы в любых приложениях.',
                    ],
                    [
                        'price' => 'от 800 000 ₽',
                        'image' => 'assets/img/content/best.png',
                        'title' => 'experience',
                        'text' => 'Мощнейшие ПК с эксклюзивным внешним видом, созданные вручную.',
                    ],
                    [
                        'price' => 'от 800 000 ₽',
                        'image' => 'assets/img/content/best.png',
                        'title' => 'compact',
                        'text' => 'Мощнейшие ПК с эксклюзивным внешним видом, созданные вручную.',
                    ],
                ];
                ?>
                <?php foreach ($items as $i => $item): ?>
                <div class="category-inner-item linear linear--border<?= ($i > 2) ? ' hidden' : '' ?>">
                    <div class="category-inner-item__price">
                        <div class="trapeze trapeze-reverse">
                            <div class="trapeze__text uppercase"><?= $item['price']; ?></div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="category-inner-item__img img-absolute"><img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>" loading="lazy"></a>
                    <div class="category-inner-item__content">
                        <a href="javascript:void(0);" class="h2 category-inner-item__title uppercase title-rec"><?= $item['title']; ?></a>
                        <div class="category-inner-item__desc text-gray"><?= $item['text']; ?></div>
                    </div>
                        
                    <a href="javascript:void(0);" class="category-inner-item__btn border-side btn-secondary">
                        <div class="btn-secondary__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-menu"></use></svg></div>
                        <div class="btn-secondary__title">Перейти в раздел</div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="line-btn category-inner__more">
                <button type="button" class="btn-def more-btn" data-count="99" data-items=".category-inner-item" data-more>
                    <span>Показать еще</span>
                </button>
            </div>
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