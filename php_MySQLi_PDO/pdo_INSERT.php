<?php
//PDO (PHP Data Object)
$conn =  new PDO("mysql:dbname=db_php7;host=localhost", "root", "");

$login = 'gordao';
$password = 'abacate';

$stmt = $conn->prepare("INSERT INTO tb_usuarios (descLogin, desSenha) VALUES (:LOGIN, :PASSWORD)");
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();

echo "Valores inseridos com sucesso";





