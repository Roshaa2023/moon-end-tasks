<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_13</title>
</head>
<body>
<center><h1><pre>$_SERVER istifadə edərək istifadəçinin IP ünvanını ekrana çıxar!</pre></h1></center>
<center style="margin: 10%">
    <h1>
         <pre>
<?php
echo "Sizin IP ünvanınız: " . $_SERVER['REMOTE_ADDR'];
?>
        </pre>
    </h1>
</center>
</body>
</html>
