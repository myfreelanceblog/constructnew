<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta content="True" name="HandheldFriendly">
	<meta content="width=device-width, initial-scale=1" name="viewport">

	<title>ConstructPC</title>

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicon/favicon-48.png">
    <link rel="icon" type="image/png" sizes="120x120" href="assets/img/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/favicon-apple.png">
    <link rel="icon" type="image/svg+xml" href="assets/img/favicon/favicon.svg">

    <link rel="preload" href="assets/fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/Manrope-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

	<link rel="stylesheet" href="assets/css/fonts.css<?php echo $dev; ?>" />
	<link rel="stylesheet" href="assets/css/base.css<?php echo $dev; ?>" />
	<link rel="stylesheet" href="assets/css/ui.css<?php echo $dev; ?>" />
	<link rel="stylesheet" href="assets/css/header.css<?php echo $dev; ?>" />
	<link rel="stylesheet" href="assets/css/hero.css<?php echo $dev; ?>" />
	<link rel="stylesheet" href="assets/css/best.css<?php echo $dev; ?>" />
	<link rel="stylesheet" href="assets/css/hit.css<?php echo $dev; ?>" />

    <!-- подключать только на определенных страницах блог, полезное и т.п. компонент -->
	<link rel="stylesheet" href="assets/css/components/card-item.css<?php echo $dev; ?>" />

	<link rel="stylesheet" href="assets/css/why.css<?php echo $dev; ?>" />
	<link rel="stylesheet" href="assets/css/how.css<?php echo $dev; ?>" />
    
	<link rel="stylesheet" href="assets/css/new.css<?php echo $dev; ?>" />

    <!-- подключать только на определенных страницах блог, полезное и т.п. компонент -->
	<link rel="stylesheet" href="assets/css/components/news-item.css<?php echo $dev; ?>" />
    <link rel="stylesheet" href="assets/css/install.css<?php echo $dev; ?>" />

	<link rel="stylesheet" href="assets/css/footer.css<?php echo $dev; ?>" />
	
</head>
<body>

    <header class="header">
        <div class="header-top-wrap">
            <div class="container">
                <div class="header-top">
                    <div class="header__adress">г. Екатеринбург, ул. Шефская, 4 А</div>
                    <a href="tel:+79120488998" class="header__phone">+7-912-048-89-98</a>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap">
            <div class="container">
                <div class="header-bottom">
                    <a href="javascript:void(0);" class="header__logo">
                        <img src="assets/img/logo.svg" alt="logo" width="202" height="32">
                    </a>
                    <nav class="header__nav">
                        <ul class="header__menu">
                            <li class="menu-item menu-item-has-children">
                                <a href="javascript:void(0);">Каталог</a>
                                <div class="dropdown-menu">
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="javascript:void(0);">
                                                <span>Все модели компьютеров</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="javascript:void(0);">
                                                <span>Игровые компьютеры</span>
                                                <div class="menu-item__mob-icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></div>
                                            </a>
                                            <?php
                                            $sub = array(
                                                'Elementary',
                                                'Advanced',
                                                'Extreme',
                                                'Experience',
                                                'Compact',
                                            );
                                            ?>
                                            <ul class="sub-menu">
                                                <?php foreach($sub as $item): ?>
                                                <li class="menu-item">
                                                    <a href="javascript:void(0);">
                                                        <span><?= $item; ?></span>
                                                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-menu"></use></svg>
                                                    </a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="javascript:void(0);">
                                                <span>Рабочие станции</span>
                                            </a>
                                        </li>
                                        <li class="menu-item"><a href="javascript:void(0);">Конфигуратор</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);">Доставка и оплата</a>
                            </li>
                            <li class="menu-item"><a href="javascript:void(0);">Гарантия</a></li>
                            <li class="menu-item"><a href="javascript:void(0);">Блог</a></li>
                        </ul>
                    </nav>
                    <div class="header-bottom__right">
                        <a href="javascript:void(0);" class="header-cart border-side">
                            <div class="header-cart__count">
                                <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#cart"></use></svg>
                                <span class="count-cart-mini">1</span>
                            </div>
                            <div class="header-cart__title">Корзина</div>
                        </a>
                        <button class="mob-m pointer" type="button" aria-label="Menu">
                            <div class="mob-m__content">
                                <svg width="30" height="30"><use href="assets/img/sprite.svg<?php echo $dev; ?>#menu"></use></svg>
                                <svg width="23" height="23"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                            </div>
                            <span class="pointer__top"></span>
                            <span class="pointer__bottom"></span>
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="header-backdrop"></div>
    </header>

    <main>