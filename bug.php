<?php

$dtToronto = new DateTime('2021-04-09 00:00 America/Toronto');
$dtVancouver = new DateTime('2021-04-09 00:00 America/Vancouver');

$hours = $dtToronto->diff($dtVancouver)->format('%h');
echo $hours;

exit($hours === '3' ? 0 : 1);
