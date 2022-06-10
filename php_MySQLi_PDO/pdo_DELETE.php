<?php
//PDO (PHP Data Object)
$conn =  new PDO("mysql:dbname=db_php7;host=localhost", "root", "");

$id = '4';

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = :ID");
$stmt->bindParam(":ID", $id);


$stmt->execute();

echo "Valores DELETADOS com sucesso";





