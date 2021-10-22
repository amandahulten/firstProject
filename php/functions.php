<?php

// function : int


$todaytime = time();

$eventdate = mktime(0, 0, 0, 8, 25, 2023);

$countdown = round(($eventdate - $todaytime) / 86400);
