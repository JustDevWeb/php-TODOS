<?php
require 'models/User.php';
require 'models/UserProvider.php';
$pdo = require 'db.php';

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR (150),
    username VARCHAR (100) UNIQUE NOT NULL ,
    password  VARCHAR (100) NOT NULL 
)');

$pdo->exec('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    description VARCHAR (250) NOT NULL,
    isDone TINYINT NOT NULL,
    user_id INTEGER NOT NULL, 
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    )');

$testUser = new User ('admin');
$testUser->setName('BestAdmin');
$userProvider = new UserProvider($pdo);
$userProvider->registerUser($testUser,'123');

