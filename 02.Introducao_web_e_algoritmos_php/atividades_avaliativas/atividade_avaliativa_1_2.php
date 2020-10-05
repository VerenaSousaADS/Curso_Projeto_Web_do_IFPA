<?php

/*
Atividade Avaliativa - Unidade I 

2) Escreva um algoritmo para calcular e mostrar a área de um trapézio. Sabe-se que a área do trapézio é calculada pela fórmula: A = ((base maior + base menor) * altura) / 2.
*/

//Declaração das variáveis

$base_menor = 7;
$base_maior = 15;
$altura = 18;
$area = 0;

//Processamento e impressão

$area = (($base_maior + $base_menor) * $altura) / 2;
echo "Area do trapézio de base menor = 7 cm, base maior = 15 cm e altura = 18 cm, é igual a $area cm ";


?>