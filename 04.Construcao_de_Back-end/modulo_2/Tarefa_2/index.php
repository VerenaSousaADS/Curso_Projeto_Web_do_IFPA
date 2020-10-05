<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">

    <style>

        .class {

            font-family: 'Permanent Marker', cursive;
            text-align: center;
            font-weight: lighter;
            font-size:70px;
            color:rgb(248,248,255);
        
            
        }  

        ul{

            list-style:none;

            font-family: 'PT Sans Caption', sans-serif;
        }

        a{

            text-decoration:none;

            font-size:24px;

            color:black;

        }

        a:hover{color:hotpink;}

        a:visited{color:white;}

        a:visited:hover {color:hotpink;}

    </style>

    <title>PETSHOP</title>

</head>

<body>

    <div style="width:80vw;height:98vh;margin: auto auto;">

        <div style="width:80vw;height:20vh;border-radius: 15px 15px 0px 0px;background-color:rgb(90,48,141);float:left">

            <h1 class=class>PETSHOP</h1>

        </div>

        <div style="width:15vw;height:70vh;background-color:rgb(242,71,131);float:left">

            <ul>

                <li><a href="index.php?p=cc">Cadastrar cliente</a></li>

                <li><a href="index.php?p=vc">Ver clientes</a></li>

                <li><a href="index.php?p=cf">Cadastrar funcionário</a></li>

                <li><a href="index.php?p=vf">Ver funcionários</a></li>

                <li><a href="index.php?p=ca">Cadastrar animal</a></li>

                <li><a href="index.php?p=va">Ver animais</a></li>

                <li><a href="index.php?p=rv">Realizar venda</a></li>

                <li><a href="index.php?p=vv">Ver vendas</a></li>

            </ul>

        </div>

        <div style="width:65vw;height:70vh;background-color:rgb(144,238,144);float:right">

            <?php

                if(isset($_GET['p'])){

                    $pagina = $_GET['p'];

                }else{

                    $pagina = 'cc';

                }

                if($pagina == 'cc'){

                    include "cliente_form.html";

                }elseif($pagina == 'vc'){

                    include "cliente_ver.php";

                }elseif($pagina == 'cf'){

                    include "funcionario_form.html";

                }elseif($pagina == 'vf'){

                    include "funcionario_ver.php";

                }elseif($pagina == 'ca'){

                    include "animal_form.html";

                }elseif($pagina == 'va'){

                    include "animal_ver.php";

                }elseif($pagina == 'rv'){

                    include "venda_form.php";

                }elseif($pagina == 'vv'){

                    include "venda_ver.php";

                }

            ?>

        </div>

        <div style="width:80vw;height:8vh;background-color:rgb(147,112,219);border-radius: 0px 0px 15px 15px;float:right">



        </div>

    </div>

</body>

</html>