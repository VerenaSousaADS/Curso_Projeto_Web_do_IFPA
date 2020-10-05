<?php

if (isset($_POST['campo_especie'])) {
    $especie = $_POST['campo_especie'];

    $sexo = $_POST['campo_sexo'];

    $data_nascimento = $_POST['campo_nascimento'];

    $descricao = $_POST['campo_descricao'];

    $preco = $_POST['campo_preco'];

    $sql = "INSERT INTO  animais(especie,sexo,data_nascimento,descricao,preco) VALUES('$especie','$sexo','$data_nascimento', '$descricao','$preco')";

    include "conexao.php";

    if (mysqli_query($con,$sql)) {
        echo "ok";
    }else{

        echo "Erro: ".$sql. "<br>". mysqli_error($con);
    }

    }else{

        echo "erro";

    }

?>