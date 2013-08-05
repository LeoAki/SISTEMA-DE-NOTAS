<?php
echo "<link href='Css/bootstrap/bootstrap.css' rel='stylesheet'/>";
include_once 'Class/Docente.php';
$profesorcitore=new Docente();
$nivela=$_GET['niveldelaula'];#nivel de educacion
$grado=$_GET['gradodelaula'];#grado del aula
$seccion=$_GET['codigoseccion'];#codigo de seccion
#Solo nivel primaria------------------------------------------------------------

if($nivela==="PRIMARIA"){
    echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=Matem&aacute;tica</li>
    <li style='float: left;'><code>02</code>=Comunicaci&oacute;n</li>
    <li style='float: left;'><code>03</code>=Arte</li>
    <li style='float: left;'><code>04</code>=Personal Social</li>
    <li style='float: left;'><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
    <li style='float: left;'><code>06</code>=Ciencia y Ambiente</li>    
    <li style='float: left;'><code>07</code>=Educaci&oacute;n Religiosa</li>
    <li style='float: left;'><code>08</code>=Ingl&eacute;s</li>
    <li style='float: left;'><code>09</code>=Computaci&oacute;n</li>
    <li style='float: left;'><code>10</code>=Conducta</li>
</ul>
<br>";
echo "
<table class='table table-hover' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N°</th>
        <th>ALUMNO</th>
        <th>01 MAT</th>
        <th>02 COM</th>
        <th>03 ART</th>
        <th>04 PERS</th>
        <th>05 EDFIS</th>
        <th>06 CCAA</th>
        <th>07 REL</th>
        <th>08 INL</th>
        <th>09 COMPU</th>
        <th>Promedio</th>
        <th>Puntaje</th>
        <th>10 COND</th>
        <th>Cur Desaprob.</th>
        <th>FN</th>
    </tr>";
$alumnado_seccion=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);#cambia
$count_alumn=0;
#variables de notas aprobatorias
$prprovmate=0;$prprovcomunica=0;$prprovarte=0;$prprovps=0;$prproveducfisica=0;
$prprovccaa=0;$prprovreli=0;$prprovingl=0;$prprovpc=0;$prprovconducta=0;
$prexoreligion=0;$prexoedfisica=0;#variables de exonerados de area
$prcursocargo=0;#variable la llevas
$prfaltanotas=0;#variable la llevas
while ($prrow = mysql_fetch_array($alumnado_seccion)) {
    $count_alumn=$count_alumn+1;
    echo "<tr>
        <td>$prrow[1]</td>
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
#echo "<td>$prregistro[3]</td>";
}#fuera del while

