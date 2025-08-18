<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_18</title>
</head>
<body>
<center><h1><pre> İstifadəçinin daxil etdiyi sözü böyük hərflərə çevirin və uzunluğunu göstərin</pre></h1></center>
<center style="margin: 10%">
    <form action="" method="GET">
        Sözü daxil edin:
        <input type="text" name="word">
        <input type="submit" value="Göstər">
    </form>
<hr><br>
    <?php
    if (isset($_GET['word'])) {
        $word = $_GET['word'];

        // Bütün hərfləri böyüt
        $boyukSoz = strtoupper($word);

        // Sözün uzunluğunu tap
        $uzunluq = strlen($word);

        echo "<pre><h2>Daxil edilən söz  ->   $word</h2></pre>";
        echo "<pre><h2>Böyük hərflərlə ->   $boyukSoz</h2></pre>";
        echo "<pre><h2>Sözün uzunluğu ->  $uzunluq</h2></pre>";
    }
    ?>

</center>
</body>
</html>
