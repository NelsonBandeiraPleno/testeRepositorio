<?php

$data = array(
        'nome' => "Jones",
    'sobrenome' => "Gordinho"

);
setcookie("NOME_DO_COOKIE", json_encode($data), time() + (60*60*24));//quantidade de segundos (60s x 60min x 24h =  1 dia)

?>
<h1>Final da execução</h1>
