<?php

/*
Unidade I - Exercícios de Fixação

6) Qual é a distância máxima que um carro alcança com R$ 20,00 de gasolina sabendo que o litro de gasolina custa R$ 3,79 e que esse carro tem um consumo médio de 10,9 km/l? Faça um algoritmo que calcule e mostre o resultado.

*/

$dist1L = 10.90;
$tanq = 20.00;
$precLit = 3.79;
$distMax = 0;

$distMax = ($dist1L * $tanq) / $precLit;
echo "A distância máxima que este carro alcança com R$ 20,00 reais de gasolina é de " . " " . $distMax . "km";



?>