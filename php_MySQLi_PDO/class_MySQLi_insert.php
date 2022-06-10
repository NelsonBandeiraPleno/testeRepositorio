<?php

$conn = new mysqli("localhost", "root", '', 'db_php7');

if ($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (descLogin, desSenha) VALUES (?, ?)");
$pss = "123456";
$user = "user";
$stmt->bind_param("ss", $user, $pss);

$stmt->execute();




