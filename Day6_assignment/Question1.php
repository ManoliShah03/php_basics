<?php

$json = '{"manoli": "shah",
          "sigma": "infosolutions"}';
$obj = json_decode($json);

echo $obj->{'manoli'};
echo "<br>";
echo $obj->{'sigma'};

//EOF