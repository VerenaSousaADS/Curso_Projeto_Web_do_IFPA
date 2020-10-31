$(document).ready(function(){

    $('#form_cadastro').submit(function (e) { 
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "back.php?op=cad",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    alert("O Usuario foi inserido com sucesso!");
                    window.location.href = "login.html";
                }else{
                    alert(response);
                }
            }
        });
    });
    $('#form_login').submit(function (e) { 
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "back.php?op=log",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    window.location.href = "index.php";
                }else{
                    alert("login ou senha inválidos");
                }
            }
        });
    });
    $('#btn_sair').click(function (e) { 
        $.ajax({
            type: "post",
            url: "back.php?op=sair",
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    window.location.href = "index.php";
                }
            }
        });
    });
});
