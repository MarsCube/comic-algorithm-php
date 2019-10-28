<?php
function showLight(array $control)
{
    $control = array_merge([
        'masterRoom' => 0,
        'livingRoom' => 0,
        'diningRoom' => 0,
        'secondLie' => 0,
        'kitchen' => 0,
    ], $control);

    echo '主卧', "\t";
    echo '客厅', "\t";
    echo '餐厅', "\t";
    echo '次卧', "\t";
    echo '厨房', "\t", PHP_EOL;

    echo $control['masterRoom'], "\t";
    echo $control['livingRoom'], "\t";
    echo $control['diningRoom'], "\t";
    echo $control['secondLie'], "\t";
    echo $control['kitchen'], "\t";
    echo PHP_EOL;
}

// 只开主卧和厨房
showLight(['masterRoom' => 1, 'kitchen' => 1]);