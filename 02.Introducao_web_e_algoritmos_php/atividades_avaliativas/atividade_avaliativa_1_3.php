<?php
/*
Atividade Avaliativa - Unidade I 

3) Escreva um algoritmo para calcular e mostrar área de uma "pizza redonda" que possui um raio (r) de 3 cm. Sabe-se que a área do circulo é calculada pela fórmula: Área = pi * r², onde pi=3,14;

*/

//Declaração das variáveis

$pi = 3.14;
$raio = 3;
$area_da_pizza = 0;

//Processamento e impressão do reultado

$area_da_pizza = $pi * (pow(3, 2));
echo "Area da pizza redonda é $area_da_pizza";


?>