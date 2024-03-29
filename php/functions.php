<?php

declare(strict_types=1);

function getRandomQuote(): string
{
    $quotes = [
        '"There\'s nothing worse than the feeling of wishing you had another chance at a play because you weren\'t ready. Every athlete has those feelings to mull over, and over and over ... Don\'t even expose yourself to the possibility to being caught off-guard." -- Karch Kiraly',
        '"It\'s important to just kind of get away from your sport until you miss it . . . It\'s about taking time to enjoy other aspects of life or learn new things. It helps rejuvenate." -- Misty May-Treanor',
        '"Adversity, if you allow it to, will fortify you and make you the best you can be." -- Kerri Walsh Jennings',
        '"If you want to stay fit, surround yourself with a couple of chicks who are fired up, so that the one day you\'re not, you can feed off their energy." -- Gabrielle Reece',
        '"You\'re either getting better or getting worse. I don\'t think you stay the same in sports. If we want to achieve something special in the game, then those players have to recognize that they\'re responsible every day for getting better." -- Russ Rose',
        '"Don\'t fire your opponents up. If they\'re down, don\'t tick them off. Let them stay down." -- Sinjin Smith',
        '"Too many people get in a position of authority and aren\'t willing to get down on the floor and belly laugh with five- and six-year-olds." -- Arnie Ball',
        '"A great defensive play is worth about five points in emotion." -- Caren Kemner',
        '"It\'s not how tall you are, it is how good you are." -- Marv Dunphy',
    ];

    return $quotes[rand(0, count($quotes) - 1)];
}



function countdown(): float
{
    $volleyballEM = strtotime("2023-08-25");
    $secondsLeft = $volleyballEM - time();
    $days = floor($secondsLeft / (60 * 60 * 24));

    return $days;
}
