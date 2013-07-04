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
<center><h3 style="color: green">Registros De Notas</h3></center>
<img src="Css/images/libro.jpeg" style="width:100px;" class="img-circle"/><i class='alert'>Si eres profesora de inicial, haz clic <a href='regnotainicial.php' class='btn btn-warning'>AQU&Iacute;</a> y obvie lo de abajo</i>
<br>
<form >
<fieldset>
<legend>Bimestre Actual:II</legend>
<i>Revisen la lista del alumnado, asi como los registros que aparecen, en caso encuentren equivocaciones comunicar a la Subdireccion correspondiente o acercarse a la Subdireccion General- Oficina De Sistemas.</i>
<table class="table table-hover">
<thead><tr class="success">
<th style="width: 14%;">Registro</th>
<th style="width: 18%;">Secci&oacute;n</th>
<th style="width: 13%">Asignatura</th>
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
  <td><b>REGISTRO N&#176;</b> $row[0]</td><td>$row[2] $row[3] DE <b>$row[1]</b></td><td>$row[7]</td>";
$url="";$ver="";
if($row[10]==1){
    $url="registra";$ver="Registrar";
}else{
    $url="imprimir_reg";$ver="VER";
}
echo "
  <td><center>
  	<a  TARGET = '_blank' title='Registra' href='$url.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>$ver</a><i class='icon-print'></i>
  </center></td>";
$url2="";
if($row[11]==0){
    $url2="#";
echo "
  <td><center>
  	<a href='#divnota'><i class='icon-hand-left'></i>Debes notas<i class='icon-warning-sign'></i></a>
        <a  TARGET = '_blank' href='imprimir_reg1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'><br>Ver<i class='icon-print'></i></a>
  </center></td>
    ";
}else{
    $url2="registra1.php";
echo "
  <td><center>
  	<a  TARGET = '_blank' href='$url2?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Registrar</a>
        <a  TARGET = '_blank' href='imprimir_reg1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'><i class='icon-print'></i></a>
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
Si tu registro debe notas el I Bimestre, no podr&aacute;s registrar notas en el II bimestre del registro en cuesti&oacute;n, te aparecer&aacute; este mensaje: <a style="font-size: 16px;"><i class='icon-hand-left'></i>Debes notas<i class='icon-warning-sign'></i></a>;<br>
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
<center><em>NOTA:</em><i class='icon-file'></i>Abrir Registro<i class='icon-print'></i>Vista Previa</center>
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
</html>