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
            <li class="breadcrumb__single">Доставка и оплата</li>
        </ul>
    </div>
</div>

<?php include 'template-parts/blocks/delivery.php'; ?>
<?php include 'template-parts/blocks/package.php'; ?>
<?php include 'template-parts/blocks/pay.php'; ?>

<?php include 'template-parts/blocks/way.php'; ?>
<?php include 'template-parts/blocks/faq.php'; ?>
<?php include 'template-parts/blocks/cta.php'; ?>

    
<?php include 'footer.php'; ?>