<?php
const DSN = 'mysql:host=localhost;dbname=wp_crud;port=3306;charset=utf8';
const USR = 'root';
const PASS = '';
try {
    $pdo = new PDO(DSN,USR,PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
#    echo "OK!";
}catch (PDOException   $exception){
    echo "Oops Something Wrong !".$exception->getMessage();
    exit();
}