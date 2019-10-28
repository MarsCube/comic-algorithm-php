<?php

function countOne(int $number)
{
    $count = 0;
    for ($i = 0; $i < 32; $i++) {
        $count += $number & 1;
        $number = $number >> 1;
    }

    return $count;
}

$number = 1233152301;
echo decbin($number) . PHP_EOL;
echo countOne($number) . PHP_EOL;
