<?php
require_once 'models/User.php';
session_start();

$pageTitle = 'Главная';

$userName = null;

if(isset($_SESSION['user'])){
    $userName = $_SESSION['user']->getUserName();
}

var_dump($_SESSION['user']);
include 'views/index.php';