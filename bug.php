<?php

$greater = (new DateTimeImmutable('2000-12-31 23:59:59.999999'))->setDate(PHP_INT_MAX, 12, 31) >
    new DateTimeImmutable('2019-01-26 10:30:12.000000');

var_dump($greater);

exit($greater ? 0 : 1);
