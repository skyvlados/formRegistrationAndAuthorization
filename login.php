<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>
<?php if (isset($error)): ?>
    <span style="color: red;">
    <?= $error ?>
</span>
<?php endif; ?>
<form action="/loginUser.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <label for="login">Проба: </label><input type="text" name="test" id="login">
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>