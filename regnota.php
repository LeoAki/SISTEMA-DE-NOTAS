<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Registro De Notas</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>

<link rel="stylesheet" href="Include/jquery.innerfade/css/reset.css"  type="text/css" media="all" />
<style type="text/css" media="screen, projection">
    @import url(Include/jquery.innerfade/css/jq_fade.css);
</style>		
</head>
<body>
<?php 
require_once 'Includes/navegador.php';require_once 'Class/Docente.php';
$Doce= new Docente();
$dni=$_SESSION['dni'];
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo "<script>window.location = 'index.php'</script>";
}else {
?>
<div style="margin-left: 4%;margin-right: 4%;">
<ul id="news">
    <li><a class="txtleoaki" href="#n1"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 1. Subir al sistema, las &uacute;ltimas notas de proceso de &aacute;reas b&aacute;sicas hasta el indicador
        de actitudes del registro, quedando pendiente s&oacute;lo la nota Final Bimestral. <strong>HASTA 17/07/2013</strong></a></li>
    <li><a class="txtleoaki" href="#n2"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 2. Subir al sistema, NOTAS FINALES de &aacute;reas que no ingresan al rol de ex&aacute;menes bimestrales,
        logrando el promedio bimestral, firmar, imprimir y entregar a la jefatura correspondiente un original y una copia. <strong>HASTA 22/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n3"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 3. Cronograma de ex&aacute;menes bimestrales de Areas b&aacute;sicas en primaria y secundaria.
        <strong>Del 18/07/2013 HASTA 24/07/2013.</strong> </a></li>
    <li><a class="txtleoaki" href="#n4"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 4. Subir al sistema de Notas de ex&aacute;menes bimestrales logrando el promedio bimestral, FIRMAR, IMPRIMIR el registro
        y entregar a la jefatura correspondiente un original y una copia. <strong>Hasta el 26/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n5"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 5. Comentario y observaci&oacute;n del desempe&ntilde;o de los alumnos. Inasistencias y tardanzas de alumnos
        <strong>HASTA 26/7/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n6"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 6. Entrega de unidades, sesiones de aprendizaje y temarios III Bimestre. <strong>HASTA 26/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n7"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 7. Supervici&oacute;n y valoraci&oacute;n a los docentes que han cumplido con subir las notas y entrega de los registros
        impresos en los plazos establecidos. <strong>26/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n8"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 8. Elaboraci&oacute;n e impresi&oacute;n de los consolidados. <strong>30/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n9"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 9. Impresi&oacute;n de boletas de notas y estad&iacute;stica del rendimiento acad&eacute;mico II Bimestre.
        <strong>13/08/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n10"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 10. D&iacute;a del logro y entrega de boletas de notas a los PP.FF.
        <strong>16/08/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n11"><strong>CUMPLA CON LAS FECHAS DEL CRONOGRAMA.</strong></a></li>
</ul>
<img src="Css/images/libro.jpeg" style="width:100px;" class="img-circle"/><i class='alert'>Si eres profesora de inicial, haz clic <a href='regnotainicial.php' class='btn btn-warning'>AQU&Iacute;</a> y obvie lo de abajo</i>
<br>
<form >
<fieldset>
<legend>Bimestre Actual:II</legend>
<i>Revisen la lista del alumnado, asi como los registros que aparecen, en caso encuentren equivocaciones comunicar a la Subdireccion correspondiente o acercarse a la Subdireccion General- Oficina De Sistemas.</i>
<table class="table table-hover">
<thead><tr class="success">
<th style="width: 10%;">Registro</th>
<th style="width: 20%;">Secci&oacute;n</th>
<th style="width: 15%">Asignatura</th>
<th style="width: 11%;"><center>I</center></th>
<th style="width: 11%;"><center>II</center></th>
<th style="width: 11%;"><center>III</center></th>
<th style="width: 11%;"><center>IV</center></th>
<th style="width: 11%;"><center>ANUAL</center></th>
</tr></thead>
<?php 
$lista=$Doce->RegistroDocente($dni);
while ($row = mysql_fetch_array($lista)) {
echo "
<tr>
  <td><b>REGISTRO N&#176;</b> $row[0]</td><td>$row[2] $row[3] DE <b>$row[1]</b></td><td>$row[7]</td>";#CABECERA
$url="";$ver="";#}1ER BIMESTRE

if($row[10]==1){
    $url="registra";$ver="Registrar";
}else{
    $url="imprimir_reg";$ver="VER";
}
echo "
<td><center>
<a  TARGET = '_blank' title='Registra' href='$url.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>$ver</a><i class='icon-print'></i>
</center></td>";
$url2="";#2DO BIMESTRE
if($row[11]==0){
    $url2="#";
echo "
  <td><center>
  	<a href='#divnota'>DEBES NOTA <i class='icon-warning-sign'></i></a>
  </center></td>
    ";
}
if($row[11]==1){
    $url2="registra1.php";
echo "
  <td><center>
  	<a  TARGET = '_blank' href='$url2?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>REGISTRAR</a>   .   .
        <a  title='Imprime tu registro' TARGET = '_blank' href='imprimir_reg1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'><i class='icon-print'></i></a>
  </center></td>
    ";
}
if($row[11]==3){
    $url2="registra1.php";
echo "
  <td><center>
        <a  TARGET = '_blank' href='imprimir_reg1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>CONCLUIDO <i class='icon icon-ok'></i></a>
  </center></td>
    ";
}

echo "  
  <td><center>
  	<i class='icon-file'></i><i class='icon-print'></i>
  </center></td>

  <td><center>
  	<i class='icon-file'></i><i class='icon-print'></i>
  </center></td>

  <td><center>
  	<i class='icon-print'></i>
  </center></td>
</tr>";}?>
</table>
</fieldset>
<br>
<legend></legend>
<div id="divnota" style="background-color: #EFC2C4; font-size: 16px;">
 <i>
Si tu registro debe notas el I Bimestre, no podr&aacute;s registrar notas en el II bimestre del registro en cuesti&oacute;n, te aparecer&aacute; este mensaje: <a style="font-size: 16px;">DEBES NOTA <i class='icon-warning-sign'></i></a>;<br>
Sigue estos pasos:<br>
<strong>1.</strong>Ingresa las notas faltantes del I bimestre del registro que debas notas y guardalas.(El registro esta abierto para ingresar notas)<br>
<strong>2.</strong>Env&iacute;ame un mensaje a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a> indicando el n&uacute;mero de registro para verificar que no debas notas y poder habilitar el ingreso de notas al II bimestre.<br><br>
En caso ocurra un error y usted no deba notas; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>
Si un alumno es nuevo y afecta a su registro inhabilit&aacute;ndolo; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>
Si un alumno est&aacute; enfermo y por ende no ha sido calificado y afecta a su registro inhabilit&aacute;ndolo; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>
Si el alumno est&aacute; retirado no olvide poner <strong>-1</strong><br>
Si el alumno est&aacute; exonerado no olvide poner <strong>-2</strong>
 </i>
</div>
<legend></legend>
</form>
</div>
<br><br><br><br><br><br><br>
<?php require_once 'Includes/modal-footer.php';?>
</body>
    <?php }?>    
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>

<script type="text/javascript" src="Include/jquery.innerfade/js/jquery.innerfade.js"></script>
<script type="text/javascript">
$(document).ready(
                function(){
                        $('#news').innerfade({
                                animationtype: 'slide',
                                speed: 1000,
                                timeout: 5000,
                                type: 'sequence',
                                containerheight: '1em'
                        });
        });
</script>
</html>