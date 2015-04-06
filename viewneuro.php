<?php
session_start();
$dnidocenteusario=$_SESSION['dni']; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico"><title>Mensajes::Neuromotriz</title>
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
include_once 'Class/Docente.php';
$DOCENTE= new Docente();
include_once 'Class/InicialMessage.php'; $AlSECIONPF= new InicialMessage();
$whoisdocente=$DOCENTE->DOCENTE_USUARIO($dnidocenteusario);
if($filasiencuentra=  mysql_fetch_array($whoisdocente)):
    $codigodocentenow=$filasiencuentra[0];#codedocente
    $apellidosdocentenow=$filasiencuentra[1].' '.$filasiencuentra[2].' ,'.$filasiencuentra[3];
endif;

//-------------------------------------------------------------------------------------
?>
<div style="margin-left: 3%;margin-right: 3%;" id="primer">
<center><h4 style="color: green">SOLO PROFESORES DE NEUROMOTRIZ IB</h4></center>
<?php
$generalseccion=$DOCENTE->NAMESECCIOMICARGO($codigodocentenow);
if($filanamesection=  mysql_fetch_array($generalseccion))   $gradoname=$filanamesection[0];$nameseccionnow=$filanamesection[1];$nomnivelsection=$filanamesection[2];
echo '<h5 style=\'color: peru\'>SECCION: '.$gradoname.' '.$nameseccionnow.' '.$nomnivelsection.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTOR: '.$apellidosdocentenow.'</h5>';
?>

<fieldset>
<table class="table table-hover">
    <tr class="gradeU">
    <td style="display: none;"></td>
    <td style="width: 3%;color: peru;text-transform: uppercase;"><b>N &#176;</b></td>
    <td style="width: 30%;color: peru;text-transform: uppercase;"><b>Alumno</b></td>
    <td style="width: 67%;color: peru;text-transform: uppercase;"><b>Profesor de Neuro</b></td>
    </tr>
<?
$area=2;
$whoisalumno=$AlSECIONPF->ALUMNOSDEMITUTORIA($codigodocentenow, $area);

while ($row = mysql_fetch_array($whoisalumno)): ?>
<tr>
    <td style='display:none;'>
        <?php echo '<input type=\'text\' value=\''.$row[0].'\' id=\'txtcodigo'.$row[1].'\' name=\'txtcodigo'.$row[1].'\'/>';?>
    </td>
    <?='<td><b>'.$row[1].'</b></td>
    <td><b>'.$row[2].' '.$row[3].' ,</b>'.$row[4].'</td>';?>
    <td><?=$row[5]?></td>
</tr>
<?endwhile;?>
</table></fieldset>
<center><div class="form-actions"><button type="submit"class="btn btn-primary"><i>GRABAR/ACTUALIZAR LOS MENSAJES</i></button></div></center>

</div>
</body>
<?php }?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
</html>