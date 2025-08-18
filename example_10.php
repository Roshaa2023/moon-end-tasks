<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_10/Arrays_find_elements</title>
</head>
<body>
<center><h1><pre>Array - dəki ən böyük və ən kiçik ədədin tapılması</pre></h1></center>
<center style="margin: 10%">

               <div class="container">
                   <form action="" method="GET">
                 Arrays elementlərini daxil edin : <label for="number1">
                     <input style="width: 50px" type="number" name="number1">
                 </label>
                  <label for="number2">
                     <input style="width: 50px" type="number" name="number2">
                 </label>
                  <label for="number3">
                     <input style="width: 50px" type="number" name="number3">
                 </label>
                  <label for="number4">
                     <input style="width: 50px" type="number" name="number4">
                 </label>
                  <label for="number5">
                     <input style="width: 50px" type="number" name="number5">
                 </label>
                  <label for="number6">
                     <input style="width: 50px" type="number" name="number6">
                 </label>
                  <label for="number7">
                     <input style="width: 50px" type="number" name="number7">
                 </label>
                  <label for="number8">
                     <input style="width: 50px" type="number" name="number8">
                 </label>
                       <input style="width: 70px" type="submit" value="find">
                   </form>
             </div>
<?php
if (isset($_GET['number1'],$_GET['number2'],$_GET['number3'],$_GET['number4'],$_GET['number5'],$_GET['number6'],$_GET['number7'],$_GET['number8'])){

    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $number3 = $_GET['number3'];
    $number4 = $_GET['number4'];
    $number5 = $_GET['number5'];
    $number6 = $_GET['number6'];
    $number7 = $_GET['number7'];
    $number8 = $_GET['number8'];

    $arrays = [$number1,$number2,$number3,$number4,$number5,$number6,$number7,$number8];

    $min = $arrays[0];
    $max = $arrays[0];

    foreach ($arrays as $arr) {
        if ($arr < $min) {
            $min = $arr;
        }
        if ($arr > $max) {
            $max = $arr;
        }
    }
echo '<hr><br>';
    echo '<pre><h1>' . "Ən kiçik ədəd: $min\n" . '</h1></pre>';
    echo '<pre><h1>' . "Ən böyük ədəd: $max\n" . '</h1></pre>';
}
?>
</center>
</body>
</html>
