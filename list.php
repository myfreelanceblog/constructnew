<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <title>Верстка</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #fff;
            color: black;
            font-size: 16px;
            line-height: normal;
            font-weight: 400;
        }
        ul{
            margin: 0;
            list-style: none;
            padding: 0;
        }
        h1,h2,h3{
            margin: 0;
            display: block;
            padding: 0;
        }
        p{
            margin: 0;
        }
        article, aside, footer, header, hgroup, main, nav, section {
            display: block;
        }
        section{
            display: block;
        }
        *,
        *:before,
        *:after{
            box-sizing: border-box;
        }
        svg,
        img{
            display: block;
            max-width: 100%;
            height: auto;
        }
        a{
            color: inherit;
            text-underline-offset: 3px;
            text-decoration: underline;
            transition: all 0.3s ease-in-out;
        }
        a:hover{
            text-decoration-color: transparent;
        }
        .list{
            padding: 20px 20px 40px;
        }
        .list ul{
            padding: 20px 0 0;
        }
        .list ul ul{
            padding: 5px 0 5px 20px;
        }
        ul a{
            display: block;
            padding: 10px 0;
            color: #303030;
            font-size: 16px;
        }
        .logo{
            padding: 0 0 20px;
        }
        .desc{
            padding: 20px 0 0;
            line-height: 150%;
        }
    </style>
</head>
<body>
    <div class="list">
        <div class="logo">
            <img src="assets/img/logo.svg" alt="Construct_PC">
        </div>
        <h1>Construct_PC вёрстка:</h1>
        <div class="desc">Изображения и текст на страницах могут повторяться, используются на момент верстки для ускорения процесса и предотвращения дублирования кол-ва изображений. После интеграции на WordPress это всё будет доступно для редактирования через админку.</div>
        <ul>
            <li><a href="index.php" target="_blank">Главная</a></li>
            <li><a href="catalog.php" target="_blank">Каталог</a></li>
            <li><a href="category.php" target="_blank">Категория</a></li>
            <li><a href="series.php" target="_blank">Серия</a></li>
            <li><a href="product.php" target="_blank">Страница товара</a></li>
            <li><a href="cart.php" target="_blank">Корзина</a></li>
        </ul>
    </div>
    
</body>
</html>