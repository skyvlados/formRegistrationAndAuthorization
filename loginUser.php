<?php
//var_dump($_POST);
//var_dump($_SERVER);
if ($_SERVER["REQUEST_METHOD"]!=="POST") {
    http_response_code(405);
    exit;
}
if (!empty($_POST)) {
    require __DIR__ . '/auth.php';

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /index.php');
    } else {
        header('Location: /login.php?error=user_not_found');
    }
}
