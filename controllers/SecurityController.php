<?php
require_once "models/User.php";
require_once "models/UserProvider.php";
$pdo = require "db.php";

session_start();

$pageTitle = 'Авторизация';
$pageHeader = $pageTitle;

$error = null;

if(isset($_GET['action']) && $_GET['action'] === 'logout'){
    unset($_SESSION['user']);
    session_destroy();
    header("Location: index.php");
    die();
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUserNameAndPassword($username, $password);
    if (isset($user)) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        die();
    } else {
        $error = 'Пользователь с указанными учетными данными не найден';
    }
}

include 'views/auth.php';