<?php
session_start();
$dnidocenteauxiliar=$_SESSION['dni'];
?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Registra La Asistencia de tus Secciones</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
<body>
<?php
require_once 'Includes/navegador.php';
require_once 'Class/Docente.php';
$DOCENAUXI=new Docente();
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>

<div style="margin-left: 5%;margin-right: 5%;">
<center><h3 style="color: green">SECCIONES A TU CARGO:</h3></center>
<table class="table table-hover">
<thead>
<tr class="">
<th style="width: 13%;color: teal;">SECCI&Oacute;N</th>
<th style="width: 27%;color: teal;"><center>TUTOR</center></th>
<th style="width: 10%;color: teal;"><center>I</center></th>
<th style="width: 10%;color: teal;"><center>II</center></th>
<th style="width: 10%;color: teal;"><center>III</center></th>
<th style="width: 10%;color: teal;"><center>IV</center></th>
<th style="width: 10%;color: teal;"><center>ANUAL</center></th>
</tr>
</thead>
<tbody>

<?php
$misseccionesauxi=$DOCENAUXI->SECCIONAUXILIAR($dnidocenteauxiliar);
while ($datosseccion = mysql_fetch_array($misseccionesauxi)) {
    $sectionis=$datosseccion[1].$datosseccion[2].' '.$datosseccion[3];
?>
<tr>
    <td><?=$datosseccion[1].$datosseccion[2].' '.$datosseccion[3];?></td>
    <td><?=$datosseccion[4]?></td>

<td><center>
<a TARGET='_blank' href='verasistencia.php?seccionauxi=<?=$datosseccion[0]?>&bimestre=1&tutoraula=<?=$datosseccion[4]?>&secc=<?=$sectionis?>'>
<i class='icon-print'></i></a>
</center></td>

<td><center>
<a TARGET='_blank' href='verasistencia.php?seccionauxi=<?=$datosseccion[0]?>&bimestre=2&tutoraula=<?=$datosseccion[4]?>&secc=<?=$sectionis?>'>
<i class='icon-print'></i></a>
</center></td>

<td><center>
<a TARGET='_blank' href='verasistencia.php?seccionauxi=<?=$datosseccion[0]?>&bimestre=3&tutoraula=<?=$datosseccion[4]?>&secc=<?=$sectionis?>'>
&nbsp;&nbsp;&nbsp;<i class='icon-print'></i></a>
</center></td>

<td><center>
<a style='color:green;' href='rasis.php?seccionauxi=<?=$datosseccion[0]?>'><i>Registrar</i></a>
<a TARGET='_blank' href='verasistencia.php?seccionauxi=<?=$datosseccion[0]?>&bimestre=4&tutoraula=<?=$datosseccion[4]?>&secc=<?=$sectionis?>'>
<i class='icon-print'></i></a>
</center></td>

<td><center>
<a TARGET='_blank' href='verasisanual.php?seccionauxi=<?=$datosseccion[0]?>&tutoraula=<?=$datosseccion[4]?>&secc=<?=$sectionis?>'>
<i class='icon-print'></i></a>
</center></td>
</tr>
<?}?>

</tbody>
</table>
</div>
<br>
<?php require_once 'Includes/modal-footer.php';
}?>
</body>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>