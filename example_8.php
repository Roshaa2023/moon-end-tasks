<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_8/rəqəmlərin_toplanması</title>
</head>
<body>
<center><h1><pre>Rəqəmin ədədlərinin toplanması</pre></h1></center>
<center style="margin: 10%">
    <div class="container">
        <form method="GET">
            <label for="number">Seçdiyiniz rəqəmin ədədlərini toplayın :
                <input type="number" name="number">
                <input type="submit">
            </label>
        </form>
    </div>
    <hr><br>

    <?php
if (isset($_GET['number'])){
    $number = $_GET['number'];
    $result = 0;
    $sum = 0;

    while ($number){
        $count = 0;
   $sum = $count+=$number;
        $number--;
echo $sum . ' + ';
       if ($number==1)
           echo '<pre>' . ' = ' . ($result += $sum) . '</pre>';


    }

}
    ?>
</center>
</body>
</html>
