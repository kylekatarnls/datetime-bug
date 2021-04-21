<?php

$dtToronto = new DateTime('2012-01-01 00:00:00.000000', new DateTimeZone('America/Toronto'));
$dtVancouver = new DateTime('2012-01-01 00:00:00.000000', new DateTimeZone('America/Vancouver'));

$dtToronto->modify('+2012 years');
$dtVancouver->modify('+2012 years');

$diff = $dtVancouver->diff($dtToronto);

var_dump($diff);

$hours = $diff->format('%h');

exit($hours === '3' ? 0 : 1);
