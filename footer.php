    </main>
    
    <footer>
        <div class="container">
            <div class="footer">
                <div class="footer-top">
                    <div class="footer-top__line"></div>
                </div>
                <?php
                $nav = array(
                    'Навигация по сайту' => [
                        'Главная',
                        'Каталог',
                        'Доставка и оплата',
                        'Блог',
                        'О компании',
                        'Этапы заказа',
                    ],
                    'Каталог' => [
                        'Игровые компьютеры',
                        'Рабочие станции',
                        'Конфигуратор ПК',
                    ],
                    'Правовая информация' => [
                        'Публичная оферта',
                        'Политика обработки персональных данных',
                        'Политика конфиденциальности',
                        'Пользовательское соглашение',
                    ],
                );
                ?>
                <div class="footer-menu">
                    <?php foreach($nav as $title => $items): ?>
                    <div class="footer-menu__item accent-line">
                        <a href="javascript:void(0);" class="footer-menu__title h5 accent-line__title"><?= $title ?></a>
                        <div class="accent-line__desc">
                            <ul class="footer-menu__list">
                                <?php foreach($items as $item): ?>
                                <li><a href="javascript:void(0);"><?= $item ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <div class="footer-menu__item accent-line">
                        <div class="footer-menu__title h5 accent-line__title">Контакты</div>
                        <div class="accent-line__desc">
                            <ul class="footer-contacts">
                                <div class="footer-contacts__item">
                                    <a href="tel:+7-912-048-89-98" class="footer-contacts__title">+7-912-048-89-98</a>
                                    <div class="footer-contacts__desc">Номер телефона</div>
                                </div>
                                <div class="footer-contacts__item">
                                    <a href="mailto:constructpc.ekb@gmail.com" class="footer-contacts__title">constructpc.ekb@gmail.com</a>
                                    <div class="footer-contacts__desc">Сотрудничество</div>
                                </div>
                                <div class="footer-contacts__item">
                                    <div class="footer-contacts__title">Ежедневно, с 9:00 до 18:00 (МСК)</div>
                                    <div class="footer-contacts__desc">Режим работы</div>
                                </div>
                                <div class="footer-contacts__item">
                                    <div class="footer-contacts__title">г. Екатеринбург, ул. Шефская, 4 «А»</div>
                                    <div class="footer-contacts__desc">Адрес, прием по предварительной записи</div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-line"></div>
                <div class="footer-bottom">
                    <a href="javascript:void(0);" class="footer__logo">
                        <img src="assets/img/logo.svg" alt="logo" width="202" height="32">
                    </a>
                    <div class="footer-bottom__copyright">CONSTRUCT PC © <?= date('Y') ?> Все права защищены</div>
                    <div class="footer-social">
                        <a href="javascript:void(0);" class="footer-social__item" target="_blank">
                            <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#youtube"></use></svg>
                        </a>
                        <a href="javascript:void(0);" class="footer-social__item" target="_blank">
                            <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#vk"></use></svg>
                        </a>
                        <a href="javascript:void(0);" class="footer-social__item" target="_blank">
                            <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#tiktok"></use></svg>
                        </a>
                        <a href="javascript:void(0);" class="footer-social__item" target="_blank">
                            <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#tg"></use></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <?php include 'template-parts/modal.php'; ?>

    <?php include 'template-parts/script.php'; ?>
	<script src="assets/js/libs/jquery.min.js"></script>
	<script src="assets/js/script.js<?php echo $dev; ?>"></script>
    
</body>
</html>