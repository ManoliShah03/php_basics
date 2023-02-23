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
    $text = "Manoli Shah";
    $text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
    echo "<h1>" . $text ."</h1>";
?>
    
</body>
</html>