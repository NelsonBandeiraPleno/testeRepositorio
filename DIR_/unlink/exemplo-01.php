<?php

$file = fopen("teste.txt", "w+");
fclose($file);
sleep(10);
unlink("teste.txt");
echo "arquivo removido com sucesso";
