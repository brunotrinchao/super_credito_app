<?php

class Indicadores{

    private $indicadores = [];

    public function show(){
        foreach ($this->indicadores as $key => $value) {
            echo $value;
        }
    }

    public function addIndicador($label, $valor = 0, $text = null){
        $cor = ($valor == 0)? 'color:#c53d2e': '';
        $html = '<div class="indicador_item">';
        $html .= '<div class="titulo">';
        $html .= '<i class="fa fa-angle-double-right"></i>';
        $html .= $label;
        $html .= '</div>';
        $html .= '<div class="valor" style="'.$cor.'">';
        $html .= $valor;
        $html .= '</div>';
        if(!empty($text)){
            $html .= '<small>'.$text.'</small>';
        }
        $html .= '</div>';
        array_push($this->indicadores, $html);
    }

}