<div class="char-section <?= $char_color ?>">
    <div class="container">
        <div class="char pad">
            <div class="h1 title-side"><?= isset($char_title) ? $char_title : 'Характеристики и&nbsp;сервис' ?></div>
            <div class="char__box">
                <?php foreach($char as $item): ?>
                <div class="char-item<?php if($char_color != 'gray'){echo ' gray';} ?>">
                    <div class="char-item__title h4"><?= $item['title'] ?>:</div>
                    <div class="table">
                        <?php foreach($item['items'] as $row): ?>
                        <div class="table__item">
                            <div class="table__label"><?= $row['title'] ?></div>
                            <div class="table__value"><?= $row['value'] ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>