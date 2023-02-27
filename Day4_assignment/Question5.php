<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 5</title>
</head>
<body>
<?php

$str= 'University'; 
echo substr(chunk_split($str, 2, '-'), 0, -1)."\n";

?>
</body>
</html>