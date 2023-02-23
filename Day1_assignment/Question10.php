<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 10</title>
</head>
<body>
    <?php  
        $a=50;  
        $b=100;  
 
        echo "Before Swapping <br>";
        echo "Value of a : $a</br>";  
        echo "Value of b : $b</br><br>"; 

        //swapping 
        $a=$a+$b;  
        $b=$a-$b;  
        $a=$a-$b;  

        echo "After Swapping <br>";
        echo "Value of a : $a</br>";  
        echo "Value of b : $b</br>";  
    ?>  
</body>
</html>