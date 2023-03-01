<?php

$arr = array(67, 11, 41, 20, -80, -3);
echo "Original Array : ";
foreach ($arr as $value) {
    echo $value . "\n";
}

function bubbleSort(&$arr)
{
    $n = sizeof($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $t = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $t;
            }
        }
    }
}

$len = sizeof($arr);
bubbleSort($arr);

echo "<br> Sorted Array : \n";
for ($i = 0; $i < $len; $i++) {
    echo $arr[$i] . " ";
}

//EOF
