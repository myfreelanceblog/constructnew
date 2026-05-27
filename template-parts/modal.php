<div class="modal modal-order">
	<div class="overlay"></div>
	<div class="modal__wrapper wide">
		<div class="modal__box">
            <button type="button" class="modal__close">
                <div class="trapeze trapeze-reverse way-item__title">
                    <div class="trapeze__text">
                        <span>Закрыть</span>
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                    </div>
                </div>
            </button>
			<div class="modal__top accent-line">
                <div class="accent-line__title h3 modal__title uppercase">Не нашли <br>подходящий ПК?</div>
                <div class="accent-line__desc">Напишите нам в мессенджерах или отправьте заявку, чтобы мы могли перезвонить!</div>
            </div>

            <div class="modal__line"><span></span></div>

            <div class="modal__row">
                <div class="h4">Где вам удобнее получить ответ?</div>
                <?php
                $connection = [
                    [
                        'icon' => 'phone',
                        'title' => 'Телефон',
                    ],
                    [
                        'icon' => 'tg',
                        'title' => 'Telegram',
                    ],
                    [
                        'icon' => 'vk',
                        'title' => 'Вконтакте',
                    ],
                ];
                ?>
                <div class="modal-radio">
                    <?php foreach($connection as $k => $connect): ?>
                    <label class="modal-radio__item">
                        <input type="radio" name="connection" value="<?= $connect['title'] ?>"<?php if($k == 0){echo ' checked';} ?>>
                        <div class="modal-radio__content">
                            <div class="modal-radio__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#<?= $connect['icon'] ?>"></use></svg></div>
                            <div class="modal-radio__title"><?= $connect['title'] ?></div>
                        </div>
                    </label>
                    <?php endforeach; ?>
                </div>

                <div class="modal__inputs">
                    <div class="form-input">
                        <input type="text" placeholder="Как к вам обращаться">
                    </div>
                    <div class="form-input">
                        <input type="tel" placeholder="+7">
                    </div>
                    <div class="form-input">
                        <textarea placeholder="Ваш комментарий"></textarea>
                    </div>
                    <div class="agree">
                        <div class="agree__input"><input type="checkbox" name="checkbox-agree[]" value="yes"></div>
                        <label class="agree__label">Согласен на <a href="https://constructpc.ru/documents/privacy-policy/">обработку персональных данных</a></label>
                    </div>
                </div>
            </div>

            <div class="modal__line"><span></span></div>

            <button type="button" class="btn modal__btn pointer">
                <div class="pointer__top"></div>
                <div class="pointer__bottom"></div>
                <div class="btn__content">
                    <span>Получить консультацию</span>
                </div>
            </button>
		</div>
	</div>
</div>