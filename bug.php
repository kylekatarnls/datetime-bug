<?php

$dtToronto = DateTime::createFromFormat('!Y-n-j G:i:s.u', '0-01-01 00:00:00.000000', new DateTimeZone('America/Toronto'));
$dtVancouver = DateTime::createFromFormat('!Y-n-j G:i:s.u', '0-01-01 00:00:00.000000', new DateTimeZone('America/Vancouver'));

$dtToronto->modify('+2012 years');
$dtVancouver->modify('+2012 years');

$diff = $dtToronto->diff($dtVancouver);

var_dump($diff);

$diff = $dtVancouver->diff($dtToronto);

var_dump($diff);

$hours = $diff->format('%h');

exit($hours === '3' ? 0 : 1);
