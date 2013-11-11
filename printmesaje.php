<? session_start();$dnidocenteusario=$_SESSION['dni'];?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Dirigite a tus alumno</title></head>
<?
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy(); echo "<script>window.location = 'index.php'</script>";
}else {
?>
<body>
<?
include_once 'Class/Conection.php';include_once 'Class/Docente.php';include_once 'Class/ALUMNO_SECCION.php';
$DOCENTE=new Docente(); $ALUMNOSECCION= new ALUMNO_SECCION();
$whoisdocente=$DOCENTE->DOCENTE_USUARIO($dnidocenteusario);
if($filasiencuentra=  mysql_fetch_array($whoisdocente)){
$codigodocentenow=$filasiencuentra[0]; $apellidosdocentenow=$filasiencuentra[1].' '.$filasiencuentra[2].' ,'.$filasiencuentra[3];
}
?>
<div id="primer">
<? $generalseccion=$DOCENTE->NAMESECCIOMICARGO($codigodocentenow);
if($filanamesection=  mysql_fetch_array($generalseccion)){
$gradoname=$filanamesection[0];$nameseccionnow=$filanamesection[1];$nomnivelsection=$filanamesection[2];
}
?><a style='font-size:12px;'>NIVEL:[<?=$nomnivelsection?>] SECCION: [<?=$gradoname.' '.$nameseccionnow?>] TUTOR: [<?=$apellidosdocentenow?>]</a><br>
<center><a style='font-size:12px;'><b>OBSERVACIONES PARA LOS ALUMNOS DE MI TUTOR&Iacute;A --- IV B</b></a></center>
<table class="display">
    <tr class="gradeU">
        <td style="display: none;"></td><td><a style='font-size:12px;'><b>N &Oacute;rden</b></a></td><td><a style='font-size:12px;'><b>ALUMNO</b></a></td><td><a style='font-size:12px;'><b>OBSERVACI&Oacute;N</b></a></td>
    </tr>
<?
    $whoisalumno=$DOCENTE->ALUMNOSDEMITUTORIA($codigodocentenow);
    while ($row = mysql_fetch_array($whoisalumno)):?>
    <tr>
    <td style='display:none;'><input type='text' value='<?=$row[0]?>' id='txtcodigo<?=$row[1]?>' name='txtcodigo<?=$row[1]?>'/></td>
    <td><a style='font-size:12px;'><?=$row[1]?></a></td><td><a style='font-size:12px;'><?=$row[2].' '.$row[3].' ,'.$row[4]?></a></td>
    <td><a style='font-size:12px;'><?=$row[7]?></a></td>
    </tr>
<?  endwhile;?>
</table>
<?='<br><br><center>------------------------------------------------<br><a style=\'color:black;font-size: 11px;\'>Prof: '.$apellidosdocentenow.'<br>Impreso el '.date("d-F-Y").'</a></center>';?>
</div>
<a class="button" href="javascript:imprSelec('primer')">IMPRIMIR LA PAGINA</a>
</body>
<?php }?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>
</html>