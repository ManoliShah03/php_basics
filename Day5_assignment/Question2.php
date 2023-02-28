<?php

function sort1($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $ex = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $ex;
            }
        }
    }
    return $arr;

}
$arr = array(10, 20, 13, 55, 48, 62, 98, 80, 71);
echo "Before sort : " . implode("  ", $arr) . "<br>";
echo "After sort : " . implode("  ", sort1($arr));

//EOF
