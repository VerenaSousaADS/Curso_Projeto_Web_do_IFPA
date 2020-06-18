<?php

/*
Atividade Avaliativa - Unidade I

5) Considerando que uma fábrica de camisetas produz os tamanhos pequeno, médio e grande, cada uma sendo vendida respectivamente por 10, 12,50 e 15,20 reais. Construa um algoritmo para calcular e mostrar o valor arrecadado com uma venda de camisetas, sendo 8 pequenas, 11 médias e 3 grandes;
*/


//Declaração das variáveis

$vlr_grande = 15.20;
$vlr_medio = 12.50;
$vlr_pequeno = 10;
$total_venda = 0;


//Processamento

$total_venda = ($vlr_pequeno * 8) + ($vlr_medio * 11) + ($vlr_grande * 3);
echo "O valor total arrecadado com a venda foi de $total_venda";


?>