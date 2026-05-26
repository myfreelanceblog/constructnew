<section class="media-section">
    <div class="container">
        <div class="media pad">
            <div class="title-ui">
                <div class="title-ui__line"><span></span></div>
                <h2 class="h1 title-ui__text">Медиа</h2>
                <div class="title-ui__line"><span></span></div>
            </div>
            
            <?php
            $socials = [
                'youtube' => 'Youtube',
                'vk' => 'Вконтакте',
                'tiktok' => 'TikTok',
                'tg' => 'Telegram',
            ];
            ?>
            <div class="media__socials">
                <?php foreach($socials as $icon => $title): ?>
                <a href="javascript:void(0);" class="border-side btn-secondary rev-item__btn" target="_blank">
                    <div class="btn-secondary__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#<?= $icon ?>"></use></svg></div>
                    <div class="btn-secondary__title"><?= $title ?></div>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="media__slider">
                <div class="media__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php for($i = 0; $i <= 3; $i++): ?>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="media-item">
                                <div class="media-item__img img-absolute img-hover">
                                    <img src="assets/img/content/m<?= $i + 1 ?>.jpg" alt="media" loading="lazy">
                                </div>
                                <button class="btn pointer" type="button">
                                    <div class="pointer__top"></div>
                                    <div class="pointer__bottom"></div>
                                    <div class="btn__content">
                                        <span>Смотреть</span>
                                    </div>
                                </button>
                            </a>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="pagination-ui media__pagination"></div>
            </div>
        </div>
    </div>
</section>