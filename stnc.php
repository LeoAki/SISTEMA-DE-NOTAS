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
</head>
<body>
<?php
require_once 'Class/Docente.php';
require_once 'Class/ALUMNO_SECCION.php';
$DOCENAU=new Docente();
$ALUSEC=new ALUMNO_SECCION();

$seccionauxi= $_GET['seccionauxi'];
$bimestreconsultado=$_GET['bimestre'];
$tutoriasenior=$_GET['ut'];
$cantidadalumnos=0;
$alumn_retirados=0;

$whois=$DOCENAU->NAMESECCIOMICARGO($tutoriasenior);
if($filanamesection=  mysql_fetch_array($whois)){
$gradoname=$filanamesection[0];
$nameseccionnow=$filanamesection[1];
$nomnivelsection=$filanamesection[2];
}
?>
<center>
<div id="divrasis" style="width: 63%">
<?php
echo "<h3>ASISTENCIA DEL ".$bimestreconsultado." BIMESTRE.</h3>
      AULA: [$gradoname $nameseccionnow $nomnivelsection]</b><br>";
?>
    
<div>
    
        <table>
            <tr>
                <td style="display: none;"></td>
                <th style="width: 8%;"><center><a style='font-size: 11px;'>N° &Oacute;rden</a></center></th>
                <th style="width: 40%;"><center><a style='font-size: 11px;'>Alumno</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 11px;'>FJ</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 11px;'>FI</a></center></th>
                <th style="width: 5%;"><center><a style='font-size: 11px;'>T</a></center></th>
            </tr>
<?php
$litalumsec=$DOCENAU->ALUMNOSDELAUXILIARPORBIMESTRE($seccionauxi, $bimestreconsultado);
while ($filaes = mysql_fetch_array($litalumsec)) {
#conteo de alumnos matriculados
$cantidadalumnos=$cantidadalumnos+1;

#cambiar -1 por R
    if($filaes[5]=='-1'){
        $filaes[5]="R";
    }else if($filaes[5]=='0'){
        $filaes[5]="-";
    }
    if($filaes[6]==-1){
        $filaes[6]="R";
    }else if($filaes[6]=='0'){
        $filaes[6]="-";
    }
    if($filaes[7]==-1){
        $filaes[7]="R";
    }else if($filaes[7]=='0'){
        $filaes[7]="-";
    }
    if($filaes[5]=="R" or $filaes[6]=="R" or $filaes[7]=="R"){
        $alumn_retirados=$alumn_retirados+1;
    }
    echo "
    <tr>
        <td style='display:none;'><input type='text' id='txtalumnose$filaes[1]' name='txtalumnose$filaes[1]' value='$filaes[0]' /></td>
        <td><center><a style='font-size: 10px'>$filaes[1]</a></center></td>
        <td><a style='font-size: 10px'>$filaes[2] $filaes[3]  ,$filaes[4]</a></td>
        <td><center><a style='font-size: 11px;'>$filaes[5]</a></center></td>
        <td><center><a style='font-size: 11px;'>$filaes[6]</a></center></td>
        <td><center><a style='font-size: 11px;'>$filaes[7]</a></center></td>
    </tr>
        ";
}
?>
        </table>
</div>
<?php
echo "<a style='font-size:12px;'>Alumnos matriculados: $cantidadalumnos  Alumnos retirados:$alumn_retirados</a>
<br><br><br><br>
--------------------------------------------------------
<br>";
echo "<a style='font-size:12px;'>OFICINA DE SISTEMAS</a>";
echo "<br><a style='font-size:12px;'>Impreso el ".date("d-F-Y")."</a>";
?>
</div>
</center>
<a class="button" href="javascript:imprSelec('divrasis')">IMPRIMIR LA PAGINA</a>
<?php
}
?>
</body>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
</html>