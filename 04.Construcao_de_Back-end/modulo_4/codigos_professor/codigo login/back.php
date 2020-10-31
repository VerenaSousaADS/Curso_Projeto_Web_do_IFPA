<?php
    $op = $_GET['op'];
    if($op == "cad"){
        session_start();
        $nome = $_POST['campo_nome'];
        $cpf = $_POST['campo_cpf'];
        $login = $_POST['campo_login'];
        $senha = $_POST['campo_senha'];
        $sql = "INSERT INTO usuarios(nome,cpf,login,senha)VALUES('$nome','$cpf','$login','$senha')";
        include "conexao.php";
        if(mysqli_query($con,$sql)){
            echo "ok";
        }else{
            echo "erro";
        }
    }else if($op == "log"){
        session_start();
        $login = $_POST['campo_login'];
        $senha = $_POST['campo_senha'];
        $sql = "SELECT * FROM usuarios WHERE login = '$login'";
        include "conexao.php";
        $resultado = mysqli_query($con,$sql);
        if($usuario = mysqli_fetch_array($resultado)){
            if($usuario['senha'] == $senha){
                $_SESSION['usuario_id'] = $usuario['id_usuario'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                echo "ok";
            }
        } 
    }else if($op == "sair"){
        session_start();
        session_destroy();
        echo "ok";
    }
?>
