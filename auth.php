<?php

use JetBrains\PhpStorm\Pure;

$users=require __DIR__ . '/users.php';

function checkAuth(string $login, string $password): bool{
    $fileName=__DIR__."/file.txt";
    $fp = file_get_contents($fileName);
    $data = explode("\n", $fp);
    $isLogin=false;
    $isPassword=false;
    foreach ($data as $item) {
        if ($item === ($login."|".$password)) {
            $isLogin = true;
            $isPassword=true;
        }
    }
    if ($isLogin&&$isPassword) {
        return true;
    } else {
        return false;
    }

//    $users = require __DIR__ . '/users.php';
//
//    foreach ($users as $user) {
//        if ($user['login'] === $login
//            && $user['password'] === $password
//        ) {
//            return true;
//        }
//    }
//
//    return false;
}
#[Pure] function getUserLogin()
{
    $loginFromCookie = $_COOKIE['login'];
    $passwordFromCookie = $_COOKIE['password'];

    if ($loginFromCookie && $passwordFromCookie && checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }

    return null;
}