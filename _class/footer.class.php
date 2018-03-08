<?php

class Footer{

    public function show(){
        // Carrega modal
        if($_SESSION[SESSION_NAME]['parceiro']['par_var_produto']){
            include_once '../../_inc/'.strtolower($_SESSION[SESSION_NAME]['parceiro']['par_var_produto']).'/modal.php'; 
        }
        $html = '</body>';
        $html .= '</html>';
        echo $html;
    }
}