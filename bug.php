<?php

$dtToronto = new DateTime('2021-04-09 00:00 America/Toronto');
$dtVancouver = new DateTime('2021-04-09 00:00 America/Vancouver');

$diff = $dtToronto->diff($dtVancouver);
var_dump($diff);
$hours = $dtToronto->diff($dtVancouver)->format('%h');

exit($hours === '3' ? 0 : 1);
