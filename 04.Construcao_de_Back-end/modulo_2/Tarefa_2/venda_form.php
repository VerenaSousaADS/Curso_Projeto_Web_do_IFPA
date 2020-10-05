<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
<style>

    .func {

        font-family: 'PT Sans Caption', sans-serif;
        text-align: left;
        font-weight: lighter;
        font-size:30px;
        justify-content: center;
        align-items: center;
        margin-left: 20%;
        margin-right: 20%;
        width: 6em;
       
    } 

    .itns{
    
        margin-left: 20%;
        margin-right: 20%;
        width: 6em;
        font-family: 'PT Sans Caption', sans-serif;
        text-align: left;
        font-weight: lighter;
        font-size:24px;

    }

    .sv{
        margin-left: 0;
        margin-right: 0;
        width: 6em;
        font-family: 'PT Sans Caption', sans-serif;
        text-align: left;
        font-weight: lighter;
        font-size:15px;  

    }

</style>

<div>

    <h1 class="func">INSERIR VENDA</h1>

    <form action="ins_venda.php" method="post" class="itns">

        <table>

            <tr>

                <td>Cliente: </td><td><input required placeholder="Ex.: 0" type="text" name="campo_cliente" id="cmpClt"></td>

            </tr>

            <tr>

                <td>Funcionario: </td><td><input required placeholder="Ex.: 0" type="text" name="campo_funcionario" id="cmpFnc"></td>

            </tr>

            <tr>

                <td>Animal: </td><td><input required placeholder="Ex.: 0" type="text" name="campo_animal" id="cmpAnm"></td>

            </tr>

            <tr>

                <td>Data da Venda: </td><td><input required placeholder="Ex.: yyyy-mm-dd" type="text" name="campo_venda" id="cmpVnd"></td>

            </tr>

            <tr>

                <td>Preço: </td><td><input required placeholder="Ex.: 260.00" type="text" name="campo_preco" id="cmpPrc"></td>

            </tr>


            <tr>

                <td><input class="sv" type="submit" value="SALVAR"></td><td></td>

            </tr>

        </table>

    </form>

</div>