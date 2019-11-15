<?php

function connectDB()
{
    $dsn = 'mysql:host127.0.0.1;dbnamegoodbuy_db=;port=3306';
    $dbUser = 'root';
    $dbPass = '';

    $db = new PDO($dsn, $dbUser, $dbPass);
    if ($db) {
        return $db;
    }

    return null;
}
