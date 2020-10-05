<?php

/*
Atividade Avaliativa - Unidade I

Automatize o trava língua "A vaca malhada foi molhada por outra vaca molhada e malhada.", de modo que uma variável, criada por você, possa substituir uma ou mais palavras do texto e em seguida exiba o resultado utilizando as variáveis criadas. OBS. Utilize a letra "'p' + número" para criar o nome da variável, exemplo p1,p2,p3,p4,p5,p6,p7, ... , pN

*/


/*$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
*/

/*$p1 = 'esteira';
$p2 = 'comida';
$p3 = 'ótimo';
$p4 = 'galinha'

$input = array($p1, $p2, $p3, $p4);
$rand_keys = array_rand($input, 4);
echo "A vaca malhada foi" . $input[$rand_keys [0]] . $input[$rand_keys[1]] . "molhada"*/
$trava = "<br>A vaca malhada foi molhada por outra vaca molhada e malhada. <br>";



//Declaração de variável global

$trava = "<br>A vaca malhada foi molhada por outra vaca molhada e malhada. <br>";

//Declaração de função

function travalingua($p1 = "cappuccino" , $p2 = "otimo" , $p3 = "difícil")
{
    return "A vaca $p2 foi $p1 por $p3 vaca $p2 e $p1.<br>";
}

//Impressão de resultados

echo($trava);
echo travalingua();
echo travalingua(null);


?>