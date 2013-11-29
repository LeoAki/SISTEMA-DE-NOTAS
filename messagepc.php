<?php
session_start();
$dnidocenteusario=$_SESSION['dni']; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico"><title>Mensajes::Informatica</title>
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>
<body>
<?php
require_once 'Includes/navegador.php';
include_once 'Class/Docente.php';
$DOCENTE= new Docente();
include_once 'Class/InicialMessage.php'; $AlSECIONPF= new InicialMessage();
$whoisdocente=$DOCENTE->DOCENTE_USUARIO($dnidocenteusario);
if($filasiencuentra=  mysql_fetch_array($whoisdocente)):
    $codigodocentenow=$filasiencuentra[0];#codedocente
    $apellidosdocentenow=$filasiencuentra[1].' '.$filasiencuentra[2].' ,'.$filasiencuentra[3];
endif;

//--------------------------------------------MANTENIMIENTO--------------------------
#BUCLE REPETITIVO
if(isset($_REQUEST['GRABAR'])){ // se envio el formulario?
for($x =1 ; $x <= 35; $x++){//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite
    $AlSECIONPF->setCODE($_REQUEST['txtcodigo'.$x]);
    $AlSECIONPF->setCODEALSEC($_REQUEST['txtcodigo'.$x]);
    $AlSECIONPF->setMESSAGEPC(htmlentities($_REQUEST['txtnota1'.$x],ENT_QUOTES,"UTF-8"));
    $AlSECIONPF->GRABAR_PC();
}
    echo '<script>window.location = \'messagepc.php\'</script>';
}
//-------------------------------------------------------------------------------------
?>
<div style="margin-left: 3%;margin-right: 3%;" id="primer">
<center><h4 style="color: green">SOLO PROFESORES DE INFORMATICA IVB</h4></center>
<?php
$generalseccion=$DOCENTE->NAMESECCIOMICARGO($codigodocentenow);
if($filanamesection=  mysql_fetch_array($generalseccion))   $gradoname=$filanamesection[0];$nameseccionnow=$filanamesection[1];$nomnivelsection=$filanamesection[2];
echo '<h5 style=\'color: peru\'>SECCION: '.$gradoname.' '.$nameseccionnow.' '.$nomnivelsection.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTOR: '.$apellidosdocentenow.'</h5>';
?>
<form id="frmmensaje" method="post" action="messagepc.php?GRABAR=1">
<fieldset>
<table class="table table-hover">
    <tr class="gradeU">
    <td style="display: none;"></td>
    <td style="width: 3%;color: peru;text-transform: uppercase;"><b>N &#176;</b></td>
    <td style="width: 30%;color: peru;text-transform: uppercase;"><b>Alumno</b></td>
    <td style="width: 67%;color: peru;text-transform: uppercase;"><b>Profesor de Computo</b></td>
    </tr>
<?
$area=1;
$whoisalumno=$AlSECIONPF->ALUMNOSDEMITUTORIA($codigodocentenow, $area);

while ($row = mysql_fetch_array($whoisalumno)): ?>
<tr>
    <td style='display:none;'>
        <?php echo '<input type=\'text\' value=\''.$row[0].'\' id=\'txtcodigo'.$row[1].'\' name=\'txtcodigo'.$row[1].'\'/>';?>
    </td>
    <?='<td><b>'.$row[1].'</b></td>
    <td><b>'.$row[2].' '.$row[3].' ,</b>'.$row[4].'</td>';?>
    <td><input type='text' value='<?=$row[5]?>' id='txtnota1<?=$row[1]?>' name='txtnota1<?=$row[1]?>' placeholder='FN' style='width:100%;'/></td>
</tr>
<?endwhile;?>
</table></fieldset>
<center><div class="form-actions"><button type="submit"class="btn btn-primary"><i>GRABAR/ACTUALIZAR LOS MENSAJES</i></button></div></center>
</form>
</div>
</body>
<?php }?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script><script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>