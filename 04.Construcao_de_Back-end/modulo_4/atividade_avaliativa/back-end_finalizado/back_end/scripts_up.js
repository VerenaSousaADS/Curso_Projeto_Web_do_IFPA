// $(document).ready(function(){
//     $('#form_upload').submit(function (e) { 
//         e.preventDefault();
//         $.ajax({
//             type: 'post',
//             url: 'back_upload.php',
//             processData: false,
//             contentType: false,
//             mimeTypes: "multipart/form-data",
//             data: new FormData(this),
//             success: function (response) {
//                 if(response == "ok"){
//                     $('#form_upload').each(function(){
//                         this.reset();
//                     });
//                     alert("A foto foi enviada com sucesso!");
//                 }else{
//                     alert(response);
//                 }
//             }
//         });
//     });


//      $('#conteudo').on('click','#btn_bscFoto',function(e){
//         e.preventDefault();
//         $.ajax({
//             type: 'post',
//             url: 'foto_busca.php',
//             processData: false,
//             contentType: false,
//             mimeTypes: "multipart/form-data",
//             data: "buscar",
//             // dataType: "text",
//             success: function (response) {
//                 $('#tblFoto').html(response);
//             }
//         });
//     });
// });

// $(document).ready(function(){
//     $('#form_upload').submit(function (e) { 
//         e.preventDefault();
//         $.ajax({
//             type: 'post',
//             url: 'back_upload.php',
//             processData: false,
//             contentType: false,
//             mimeTypes: "multipart/form-data",
//             data: new FormData(this),
//             success: function (response) {
//                 if(response == "ok"){
//                     $('#form_upload').each(function(){
//                         this.reset();
//                     });
//                     alert("A foto foi enviada com sucesso!");
//                 }else{
//                     alert(response);
//                 }
//             }
//         });
//     });
// });

$(document).ready(function(){
    $('#form_upload').submit(function(e){ 
        e.preventDefault();
        $.ajax({
            type:'post',
            url:'back_upload.php',
            processData:false,
            contentType:false,
            mimeTypes:"multipart/form-data",
            data: new FormData(this),
            success: function (response) {
                if(response == "ok"){
                    $('#form_upload').each(function(){
                        this.reset();
                    });
                    alert("A foto foi enviada com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

        $('#conteudo').on('click','#btn_bscFoto',function(e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'foto_busca.php',
            processData: false,
            contentType: false,
            mimeTypes: "multipart/form-data",
            data: "buscar",
            // dataType: "text",
            success: function (response) {
                $('#tblFoto').html(response);
            }
        });
    });
});
