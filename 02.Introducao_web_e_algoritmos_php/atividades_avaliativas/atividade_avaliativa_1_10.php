<?php

/*

Atividade Avaliativa - Unidade I

10) Escreva um algoritmo para calcular e mostrar o valor de total de divida do cliente, sabendo que está 4 prestações atrasadas e o valor de cada prestação é R$ 56,70 com taxa de 6% por prestação. Utilize a fórmula: DIVIDA = PRESTAÇÃO + (PRESTAÇÃO * (TAXA / 100) * TEMPO)


*/

$prestacao = 56.70;
$taxa = 6;
$tempo = 4;
$divida = 0;
$total_divida =0;

$divida = $prestacao + ($prestacao * ($taxa / 100) * $tempo);
$total_divida = $divida * $tempo;
echo "A divida total deste cliente é de $total_divida";


?>