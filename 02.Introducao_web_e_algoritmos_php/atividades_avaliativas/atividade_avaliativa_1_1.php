<?php

/*
Atividade Avaliativa - Unidade I



1)Faça um algoritmo que calcule e mostre o resultado da multiplicação do número 8 com os números 1,5,8. Observação: Inserir quebra de linha após cada resultado;

*/


//Declaração da função multiplicacao e os parâmetros $num_1 e $num_2

function multiplicacao($num_1,$num_2){
 
  $total = $num_1 * $num_2;
 
  return $total;
 
}
 
//definindo os valores para as variáveis junto com a impressão de resultados

echo "O resultado de 8x1 é igual a ";
echo multiplicacao(8,1); 

echo "<br> O resultado de 8x5 é igual a ";
echo multiplicacao(8,5);

echo "<br> O resultado de 8x8 é igual a ";
echo multiplicacao(8,8);


?>