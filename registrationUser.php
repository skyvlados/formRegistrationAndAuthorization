<?php
require __DIR__ . "/file.txt";
if ($_SERVER["REQUEST_METHOD"]!=="POST") {
    http_response_code(405);
    exit;
}
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login && $password) {
        $fileName=__DIR__."/file.txt";
        $fp = fopen($fileName, "a");
        fwrite($fp, $login . "|" . $password . "\n");
        fclose($fp);
        header('Location: /login.php');
    } else {
        $error = 'Заполните поля';
        header('Location: /registration.php?error=fill_fields');
    }
}



