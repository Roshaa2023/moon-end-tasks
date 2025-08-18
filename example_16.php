<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_16</title>
</head>
<body>
<center><h1><pre>Daxil edilən ədədin funksiya ilə cüt və ya tək olduğunu qaytar</pre></h1></center>
<center style="margin: 10%">

    <div class="container">
        <form method="GET">
            <label for="number">number :
                <input type="number" name="number">
            </label>
            <input type="submit" value="qaytar">
        </form>
    </div>
    <hr><br>
<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];

    echo '<pre><h1>' . tekCut($number) . ' </h1></pre>';
}
function tekCut($number)
{
    if ($number % 2 == 0) {
        echo '<pre><h1>' . "Bu ədəd cütdür : $number" . '</h1></pre>';
    } else {
        echo '<pre><h1>' . "Bu ədəd təkdir : $number" . '</h1></pre>';
    }
}
?>
</center>
</body>
</html>
