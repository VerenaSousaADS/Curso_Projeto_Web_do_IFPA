<?php
    session_start();
    $nome = $_SESSION['usuario'];
    echo "Bom dia sr. ".$nome;
?>