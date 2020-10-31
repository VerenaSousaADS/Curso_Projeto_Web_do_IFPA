<?php
    $sql = "SELECT * FROM imagem";
    include "conexao.php";
    $resposta = "";
    if ($resultado = mysqli_query($con, $sql)) {
        while ($lh = mysqli_fetch_assoc($resultado)) {
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_imagem']."</td>";
            $resposta .= "<td>".$lh['nome']."</td>";
            $resposta .= "<td>".$lh['descricao']."</td>";
            $resposta .= "<td>".$lh['endereco']."</td>";
            
            $resposta .= "</tr>";
        }
        mysqli_close($con);
        echo $resposta;
     }else{
        mysqli_close($con);
        echo "Erro: " . sql. "<br>". mysqli_error($con);
     }

?>