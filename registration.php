<html>
<head>
    <title>Форма Регистрации</title>
</head>
<body>
<?php if ($_GET["error"]==="fill_fields"): ?>
    <span style="color: red;">
    Заполните поля Имя пользователя и Пароль!
</span>
<?php endif; ?>
<form action="/registrationUser.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Зарегистрироваться">
    <a href="/login.php">Обратно в авторизацию</a>
</form>
</body>
</html>