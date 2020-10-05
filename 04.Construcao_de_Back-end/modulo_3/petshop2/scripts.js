//A parte dos clientes

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
                    alert("Cliente inserido com sucesso!");
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
            url: "cliente_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblCliente').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNm',function (e) {
        e.preventDefault();

        $.ajax({
            type:"post",
            url:"cliente_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpNm').html(response);
                
            }
        });
    });
});

// A parte dos funcionários

$(document).ready(function(){

    $('#conteudo').on('submit','#formFuncionario',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_funcionario.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formFuncionario').each(function(){
                        this.reset();
                    });
                    alert("Funcionario inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscFuncionarios',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "funcionario_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblFuncionarios').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpFnc',function (e) {
        e.preventDefault();
        $.ajax({
            type:"post",
            url:"funcionario_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpFnc').html(response);
                
            }
        });
    });
});



// A parte dos animais

$(document).ready(function(){

    $('#conteudo').on('submit','#formAnimal',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_animal.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formAnimal').each(function(){
                        this.reset();
                    });
                    alert("Animal inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscAnimais',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "animal_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblAnimais').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpAnm',function (e) {
        e.preventDefault();
        $.ajax({
            type:"post",
            url:"animal_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpAnm').html(response);
                
            }
        });
    });
});

// A parte das vendas 


$(document).ready(function(){

    $('#conteudo').on('submit','#formVenda',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_venda.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formVenda').each(function(){
                        this.reset();
                    });
                    alert("Venda inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscVenda',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "venda_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblVenda').html(response);
            }
        });
    });

});