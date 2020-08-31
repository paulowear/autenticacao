<?php

// conexão com o banco de dados mysql

try {
    $conn = new PDO("mysql:host=localhost;dbname=php_autenticacao", "root", "");
    $conn->exec("SET NAMES utf8");
} catch(PDOException $e) {
    echo $e->getMessage();
    exit;
}
