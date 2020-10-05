<?php

/*
Atividade Avaliativa - Unidade I

7) Escreva um algoritmo para calcular e mostrar O preço total de um automóvel, sabendo que valor total do veículo é calculado pela soma do preço de fábrica (R$ 18.000, 00) com o preço dos impostos (45% do preço de fábrica) e a percentagem do revendedor (28% do preço de fábrica);

*/

//Declaração das variáveis

$preco_fabrica = 18000;
$percentagem_impostos = 0.45;
$percentagem_revendedor = 0.28;
$preco_total = 0;

//Processamento

$preco_total = $preco_fabrica + ($preco_fabrica * $percentagem_impostos) + ($preco_fabrica * $percentagem_revendedor);

//Impressão

echo "O valor total do automóvel é de R$ $preco_total";





?>