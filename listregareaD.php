<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Registro De Notas :D</title>
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<style type="text/css">
    @import "Include/DataTables-1.9.4/media/css/demo_table.css";
    @import "Include/DataTables-1.9.4/media2/css/ColReorder.css";
    @import "Include/DataTables-1.9.4/extras/ColVis/media/css/ColVis.css";
    .f5{width: 200px; height: 40px; background: #6699FF; color: #ffffff; cursor: pointer; border: 1px; }
</style></head>
<body><?php
require_once 'Includes/navegador.php';require_once 'Class/Docente.php';
$Doce= new Docente();$dni=$_SESSION['dni'];require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo "<script>window.location = 'index.php'</script>";
}else {
?>
<div style="margin-left: 4%;margin-right: 4%;">
<form><fieldset><center><table class="table table-hover" id="listadocentes">
<thead><tr class="success"><th style="width: 10%;">Registro</th><th style="width: 15%;">Secci&oacute;n</th><th style="width: 13%">Asignatura</th><th style="width: 17%">Docente Responsable</th><th style="width: 9%;"><center>I</center></th><th style="width: 9%;"><center>II</center></th><th style="width: 9%;"><center>III</center></th><th style="width: 9%;"><center>IV</center></th><th style="width: 9%;"><center>ANUAL</center></th></tr></thead>
<tbody>
<?php
$lista=$Doce->RegistroDocentearea();
while ($row = mysql_fetch_array($lista)) {
?>
<tr><td><b>REGISTRO N&#176;</b><?php echo $row[0];?></td><td><?php echo $row[2].$row[3];?> DE <b><?php echo $row[1];?></b></td><td><?php echo $row[7];?></td><td><?php echo $row[4];?></td>

<td><center><a  TARGET = '_blank' href='registra.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-eye-open'></i></a><a  TARGET = '_blank' href='imprimir_reg.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0]?>'><i class='icon-search'></i></a></center></td>
<td><center><a  TARGET = '_blank' href='registra1.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-eye-open'></i></a><a  TARGET = '_blank' href='imprimir_reg1.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-search'></i></a></center></td>
<td><center><a  TARGET = '_blank' href='registra3.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-eye-open'></i></a><a  TARGET = '_blank' href='imprimir_reg3.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-search'></i></a></center></td>

<td><center><a  TARGET = '_blank' href='#?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-eye-open'></i></a>
<a  TARGET = '_blank' href='#.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-search'></i></a></center></td>

<td><center><a  TARGET = '_blank' href='#.php?sinatura=<?php echo $row[8];?>&seccion=<?php echo $row[9];?>&registro=<?php echo $row[0];?>'><i class='icon-search'></i></a></center></td></tr>
<?php }?></tbody>
<tfoot><tr class="success">
<th style="width: 10%;">Registro</th><th style="width: 15%;">Secci&oacute;n</th><th style="width: 13%">Asignatura</th><th style="width: 17%">Docente Responsable</th>
<th style="width: 9%;"><center>I</center></th><th style="width: 9%;"><center>II</center></th><th style="width: 9%;"><center>III</center></th><th style="width: 9%;"><center>IV</center></th><th style="width: 9%;"><center>ANUAL</center></th></tr></tfoot></table></center>
</fieldset></form></div>
<br><br><br><br><br><br><br>
    </body>
    <?php }?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="Include/DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="Include/DataTables-1.9.4/media2/js/ColReorder.js"></script>
<script type="text/javascript" src="Include/DataTables-1.9.4/extras/ColVis/media/js/ColVis.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#listadocentes').dataTable( {
        "sPaginationType": "full_numbers"
    } );
} );
</script></html>