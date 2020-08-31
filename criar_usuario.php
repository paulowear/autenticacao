<?php

// cria ususário

include "conexao.php";

$nome = "Paulo Henrique";
$email = "paulowear@email.com";
$senha = password_hash("123456", PASSWORD_DEFAULT);
$token = md5(uniqid());

$sql = "insert into usuarios (nome, email, senha, token) values (:nome, :email, :senha, :token);";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":token", $token);
$stmt->execute();