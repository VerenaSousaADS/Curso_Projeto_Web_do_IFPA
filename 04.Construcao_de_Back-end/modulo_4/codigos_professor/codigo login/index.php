<?php
    session_start();
    if(!isset($_SESSION['usuario_id'])){
        header('Location:login.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <style>
        #geral{
            width: 80vw;
            height:94vh;
            margin: 0 auto;
        }
        #banner{
            height: 10vh;
            width: 80vw;
            background-color: yellow;
            float: left;
        }
        #menu{
            height: 80vh;
            width: 15vw;
            background-color: pink;
            float: left;
        }
        #conteudo{
            height: 80vh;
            width: 65vw;
            background-color: red;
            float: left;
        }
        #rodape{
            height: 4vh;
            width: 80vw;
            background-color: green;
            float: left;
        }
        ul{
            list-style: none;
        }
    </style>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <div id="geral">
        <div id="banner"></div>
        <div id="menu">
            <ul>
                <li><a href="#" id="btn_sair"> Sair</a></li>
            </ul>
        </div>
        <div id="conteudo">
        </div>
        <div id="rodape"></div>
    </div>
</body>
</html>
