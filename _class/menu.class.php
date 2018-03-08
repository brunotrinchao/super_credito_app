<?php

class Menu{

    private $par_var_produto;

    function __construct($tipo)
    {
        $this->par_var_produto = $tipo;
    }

    public function menuShow(){
        
        switch($this->par_var_produto){
            case 'IMOVEIS';
                $retorno = $this->menuImovel();
            break;
            case 'OI';
                $retorno = $this->menuOi();
            break;
            case 'FINANCIAMENTO';
                $retorno = $this->menuFinanciamento();
            break;
            break;
            case 'CONSULTORIA';
                $retorno = $this->menuConsultoria();
            break;
        }
        $html = '<div id="menu">';
        $html .= $retorno;
        $html .= '</div>';
        return $html;
    }

    // Imóveis
    private function menuImovel(){
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa-exclamation-circle fa"></i>Informações</a>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-home"></i>Indicação<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li><a href="#" data-toggle="modal" data-target="#add_imoveis_compra">Comprar</a></li>';
        $html .= '<li><a href="#">Alugar (proprietário)</a></li>';
        $html .= '<li><a href="#">Vender</a></li>';
        $html .= '<li><a href="#">Alugar (interessado)</a></li>';
        $html .= '</li>';
        $html .= '</ul> ';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-pie-chart"></i>Relatórios<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<a href="#">Resumo do mês</a>';
        $html .= '</li>';
        $html .= '</ul> ';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-cubes"></i>Material promocional</a>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-question-circle"></i>Ajuda</a>';
        $html .= '</li>';
        $html .= '</ul>';
        $html .= '</div>';
        return $html;
    }

    // Oi
    public function menuOi(){
        $html = '<ul>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-pencil-square-o"></i>Indicação<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<a href="#">Atendimento</a>';
        $html .= '<a href="#">Contratar</a>';
        $html .= '</li>';
        $html .= '</ul> ';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-th-list"></i>Planos<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li><a href="#">Fixo</a></li>';
        $html .= '<li><a href="#">Móvel</a></li>';
        $html .= '<li><a href="#">Banda Larga</a></li>';
        $html .= '<li><a href="#">Promoção (simulador)</a></li>';
        $html .= '</li>';
        $html .= '</ul> ';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-pie-chart"></i>Relatórios<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<a href="#">Resumo do mês</a>';
        $html .= '</li>';
        $html .= '</ul> ';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-cubes"></i>Material promocional</a>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-question-circle"></i>Ajuda</a>';
        $html .= '</li>';
        $html .= '</ul>';
        return $html;
    }

    // Financiamento
    public function menuFinanciamento(){
        $html = '<ul>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-home"></i>Imóveis<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li><a href="#">Tradicional</a></li>';
        $html .= '<li><a href="#">Refinanciamento</a></li>';
        $html .= '<li><a href="#">Bancos parceiro</a></li>';
        $html .= '</ul>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-car"></i>Veículos<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li><a href="#">Tradicional</a></li>';
        $html .= '<li><a href="#">Refinanciamento</a></li>';
        $html .= '<li><a href="#">Bancos parceiro</a></li>';
        $html .= '</ul>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-pie-chart"></i>Relatórios<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<a href="#">Resumo do mês</a>';
        $html .= '</li>';
        $html .= '</ul> ';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-cubes"></i>Material promocional</a>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-question-circle"></i>Ajuda</a>';
        $html .= '</li>';
        $html .= '</ul>';
        return $html;
    }

    // Consultoria
    public function menuConsultoria(){
        $html = '<ul>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-home"></i>Imóveis<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li><a href="#">Indicação</a></li>';
        $html .= '<li><a href="#">Bancos parceiro</a></li>';
        $html .= '</ul>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-car"></i>Veículos<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li><a href="#">Indicação</a></li>';
        $html .= '<li><a href="#">Bancos parceiro</a></li>';
        $html .= '</ul>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-pie-chart"></i>Relatórios<i class="fa fa-angle-down"></i></a>';
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<a href="#">Resumo do mês</a>';
        $html .= '</li>';
        $html .= '</ul> ';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-cubes"></i>Material promocional</a>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<a href="#"><i class="fa fa-question-circle"></i>Ajuda</a>';
        $html .= '</li>';
        $html .= '</ul>';
        return $html;
    }

}