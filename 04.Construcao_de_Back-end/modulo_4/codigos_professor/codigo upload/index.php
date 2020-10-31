
<!DOCTYPE html>
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
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
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
</html>

