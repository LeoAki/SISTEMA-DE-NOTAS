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
<!----------------------------------DATA-TABLE--------------------------------------------------->
<style type="text/css">

    @import "Include/DataTables-1.9.4/media/css/demo_table.css";
    @import "Include/DataTables-1.9.4/media2/css/ColReorder.css";
    @import "Include/DataTables-1.9.4/extras/ColVis/media/css/ColVis.css";
    .f5{width: 200px; height: 40px; background: #6699FF; color: #ffffff; cursor: pointer; border: 1px; }
</style>
    </head>
    <body>
        <?php
        require_once 'Includes/navegador.php';
        require_once 'Class/Docente.php';
        $Doce= new Docente();
        $dni=$_SESSION['dni'];
        $areaprocedente=$_GET['cargo'];
        require_once 'Class/Usuario.php';
        if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
    session_destroy();
                    echo "<script>window.location = 'index.php'</script>";
}else {
#if determinantes
if($areaprocedente=="DOCENTE EDUCACION FISICA") $areaquery="Educacion Fisica";
if(
    $areaprocedente=="DOCENTE ARTE FOLKLORE" or
    $areaprocedente=="DOCENTE ARTE EDUCACION ARTISTICA" or
    $areaprocedente=="DOCENTE TALLER  EDUC.ARTISTICA"
){
     if($dni=="25799428" || $dni=="08673413" || $dni=="25690686" || $dni=="25472807" || $dni=="07314041"){
         $areaquery="Arte";
     }

     if($dni=="07619580") $areaquery="arti";
     if($dni=="09271403") $areaquery="arti";
     if($dni=="23925058") $areaquery="trabajo";
     if($dni=="19188555") $areaquery="trabajo";
     if($dni=="10696035") $areaquery="trabajo";
}
if($areaprocedente=="DOCENTE TEATRO") $areaquery="Artistica";
if($areaprocedente=="DOCENTE TALLER (ELECTRONICA)") $areaquery="trabajo";
if($areaprocedente=="DOCENTE TALLER CARPINTERIA") $areaquery="trabajo";
if($areaprocedente=="DOCENTE INGLES") $areaquery="ingles";
#fin de los if
?>
<div style="margin-left: 4%;margin-right: 4%;">

<form>
<fieldset>
<legend>Bimestre Actual:II</legend>
<i class=''>Recuerden que cada registro tiene un profesor responsable.</i>

<center>
<table class="table table-hover" id="listadocentes">
    <thead>
        <tr class="success">
            <th style="width: 10%;">Registro</th>
            <th style="width: 15%;">Secci&oacute;n</th>
            <th style="width: 13%">Asignatura</th>
            <th style="width: 17%">Docente Responsable</th>
            <th style="width: 9%;"><center>I</center></th>
            <th style="width: 9%;"><center>II</center></th>
            <th style="width: 9%;"><center>III</center></th>
            <th style="width: 9%;"><center>IV</center></th>
            <th style="width: 9%;"><center>ANUAL</center></th>
        </tr>
     </thead>
<tbody>
<?php
$lista=$Doce->RegistroDocentearea($areaquery);
while ($row = mysql_fetch_array($lista)) {
echo "
<tr>
<td><b>REGISTRO N&#176;</b> ".$row[0]."</td>
<td>".$row[2]." ".$row[3]." DE <b>".$row[1]."</b></td>
<td>$row[7]</td>
<td>$row[4]</td>
<td>
<center>
<a  TARGET = '_blank' href='imprimir_reg.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Ver<i class='icon-print'></i></a>
<a  TARGET = '_blank' href='imprimir_reg.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Ver<i class='icon-print'></i></a>
</center>
</td>
<td>
<center>
<a  TARGET = '_blank' href='registra1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Registrar<i class='icon-file'></i></a>
</center>
</td>
<td>
<center>
<i class='icon-file'></i>
<i class='icon-print'></i>
</center>
</td>
<td>
<center>
<i class='icon-file'></i>
<i class='icon-print'></i>
</center>
</td>
<td>
<center>
<i class='icon-print'></i>
</center>
</td>
</tr>
";
}
?>
</tbody>
<tfoot>
<tr class="success">
    <th style="width: 10%;">Registro</th>
    <th style="width: 15%;">Secci&oacute;n</th>
    <th style="width: 13%">Asignatura</th>
    <th style="width: 17%">Docente Responsable</th>
    <th style="width: 9%;"><center>I</center></th>
    <th style="width: 9%;"><center>II</center></th>
    <th style="width: 9%;"><center>III</center></th>
    <th style="width: 9%;"><center>IV</center></th>
    <th style="width: 9%;"><center>ANUAL</center></th>
</tr>
</tfoot>
</table>
</center>
                </fieldset>
            </form>
        </div>

<center>        <em>NOTA:</em>
		<i class='icon-file'></i>Abrir Registro
		<i class='icon-print'></i>Vista Previa
</center>
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

</script>
</html>