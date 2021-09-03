<?php

$config = require_once("config.php");

    try{
        $conn = new PDO("mysql:host={$config['host']};db={$config['uzytkownicy']};charset=utf8", $config['user'], $config['password'],
        [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }catch(PDOException $error){
        exit('Database error');
    }
?>