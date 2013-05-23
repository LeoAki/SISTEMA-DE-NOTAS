<?php session_start();?>
<!DOCTYPE html>
<html>
<head>    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Registra Los Criterios Del Curso</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>
</head>
    <body>
<div id="todo" name="todo">
<?php
require_once 'Class/Component.php';
require_once 'Class/Indicador.php';
require_once 'Class/RegistroAlumnoInicial.php';
require_once 'Class/Usuario.php';
$QUIEN= new Usuario(); 

$INDICAXD= new Indicador();
$REGISTROALUMNO= new RegistroAlumnoInicial();
?>
    <center><a style='color:black;font-size: 12px;'><b>REGISTRO DE NOTAS DEL I BIMESTRE-2013</b></a></center>
<?PHP
$asina = $_GET['sinatura'];
$seccion = $_GET['seccion'];
$registro=$_GET['registro'];
$responsable=$REGISTROALUMNO->Nom_res_registr($registro);
if($rowgeneral=  mysql_fetch_array($responsable)){
    $variable1=$rowgeneral['codigodocente'];
}
$docentevalor=$REGISTROALUMNO->docentevalor($variable1);
if($rowdocente=  mysql_fetch_array($docentevalor)){
    $paternodocente=$rowdocente['paterno'];
    $maternodocente=$rowdocente['materno'];
    $nombresdocente=$rowdocente['nombres'];
}
?>
<table>
<?php
$COMPO = new Component();
$mysql=$COMPO->ListarDatosAsignatura($asina);
if($rowgeneral=  mysql_fetch_array($mysql)){
    $variable1=$rowgeneral['grado'];
    $variable2=$rowgeneral['nomnivel'];
    $variable3=$rowgeneral['asinatura'];
}
$datitossecciones=$COMPO->SECCIONAME($seccion);
if($namesection=  mysql_fetch_array($datitossecciones)){
    $nombredelaseccion=$namesection[1];
}
?>
</table>
</center>
<?php
echo "<a style='color:black;font-size: 10px;'>Nivel:[".$variable2."]-Aula: [".$variable1." ".$nombredelaseccion."]- Profesor:[".$paternodocente." ".$maternodocente." ,".$nombresdocente."]- Asignatura:[".$variable3."]</a>";
?>
<br>    
<br>
<table>
<?php
$COMPONENTE=new Component();
$listar=$COMPONENTE->LISTAR($asina);
while ($row = mysql_fetch_array($listar)) {

    $lista=$INDICAXD->LISTAR($row[0]);
    while ($row2 = mysql_fetch_array($lista)) {
    echo "
            <tr>
                <td><a style='color:black;font-size: 11px;'>[" .$row[1].".". $row2[3]. "]</a></td>
                <td><a style='color:black;font-size: 11px;'>".$row2[2]."</a></td>
             </tr>
    ";
    }
}
?>
</table>
<br>
<form name="frmregistro" method="post" action="registrainicial.php?GRABAR=0"><!--?sinatura=68&seccion=212&registro=412-->
<center>
<table>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><a style='color:black;font-size: 12px;'><b>N°</b></a></td>
    <td><a style='color:black;font-size: 12px;'><b>Alumno</b></a></td>
<?php
$th=$COMPONENTE->LISTAR($asina);
    while ($roth = mysql_fetch_array($th)) {
        $listath=$INDICAXD->LISTAR($roth[0]);
        while ($rowth = mysql_fetch_array($listath)) {
            echo "
    <td class='center' width:2%;><a style='color:black;font-size: 12px;'>$roth[1].$rowth[3]</a></td>
                ";
        }
echo "
    <td style='color:peru;'><a style='color:black;font-size: 12px;'><b>P$roth[1]</b></a></td>";
    }
?>
    <td><a style='color:black;font-size: 12px;'><b>PB</b></a></td>
