<?php
session_start();
$nome = $_SESSION['animal'];
$cor = $_SESSION['Ccor'];
echo $nome . " o cachorro " . $cor; 

?>