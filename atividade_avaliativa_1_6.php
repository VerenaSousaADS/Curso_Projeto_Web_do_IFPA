<?php

/*Atividade Avaliativa - Unidade I

6)Escreva um algoritmo para calcular e mostrar o antecessor do número 26;

*/

//Declaração de uma variável global

$n = 26;
//Declaração da função antecessor e os parâmetro $n

function antecessor($n){
 
  global $n;

  $antecessor = $n - 1;
 
  return $antecessor;
 
}
 



//definindo os valores para a variável junto com a impressão de resultados

echo "O antecessor de $n é ";
echo antecessor($n); 


?>