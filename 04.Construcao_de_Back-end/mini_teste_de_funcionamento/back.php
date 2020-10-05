<?php
    session_start();
    if(isset($_POST['campo_nome'])){
        $nome = $_POST['campo_nome'];
        $_SESSION['usuario'] = $nome;
        $sexo = $_POST['campo_sexo'];
        if($sexo == 'm'){
            header("Location:primeira.php");
        }elseif($sexo == 'f'){
            header("Location:segunda.php");
        }else{
            echo "pagina inexistente";
        }
    }else{
        echo "erro";
    }
?>