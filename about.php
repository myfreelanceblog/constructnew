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
            <li class="breadcrumb__single">О компании</li>
        </ul>
    </div>
</div>

<?php include 'template-parts/blocks/about.php'; ?>

<?php include 'template-parts/blocks/personal.php'; ?>

<?php include 'template-parts/blocks/differences.php'; ?>

<?php include 'template-parts/blocks/numbers.php'; ?>

<?php include 'template-parts/blocks/contacts.php'; ?>

<?php
$char_color = '';
$char_title = 'Реквизиты';
$char = [
    [
        'title' => 'Реквизиты компании',
        'items' => [
            [
                'title' => 'ИП',
                'value' => 'Каменский Илья Юрьевич',
            ],
            [
                'title' => 'Юридический адрес',
                'value' => '620091, г. Екатеринбург, ул. Электриков 9, кв. 20',
            ],
            [
                'title' => 'Адрес осуществления деятельности',
                'value' => '620135, г. Екатеринбург, ул. Шефская, д. 4А',
            ],
            [
                'title' => 'ИНН',
                'value' => '667302152487',
            ],
            [
                'title' => 'ОГРНИП',
                'value' => '325665800049861',
            ],
        ],
    ],
    [
        'title' => 'Банковские реквизиты',
        'items' => [
            [
                'title' => 'Расчётный счёт',
                'value' => '40802810100007987867',
            ],
            [
                'title' => 'Корреспондентский счёт',
                'value' => '30101810145250000974',
            ],
            [
                'title' => 'БИК',
                'value' => '044525974',
            ],
        ],
    ],
];
?>
<?php include 'template-parts/blocks/char.php'; ?>

<?php include 'template-parts/blocks/cta.php'; ?>
    
<?php include 'footer.php'; ?>