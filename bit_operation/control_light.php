<?php
function showLight($masterRoom = 0, $livingRoom = 0, $diningRoom = 0, $secondLie = 0, $kitchen = 0)
{
    echo '主卧', "\t";
    echo '客厅', "\t";
    echo '餐厅', "\t";
    echo '次卧', "\t";
    echo '厨房', "\t", PHP_EOL;

    echo $masterRoom, "\t";
    echo $livingRoom, "\t";
    echo $diningRoom, "\t";
    echo $secondLie, "\t";
    echo $kitchen, "\t";
    echo PHP_EOL;
}

// 只开主卧灯
showLight(1);
// 只开厨房灯
showLight(0, 0, 0, 0, 1);
// 开所有灯
showLight(1, 1, 1, 1, 1);