<?php

$str = "Manoli";
function reverse($str)
{
    $result = " ";

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }
    echo "Original String : " .$str . "<br>";
    echo "Reversed String : " .$result;
}
reverse($str);

//EOF
