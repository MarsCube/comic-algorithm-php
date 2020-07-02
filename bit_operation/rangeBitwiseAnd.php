<?php

function rangeBitwiseAnd(int $m, int $n)
{
    $max = PHP_INT_MAX;
    while (($m & $max) != ($n & $max)) {
        $max = $max << 1;
    }

    return $m & $max;
}

$m = 26;
$n = 30;

echo rangeBitwiseAnd($m, $n);