<?php

$login = strtolower($_POST['login']);
$password = strtolower($_POST['password']);

if($login == null){
    header('Location: /room/index.php');
} elseif($password == null){
    header('Location: /room/index.php');
}


echo 'Ваш Никнейм: ' . $login;
echo "<br>";
echo 'Ваш Пароль: ' . $password;