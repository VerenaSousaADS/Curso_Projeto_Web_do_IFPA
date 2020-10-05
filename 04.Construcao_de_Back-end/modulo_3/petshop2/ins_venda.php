<?php

    if(isset($_POST['campo_venda'])){

        $cliente = $_POST['campo_cliente'];
        $funcionario = $_POST['campo_funcionario'];
        $animal = $_POST['campo_animal'];
        $venda = $_POST['campo_venda'];
        $preco = $_POST['campo_preco'];

        $sql = "INSERT INTO vendas(cliente,funcionario,animal,data_venda,preco)VALUES('$cliente','$funcionario','$animal','$venda','$preco')";

        include "conexao.php";

        if (mysqli_query($con, $sql)) {
            //header("Location:index.php?p=cc");
            echo "ok";
        }else{
            echo "Erro: " . $sql . "<br>";
            
            //mysqli_error($con);
        }
        mysqli_close($con);
    }else{
        echo "erro";
    }

?>