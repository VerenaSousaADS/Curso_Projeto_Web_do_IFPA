<?php

/*

Unidade I - Exercícios de Fixação

7) Faça um algoritmo que calcule e mostre a idade de uma pessoa em anos e meses, a partir do ano atual e o ano de nascimento informado.

*/
$anoAtual = 2020;
$dataNascimento = 1995;
$idadeAno = 0;
$idadeMes = 0;

$idadeAno = $anoAtual - $dataNascimento;
$idadeMes = $idadeAno * 12;

echo "A pessoa tem $idadeAno anos e em meses $idadeMes.";


?>