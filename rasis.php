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

/*--------------------------------------MANTENIMIENTO-----------------------------------*/
//Listar registros
#BUCLE REPETITIVO
if(isset($_REQUEST['GRABAR'])){ // se envio el formulario?
for($x =1 ; $x <= 35; $x++){//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite
    $ALUSEC->setIDALUMNOSECCION($_REQUEST['txtalumnose'.$x]);
    $ALUSEC->setFJ1($_REQUEST['txtfj'.$x]);
    $ALUSEC->setFI1($_REQUEST['txtfi'.$x]);
    $ALUSEC->setT1($_REQUEST['txtt'.$x]);
   # $ALUSEC->UPDATEFIT($_REQUEST['txtalumnose'.$x]);
}
    echo "<script>window.location = 'regasistencia.php'</script>";
}
/*--------------------------------------------------------------------------------------*/
?>
<center>
<div id="divrasis" style="width: 50%">
    <br>
<form id="frmasis" method="post" action="rasis.php?GRABAR=0">
    <fieldset>
        <table class="table">
            <tr class="gradeA">
                <td style="display: none;"></td>
                <th style="width: 8%;"><center><a style='font-size: 13px;color: green;'>N° &Oacute;rden</a></center></th>
                <th style="width: 50%;"><center><a style='font-size: 13px;color: green;'>Alumno</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 13px;color: green;'>FJ</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 13px;color: green;'>FI</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 13px;color: green;'>T</a></center></th>
            </tr>
<?php
$litalumsec=$DOCENAU->ALUMNOSDELAUXILIAR($seccionauxi);
while ($filaes = mysql_fetch_array($litalumsec)) {
    if($filaes[5]==0){
        $filaes[5]="";
    }
    if($filaes[6]==0){
        $filaes[6]="";
    }
    if($filaes[7]==0){
        $filaes[7]="";
    }
    echo "
    <tr>
        <td style='display:none;'><input type='text' id='txtalumnose$filaes[1]' name='txtalumnose$filaes[1]' value='$filaes[0]' /></td>
        <td><center><a style='font-size: 12px; color:black;'>$filaes[1]</a></center></td>
        <td><a style='font-size: 12px; color:black;'>$filaes[2] $filaes[3]  ,$filaes[4]</a></td>
        <td><input style='width:60%;' type='text' id='txtfj$filaes[1]' name='txtfj$filaes[1]' value='$filaes[5]' maxlength=2 placeholder='-'/></td>
        <td><input style='width:60%;' type='text' id='txtfi$filaes[1]' name='txtfi$filaes[1]' value='$filaes[6]' maxlength=2 placeholder='-'/></td>
        <td><input style='width:60%;' type='text' id='txtt$filaes[1]' name='txtt$filaes[1]' value='$filaes[7]' maxlength=2 placeholder='-'/></td>
    </tr>
        ";
}
?>
        </table>
    </fieldset>
    
<center>
<div class="form-actions">
<button type="submit"class="btn btn-primary" style="display:none;">GRABAR/ACTUALIZAR LA ASISTENCIA</button>
</div>
</center>

</form>
</div>
</center>
<?php
?>
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