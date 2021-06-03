<?php

echo (new DateTimeImmutable('2010-11-07T00:00:00 America/New_York'))->diff(
    new DateTimeImmutable('2010-11-08T00:00:00 America/New_York')
)->format('%d %h') . "\n";
echo (new DateTimeImmutable('2010-03-14T00:00:00 America/New_York'))->diff(
    new DateTimeImmutable('2010-03-15T00:00:00 America/New_York')
)->format('%d %h') . "\n";
echo "\n\n";

echo (new DateTimeImmutable('2010-11-07T00:00:00 America/New_York'))->modify('24 hours')->format('j G') . "\n";
echo (new DateTimeImmutable('2010-11-07T00:00:00 America/New_York'))->add(new DateInterval('PT24H'))->format('j G') . "\n";
echo "\n";
echo (new DateTimeImmutable('2010-11-07T00:00:00 America/New_York'))->modify('1 day')->format('j G') . "\n";
echo (new DateTimeImmutable('2010-11-07T00:00:00 America/New_York'))->add(new DateInterval('P1D'))->format('j G') . "\n";
echo "\n\n";
echo (new DateTimeImmutable('2010-03-14T00:00:00 America/New_York'))->modify('24 hours')->format('j G') . "\n";
echo (new DateTimeImmutable('2010-03-14T00:00:00 America/New_York'))->add(new DateInterval('PT24H'))->format('j G') . "\n";
echo "\n";
echo (new DateTimeImmutable('2010-03-14T00:00:00 America/New_York'))->modify('1 day')->format('j G') . "\n";
echo (new DateTimeImmutable('2010-03-14T00:00:00 America/New_York'))->add(new DateInterval('P1D'))->format('j G') . "\n";

