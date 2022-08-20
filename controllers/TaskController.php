<?php
require_once "models/TaskProvider.php";
require_once "models/Task.php";
$pdo = require 'db.php';

session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
    die();
}

$pageTitle = 'Задания';

$pageHeader = 'Список заданий';

$user = $_SESSION['user'];
$taskProvider = new TaskProvider($pdo,$user);

if (isset($_POST['task']) && !empty(trim($_POST['task']))) {
    $description = strip_tags(trim($_POST['task']));
    $taskProvider->addTask($description,$user);
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done' && isset($_GET['key'])) {
   $id = $_GET['key'];
   $taskProvider->markAsDone($id);
   header("Location: /?controller=tasks");
   die();
}

$undoneTasks = $taskProvider->getUndoneList();



include 'views/tasks.php';