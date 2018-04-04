<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 800px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<h2>Coyote Tablero de Control</h2>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Riesgos por Criticidades</h2>
    <p>Vigentes</p>


<?php 

include("gcharts.php");

$gcharts = new Gcharts();

/**************************** Teste Without Dashboard *********************/
//array('library_loaded','graphic_type','create_div','dashboard_div','filter_div','chart_div','class_filter_div','class_dashboard_div','class_chart_div','open_js_tag','control_type')
//CARREGA AS CONFIGURAÇÕES
$gcharts->load(array('graphic_type' => 'PieChart'));

//SETA AS OPÇÕES DO GRAFICO, VISITE O SITE https://developers.google.com/chart/?hl=pt-BR E VEJA AS OPÇÕES DISPONIVEIS
$gcharts->set_options(array(  'title' => 'Riesgos por Criticidad',));
//OS DADOS DOS GRAFICOS, PRIMEIRA ARRAY É OS NOMES DAS COLUNAS
$array = array(array('Criticidad', 'Riesgos'),
array('Muy Alta',5),
array('Alta',8),
array('Media',20),
array('Baja',35));

//GERA O GRAFICO, CARREGA A API AUTOMATICAMENTE, SE NAO QUISER QUE ISSO ACONTEÇA, DEFINA FALSE NAS CONFIGURAÇÕES
echo $gcharts->generate($array);

?>

    <h2>Riesgos por Criticidades</h2>
    <p>Vigentes</p>

<?php 
/**************************** Teste Without Dashboard *********************/
//array('library_loaded','graphic_type','create_div','dashboard_div','filter_div','chart_div','class_filter_div','class_dashboard_div','class_chart_div','open_js_tag','control_type')
//CARREGA AS CONFIGURAÇÕES
$gcharts->load(array('graphic_type' => 'PieChart'));

//SETA AS OPÇÕES DO GRAFICO, VISITE O SITE https://developers.google.com/chart/?hl=pt-BR E VEJA AS OPÇÕES DISPONIVEIS
$gcharts->set_options(array(  'title' => 'Riesgos por Criticidad',));
//OS DADOS DOS GRAFICOS, PRIMEIRA ARRAY É OS NOMES DAS COLUNAS
$array = array(array('Criticidad', 'Riesgos'),
array('Muy Alta',5),
array('Alta',8),
array('Media',20),
array('Baja',35));

//GERA O GRAFICO, CARREGA A API AUTOMATICAMENTE, SE NAO QUISER QUE ISSO ACONTEÇA, DEFINA FALSE NAS CONFIGURAÇÕES
echo $gcharts->generate($array);

?>




  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Riesgos por Empresa</h2>
    <p>Vigentes</p>


<?php
/**************************** Teste With Dashboard *********************/
//array('library_loaded','graphic_type','create_div','dashboard_div','filter_div','chart_div','class_filter_div','class_dashboard_div','class_chart_div','open_js_tag','control_type')
//CARREGA AS CONFIGURAÇÕES
// $gcharts->load(array('graphic_type' => 'PieChart','dashboard_div' => TRUE, 'filter_div' => TRUE));
$gcharts->load(array('graphic_type' => 'PieChart'));

//SETA AS OPÇÕES DO GRAFICO, VISITE O SITE https://developers.google.com/chart/?hl=pt-BR E VEJA AS OPÇÕES DISPONIVEIS
$gcharts->set_options(array(  'title' => 'Riesgos por Empresa',
									'vAxis' => array('title' => "Name",
													 'titleTextStyle' => array('color' => 'red')),
									'hAxis' => array('title' => 'Donuts eaten',
													 'titleTextStyle' => array('color' => 'red'))));
//SETA AS CONFIGURAÇÕES DO CONTROLE/FILTRO VERIFIQUE AS MESMAS EM https://developers.google.com/chart/?hl=pt-BR		 
$gcharts->set_control_options(array('filterColumnLabel' => 'Donuts eaten'));

//OS DADOS DOS GRAFICOS, PRIMEIRA ARRAY É OS NOMES DAS COLUNAS
// $array = array(array('Name','Donuts eaten'),array('Michael',5),array('Elisa',7),array('Robert',3), array('John',2),array('Jessica',6),array('Aaron',1),array('Margareth',8));
$array = array(array('Name','Donuts eaten'),array('Grupo ACME',20),array('ACME Logística',12),array('ACME Armas',7), array('ACEM Logística',9),array('ACME Financiera',6),array('ACME Ropa de Seguridad',1),array('ACME Equipos',8));

//GERA O GRAFICO, CARREGA A API AUTOMATICAMENTE, SE NAO QUISER QUE ISSO ACONTEÇA, DEFINA FALSE NAS CONFIGURAÇÕES
echo $gcharts->generate($array);

?>

<h2>Riesgos por Empresa</h2>
    <p>Vigentes</p>

<?php

/**************************** Teste With Dashboard *********************/
//array('library_loaded','graphic_type','create_div','dashboard_div','filter_div','chart_div','class_filter_div','class_dashboard_div','class_chart_div','open_js_tag','control_type')
//CARREGA AS CONFIGURAÇÕES
// $gcharts->load(array('graphic_type' => 'PieChart','dashboard_div' => TRUE, 'filter_div' => TRUE));
$gcharts->load(array('graphic_type' => 'PieChart'));

//SETA AS OPÇÕES DO GRAFICO, VISITE O SITE https://developers.google.com/chart/?hl=pt-BR E VEJA AS OPÇÕES DISPONIVEIS
$gcharts->set_options(array(  'title' => 'Riesgos por Empresa',
									'vAxis' => array('title' => "Name",
													 'titleTextStyle' => array('color' => 'red')),
									'hAxis' => array('title' => 'Donuts eaten',
													 'titleTextStyle' => array('color' => 'red'))));
//SETA AS CONFIGURAÇÕES DO CONTROLE/FILTRO VERIFIQUE AS MESMAS EM https://developers.google.com/chart/?hl=pt-BR		 
$gcharts->set_control_options(array('filterColumnLabel' => 'Donuts eaten'));

//OS DADOS DOS GRAFICOS, PRIMEIRA ARRAY É OS NOMES DAS COLUNAS
// $array = array(array('Name','Donuts eaten'),array('Michael',5),array('Elisa',7),array('Robert',3), array('John',2),array('Jessica',6),array('Aaron',1),array('Margareth',8));
$array = array(array('Name','Donuts eaten'),array('Grupo ACME',20),array('ACME Logística',12),array('ACME Armas',7), array('ACEM Logística',9),array('ACME Financiera',6),array('ACME Ropa de Seguridad',1),array('ACME Equipos',8));

//GERA O GRAFICO, CARREGA A API AUTOMATICAMENTE, SE NAO QUISER QUE ISSO ACONTEÇA, DEFINA FALSE NAS CONFIGURAÇÕES
echo $gcharts->generate($array);


?>




  </div>
</div>

</body>
</html>
