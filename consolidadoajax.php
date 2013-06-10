<?php
include_once 'Class/Docente.php';
$profesorcitore=new Docente();
#$nivel=$_GET['nivel'];#nivel de educacion
$nivel="primaria";
#$grado=$_GET['grado'];#grado del aula
$seccion=$_GET['codigoseccion'];#codigo de seccion
#$bimestre=$_GET['bimestre'];#bimestre
#Solo nivel primaria------------------------------------------------------------
if($nivel=="primaria"){
    echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=Matem&aacute;tica</li>
    <li style='float: left;'><code>02</code>=Comunicaci&oacute;n</li>
    <li style='float: left;'><code>03</code>=Arte</li>
    <li style='float: left;'><code>04</code>=Personal Social</li>
    <li style='float: left;'><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
    <li style='float: left;'><code>07</code>=Educaci&oacute;n Religiosa</li>
    <li style='float: left;'><code>08</code>=Ingl&eacute;s</li>
    <li style='float: left;'><code>09</code>=Computaci&oacute;n</li>
    <li style='float: left;'><code>06</code>=Ciencia y Ambiente</li>
    <li style='float: left;'><code>10</code>=Conducta</li>
</ul>
<br>
";
echo "
<table class='display' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N°</th>
        <th>ALUMNO</th>
        <th>01</th>
        <th>02</th>
        <th>03</th>
        <th>04</th>
        <th>05</th>
        <th>06</th>
        <th>07</th>
        <th>08</th>
        <th>09</th>
        <th>10</th>
        <th>Puntaje</th>
        <th>Promedio</th>
        <th>Cursos desaprobados</th>
    </tr>
";
$alumnado_seccion=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);#cambia
$count_alumn=0;
#variables de notas aprobatorias
$prprovmate=0;$prprovcomunica=0;$prprovarte=0;$prprovps=0;$prproveducfisica=0;
$prprovccaa=0;$prprovreli=0;$prprovingl=0;$prprovpc=0;$prprovconducta=0;
#variables de exonerados de area
$prexoreligion=0;$prexoedfisica=0;
#variable la llevas
$prcursocargo=0;
while ($prrow = mysql_fetch_array($alumnado_seccion)) {
    $count_alumn=$count_alumn+1;
    echo "
    <tr>
        <td>$prrow[1] $prrow[0]</td>
        <td>$prrow[2] $prrow[3], $prrow[4] </td>";
    
$registroalumno=$profesorcitore->NOTASCONSOLIDADOTUTORIA1($prrow[0]);

while ($prregistro = mysql_fetch_array($registroalumno)) {
    #matematicas
    if($prregistro[1]=='MATEMATICA'){
        $prmate=$prregistro[3];
        $prprovmate=$profesorcitore->aprobadoareanormal($prmate, $prprovmate);
    }

    #comunicacion
    if($prregistro[1]=="COMUNICACION"){
        $prcomuni=$prregistro[3];
        $prprovcomunica=$profesorcitore->aprobadoareanormal($prcomuni, $prprovcomunica);
    }

    #arte
    if($prregistro[1]=="ARTE"){
        $prarte=$prregistro[3];
        $prprovarte=$profesorcitore->aprobadoareaespecial($prarte, $prprovarte);
    }

    #personal social
    if($prregistro[1]=="PERSONAL SOCIAL"){
        $prpersoc=$prregistro[3];
        $prprovps=$profesorcitore->aprobadoareanormal($prpersoc, $prprovps);
    }

    #educacion fisica
    if($prregistro[1]=="EDUCACION FISICA"){
        $predufis=$prregistro[3];
        $prproveducfisica=$profesorcitore->aprobadoareaespecial($predufis, $prproveducfisica);
    }

    #educacion religiosa
    if($prregistro[1]=="EDUCACION RELIGIOSA"){
        $predurel=$prregistro[3];
        $prprovreli=$profesorcitore->aprobadoareaespecial($predurel,$prprovreli);
    }

    #ingles
    if($prregistro[1]=="INGLES"){
        $pring=$prregistro[3];
        $prprovingl=$profesorcitore->aprobadoareaespecial($pring, $prprovingl);
    }

    #computacion
    if($prregistro[1]=="COMPUTACION"){
        $prcomp=$prregistro[3];
        $prprovpc=$profesorcitore->aprobadoareaespecial($prcomp, $prprovpc);
    }

    #CIENCIA Y AMBIENTE
    if($prregistro[1]=="CIENCIA Y AMBIENTE"){
        $prccaa=$prregistro[3];
        $prprovccaa=$profesorcitore->aprobadoareanormal($prccaa, $prprovccaa);
    }

    #CONDUCTA
    if($prregistro[1]=="CONDUCTA"){
        $prcond=$prregistro[3];
        $prprovconducta=$profesorcitore->aprobadoareanormal($prcond, $prprovconducta);
    }
$prcursocargo=$profesorcitore->cursocargonormalpr($prregistro[3], $prcursocargo,$prregistro[1]);#sumo cursos a cargo
#valida la nota entrante
if($prregistro[3]==0) $prregistro[3]="FN";
if($prregistro[3]==-2) $prregistro[3]="ex";
if($prregistro[3]==-1) $prregistro[3]="R";
echo "<td>$prregistro[3]</td>";

}#fuera del while
$promediante=9;
$prpuntajealumno=$profesorcitore->puntajealumnopr($prmate,$prcomuni,$prarte,$prpersoc,$predufis,$predurel,$prin,$prcomp,$prccaa);#sumo puntaje
echo "<td>$prpuntajealumno</td>";
if($predufis==-2 || $predurel==-2) $promediante=8;#si hay exonerados que se divida entre 8
$prprmd=$profesorcitore->promedioal($prpuntajealumno,$promediante);
echo "<td>$prprmd</td>";
echo "<td>$prcursocargo</td>";
    echo "</tr>
    ";
$prcursocargo=0;#reinicio la variable
}
echo "</table>";
}
?>