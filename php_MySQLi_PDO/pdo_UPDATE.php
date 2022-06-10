<?php
//PDO (PHP Data Object)
$conn =  new PDO("mysql:dbname=db_php7;host=localhost", "root", "");

$login = 'gordao1';
$password = 'abacate1';
$id = '4';

$stmt = $conn->prepare("UPDATE tb_usuarios SET descLogin = :LOGIN, desSenha = :PASSWORD WHERE idUsuario = :ID");
$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Valores atualizados com sucesso";





