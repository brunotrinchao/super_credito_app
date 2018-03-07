<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="_assets/css/geral.min.css" rel="stylesheet">
    <!-- SCRIPTS -->
    <script src="_assets/js/jquery-1.12.4.min.js"></script>
    <script src="_assets/_helper/gDisplay.js"></script>
    <script src="_assets/_helper/gAjax.js"></script>
    <script src="_assets/plugins/sweetalert.min.js"></script>
    <script src="_assets/js/script.js"></script>
</head>

<body>
    <div id="banner">
        <h1 class="titulo_banner">Seja bem vindo ao portal do parceiro</h1>
        <div class="container">
            <div class="topo">
                <img src="./_assets/img/logo_branca.png" class="logo">
                <div class="box_login">
                    <form name="form_login">
                        <input type="hidden" name="acao" value="login">
                        <div class="input_group">
                            <label>Login</label>
                            <input type="text" id="usu_var_email" name="usu_var_email" require autocomplete="off">
                        </div>
                        <div class="input_group">
                            <label>Senha</label>
                            <input type="password" id="usu_var_senha" name="usu_var_senha" require autocomplete="off">
                            <a href="#">Esqueci a senha</a>
                        </div>
                        <div class="input_group input_group_button">
                            <button type="submit">OK</button>
                        </div>
                    </form>
                    <div class="box_usuario">
                        <h3>Ola, <strong>fulano de tal</strong></h3>
                        <a href="#">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="menu">
        <div class="row">
            <div class="col"><a href="#" rel="IMOVEIS" class="btn btn_imovel btn_produto"><h2>Imóvel</h2></a></div>
            <div class="col"><a href="#" rel="OI" class="btn btn_oi btn_produto"><h2>Oi</h2></a></div>
            <div class="col"><a href="#" rel="FINANCIAMENTO" class="btn btn_financiamento btn_produto"><h2>Financiamento</h2></a></div>
            <div class="col"><a href="#" rel="CONSULTORIA" class="btn btn_consultoria btn_produto"><h2>Consultoria de crédito</h2></a></div>
        </div>
    </div>
    <form name="goto">
        <input type="hidden" name="acao" value="goto">
        <input type="hidden" name="par_var_produto">
        <input type="hidden" name="par_var_produto">
    </form>
    <div id="footer">
        <p>Supercredito - Todos os direitos reservados 2018</p>
    </div>
</body>

</html>