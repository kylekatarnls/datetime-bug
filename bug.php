<?php

$dtToronto = new DateTime('2021-04-09 00:00 America/Toronto');
$dtVancouver = new DateTime('2021-04-09 00:00 America/Vancouver');

$diff = $dtToronto->diff($dtVancouver);

function getDateIntervalSpec(DateInterval $interval): string
{
    $date = array_filter([
        'Y' => abs($interval->y),
        'M' => abs($interval->m),
        'D' => abs($interval->d),
    ]);

    $time = array_filter([
        'H' => abs($interval->h),
        'M' => abs($interval->i),
        'S' => abs($interval->s),
    ]);

    $specString = 'P';

    foreach ($date as $key => $value) {
        $specString .= $value.$key;
    }

    if (\count($time) > 0) {
        $specString .= 'T';
        foreach ($time as $key => $value) {
            $specString .= $value.$key;
        }
    }

    return $specString === 'P' ? 'PT0S' : $specString;
}

$diff = new DateInterval(getDateIntervalSpec($diff));

var_dump($diff);

$hours = $diff->format('%h');

exit($hours === '3' ? 0 : 1);
