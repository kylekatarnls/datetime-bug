<?php

$date = new DateTime('2021-04-05 14:00:00');
$interval = new DateInterval('P0DT10799S');
$interval->f = 0.999999;
$interval->invert = 1;
$date->add($interval);
$string = $date->format('Y-m-d H:i:s.u');

echo $string;

exit($string === '2021-04-05 11:00:00.000001' ? 0 : 1);
