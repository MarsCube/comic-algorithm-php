<?php

function show($res, $a, $op, $b, $note = '')
{
    $format = '%0' . (PHP_INT_SIZE * 8) . "b\n";

    if ($op == '~') {
        printf("Expression: %d = %s %d\n", $res, $op, $a);
    } else {
        printf("Expression: %d = %d %s %d\n", $res, $a, $op, $b);
    }

    echo " Decimal:\n";
    printf("  a   = %d\n", $a);
    printf("  b   = %d\n", $b);
    printf("  res = %d\n", $res);

    echo " Binary:\n";
    printf('  a   = ' . $format, $a);
    printf('  b   = ' . $format, $b);
    printf('  res = ' . $format, $res);

    if ($note) {
        echo " NOTE: $note\n";
    }

    echo "\n";
}

$a = '5';
$b = '3';
$res = $a & $b;
show($res, $a, '&', $b, '');

$res = $a | $b;
show($res, $a, '|', $b, '');

$res = $a ^ $b;
show($res, $a, '^', $b, '');

$res = ~$a;
show($res, $a, '~', $b, '');

