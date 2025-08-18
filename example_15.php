<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_15</title>
</head>
<body>
<center><h1><pre>Funksiya iki ədəd qəbul etsin və onların hasilini qaytarsın</pre></h1></center>
<center style="margin: 10%">
    <div class="container">
        <form method="GET">
            <label for="number_1">number_1 :
                <input type="number" name="number_1">
            </label>
            <label for="number_2">number_2 :
                <input type="number" name="number_2">
            </label>
            <input type="submit" value="result">
        </form>
    </div>
<?php
if (isset($_GET['number_1'],$_GET['number_2'])){
    $number_1 = $_GET['number_1'];
    $number_2 = $_GET['number_2'];
    echo '<hr><br>';
    echo '<pre><h1>' . 'Hasil : ' . hasil($number_1,$number_2) . ' </h1></pre>';
}
   function hasil($number_1,$number_2){
       return $number_1 + $number_2;
   }
?>
</center>
</body>
</html>
