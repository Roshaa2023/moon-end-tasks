<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_1</title>
</head>
<body>
<center><h1><pre>URL-də göndərilən $_GET parametri ilə salam mesajı</pre></h1></center>
<center style="margin: 10%">
    <div class="container">
        <form action="" method="GET">
            <label for="">Adınızı daxil edin :
                <input type="text" name="ad">
            </label>
            <input style="width: 125px" type="submit" value="adını ekrana çıxart">
        </form>
    </div>
    <h1>
         <pre>
<?php

if (isset($_GET['ad'])) {
    $ad = htmlspecialchars($_GET['ad']);

    echo '<hr><br>';
    echo "Salam, " . $ad . "!";
}
?>
        </pre>
    </h1>
</center>
</body>
</html>
