<section class="partners-section">
    <div class="container">
        <div class="partners pad">
            <h2 class="partners__title h1">Наши партнеры</h2>

            <div class="partners__slider">
                <div class="partners__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php for($i = 0; $i < 8; $i++): ?>
                        <div class="swiper-slide">
                            <div class="partners-item">
                                <div class="partners-item__ui">
                                    <div class="partners-item__pointer partners-item__pointer--top"></div>
                                    <div class="partners-item__pointer partners-item__pointer--bottom"></div>
                                    <div class="partners-item__side"></div>
                                </div>
                                
                                <div class="partners-item__content">
                                    <img src="assets/img/content/p<?= $i + 1 ?>.png" alt="partners" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>