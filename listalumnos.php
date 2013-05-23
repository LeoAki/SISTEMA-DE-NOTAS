<?php
require_once 'Class/RegistroAlumno.php';
$sectionview=$_GET['seccionalumno'];
    $RALU=new RegistroAlumno();    
echo "
<table class='table table-hover'>
    <tr>
        <th><b>N</b></th>
        <th><b>APELLIDOS</b></th>
        <th><b>NOMBRES</b></th>
    </tr>
";
$cumpas=$RALU->ListaAlumnoSeccion($sectionview);
while ($datocumpa = mysql_fetch_array($cumpas)) {
echo "
                    <tr>
                        <td><small>$datocumpa[0]</small></td>
                        <td><i><small>$datocumpa[1] $datocumpa[2]</small></i></td>
                        <td><i><small>$datocumpa[3]</small></i></td>
                    </tr>
";}
echo "</table>";
$cantidadalum=$RALU->contaralumno($sectionview);
if($dat1=  mysql_fetch_array($cantidadalum)){
    $numerototalporsection=$dat1[0];
}
echo '<a style="color:#0489B1;"><b>N&uacute;mero de alumnos matriculados a la fecha: </b></a>'.$numerototalporsection;
?>
