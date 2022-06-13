<?php

    $name = 'images';
    if (!is_dir($name)){
        mkdir($name);
        echo "Diretório criado com sucesso";
    } else {
        // rmdir($name); remove o diretorio
        echo "Diretório já existe. Removido com sucesso!";
    }