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
            <li class="breadcrumb__single">Блог</li>
        </ul>
    </div>
</div>

<section class="blog-section">
    <div class="container">
        <div class="blog pad pad-medium-top">
            <h1 class="h1 title-side">Блог</h1>

            <?php
            $nav = ['Все', 'Сборка', 'Геймерам', 'Розыгрыш'];
            ?>
            <div class="blog-nav-wrap">
                <div class="blog__nav scrollbar-ui">
                    <?php foreach($nav as $k => $item): ?>
                    <a href="javascript:void(0);"<?php if($k == 0){echo ' class="active"';} ?>><?= $item ?></a>
                    <?php endforeach; ?>
                </div>
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
                [
                    'img' => 'n1.webp',
                    'cat' => 'Розыгрыш',
                    'title' => 'Розыгрыш ПК от «Мира кораблей» и CONSTRUCT PC',
                ],
            ];
            ?>
            <div class="grid-box">
                <?php foreach($news as $item): ?>
                <?php include 'template-parts/components/news-item.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div class="line-btn">
        <button type="button" class="btn-def blog-more">
            <span>Показать еще</span>
        </button>
    </div>
</section>

<?php include 'template-parts/blocks/simple.php'; ?>
    
<?php include 'footer.php'; ?>