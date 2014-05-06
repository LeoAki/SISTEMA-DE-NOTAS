<? session_start();?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Registra Los Criterios Del Curso</title>
<? require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo "<script>window.location = 'index.php'</script>";
}else {
?>
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><link href="Include/data-table/css/demo_page.css" rel="stylesheet"/><link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
<body style="background-color: linen;">
<? require_once 'Includes/navegador.php';require_once 'Class/Component.php';require_once 'Class/Indicador.php';$INDICAXD= new Indicador();?>

<a><strong>BIMESTRE EN CURSO </strong>I BIMESTRE</a><center><h3 style="color: green">DEFINICION DE LOS CRITERIOS DE EVALUACI&Oacute;N</h3>
<? $asina = $_GET['asinatura'];?>

<table>
<? $COMPO = new Component(); $mysql=$COMPO->ListarDatosAsignatura($asina);
if($rowgeneral=  mysql_fetch_array($mysql)) $variable1=$rowgeneral['grado'];$variable2=$rowgeneral['nomnivel'];$variable3=$rowgeneral['asinatura'];
?></table>
<?='<h4>'.$variable1.' Grado De '.$variable2.' [&Aacute;REA: '.$variable3.'] </h4>'?></center>

<center>
<div style="width: 98%;">

<table class="table table-hover">
<?
$COMPONENTE=new Component();    $listar=$COMPONENTE->LISTAR1($asina);
while ($row = mysql_fetch_array($listar)):
?>
<tr class='success'><td style='width:10%'><h4><i><?=$row[1]?></i></h4></td><td><h4><i><?=$row[3]?></i></h4></td></tr>

<tr><td colspan=2><a href='regindicador.php?componente=<?=$row[0]?>' TARGET = '_blank' title='Agrega un nuevo indicador'><i>AGREGAR UN NUEVO INDICADOR</i><i class='con-user'></i><i class='icon icon-plus'></i></a></td></tr>
<?
$lista=$INDICAXD->LISTAR($row[0]);
while ($row2 = mysql_fetch_array($lista)) {
?>
<tr class='gradeA'>
 <td class='center'>
 <a href='regindicador.php?componente=<?=$row[0]?>&orden=<?=$row2[3]?>&indicador=<?=$row2[2]?>&codeindi= <?=$row2[0]?>' TARGET = '_blank' title='Edita el indicador'>
 <?=$row[1].'.'.$row2[3]?><i class='icon icon-edit'></i></a>
 </td>
 <td><?=$row2[2]?></td>
</tr>
<?} endwhile;
?>
</table>
</div></center><br><br><br><br><br><br>
<?php require_once 'Includes/modal-footer.php';  } ?>
</body>
</html>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script><script type="text/javascript" src="Js/bootstrap-collapse.js"></script>