#------------------------------------------------------------------curso a cargo
$prcursocargo=$profesorcitore->cursocargonormalpr($prmate, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($prmate, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr($prcomuni, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($prcomuni, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr($prarte, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($prarte, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr($prpersoc, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($prpersoc, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr2($predufis, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($predufis, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr2($predurel, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($predurel, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr2($pring, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($pring, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr2($prcomp, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($prcomp, $prfaltanotas);

$prcursocargo=$profesorcitore->cursocargonormalpr($prccaa, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($prccaa, $prfaltanotas);

$prfaltanotas=$profesorcitore->fnpr($prcond, $prfaltanotas);

#-----------------------------------------------------------fin de curso a cargo
$prpuntajealumno=$profesorcitore->puntajealumnopr($prmate,$prcomuni,$prarte,$prpersoc,$predufis,$predurel,$pring,$prcomp,$prccaa);#sumo puntaje
if($predufis==-2 || $predurel==-2) {
    $promediante=8;
}else{ 
    $promediante=9;
};#si hay exonerados que se divida entre 8
#matematica1
if($prmate=="" || $prmate==0) $prmate="FN";if($prmate=="-1") $prmate="R";
echo "<td>$prmate</td>";
#comunicacion2
if($prcomuni=="" || $prcomuni==0) $prcomuni="FN";if($prcomuni=="-1") $prcomuni="R";
echo "<td>$prcomuni</td>";
#arte3
if($prarte=="" || $prarte==0) $prarte="FN";if($prarte=="-1") $prarte="R";
echo "<td>$prarte</td>";
#personal social
if($prpersoc=="" || $prpersoc==0) $prpersoc="FN";if($prpersoc=="-1") $prpersoc="R";
echo "<td>$prpersoc</td>";
#educacion fisica
if($predufis=="" || $predufis==0) $predufis="FN";if($predufis=="-1") $predufis="R";if($prmate=="-2") $prmate="EX";
echo "<td>$predufis</td>";
#ciencia y ambiente
if($prccaa=="" || $prccaa==0) $prccaa="FN";if($prccaa=="-1") $prccaa="R";
echo "<td>$prccaa</td>";
#educacion religiosa
if($predurel=="" || $predurel==0) $predurel="FN";if($predurel=="-1") $predurel="R";if($predurel=="-2") $predurel="EX";
echo "<td>$predurel</td>";
#ingles
if($pring=="" || $pring==0) $pring="FN";if($pring=="-1") $pring="R";
echo "<td>$pring</td>";
#computacion
if($prcomp=="" || $prcomp==0) $prcomp="FN";if($prcomp=="-1") $prcomp="R";
echo "<td>$prcomp</td>";
#conducta
if($prcond=="" || $prcond==0) $prcond="FN";if($prcond=="-1") $prcond="R";




$prprmd=$profesorcitore->promedioal($prpuntajealumno,$promediante);
echo "<td>$prprmd</td>";
echo "<td>$prpuntajealumno</td>";
echo "<td>$prcond</td>";
echo "<td>$prcursocargo</td>";
echo "<td>$prfaltanotas</td>";
    echo "</tr>
    ";
$prcursocargo=0;#reinicio la variable
$prfaltanotas=0;
}
echo "</table>";
}
#FINNnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn








#------------------------------------------------------------------------inicial
if($nivela==="INICIAL"){
    echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=Matem&aacute;tica</li>
    <li style='float: left;'><code>02</code>=Comunicaci&oacute;n</li>
    <li style='float: left;'><code>03</code>=Personal Social</li>
    <li style='float: left;'><code>04</code>=Ciencia y Ambiente</li>
    <li style='float: left;'><code>05</code>=Informatica</li>
    <li style='float: left;'><code>06</code>=Conducta</li>
</ul>
<br>
";
echo "
<table class='display' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N</th><th>ALUMNO</th><th>C1</th><th>C2</th><th>01</th>
                                  <th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>C5</th><th>02</th>
                                  <th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>03</th>
                                  <th>C1</th><th>C2</th><th>04</th>
                                  <th>C1</th><th>05</th>
                                  <th>C1</th><th>06</th>
    </tr>
";
$alumnado_seccioni=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);#cambia

while ($irow = mysql_fetch_array($alumnado_seccioni)) {
    $count_alumni=$count_alumni+1;
    echo "
    <tr>
        <td>$irow[1] $irow[0]</td>
        <td>$irow[2] $irow[3], $irow[4] </td>";
$registroalumnoi=$profesorcitore->NOTASCONSOLIDADOTUTORIAINiCIAL($irow[0]);

while ($iregistro = mysql_fetch_array($registroalumnoi)) {
        if($iregistro[1]=='MATEMATICA'){
        $imate=$iregistro[3];
        $imate1=$iregistro[4];
        $imate2=$iregistro[5];
        }
        if($iregistro[1]=='COMUNICACION'){
        $icom=$iregistro[3];
        $icom1=$iregistro[4];
        $icom2=$iregistro[5];
        $icom3=$iregistro[6];
        $icom4=$iregistro[7];
        $icom5=$iregistro[8];
        }
        if($iregistro[1]=='PERSONAL SOCIAL'){
        $ipersoc=$iregistro[3];
        $ipersoc1=$iregistro[4];
        $ipersoc2=$iregistro[5];
        $ipersoc3=$iregistro[6];
        $ipersoc4=$iregistro[7];
        }
        if($iregistro[1]=='CIENCIA Y AMBIENTE'){
        $iccaa=$iregistro[3];
        $iccaa1=$iregistro[4];
        $iccaa2=$iregistro[5];
        }
        if($iregistro[1]=='INFORMATICA'){
        $iinf=$iregistro[3];
        $iinf1=$iregistro[4];
        }
        if($iregistro[1]=='CONDUCTA'){
        $icoducta=$iregistro[3];
        $icoducta1=$iregistro[4];
        }
}
#mate inicial
if($imate=="") $imate="FN";
echo "<td>$imate1</td>";
echo "<td>$imate2</td>";
echo "<td>$imate</td>";
#comunicacion inicial
if($icom=="") $icom="FN";
echo "<td>$icom1</td>";
echo "<td>$icom2</td>";
echo "<td>$icom3</td>";
echo "<td>$icom4</td>";
echo "<td>$icom5</td>";
echo "<td>$icom</td>";
#personal social inicial
if($ipersoc=="") $ipersoc="FN";
echo "<td>$ipersoc1</td>";
echo "<td>$ipersoc2</td>";
echo "<td>$ipersoc3</td>";
echo "<td>$ipersoc4</td>";
echo "<td>$ipersoc</td>";
#ciencia y ambiente inicial
if($iccaa=="") $iccaa="FN";
echo "<td>$iccaa1</td>";
echo "<td>$iccaa2</td>";
echo "<td>$iccaa</td>";
#informatica inicial
if($iinf=="") $iinf="FN";
echo "<td>$iinf1</td>";
echo "<td>$iinf</td>";
#conducta inicial
if($icoducta=="") $icoducta="FN";
echo "<td>$icoducta1</td>";
echo "<td>$icoducta</td>";
echo "</tr>
    ";
$prcursocargo=0;#reinicio la variable
}
echo "</table>";
}







#------------------------------------------------------------------------secundaria
if($nivela==="SECUNDARIA" AND $grado==1){
echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=MATEM&Aacute;TICA</li>
    <li style='float: left;'><code>02</code>=COMUNICACI&Oacute;N</li>
    <li style='float: left;'><code>03</code>=INGL&Eacute;S</li>
    <li style='float: left;'><code>04</code>=CTA</li>
    <li style='float: left;'><code>05</code>=HH.GG.EE</li>
    <li style='float: left;'><code>06</code>=CIVICA</li>
    <li style='float: left;'><code>07</code>=PERSONA FF.RR.HH</li>
    <li style='float: left;'><code>08</code>=EPT</li>
    <li style='float: left;'><code>09</code>=EDUCACI&Oacute;N F&Iacute;SICA</li>
    <li style='float: left;'><code>10</code>=EDUCACI&Oacute;N ARTISTICA</li>
    <li style='float: left;'><code>11</code>=EDUCACI&Oacute;N RELIGIOSA</li>  
    <li style='float: left;'><code>12</code>=INFORMATICA</li>
    <li style='float: left;'><code>13</code>=CONDUCTA</li>
</ul>
<br>";

echo "
<table class='table table-hover' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N</th><th>ALUMNO</th><th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
                                  <th>05 HGE</th><th>06 CIV</th><th>07 P.F.R.H</th><th>08 EPT</th>
                                  <th>09 ED.FIS</th><th>10 ED. ART</th><th>11 REL</th><th>12 INF</th><th>13 CON</th>
                                  <th>ARIT</th><th>ALG</th><th>GEO</th>
                                  <th>PROMEDIO</th><th>PUNTAJE</th><th>CURSOS DES</th><th> FN </th>
    </tr>";
$alumnado_seccionSEC1=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);
$count_alumn=0;
#variables de notas aprobatorias
$sec1provmate=0;$sec1provcomunica=0;$sec1provingles=0;$sec1provcta=0;$sec1provhge=0;$sec1provcivica=0;$sec1provpersona=0;
$sec1provept=0;$sec1provfisica=0;$sec1provarte=0;$sec1provreligion=0;$sec1provpc=0;$sec1provconducta=0;
#variable la llevas
$prcursocargosec1=0;
$fnsec1=0;
while ($sec1row = mysql_fetch_array($alumnado_seccionSEC1)) {
echo "<tr>";
echo "<td>$sec1row[1]</td>";
echo "<td>$sec1row[2] $sec1row[3] ,$sec1row[4] </td>";

$registroalumnosec1=$profesorcitore->NOTASCONSOLIDADOTUTORIA1($sec1row[0]);

while ($sec1registro = mysql_fetch_array($registroalumnosec1)) {
    #matematicas
    if($sec1registro[2]=='Aritmetica') $sec1arit=$sec1registro[3];
    if($sec1registro[2]=='Algebra') $sec1alg=$sec1registro[3];
    if($sec1registro[2]=='Geometria') $sec1geo=$sec1registro[3];
    if($sec1registro[2]=='Comunicacion') $sec1com=$sec1registro[3];
    if($sec1registro[2]=='Ingles') $sec1ing=$sec1registro[3];
    if($sec1registro[2]=='CC.NN.') $sec1ccaa=$sec1registro[3];
    if($sec1registro[2]=='HGE') $sec1hge=$sec1registro[3];
    if($sec1registro[2]=='Civica') $sec1civ=$sec1registro[3];
    if($sec1registro[2]=='PP.FF.') $sec1ppff=$sec1registro[3];
    if($sec1registro[2]=='EPT') $sec1ept=$sec1registro[3];
    if($sec1registro[2]=='Edu. Fisica') $sec1edufis=$sec1registro[3];
    if($sec1registro[2]=='Arte') $sec1arte=$sec1registro[3];
    if($sec1registro[2]=='Religion') $sec1rel=$sec1registro[3];
    if($sec1registro[2]=='INFORMATICA') $sec1inform=$sec1registro[3];
    if($sec1registro[2]=='conducta') $sec1condu=$sec1registro[3];
}
#------------------------------------------------------------------curso a cargo
if($sec1arit=="" || $sec1arit==0) $sec1arit="FN";   if($sec1arit=="-1") $sec1arit="R";#aritmetica
if($sec1alg=="" || $sec1alg==0) $sec1alg="FN";      if($sec1alg=="-1") $sec1alg="R";#algebra
if($sec1geo=="" || $sec1geo==0) $sec1geo="FN";      if($sec1geo=="-1") $sec1geo="R";#geometria


if($sec1arit=="FN" || $sec1alg=="FN" || $sec1geo=="FN"){#mate
    $sec1mat="FN";
    $fnsec1=$profesorcitore->fnsec($sec1mat, $fnsec1);
}else{
    $sec1mat=$profesorcitore->pesomat($sec1arit, $sec1alg, $sec1geo);
}



$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1com, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1com, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1ing, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1ing, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1ccaa, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1ccaa, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1hge, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1hge, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1civ, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1civ, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1ppff, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1ppff, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1ept, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1ept, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1edufis, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1edufis, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1arte, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1arte, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1rel, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1rel, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1inform, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1inform, $fnsec1);

$prcursocargosec1=$profesorcitore->cursocargonormalsec($sec1mat, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1mat, $fnsec1);

$fnsec1=$profesorcitore->fnsec($sec1condu, $fnsec1);

$secpuntajealumno1=$profesorcitore->puntajealumnosec(round($sec1mat,0), $sec1com, $sec1ing, $sec1ccaa, $sec1hge, $sec1civ, $sec1ppff, $sec1ept, $sec1edufis, $sec1arte, $sec1rel,$sec1inform);

if($sec1edufis==-2 || $sec1rel==-2) {    
$promediante1=11;
}else{ 
$promediante1=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio1=$profesorcitore->promedioal($secpuntajealumno1,$promediante1);

#comunicacion
if($sec1com=="" || $sec1com==0) $sec1com="FN";if($sec1com=="-1") $sec1com="R";
#ingles
if($sec1ing=="" || $sec1ing==0) $sec1ing="FN";if($sec1ing=="-1") $sec1ing="R";
#ccaa
if($sec1ccaa=="" || $sec1ccaa==0) $sec1ccaa="FN";if($sec1ccaa=="-1") $sec1ccaa="R";
#hge
if($sec1hge=="" || $sec1hge==0) $sec1hge="FN";if($sec1hge=="-1") $sec1hge="R";
#civ
if($sec1civ=="" || $sec1civ==0) $sec1civ="FN";if($sec1civ=="-1") $sec1civ="R";
#ppff
if($sec1ppff=="" || $sec1ppff==0) $sec1ppff="FN";if($sec1ppff=="-1") $sec1ppff="R";
#ept
if($sec1ept=="" || $sec1ept==0) $sec1ept="FN";if($sec1ept=="-1") $sec1ept="R";
#educfisica
if($sec1edufis=="" || $sec1edufis==0) $sec1edufis="FN";if($sec1edufis=="-1") $sec1edufis="R";if($sec1edufis=="-2") $sec1edufis="ex";
#educart
if($sec1arte=="" || $sec1arte==0) $sec1arte="FN";if($sec1arte=="-1") $sec1arte="R";
#edurel
if($sec1rel=="" || $sec1rel==0) $sec1rel="FN";if($sec1rel=="-1") $sec1rel="R";if($sec1rel=="-2") $sec1rel="EX";
#informatica
if($sec1inform=="" || $sec1inform==0) $sec1inform="FN";if($sec1inform=="-1") $sec1inform="R";
#conducta
if($sec1condu=="" || $sec1condu==0) $sec1condu="FN";if($sec1condu=="-1") $sec1condu="R";

$mat1=round($sec1mat,0);
if($mat1=="0") $mat1="FN";
echo "
<td>$mat1</td>
<td>$sec1com</td>
<td>$sec1ing</td>    
<td>$sec1ccaa</td>
<td>$sec1hge</td>
<td>$sec1civ</td>
<td>$sec1ppff</td>
<td>$sec1ept</td>
<td>$sec1edufis</td>
<td>$sec1arte</td>
<td>$sec1rel</td>
<td>$sec1inform</td>
<td>$sec1condu</td>

<td>$sec1arit</td>
<td>$sec1alg</td>
<td>$sec1geo</td>

<td>$promedio1</td>
<td>$secpuntajealumno1</td>
<td>$prcursocargosec1</td>
<td>$fnsec1</td>";
#reinicilializa
$prcursocargosec1=0;$secpuntajealumno1=0;$promedio1=0;$sec1arit=0;$sec1alg=0;
$sec1geo=0;$mat1=0;$sec1com=0;$sec1ing=0;$sec1ccaa=0;$sec1hge=0;$sec1civ=0;
$sec1ppff=0;$sec1ept=0;$sec1edufis=0;$sec1arte=0;$sec1rel=0;$sec1inform=0;$sec1condu=0;
$fnsec1=0;
echo "</tr>";
}
echo "</table>";
}


#---------------------2do grado
if($nivela==="SECUNDARIA" AND $grado==2){
echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=MATEM&Aacute;TICA</li>
    <li style='float: left;'><code>02</code>=COMUNICACI&Oacute;N</li>
    <li style='float: left;'><code>03</code>=INGL&Eacute;S</li>
    <li style='float: left;'><code>04</code>=CTA</li>
    <li style='float: left;'><code>05</code>=HH.GG.EE</li>
    <li style='float: left;'><code>06</code>=CIVICA</li>
    <li style='float: left;'><code>07</code>=PERSONA FF.RR.HH</li>
    <li style='float: left;'><code>08</code>=EPT</li>
    <li style='float: left;'><code>09</code>=EDUCACI&Oacute;N F&Iacute;SICA</li>
    <li style='float: left;'><code>10</code>=EDUCACI&Oacute;N ARTISTICA</li>
    <li style='float: left;'><code>11</code>=EDUCACI&Oacute;N RELIGIOSA</li>  
    <li style='float: left;'><code>12</code>=INFORMATICA</li>
    <li style='float: left;'><code>13</code>=CONDUCTA</li>
</ul>
<br>
";

echo "
<table class='table table-hover' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N</th><th>ALUMNO</th><th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
                                  <th>05 HGE</th><th>06 CIV</th><th>07 P.F.R.H</th><th>08 EPT</th>
                                  <th>09 EDU.FIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>
                                  <th>GEO</th><th>ALG</th><th>ARIT</th>                                  
                                  <th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
    </tr>";
$alumnado_seccionSEC2=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);
$count_alumn=0;
#variables de notas aprobatorias
$sec2provmate=0;$sec2provcomunica=0;$sec2provingles=0;$sec2provcta=0;$sec2provhge=0;$sec2provcivica=0;$sec2provpersona=0;
$sec2provept=0;$sec2provfisica=0;$sec2provarte=0;$sec2provreligion=0;$sec2provpc=0;$sec2provconducta=0;
#variable la llevas
$prcursocargosec2=0;
$fnsec2=0;
while ($sec2row = mysql_fetch_array($alumnado_seccionSEC2)) {
echo "<tr>";
echo "<td>$sec2row[1]</td>";
echo "<td>$sec2row[2] $sec2row[3] ,$sec2row[4] </td>";

$registroalumnosec2=$profesorcitore->NOTASCONSOLIDADOTUTORIA1($sec2row[0]);

while ($sec2registro = mysql_fetch_array($registroalumnosec2)) {
    #matematicas
    if($sec2registro[2]=='Aritmetica') $sec2arit=$sec2registro[3];
    if($sec2registro[2]=='Algebra') $sec2alg=$sec2registro[3];
    if($sec2registro[2]=='Geometria') $sec2geo=$sec2registro[3];
    if($sec2registro[2]=='Comunicacion') $sec2com=$sec2registro[3];
    if($sec2registro[2]=='Ingles') $sec2ing=$sec2registro[3];
    if($sec2registro[2]=='CTA') $sec2ccaa=$sec2registro[3];
    if($sec2registro[2]=='HGE') $sec2hge=$sec2registro[3];
    if($sec2registro[2]=='Civica') $sec2civ=$sec2registro[3];
    if($sec2registro[2]=='PP.FF.') $sec2ppff=$sec2registro[3];
    if($sec2registro[2]=='EPT') $sec2ept=$sec2registro[3];
    if($sec2registro[2]=='Edu. Fisica') $sec2edufis=$sec2registro[3];
    if($sec2registro[2]=='Arte') $sec2arte=$sec2registro[3];
    if($sec2registro[2]=='Religion') $sec2rel=$sec2registro[3];
    if($sec2registro[2]=='INFORMATICA') $sec2inform=$sec2registro[3];
    if($sec2registro[2]=='conducta') $sec2condu=$sec2registro[3];
    
}
#------------------------------------------------------------------curso a cargo
if($sec2arit=="" || $sec2arit==0) $sec2arit="FN";if($sec2arit=="-1") $sec2arit="R";#aritmetica
if($sec2alg=="" || $sec2alg==0) $sec2alg="FN";if($sec2alg=="-1") $sec2alg="R";#algebra
if($sec2geo=="" || $sec2geo==0) $sec2geo="FN";if($sec2geo=="-1") $sec2geo="R";#geometria

if($sec2arit=="FN" || $sec2alg=="FN" || $sec2geo=="FN"){#mate
    $sec2mat="FN";
    $fnsec2=$profesorcitore->fnsec($sec2mat, $fnsec2);
}else{
    $sec2mat=$profesorcitore->pesomat($sec2alg, $sec2geo, $sec2arit);
}

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2com, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2com, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ing, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2ing, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ccaa, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2ccaa, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2hge, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2hge, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2civ, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2civ, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ppff, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2ppff, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ept, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2ept, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2edufis, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2edufis, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2arte, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2arte, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2rel, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2rel, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2inform, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2inform, $fnsec2);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2mat, $prcursocargosec2);

$fnsec2=$profesorcitore->fnsec($sec2condu, $fnsec2);

$secpuntajealumno2=$profesorcitore->puntajealumnosec(round($sec2mat,0), $sec2com, $sec2ing, $sec2ccaa, $sec2hge, $sec2civ, $sec2ppff, $sec2ept, $sec2edufis, $sec2arte, $sec2rel,$sec2inform);

if($sec2edufis==-2 || $sec2rel==-2) {
$promediante2=11;
}else{ 
$promediante2=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio2=$profesorcitore->promedioal($secpuntajealumno2,$promediante2);

#comunicacion
if($sec2com=="" || $sec2com==0) $sec2com="FN";if($sec2com=="-1") $sec2com="R";
#ingles
if($sec2ing=="" || $sec2ing==0) $sec2ing="FN";if($sec2ing=="-1") $sec2ing="R";
#ccaa
if($sec2ccaa=="" || $sec2ccaa==0) $sec2ccaa="FN";if($sec2ccaa=="-1") $sec2ccaa="R";
#hge
if($sec2hge=="" || $sec2hge==0) $sec2hge="FN";if($sec2hge=="-1") $sec2hge="R";
#civ
if($sec2civ=="" || $sec2civ==0) $sec2civ="FN";if($sec2civ=="-1") $sec2civ="R";
#ppff
if($sec2ppff=="" || $sec2ppff==0) $sec2ppff="FN";if($sec2ppff=="-1") $sec2ppff="R";
#ept
if($sec2ept=="" || $sec2ept==0) $sec2ept="FN";if($sec2ept=="-1") $sec2ept="R";
#educfisica
if($sec2edufis=="" || $sec2edufis==0) $sec2edufis="FN";if($sec2edufis=="-1") $sec2edufis="R";if($sec2edufis=="-2") $sec2edufis="ex";
#educart
if($sec2arte=="" || $sec2arte==0) $sec2arte="FN";if($sec2arte=="-1") $sec2arte="R";
#edurel
if($sec2rel=="" || $sec2rel==0) $sec2rel="FN";if($sec2rel=="-1") $sec2rel="R";if($sec2rel=="-2") $sec2rel="EX";
#informatica
if($sec2inform=="" || $sec2inform==0) $sec2inform="FN";if($sec2inform=="-1") $sec2inform="R";
#conducta
if($sec2condu=="" || $sec2condu==0) $sec2condu="FN";if($sec2condu=="-1") $sec2condu="R";
$mat2=round($sec2mat,0);
if($mat2=="0") $mat2="FN";
echo "
<td>$mat2</td>
<td>$sec2com</td>
<td>$sec2ing</td>    
<td>$sec2ccaa</td>
<td>$sec2hge</td>
<td>$sec2civ</td>
<td>$sec2ppff</td>
<td>$sec2ept</td>
<td>$sec2edufis</td>
<td>$sec2arte</td>
<td>$sec2rel</td>
<td>$sec2inform</td>
    
<td>$sec2condu</td>
    
<td>$sec2geo</td>
<td>$sec2alg</td>
<td>$sec2arit</td>

<td>$promedio2</td>
<td>$secpuntajealumno2</td>
<td>$prcursocargosec2</td>
<td>$fnsec2</td>
";
#reinicilializa
$fnsec2=0;$prcursocargosec2=0;$secpuntajealumno2=0;$promedio2=0;$sec2arit=0;$sec2alg=0;
$sec2geo=0;$mat2=0;$sec2com=0;$sec2ing=0;$sec2ccaa=0;$sec2hge=0;$sec2civ=0;
$sec2ppff=0;$sec2ept=0;$sec2edufis=0;$sec2arte=0;$sec2rel=0;$sec2inform=0;$sec2condu=0;

echo "</tr>";
}
echo "</table>";
}


#---------------------------------------------
#---------------------3er grado
if($nivela==="SECUNDARIA" AND $grado==3){
echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=MATEM&Aacute;TICA</li>
    <li style='float: left;'><code>02</code>=COMUNICACI&Oacute;N</li>
    <li style='float: left;'><code>03</code>=INGL&Eacute;S</li>
    <li style='float: left;'><code>04</code>=CTA</li>
    <li style='float: left;'><code>05</code>=HH.GG.EE</li>
    <li style='float: left;'><code>06</code>=CIVICA</li>
    <li style='float: left;'><code>07</code>=PERSONA FF.RR.HH</li>
    <li style='float: left;'><code>08</code>=EPT</li>
    <li style='float: left;'><code>09</code>=EDUCACI&Oacute;N F&Iacute;SICA</li>
    <li style='float: left;'><code>10</code>=EDUCACI&Oacute;N ARTISTICA</li>
    <li style='float: left;'><code>11</code>=EDUCACI&Oacute;N RELIGIOSA</li>  
    <li style='float: left;'><code>12</code>=INFORMATICA</li>
    <li style='float: left;'><code>13</code>=CONDUCTA</li>
</ul>
<br>
";

echo "
<table class='table table-hover' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N</th><th>ALUMNO</th> <th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
                                  <th>05 HGE</th><th>06 CIV</th><th>07 PFR</th><th>08 EPT</th>
                                  <th>09 EDFIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>
                                  <th>ALG</th><th>TRIG</th><th>GEO</th>
                                  <th>QUI</th><th>FIS</th>
                                  <th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
    </tr>";

$alumnado_seccionSEC3=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);
$count_alumn=0;
#variables de notas aprobatorias
$sec3provmate=0;$sec3provcomunica=0;$sec3provingles=0;$sec3provcta=0;$sec3provhge=0;$sec3provcivica=0;$sec3provpersona=0;
$sec3provept=0;$sec3provfisica=0;$sec3provarte=0;$sec3provreligion=0;$sec3provpc=0;$sec3provconducta=0;
#variable la llevas
$prcursocargosec3=0;$fnsec3=0;
while ($sec3row = mysql_fetch_array($alumnado_seccionSEC3)) {
echo "<tr>";
echo "<td>$sec3row[1]</td>";
echo "<td>$sec3row[2] $sec3row[3] ,$sec3row[4] </td>";

$registroalumnosec3=$profesorcitore->NOTASCONSOLIDADOTUTORIA1($sec3row[0]);

while ($sec3registro = mysql_fetch_array($registroalumnosec3)) {
    #matematicas
    if($sec3registro[2]=='TRIGONOMETRIA') $sec3tri=$sec3registro[3];
    if($sec3registro[2]=='ALGEBRA') $sec3alg=$sec3registro[3];
    if($sec3registro[2]=='GEOMETRIA') $sec3geo=$sec3registro[3];
    if($sec3registro[2]=='COMUNICACION') $sec3com=$sec3registro[3];
    if($sec3registro[2]=='INGLES') $sec3ing=$sec3registro[3];
    if($sec3registro[2]=='QUIMICA') $sec3quimica=$sec3registro[3];
    if($sec3registro[2]=='FISICA') $sec3fisica=$sec3registro[3];
    if($sec3registro[2]=='HGE') $sec3hge=$sec3registro[3];
    if($sec3registro[2]=='CIVICA') $sec3civ=$sec3registro[3];
    if($sec3registro[2]=='PP.FF.') $sec3ppff=$sec3registro[3];
    if($sec3registro[2]=='EPT') $sec3ept=$sec3registro[3];
    if($sec3registro[2]=='Edu. Fisica') $sec3edufis=$sec3registro[3];
    if($sec3registro[2]=='ARTE') $sec3arte=$sec3registro[3];
    if($sec3registro[2]=='RELIGION') $sec3rel=$sec3registro[3];
    if($sec3registro[2]=='INFORMATICA') $sec3inform=$sec3registro[3];
    if($sec3registro[2]=='CONDUCTA') $sec3condu=$sec3registro[3];
    
}
#------------------------------------------------------------------curso a cargo
if($sec3tri=="" || $sec3tri==0) $sec3tri="FN";if($sec3tri=="-1") $sec3tri="R";#trigonometria
if($sec3alg=="" || $sec3alg==0) $sec3alg="FN";if($sec3alg=="-1") $sec3alg="R";#algebra
if($sec3geo=="" || $sec3geo==0) $sec3geo="FN";if($sec3geo=="-1") $sec3geo="R";#geometria

if($sec3tri=="FN" || $sec3alg=="FN" || $sec3geo=="FN"){#mate
    $sec3mat="FN";
    $fnsec3=$profesorcitore->fnsec($sec3mat, $fnsec3);
}else{
    $sec3mat=$profesorcitore->pesomat($sec3alg, $sec3tri, $sec3geo);
}

if($sec3quimica=="" || $sec3quimica==0) $sec3quimica="FN";if($sec3quimica=="-1") $sec3quimica="R";#quimica
if($sec3fisica=="" || $sec3fisica==0) $sec3fisica="FN";if($sec3fisica=="-1") $sec3fisica="R";#fisica

if($sec3quimica=="FN" || $sec3fisica=="FN"){#cta
    $sec3cta="FN";
    $fnsec3=$profesorcitore->fnsec($sec3cta, $fnsec3);
}else{
    $sec3cta=$profesorcitore->pesocta($sec3quimica, $sec3fisica);
}

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3mat, $prcursocargosec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3com, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3com, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3ing, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3ing, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3cta, $prcursocargosec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3hge, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3hge, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3civ, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3civ, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3ppff, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3ppff, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3ept, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3ept, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3edufis, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3edufis, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3arte, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3arte, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3rel, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3rel, $fnsec3);

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3inform, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3inform, $fnsec3);

$fnsec3=$profesorcitore->fnsec($sec3condu, $fnsec3);

$secpuntajealumno3=$profesorcitore->puntajealumnosec(round($sec3mat,0), $sec3com, $sec3ing, $sec3cta, $sec3hge,$sec3civ,$sec3ppff,$sec3ept,$sec3edufis,$sec3arte,$sec3rel,$sec3inform);

if($sec3edufis==-2 || $sec3rel==-2) {
$promediante3=11;
}else{ 
$promediante3=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio3=$profesorcitore->promedioal($secpuntajealumno3,$promediante3);

#comunicacion
if($sec3com=="" || $sec3com==0) $sec3com="FN";if($sec3com=="-1") $sec3com="R";
#ingles
if($sec3ing=="" || $sec3ing==0) $sec3ing="FN";if($sec3ing=="-1") $sec3ing="R";
//#ccaa
//if($sec2ccaa=="" || $sec2ccaa==0) $sec2ccaa="FN";if($sec2ccaa=="-1") $sec2ccaa="R";
#hge
if($sec3hge=="" || $sec3hge==0) $sec3hge="FN";if($sec3hge=="-1") $sec3hge="R";
#civ
if($sec3civ=="" || $sec3civ==0) $sec3civ="FN";if($sec3civ=="-1") $sec3civ="R";
#ppff
if($sec3ppff=="" || $sec3ppff==0) $sec3ppff="FN";if($sec3ppff=="-1") $sec3ppff="R";
#ept
if($sec3ept=="" || $sec3ept==0) $sec3ept="FN";if($sec3ept=="-1") $sec3ept="R";
#educfisica
if($sec3edufis=="" || $sec3edufis==0) $sec3edufis="FN";if($sec3edufis=="-1") $sec3edufis="R";if($sec3edufis=="-2") $sec3edufis="ex";
#educart
if($sec3arte=="" || $sec3arte==0) $sec3arte="FN";if($sec3arte=="-1") $sec3arte="R";
#edurel
if($sec3rel=="" || $sec3rel==0) $sec3rel="FN";if($sec3rel=="-1") $sec3rel="R";if($sec3rel=="-2") $sec3rel="EX";
#informatica
if($sec3inform=="" || $sec3inform==0) $sec3inform="FN";if($sec3inform=="-1") $sec3inform="R";
#conducta
if($sec3condu=="" || $sec3condu==0) $sec3condu="FN";if($sec3condu=="-1") $sec3condu="R";
$mat3=round($sec3mat,0);
$cta3=round($sec3cta,0);
if($mat3==0) $mat3="FN";
if($cta3==0) $cta3="FN";
echo "
<td>$mat3</td>
<td>$sec3com</td>
<td>$sec3ing</td>    
<td>$cta3</td>
<td>$sec3hge</td>
<td>$sec3civ</td>
<td>$sec3ppff</td>
<td>$sec3ept</td>
<td>$sec3edufis</td>
<td>$sec3arte</td>
<td>$sec3rel</td>
<td>$sec3inform</td>
    
<td>$sec3condu</td>
    
<td>$sec3alg</td>
<td>$sec3tri</td>
<td>$sec3geo</td>

<td>$sec3quimica</td>
<td>$sec3fisica</td>

<td>$promedio3</td>
<td>$secpuntajealumno3</td>
<td>$prcursocargosec3</td>
<td>$fnsec3</td>";
#reinicilializa
$fnsec3=0;$prcursocargosec3=0;$secpuntajealumno3=0;$promedio3=0;$sec3alg=0;$sec3tri=0;
$sec3geo=0;$mat3=0;$sec3com=0;$sec3ing=0;$sec3cta=0;$sec3quimica=0;$sec3fisica=0;
$sec3hge=0;$sec3civ=0;
$sec3ppff=0;$sec3ept=0;$sec3edufis=0;$sec3arte=0;$sec3rel=0;$sec3inform=0;$sec3condu=0;

echo "</tr>";
}
echo "</table>";
}



#---------------------------------------------

#---------------------4to grado
if($nivela==="SECUNDARIA" AND $grado==4){
echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=MATEM&Aacute;TICA</li>
    <li style='float: left;'><code>02</code>=COMUNICACI&Oacute;N</li>
    <li style='float: left;'><code>03</code>=INGL&Eacute;S</li>
    <li style='float: left;'><code>04</code>=CTA</li>
    <li style='float: left;'><code>05</code>=HH.GG.EE</li>
    <li style='float: left;'><code>06</code>=CIVICA</li>
    <li style='float: left;'><code>07</code>=PERSONA FF.RR.HH</li>
    <li style='float: left;'><code>08</code>=EPT</li>
    <li style='float: left;'><code>09</code>=EDUCACI&Oacute;N F&Iacute;SICA</li>
    <li style='float: left;'><code>10</code>=EDUCACI&Oacute;N ARTISTICA</li>
    <li style='float: left;'><code>11</code>=EDUCACI&Oacute;N RELIGIOSA</li>  
    <li style='float: left;'><code>12</code>=INFORMATICA</li>
    <li style='float: left;'><code>13</code>=CONDUCTA</li>
</ul>
<br>
";

echo "
<table class='table table-hover' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N</th><th>ALUMNO</th> <th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
                                  <th>05 HGE</th><th>06 CIV</th><th>07 PFR</th><th>08 EPT</th>
                                  <th>09 EDFIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>
                                  <th>TRI</th><th>GEO</th><th>ARI</th>
                                  <th>BIO</th><th>FIS</th>
                                  <th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
    </tr>";
$alumnado_seccionSEC3A=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);$count_alumn=0;
#variables de notas aprobatorias
$sec4provmate=0;$sec4provcomunica=0;$sec4provingles=0;$sec4provcta=0;$sec4provhge=0;$sec4provcivica=0;$sec4provpersona=0;
$sec4provept=0;$sec4provfisica=0;$sec4provarte=0;$sec4provreligion=0;$sec4provpc=0;$sec4provconducta=0;
#variable la llevas
$prcursocargosec4=0;$fnsec4=0;
while ($sec4row = mysql_fetch_array($alumnado_seccionSEC3A)) {
echo "<tr>";
echo "<td>$sec4row[1] $sec4row[0] </td>";
echo "<td>$sec4row[2] $sec4row[3] ,$sec4row[4] </td>";

$registroalumnosec4=$profesorcitore->NOTASCONSOLIDADOTUTORIA1($sec4row[0]);

while ($sec4registro = mysql_fetch_array($registroalumnosec4)) {
    #matematicas
    if($sec4registro[2]=='TRIGONOMETRIA')$sec4tri=$sec4registro[3];
    if($sec4registro[2]=='GEOMETRIA') $sec4geo=$sec4registro[3];
    if($sec4registro[2]=='ARITMETICA') $sec4ari=$sec4registro[3];
    if($sec4registro[2]=='COMUNICACION') $sec4com=$sec4registro[3];
    if($sec4registro[2]=='INGLES') $sec4ing=$sec4registro[3];
    if($sec4registro[2]=='BIOLOGIA') $sec4quimica=$sec4registro[3];
    if($sec4registro[2]=='FISICA') $sec4fisica=$sec4registro[3];
    if($sec4registro[2]=='HGE') $sec4hge=$sec4registro[3];
    if($sec4registro[2]=='CIVICA') $sec4civ=$sec4registro[3];
    if($sec4registro[2]=='PP.FF.') $sec4ppff=$sec4registro[3];
    if($sec4registro[2]=='EPT') $sec4ept=$sec4registro[3];
    if($sec4registro[2]=='Edu. Fisica') $sec4edufis=$sec4registro[3];
    if($sec4registro[2]=='ARTE') $sec4arte=$sec4registro[3];
    if($sec4registro[2]=='RELIGION') $sec4rel=$sec4registro[3];
    if($sec4registro[2]=='INFORMATICA')$sec4inform=$sec4registro[3];
    if($sec4registro[2]=='CONDUCTA') $sec4condu=$sec4registro[3];
    
}
#------------------------------------------------------------------curso a cargo
if($sec4tri=="" || $sec4tri==0) $sec4tri="FN";if($sec4tri=="-1") $sec4tri="R";#trigonometria
if($sec4ari=="" || $sec4ari==0) $sec4ari="FN";if($sec4ari=="-1") $sec4ari="R";#algebra
if($sec4geo=="" || $sec4geo==0) $sec4geo="FN";if($sec4geo=="-1") $sec4geo="R";#geometria

if($sec4tri=="FN" || $sec4ari=="FN" || $sec4geo=="FN"){#mate
    $sec4mat="FN";
    $fnsec4=$profesorcitore->fnsec($sec4mat, $fnsec4);
}else{
    $sec4mat=$profesorcitore->pesomat($sec4geo,$sec4ari, $sec4tri);
}

if($sec4quimica=="" || $sec4quimica==0) $sec4quimica="FN";if($sec4quimica=="-1") $sec4quimica="R";#BIOLOGIA
if($sec4fisica=="" || $sec4fisica==0) $sec4fisica="FN";if($sec4fisica=="-1") $sec4fisica="R";#fisica

if($sec4quimica=="FN" || $sec4fisica=="FN"){#cta
    $sec4cta="FN";
    $fnsec4=$profesorcitore->fnsec($sec4cta, $fnsec4);
}else{
    $sec4cta=$profesorcitore->pesocta($sec4quimica, $sec4fisica);
}

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4mat, $prcursocargosec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4com, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4com, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4ing, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4ing, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4cta, $prcursocargosec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4hge, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4hge, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4civ, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4civ, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4ppff, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4ppff, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4ept, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4ept, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4edufis, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4edufis, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4arte, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4arte, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4rel, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4rel, $fnsec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4inform, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4inform, $fnsec4);

$fnsec4=$profesorcitore->fnsec($sec4condu, $fnsec4);

$secpuntajealumno4=$profesorcitore->puntajealumnosec(round($sec4mat,0), $sec4com, $sec4ing, $sec4cta, $sec4hge,$sec4civ,$sec4ppff,$sec4ept,$sec4edufis,$sec4arte,$sec4rel,$sec4inform);

if($sec4edufis==-2 || $sec4rel==-2) {
$promediante4=11;
}else{ 
$promediante4=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio4=$profesorcitore->promedioal($secpuntajealumno4,$promediante4);

#comunicacion
if($sec4com=="" || $sec4com==0) $sec4com="FN";if($sec4com=="-1") $sec4com="R";
#ingles
if($sec4ing=="" || $sec4ing==0) $sec4ing="FN";if($sec4ing=="-1") $sec4ing="R";
#hge
if($sec4hge=="" || $sec4hge==0) $sec4hge="FN";if($sec4hge=="-1") $sec4hge="R";
#civ
if($sec4civ=="" || $sec4civ==0) $sec4civ="FN";if($sec4civ=="-1") $sec4civ="R";
#ppff
if($sec4ppff=="" || $sec4ppff==0) $sec4ppff="FN";if($sec4ppff=="-1") $sec4ppff="R";
#ept
if($sec4ept=="" || $sec4ept==0) $sec4ept="FN";if($sec4ept=="-1") $sec4ept="R";
#educfisica
if($sec4edufis=="" || $sec4edufis==0) $sec4edufis="FN";if($sec4edufis=="-1") $sec4edufis="R";if($sec4edufis=="-2") $sec4edufis="ex";
#educart
if($sec4arte=="" || $sec4arte==0) $sec4arte="FN";if($sec4arte=="-1") $sec4arte="R";
#edurel
if($sec4rel=="" || $sec4rel==0) $sec4rel="FN";if($sec4rel=="-1") $sec4rel="R";if($sec4rel=="-2") $sec4rel="EX";
#informatica
if($sec4inform=="" || $sec4inform==0) $sec4inform="FN";if($sec4inform=="-1") $sec4inform="R";
#conducta
if($sec4condu=="" || $sec4condu==0) $sec4condu="FN";if($sec4condu=="-1") $sec4condu="R";
$mat4=round($sec4mat,0);
$cta4=round($sec4cta,0);
if($mat4==0) $mat4="FN";
if($cta4==0) $cta4="FN";
echo "
<td>$mat4</td>
<td>$sec4com</td>
<td>$sec4ing</td>    
<td>$cta4</td>
<td>$sec4hge</td>
<td>$sec4civ</td>
<td>$sec4ppff</td>
<td>$sec4ept</td>
<td>$sec4edufis</td>
<td>$sec4arte</td>
<td>$sec4rel</td>
<td>$sec4inform</td>
<td>$sec4condu</td>
    
<td>$sec4tri</td>
<td>$sec4geo</td>
<td>$sec4ari</td>
    
<td>$sec4quimica</td>
<td>$sec4fisica</td>

<td>$promedio4</td>
<td>$secpuntajealumno4</td>
<td>$prcursocargosec4</td>
<td>$fnsec4</td>";
#reinicilializa
$fnsec4=0;$prcursocargosec4=0;$secpuntajealumno4=0;$promedio4=0;$sec4ari=0;$sec4tri=0;
$sec4geo=0;$mat4=0;$sec4com=0;$sec4ing=0;$sec4cta=0;$sec4quimica=0;$sec4fisica=0;
$sec4hge=0;$sec4civ=0;
$sec4ppff=0;$sec4ept=0;$sec4edufis=0;$sec4arte=0;$sec4rel=0;$sec4inform=0;$sec4condu=0;

echo "</tr>";
}
echo "</table>";
}



#---------------------------------------------
#---------------------5to grado
if($nivela==="SECUNDARIA" AND $grado==5){
echo
"<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=MATEM&Aacute;TICA</li>
    <li style='float: left;'><code>02</code>=COMUNICACI&Oacute;N</li>
    <li style='float: left;'><code>03</code>=INGL&Eacute;S</li>
    <li style='float: left;'><code>04</code>=CTA</li>
    <li style='float: left;'><code>05</code>=HH.GG.EE</li>
    <li style='float: left;'><code>06</code>=CIVICA</li>
    <li style='float: left;'><code>07</code>=PERSONA FF.RR.HH</li>
    <li style='float: left;'><code>08</code>=EPT</li>
    <li style='float: left;'><code>09</code>=EDUCACI&Oacute;N F&Iacute;SICA</li>
    <li style='float: left;'><code>10</code>=EDUCACI&Oacute;N ARTISTICA</li>
    <li style='float: left;'><code>11</code>=EDUCACI&Oacute;N RELIGIOSA</li>  
    <li style='float: left;'><code>12</code>=INFORMATICA</li>
    <li style='float: left;'><code>13</code>=CONDUCTA</li>
</ul>
<br>
";

echo "
<table class='table table-hover' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N</th><th>ALUMNO</th><th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
                                  <th>05 HGE</th><th>06 CIV</th><th>07 P.F.R.H</th><th>08 EPT</th>
                                  <th>09 EDU.FIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>
                                  <th>ALG</th><th>TRI</th><th>GEO</th>                                  
                                  <th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
    </tr>
";
$alumnado_seccionSEC2=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);$count_alumn=0;
#variables de notas aprobatorias
$sec2provmate=0;$sec2provcomunica=0;$sec2provingles=0;$sec2provcta=0;$sec2provhge=0;$sec2provcivica=0;$sec2provpersona=0;
$sec2provept=0;$sec2provfisica=0;$sec2provarte=0;$sec2provreligion=0;$sec2provpc=0;$sec2provconducta=0;
#variable la llevas
$prcursocargosec2=0;$fnsec5=0;
while ($sec2row = mysql_fetch_array($alumnado_seccionSEC2)) {
echo "<tr>";
echo "<td>$sec2row[1]</td>";
echo "<td>$sec2row[2] $sec2row[3] ,$sec2row[4] </td>";

$registroalumnosec2=$profesorcitore->NOTASCONSOLIDADOTUTORIA1($sec2row[0]);

while ($sec2registro = mysql_fetch_array($registroalumnosec2)) {
    #matematicas
    if($sec2registro[2]=='ALGEBRA'){
        $sec2alg=$sec2registro[3];
    }
    if($sec2registro[2]=='TRIGONOMETRIA'){
        $sec2tri=$sec2registro[3];
    }    
    if($sec2registro[2]=='GEOMETRIA'){
        $sec2geo=$sec2registro[3];
    }
    if($sec2registro[2]=='COMUNICACION'){
        $sec2com=$sec2registro[3];
    }
    if($sec2registro[2]=='INGLES'){
        $sec2ing=$sec2registro[3];
    }
    if($sec2registro[2]=='FISICA'){
        $sec2ccaa=$sec2registro[3];
    }
    if($sec2registro[2]=='HGE'){
        $sec2hge=$sec2registro[3];
    }
    if($sec2registro[2]=='CIVICA'){
        $sec2civ=$sec2registro[3];
    }
    if($sec2registro[2]=='PP.FF.'){
        $sec2ppff=$sec2registro[3];
    }
    if($sec2registro[2]=='EPT'){
        $sec2ept=$sec2registro[3];
    }
    if($sec2registro[2]=='Edu. Fisica'){
        $sec2edufis=$sec2registro[3];
    }
    if($sec2registro[2]=='ARTE'){
        $sec2arte=$sec2registro[3];
    }
    if($sec2registro[2]=='RELIGION'){
        $sec2rel=$sec2registro[3];
    }
    if($sec2registro[2]=='INFORMATICA'){
        $sec2inform=$sec2registro[3];
    }
    if($sec2registro[2]=='CONDUCTA'){
        $sec2condu=$sec2registro[3];
    }
    
}
#------------------------------------------------------------------curso a cargo
if($sec2tri=="" || $sec2tri==0) $sec2tri="FN";if($sec2tri=="-1") $sec2arit="R";#TRIGONOMETRIA
if($sec2alg=="" || $sec2alg==0) $sec2alg="FN";if($sec2alg=="-1") $sec2alg="R";#algebra
if($sec2geo=="" || $sec2geo==0) $sec2geo="FN";if($sec2geo=="-1") $sec2geo="R";#geometria

if($sec2tri=="FN" || $sec2alg=="FN" || $sec2geo=="FN"){#mate
    $sec2mat="FN";
    $fnsec5=$profesorcitore->fnsec($sec2mat, $fnsec5);
}else{
    $sec2mat=$profesorcitore->pesomat($sec2tri, $sec2geo, $sec2alg);
}

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2com, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2com, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ing, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2ing, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ccaa, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2ccaa, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2hge, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2hge, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2civ, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2civ, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ppff, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2ppff, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ept, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2ept, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2edufis, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2edufis, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2arte, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2arte, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2rel, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2rel, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2inform, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2inform, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2mat, $prcursocargosec2);

$fnsec5=$profesorcitore->fnsec($sec2condu, $fnsec5);

$secpuntajealumno2=$profesorcitore->puntajealumnosec(round($sec2mat,0), $sec2com, $sec2ing, $sec2ccaa, $sec2hge, $sec2civ, $sec2ppff, $sec2ept, $sec2edufis, $sec2arte, $sec2rel,$sec2inform);

if($sec2edufis==-2 || $sec2rel==-2) {
$promediante2=11;
}else{ 
$promediante2=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio2=$profesorcitore->promedioal($secpuntajealumno2,$promediante2);

#comunicacion
if($sec2com=="" || $sec2com==0) $sec2com="FN";if($sec2com=="-1") $sec2com="R";
#ingles
if($sec2ing=="" || $sec2ing==0) $sec2ing="FN";if($sec2ing=="-1") $sec2ing="R";
#ccaa
if($sec2ccaa=="" || $sec2ccaa==0) $sec2ccaa="FN";if($sec2ccaa=="-1") $sec2ccaa="R";
#hge
if($sec2hge=="" || $sec2hge==0) $sec2hge="FN";if($sec2hge=="-1") $sec2hge="R";
#civ
if($sec2civ=="" || $sec2civ==0) $sec2civ="FN";if($sec2civ=="-1") $sec2civ="R";
#ppff
if($sec2ppff=="" || $sec2ppff==0) $sec2ppff="FN";if($sec2ppff=="-1") $sec2ppff="R";
#ept
if($sec2ept=="" || $sec2ept==0) $sec2ept="FN";if($sec2ept=="-1") $sec2ept="R";
#educfisica
if($sec2edufis=="" || $sec2edufis==0) $sec2edufis="FN";if($sec2edufis=="-1") $sec2edufis="R";if($sec2edufis=="-2") $sec2edufis="ex";
#educart
if($sec2arte=="" || $sec2arte==0) $sec2arte="FN";if($sec2arte=="-1") $sec2arte="R";
#edurel
if($sec2rel=="" || $sec2rel==0) $sec2rel="FN";if($sec2rel=="-1") $sec2rel="R";if($sec2rel=="-2") $sec2rel="EX";
#informatica
if($sec2inform=="" || $sec2inform==0) $sec2inform="FN";if($sec2inform=="-1") $sec2inform="R";
#conducta
if($sec2condu=="" || $sec2condu==0) $sec2condu="FN";if($sec2condu=="-1") $sec2condu="R";
$mat2=round($sec2mat,0);
if($mat2=="0") $mat2="FN";
echo "
<td>$mat2</td>
<td>$sec2com</td>
<td>$sec2ing</td>    
<td>$sec2ccaa</td>
<td>$sec2hge</td>
<td>$sec2civ</td>
<td>$sec2ppff</td>
<td>$sec2ept</td>
<td>$sec2edufis</td>
<td>$sec2arte</td>
<td>$sec2rel</td>
<td>$sec2inform</td>
<td>$sec2condu</td>
    
<td>$sec2alg</td>
<td>$sec2tri</td>
<td>$sec2geo</td>

<td>$promedio2</td>
<td>$secpuntajealumno2</td>
<td>$prcursocargosec2</td>
<td>$fnsec5</td>";
#reinicilializa
$fnsec5=0;$prcursocargosec2=0;$secpuntajealumno2=0;$promedio2=0;$sec2tri=0;$sec2alg=0;
$sec2geo=0;$mat2=0;$sec2com=0;$sec2ing=0;$sec2ccaa=0;$sec2hge=0;$sec2civ=0;
$sec2ppff=0;$sec2ept=0;$sec2edufis=0;$sec2arte=0;$sec2rel=0;$sec2inform=0;$sec2condu=0;

echo "</tr>";
}
echo "</table>";
}
#-------------------------------------------------------------------------------

echo "<form action='ficheroExcel.php' method='post' target='_blank' id='FormularioExportacion'>
    <p>Exportar a Excel  <img src='Css/images/export_to_excel.gif' class='botonExcel' /></p>
<input type='hidden' id='datos_a_enviar' name='datos_a_enviar' />
</form>";

?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script language="javascript">
$(document).ready(function() {
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
});
</script>