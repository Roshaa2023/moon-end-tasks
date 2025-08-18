<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_4</title>
</head>
<body>
<center><h1><pre>A və B hərifinin böyek ya kiçik olmasını yoxlayan form</pre></h1></center>
<center style="margin: 10%">
    <div class="container">
        <form method="GET">
            <label for="a">A :
                <input type="number" name="a">
            </label>
            <label for="b">B :
                <input type="number" name="b">
                <input type="submit">
            </label>
        </form>
    </div>
    <hr>
    <br>
<?php
 if (isset($_GET['a'],$_GET['b'])){
     $a = $_GET['a'];
     $b = $_GET['b'];

     if ($a>$b)
         echo '<h1><pre>A > B : Böyükdür</pre></h1>';
     elseif ($a<$b)
         echo '<h1><pre>A < B : Kiçikdir</pre></h1>';
     else
         echo '<h1><pre>A = B : Bərabərdir</pre></h1>';
 }
?>

</center>
</body>
</html>
