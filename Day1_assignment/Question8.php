<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 8</title>

    <style>
        table {border: 1px solid black;}
        tr {border: 1px solid black;}
        td {border: 1px solid black;}
        th {border: 1px solid black;}
        body {font-size:22px; color:blue;}
    </style>
</head>
<body>
    <?php

        //Student Name
        $a = "Manoli Shah";
        $b = "Mahir Shah";
        $c = "Asmita Shah";

        //Phone No
        $num1 = 9098123456;
        $num2 = 9324789012;
        $num3 = 9911345678;
    ?>

    <table>
        <tr>
            <th>Student Name</th>
            <th>Phone Number</th>
        </tr>

        <tr>
            <td><?php echo $a ?></td>
            <td><?php echo $num1 ?></td>
        </tr>
            
        <tr>
            <td><?php echo $b ?></td>
            <td><?php echo $num2 ?></td>
        </tr>

        <tr>
            <td><?php echo $c ?></td>
            <td><?php echo $num3 ?></td>
        </tr>

    </table>
        
</body>
</html>