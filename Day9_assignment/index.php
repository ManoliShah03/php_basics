<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question1</title>
    <style>

     body{
      font-family: "Times New Roman", Times, serif;
      background-color: #e6ebea;
    }

    .form{
        margin: 0% 18% 0% 16%;
        text-align: center;
        font-size: 30px;
        background-color: #ebfcfc;
        color: rgb(25, 12, 66);
    }

    .form input{
        font-size: x-large;
        margin-top: 5%;
        margin-bottom:5%;
        text-align: center;
    }

    .form fieldset{
        border-radius: 10px;
    }

    .heading{
      margin:230px 0px 0px 0px;
    }

      </style>
</head>

<body>

<center>
<div class=heading>
<h1>READ CSV FILE USING PHP</h1>
  </div>
<div class=form>
    <form action="Question1.php" method="POST" enctype="multipart/form-data">
    <input type="file" id="php-file" name="php-file"  accept=".csv" />
    <input type="submit" name="submit" value="Upload" />
</div>

    </form>
</center>

</body>

</html>
