<?php

function countOne(int $number)
{
    $count = 0;
    while ($number > 0) {
        $count += $number & 1;
        $number = $number >> 1;
    }

    return $count;
}

function hammingWeight($n)
{
    $count = 0;
    while ($n > 0) {
        $count += $n & 1;
        $n = $n >> 1;
    }

    return $count;
}

function isPowTwo(int $number)
{
    // 注意，与运算的优先级非常低
    return $number > 0 && (($number & ($number - 1)) == 0);
}

$number = 1022;
echo decbin($number) . PHP_EOL;
echo countOne($number) . PHP_EOL;
echo hammingWeight($number) . PHP_EOL;
// var_dump(isPowTwo($number));

echo decbin(PHP_INT_MAX);
