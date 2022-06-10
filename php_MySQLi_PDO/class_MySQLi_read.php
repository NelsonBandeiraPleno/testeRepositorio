<?php

$conn = new mysqli("localhost", "root", '', 'db_php7');

if ($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY descLogin");

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    print_r($row);
}





