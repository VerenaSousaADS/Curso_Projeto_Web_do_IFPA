$(document).ready(function(){

    $('#conteudo').on('submit','#formCliente',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_cliente.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formCliente').each(function(){
                        this.reset();
                    });
                    alert("O Cliente foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('click','#btn_bscCliente',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_cliente.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblCliente').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNm',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "cliente_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpNm').html(response);
            }
        });
    });

});