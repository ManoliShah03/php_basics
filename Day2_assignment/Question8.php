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

    function low_value($values) 
    {
    return min(array_diff(array_map('intval', $values), array(0)));
    }
    
    $arr=array(2,0,54,-23,-78,-200);
    $values = low_value($arr);
    echo "Lowest Integer that is not 0 is: $values"; 
?>

</body>
</html>