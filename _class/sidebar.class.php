<?php

require_once('menu.class.php');

class Sidebar{

    private $menu;
    private $session;

    function __construct()
    {
        $this->session = $_SESSION[SESSION_NAME];
        $this->menu = new Menu($this->session['parceiro']['par_var_produto']);
    }

    public function show(){
        $html = '<nav class="nav sidebar col-lg-2 justify-content-center|justify-content-end">';
        $html .= '<img src="'.PATH_DEFAULT.'_assets/img/logo_branca.png" class="logo">';
        $html .= $this->user();
        $html .= $this->menu->menuShow();
        $html .= '</nav>';
        echo $html;
    }

    private function user(){
        $html = '<div class="box_user">';
        $html .= '<div class="foto_user" style="background-image:url('.PATH_DEFAULT.'/'.$this->session['usu_var_foto'].')"></div>';
        $html .= '<div class="nome_user">';
        $saudacao = ($this->session['usu_cha_sexo'] == 'M')? 'Bem vindo,': 'Bem vinda,' ;
        $html .= '<small>'.$saudacao.'</small>' . $this->session['usu_var_nome'];
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<small class="item_ultimo_acesso">Último acesso: '.$this->session['usu_dti_acesso'].'</small>';    
        return $html;
    }

}