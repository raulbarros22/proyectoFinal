<?php

// function connectDB()
// {
//     $dsn = 'mysql:host=127.0.0.1;dbname=goodbuy_db;port=3306';
//     $dbUser = 'root';
//     $dbPass = '';
//
//     try {
//         $db = new PDO($dsn, $dbUser, $dbPass);
//         return $db;
//     } catch (\Throwable $th) {
//         return null;
//     }
// }

$dsn="mysql:dbname=goodbuy_db;host=127.0.0.1;port=3306";
$user="root";
$pass="";

try {
  $baseDatos=new PDO($dsn,$user,$pass);
  $baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
  echo $e->getMessage();exit;
}

 ?>