</tr>
<?php
$reAl = new RegistroAlumnoInicial();
$listaalumnado=$reAl->ListaAlumnoSeccion($seccion);
$count=0;
$retirado=0;
$cantexonerado=0;
$cantidaddead=0;
$cantidaddea=0;
$cantidaddeb=0;
$cantidaddec=0;
while ($alumno = mysql_fetch_array($listaalumnado)) {
$count=$count+1;    
echo "
<tr>
<td><td>
<input type='hidden' name='txtregistro' id='txtregistro' value='$registro'/></td></td>
<td><input type='hidden' name='".$alumno[0]."txtidalumno' id='".$alumno[0]."txtidalumno' value='".$alumno[4]."'/></td>
<td><input type='hidden' name='".$alumno[0]."txtalumnoregistro' id='".$alumno[0]."txtalumnoregistro' value='".$alumno[4].$seccion.$asina."'/></td>
<td style='width:3%;'><a style='color:black;font-size: 11px;'>$alumno[0].</a></td>
<td style='width:50%;'><a style='color:black;font-size: 11px;'>$alumno[1] $alumno[2] ,$alumno[3]</a></td>
";

$td=$COMPONENTE->LISTAR($asina);
    while ($ro = mysql_fetch_array($td)) {
        $lista=$INDICAXD->LISTAR($ro[0]);
        while ($row22 = mysql_fetch_array($lista)) {


$listadice=  RegistroAlumnoInicial::LISTAR($alumno[4].$seccion.$asina);

while ($row11 = mysql_fetch_array($listadice)) {
    
    $exonerado=$row11['p11'];
    
    $valorcelda=$ro[1].$row22[3];   
    $valueespacio=$row11["p$valorcelda"];
    $valorpromedio=$row11["promedio".$ro[1]];
    $pb=$row11["pb"];
}
if($valueespacio=="-2"){
    $valueespacio="EX";
}
if($valueespacio=="-1"){
    $valueespacio="R";
}
if($valueespacio==""){
    $valueespacio="FN";
}
echo "<td class='center' width:3%;><a style='color:black;font-size: 11px;'>$valueespacio</a></td>
                ";
}


if($valorpromedio=="-2"){
    $valorpromedio="EX";
}
if($valorpromedio=="-1"){
    $valorpromedio="R";
}
echo "<td><a style='color:black;font-size: 11px;'><b>$valorpromedio</b></a></td>";
    }

if($pb=="-2"){
    $pb="EX";
}
if ($pb=="-1"){
    $pb="R";
}
echo "<td><a style='color:black;font-size: 11px;'><b>$pb</b></a></td>";
echo "
</tr>
";
if($exonerado=='-1'){
    $retirado=$retirado+1;
}
if($exonerado=='-2'){
        $cantexonerado=$cantexonerado+1;
}
if($pb=='AD'){
    $cantidaddead=$cantidaddead+1;
}
if($pb=='A'){
    $cantidaddea=$cantidaddea+1;
}
if($pb=='B'){
    $cantidaddeb=$cantidaddeb+1;
}
if($pb=='C'){
    $cantidaddec=$cantidaddec+1;
}
}
?>
</table>
</center>
    <br>
<?php
$evaluados=$count-($retirado+$cantexonerado);
$porcentajeaprobado=round((($cantidaddea+$cantidaddead)*100)/$evaluados,2);
$desaprobadosinicial=$cantidaddeb+$cantidaddec;
$porcentajedesaprobado=  round(($desaprobadosinicial*100)/$evaluados,2);
$aprobados=$cantidaddea+$cantidaddead;
echo "
    <a style='color:black;font-size: 11px;'>Matriculados: $count Retirados:$retirado Exonerados:$cantexonerado Evaluados:$evaluados</a><br>
    <a style='color:black;font-size: 11px;'>Nota Minima Aprobatoria: [A] Aprobados:$aprobados ($porcentajeaprobado%) Desaprobados$desaprobadosinicial ($porcentajedesaprobado%)
    Rendimiento: AD=$cantidaddead; A=$cantidaddea; B=$cantidaddeb; C=$cantidaddec</a>    
        
    <br><br>
    <center>
    -------------------<br><a style='color:black;font-size: 11px;'>Prof: $paternodocente $maternodocente, $nombresdocente<br>
    Impreso el ".date("d-F-Y")."  .  Id.Registro:$registro
    </a>
    </center>
";
?>
</div>
        <a class="button" href="javascript:imprSelec('todo')">IMPRIMIR LA PAGINA</a>
</form>
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