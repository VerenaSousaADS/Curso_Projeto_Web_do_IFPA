<?php
session_start();
if(isset($_POST['campo_nome'])){
    $nome = $_POST['campo_nome'];
    $_SESSION['animal'] = $nome;
    $especie = $_POST ['campo_especie'];
    if($especie == 'c'){
        header ("Location:paginaCachorro.php");
    }elseif($especie == 'g'){
        header ("Location:paginaGato.php");
    }elseif($especie == 'p'){
        header("Location:paginaPassaro.php");
    }else{
        echo "pagina inexistente";
    }
    $cor = $_POST['campo_cor'];
    $_SESSION['Ccor'] = $cor;
}else{
    echo "erro";
}

?>