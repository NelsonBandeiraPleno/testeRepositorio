<?php

    $nome = "Nelson";

    function test(){
        global $nome;
        echo $nome."<br>";
    }

    function test2(){
        $nome = 'João';
        echo $nome." agora <br>";
    }

    test();
    test2();

?>