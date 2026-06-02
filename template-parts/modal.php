<div class="modal modal-config">
	<div class="overlay"></div>
	<div class="config">
        <div class="config-mob-navigation">
            <button type="button" class="btn-back config-back">
                <div class="trapeze trapeze-reverse">
                    <div class="trapeze__text uppercase">
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-back"></use></svg>
                        <span>Назад</span>
                    </div>
                </div>
            </button>
            <button type="button" class="modal__close close-modal">
                <div class="trapeze trapeze-reverse">
                    <div class="trapeze__text uppercase">
                        <span>Закрыть</span>
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                    </div>
                </div>
            </button>
        </div>
		<div class="config-top">
            <div class="config-item config-item--slider">
                <div class="category-item__content accent-line category-item__content--mob">
                    <div class="accent-line__title h3 uppercase">Текущий список комплектующих</div>
                    <div class="accent-line__desc">Если хотите изменить что-то в сборке - выберите необходимую категорию.</div>
                </div>
                <div class="config-slider-wrap">
                    <div class="config-slider">
                        <div class="config__swiper swiper">
                            <div class="swiper-wrapper">
                                <?php for($i = 0; $i < 2; $i++): ?>
                                <div class="swiper-slide">
                                    <a href="assets/img/content/card<?= $i+1 ?>.webp" class="config-slider__item" data-fancybox="config">
                                        <img src="assets/img/content/card<?= $i+1 ?>.webp" alt="pc" loading="lazy">
                                    </a>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="nav config__nav">
                        <button class="nav__item nav__prev config__prev disabled" type="button" aria-label="предыдущий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                        <button class="nav__item nav__next config__next" type="button" aria-label="следующий слайд"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                    </div>

                    <button type="button" class="zoom config__zoom" aria-label="увеличить">
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#zoom"></use></svg>
                    </button>

                    <div class="config-numb">
                        <div class="trapeze">
                            <div class="trapeze__text">
                                <span class="config-numb__start">01</span>
                                <span>/</span>
                                <span class="config-numb__end">04</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="config-item config-item--cat">
                <div class="config-item__top">
                    <div class="trapeze trapeze-reverse">
                        <div class="trapeze__text">Выбранные Комплектующие</div>
                    </div>
                </div>

                <div class="category-item__content accent-line">
                    <div class="accent-line__title h3 uppercase">Текущий список комплектующих</div>
                    <div class="accent-line__desc">Если хотите изменить что-то в сборке - выберите необходимую категорию.</div>
                </div>

                <div class="modal-line"><span></span></div>
                
                <?php
                $config = config();
                $i = 0;
                ?>
                <div class="config-nav">
                    <?php foreach($config as $k => $item): $i++; ?>
                    <button type="button" class="config-nav__item" data-id="config-<?= $k ?>">
                        <div class="config-nav__icon"><img src="assets/img/content/c<?= $i ?>.svg" alt="<?= $k ?>" loading="lazy"></div>
                        <div class="config-nav__content">
                            <div class="config-nav__title h4"><?= $item['title'] ?></div>
                            <div class="config-nav__desc"><?= $item['selected'] ?></div>
                        </div>
                        <div class="config-nav__arr"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></div>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="config-item config-item--components">
                <div class="config-item__top">
                    <div class="trapeze trapeze-reverse">
                        <div class="trapeze__text">Доступно</div>
                    </div>
                </div>

                <div class="category-item__content accent-line">
                    <div class="accent-line__title h3 uppercase">Доступный список комплектующих</div>
                    <div class="accent-line__desc">Выберите категорию и увидите доступный список комплектующих для конфигурации</div>
                </div>

                <div class="modal-line"><span></span></div>
                
                <?php
                $count_config = 0;
                ?>
                <div class="config-tab">
                    <?php foreach($config as $k => $item): $count_config++; ?>
                    <div class="config-tab__item" id="config-<?= $k ?>">
                        <div class="config-tab__content">
                            <?php
                            $category = [
                                'Все',
                                'Powercase',
                                'Deepcool',
                                'MSI',
                                'Ardor',
                                'Asus',
                                'Gigabyte',
                            ];
                            ?>
                            <div class="config-category">
                                <div class="config-category__swiper swiper">
                                    <div class="swiper-wrapper">
                                        <?php foreach($category as $c => $cat): ?>
                                        <div class="swiper-slide">
                                            <div class="config-category__item<?php if($c == 0){echo ' active';} ?>" data-cat="<?= $cat ?>"><?= $cat ?></div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <button class="config-category__prev config-category__btn" type="button" aria-label="следующий производитель"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                                <button class="config-category__next config-category__btn" type="button" aria-label="следующий производитель"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#arr-down"></use></svg></button>
                            </div>
                            
                            <?php if($count_config == 1): ?>
                            <div class="config-custom">
                                <div class="check">
                                    <div class="check__input"><input type="checkbox" name="custom" value="yes"></div>
                                    <label class="check__label"><div class="check__title">Нужна кастомизация</div></label>
                                </div>
                                <div class="config-custom__price">+ 5 000 ₽</div>
                            </div>
                            <?php endif; ?>

                            <div class="config-choice">
                                <?php foreach($item['items'] as $k_item => $choice): $key = $k_item + 1; if(!isset($category[$key])){$key = 1;} ?>
                                <label class="config-choice__item<?php if($k_item == 0){echo ' active';} ?>" data-cat="<?= $category[$key] ?>">
                                    <input type="radio" name="" value="" data-price="" data-category="" data-item-id="">
                                    <div class="config-choice__top">
                                        <div class="config-choice__img img-absolute">
                                            <img src="assets/img/content/card1.webp" alt="choice" loading="lazy">
                                        </div>
                                        <div class="config-choice__title"><?= $choice['title'] ?></div>
                                    </div>
                                    <div class="config-choice__price">
                                        <span>+ <?= $choice['price'] ?> ₽</span>
                                        <span>Выбрано</span>
                                    </div>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="config-bottom">
            <div class="config-bottom__label">
                <div class="trapeze trapeze-reverse">
                    <div class="trapeze__text uppercase">Итого</div>
                </div>
            </div>
            <button type="button" class="modal__close close-modal">
                <div class="trapeze trapeze-reverse">
                    <div class="trapeze__text uppercase">
                        <span>Закрыть и выйти</span>
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                    </div>
                </div>
            </button>
            <div class="config-result">
                <div class="h2 title-rec uppercase">Конфигуратор</div>
                <div class="config-price">
                    <div class="config-price__label">Итоговая стоимость</div>
                    <div class="config-price__value h2"><span id="config-price">205 900</span> ₽</div>
                </div>
            </div>
            <button type="button" class="btn config-bottom__btn pointer">
                <div class="pointer__top"></div>
                <div class="pointer__bottom"></div>
                <div class="btn__content">
                    <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#cart"></use></svg>
                    <span>В корзину</span>
                </div>
            </button>
        </div>
	</div>
