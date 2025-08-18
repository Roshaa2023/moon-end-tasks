<?php
session_start();

$db_username = "Rashad";
$db_password = "12345";

if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $db_username && $password === $db_password) {
        $_SESSION['username'] = $username;

        setcookie("last_login", date("Y-m-d H:i:s"), time() + (86400 * 365), "/");

        header("Location: index.php");
        exit();
    } else {
        $error = "İstifadəçi adı və ya şifrə səhvdir!";
    }
}
echo '<hr><br>';
?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>example_20/Login</title>
</head>
<body>
<center>
<center><h1><pre>sadə Login sistemi yaradırıq Session və Cookie - dən istifadə edirik</pre></h1></center>
    <?php if (isset($_SESSION['username'])): ?>
        <h2>Xoş gəlmisiniz, <?= $_SESSION['username'] ?>!</h2>

        <?php if (isset($_COOKIE['last_login'])): ?>
            <p>Son giriş tarixi: <?= $_COOKIE['last_login'] ?></p>
        <?php endif; ?>

    <?php else: ?>
        <h2>Daxil olun</h2>
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <div class="container"> <form action="" method="POST">
            İstifadəçi adı: <input type="text" name="username" required>
            Şifrə: <input type="password" name="password" required>
            <input type="submit" value="Daxil ol">
        </form>
        <?php endif; ?></div>

</center>
</body>
</html>