<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_7</title>
</head>
<body>
<center><h1><pre>1 - dən yazdığınız rəqəmə qədər ardıcıl çap edilməsi</pre></h1></center>
<center style="margin: 10%">
<div class="container">
    <form method="GET">
        <label for="number">Seçdiyiniz rəqəmə qədər çap edin :
            <input type="number" name="number">
            <input type="submit">
        </label>
    </form>
</div>
    <hr><br>
    <?php
    if (isset($_GET['number'])){
        $number = $_GET['number'];
        for ($i=1;$i<=$number;$i++){
            echo "element : $i" . '<br>';
        }
    }
    ?>
</center>
</body>
</html>
