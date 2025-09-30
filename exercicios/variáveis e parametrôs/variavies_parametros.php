<?php
    //para declarar variáveis no PHP, usamos o símbolo de $ (cifrão) antes de nomear a variável, e para aribuirmos os valores, usamos o = (sinal de igual)
    $nome = "Marcus Vinicius"; //variavél do tipo: string (texto)
    $idade = 20; //variável do tipo: int (número inteiro)
    $altura = 1.85; //variável do tipo: float (número com ponto flutuante ou números reais)
    $fumante = false; //variável do tipo: boolean (true ou false - verdadeiro ou falso)

    //Parâmetros são valores que podem ser passados para funções

    function imprimir($nome, $idade, $altura) {
        echo "<h1>Ficha do paciente</h1>";
        echo "<hr>";
        echo "<strong>Nome:</strong> $nome <br>";
        echo "<strong>Idade:</strong> $idade anos <br>";
        echo "<strong>Altura:</strong> $altura m <br>";
    }
    imprimir($nome, $idade, $altura, $fumante);
?>