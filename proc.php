<?php
$path= 'users.txt';
$login = $_POST['login'];
$pass = $_POST['pass'];
$pass_conf = $_POST['pass_conf'];
$hash_pass = md5($pass);


if(!empty($login) && $pass == $pass_conf) {
    $result = "Login: $login \nPassword: $hash_pass \n=========================\n";
file_put_contents($path, $result, FILE_APPEND);
}  else {
    echo 'Логин пуст, либо пароли не совпадают';
}

//header("Location: /index.php");
