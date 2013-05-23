<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Mi Asistencia</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>
<!-- BOOTSTRAP--css------------------------------------------------ -->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
</head>

<body>
<?php 
#requiere
require_once 'Includes/navegador.php';    
require_once 'Includes/infoalumno.php';

require_once 'Class/ALUMNO_SECCION.php';
$alumnosectionasos=new ALUMNO_SECCION();
$listttt=$alumnosectionasos->Listdetallealumsection($_SESSION['idpersona']);

while ($rowlisttt = mysql_fetch_array($listttt)) {
    $obtengo1=$rowlisttt[0];
    $obtengo2=$rowlisttt[1];
    $obtengo3=$rowlisttt[2];
    $obtengo4=$rowlisttt[3];
    $obtengo5=$rowlisttt[4];
    $obtengo6=$rowlisttt[5];
    $obtengo7=$rowlisttt[6];
    $obtengo8=$rowlisttt[7];
    $obtengo9=$rowlisttt[8];
    $obtengo10=$rowlisttt[9];
    $obtengo11=$rowlisttt[10];
    $obtengo12=$rowlisttt[11];
    $obtengo13=$rowlisttt[12];
    $obtengo14=$rowlisttt[13];
}

echo "
<center>
<div id='ojo' style='width: 90%;'>
    <h3 style='color: green'>CONSOLIDADO DEL REGISTRO DE ASISTENCIA</h3>
    
    <table class='table table-bordered'>
        <tr class='info'>
            <td colspan='3'><strong><center>I BIMESTRE</center></strong></td>
            <td colspan='3'><strong><center>II BIMESTRE</center></strong></td>
            <td colspan='3'><strong><center>III BIMESTRE</center></strong></td>
            <td colspan='3'><strong><center>IV BIMESTRE</center></strong></td>
            <td colspan='3'><strong><center>ANUAL</center></strong></td>
        </tr>
        <tr class='error'><!--alert-->
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td>
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td>
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td>
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td> 
            <td style='text-align:justify'><b>TOTAL<br>FALTAS<br>JUSTIFICADAS</b></td>
            <td style='text-align:justify'><b>TOTAL<br>FALTAS<br>INJUSTIFICADAS</b></td>
            <td style='text-align:justify'><b>TOTAL<br>TARDANZAS</b></td>
        </tr>
        <tr class='alert'>
            <td>$obtengo3</td>
            <td>$obtengo4</td>
            <td>$obtengo5</td>
            <td>$obtengo6</td>
            <td>$obtengo7</td>
            <td>$obtengo8</td>
            <td>$obtengo9</td>
            <td>$obtengo10</td>
            <td>$obtengo11</td>
            <td>$obtengo12</td>
            <td>$obtengo13</td>
            <td>$obtengo14</td>";
                $FJTOTAL=$obtengo3+$obtengo6+$obtengo9+$obtengo12;
                $FITOTAL=$obtengo4+$obtengo7+$obtengo10+$obtengo13;
                $TTOTAL=$obtengo5+$obtengo8+$obtengo11+$obtengo14;
            echo "
            <td><b><h4><center>$FJTOTAL</center></h4></b></td>
            <td><b><h4><center>$FITOTAL</center></h4></b></td>
            <td><b><h4><center>$TTOTAL</center></h4></b></td>
        </tr>     
    </table>
</div>
</center>
";

?>
<center>
<a href="javascript:imprSelec('ojo')"><i class="icon-print"></i>Imprimir</a>
</center>
<?php require_once 'Includes/modal-footer.php'; ?>
<?php         } ?>
</body>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
</html>
