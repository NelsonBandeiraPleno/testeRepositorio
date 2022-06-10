<?php
//PDO (PHP Data Object)
$conn =  new PDO("mysql:dbname=db_php7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY descLogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){
    foreach ($row as $key => $value) {
        echo "$key => $value"."<br/>";
    }
    echo "===================<br/>";
}




