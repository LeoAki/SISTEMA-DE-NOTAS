<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--REGISTRA LA ASISTENCIA DEL ALUMNO</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>
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
require_once 'Class/ALUMNO_SECCION.php';
$DOCENAU=new Docente();
$ALUSEC=new ALUMNO_SECCION();
$seccionauxi= $_GET['seccionauxi'];
$bimestreconsultado=$_GET['bimestre'];
$quientutor=$_GET['tutoraula'];
$sectionisquien=$_GET['secc'];
?>
<center>
<div id="divrasis" style="width: 50%">
    <?php echo "<h5><a>Asistencia del ".$bimestreconsultado." bimestre.<br>AULA: ".$sectionisquien."<br>TUTOR: $quientutor</a></h5>";?>
    <br>
<form id="frmasis" method="post" action="rasis.php?GRABAR=0">
    <fieldset>
        <table class="table">
            <tr class="gradeA">
                <td style="display: none;"></td>
                <th style="width: 8%;"><center><a style='font-size: 12px;color: green;'>N° &Oacute;rden</a></center></th>
                <th style="width: 50%;"><center><a style='font-size: 12px;color: green;'>Alumno</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 12px;color: green;'>FJ</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 12px;color: green;'>FI</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 12px;color: green;'>T</a></center></th>
            </tr>
<?php
$litalumsec=$DOCENAU->ALUMNOSDELAUXILIARPORBIMESTRE($seccionauxi, $bimestreconsultado);
while ($filaes = mysql_fetch_array($litalumsec)) {
    if($filaes[5]==0){
        $filaes[5]="-";
    }
    if($filaes[6]==0){
        $filaes[6]="-";
    }
    if($filaes[7]==0){
        $filaes[7]="-";
    }
    echo "
    <tr>
        <td style='display:none;'><input type='text' id='txtalumnose$filaes[1]' name='txtalumnose$filaes[1]' value='$filaes[0]' /></td>
        <td><center><a style='font-size: 11px; color:black;'>$filaes[1]</a></center></td>
        <td><a style='font-size: 11px; color:black;'>$filaes[2] $filaes[3]  ,$filaes[4]</a></td>
        <td><center><a style='font-size: 12px;'>$filaes[5]</a></center></td>
        <td><center><a style='font-size: 12px;'>$filaes[6]</a></center></td>
        <td><center><a style='font-size: 12px;'>$filaes[7]</a></center></td>
    </tr>
        ";
}
?>
        </table>
    </fieldset>
</form>
</div>
</center>
<?php
require_once 'Includes/modal-footer.php';?>
<?php
}
?>
</body>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>