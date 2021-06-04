<?php

$min = 2001;
$max = 4611686018427387904;

while ($max - $min > 1) {
    $half = (int) (($max + $min) / 2);

    if ((new DateTimeImmutable('2000-12-31 23:59:59.999999'))->setDate($half, 12, 31) >
        new DateTimeImmutable('2019-01-26 10:30:12.000000')) {
        $min = $half;

        continue;
    }

    $max = $half;
}

var_dump($min, $max);
$okMin = (new DateTimeImmutable('2000-12-31 23:59:59.999999'))->setDate($min, 12, 31) >
    new DateTimeImmutable('2019-01-26 10:30:12.000000');
var_dump($okMin,
    (new DateTimeImmutable('2000-12-31 23:59:59.999999'))->setDate($max, 12, 31) >
    new DateTimeImmutable('2019-01-26 10:30:12.000000'));

exit($okMin ? 0 : 1);
