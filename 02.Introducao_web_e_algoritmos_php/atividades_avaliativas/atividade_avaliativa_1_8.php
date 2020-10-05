<?php

/*
Atividade Avaliativa - Unidade I

8)Escreva um algoritmo para calcular e mostrar o resultado das quatros operações matemáticas básicas (adição, subtração, multiplicação e divisão), para cada operação utilize as variáveis A e B. OBS. Incluir quebra de linha após cada resultado exibido

*/

	//Declaração das variáveis globais
	$n1 = 5;
	$n2 = 3;


	//Declaração da função multiplicacao 

	function multiplicacao($n1,$n2){
	 
	  global $n1 , $n2; 

	  $total1 = $n1 * $n2;
	 
	  return $total1;
	 
	}


	function divisao($n1,$n2){
	 
	  global $n1 , $n2; 

	  $tota2 = $n1 / $n2;
	 
	  return $tota2;
	 
	}

	function soma($n1,$n2){
	 
	  global $n1 , $n2; 

	  $tota3 = $n1 + $n2;
	 
	  return $tota3;
	 
	}



	function subtracao($n1,$n2){
			 
		global $n1 , $n2; 

		$tota4 = $n1 - $n2;
			 
		return $tota4;
		 
		}


	//Impressão dos resultados 

	echo "O resultado da soma de $n1 por $n2 é  ";
	echo soma($n1,$n2);

	echo "<br><br>O resultado da subtração de $n1 por $n2 é  ";
	echo subtracao($n1,$n2);

	echo "<br><br>O resultado da multiplicação de $n1 por $n2 é  ";
	echo multiplicacao($n1,$n2);

	echo "<br><br>O resultado da divisão de $n1 por $n2 é  ";
	echo divisao($n1,$n2);

?>

