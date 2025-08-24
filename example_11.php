<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_11</title>
</head>
<body>
<center><h1><pre>Adını daxil et və $_POST ilə ekrana çıxar</pre></h1></center>
<center style="margin: 10%">

    <div class="container">
        <form action="" method="POST">
        <label for="">Adınızı daxil edin :
            <input type="text" name="name">
        </label>
        <input style="width: 125px" type="submit" value="adını ekrana çıxart">
        </form>
    </div>
<?php
 if (isset($_POST['name'])){
     $name = $_POST['name'];
echo '<hr><br>';
     echo '<pre><h1>' . "Salam $name xoş gəlmisən!" . '</h1></pre>';
 }
?>

</center>
</body>
</html>
