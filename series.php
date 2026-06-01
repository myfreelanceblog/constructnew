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
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a href="javascript:void(0);" itemprop="item">
                    <span itemprop="name">Игровые компьютеры</span>
                    <meta itemprop="position" content="3">
                </a>
            </li>
            <li class="breadcrumb__single">Elementary</li>
        </ul>
    </div>
</div>

<section class="category-inner-section">
    <div class="container">
        <div class="category-inner pad-medium" data-container>
            <div class="category-top category-top--price linear linear--border">
                <div class="category-top__price">
                    <div class="trapeze trapeze-reverse">
                        <div class="trapeze__text uppercase">От 60 000 ₽</div>
                    </div>
                </div>
                <h1 class="title-rec title-rec--lg h1 uppercase">Elementary</h1>
                <div class="category-top__icon">
                    <img src="assets/img/content/best.png" alt="Рабочие СТАНЦИИ" loading="lazy">
                </div>
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