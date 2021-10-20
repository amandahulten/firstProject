<?php

// function : int


$todaytime = time();

$eventdate = mktime(0, 0, 0, 8, 25, 2023);

$countdown = round(($eventdate - $todaytime) / 86400);


$playersInfo = [
    'Vilma Andersson' => [
        'position' => 'Passare',
        'ålder' => '21',
        'längd' => '184',
        'spikehöjd' => '299'
    ],
    'Lilly Topic' => [
        'position' => 'Center',
        'ålder' => '23',
        'längd' => '187',
        'spikehöjd' => '315'
    ],
    'Alexandra Lazic' => [
        'position' => 'Vänsterspike',
        'ålder' => '26',
        'längd' => '188',
        'spikehöjd' => '321'
    ],
    'Anna Haak' => [
        'position' => 'Vänsterspike',
        'ålder' => '24',
        'längd' => '179',
        'spikehöjd' => '320'
    ],
    'Isabelle Haak' => [
        'position' => 'Högerspike',
        'ålder' => '22',
        'längd' => '195',
        'spikehöjd' => '336'
    ],
    'Linda Andersson' => [
        'position' => 'Center',
        'ålder' => '23',
        'längd' => '188',
        'spikehöjd' => '309'
    ]
];

// echo $playerInfo['Isabelle Haak']['position'];
