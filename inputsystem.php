<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
<!----------------------------------BOOTSTRAP---------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<!----------------------------------DATA-TABLE--------------------------------------------------->
<style type="text/css">

    @import "Include/DataTables-1.9.4/media/css/demo_table.css";
    @import "Include/DataTables-1.9.4/media2/css/ColReorder.css";
    @import "Include/DataTables-1.9.4/extras/ColVis/media/css/ColVis.css";
    thead input { width: 100% }
    input.search_init { color: #999 }
    .f5{width: 200px; height: 40px; background: #6699FF; color: #ffffff; cursor: pointer; border: 1px; }
</style>
<title>LNCC OnLine- Docente</title>
</head>
<?php
require_once 'Class/Docente.php';require_once 'Class/Usuario.php';
$userid=new Usuario();
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {

?>
<body style="background-color: #ffffff">
<?php require_once 'Includes/navegador.php';
$DOCENTE= new Docente(); ?>
<a class="f5" href="javascript:location.reload()">ACTUALIZAR LISTA</a>
<center><table id='listadocentes' name='listadocentes' class="table table-hover">
<thead><tr class="gradeU">
<th>C&oacute;digo</th><th>Usuario</th><th>Descripci&oacute;n</th><th>Fecha Ingreso (a&ntilde;o/ mes/ d&iacute;a)</th><th>Alumno/ Profesor</th>
</tr></thead>
<tbody>
<?php
$lista=$userid->Ingresos();
while ($row1 = mysql_fetch_array($lista)) { echo '<tr class=\'gradeA\'><td>'.$row1[0].'</td><td>'.$row1[1].'</td><td>'.$row1[2].'</td><td>'.$row1[3].'</td><td>'.$row1[4].'</td></tr>';}
?>
</tbody>
<tfoot><tr>
<th>C&oacute;digo</th><th>Usuario</th><th>Descripci&oacute;n</th><th>Fecha Ingreso (a&ntilde;o/ mes/ d&iacute;a)</th><th>Alumno/ Profesor</th></tr>
</tfoot></table></center><br><br><br><br><br><br>
</body>
<?php
require_once 'Includes/modal-footer.php';
}?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
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
