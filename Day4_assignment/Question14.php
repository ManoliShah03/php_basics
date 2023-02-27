<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 14</title>
</head>
<body>
<?php

$str = "2,543,12.567";
echo "Original : " .$str  ."<br>";
$x = str_replace( ',', '', $str);
if( is_numeric($x)){
    echo "After removing comma(s) : " .$x."\n";
}

?>
</body>
</html>