<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 9</title>
</head>
<body>
    <?php
    function test($n){
    $r = $n > 30
    ? "greater than 30 <br>"
    : ($n > 20
    ? "greater than 20 <br>"
    : ($n >10
    ? "greater than 10 <br>"
    : "Less than 10 <br> ")); 
    echo $n." : ".$r;
    }
    test(40);
    test(35);
    test(15);
    test(5);
    ?>
</body>
</html>