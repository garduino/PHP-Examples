<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
</head>

<body>
<?php 
//Exemplos ate a versão 1.2.2

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

<?php
/**************************** Teste With Dashboard *********************/
//array('library_loaded','graphic_type','create_div','dashboard_div','filter_div','chart_div','class_filter_div','class_dashboard_div','class_chart_div','open_js_tag','control_type')
//CARREGA AS CONFIGURAÇÕES
$gcharts->load(array('graphic_type' => 'ColumnChart','dashboard_div' => FALSE, 'filter_div' => FALSE));

//SETA AS OPÇÕES DO GRAFICO, VISITE O SITE https://developers.google.com/chart/?hl=pt-BR E VEJA AS OPÇÕES DISPONIVEIS
$gcharts->set_options(array(  'title' => 'Riesgos por Empresa',
									'vAxis' => array('title' => "Name",
													 'titleTextStyle' => array('color' => 'red')),
									'hAxis' => array('title' => 'Donuts eaten',
													 'titleTextStyle' => array('color' => 'red'))));
//SETA AS CONFIGURAÇÕES DO CONTROLE/FILTRO VERIFIQUE AS MESMAS EM https://developers.google.com/chart/?hl=pt-BR		 
$gcharts->set_control_options(array('filterColumnLabel' => 'Donuts eaten'));

//OS DADOS DOS GRAFICOS, PRIMEIRA ARRAY É OS NOMES DAS COLUNAS
$array = array(array('Name','Donuts eaten'),array('Grupo ACME',20),array('ACME Logística',12),array('ACME Armas',7), array('ACEM Logística',9),array('ACME Financiera',6),array('ACME Ropa de Seguridad',1),array('ACME Equipos',8));

//GERA O GRAFICO, CARREGA A API AUTOMATICAMENTE, SE NAO QUISER QUE ISSO ACONTEÇA, DEFINA FALSE NAS CONFIGURAÇÕES
echo $gcharts->generate($array);

?>

<?php
/**************************** Teste With Dashboard *********************/
//array('library_loaded','graphic_type','create_div','dashboard_div','filter_div','chart_div','class_filter_div','class_dashboard_div','class_chart_div','open_js_tag','control_type')
//CARREGA AS CONFIGURAÇÕES
$gcharts->load(array('graphic_type' => 'PieChart','dashboard_div' => TRUE, 'filter_div' => TRUE));

//SETA AS OPÇÕES DO GRAFICO, VISITE O SITE https://developers.google.com/chart/?hl=pt-BR E VEJA AS OPÇÕES DISPONIVEIS
$gcharts->set_options(array(  'title' => 'Riesgos po Criticidad',
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


</body>
</html>