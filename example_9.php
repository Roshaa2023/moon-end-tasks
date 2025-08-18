<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_9/array_elements</title>
</head>
<body>
<center><h1><pre>Array - dəki bütün yazılan elementləri foreach(); ilə çap edilməsi</pre></h1></center>
<?php

$arrays = [2,4,3,5,6,7,12,22,32,14,55,66,88,100];
   foreach ($arrays as $array){
       echo '<center><pre>' . '[';
       print_r($array);
       echo ']' . '</pre></center>';
   }
?>

</body>
</html>
