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
        background-color:rgba(255,190,190);
        border-radius: 7px 7px 7px 7px;
        color:rgb(90,48,141);
    }

</style>

<div>

    <h1 class="func">INSERIR VENDA</h1>

    <form id="formVenda" method="post" class="itns">

        <table>
            <tr>
                <td>Cliente: </td>
                <td>
                    <select name="campo_cliente" id="cmpNm">
                        <option required  value="#">Selecione...</option>
                    </select>
                </td>
                
            </tr>

            <tr>

                <td>Funcionario: </td>
                <td>
                    <select name="campo_funcionario" id="cmpFnc">
                        <option required  value="#">Selecione...</option>
                    </select>
                </td>
            </tr>

            <tr>

                <td>Animal: </td>
                <td>
                    <select required  name="campo_animal" id="cmpAnm">
                        <option  value="#">Selecione...</option>
                    </select>   
                </td>
                
                

            </tr>

            <tr>

                <td>Data da Venda: </td><td><input required  type="date" name="campo_venda" id="cmpVnd"></td>

            </tr>

            <tr>

                <td>Preço: </td><td><input required placeholder="Ex.: 260.00" type="text" name="campo_preco" id="cmpPrc"></td>

            </tr>

        </table>

        <input class="sv" type="submit" value="Salvar">

    </form>

</div>