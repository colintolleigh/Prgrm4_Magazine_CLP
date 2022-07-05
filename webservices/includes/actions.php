<?php
/**
 * @return array
 */
function getJDM()
{
    return [
        [
            "id" => 1,
            "model" => "Nissan Skyline GT-R R34",
            "image" => "images/NissanSkylineGTR.jpg",
        ],
        [
            "id" => 2,
            "model" => "Mazda RX-7",
            "image" => "images/MazdaRX7.jpg",
        ],
        [
            "id" => 3,
            "model" => "Honda NS-X",
            "image" => "images/HondaNSX.jpg",
        ],
        [
            "id" => 4,
            "model" => "Toyota Supra",
            "image" => "images/ToyotaSupra.jpg",
        ],
        [
            "id" => 5,
            "model" => "Nissan Silvia 240SX",
            "image" => "images/NissanSilvia240SX.jpg",
        ],
        [
            "id" => 6,
            "model" => "Mitsubishi Lancer Evo",
            "image" => "images/MitsubishiLancerEvo.jpg",
        ],
        [
            "id" => 7,
            "model" => "Honda Civic Type R",
            "image" => "images/HondaCivicTypeR.jpg",
        ],
        [
            "id" => 8,
            "model" => "Subaru Impreza WRX STI",
            "image" => "images/SubaruImpreza.jpg",
        ],
        [
            "id" => 9,
            "model" => "Toyota AE86",
            "image" => "images/ToyotaSprinterTruenoAE86.jpg",
        ],
        [
            "id" => 10,
            "model" => "Honda S2000",
            "image" => "images/HondaS2000.jpg",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getJDMCarDetails($id)
{
    $tags = [
        1 => [
            "Year" => "1999",
            "Specs" => ['Engine: In-line 6-cylinder twin-turbo',
                'Top speed: 265 km/h',
                '0-100 km/h: 4.8s',
                'Power: 276 HP'],
        ],
        2 => [
            "Year" => "1998",
            "Specs" => ['Engine: Twin-chamber rotary twin-turbo',
                'Top speed: 251 km/h',
                '0-100 km/h: 5.4s',
                'Power: 237 HP']
        ],
        3 => [
            "Year" => "1995",
            "Specs" => ['Engine: double overhead camshaft V6',
                'Top speed: 270 km/h',
                '0-100 km/h: 6s',
                'Power: 270 HP']
        ],
        4 => [
            "Year" => "1993",
            "Specs" => ['Engine: In-line 6 cylinder',
                'Top speed: 250 km/h',
                '0-100 km/h: 5.1s',
                'Power: 330 HP'],
        ],
        5 => [
            "Year" => "1990",
            "Specs" => ['Engine: In-line 4 cylinder',
                'Top speed: 210 km/h',
                '0-100 km/h: 7.9s',
                'Power: 155 HP'],
        ],
        6 => [
            "Year" => "1997",
            "Specs" => ['Engine: In-line 4 cylinder turbo',
                'Top speed: 250 km/h',
                '0-100 km/h: 5.7s',
                'Power: 280 HP'],
        ],
        7 => [
            "Year" => "1997",
            "Specs" => ['Engine: In-line 4 cylinder',
                'Top speed: 225 km/h',
                '0-100 km/h: 6.7s',
                'Power: 182 HP'],
        ],
        8 => [
            "Year" => "1998",
            "Specs" => ['Engine: Twin Turbo Flat-4 cylinder',
                'Top speed: 241 km/h',
                '0-100 km/h: 4.5s',
                'Power: 280 HP'],
        ],
        9 => [
            "Year" => "1999",
            "Specs" => ['Engine: In-line 4 cylinder',
                'Top speed: 196 km/h',
                '0-100 km/h: 8.3s',
                'Power: 129 HP'],
        ],
        10 => [
            "Year" => "1999",
            "Specs" => ['Engine: In-line 4 cylinder',
                'Top speed: 241 km/h',
                '0-100 km/h: 6.2s',
                'Power: 240 HP'],
        ]
    ];

    return $tags[$id];
}