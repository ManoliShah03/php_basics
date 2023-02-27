<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 8</title>
</head>
<body>
<?php

$str = 'The definite article is used before singular and plural nouns when the noun is specific or particular.';
echo "Original String : " . $str . "<br>";
echo "Updated string : " . preg_replace('/The/', 'best', $str, 1)."\n"; 

?>
</body>
</html>