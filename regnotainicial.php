<?php session_start();?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Registra De Notas</title>

<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/></head>
<body>
<?php require_once 'Includes/navegador.php';require_once 'Class/Docente.php';
$Doce= new Docente();$dni=$_SESSION['dni']; ?>
<div style="margin-left: 2%;margin-right: 2%;"><center><h3 style="color: green">Registro De Notas ::   NIVEL INICIAL :D    ::</h3></center>
<img src="Css/images/libro.jpeg" style="width:100px;" class="img-circle"/>  <i class='alert alert-success'>Ahora si misses, guarden con letras, que no habra problema alguno</i>

<fieldset><legend>Bimestre Actual:IV</legend>
<table class="table table-hover">
<thead><tr><th style="width: 10%;">Registro</th><th style="width: 15%;">Secci&oacute;n</th><th style="width: 13%">Asignatura</th><th style="width: 13%;"><center>I</center></th><th style="width: 13%;"><center>II</center></th><th style="width: 13%;"><center>III</center></th><th style="width: 13%;"><center>IV</center></th><th style="width: 10%;"><center>ANUAL</center></th></tr></thead>
<tbody>
<?
$lista=$Doce->RegistroDocente($dni);
while ($row = mysql_fetch_array($lista)):
echo '<tr><td><b>REGISTRO N&#176; </b>'.$row[0].'</td>
      <td>'.$row[2].' '.$row[3].' DE <b>'.$row[1].'</b></td><td>'.$row[7].'</td><td><center><a style=\'color:green;\' TARGET =\'_blank\' href=\'imprimir_reginicial.php?sinatura='.$row[8].'&seccion='.$row[9].'&registro='.$row[0].'\'>Verificado por sistemas <i class=\'icon icon-ok\'></i></a></center></td>';
echo'<td><center><a  style=\'color:green;\' TARGET =\'_blank\' href=\'imprimir_reginicial2.php?sinatura='.$row[8].'&seccion='.$row[9].'&registro='.$row[0].'\'>Verificado por sistemas <i class=\'icon icon-ok\'></i></a></center></td>';
echo '<td>
<center><a style=\'color:blue;display:none;\' TARGET =\'_blank\' href=\'registrainicial3.php?sinatura='.$row[8].'&seccion='.$row[9].'&registro='.$row[0].'\'>HABILITADO<i class=\'icon icon-ok\'></i></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a  style=\'color:green;\' TARGET =\'_blank\' href=\'imprimir_reginicial3.php?sinatura='.$row[8].'&seccion='.$row[9].'&registro='.$row[0].'\'>Verificado por sistemas<i class=\'icon icon-ok\'></i></a>
</center></td>';


if($row[13]=='1'){
echo '<td>
<center><a style=\'color:blue;\' TARGET =\'_blank\' href=\'registrainicial4.php?sinatura='.$row[8].'&seccion='.$row[9].'&registro='.$row[0].'\'>HABILITADO<i class=\'icon icon-ok\'></i></a>
&nbsp;&nbsp;&nbsp;&nbsp;</center></td>';
}else{
echo '<td>
<center><a  style=\'color:green;display:;\' TARGET =\'_blank\' href=\'imprimir_reginicial4.php?sinatura='.$row[8].'&seccion='.$row[9].'&registro='.$row[0].'\'>Verificado por sistemas<i class=\'icon icon-ok\'></i></a>
</center></td>';
}
?>

<td><center><i class='icon-print'></i></center></td>
</tr>
<? endwhile;?>
</tbody>
</table></fieldset></div>
<?php require_once 'Includes/modal-footer.php';?>    </body>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script><script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>