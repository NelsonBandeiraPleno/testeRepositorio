<?php

    $nome = "Nelson";
    echo $nome;
    echo "<br>";
    var_dump($nome);
    echo "<br>";
    // Comentário de linha simples
    $anoDeNascimento = 1990;
    echo $anoDeNascimento;
    echo "<br>";
/*
 *Comentário em bloco
 * pode ser escrito em
 * várias linhas
 */
    //apagr variáveis
    unset($anoDeNascimento);
    if (isset($anoDeNascimento)){// isset retorna true se a variável parametro foi deifnida
        echo $anoDeNascimento;
    } else
        echo "ERRO: variável não definida";

//CONCATENAÇÂO
    echo "<br>";
    $nome = "Nelson";
    $sobrenome ="Bandeira";
    $nomeCompleto = $nome.$sobrenome;
    echo $nomeCompleto;
    echo "<br>";
    $nomeCompleto = $nome." ".$sobrenome;//esse " " serve para espaçar as duas variáveis
    echo $nomeCompleto;
    echo "<br>"


?>

