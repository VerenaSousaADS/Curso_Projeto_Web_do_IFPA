<?php
    $sql = "SELECT * FROM animais";
    include "conexao.php";
    $resposta = "";
    if ($resultado = mysqli_query($con, $sql)) {
        while ($lh = mysqli_fetch_assoc($resultado)) {
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_animal']."</td>";
            $resposta .= "<td>".$lh['especie']."</td>";
            $resposta .= "<td>".$lh['sexo']."</td>";
            $resposta .= "<td>".$lh['data_nascimento']."</td>";
            $resposta .= "<td>".$lh['descricao']."</td>";
            $resposta .= "<td>".$lh['preco']."</td>";
            $resposta .= "</tr>";
        }
        mysqli_close($con);
        echo $resposta;
     }else{
        mysqli_close($con);
        echo "Erro: " . sql. "<br>". mysqli_error($con);
     }

?>