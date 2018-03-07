<?php
session_start();
$acao = $_POST['acao'];


    switch ($acao) {
        case 'login':
        $usu_var_email = $_POST['usu_var_email'];
        $usu_var_senha = $_POST['usu_var_senha'];

                $usuario = [
                    'usu_var_nome' => 'Nome do usuário',
                    'usu_cha_sexo' => 'M',
                    'usu_dti_acesso' => date('d/m/Y H:i'),
                    'usu_cha_nivelacesso' => 'P',
                    'usu_var_foto' => '_assets/img/img_user.jpg'
                ];
                $_SESSION['pp_super_credito'] = $usuario;
                echo json_encode($usuario);

            break;

            case 'goto':
            $_SESSION['pp_super_credito']['parceiro'] = [
                    'par_var_nome' => 'Nome do parceiro',
                    'par_var_produto' => $_POST['par_var_produto'],
                    'par_var_produto_formatado' => 'Consultoria de crédito',
                    'par_var_logo' => '_assets/img/logo_parceira.jpg'
            ];
            echo json_encode(["status" => true]);
            break;
        
        default:
            # code...
            break;
    }