</div>

<div class="modal modal-quiz">
	<div class="overlay"></div>
	<div class="modal__wrapper">
		<form class="modal__box">
            <button type="button" class="modal__close close-modal">
                <div class="trapeze trapeze-reverse">
                    <div class="trapeze__text uppercase">
                        <span>Закрыть</span>
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                    </div>
                </div>
            </button>
			<div class="modal__top accent-line">
                <div class="accent-line__title h3 modal__title uppercase">Подберём игровой ПК под ваши задачи и бюджет</div>
                <div class="accent-line__desc">Ответим на вопросы, сравним конфигурации и подскажем, за счёт чего повысить баланс.</div>
            </div>

            <div class="modal-line"><span></span></div>

            <div class="quiz-quest">
                <div class="h4">Для каких задач нужен ПК?</div>
                <?php
                $quest = [
                    'Игры',
                    'Работа + игры',
                    'Стриминг + монтаж',
                    'Не знаю, нужна помощь',
                ];
                ?>
                <div class="quiz-quest__row">
                    <?php foreach($quest as $k => $item): ?>
                    <div class="check<?php if($k > 1){echo ' quiz-quest__wide';} ?><?php if($k == 0){echo ' active';} ?>">
                        <div class="check__input"><input type="radio" name="tasks" value="<?= $item ?>"<?php if($k == 0){echo ' checked';} ?>></div>
                        <label class="check__label"><span class="check__title"><?= $item ?></span></label>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="form-input">
                    <textarea name="comment_tasks" placeholder="Ваш комментарий"></textarea>
                </div>
            </div>
            
            <div class="modal-line"><span></span></div>

            <div class="quiz-quest">
                <div class="h4">Выберите разрешение экрана</div>
                <?php
                $quest = [
                    'Full hd',
                    '2k',
                    '4k',
                    'Не знаю, нужна помощь',
                ];
                ?>
                <div class="quiz-quest__row quiz-quest__row--secondary">
                    <?php foreach($quest as $k => $item): ?>
                    <div class="check<?php if($k > 2){echo ' quiz-quest__wide';} ?><?php if($k == 0){echo ' active';} ?>">
                        <div class="check__input"><input type="radio" name="resolution" value="<?= $item ?>"<?php if($k == 0){echo ' checked';} ?>></div>
                        <label class="check__label"><span class="check__title"><?= $item ?></span></label>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="modal-line"><span></span></div>

            <div class="quiz-quest">
                <div class="h4">Ваш примерный бюджет?</div>
                <div class="select">
                    <select class="custom-select-original">
                        <option value="до 100 000 ₽" selected>до 100 000 ₽</option>
                        <option value="100 000 - 150 000 ₽">100 000 - 150 000 ₽</option>
                        <option value="от 150 000 ₽">от 150 000 ₽</option>
                    </select>
                </div>
            </div>

            <div class="modal-line"><span></span></div>

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
                        <input type="radio" name="connection" value="<?= $connect['title'] ?>" data-id="<?= ($connect['icon']=='phone') ? $connect['icon'] : 'text' ?>"<?php if($k == 0){echo ' checked';} ?>>
                        <div class="modal-radio__content">
                            <div class="modal-radio__icon"><svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#<?= $connect['icon'] ?>"></use></svg></div>
                            <div class="modal-radio__title"><?= $connect['title'] ?></div>
                        </div>
                    </label>
                    <?php endforeach; ?>
                </div>

                <div class="modal__inputs">
                    <div class="form-input">
                        <div class="connection-fields">
                            <div class="connection-fields__item active" data-id="phone"><input type="tel" placeholder="+7"></div>
                            <div class="connection-fields__item" data-id="text"><input type="text" placeholder="Укажите ссылку или никнейм"></div>
                        </div>
                    </div>
                    <div class="check agree">
                        <div class="check__input"><input type="checkbox" name="checkbox-agree[]" value="yes"></div>
                        <label class="check__label"><div class="check__title">Согласен на <a href="https://constructpc.ru/documents/privacy-policy/">обработку персональных данных</a></div></label>
                    </div>
                </div>
            </div>

            <div class="modal-line"><span></span></div>

            <button type="button" class="btn modal__btn pointer" data-modal="thanks">
                <div class="pointer__top"></div>
                <div class="pointer__bottom"></div>
                <div class="btn__content">
                    <span>Получить консультацию</span>
                </div>
            </button>
		</form>
	</div>
