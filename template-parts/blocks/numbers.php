<section class="numbers-section">
    <div class="container">
        <div class="numbers pad">
            <div class="numbers__top">
                <h2 class="h1">О нас в цифрах</h2>
                <div class="text-gray">Мы в деле уже много лет и за это время собрали тысячи компьютеров для самых разных задач. Научились понимать, что нужно клиенту, даже если он сам пока не до конца разобрался. Ваш ПК соберут мастера, которые знают все подводные камни и умеют их обойти, чтобы вы получили стабильную и быструю машину без лишних хлопот.</div>
            </div>

            <?php
            $numbers = [
                [
                    'img' => 'hero-info.webp',
                    'title' => '1000+ ',
                    'desc' => 'Довольных клиентов по всей России',
                ],
                [
                    'img' => 'numb2.webp',
                    'title' => '160+ ',
                    'desc' => 'Отзывов о нас на независимых платформах ',
                ],
                [
                    'img' => 'numb3.webp',
                    'title' => '1800+ ',
                    'desc' => 'Персональных сборок для клиентов и компаний',
                ],
            ];
            ?>
            <div class="numbers__box">
                <?php foreach($numbers as $n): ?>
                <div class="info">
                    <div class="info-pointer info-pointer--top"><span></span></div>
                    <div class="info-big">
                        <div class="info-big__img">
                            <img src="assets/img/content/<?= $n['img'] ?>" alt="info" loading="lazy">
                        </div>
                        <div class="info-big__content">
                            <div class="h2"><?= $n['title'] ?></div>
                            <div class="text-gray"><?= $n['desc'] ?></div>
                        </div>
                    </div>
                    <div class="info-pointer info-pointer--bottom"><span></span></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>