<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_5</title>
</head>
<body>
<center><h1><pre>Yaş həddinin yoxlanması</pre></h1></center>
<center style="margin: 10%">
<div class="container">
    <form action="" method="GET">
        <label for="age">enter age
            <input type="number" name="age" placeholder="enter age">
            <input style="text-align: right" type="submit">
        </label></form>
</div>
    <hr>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] === "GET"){
    $age = $_GET['age'];

    if ($age<18){
        echo '<center><pre><h1>' . "sizin yaşınız uyğun deyil! ____ " . " " . "age : $age" . '</h1></pre></center>';
        }else{
        echo '<center><pre><h1>' . "sistemə giriş uğurlu! ____ " . " " . "age : $age" . '</h1></pre></center>';
    }
}
?>
</center>
</body>
</html>
