<?php session_start();?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Registro De Notas</title>
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link rel="stylesheet" href="Include/jquery.innerfade/css/reset.css"  type="text/css" media="all" />
<style type="text/css" media="screen, projection">@import url(Include/jquery.innerfade/css/jq_fade.css);</style></head>
<body>
<?php
require_once 'Includes/navegador.php';require_once 'Class/Docente.php';$Doce= new Docente();$dni=$_SESSION['dni'];
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo '<script>window.location = \'index.php\'</script>';
}else {
?>
<center><h2>VALIDADO PARA INTERNET EXPLORER</h2></center>
<div style="margin-left: 2%;margin-right: 2%;">
<ul id="news">
    <li><a class="txtleoaki" href="#n1"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 1. Verificar: Usuario, Contrase&ntilde;a(no dni), Registros de evaluaciones con sus indicadores ingresando a la web CLAVERO EN LINEA. luego informar la conformidad a la jefatura correspondiente. <strong>DEL 21/10/2013 HASTA 23/10/2013</strong></a></li>
    <li><a class="txtleoaki" href="#n2"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 2. Completar notas de alumnos que se han ausentado a las evaluaciones del II bimestre. Entregar los promedios, bimestrales a las subdirecciones correspondientes. <strong>HASTA 18/10/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n3"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 3. Registrar resultados de evaluaciones de proceso de todas las &aacute;reas. en el sistema de acuerdo con el avance program&aacute;tico. <strong>Del 24/08/2013 HASTA 06/11/2013.</strong> </a></li>
    <li><a class="txtleoaki" href="#n4"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 4. Visualizaci&oacute;n de notas parciales de todas las &aacute;reas por los Padres De Familia. <strong>A PARTIR DEL 07/11/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n5"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 5. Subir al sistema, las &uacute;ltimas notas de proceso de &aacute;reas b&aacute;sicas hasta el indicador de actitudes del registro, quedando pendiente s&oacute;lo la NOTA FINAL BIMESTRAL<strong>HASTA 29/11/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n6"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 6. Subir al sistema, NOTAS FINALES de &Aacute;reas que no ingresan al rol de ex&aacute;menes bimestrales, logrando el promedio bimestral, firmar, imprimir y entregar a la jefatura correspondiente u original y una copia<strong>HASTA 04/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n7"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 7. Cronograma de ex&aacute;menes bimestrales de AREAS BASICAS en Primaria y Secundaria. <strong>DEL 02/12/2013 HASTA 06/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n8"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 8. Subir al sistema de Notas, ex&aacute;menes bimestrales logrando el promedio bimestral, firmar, imprimir el registro y entregar a la jefatura correspondiente un original y una copia. <strong>HASTA 09/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n9"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 9. Comentarios y observaciones del desempe&ntilde;o de los alumnos sin errores(bajo responsabilidad). Inasistencias y tardanzas de alumnos. <strong>HASTA 10/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n10"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 10. Elaboraci&oacute;n, impresi&oacute;n y verificaci&oacute;n de consolidados <strong>11/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n11"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 11. Elaboraci&oacute;n, impresi&oacute;n y verificaci&oacute;n de las BOLETAS DE NOTAS <strong>12/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n12"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 12. Elaboraci&oacute;n, e impresi&oacute;n de la Estad&iacute;stica del RENDIMIENTO ESCOLAR Y DETERMINACI&Oacute;N de los PRIMEROS PUESTOS y EXCELENCIA ACAD&Eacute;MICA;<strong>13/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n13"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 13. Elevar el cuadro de orden de m&eacute;ritos del RENDIMIENTO de los alumnos a la JEFATURA DE EDUCACI&Oacute;N. <strong>16/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n14"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 14. ENTREGA DE BOLETAS DE NOTAS A LOS PADRES DE FAAMILIA DE LOS TRES NIVELES. <strong>20/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n15"><strong>CUMPLA CON LAS FECHAS DEL CRONOGRAMA. ESTE A&Ntilde;O DEBE SALIR TODO PERFECTO :D</strong></a></li></ul>
<br>
<fieldset><legend>Bimestre Actual:IV</legend><i>Revisen la lista del alumnado, asi como los registros que aparecen, en caso encuentren equivocaciones comunicar a la Subdireccion correspondiente o acercarse a la Subdireccion General- Oficina De Sistemas.</i>
<table class="table table-hover">
<thead><tr class="success"><th style="width: 12%;">Registro</th><th style="width: 12%;">Secci&oacute;n</th><th style="width: 14%">Asignatura</th><th style="width: 14%;"><center>I</center></th><th style="width: 14%;"><center>II</center></th><th style="width: 14%;"><center>III</center></th><th style="width: 13%;"><center>IV</center></th><th style="width: 5%;"><center>ANUAL</center></th></tr></thead>
<?php
$lista=$Doce->RegistroDocente($dni);
while ($row = mysql_fetch_array($lista)) {
echo '<tr><td><b>REGISTRO N&#176;</b> '.$row[0].'</td><td>'.$row[2].$row[3].' DE <b>'.$row[1].'</b></td><td>'.$row[7].'</td>';
$url="";$ver="";#}1ER BIMESTRE

if($row[10]==1){
    $url="registra";$ver="Registrar";
}else{
    $url="imprimir_reg";$ver="VER";
}
echo '<td><center><a  TARGET = \'_blank\' title=\'Registra\' href=\''.$url.'.php?sinatura='.$row[8].'&seccion='.$row[9].'&registro='.$row[0].'\'>'.$ver.'</a><i class=\'icon-print\'></i></center></td>';

$url2="";#2DO BIMESTRE
if($row[11]==0){
    $url2="#";echo '<td><center><a href=\'#divnota\'>DEBES NOTA <i class=\'icon-warning-sign\'></i></a></center></td>';
}
if($row[11]==1){
    $url2='registra1.php';
?>
<td><center>
    <a  TARGET = '_blank' href='<?=$url2?>?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>REGISTRAR</a>
    <br><a style='color:red;' onclick='DOIT(<?=$row[0]?>,<?=$row[0]?>)'>Completaste tu registro?</a><br><a id='<?=$row[0]?>'></a>
</center></td>
<?
}
if($row[11]==3){
?><td><center><a  TARGET = '_blank' href='imprimir_reg1.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>CONCLUIDO, puedes imprimir! <i class='icon icon-ok'></i></a></center></td>
<?
}
if($row[11]==2){
?>
<td><center><a style='color:green;'  TARGET = '_blank' href='imprimir_reg1.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>Verificado por sistemas <i class='icon icon-ok'></i></a></center></td>
<?
}

#-------------------------------------------------------------------------------------------------------

$url3="";#3ero BIMESTRE
if($row[12]==0){
    $url3="#";
echo "<td><center><a href='#divnota'>DEBES NOTA <i class='icon-warning-sign'></i></a></center></td>";
}
if($row[12]==1){
    $url3="registra3.php";
echo "
  <td><center>
  	<a  TARGET = '_blank' href='$url3?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>REGISTRAR</a>
        <br><a style='color:red;' onclick='DOIT3($row[0],$row[0])'>Completaste tu registro?</a>
        <br><a id='$row[0]'></a>
  </center></td>
    ";
}
if($row[12]==3){
echo "<td><center>
        <a  TARGET = '_blank' href='imprimir_reg3.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>CONCLUIDO, puedes imprimir! <i class='icon icon-ok'></i></a>
      </center></td>";}

if($row[12]==2){
echo "<td><center>
        <a style='color:green;'  TARGET = '_blank' href='imprimir_reg3.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Verificado por sistemas <i class='icon icon-ok'></i></a>
      </center></td>";}

$url4='';#4to BIMESTRE
switch ($row[13]) {
    case 0:$url4='#';?><td><center><a href='#divnota'>DEBES NOTA <i class='icon-warning-sign'></i></a></center></td><?break;
    case 1:
        $url4='registra4.php';?>
        <td><center>
        <a  TARGET = '_blank' href='<?=$url4?>?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>REGISTRAR</a>
        <br><a style='color:red;' onclick='DOITi3(<?=$row[0]?>,<?=$row[0]?>)'>Completaste tu registro?</a><br><a id='<?=$row[0]?>'></a></center></td><?break;
    case 2:
        ?>
        <td><center><a style='color:green;'  TARGET = '_blank' href='imprimir_reg4.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>Verificado por sistemas <i class='icon icon-ok'></i></a></center></td><?break;
    case 3:
        ?>
        <td><center><a  TARGET = '_blank' href='imprimir_reg4.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>CONCLUIDO, puedes imprimir! <i class='icon icon-ok'></i></a></center></td><?break;
}


echo "
  <td><center>
  	<i class='icon-print'></i>
  </center></td>
</tr>";}?>
</table>
</fieldset>
<br><br><br><br>
<legend></legend>
<div id="divnota" style="background-color: #EFC2C4; font-size: 16px;">
 <i>
Si tu registro debe notas el II Bimestre, no podr&aacute;s registrar notas en el III bimestre del registro en cuesti&oacute;n, te aparecer&aacute; este mensaje: <a style="font-size: 16px;">DEBES NOTA <i class='icon-warning-sign'></i></a>;<br>
Sigue estos pasos:<br>
<strong>1.</strong>Ingresa las notas faltantes del II bimestre del registro que debas notas y guardalas.(El registro esta abierto para ingresar notas)<br>
<strong>2.</strong>Env&iacute;ame un mensaje a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a> indicando el n&uacute;mero de registro para verificar que no debas notas y poder habilitar el ingreso de notas al III bimestre.<br><br>
En caso ocurra un error y usted no deba notas; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>
Si un alumno es nuevo y afecta a su registro inhabilit&aacute;ndolo; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>
Si un alumno est&aacute; enfermo y por ende no ha sido calificado y afecta a su registro inhabilit&aacute;ndolo; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>
Si el alumno est&aacute; retirado no olvide poner <strong>-1</strong><br>
Si el alumno est&aacute; exonerado no olvide poner <strong>-2</strong>
 </i>
</div><legend></legend></div><br><br><br><br><br><br><br><br><br>
<?php require_once 'Includes/modal-footer.php';?>
</body>
    <?php }?>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script><script type="text/javascript" src="Js/ajax.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>

<script type="text/javascript" src="Include/jquery.innerfade/js/jquery.innerfade.js"></script>
<script type="text/javascript">
$(document).ready(
                function(){
                        $('#news').innerfade({
                                animationtype: 'slide',
                                speed: 1000,
                                timeout: 8000,
                                type: 'sequence',
                                containerheight: '1em'
                        });
        });
</script>
<script type="text/javascript">
function DOIT(valueinn,num){
eliminar=confirm("Terminaste de llenar tus notas?");
if(eliminar){
ajaxdelet(valueinn,num);
alert('Gracias por terminar de llenar tu registro '+valueinn);
location.reload();
}
}

function DOIT3(valueinn,num){
eliminar=confirm("Terminaste de llenar tus notas?");
if(eliminar){
ajaxdelet3(valueinn,num);
alert('Gracias por terminar de llenar tu registro '+valueinn);
location.reload();
}
}

function DOITi3(valueinn,num){
eliminar=confirm("Terminaste de llenar tus notas?");
if(eliminar){
ajaxdelet4(valueinn,num);
alert('Gracias por terminar de llenar tu registro '+valueinn+', Ahora puedes imprimirlo');
location.reload();
}
}
</script>
</html>