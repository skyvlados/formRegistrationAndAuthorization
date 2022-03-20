<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
if ($login === null) {
    header("Location: /login.php");
    exit;
}
?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
    Добро пожаловать, <?php echo $login ?>
    <br>
    <a href="/logout.php">Выйти</a>
</body>
</html>
