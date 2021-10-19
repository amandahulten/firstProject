<?php

// function getCountdown(int $dateToday): int


$todaytime = time();

$eventdate = mktime(0, 0, 0, 8, 25, 2023);

$countdown = round(($eventdate - $todaytime) / 86400);


$playerInfo = [
    'Vilma Andersson' => [
        'Position' => 'Passare',
        'Ålder' => '21',
        'Längd' => '184',
        'Spikehöjd' => '299'
    ],
    'Lilly Topic' => [
        'Position' => 'Center',
        'Ålder' => '23',
        'Längd' => '187',
        'Spikehöjd' => '315'
    ],
    'Alexandra Lazic' => [
        'Position' => 'Vänsterspiker',
        'Ålder' => '26',
        'Längd' => '188',
        'Spikehöjd' => '321'
    ],
    'Anna Haak' => [
        'Position' => 'Vänsterspike',
        'Ålder' => '24',
        'Längd' => '179',
        'Spikehöjd' => '320'
    ],
    'Isabella Haak' => [
        'Position' => 'Högerspiker',
        'Ålder' => '22',
        'Längd' => '195',
        'Spikehöjd' => '336'
    ],
    'Linda Andersson' => [
        'Position' => 'Center',
        'Ålder' => '23',
        'Längd' => '188',
        'Spikehöjd' => '309'
    ]
];
