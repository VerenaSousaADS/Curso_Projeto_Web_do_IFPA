<?php
    $extencoes_validas = array('jpeg', 'jpg', 'png', 'gif', 'bmp');
    $endereco = 'uploads/';
    if(!empty($_POST['campo_nome']) || !empty($_POST['campo_descricao']) || $_FILES['campo_foto']){
        $img = $_FILES['campo_foto']['name'];
        $tmp = $_FILES['campo_foto']['tmp_name'];
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $imagem_final = rand(1000,1000000).$img;
        if(in_array($ext, $extencoes_validas)){ 
            $endereco = $endereco.strtolower($imagem_final); 
            if(move_uploaded_file($tmp,$endereco)){
                $nome = $_POST['campo_nome'];
                $descricao = $_POST['campo_descricao'];
                include 'conexao.php';
                $sql = "INSERT INTO imagem(nome,descricao,endereco)VALUES('$nome','$descricao','$endereco')";
                if(mysqli_query($con,$sql)){
                    echo "ok";
                }else{
                     // echo "erro";
                     echo "Erro: " . sql. "<br>". mysqli_error($con);
                }
            }
        }
    }  
?>
