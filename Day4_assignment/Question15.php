<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 15</title>
</head>
<body>
<?php

$str = "Delhi is the capital of India.";
echo $str . "<br>";
$arr = explode(' ',trim($str));
echo "The first word from the sentence is : " . "<b>" . $arr[0]."\n" . "</b>";

?>
</body>
</html>