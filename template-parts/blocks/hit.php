<section class="hit-section">
    <div class="container">
        <div class="hit pad">
            <div class="top">
                <h2 class="h1 top__title">Хиты продаж</h2>
                <div class="nav top__nav nav--gray">
                    <button class="nav__item nav__prev hit__prev" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                    <button class="nav__item nav__next hit__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                </div>
            </div>
            
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
            ];
            ?>
            <div class="hit-slider">
                <div class="hit__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($hit as $item): ?>
                        <div class="swiper-slide">
                            <?php include 'template-parts/components/card-item.php'; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>