<!DOCTYPE html>
<html>
<?php session_start();?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Mi Boleta De Notas</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/><link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
<body style="background-color: oldlace">
<?
require_once 'Includes/navegador.php';require_once 'Includes/infoalumno.php';require_once 'Class/Asinatura.php';

require_once 'Class/RegistroAlumnoInicial.php';
$regininew=new RegistroAlumnoInicial();

require_once 'Class/RegistroAlumno.php';
$regalumsecprinew=new RegistroAlumno();

require_once 'Class/Alumn.php';
$alumnnew= new Alumn();
$SINATURAGENERAL=new Asinatura();

$formalu=$alumnnew->UserAlumSeccion($idperson);
while ($rowalupersona = mysql_fetch_array($formalu)) {
    $alumno_seccionm=$rowalupersona[1];#alumnoseccion
}
?>
       
<div id="miboleta">
<center><h3 style="color: green">BOLETA DE NOTAS</h3></center>
<a class="text-error">SECCI&Oacute;N:</a><a class='text-info'><i><?=$gradoedu?>&#176<?=$namesec?></i><b> NIVEL:</b><i><?=$niveledu?></i><br></a>
<a class="text-error">ALUMNO: </a><a class='text-info'><?=$paterno.' '.$materno.' ,'.$nombrestodos;?></a>

<center>
<table class="table" style="width: 80%;">
<thead>
<tr><th>ASIGNATURAS</th><th>I B</th><th>II B</th><th>III B</th><th>IV B</th></tr>
</thead>
<tbody>                 
<?php $sinagene=$SINATURAGENERAL->ListaDescriptiva($gradoedu, $niveledu);
while ($rowsinaturegene = mysql_fetch_array($sinagene)) {
?><tr><td><?=$rowsinaturegene[4];#ASIGNATURA?></td>
<?
#------------------------I bimestre
if($niveledu=="INICIAL"):
    $viewregin1=$regininew->LISTAR($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas1 = mysql_fetch_array($viewregin1)) {
    $pbview1=$rowviewnotas1["pb"];
    echo '<td>'.$pbview1.'</td>';}
endif;

if($niveledu=="SECUNDARIA"):
    $viewregi11=$regalumsecprinew->LISTAR($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas11 = mysql_fetch_array($viewregi11)) {
    $pbview11=$rowviewnotas11["1pb"];
    if($pbview11=='' || $pbview11==0) $pbview11='FN';
    echo '<td>'.$pbview11.'</td>';}
endif;

if($niveledu=="PRIMARIA"):
$viewregi11=$regalumsecprinew->LISTAR($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas11 = mysql_fetch_array($viewregi11)):
        $pbview11=$rowviewnotas11["1pb"];
        if($pbview11=='' || $pbview11==0) $pbview11='FN';

        switch ($pbview11) {
        case ($pbview11>0 and $pbview11<11): $pbview11='C';break;
        case 11: $pbview11='B';break;
        case 12: $pbview11='B';break;
        case ($pbview11>12 and $pbview11<17): $pbview11='A';break;
        case ($pbview11>16 and $pbview11<21): $pbview11='AD';break;
        case -1: $pbview11='R';break;
        default:
        break;
        }
        echo '<td>'.$pbview11.'</td>';
    endwhile;
endif;
#------------------------II bimestre
if($niveledu=="INICIAL"):
    $viewregin=$regininew->LISTAR_2($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas = mysql_fetch_array($viewregin)) {
    $pbview=$rowviewnotas["pb"];
    echo '<td>'.$pbview.'</td>';}
endif;

if($niveledu=="SECUNDARIA"):
    $viewregi2=$regalumsecprinew->LISTAR2($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas2 = mysql_fetch_array($viewregi2)) {
    $pbview2=$rowviewnotas2["2pb"];
    if($pbview2=='' || $pbview2==0) $pbview2='FN';
    echo '<td>'.$pbview2.'</td>';}
endif;

if($niveledu=="PRIMARIA"):
$viewregi2=$regalumsecprinew->LISTAR2($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas2 = mysql_fetch_array($viewregi2)):
        $pbview21=$rowviewnotas2["2pb"];
        if($pbview21=='' || $pbview21==0) $pbview21='FN';
        switch ($pbview21) {
        case ($pbview21>0 and $pbview21<11): $pbview21='C';break;
        case 11: $pbview21='B';break;
        case 12: $pbview21='B';break;
        case ($pbview21>12 and $pbview21<17): $pbview21='A';break;
        case ($pbview21>16 and $pbview21<21): $pbview21='AD';break;
        case -1: $pbview21='R';break;
        default:
        break;
        }
        echo '<td>'.$pbview21.'</td>';
    endwhile;
endif;
#------------------------III bimestre
if($niveledu=="INICIAL"):
    $viewregin3=$regininew->LISTAR_3($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas3 = mysql_fetch_array($viewregin3)) {
    $pbview3=$rowviewnotas3["pb"];
    echo '<td>'.$pbview3.'</td>';}
endif;

if($niveledu=="SECUNDARIA"):
    $viewregi3=$regalumsecprinew->LISTAR3($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas3 = mysql_fetch_array($viewregi3)) {
    $pbview3=$rowviewnotas3["3pb"];
    if($pbview3=='' || $pbview3==0) $pbview3='FN';
    echo '<td>'.$pbview3.'</td>';}
endif;

if($niveledu=="PRIMARIA"):
$viewregi3=$regalumsecprinew->LISTAR3($alumno_seccionm.$codeidsec.$rowsinaturegene[0]);
    while ($rowviewnotas3 = mysql_fetch_array($viewregi3)):
        $pbview31=$rowviewnotas3["3pb"];
        if($pbview31=='' || $pbview31==0) $pbview31='FN';
        switch ($pbview31) {
        case ($pbview31>0 and $pbview31<11): $pbview31='C';break;
        case 11: $pbview31='B';break;
        case 12: $pbview31='B';break;
        case ($pbview31>12 and $pbview31<17): $pbview31='A';break;
        case ($pbview31>16 and $pbview31<21): $pbview31='AD';break;
        case -1: $pbview31='R';break;
        default:
        break;
        }
        echo '<td>'.$pbview31.'</td>';
    endwhile;
endif;
#------------------------IV bimestre
    echo "<td>FN</td>";
echo"</tr>";
}
?>
<tr>
    <td><strong>AREAS DESAPROBADAS</strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</tbody>
</table>
<a href="javascript:imprSelec('miboleta')"><i class="icon-print"></i>Imprimir</a>
<br><br><br><br><br><br>
</center>            
</div>   
<?php require_once 'Includes/modal-footer.php'; ?>
</body>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>    
</html>