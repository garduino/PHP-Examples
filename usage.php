<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
	<?
	include_once("phpReportGen.php");
	$prg = new phpReportGenerator();
        $prg->width = "100%";
	$prg->cellpad = "0";
	$prg->cellspace = "0";
	$prg->border = "0";
	$prg->header_color = "#666666";
	$prg->header_textcolor="#FFFFFF";
	$prg->body_alignment = "left";
	$prg->body_color = "#CCCCCC";
	$prg->body_textcolor = "#800022";
	$prg->surrounded = '1';
	
	
	mysql_connect("localhost","dbname","dbpw");
	mysql_select_db("dbname");
	$res = mysql_query("select member_id, lastname, firstname, email, city, province, dinner from reg_member");
	$prg->mysql_resource = $res;
	
	$prg->title = "Inscriptos para Evento 2018";
	$prg->generateReport();
	
	?>
</body>
</html>