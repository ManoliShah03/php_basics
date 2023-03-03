<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body{
    background-color:#D3D3D3;
    }

    .form {
    margin: 20% 23% 10% 20%;
    font-size: 30px;
    text-align: center;
    }

    fieldset{
    border: 2px solid black;
    width: 750px;
    }

   .form input {
    font-size: 20px;
    }

    .button{
    margin:10px 0px;
    }
</style>
</head>

<body>
    <div>
        <form class="form" action="Question1.php" method="post">
            <fieldset>
            <label class="label" for="url">Enter Rss Feed Url</label>
            <input class="input" name="url" id="url">
            <input class="button" type="submit" value="Submit">
        </fieldset>
        </form>
    </div>

</body>


</html>
