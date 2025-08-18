<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example_14/Calculate</title>
</head>
<body>
<center><h1><pre>Form ilə sadə Kalkulyator hazırlanması</pre></h1></center>
<?php
$operations = ['+','-','*','/'];
$result = '';
$error = '<center style="margin: 10%"><div class="alert alert-danger"><pre><h1>' . 'cannot be divided by zero!' . '</h1></pre></div></center>';


$n1 = isset($_GET['n1']) ? $_GET['n1'] : '';
$n2 = isset($_GET['n2']) ? $_GET['n2'] : '';
$operations = isset($_GET['operations']) ? $_GET['operations'] : '';

if (isset($_GET['n1'])&& isset($_GET['n2'])){
    $n1 = trim($_GET['n1']);
    $n2 = trim($_GET['n2']);
}
switch ($operations){
    case'+': $result = $n1 + $n2; break;
    case'-': $result = $n1 - $n2; break;
    case'*': $result = $n1 * $n2; break;
    case'/': if($n2==0){ echo $error; } else { $result = $n1 / $n2; } break;
    default :  echo '<center><pre><h1>' . 'noting is written!' . '</h1></pre></center>';
}
?>
<center style="margin: 15%">
    <div style=" background-color: darkorange; height: 150px; padding: 10%" class="container">
        <div style="border-radius: 3%"><h1>Calculate :</h1></div>
        <form action="" method="GET">
            <label>
                <input style="width: 90px" type="number" name="n1" value="<?=$n1?>">
            </label>
            <label>
                <select name="operations">
                    <option value="+" <?=($operations == '+') ? 'selected' : '' ?>>+</option>
                    <option value="-" <?=($operations == '-') ? 'selected' : '' ?>>-</option>
                    <option value="*" <?=($operations == '*') ? 'selected' : '' ?>>*</option>
                    <option value="/" <?=($operations == '/') ? 'selected' : '' ?>>/</option>
                </select>
            </label>
            <label>
                <input style="width: 90px" type="number" name="n2" value="<?=$n2?>">
            </label>
            <label>
                <input type="submit" value="=">
            </label>
            <label>
                <input style="width: 90px" type="number" value="<?=$result?>">
            </label>
        </form>
    </div>
</center>

</body>
</html>
