<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_6</title>
</head>
<body>
<center><h1><pre>Günləri yazaraq adını çapa ver</pre></h1></center>
<center style="margin: 10%">
    <div class="container">
        <form action="" method="GET">
            <label for="age">günü qeyd edin :
                <input type="number" name="day" placeholder="enter age">
                <input style="text-align: right" type="submit">
            </label></form>
    </div>
    <hr>
    <br>
<?php
if (isset($_GET['day'])){
    $day = $_GET['day'];

        switch ($day){
            case 1:
                echo $name = 'bazar ertəsi';
                break;
            case 2:
                echo $name = 'çərşənbə axşamı';
                break;
            case 3:
                echo $name = 'çərşənbə';
                break;
            case 4:
                echo $name = 'cümə axşamı';
                break;
            case 5:
                echo $name = 'cümə';
                break;
            case 6:
                echo $name = 'şənbə';
                break;
            case 7:
                echo $name = 'bazar';
                break;
            default : return 'günü düzgün seçin!';
        }
        echo '<pre><h1>' . "seçdiyiniz rəqəmin adı  : $name" . '</h1></pre>';
    }
?>

</center>
</body>
</html>
