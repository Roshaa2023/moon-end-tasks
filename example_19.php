<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_19</title>
</head>
<body>
<center><h1><pre>məlumatı fayla yazırıq və daha sonra file - dan oxuyuruq</pre></h1></center>
<center style="margin: 10%">

    <form action="" method="POST">
        Fayla yazmaq üçün Məlumatı daxil edin :
        <input style="width: 60%"  type="text" name="melumat">
        <input type="submit" value="Yadda saxla">
    </form>
<hr><br>
    <?php
    if (isset($_POST['melumat'])) {
        $melumat = $_POST['melumat'];

        $file = fopen("data.txt", "w");
        fwrite($file, $melumat);
        fclose($file);

        echo "<h5>Məlumat fayla yazıldı!</h5>";
        echo '<br>';

        $file = fopen("data.txt", "r");
        $content = fread($file, filesize("data.txt"));
        fclose($file);

        echo '<pre><h3>' . "Fayldan oxunan məlumat :   "  .  $content . '</h3></pre>';
    }
    ?>

</center>
</body>
</html>
