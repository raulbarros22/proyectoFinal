<?php

function connectDB()
{
    $dsn = 'mysql:host=127.0.0.1;dbname=goodbuy_db;port=3306';
    $dbUser = 'root';
    $dbPass = '';

    try {
        $db = new PDO($dsn, $dbUser, $dbPass);
        return $db;
    } catch (\Throwable $th) {
        return null;
    }
}