</div>

<div class="modal modal-order">
	<div class="overlay"></div>
	<div class="modal__wrapper">
		<form class="modal__box">
            <button type="button" class="modal__close close-modal">
                <div class="trapeze trapeze-reverse">
                    <div class="trapeze__text uppercase">
                        <span>Закрыть</span>
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                    </div>
                </div>
            </button>
			<div class="modal__top accent-line">
                <div class="accent-line__title h3 modal__title uppercase">Не нашли <br>подходящий ПК?</div>
                <div class="accent-line__desc">Напишите нам в мессенджерах или отправьте заявку, чтобы мы могли перезвонить!</div>
            </div>

            <div class="modal-line"><span></span></div>

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
                        <input type="radio" name="connection" value="<?= $connect['title'] ?>" data-id="<?= ($connect['icon']=='phone') ? $connect['icon'] : 'text' ?>"<?php if($k == 0){echo ' checked';} ?>>
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
                        <div class="connection-fields">
                            <div class="connection-fields__item active" data-id="phone"><input type="tel" placeholder="+7"></div>
                            <div class="connection-fields__item" data-id="text"><input type="text" placeholder="Укажите ссылку или никнейм"></div>
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea placeholder="Ваш комментарий"></textarea>
                    </div>
                    <div class="check agree">
                        <div class="check__input"><input type="checkbox" name="checkbox-agree[]" value="yes"></div>
                        <label class="check__label"><div class="check__title">Согласен на <a href="https://constructpc.ru/documents/privacy-policy/">обработку персональных данных</a></div></label>
                    </div>
                </div>
            </div>

            <div class="modal-line"><span></span></div>

            <button type="button" class="btn modal__btn pointer" data-modal="thanks">
                <div class="pointer__top"></div>
                <div class="pointer__bottom"></div>
                <div class="btn__content">
                    <span>Получить консультацию</span>
                </div>
            </button>
		</form>
	</div>
</div>

<div class="modal modal-thanks">
	<div class="overlay"></div>
	<div class="modal__wrapper">
		<div class="modal__box" data-container>
            <button type="button" class="modal__close close-modal">
                <div class="trapeze trapeze-reverse">
                    <div class="trapeze__text uppercase">
                        <span>Закрыть</span>
                        <svg width="24" height="24"><use href="assets/img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                    </div>
                </div>
            </button>
			<div class="modal__top accent-line">
                <div class="accent-line__title h3 modal__title uppercase">Ваша заявка <br>успешно отправлена</div>
                <div class="accent-line__desc">Мы получили вашу заявку на сборку или покупку компьютера и уже начали её обработку. В ближайшее время с вами свяжется наш менеджер.</div>
            </div>

            <div class="modal-line"><span></span></div>

            <div class="modal__text text-ui">
                <div class="h5 uppercase">Ориентировочный срок ответа:</div>
                <ul class="text-gray">
                    <li>от 20минут до 1 часа в рабочее время</li>
                    <li>Ежедневно, с 9:00 до 18:00 (МСК)</li>
                    <li>По вопросам звоните: +7-912-048-89-98</li>
                </ul>
            </div>

            <div class="modal-line"><span></span></div>

            <button type="button" class="btn modal__btn pointer close-modal">
                <div class="pointer__top"></div>
                <div class="pointer__bottom"></div>
                <div class="btn__content">
                    <span>Закрыть</span>
                </div>
            </button>
		</div>
	</div>
</div>