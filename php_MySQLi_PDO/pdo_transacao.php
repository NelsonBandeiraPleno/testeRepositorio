<?php
static $c = 1;

//PDO (PHP Data Object)
$conn =  new PDO("mysql:dbname=db_php7;host=localhost", "root", "");

$id = 5;

$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = ?");


$stmt->execute(array($id));
$conn->commit();

echo "COMMIT OK";
$c += 1;





