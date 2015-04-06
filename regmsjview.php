<?php session_start(); $dnidocenteusario=$_SESSION['dni']; ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><title>LNCC ONLINE--IMPRIME </title>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><link href="Include/data-table/css/demo_page.css" rel="stylesheet"/><link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo '<script>window.location = \'index.php\'</script>';
}else {
?>
<body>
<?
include_once 'Class/Conection.php';
include_once 'Class/Docente.php';$DOCENTE= new Docente();
include_once 'Class/ALUMNO_SECCION.php';$ALUMNOSECCION= new ALUMNO_SECCION();
include_once 'Class/Alumno_Seccion_Pf.php';$AlSECIONPF= new Alumno_Seccion_Pf();
$whoisdocente=$DOCENTE->DOCENTE_USUARIO($dnidocenteusario);
if($filasiencuentra=  mysql_fetch_array($whoisdocente)){ $codigodocentenow=$filasiencuentra[0];$apellidosdocentenow=$filasiencuentra[1].' '.$filasiencuentra[2].' ,'.$filasiencuentra[3];}
?>
<div style="margin-left: 5%;margin-right: 5%;" id="primer">
<center><h5>Escriba las observaciones y recomendaciones a los PP.FF. : IV B</h5></center>
<article>
    <section>1. <i style="font-size:12px;">Asiste puntualmente a las reuniones y entrevistas del aula.</i></section><section>2. <i style="font-size:12px;">Se esmera en la presentacion e higiene personal del ni&ntilde;o.</i></section><section>3. <i style="font-size:12px;">Participaci&oacute;n de los cuenta cuentos.</i></section><section>4. <i style="font-size:12px;">Incentiva la participaci&oacute;n de su ni&ntilde;o en las diferentes actividades.</i></section>
<section>5. <i style="font-size:12px;">Se interesa en el avance y progreso de su ni&ntilde;o.</i></section><section>6. <i style="font-size:12px;">Colabora con las necesidades del aula.</i></section><section>7. <i style="font-size:12px;">Firma diaramente la Bit&aacute;cora.</i></section><section>8. <i style="font-size:12px;">Recoge el informe del progreso del ni&ntilde;o en la fecha indicada.</i></section>
<section>9. <i style="font-size:12px;">Participaci贸n de los PP.FF, en el Congreso de Familias.</i></section>
</article>
<?
$generalseccion=$DOCENTE->NAMESECCIOMICARGO($codigodocentenow);
if($filanamesection=  mysql_fetch_array($generalseccion))$gradoname=$filanamesection[0];$nameseccionnow=$filanamesection[1];$nomnivelsection=$filanamesection[2];
echo '<h6>SECCION: '.$gradoname.' '.$nameseccionnow.' '.$nomnivelsection.' ||| TUTOR: '.$apellidosdocentenow.'</h6>'; ?>
<center>
<table>
    <tr class="gradeU">
    <td style="display: none;"></td>
    <td style="width: 3%;color: peru;text-transform: uppercase;"><b>N</b></td>
    <td style="width: 25%;color: peru;text-transform: uppercase;"><b>Alumno</b></td>
    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>1</b></td>    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>2</b></td>
    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>3</b></td>    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>4</b></td>
    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>5</b></td>    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>6</b></td>
    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>7</b></td>    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>8</b></td>
    <td style="width: 5%;color: peru;text-transform: uppercase;"><b>9</b></td>
    </tr>
<?
$whoisalumno=$AlSECIONPF->ALUMNOSDEMITUTORIA($codigodocentenow);
while ($row = mysql_fetch_array($whoisalumno)) {
?>
    <tr>
    <td style='display:none;'><input type='text' value='<?=$row[0]?>' id='txtcodigo<?=$row[1]?>' name='txtcodigo<?=$row[1]?>'/></td>
    <td style='font-size:11px;'><b><?=$row[1]?></b></td>
    <td style='font-size:11px;'><b><?=$row[2].' '.$row[3].' ,</b>'.$row[4]?></td>
    <td style='font-size:11px;'><?=$row[29]?></td>      <td style='font-size:11px;'><?=$row[30]?></td>
    <td style='font-size:11px;'><?=$row[31]?></td>      <td style='font-size:11px;'><?=$row[32]?></td>
    <td style='font-size:11px;'><?=$row[33]?></td>      <td style='font-size:11px;'><?=$row[34]?></td>
    <td style='font-size:11px;'><?=$row[35]?></td>      <td style='font-size:11px;'><?=$row[36]?></td>
    <td style='font-size:11px;'><?=$row[38]?></td>
    </tr>
<? } ?></table></center>
<?='<center><br>-------------------------------------------<br>Impreso el '.date("d-F-Y").'</center>'; ?>
</div>
<a class="button" href="javascript:imprSelec('primer')">IMPRIMIR LA PAGINA</a>
</body>
<script type="text/javascript" src="Js/js.js"></script>
<? }?>
</html>