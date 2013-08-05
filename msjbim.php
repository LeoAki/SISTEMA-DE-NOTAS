<?php session_start();
$dnidocenteusario=$_GET['sendcode'];
?>
<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Msj</title>
    </head>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>
    <body>
        <?php
include_once 'Class/Docente.php';
include_once 'Class/Niveles.php';
include_once 'Class/ALUMNO_SECCION.php';
$DOCENTE=new Docente();
$niv=new Niveles();
$ALUMNOSECCION= new ALUMNO_SECCION();
?>
<div id="primer">
<?php
$generalseccion=$DOCENTE->NAMESECCIOMICARGO($dnidocenteusario);
if($filanamesection=  mysql_fetch_array($generalseccion)){
$gradoname=$filanamesection[0];
$nameseccionnow=$filanamesection[1];
$nomnivelsection=$filanamesection[2];
}
echo "<a style='font-size:12px;'>NIVEL:[$nomnivelsection] SECCION: [$gradoname $nameseccionnow]";
echo "<center><h3><b>OBSERVACIONES PARA LOS ALUMNOS DE LA SECCION: $gradoname $nameseccionnow - $nomnivelsection</b></h3><h2>- I BIMESTRE</h2></center>";
?>
    <div id="msjj">

                    <table class="display">
                        <tr class="gradeU">
                            <td style="display: none;"></td>
                            <td><a style='font-size:12px;'><b>N° &Oacute;rden</b></a></td>
                            <td><a style='font-size:12px;'><b>ALUMNO</b></a></td>
                            <td><a style='font-size:12px;'><b>OBSERVACI&Oacute;N</b></a></td>
                        </tr>

<?php
        $whoisalumno=$niv->mensajesalumnos($dnidocenteusario);
        while ($row = mysql_fetch_array($whoisalumno)) {
                        echo "
                            <tr>
                            <td style='display:none;'><input type='text' value='$row[0]' id='txtcodigo$row[1]' name='txtcodigo$row[1]'/></td>
                            <td><a style='font-size:12px;'>$row[1]</a></td>
                            <td><a style='font-size:12px;'>$row[2] $row[3] ,$row[4]</a></td>
                            <td><a style='font-size:12px;'>$row[5]</a></td>
                            </tr>";
        }
?>
                    </table>
    </div>
<?php
echo "
<br><br><br><br>
<center>
------------------------------------------------------------------------------------------------
<br><a style='color:black;font-size: 11px;'>OFICINA DE SISTEMAS<br>
    Impreso el ".date("d-F-Y")."
    </a>
    </center>";
?>

</div>
<a class="button" href="javascript:imprSelec('primer')">IMPRIMIR LA PAGINA</a>
</body>
<?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
</html>