<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 6</title>
</head>
<body>
<?php

$email  = 'test@gmail.com';
$name = strstr($email, '@', true);
echo $name."\n";

?>
</body>
</html>