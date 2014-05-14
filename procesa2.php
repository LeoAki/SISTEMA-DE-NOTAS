<? session_start();
require_once 'Class/Docente.php';$Doce= new Docente();$dni=$_SESSION['dni'];require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo "<script>window.location = 'index.php'</script>";
}else {
?>
<div style="margin-left: 2%;margin-right: 2%;">
<form>
<fieldset><legend>Bimestre Actual: I</legend><i>Revisen la lista del alumnado, asi como los registros que aparecen, en caso encuentren equivocaciones comunicar a la Subdireccion correspondiente o acercarse a la Subdireccion General- Oficina De Sistemas.</i>
<table class="table table-hover">
<thead><tr class="success"><th style="width: 12%;">Registro</th><th style="width: 12%;">Secci&oacute;n</th><th style="width: 14%">Asignatura</th><th style="width: 14%;"><center>I</center></th><th style="width: 14%;"><center>II</center></th><th style="width: 14%;"><center>III</center></th><th style="width: 13%;"><center>IV</center></th><th style="width: 5%;"><center>ANUAL</center></th></tr></thead>
<?
$lista=$Doce->RegistroDocente($dni);
while ($row = mysql_fetch_array($lista)) {
echo '<tr><td><b>REGISTRO N&#176;</b>'.$row[0].'</td><td>'.$row[2].$row[3].' DE <b>'.$row[1].'</b></td><td>'.$row[7].'</td>';

$url="";$ver="";# 1ER BIMESTRE

if($row[10]==0){        $url='imprimir_reg';$ver='Imprimir registro <i class=\'icon icon-print\'></i>'; }
else if($row[10]==1){   $url='registra';$ver='Registrar <i class=\'icon icon-edit\'></i>';}
else{                   $url='imprimir_reg';$ver='Verificado por sistemas<i class=\'icon icon-ok\'></i>';}
?>
<td>
<center>
<a style='color:green;' TARGET = '_blank' title='Registra' href='<?=$url?>.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'><?=$ver?></a><br>
<?if($row[10]==1){?>
<a style='color:red;' onclick='DOIT1(<?=$row[0]?>,<?=$row[0]?>)'>Completaste tu registro?</a><br><a id='<?=$row[0]?>'></a>
<? }?>
</center></td>
<?
$url2="";#2DO BIMESTRE
if($row[11]==0){
    $url2="#";echo '<td><center><a href=\'#divnota\'>No aperturado<i class=\'icon-warning-sign\'></i></a></center></td>';
}
if($row[11]==1){
    $url2='registra1.php';
?>
<td><center>
    <a  TARGET = '_blank' href='<?=$url2?>?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>REGISTRAR</a>
    <br><a style='color:red;' onclick='DOIT2(<?=$row[0]?>,<?=$row[0]?>)'>Completaste tu registro?</a><br><a id='<?=$row[0]?>'></a>
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

$url3='';#3ero BIMESTRE
if($row[12]==0){ $url3='#';?><td><center><a href='#divnota'>No aperturado <i class='icon-warning-sign'></i></a></center></td><? }
if($row[12]==1){ $url3='registra3.php';
?>
<td><center>
<a  TARGET = '_blank' href='<?=$url3?>?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>REGISTRAR</a>
<br><a style='color:red;' onclick='DOIT3(<?=$row[0]?>,<?=$row[0]?>)'>Completaste tu registro?</a><br><a id='<?=$row[0]?>'></a></center></td>
<?}
if($row[12]==3){?>
<td><center><a  TARGET = '_blank' href='imprimir_reg3.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>CONCLUIDO, puedes imprimir! <i class='icon icon-ok'></i></a></center></td><?
}
if($row[12]==2){?>
<td><center><a style='color:green;'  TARGET = '_blank' href='imprimir_reg3.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>Verificado por sistemas <i class='icon icon-ok'></i></a></center></td><?
}
#-------------------------------------------------------------------------------------------------------
$url4='';#4to BIMESTRE
switch ($row[13]) {
    case 0:$url4='#';?><td><center><a href='#divnota'>No aperturado<i class='icon-warning-sign'></i></a></center></td><?break;
    case 1:
        $url4='registra4.php';?>
        <td><center>
        <a  TARGET = '_blank' href='<?=$url4?>?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>REGISTRAR</a>
        <br><a style='color:red;' onclick='DOIT4(<?=$row[0]?>,<?=$row[0]?>)'>Completaste tu registro?</a><br><a id='<?=$row[0]?>'></a></center></td><?break;
    case 2:
        ?>
        <td><center><a style='color:green;'  TARGET = '_blank' href='imprimir_reg4.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>Verificado por sistemas <i class='icon icon-ok'></i></a></center></td><?break;
    case 3:
        ?>
        <td><center><a  TARGET = '_blank' href='imprimir_reg4.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>CONCLUIDO, puedes imprimir! <i class='icon icon-ok'></i></a></center></td><?break;
}
#------------------------------------------------------  ANUAL  ---------------------------------------
echo '<td><center><i class=\'icon-print\'></i></center></td></tr>';
}?>
</table></fieldset><br><br><br><br><br><br>
<div id="divnota" style="background-color: #EFC2C4; padding-left: 15px; padding-top: 15px; font-size: 16px;">
<i>Si tu registro debe notas el I-II-III Bimestre, no podr&aacute;s registrar notas en el IV bimestre del registro en cuesti&oacute;n, te aparecer&aacute; este mensaje: <a style="font-size: 16px;">DEBES NOTA <i class='icon-warning-sign'></i></a>;
<br>Sigue estos pasos:<br><strong>1.</strong>Ingresa las notas faltantes del I-II &oacute; III bimestre del registro que debas notas y guardalas.(El registro esta abierto para ingresar notas)<br><strong>2.</strong>Env&iacute;ame un mensaje a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a> indicando el n&uacute;mero de registro para verificar que no debas notas y poder habilitar el ingreso de notas al IV bimestre.<br><br>
En caso ocurra un error y usted no deba notas; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>Si un alumno es nuevo y afecta a su registro inhabilit&aacute;ndolo; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>Si un alumno est&aacute; enfermo y por ende no ha sido calificado y afecta a su registro inhabilit&aacute;ndolo; comuniquese a <a TARGET = '_blank' href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a><br>Si el alumno est&aacute; retirado no olvide poner <strong>-1</strong><br>Si el alumno est&aacute; exonerado no olvide poner <strong>-2</strong>
</i></div>
</form>
</div><br><br><br><br><br><br><br><br><br>
    <?php }?>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/ajax.js"></script>

<script type="text/javascript">
function DOIT(valueinn,num){
eliminar=confirm("Terminaste de llenar tus notas?");
if(eliminar){
ajaxdelet3(valueinn,num);
cargar();
}
}

function DOIT1(valueinn,num){
eliminar=confirm("Terminaste de llenar tus notas?");
if(eliminar){
ajaxdelet1(valueinn,num);
cargar();
}
}

function DOIT3(valueinn,num){
eliminar=confirm("Terminaste de llenar tus notas?");
if(eliminar){
ajaxdelet4(valueinn,num);
cargar();}
}
</script>
</html>