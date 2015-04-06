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
    $ALUSEC->setFJ4($_REQUEST['txtfj'.$x]);
    $ALUSEC->setFI4($_REQUEST['txtfi'.$x]);
    $ALUSEC->setT4($_REQUEST['txtt'.$x]);
    $ALUSEC->UPDATEFIT($_REQUEST['txtalumnose'.$x]);
}
    echo "<script>window.location = 'regasistencia.php'</script>";
}
/*--------------------------------------------------------------------------------------*/
?>
<div style="margin-left: 18%;margin-right: 18%;">
    <br>
<form id="frmasis" method="post" action="rasis.php?GRABAR=0">
    <fieldset>
        <table class="table table-striped">
<tr>
<td style="display: none;"></td>
<th style="width: 8%;"><center><a style='font-size: 16px;color: green;'>N&#176; &Oacute;RDEN</a></center></th>
<th style="width: 40%;"><center><a style='font-size: 16px;color: green;'>ALUMNO</a></center></th>
<th style="width: 5%;"><center><a style='font-size: 16px;color: green;'>F.J.</a></center></th>
<th style="width: 5%;"><center><a style='font-size: 16px;color: green;'>F.I.</a></center></th>
<th style="width: 5%;"><center><a style='font-size: 16px;color: green;'>Tard.</a></center></th>
</tr>
<?php
$litalumsec=$DOCENAU->ALUMNOSDELAUXILIAR($seccionauxi);
while ($filaes = mysql_fetch_array($litalumsec)) {
    if($filaes[5]==0) $filaes[5]='';
    if($filaes[6]==0) $filaes[6]='';
    if($filaes[7]==0) $filaes[7]='';
?>
<tr>
<td style='display:none;'><input type='text' id='txtalumnose<?=$filaes[1]?>' name='txtalumnose<?=$filaes[1]?>' value='<?=$filaes[0]?>' /></td>
<td><center><a style='font-size: 12px; color:black;'><?=$filaes[1]?></a></center></td>
<td><a style='font-size: 12px; color:black;'><?=$filaes[2].' '.$filaes[3].'  ,'.$filaes[4];?></a></td>

<td><input style='width:60%;' type='text' id='txtfj<?=$filaes[1]?>' name='txtfj<?=$filaes[1]?>' value='<?=$filaes[5]?>' maxlength=2 placeholder='-'/></td>
<td><input style='width:60%;' type='text' id='txtfi<?=$filaes[1]?>' name='txtfi<?=$filaes[1]?>' value='<?=$filaes[6]?>' maxlength=2 placeholder='-'/></td>
<td><input style='width:60%;' type='text' id='txtt<?=$filaes[1]?>' name='txtt<?=$filaes[1]?>' value='<?=$filaes[7]?>' maxlength=2 placeholder='-'/></td>
</tr>
<? } ?>
        </table>
    </fieldset>

<center>
<div class="form-actions">
<button type="submit"class="btn btn-primary">GRABAR/ACTUALIZAR LA ASISTENCIA</button>
</div>
</center>

</form>
</div>

<?php
}
?>
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