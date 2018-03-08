<?php

$form = new GForm();

$html .= '<div class="modal fade" id="add_imoveis_compra" tabindex="-1" role="dialog">';
$html .= '<div class="modal-dialog modal-dialog-centered" role="document">';
$html .= '<div class="modal-content">';
$html .= '<div class="modal-header">';
$html .= '<h5 class="modal-title">Comprar imóvel</h5>';
$html .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
$html .= '<span aria-hidden="true">&times;</span>';
$html .= '</button>';
$html .= '</div>';
$html .= '<div class="modal-body">';
$html .= $form->open();
$html .= '<div class="form-row">';
$html .= $form->addInput('text', 'p__pes_var_nome', false, array('placeholder' => 'Nome', 'class' => 'form-control'), false, false, true, 6);
$html .= $form->addInput('text', 'p__pes_var_sobrenome', false, array('placeholder' => 'Sobrenome', 'class' => 'form-control'), false, false, true, 6);
$html .= $form->addInput('text', 'p__pes_var_email', false, array('placeholder' => 'E-mail', 'class' => 'form-control'), false, false, true, 12);
$html .= $form->addSelect('p__imo_var_tipo', array('0' => 'Não', '1' => 'Sim'), '1', 'Tipo de imóvel', false, false, false, true, '', 'Selecione...', true, true, 6);
$html .= $form->close();
$html .= '</div>';
$html .= '</div>';
$html .= '<div class="modal-footer">';
$html .= '<button type="button" class="btn btn-success">Salvar</button>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';



echo $html;