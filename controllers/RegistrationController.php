<?php
require 'models/User.php';
require 'models/UserProvider.php';
$pdo = require 'db.php';

session_start();

$pageHeader = 'Регистрация';
$pageTitle = $pageHeader;

$error = null;
$userProvider = new UserProvider($pdo);

if (isset($_POST['name'], $_POST['login'], $_POST['password'], $_POST['pass_check'])) {

    $name = strip_tags(trim($_POST['name']));
    $login = strip_tags(trim($_POST['login']));
    $password = strip_tags(trim($_POST['password']));
    $passCheck = strip_tags(trim($_POST['pass_check']));

    if (!empty($name) && !empty($login) && !empty($password) && !empty($passCheck)) {
        if ($password === $passCheck) {
            $user = new User($login);
            $user->setName($name);
            if($userProvider->registerUser($user, $password)){
                $_SESSION['user'] = $userProvider->getByUserNameAndPassword($login, $password);
                header('Location: /');
                die();
            }else{
                $error = "Пользователь с таким именем уже зарегистрирован";
            }

        } else {
            $error = 'Пароли не совпадают';
        }
    } else {
        $error = 'Поля заполнены не корректно!';
    }

}





include 'views/registration.php';




