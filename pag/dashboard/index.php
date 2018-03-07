<?php 

include_once '../../config.php'; 
// unset($_SESSION[SESSION_NAME]);
// print_r($_SESSION[SESSION_NAME]);
$header = new Header();
$header->addScript([
    '_assets/plugins/chart/raphael-min.js',
    '_assets/plugins/chart/morris.min.js'
]);
$header->show();

?>

<nav class="barra navbar col-12 topo justify-content-center|justify-content-end">
    <span class="titulo_produto"><i class="fa-angle-right fa"></i><?php echo $_SESSION[SESSION_NAME]['parceiro']['par_var_produto_formatado']; ?></span>
    <div class="dropdown_usuario_menu dropdown ml-auto">
    <div class="foto_user" style="background-image:url(<?php echo PATH_DEFAULT.'/'.$_SESSION[SESSION_NAME]['parceiro']['par_var_logo'];?>)"></div>
        <a href="#" class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true">
            Parceiro
            <i class="fa-angle-down fa"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="#">Gerenciar equipe</a>
            <div class="dropdown-divider"></div>
            <div class="dropdown-item"><strong>Produtos</strong></div>
            <a class="dropdown-item" href="#">Imóveis</a>
            <a class="dropdown-item" href="#">Financiamento</a>
            <a class="dropdown-item" href="#">Consultoria de crédito</a>
            <a class="dropdown-item" href="#">Oi</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sair</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php
            $menu = new Sidebar();
            $menu->show();
        ?>
        <div role="main" class="col-md-12 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <!-- Ultimos 6 meses -->
                        <div class="col-12 box_item">
                            <div class="item_header">
                                <h1>Indicados <small><span class="badge badge-secondary">Últimos 6 meses</span></small></h1>
                            </div>
                            <div class="item_body">
                            <div id="area-chart" class="chart_ultimos_seis_meses"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicadores -->
                <div class="col-md-3" id="indicadores">
                    <?php
                        $indicador = new Indicadores();
                        $indicador->addIndicador('Indicados', 1000);
                        $indicador->addIndicador('Prospectados', 0);
                        $indicador->addIndicador('Contactados', 129, 'Texto teste');
                        $indicador->show();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


var months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

Morris.Line({
  element: 'area-chart',
  data: [{
    m: '2018-01', // <-- valid timestamp strings
    a: 0
  }, {
    m: '2018-02',
    a: 54
  }, {
    m: '2018-03',
    a: 243
  }, {
    m: '2018-04',
    a: 206
  }, {
    m: '2018-05',
    a: 161
  }, {
    m: '2018-06',
    a: 187
  } ],
  xkey: 'm',
  ykeys: ['a'],
  labels: ['2018'],
  xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
    var month = months[x.getMonth()];
    return month;
  },
  dateFormat: function(x) {
    var month = months[new Date(x).getMonth()];
    return month;
  },
});

</script>
<?php 
    $footer = new Footer();
    $footer->show();
?>