<?php
//PDO (PHP Data Object)
$dsn = 'sqlsrv:Database=db_php7;';
$CONN =  new PDO("$dsn", '', '');
//$conn =  new PDO("sqlsrv:Database=db_php7;server=localhost\DESKTOP-VTCOT2F;ConnectionPooling=0");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY descLogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){
    foreach ($row as $key => $value) {
        echo "$key => $value"."<br/>";
    }
    echo "===================<br/>";
}




