<?php

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', 'root');
define ('DB_NAME', 'auth');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db) {
    echo 'Проблема подклчюения БД';
    die;
}

mysqli_query($db, 'SET NAMES utf8');
?>