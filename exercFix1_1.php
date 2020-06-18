<?php

/*1) Transcreva em linguagem de programação as seguintes expressões e exiba os resultados (crie o número de variáveis que achar necessário):

a) (A + B)*C;

b) (A * B) / 2;

c) (A * ( 64 - B / C ));*/

$a = 10;
$b = 5;
$c = 2;

$resultado = 0;

$resultado = ($a + $b) * $c;
echo "Resposta a): " . $resultado . "<br>";

$resultado = ($a * $b) / 2;
echo "Resposta b): " . $resultado . "<br>";

$resultado = ($a * (64 - $b / $c));
echo "Resposta c): " . $resultado . "<br>";

?>