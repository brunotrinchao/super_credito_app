$(document).ready(function(){
    // login
    $('form[name=form_login]').submit(function(e){
        e.preventDefault();
        var dados = $(this).serializeArray();
        console.log(dados);
        jQuery.ajax({
            type: "POST",
            url: '_inc/_temp.php',
            data: dados,
            dataType: 'json',
            async: true,
            beforeSend: function() {
            },
            error: function(error, payload, msg) {
                console.log(error);
            },
            success: function(json) {
                console.log(json);
                $('.box_usuario strong').text(json.usu_var_nome);
                $('form[name=form_login]').fadeOut(400, function(){
                    $('body').attr('id', 'box_logado');
                    
                });
            }
        });
        $('#banner h1').animate({
            marginTop: -10,
            opacity: 0
          }, 500, "linear", function() {
            $(this).html('Selecione um produto <i></i>').delay(300).animate({
                marginTop: -70,
                opacity: 1
              }, 500, "linear");
          });
    });
    // logout
    $('.box_usuario a').click(function(e){
        e.preventDefault();
        $('.box_usuario').fadeOut(400, function(){
            $('body').removeAttr('id');  
            $('form[name=form_login]').fadeIn(400);        
        });
        $('#banner h1').animate({
            opacity: 0
          }, 500, "linear", function() {
            $(this).html('Seja bem vindo ao portal do parceiro').delay(300).animate({
                opacity: 1
              }, 500, "linear");
          });
    });

    // Click produto
    $('.btn_produto').click(function(e){
        e.preventDefault();
        var pro_var_nome = $(this).attr('rel');
        if($('body#box_logado').length > 0){
            console.log(pro_var_nome);
            $('form[name=goto] input[name=par_var_produto]').val(pro_var_nome);
            $('form[name=goto]').submit();
        }else{
            swal("Atenção", "Para acessar os produtos por favor efetue o login.", "warning")
            .then((value) => {
                $('#usu_var_email').focus();
            });
        }
    });

    $('form[name=goto]').submit(function(e){
        e.preventDefault();
        var dados = $(this).serializeArray();
        console.log(dados);
        jQuery.ajax({
            type: "POST",
            url: '_inc/_temp.php',
            data: dados,
            dataType: 'json',
            async: true,
            beforeSend: function() {
            },
            error: function(error, payload, msg) {
                console.log(error);
            },
            success: function(json) {
                console.log(json);
                window.location = "./pag/dashboard";
            }
        });
    });
});