<?php session_start();?>

<?php
require_once 'Class/Docente.php';
$Doce= new Docente();
$dni=$_SESSION['dni'];
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo "<script>window.location = 'index.php'</script>";
}else {
?>
<div style="margin-left: 2%;margin-right: 2%;">
<form>
<fieldset>
<legend>Bimestre Actual:II</legend>
<i>Revisen la lista del alumnado, asi como los registros que aparecen, en caso encuentren equivocaciones comunicar a la Subdireccion correspondiente o acercarse a la Subdireccion General- Oficina De Sistemas.</i>
<table class="table table-hover">
<thead><tr class="success">
<th style="width: 10%;">Registro</th>
<th style="width: 20%;">Secci&oacute;n</th>
<th style="width: 15%">Asignatura</th>
<th style="width: 11%;"><center>I</center></th>
<th style="width: 17%;"><center>II</center></th>
<th style="width: 11%;"><center>III</center></th>
<th style="width: 11%;"><center>IV</center></th>
<th style="width: 5%;"><center>ANUAL</center></th>
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
  	<a  TARGET = '_blank' href='$url2?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>REGISTRAR</a>
        <br><a style='color:red;' onclick='DOIT($row[0],$row[0])'>Completaste tu registro?</a>
        <br><a id='$row[0]'></a>
  </center></td>
    ";
}
if($row[11]==3){
echo "
  <td><center>
        <a  TARGET = '_blank' href='imprimir_reg1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>CONCLUIDO, puedes imprimir! <i class='icon icon-ok'></i></a>
  </center></td>
    ";
}
if($row[11]==2){
echo "
  <td><center>
        <a style='color:green;'  TARGET = '_blank' href='imprimir_reg1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Verificado por sistemas <i class='icon icon-ok'></i></a>
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
<br><br><br><br>
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
<br><br><br><br><br><br><br><br><br>
    <?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/ajax.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript">
function DOIT(valueinn,num){
eliminar=confirm("Terminaste de llenar tus notas?");
if(eliminar){
ajaxdelet(valueinn,num);
cargar();
}
}
</script>
</html>