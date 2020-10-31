<!-- 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastro</title>

    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts_up.js"></script>
    <!-- <script src="scripts.js"></script> -->

<!-- </head> -->
<!-- <body> -->
    <!-- <div>  -->
    <!-- <form id="form_upload" action="#" method="post"> -->
            <!-- <div>    
                <h2>INSERIR FOTOS</h2>
                    <div class="row">
                        NOME DA FOTO
                        <input type="text" id="campo_nome" name="campo_nome">
                    </div>

                    <div class="row">
                        DESCRIÇÃO
                        <input type="text" id="campo_descricao" name="campo_descricao">
                    </div>

                    <div class="row-file">
                        FOTO
                        
                        <input type="file" id="campo_foto" name="campo_foto">
                    </div>

                    <div class="row-center">
                        <input type="submit" value="ENVIAR">
                    </div>
            </div> -->

            <!-- <h2>INSERIR FOTOS</h2>

            <input type="text" id="campo_nome" name="campo_nome" placeholder="NOME DA FOTO">

            <input type="text" id="campo_descricao" name="campo_descricao" placeholder="DESCRIÇÃO">

            <input type="file" id="campo_foto" name="campo_foto" placeholder="FOTO">

            <input type="submit" value="ENVIAR"> -->
            

            <!-- <table>
                <tr>
                    <td>Nome da foto</td><td><input type="text" id="campo_nome" name="campo_nome"></td>
                </tr>
                <tr>
                    <td>Descrição</td><td><input type="text" id="campo_descricao" name="campo_descricao"></td>
                </tr>
                <tr>
                    <td>foto</td><td><input type="file" id="campo_foto" name="campo_foto"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="ENVIAR"></td><td></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        #geral{
            width: 30vw;
            height:34vh;
            margin: 0 auto;
            margin-top: 20vh;
            background-color: aqua;
            border-radius: 5px;
        }
        body{
            background-color: gray;
        }
    </style>
</head>
<body>
    <div id="geral">
        <form id="form_upload" action="#" method="post">
            <table>
                <tr>
                    <td>Nome da foto</td><td><input type="text" id="campo_nome" name="campo_nome"></td>
                </tr>
                <tr>
                    <td>Descrição</td><td><input type="text" id="campo_descricao" name="campo_descricao"></td>
                </tr>
                <tr>
                    <td>foto</td><td><input type="file" id="campo_foto" name="campo_foto"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="ENVIAR"></td><td></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html> -->

<style>

.form-box{
    margin-top: 70px;
    width: 500px;
    height: 300px;
    display: flex;
    flex-direction: column;
}
.form-box form{
    width: 100%;
}
    .row{
    font-size: 15px;
    display: flex;
    flex-direction: column;
    border-bottom: 2px solid #1c1c1c;
    margin: 10px 0;
}
.row input{
    font-family: Montserrat;
    margin-left: 5px;
    border: 0;
    outline: 0;
    font-size: 20px;

}
.row-center{
    margin-top: 15px;
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
}
.row-center input{
    font-family: 'Montserrat';
    font-size: 15px;
    padding: 5px 10px;
    background-color: green;
    color: white;
}

.row-file{
    height: 50px;
    font-size: 15px;
    display: flex;
    flex-direction: column;
    border-bottom: 2px solid #1c1c1c;
    justify-content: space-between;
    margin: 15px 0;            
}
</style>
<div>  
    <form id="form_upload" action="#" method="post" class="form-box"> 
            <div>    
                <h2>INSERIR FOTOS</h2>
                    <div class="row">
                        NOME DA FOTO
                        <input type="text" id="campo_nome" name="campo_nome" required>
                    </div>

                    <div class="row">
                        DESCRIÇÃO
                        <input type="text" id="campo_descricao" name="campo_descricao" required>
                    </div>

                    <div class="row-file">
                        FOTO
                        
                        <input type="file" id="campo_foto" name="campo_foto" required>
                    </div>

                    <div class="row-center">
                        <input type="submit" value="ENVIAR">
                    </div>
            </div>

    </form>
</div>   
