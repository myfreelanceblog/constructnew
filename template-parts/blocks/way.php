<section class="way-section linear">
    <div class="container">
        <div class="way pad">
            <h2 class="h1 title-color">Доступные способы <span>оплаты</span></h2>

            <?php
            $payment_methods = [
                [
                    'title' => 'Наличными в офисе',
                    'text'  => 'Вы можете оплатить заказ в нашем офисе по адресу г. Екатеринбург ул. Щербакова 4А.',
                ],
                [
                    'title' => 'Банковской картой',
                    'text'  => 'Онлайн оплата заказа проходит через платёжную систему с использованием дебетовых и кредитных карт следующих платёжных систем: МИР, VISA, Mastercard, JCB.',
                ],
                [
                    'title' => 'СБП',
                    'text'  => 'Оплатите заказ через СБП по QR-коду. Это быстро, удобно и не требует наличия банковской карты. Всё, что нужно — мобильное приложение вашего банка.',
                ],
                [
                    'title' => 'Банковский перевод',
                    'text'  => 'После оформления заказа мы вышлем Вам счёт для оплаты. Вы можете оплатить его в любом банке.',
                ],
                [
                    'title' => 'Кредит / рассрочка',
                    'text'  => 'Мы сотрудничаем с ведущими банками, чтобы предложить Вам выгодные условия кредита или рассрочки. Напишите нам в личные сообщения и специалист свяжется с вами для оформления.',
                ],
                [
                    'title' => 'Оплата по счёту',
                    'text'  => 'Для юридических лиц и индивидуальных предпринимателей доступна оплата по счёту. После согласования заказа мы выставим счёт, который можно оплатить удобным для вас способом.',
                ],
            ];
            ?>
            <div class="way__slider">
                <div class="way__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($payment_methods as $pay): ?>
                        <div class="swiper-slide">
                            <div class="way-item">
                                <div class="trapeze trapeze-reverse way-item__title">
                                    <div class="trapeze__text"><?= $pay['title'] ?></div>
                                </div>
                                <div class="way-item__desc"><?= $pay['text'] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="pagination-ui pagination-ui--white way__pagination"></div>
            </div>
        </div>
    </div>
</section>