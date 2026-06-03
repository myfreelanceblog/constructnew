<section class="differences-section gray">
    <div class="container">
        <div class="differences pad">
            <h2 class="title-side title-color h1">Что нас <span>отличает</span></h2>
            <?php
            $differences = [
                [
                    'title' => 'Фирменная<br>гарантия от 2 лет',
                    'text'  => 'На всю сборку с заменой<br>любой детали на новую',
                ],
                [
                    'title' => 'Официальные<br>поставщики',
                    'text'  => 'Только новые комплектующие<br>с официальной гарантией',
                ],
                [
                    'title' => 'Техническая<br>поддержка',
                    'text'  => 'Обращайтесь по любому<br>вопросу, даже самому<br>глупому',
                ],
            ];
            ?>
            <div class="differences__box">
                <div class="differences-item img-absolute differences-item--img">
                    <img src="assets/img/content/differences.webp" alt="differences" loading="lazy">
                </div>
                <?php foreach($differences as $d): ?>
                <div class="differences-item">
                    <div class="accent-line">
                        <div class="accent-line__title h3 uppercase"><?= $d['title'] ?></div>
                        <div class="accent-line__desc"><?= $d['text'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>