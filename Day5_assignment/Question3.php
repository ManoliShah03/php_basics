<?php

function rev($str)
{
    $arr = array();
    $len = strlen($str);
    for ($i = $len; $i > 0; $i--) {
        $arr[$len - $i] = $str[$i - 1];
    }
    return implode("", $arr);
}

function palindrome($str){
    $reverse = rev($str);  
    if ($reverse == $str) {
    echo $str ." is Palindrom" ."<br>";
} else {
    echo $str ." is not Palindrom" ."<br>";
}
}

palindrome("abcba");
palindrome("manoli");

//EOF
