<?php
require_once 'Class/Niveles.php';
$nivl=new Niveles();

$level=$_GET['nv'];
$grade=$_GET['gr'];

if($level==1) $level2="INICIAL";
if($level==2) $level2="PRIMARIA";
if($level==3) $level2="SECUNDARIA";

if($grade==4) $grade2=1;
if($grade==5) $grade2=2;
if($grade==6) $grade2=3;
if($grade==7) $grade2=4;
if($grade==8) $grade2=5;
if($grade==9) $grade2=6;

$listaulas=$nivl->Aulasnivel($level, $grade);
echo "
<table class='table table-bordered'>
<tr>
<td colspan='2'><strong><center>AULA</center></strong></td>
<td><strong><center>TUTOR</center></strong></td>
<td><strong><center>AUXILIAR</center></strong></td>
<td colspan='4'><center><strong>MENSAJES</strong></center></td>
<td colspan='4'><center><strong>PP.FF</strong></center></td>
<td><center><strong>Asis.</strong><br>III B</center></td>
<td colspan='5'><center><strong>CONSOLIDADOS</strong></center></td>
<td><strong><center>ALUMNOS</center></strong></td>
<tr>
    ";
while ($row = mysql_fetch_row($listaulas)) {
echo "
<tr>
<td>$row[0]</td>
<td>$row[1] $row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td>
    
<td><a target='_blank' href='msjbim.php?sendcode=$row[5]'>I B</a></td>
<td><a target='_blank' href='msjbim2.php?sendcode=$row[5]'>II B</a></td>
<td><a target='_blank' href='msjbim3.php?sendcode=$row[5]'>III B</a></td>
<td>IV B</td>

<td><a target='_blank' href='mnsjppff.php?profcode=$row[5]'>I B</a></td>
<td><a target='_blank' href='mnsjppff2.php?profcode=$row[5]'>II B</a></td>
<td><a target='_blank' href='mnsjppff3.php?profcode=$row[5]'>III B</a></td>
<td>IV B</td>

<td><a target='_blank' href='stnc.php?seccionauxi=$row[0]&bimestre=3&ut=$row[5]'>ver</a></td>

<td><a target='_blank' href='cons1.php?codigoseccion=$row[0]&niveldelaula=$level2&gradodelaula=$grade2'>I B</a></td>
<td><a target='_blank' href='cons2.php?codigoseccion=$row[0]&niveldelaula=$level2&gradodelaula=$grade2'>II B</a></td>
<td><a target='_blank' href='cons3.php?codigoseccion=$row[0]&niveldelaula=$level2&gradodelaula=$grade2'>III B</a></td>
<td>IV B</td>
<td>FINAL</td>

<td>ver alumnos</td>
</tr>
    ";
}
echo "
</table>";
echo "<br><br><br><br><br>"
?>