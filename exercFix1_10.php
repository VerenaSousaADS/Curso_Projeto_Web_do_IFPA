<?php


/*

Unidade I - Exercícios de Fixação


10) Preencher os campos destacados no texto abaixo, utilizando variáveis ao invés de incluir a resposta (texto) diretamente. No final, exiba o resultado.

"Belém/PA, 08 de <<preencher com variável >> de 2020.

<<preencher com variável - quebra de linha>>

Avisamos aos alunos que as aulas devem iniciar no próximo dia 08 de <<preencher com variável>> (segunda-feira). Ao longo desta semana, serão enviados e-mails aos alunos com instruções para os próximos passos do curso. Quem não receber essa mensagem até o dia 22 de <<preencher com variável>> (quarta-feira), por favor entrar em contato conosco, por meio do endereço eletrônico <<preencher com variável>>. 

<<preencher com variável - quebra de linha>>

<<preencher com variável - quebra de linha>>

Atenciosamente,

<<preencher com variável - quebra de linha>>

Kleverton <<preencher com variável>>".*/


$mes = 'junho';
$quebraLinha = "<br>";
$email = "kleverton.cordovil@ifpa.edu.br";
$sobrenome = 'Cordovil';

echo "Belém/PA, 08 de $mes de 2020.
$quebraLinha
	Avisamos aos alunos que as aulas devem iniciar no próximo dia 08 de $mes (segunda-feira). Ao longo desta semana, serão enviados e-mails aos alunos com instruções para os próximos passos do curso. Quem não receber essa mensagem até o dia 22 de $mes (quarta-feira), por favor entrar em contato conosco, por meio do endereço eletrônico $email. 

$quebraLinha

$quebraLinha

Atenciosamente,

$quebraLinha 

Kleverton $sobrenome";


?>