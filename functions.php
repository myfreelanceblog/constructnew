<?php
$dev = '?v='.time();

function format_number_slides($number) {
    return str_pad($number, 2, '0', STR_PAD_LEFT);
}

function config(){
    $config = [
        'case' => [
            'title' => 'Корпус',
            'selected' => 'Powercase Mistral Micro A3W ARGB V2 — Чёрный',
            'items' => [
                [
                    'title' => 'Powercase Mistral Micro A3W ARGB V2 — Чёрный',
                    'price' => 0,
                ],
                [
                    'title' => 'Powercase Mistral Micro A3W ARGB V2 — Белый',
                    'price' => 0,
                ],
            ],
        ],

        'cpu' => [
            'title' => 'Процессор',
            'selected' => 'Intel Core i5-12400F',
            'items' => [
                [
                    'title' => 'Intel Core i5-12400F',
                    'price' => 0,
                ],
                [
                    'title' => 'Intel Core i5-13400F',
                    'price' => 750,
                ],
                [
                    'title' => 'Intel Core i5-14400F',
                    'price' => 3250,
                ],
            ],
        ],

        'motherboard' => [
            'title' => 'Материнская плата',
            'selected' => 'MSI PRO H610M-G DDR4',
            'items' => [
                [
                    'title' => 'MSI PRO H610M-G DDR4',
                    'price' => 0,
                ],
                [
                    'title' => 'ASUS PRIME B760M-K D4',
                    'price' => 2875,
                ],
            ],
        ],

        'gpu' => [
            'title' => 'Видеокарта',
            'selected' => 'KFA2 GeForce RTX 5050 CORE OC 2FAN LED Black',
            'items' => [
                [
                    'title' => 'KFA2 GeForce RTX 5050 CORE OC 2FAN LED Black',
                    'price' => 0,
                ],
                [
                    'title' => 'KFA2 GeForce RTX 5050 CORE OC 2FAN LED White',
                    'price' => 3750,
                ],
                [
                    'title' => 'Palit GeForce RTX 5060 Dual',
                    'price' => 5000,
                ],
                [
                    'title' => 'Palit GeForce RTX 5060 White OC',
                    'price' => 9750,
                ],
                [
                    'title' => 'Palit GeForce RTX 5060 Ti Dual 8Gb',
                    'price' => 13750,
                ],
                [
                    'title' => 'Palit GeForce RTX 5060 Ti White OC 8Gb',
                    'price' => 15000,
                ],
                [
                    'title' => 'Palit GeForce RTX 5060 Ti Infinity 3 16Gb',
                    'price' => 28750,
                ],
                [
                    'title' => 'Palit GeForce RTX 5060 Ti White OC 16Gb',
                    'price' => 33750,
                ],
                [
                    'title' => 'Palit GeForce RTX 5070 Infinity 3',
                    'price' => 38750,
                ],
                [
                    'title' => 'KFA2 GeForce RTX 5070 CORE OC 2FAN LED White',
                    'price' => 47500,
                ],
            ],
        ],

        'cooler' => [
            'title' => 'Охлаждение',
            'selected' => 'JONSBO CR-1000 EVO ARGB Black',
            'items' => [
                [
                    'title' => 'JONSBO CR-1000 EVO ARGB Black',
                    'price' => 0,
                ],
                [
                    'title' => 'JONSBO CR-1000 EVO ARGB White',
                    'price' => 250,
                ],
            ],
        ],

        'ram' => [
            'title' => 'Оперативная память',
            'selected' => 'ADATA XPG SPECTRIX D35G RGB DDR4 16Gb (2x8Gb) 3200 MHz Black',
            'items' => [
                [
                    'title' => 'ADATA XPG SPECTRIX D35G RGB DDR4 16Gb (2x8Gb) 3200 MHz Black',
                    'price' => 0,
                ],
                [
                    'title' => 'ADATA XPG SPECTRIX D35G RGB DDR4 16Gb (2x8Gb) 3200MHz White',
                    'price' => 1125,
                ],
                [
                    'title' => 'ADATA XPG GAMMIX D35 DDR4 32Gb (2x16Gb) 3200MHz White',
                    'price' => 12125,
                ],
                [
                    'title' => 'ADATA XPG GAMMIX D35 DDR4 32Gb (2x16Gb) 3200MHz',
                    'price' => 14625,
                ],
            ],
        ],

        'ssd' => [
            'title' => 'Накопитель',
            'selected' => '1000 ГБ M.2 NVMe накопитель ADATA LEGEND 860',
            'items' => [
                [
                    'title' => '1000 ГБ M.2 NVMe накопитель ADATA LEGEND 860',
                    'price' => 0,
                ],
                [
                    'title' => '1000 ГБ M.2 NVMe накопитель Kingston NV3',
                    'price' => 625,
                ],
                [
                    'title' => '2000 ГБ M.2 NVMe накопитель Kingston NV3',
                    'price' => 7750,
                ],
                [
                    'title' => '4000 ГБ M.2 NVMe накопитель Kingston NV3',
                    'price' => 30500,
                ],
            ],
        ],

        'psu' => [
            'title' => 'Блок питания',
            'selected' => '1STPLAYER DK Premium, 600W, 80+ Bronze',
            'items' => [
                [
                    'title' => '1STPLAYER DK Premium, 600W, 80+ Bronze',
                    'price' => 0,
                ],
                [
                    'title' => 'PHANTEKS AMP BH, 650W, 80+ Bronze White',
                    'price' => 1375,
                ],
                [
                    'title' => 'PHANTEKS AMP BH, 650W, 80+ Bronze',
                    'price' => 1750,
                ],
                [
                    'title' => 'PHANTEKS AMP BH, 750W, 80+ Bronze',
                    'price' => 2625,
                ],
                [
                    'title' => 'PHANTEKS AMP BH, 750W, 80+ Bronze White',
                    'price' => 2625,
                ],
            ],
        ],
    ];

    return $config;
}