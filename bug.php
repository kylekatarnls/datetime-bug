<?php

$dtToronto = new DateTime('2012-01-01 00:00:00.000000 America/Toronto');
$dtVancouver = new DateTime('2012-01-01 00:00:00.000000 America/Vancouver');

$diff = $dtToronto->diff($dtVancouver);

var_dump($diff);

$diff = $dtVancouver->diff($dtToronto);

var_dump($diff);

$hours = $diff->format('%h');

exit($hours === '3' ? 0 : 1);
