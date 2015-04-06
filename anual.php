<br>
<h1><center>ANUAL</center></h1>
<?php
echo "<link href='Css/bootstrap/bootstrap.css' rel='stylesheet'/>";
include_once 'Class/Docente.php';
$profesorcitore=new Docente();
$nivela=$_GET['niveldelaula'];#nivel de educacion
$grado=$_GET['gradodelaula'];#grado del aula
$seccion=$_GET['codigoseccion'];#codigo de seccion

#Solo nivel primaria------------------------------------------------------------##########################################
if($nivela==="PRIMARIA" and ($grado==1 || $grado==2 || $grado==3) ){?>
<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=Mat.</li>      <li style='float: left;'><code>02</code>=Raz. Mat.</li>
    <li style='float: left;'><code>03</code>=Com.</li>      <li style='float: left;'><code>04</code>=Raz. Verbal</li>
    <li style='float: left;'><code>05</code>=Arte</li>      <li style='float: left;'><code>06</code>=Personal Social</li>
    <li style='float: left;'><code>07</code>=Educaci&oacute;n F&iacute;sica</li>
    <li style='float: left;'><code>08</code>=Ciencia y Ambiente</li>
    <li style='float: left;'><code>09</code>=Educaci&oacute;n Religiosa</li>
    <li style='float: left;'><code>10</code>=Ingl&eacute;s</li>
    <li style='float: left;'><code>11</code>=Computaci&oacute;n</li>
    <li style='float: left;'><code>12</code>=Conducta</li>
</ul><br>

<table class='table table-hover' id='Exportar_a_Excel'>
<tr class='gradeX'>
    <th>N°</th><th>ALUMNO</th>
    <th>MATEM.</th>     <th>COMUN.</th>
    <th>05 ART</th>     <th>06 PERS</th>        <th>07 EDFIS</th>    <th>08 CCAA</th>
    <th>09 REL</th>     <th>10 INL</th>         <th>11 COMPU</th>
    <th>Promedio</th>   <th>Puntaje</th>        <th>MAT</th>     <th>RAZ.MAT</th>     <th>COM</th>     <th>RAZ.VERB</th>
    <th>12 COND</th>    <th>Cur Desaprob.</th>  <th>FN</th>
</tr>
<?
$alumnado_seccion=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);#cambia
$count_alumn=0;
#variables de notas aprobatorias#################################################
$prprovmate=0;$prprovcomunica=0;$prprovarte=0;$prprovps=0;$prproveducfisica=0;  #
$prprovccaa=0;$prprovreli=0;$prprovingl=0;$prprovpc=0;$prprovconducta=0;        #
$prprovrm=0;                                                                    #
#################################################################################


#variable la llevas######
$prcursocargo=0;        #
$prfaltanotas=0;        #
#########################

while ($prrow = mysql_fetch_array($alumnado_seccion)) {
    $count_alumn=$count_alumn+1;?>
<tr>
<td><?=$prrow[1]?></td><td><?=$prrow[2].' '.$prrow[3].', '.$prrow[4];?></td>

<? $registroalumno=$profesorcitore->LISTARANUAL_beta($prrow[0]);

while ($prregistro = mysql_fetch_array($registroalumno)):

#matematicas
if($prregistro[1]=='MATEMATICA'):
$prmate;
$prmate1=$prregistro[8];
$prmate2=$prregistro[9];
$prmate3=$prregistro[10];
$prmate4=$prregistro[11];
endif;

#raz mat
if($prregistro[1]=='R. MATEMATICO'):
$prrm;
$prrm1=$prregistro[8];
$prrm2=$prregistro[9];
$prrm3=$prregistro[10];
$prrm4=$prregistro[11];
endif;

#comunicacion
if($prregistro[1]=="COMUNICACION"):
$prcomuni;
$prcomuni1=$prregistro[8];
$prcomuni2=$prregistro[9];
$prcomuni3=$prregistro[10];
$prcomuni4=$prregistro[11];
endif;

#raz verbal
if($prregistro[1]=='R. VERBAL'):
$prrv;
$prrv1=$prregistro[8];
$prrv2=$prregistro[9];
$prrv3=$prregistro[10];
$prrv4=$prregistro[11];
endif;

#arte
if($prregistro[1]=="ARTE"):
$prarte=$prregistro[3];
$prprovarte=$profesorcitore->aprobadoareaespecial($prarte, $prprovarte);
endif;

#personal social
if($prregistro[1]=="PERSONAL SOCIAL"):
$prpersoc=$prregistro[3];
$prprovps=$profesorcitore->aprobadoareanormal($prpersoc, $prprovps);
endif;

#educacion fisica
if($prregistro[1]=="EDUCACION FISICA"):
$predufis=$prregistro[3];
$prproveducfisica=$profesorcitore->aprobadoareaespecial($predufis, $prproveducfisica);
endif;

#educacion religiosa
if($prregistro[1]=="EDUCACION RELIGIOSA"):
$predurel=$prregistro[3];
$prprovreli=$profesorcitore->aprobadoareaespecial($predurel,$prprovreli);
endif;

#ingles
if($prregistro[1]=="INGLES"):
$pring=$prregistro[3];
$prprovingl=$profesorcitore->aprobadoareaespecial($pring, $prprovingl);
endif;

#computacion
if($prregistro[1]=="COMPUTACION"):
$prcomp=$prregistro[3];
$prprovpc=$profesorcitore->aprobadoareaespecial($prcomp, $prprovpc);
endif;

#CIENCIA Y AMBIENTE
if($prregistro[1]=="CIENCIA Y AMBIENTE"):
$prccaa=$prregistro[3];
$prprovccaa=$profesorcitore->aprobadoareanormal($prccaa, $prprovccaa);
endif;

#CONDUCTA
if($prregistro[1]=="CONDUCTA"):
$prcond=$prregistro[3];
$prprovconducta=$profesorcitore->aprobadoareanormal($prcond, $prprovconducta);
endif;
endwhile;#fuera del while

#curso a cargo#######################################################################
$prcursocargo=$profesorcitore->cursocargonormalpr($prarte, $prcursocargo);          #
$prcursocargo=$profesorcitore->cursocargonormalpr($prpersoc, $prcursocargo);        #
$prcursocargo=$profesorcitore->cursocargonormalpr2($predufis, $prcursocargo);       #
$prcursocargo=$profesorcitore->cursocargonormalpr2($predurel, $prcursocargo);       #
$prcursocargo=$profesorcitore->cursocargonormalpr2($pring, $prcursocargo);          #
$prcursocargo=$profesorcitore->cursocargonormalpr2($prcomp, $prcursocargo);         #
$prcursocargo=$profesorcitore->cursocargonormalpr($prccaa, $prcursocargo);          #
#FaltaNotas##########################################################################
$prfaltanotas=$profesorcitore->fnpr($prarte, $prfaltanotas);                        #
$prfaltanotas=$profesorcitore->fnpr($prpersoc, $prfaltanotas);                      #
$prfaltanotas=$profesorcitore->fnpr($predufis, $prfaltanotas);                      #
$prfaltanotas=$profesorcitore->fnpr($predurel, $prfaltanotas);                      #
$prfaltanotas=$profesorcitore->fnpr($pring, $prfaltanotas);                         #
$prfaltanotas=$profesorcitore->fnpr($prcomp, $prfaltanotas);                        #
$prfaltanotas=$profesorcitore->fnpr($prccaa, $prfaltanotas);                        #
$prfaltanotas=$profesorcitore->fnpr($prcond, $prfaltanotas);                        #
#####################################################################################

$prmatematicabasica1 = $profesorcitore->pesomatbasico($prmate1, $prrm1);
$prmatematicabasica2 = $profesorcitore->pesomatbasico($prmate2, $prrm2);
$prmatematicabasica3 = $profesorcitore->pesomatbasico($prmate3, $prrm3);
$prmatematicabasica4 = $profesorcitore->pesomatbasico($prmate4, $prrm4);
$prmatematicabasica = round((($prmatematicabasica1 + $prmatematicabasica2 + $prmatematicabasica3 + $prmatematicabasica4)/4), 0);

$prcomunicabasica1 = $profesorcitore->pesomatbasico($prcomuni1, $prrv1);
$prcomunicabasica2 = $profesorcitore->pesomatbasico($prcomuni2, $prrv2);
$prcomunicabasica3 = $profesorcitore->pesomatbasico($prcomuni3, $prrv3);
$prcomunicabasica4 = $profesorcitore->pesomatbasico($prcomuni4, $prrv4);
$prcomunicabasica = round((($prcomunicabasica1 + $prcomunicabasica2 + $prcomunicabasica3 + $prcomunicabasica4)/4), 0);

$prcursocargo=$profesorcitore->cursocargonormalpr($prmatematicabasica, $prcursocargo);
$prcursocargo=$profesorcitore->cursocargonormalpr($prcomunicabasica, $prcursocargo);
$prfaltanotas=$profesorcitore->fnpr($prmatematicabasica, $prfaltanotas);
$prfaltanotas=$profesorcitore->fnpr($prcomunicabasica, $prfaltanotas);

$prpuntajealumno=$profesorcitore->puntajealumnopr($prmatematicabasica,$prcomunicabasica,$prarte,$prpersoc,$predufis,$predurel,$pring,$prcomp,$prccaa);#sumo puntaje
if($predurel==-2 ) {
    $prpuntajealumno = $prpuntajealumno + 2;
    $promediante=8;
}else{ 
    $promediante=9;
};#si hay exonerados que se divida entre 8
?>

<!--matematica-->
<td><?=$profesorcitore->returnNota($prmatematicabasica);?></td>

<!--comunicacion-->
<td><?=$profesorcitore->returnNota($prcomunicabasica);?></td>

<!--arte-->
<td><?=$profesorcitore->returnNota($prarte);?></td>

<!--personal social-->
<td><?=$profesorcitore->returnNota($prpersoc);?></td>

<!--educacion fisica-->
<td><?=$profesorcitore->returnNota($predufis);?></td>

<!--ciencia y ambiente-->
<td><?=$profesorcitore->returnNota($prccaa);?></td>

<!--educacion religiosa-->
<td><?=$profesorcitore->returnNota($predurel);?></td>

<!--ingles-->
<td><?=$profesorcitore->returnNota($pring);?></td>

<!--computacion-->
<td><?=$profesorcitore->returnNota($prcomp);?></td>

<?
$prprmd=$profesorcitore->promedioal($prpuntajealumno,$promediante);
if($prfaltanotas > 0){$prprmd = 0;}
?>

<td><?=$prprmd?></td>
<td><?=$prpuntajealumno?></td>

<!--matematica1-->
<?php $prmate = round((($prmate1 + $prmate2 + $prmate3 + $prmate4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($prmate);?></td>

<!--Raz Mat1-->
<?php $prrm = round((($prrm1 + $prrm2 + $prrm3 + $prrm4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($prrm);?></td>

<!--comunicacion1-->
<?php $prcomuni = round((($prcomuni1 + $prcomuni2 + $prcomuni3 + $prcomuni4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($prcomuni);?></td>

<!--Raz Ver2-->
<?php $prrv = round((($prrv1 + $prrv2 + $prrv3 + $prrv4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($prrv);?></td>

<td><?=$profesorcitore->returnNota($prcond);?></td>
<td><?=$prcursocargo;?></td>
<td><?=$prfaltanotas;?></td>
</tr>
<?
$prcursocargo=0;#reinicio la variable
$prfaltanotas=0;
}
echo '</table>';
}

##############################################################FIN##########################################################
###########################################################################################################################
if($nivela==='PRIMARIA' and ($grado==4 || $grado==5 || $grado==6) ){?>
<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=Arit.</li>     <li style='float: left;'><code>02</code>=Alg. & Geo.</li>
    <li style='float: left;'><code>04</code>=Raz. Mat.</li>
    <li style='float: left;'><code>05</code>=Com.</li>      <li style='float: left;'><code>06</code>=Raz. Verbal</li>
    <li style='float: left;'><code>07</code>=Arte</li>      <li style='float: left;'><code>08</code>=Personal Social</li>
    <li style='float: left;'><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
    <li style='float: left;'><code>10</code>=Ciencia y Ambiente</li>
    <li style='float: left;'><code>11</code>=Educaci&oacute;n Religiosa</li>
    <li style='float: left;'><code>12</code>=Ingl&eacute;s</li>
    <li style='float: left;'><code>13</code>=Computaci&oacute;n</li>
    <li style='float: left;'><code>14</code>=Conducta</li>
</ul><br>
<table class='table table-hover' id='Exportar_a_Excel'>
<tr class='gradeX'>
    <th style='font-size: 14px;'>N°</th>        <th style='font-size: 14px;'>ALUMNO</th>
    <th style='font-size: 14px;'>MATEM.</th>    <th style='font-size: 14px;'>COMUN.</th>
    <th style='font-size: 14px;'>07 ART</th>    <th style='font-size: 14px;'>08 PERS</th>   <th style='font-size: 14px;'>09 EDFIS</th>   <th style='font-size: 14px;'>10 CCAA</th>
    <th style='font-size: 14px;'>11 REL</th>    <th style='font-size: 14px;'>12 INL</th>  <th>13 COMPU</th>
    <th style='font-size: 14px;'>Promedio</th>
    <th style='font-size: 14px;'>Puntaje</th>   
    <th style='font-size: 14px;'>ARIT</th>      <th style='font-size: 14px;'>ALG-GEO</th>  <th style='font-size: 14px;'>PR:Ari-alg-geo</th>
    <th style='font-size: 14px;'>RAZ.MAT</th>
    <th style='font-size: 14px;'>COM</th>       <th style='font-size: 14px;'>RAZ.VERB</th>
    <th style='font-size: 14px;'>14 COND</th>
    <th style='font-size: 14px;'>Cur Desaprob.</th>
    <th style='font-size: 14px;'>FN</th>
</tr>
<?
$alumnado_seccion2=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);#cambia
$count_alumn2=0;
#variables de notas aprobatorias#####################################################
$prprovarit2=0;$prprovalg2=0;$prprovrm2=0;$prprovcomunica2=0;$prprovrve2=0;         #
$prprovarte2=0;$prprovps2=0;$prproveducfisica2=0;                                   #
$prprovccaa2=0;$prprovreli2=0;$prprovingl2=0;$prprovpc2=0;$prprovconducta2=0;       #
$prprovmatematicas2=0;                                                              #
#####################################################################################

#variable la llevas######
$prcursocargo2=0;        #
$prfaltanotas2=0;        #
#########################

while ($prrow2 = mysql_fetch_array($alumnado_seccion2)) {
$count_alumn2=$count_alumn2+1;?>
<tr>
<td style='font-size: 13px;'><?=$prrow2[1]?></td><td style='font-size: 13px;'><?=$prrow2[2].' '.$prrow2[3].', '.$prrow2[4];?></td>

<? $registroalumno2=$profesorcitore->LISTARANUAL_beta($prrow2[0]);

while ($prregistro2 = mysql_fetch_array($registroalumno2)):

#Aritmetica
if($prregistro2[1]=='ARITMETICA'):
$praritmetica2;
$praritmetica2_1 = $prregistro2[8];
$praritmetica2_2 = $prregistro2[9];
$praritmetica2_3 = $prregistro2[10];
$praritmetica2_4 = $prregistro2[11];
endif;
#Algebra&Geometria
if($prregistro2[1]=='ALGEBRA Y GEOMETRIA'):
$pralgebra2;
$pralgebra2_1 = $prregistro2[8];
$pralgebra2_2 = $prregistro2[9];
$pralgebra2_3 = $prregistro2[10];
$pralgebra2_4 = $prregistro2[11];
endif;

#razonamiento matematico
if($prregistro2[1]=='R. MATEMATICO'):
$prrazmate2;
$prrazmate2_1 = $prregistro2[8];
$prrazmate2_2 = $prregistro2[9];
$prrazmate2_3 = $prregistro2[10];
$prrazmate2_4 = $prregistro2[11];
endif;

#comunicacion
if($prregistro2[1]=="COMUNICACION"):
$prcomunicacion2;
$prcomunicacion2_1 = $prregistro2[8];
$prcomunicacion2_2 = $prregistro2[9];
$prcomunicacion2_3 = $prregistro2[10];
$prcomunicacion2_4 = $prregistro2[11];
endif;

#raz verbal
if($prregistro2[1]=='R. VERBAL'):
$prrazverbal2;
$prrazverbal2_1 = $prregistro2[8];
$prrazverbal2_2 = $prregistro2[9];
$prrazverbal2_3 = $prregistro2[10];
$prrazverbal2_4 = $prregistro2[11];
endif;

#arte
if($prregistro2[1]=="ARTE"):
$prarte2=$prregistro2[3];           $prprovarte2=$profesorcitore->aprobadoareaespecial($prarte2, $prprovarte2);
endif;

#personal social
if($prregistro2[1]=="PERSONAL SOCIAL"):
$prpersoc2=$prregistro2[3];         $prprovps2=$profesorcitore->aprobadoareanormal($prpersoc2, $prprovps2);
endif;

#educacion fisica
if($prregistro2[1]=="EDUCACION FISICA"):
$preducfisica2=$prregistro2[3];     $prproveducfisica2=$profesorcitore->aprobadoareaespecial($preducfisica2, $prproveducfisica2);
endif;

#educacion religiosa
if($prregistro2[1]=="EDUCACION RELIGIOSA"):
$preducreligiosa2=$prregistro2[3];  $prprovreli2=$profesorcitore->aprobadoareaespecial($preducreligiosa2,$prprovreli2);
endif;

#ingles
if($prregistro2[1]=="INGLES"):
$pringles2=$prregistro2[3];         $prprovingl2=$profesorcitore->aprobadoareaespecial($pringles2, $prprovingl2);
endif;

#computacion
if($prregistro2[1]=="COMPUTACION"):
$prcomputacion2=$prregistro2[3];    $prprovpc2=$profesorcitore->aprobadoareaespecial($prcomputacion2, $prprovpc2);
endif;

#CIENCIA Y AMBIENTE
if($prregistro2[1]=="CIENCIA Y AMBIENTE"):
$prccaa2=$prregistro2[3];           $prprovccaa2=$profesorcitore->aprobadoareanormal($prccaa2, $prprovccaa2);
endif;

#CONDUCTA
if($prregistro2[1]=="CONDUCTA"):
$prconducta2=$prregistro2[3];       $prprovconducta2=$profesorcitore->aprobadoareanormal($prconducta2, $prprovconducta2);
endif;
#echo "<td>$prregistro2[3]</td>";
endwhile;#fuera del while

#curso a cargo#######################################################################
$prcursocargo2=$profesorcitore->cursocargonormalpr2($prarte2, $prcursocargo2);          #
$prcursocargo2=$profesorcitore->cursocargonormalpr($prpersoc2, $prcursocargo2);         #
$prcursocargo2=$profesorcitore->cursocargonormalpr2($preducfisica2, $prcursocargo2);    #
$prcursocargo2=$profesorcitore->cursocargonormalpr2($preducreligiosa2, $prcursocargo2); #
$prcursocargo2=$profesorcitore->cursocargonormalpr2($pringles2, $prcursocargo2);        #
$prcursocargo2=$profesorcitore->cursocargonormalpr2($prcomputacion2, $prcursocargo2);   #
$prcursocargo2=$profesorcitore->cursocargonormalpr($prccaa2, $prcursocargo2);           #
#FaltaNotas##############################################################################
$prfaltanotas2=$profesorcitore->fnpr($prarte2, $prfaltanotas2);             #
$prfaltanotas2=$profesorcitore->fnpr($prpersoc2, $prfaltanotas2);           #
$prfaltanotas2=$profesorcitore->fnpr($preducfisica2, $prfaltanotas2);       #
$prfaltanotas2=$profesorcitore->fnpr($preducreligiosa2, $prfaltanotas2);    #
$prfaltanotas2=$profesorcitore->fnpr($pringles2, $prfaltanotas2);           #
$prfaltanotas2=$profesorcitore->fnpr($prcomputacion2, $prfaltanotas2);      #
$prfaltanotas2=$profesorcitore->fnpr($prccaa2, $prfaltanotas2);             #
$prfaltanotas2=$profesorcitore->fnpr($prconducta2, $prfaltanotas2);         #
#####################################################################################

//$prmatematicaaritalg2=$profesorcitore->pesocta($praritmetica2, $pralgebra2);#Promedio de Aritmetica & Algebra
//
$prmatematicaaritalg2_1 = $profesorcitore->pesocta($praritmetica2_1, $pralgebra2_1);#Promedio de Aritmetica & Algebra
$prmatematicas2_1 = $profesorcitore->pesomatbasico($prmatematicaaritalg2_1, $prrazmate2_1);#Promedio de Matematicas  I BIM
$prmatematicaaritalg2_2 = $profesorcitore->pesocta($praritmetica2_2, $pralgebra2_2);
$prmatematicas2_2 = $profesorcitore->pesomatbasico($prmatematicaaritalg2_2, $prrazmate2_2);#Promedio de Matematicas  II BIM
$prmatematicaaritalg2_3 = $profesorcitore->pesocta($praritmetica2_3, $pralgebra2_3);
$prmatematicas2_3 = $profesorcitore->pesomatbasico($prmatematicaaritalg2_3, $prrazmate2_3);#Promedio de Matematicas  III BIM
$prmatematicaaritalg2_4 = $profesorcitore->pesocta($praritmetica2_4, $pralgebra2_4);
$prmatematicas2_4 = $profesorcitore->pesomatbasico($prmatematicaaritalg2_4, $prrazmate2_4);#Promedio de Matematicas  IV BIM
$prmatematicas2 = round((($prmatematicas2_1 + $prmatematicas2_2 + $prmatematicas2_3 + $prmatematicas2_4)/4), 0);

$prcursocargo2=$profesorcitore->cursocargonormalpr($prmatematicas2, $prcursocargo2);
$prfaltanotas2=$profesorcitore->fnpr($prmatematicas2, $prfaltanotas2);


$prcomunicacionpromedio1 = $profesorcitore->pesomatbasico($prcomunicacion2_1, $prrazverbal2_1);
$prcomunicacionpromedio2 = $profesorcitore->pesomatbasico($prcomunicacion2_2, $prrazverbal2_2);
$prcomunicacionpromedio3 = $profesorcitore->pesomatbasico($prcomunicacion2_3, $prrazverbal2_3);
$prcomunicacionpromedio4 = $profesorcitore->pesomatbasico($prcomunicacion2_4, $prrazverbal2_4);
$prcomunicacionpromedio = round((($prcomunicacionpromedio1 + $prcomunicacionpromedio2 + $prcomunicacionpromedio3 + $prcomunicacionpromedio4)/4), 0);#Promedio Comunicacion

$prcursocargo2=$profesorcitore->cursocargonormalpr($prcomunicacionpromedio, $prcursocargo2);
$prfaltanotas2=$profesorcitore->fnpr($prcomunicacionpromedio, $prfaltanotas2);

$prpuntajealumno2=$profesorcitore->puntajealumnopr($prmatematicas2,$prcomunicacionpromedio,$prarte2,$prpersoc2,$preducfisica2,$preducreligiosa2,$pringles2,$prcomputacion2,$prccaa2);#sumo puntaje

if($preducfisica2==-2 || $preducreligiosa2==-2) {
    $promediante2=8; $prpuntajealumno2+=2;
}else{
    $promediante2=9;
};#si hay exonerados que se divida entre 10
?>
<!--MATEMATICAS-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prmatematicas2);?></td>

<!--COMUNICACION-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prcomunicacionpromedio);?></td>

<!--ARTE-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prarte2);?></td>

<!--Personal Social-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prpersoc2);?></td>

<!--Educacion Física-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($preducfisica2);?></td>

<!--Ciencia y ambiente-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prccaa2);?></td>

<!--Educacion religiosa-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($preducreligiosa2);?></td>

<!--Ingles-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($pringles2);?></td>

<!--Computacion-->
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prcomputacion2);?></td>

<?
$prprmd2=$profesorcitore->promedioal($prpuntajealumno2,$promediante2);
if($prfaltanotas2 > 0){ $prprmd2 = 0; }
?>

<td style='font-size: 14px;'><strong><?=$prprmd2?></strong></td>
<td style='font-size: 14px;'><strong><?=$prpuntajealumno2?></strong></td>

<?#aritmetica
$praritmetica2 = round((($praritmetica2_1 + $praritmetica2_2 + $praritmetica2_3 + $praritmetica2_4)/4), 0);
?>
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($praritmetica2);?></td>

<?#algebra & geometria
$pralgebra2 = round((($pralgebra2_1 + $pralgebra2_2 + $pralgebra2_3 + $pralgebra2_4)/4), 0);
?>
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($pralgebra2);?></td>

<?#Promedio algebra & geometria
$prmatematicaaritalg2 = round((($prmatematicaaritalg2_1 + $prmatematicaaritalg2_2 + $prmatematicaaritalg2_3 + $prmatematicaaritalg2_4)/4), 0);
?>
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prmatematicaaritalg2);?></td>

<?#Raz Matematico
$prrazmate2 = round((($prrazmate2_1 + $prrazmate2_2 + $prrazmate2_3 + $prrazmate2_4)/4), 0);
?>
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prrazmate2);?></td>

<?#comunicacion
$prcomunicacion2 = round((($prcomunicacion2_1 + $prcomunicacion2_2 + $prcomunicacion2_3 + $prcomunicacion2_4)/4), 0);
?>
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prcomunicacion2);?></td>

<?#Raz Verbal
$prrazverbal2 = round((($prrazverbal2_1 + $prrazverbal2_2 + $prrazverbal2_3 + $prrazverbal2_4)/4), 0);?>
<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prrazverbal2);?></td>

<td style='font-size: 14px;'><?=$profesorcitore->returnNota($prconducta2);?></td>
<td style='font-size: 14px;'><?=$prcursocargo2?></td>
<td style='font-size: 14px;'><?=$prfaltanotas2?></td>
</tr>
<?
$prcursocargo2=0;#reinicio la variable
$prfaltanotas2=0;
}
echo '</table>';
}

#------------------------------------------------------------------------inicial
if($nivela==="INICIAL"){
?>
<ul class='unstyled'>
    <li style='float: left;'><code>01</code>=Matem&aacute;tica</li>
    <li style='float: left;'><code>02</code>=Comunicaci&oacute;n</li>
    <li style='float: left;'><code>03</code>=Ingl&eacute;n</li>
    <li style='float: left;'><code>04</code>=Personal Social</li>
    <li style='float: left;'><code>05</code>=Ciencia y Ambiente</li>
    <li style='float: left;'><code>06</code>=Informatica</li>
    <li style='float: left;'><code>07</code>=Conducta</li>
</ul>
<br><br><br><center>

<table class='table' id='Exportar_a_Excel'>
<tr class='gradeX'>
<th>N</th><th>ALUMNO</th>
      <th>C1</th><th>C2</th><th>01</th>
      <th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>02</th>
      <th>C1</th><th>C2</th><th>C3</th><th>03</th>
      <th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>04</th>
      <th>C1</th><th>C2</th><th>05</th>
      <th>C1</th><th>C2</th><th>06</th>
      <th>C1</th><th>07</th>
</tr>
<?
$alumnado_seccioni=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);#cambia

while ($irow = mysql_fetch_array($alumnado_seccioni)) {
    $count_alumni=$count_alumni+1;
    echo "<tr><td>$irow[1]</td><td><strong>$irow[2] $irow[3]</strong>, $irow[4] </td>";
    
$registroalumnoi=$profesorcitore->NOTASCONSOLIDADOTUTORIAINiCIALcuatro($irow[0]);

while ($iregistro = mysql_fetch_array($registroalumnoi)) :
        if($iregistro[1]=='MATEMATICA'):
        $imate=$iregistro[3];
        $imate1=$iregistro[4];$imate2=$iregistro[5];
        endif;
        
        if($iregistro[1]=='COMUNICACION'):
        $icom=$iregistro[3];
        $icom1=$iregistro[4];$icom2=$iregistro[5];$icom3=$iregistro[6];$icom4=$iregistro[7];
        endif;

        if($iregistro[1]=='INGLES'):
        $iingl=$iregistro[3];
        $iingl1=$iregistro[4];$iingl2=$iregistro[5];$iingl3=$iregistro[6];
        endif;

        if($iregistro[1]=='PERSONAL SOCIAL'):
        $ipersoc=$iregistro[3];
        $ipersoc1=$iregistro[4];$ipersoc2=$iregistro[5];$ipersoc3=$iregistro[6];$ipersoc4=$iregistro[7];
        endif;

        if($iregistro[1]=='CIENCIA Y AMBIENTE'):
        $iccaa=$iregistro[3];
        $iccaa1=$iregistro[4];$iccaa2=$iregistro[5];
        endif;
        
        if($iregistro[1]=='INFORMATICA'):
        $iinf=$iregistro[3];
        $iinf1=$iregistro[4];$iinf2=$iregistro[5];
        endif;
        
        if($iregistro[1]=='CONDUCTA'):
        $icoducta=$iregistro[3];
        $icoducta1=$iregistro[4];
        endif;
endwhile;

#mate inicial $iingl
if($imate=="") $imate="FN";?>
<td><?=$imate1?></td><td><?=$imate2?></td>
<td><strong><?=$imate?></strong></td>

<?#comunicacion inicial
if($icom=="") $icom="FN";?>
<td><?=$icom1?></td><td><?=$icom2?></td><td><?=$icom3?></td><td><?=$icom4?></td>
<td><strong><?=$icom?></strong></td>

<?#ingles inicial
if($iingl=="") $iingl="FN";?>
<td><?=$iingl1?></td><td><?=$iingl2?></td><td><?=$iingl3?></td>
<td><strong><?=$iingl?></strong></td>

<?#personal social inicial
if($ipersoc=="") $ipersoc="FN";?>
<td><?=$ipersoc1?></td><td><?=$ipersoc2?></td><td><?=$ipersoc3?></td><td><?=$ipersoc4?></td>
<td><strong><?=$ipersoc?></strong></td>

<?#ciencia y ambiente inicial
if($iccaa=="") $iccaa="FN";?>
<td><?=$iccaa1?></td><td><?=$iccaa2?></td>
<td><strong><?=$iccaa?></strong></td>

<?#informatica inicial
if($iinf=="") $iinf="FN";?>
<td><?=$iinf1?></td><td><?=$iinf2?></td>
<td><strong><?=$iinf?></strong></td>

<?#conducta inicial
if($icoducta=="") $icoducta="FN";?>
<td><?=$icoducta1?></td>
<td><strong><?=$icoducta?></strong></td>
</tr>

<?$prcursocargo=0;#reinicio la variable
}?>
</table>
<?}?>
</center>


<?#-------------------------------------------------------------------secundaria
if($nivela==="SECUNDARIA" AND $grado==1){?>

<ul class='unstyled'>
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

<table class='table table-hover' id='Exportar_a_Excel'>
<tr class='gradeX'>
  <th>N</th><th>ALUMNO</th><th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
  <th>05 HGE</th><th>06 CIV</th><th>07 P.F.R.H</th><th>08 EPT</th>
  <th>09 ED.FIS</th><th>10 ED. ART</th><th>11 REL</th><th>12 INF</th><th>13 CON</th>
  <th>ARIT</th><th>GEO</th> <th>Prom: Arit-Geo</th>
  <th>RAZ.MAT.</th>    <th>COM</th><th>RAZ.VERB</th>
  <th>PROMEDIO</th><th>PUNTAJE</th><th>CURSOS DES</th><th> FN </th>
</tr>
<?
$alumnado_seccionSEC1=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);
$count_alumn=0;
#variables de notas aprobatorias
$sec1provmate=0;$sec1provcomunica=0;$sec1provingles=0;$sec1provcta=0;$sec1provhge=0;$sec1provcivica=0;$sec1provpersona=0;
$sec1provept=0;$sec1provfisica=0;$sec1provarte=0;$sec1provreligion=0;$sec1provpc=0;$sec1provconducta=0;
#variable la llevas
$prcursocargosec1=0;
$fnsec1=0;
while ($sec1row = mysql_fetch_array($alumnado_seccionSEC1)) {
echo '<tr>';
echo '<td>'.$sec1row[1].'</td>';
echo "<td>$sec1row[2] $sec1row[3] ,$sec1row[4] </td>";

$registroalumnosec1=$profesorcitore->LISTARANUAL_beta($sec1row[0]);

while ($sec1registro = mysql_fetch_array($registroalumnosec1)) {
    #matematicas
    if($sec1registro[1]=='ARITMETICA'){
        $sec1arit;
        $sec1arit1=$sec1registro[8];
        $sec1arit2=$sec1registro[9];
        $sec1arit3=$sec1registro[10];
        $sec1arit4=$sec1registro[11];
    }
    if($sec1registro[1]=='GEOMETRIA'){
        $sec1alg;
        $sec1alg1=$sec1registro[8];
        $sec1alg2=$sec1registro[9];
        $sec1alg3=$sec1registro[10];
        $sec1alg4=$sec1registro[11];
    }
    if($sec1registro[1]=='R. MATEMATICO'){
        $sec1geo;
        $sec1geo1=$sec1registro[8];
        $sec1geo2=$sec1registro[9];
        $sec1geo3=$sec1registro[10];
        $sec1geo4=$sec1registro[11];
    }
    if($sec1registro[2]=='Comunicacion'){
        $sec1com;
        $sec1com1=$sec1registro[8];
        $sec1com2=$sec1registro[9];
        $sec1com3=$sec1registro[10];
        $sec1com4=$sec1registro[11];
    }
    if($sec1registro[1]=='R. VERBAL'){
        $sec1rv;
        $sec1rv1=$sec1registro[8];
        $sec1rv2=$sec1registro[9];
        $sec1rv3=$sec1registro[10];
        $sec1rv4=$sec1registro[11];
    }
    if($sec1registro[2]=='Ingles'){
        $sec1ing=$sec1registro[3];
    }
    if($sec1registro[2]=='CC.NN.'){
        $sec1ccaa=$sec1registro[3];
    }
    if($sec1registro[2]=='HGE'){
        $sec1hge=$sec1registro[3];
    }
    if($sec1registro[2]=='Civica'){
        $sec1civ=$sec1registro[3];
    }
    if($sec1registro[2]=='PP.FF.'){
        $sec1ppff=$sec1registro[3];
    }
    if($sec1registro[2]=='EPT'){
        $sec1ept=$sec1registro[3];
    }
    if($sec1registro[2]=='Edu. Fisica'){
        $sec1edufis=$sec1registro[3];
    }
    if($sec1registro[2]=='Arte'){
        $sec1arte=$sec1registro[3];
    }
    if($sec1registro[2]=='Religion'){
        $sec1rel=$sec1registro[3];
    }
    if($sec1registro[2]=='INFORMATICA'){
        $sec1inform=$sec1registro[3];
    }
    if($sec1registro[2]=='conducta'){
        $sec1condu=$sec1registro[3];
    }
}
#------------------------------------------------------------------curso a cargo
#Matemáticas
$promaritgeo1 = $profesorcitore->pesocta($sec1arit1, $sec1alg1);#Prom Arit-Geo
$sec1mat1 = $profesorcitore->pesomatbasico($promaritgeo1, $sec1geo1);
$promaritgeo2 = $profesorcitore->pesocta($sec1arit2, $sec1alg2);
$sec1mat2 = $profesorcitore->pesomatbasico($promaritgeo2, $sec1geo2);
$promaritgeo3 = $profesorcitore->pesocta($sec1arit3, $sec1alg3);
$sec1mat3 = $profesorcitore->pesomatbasico($promaritgeo3, $sec1geo3);
$promaritgeo4 = $profesorcitore->pesocta($sec1arit4, $sec1alg4);
$sec1mat4 = $profesorcitore->pesomatbasico($promaritgeo4, $sec1geo4);

$sec1mat = round((($sec1mat1 + $sec1mat2 + $sec1mat3 + $sec1mat4)/4), 0);
$prcursocargosec1 = $profesorcitore->cursocargonormalsec($sec1mat, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1mat, $fnsec1);


#Comunicación
$sec1comunica1 = $profesorcitore->pesomatbasico($sec1com1, $sec1rv1);
$sec1comunica2 = $profesorcitore->pesomatbasico($sec1com2, $sec1rv2);
$sec1comunica3 = $profesorcitore->pesomatbasico($sec1com3, $sec1rv3);
$sec1comunica4 = $profesorcitore->pesomatbasico($sec1com4, $sec1rv4);

$sec1comunica= round((($sec1comunica1 + $sec1comunica2 + $sec1comunica3 + $sec1comunica4)/4), 0);
$prcursocargosec1 = $profesorcitore->cursocargonormalsec($sec1comunica, $prcursocargosec1);
$fnsec1=$profesorcitore->fnsec($sec1comunica, $fnsec1);


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

$fnsec1=$profesorcitore->fnsec($sec1condu, $fnsec1);

$secpuntajealumno1=$profesorcitore->puntajealumnosec($sec1mat, $sec1comunica, $sec1ing, $sec1ccaa, $sec1hge, $sec1civ, $sec1ppff, $sec1ept, $sec1edufis, $sec1arte, $sec1rel,$sec1inform);

if($sec1edufis==-2 || $sec1rel==-2) {
$promediante1=11; $secpuntajealumno1+=2;
}else{ 
$promediante1=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio1=$profesorcitore->promedioal($secpuntajealumno1,$promediante1);
if($fnsec1 > 0){ $promedio1=0;}

#Matematica
$mat1=$profesorcitore->returnNota($sec1mat);

#$sec1comunica;
$com1=$profesorcitore->returnNota($sec1comunica);

?>
<td><?=$mat1?></td>
<td><?=$com1?></td>
<td><?=$profesorcitore->returnNota($sec1ing);?></td>
<td><?=$profesorcitore->returnNota($sec1ccaa);?></td>
<td><?=$profesorcitore->returnNota($sec1hge);?></td>
<td><?=$profesorcitore->returnNota($sec1civ);?></td>
<td><?=$profesorcitore->returnNota($sec1ppff);?></td>
<td><?=$profesorcitore->returnNota($sec1ept);?></td>
<td><?=$profesorcitore->returnNota($sec1edufis);?></td>
<td><?=$profesorcitore->returnNota($sec1arte);?></td>
<td><?=$profesorcitore->returnNota($sec1rel);?></td>
<td><?=$profesorcitore->returnNota($sec1inform);?></td>
<td><?=$profesorcitore->returnNota($sec1condu);?></td>

<?php $sec1arit = (round((($sec1arit1 + $sec1arit2 + $sec1arit3 + $sec1arit4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec1arit);?></td>

<?php $sec1alg = (round((($sec1alg1 + $sec1alg2 + $sec1alg3 + $sec1alg4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec1alg);?></td>

<?php $promaritgeo = (round((($promaritgeo1 + $promaritgeo2 + $promaritgeo3 + $promaritgeo4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($promaritgeo);?></td>

<?php $sec1geo = (round((($sec1geo1 + $sec1geo2 + $sec1geo3 + $sec1geo4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec1geo);?></td>

<?php $sec1com = (round((($sec1com1 + $sec1com2 + $sec1com3 + $sec1com4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec1com);?></td>

<?php $sec1rv = (round((($sec1rv1 + $sec1rv2 + $sec1rv3 + $sec1rv4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec1rv);?></td>

<td><?=$promedio1?></td>
<td><?=$secpuntajealumno1?></td>
<td><?=$prcursocargosec1?></td>
<td><?=$fnsec1?></td>

<?#reinicilializa
$prcursocargosec1=0;$secpuntajealumno1=0;$promedio1=0;$sec1arit=0;$sec1alg=0;
$sec1geo=0;$mat1=0;$com1=0;$sec1com=0;$sec1rv=0;$sec1ing=0;$sec1ccaa=0;$sec1hge=0;$sec1civ=0;
$sec1ppff=0;$sec1ept=0;$sec1edufis=0;$sec1arte=0;$sec1rel=0;$sec1inform=0;$sec1condu=0;
$fnsec1=0;
echo '</tr>';
}
echo '</table>';
}

#---------------------2do grado
if($nivela==="SECUNDARIA" AND $grado==2){?>
<ul class='unstyled'>
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

<table class='table table-hover' id='Exportar_a_Excel'>
    <tr class='gradeX'>
        <th>N</th><th>ALUMNO</th><th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
                                  <th>05 HGE</th><th>06 CIV</th><th>07 P.F.R.H</th><th>08 EPT</th>
                                  <th>09 EDU.FIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>
                                  <th>ALG</th><th>GEO</th><th>Prom:Alg-Geo</th>
                                  <th>Raz. Mat.</th>
                                  <th>Comun.</th><th>Raz.Verb</th>
                                  <th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
    </tr>
<?
$alumnado_seccionSEC2=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);
$count_alumn=0;
#variables de notas aprobatorias
$sec2provmate=0;$sec2provcomunica=0;$sec2provingles=0;$sec2provcta=0;$sec2provhge=0;$sec2provcivica=0;$sec2provpersona=0;
$sec2provept=0;$sec2provfisica=0;$sec2provarte=0;$sec2provreligion=0;$sec2provpc=0;$sec2provconducta=0;
#variable la llevas
$prcursocargosec2=0;
$fnsec2=0;
while ($sec2row = mysql_fetch_array($alumnado_seccionSEC2)) {
echo '<tr>';
echo "<td>$sec2row[1]</td>";
echo "<td>$sec2row[2] $sec2row[3] ,$sec2row[4] </td>";

$registroalumnosec2=$profesorcitore->LISTARANUAL_beta($sec2row[0]);

while ($sec2registro = mysql_fetch_array($registroalumnosec2)) {
    #matematicas
    if($sec2registro[1]=='Algebra') {
        $sec2alg;
        $sec2alg1 = $sec2registro[8];
        $sec2alg2 = $sec2registro[9];
        $sec2alg3 = $sec2registro[10];
        $sec2alg4 = $sec2registro[11];
    }
    if($sec2registro[1]=='Geometria') {
        $sec2geo;
        $sec2geo1 = $sec2registro[8];
        $sec2geo2 = $sec2registro[9];
        $sec2geo3 = $sec2registro[10];
        $sec2geo4 = $sec2registro[11];
    }
    if($sec2registro[1]=='R. Matematico') {
        $sec2arit;
        $sec2arit1 = $sec2registro[8];
        $sec2arit2 = $sec2registro[9];
        $sec2arit3 = $sec2registro[10];
        $sec2arit4 = $sec2registro[11];
    }
    if($sec2registro[1]=='Comunicacion'){
        $sec2com;
        $sec2com1 = $sec2registro[8];
        $sec2com2 = $sec2registro[9];
        $sec2com3 = $sec2registro[10];
        $sec2com4 = $sec2registro[11];
    }
    if($sec2registro[1]=='R. Verbal'){
        $sec2razv;
        $sec2razv1 = $sec2registro[8];
        $sec2razv2 = $sec2registro[9];
        $sec2razv3 = $sec2registro[10];
        $sec2razv4 = $sec2registro[11];
    }
    if($sec2registro[2]=='Ingles'){
        $sec2ing=$sec2registro[3];
    }
    if($sec2registro[2]=='CTA'){
        $sec2ccaa=$sec2registro[3];
    }
    if($sec2registro[2]=='HGE'){
        $sec2hge=$sec2registro[3];
    }
    if($sec2registro[2]=='Civica'){
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
    if($sec2registro[2]=='Arte'){
        $sec2arte=$sec2registro[3];
    }
    if($sec2registro[2]=='Religion'){
        $sec2rel=$sec2registro[3];
    }
    if($sec2registro[2]=='INFORMATICA'){
        $sec2inform=$sec2registro[3];
    }
    if($sec2registro[2]=='conducta'){
        $sec2condu=$sec2registro[3];  
    }
}
//Matematicas
$promalggeo1 = $profesorcitore->pesocta($sec2alg1, $sec2geo1);#Prom Alg -geom
$sec2mat1 = $profesorcitore->pesomatbasico($promalggeo1, $sec2arit1);
$promalggeo2 = $profesorcitore->pesocta($sec2alg2, $sec2geo2);
$sec2mat2 = $profesorcitore->pesomatbasico($promalggeo2, $sec2arit2);
$promalggeo3 = $profesorcitore->pesocta($sec2alg3, $sec2geo3);
$sec2mat3 = $profesorcitore->pesomatbasico($promalggeo3, $sec2arit3);
$promalggeo4 = $profesorcitore->pesocta($sec2alg4, $sec2geo4);
$sec2mat4 = $profesorcitore->pesomatbasico($promalggeo4, $sec2arit4);

$sec2mat = (round((($sec2mat1 + $sec2mat2 + $sec2mat3 + $sec2mat4)/4), 0));
$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2mat, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2mat, $fnsec2);


//Comunicación
$sec2comunicacion1 = $profesorcitore->pesomatbasico($sec2com1, $sec2razv1);
$sec2comunicacion2 = $profesorcitore->pesomatbasico($sec2com2, $sec2razv2);
$sec2comunicacion3 = $profesorcitore->pesomatbasico($sec2com3, $sec2razv3);
$sec2comunicacion4 = $profesorcitore->pesomatbasico($sec2com4, $sec2razv4);

$sec2comunicacion = (round((($sec2comunicacion1 + $sec2comunicacion2 + $sec2comunicacion3 + $sec2comunicacion4)/4), 0));
$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2comunicacion, $prcursocargosec2);
$fnsec2=$profesorcitore->fnsec($sec2comunicacion, $fnsec2);

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

if($sec2rel=='-2'){
$sumarreligion=0;
}else{
$sumarreligion=$sec2rel;
}
$secpuntajealumno2=$profesorcitore->puntajealumnosec($sec2mat, $sec2comunicacion, $sec2ing, $sec2ccaa, $sec2hge, $sec2civ, $sec2ppff, $sec2ept, $sec2edufis, $sec2arte, $sumarreligion,$sec2inform);

if($sec2edufis==-2 || $sec2rel==-2) {
$promediante2=11;
}else{ 
$promediante2=12;
};#si hay exonerados que se divida entre 8
$promedio2=$profesorcitore->promedioal($secpuntajealumno2,$promediante2);
if($fnsec2 > 0){ $promedio2 = 0; }

$mat2=$profesorcitore->returnNota($sec2mat);

$sec2alg = (round((($sec2alg1 + $sec2alg2 + $sec2alg3 + $sec2alg4)/4), 0));#param1
$sec2geo = (round((($sec2geo1 + $sec2geo2 + $sec2geo3 + $sec2geo4)/4), 0));#param2
$promalggeo = (round((($promalggeo1 + $promalggeo2 + $promalggeo3 + $promalggeo4)/4), 0));#param2
$sec2arit = (round((($sec2arit1 + $sec2arit2 + $sec2arit3 + $sec2arit4)/4), 0));#param2
$sec2com = (round((($sec2com1 + $sec2com2 + $sec2com3 + $sec2com4)/4), 0));#param1 com
$sec2razv = (round((($sec2razv1 + $sec2razv2 + $sec2razv3 + $sec2razv4)/4), 0));#param2 com
?>

<td><?=$mat2;?></td>
<td><?=$profesorcitore->returnNota($sec2comunicacion);?></td>
<td><?=$profesorcitore->returnNota($sec2ing);?></td>
<td><?=$profesorcitore->returnNota($sec2ccaa);?></td>
<td><?=$profesorcitore->returnNota($sec2hge);?></td>
<td><?=$profesorcitore->returnNota($sec2civ);?></td>
<td><?=$profesorcitore->returnNota($sec2ppff);?></td>
<td><?=$profesorcitore->returnNota($sec2ept);?></td>
<td><?=$profesorcitore->returnNota($sec2edufis);?></td>
<td><?=$profesorcitore->returnNota($sec2arte);?></td>
<td><?=$profesorcitore->returnNota($sec2rel);?></td>
<td><?=$profesorcitore->returnNota($sec2inform);?></td>
<td><?=$profesorcitore->returnNota($sec2condu);?></td>
<td><?=$profesorcitore->returnNota($sec2alg);?></td>
<td><?=$profesorcitore->returnNota($sec2geo);?></td>
<td><?=$profesorcitore->returnNota($promalggeo);?></td>
<td><?=$profesorcitore->returnNota($sec2arit);?></td>
<td><?=$profesorcitore->returnNota($sec2com);?></td>
<td><?=$profesorcitore->returnNota($sec2razv);?></td>
<td><?=$promedio2;?></td>
<td><?=$secpuntajealumno2;?></td>
<td><?=$prcursocargosec2;?></td>
<td><?=$fnsec2;?></td>

<?php
#reinicilializa
$fnsec2 = 0;$prcursocargosec2=0;$secpuntajealumno2=0;$promedio2=0;
$sec2arit = 0;$sec2arit1 = 0;$sec2arit2t=0;$sec2arit3=0;$sec2arit4=0;
$sec2alg = 0;
$sec2geo=0;$mat2=0;$sec2mat=0;$sec2com=0;$sec2ing=0;$sec2ccaa=0;$sec2hge=0;$sec2civ=0;
$sec2ppff=0;$sec2ept=0;$sec2edufis=0;$sec2arte=0;$sec2rel=0;$sec2inform=0;$sec2condu=0;

echo '</tr>';
}
echo '</table>';
}


#---------------------------------------------
#---------------------3er grado
if($nivela==="SECUNDARIA" AND $grado==3){
?>
<ul class='unstyled'>
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

<table class='table table-hover' id='Exportar_a_Excel'>
<tr class='gradeX'>
<th>N</th><th>ALUMNO</th> <th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
<th>05 HGE</th><th>06 CIV</th><th>07 PFR</th><th>08 EPT</th>
<th>09 EDFIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>
<th>Alg.</th><th>Trig.</th><th>Prom: Alg-Trig</th>

<th>Raz. Matem.</th>

<th>Comu.</th><th>Raz. Verb</th>

<th>Fis.</th><th>Quim.</th><th>Biol.</th>

<th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
</tr>

<?$alumnado_seccionSEC3=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);
$count_alumn=0;
#variables de notas aprobatorias
$sec3provmate=0;$sec3provcomunica=0;$sec3provingles=0;$sec3provcta=0;$sec3provhge=0;$sec3provcivica=0;$sec3provpersona=0;
$sec3provept=0;$sec3provfisica=0;$sec3provarte=0;$sec3provreligion=0;$sec3provpc=0;$sec3provconducta=0;
#variable la llevas
$prcursocargosec3=0;$fnsec3=0;
while ($sec3row = mysql_fetch_array($alumnado_seccionSEC3)) {?>
<tr>
<td><?=$sec3row[1]?></td>
<td><?=$sec3row[2].' '.$sec3row[3].' ,'.$sec3row[4];?></td>

<?$registroalumnosec3=$profesorcitore->LISTARANUAL_beta($sec3row[0]);

while ($sec3registro = mysql_fetch_array($registroalumnosec3)) {
    #matematicas
    if($sec3registro[2]=='Matematica - Algebra'){
        $sec3alg;
        $sec3alg1 = $sec3registro[8];
        $sec3alg2 = $sec3registro[9];
        $sec3alg3 = $sec3registro[10];
        $sec3alg4 = $sec3registro[11];
    }
    if($sec3registro[2]=='Matematica - Trigonometria'){
        $sec3tri;
        $sec3tri1 = $sec3registro[8];
        $sec3tri12 = $sec3registro[9];
        $sec3tri13 = $sec3registro[10];
        $sec3tri4 = $sec3registro[11];
    }
    if($sec3registro[2]=='Matematica - R. Matematico'){
        $sec3geo;
        $sec3geo1 = $sec3registro[8];
        $sec3geo2 = $sec3registro[9];
        $sec3geo3 = $sec3registro[10];
        $sec3geo4 = $sec3registro[11];
    }
    if($sec3registro[2]=='Comunicacion'){
        $sec3com;
        $sec3com1 = $sec3registro[8];
        $sec3com2 = $sec3registro[9];
        $sec3com3 = $sec3registro[10];
        $sec3com4 = $sec3registro[11];
    }
    if($sec3registro[2]=='Comunicacion - R. Verbal'){
        $sec3rv;
        $sec3rv1 = $sec3registro[8];
        $sec3rv2 = $sec3registro[9];
        $sec3rv3 = $sec3registro[10];
        $sec3rv4 = $sec3registro[11];
    }
    if($sec3registro[2]=='INGLES'){
        $sec3ing=$sec3registro[3];
    }
    if($sec3registro[2]=='FISICA'){
        $sec3fisica;
        $sec3fisica1 = $sec3registro[8];
        $sec3fisica2 = $sec3registro[9];
        $sec3fisica3 = $sec3registro[10];
        $sec3fisica4 = $sec3registro[11];
    }
    if($sec3registro[2]=='QUIMICA'){
        $sec3quimica;
        $sec3quimica1 = $sec3registro[8];
        $sec3quimica2 = $sec3registro[9];
        $sec3quimica3 = $sec3registro[10];
        $sec3quimica4 = $sec3registro[11];
    }
    if($sec3registro[2]=='BIOLOGIA'){
        $sec3biologia;
        $sec3biologia1 = $sec3registro[8];
        $sec3biologia2 = $sec3registro[9];
        $sec3biologia3 = $sec3registro[10];
        $sec3biologia4 = $sec3registro[11];
    }
    if($sec3registro[2]=='HGE'){
        $sec3hge=$sec3registro[3];
    }
    if($sec3registro[2]=='CIVICA'){
        $sec3civ=$sec3registro[3];
    }
    if($sec3registro[2]=='PP.FF.'){
        $sec3ppff=$sec3registro[3];
    }
    if($sec3registro[2]=='EPT'){
        $sec3ept=$sec3registro[3];
    }
    if($sec3registro[2]=='Edu. Fisica'){
        $sec3edufis=$sec3registro[3];
    }
    if($sec3registro[2]=='ARTE'){
        $sec3arte=$sec3registro[3];
    }
    if($sec3registro[2]=='RELIGION'){
        $sec3rel=$sec3registro[3];
    }
    if($sec3registro[2]=='INFORMATICA'){
        $sec3inform=$sec3registro[3];
    }
    if($sec3registro[2]=='CONDUCTA'){
        $sec3condu =$sec3registro[3];
    }
}
#------------------------------------------------------------------curso a cargo

//Matematicas
$promalgtri1 = $profesorcitore->pesocta($sec3alg1, $sec3tri1);#Promedio Alg y trig
$sec3mat1 = $profesorcitore->pesomatbasico($promalgtri1, $sec3geo1);#Promedio Matematica
$promalgtri2 = $profesorcitore->pesocta($sec3alg2, $sec3tri12);
$sec3mat2 = $profesorcitore->pesomatbasico($promalgtri2, $sec3geo2);
$promalgtri3 = $profesorcitore->pesocta($sec3alg3, $sec3tri13);
$sec3mat3 = $profesorcitore->pesomatbasico($promalgtri3, $sec3geo3);
$promalgtri4 = $profesorcitore->pesocta($sec3alg4, $sec3tri4);
$sec3mat4 = $profesorcitore->pesomatbasico($promalgtri4, $sec3geo1);
$sec3mat = (round((($sec3mat1 + $sec3mat2 + $sec3mat3 + $sec3mat4)/4), 0));#Promedio Matematica

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3mat, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3mat, $fnsec3);

//Comunicación
$sec3comunicacion1 = $profesorcitore->pesocombasico($sec3com1, $sec3rv1);#Promedio Comunicacion I
$sec3comunicacion2 = $profesorcitore->pesocombasico($sec3com2, $sec3rv2);#Promedio Comunicacion II
$sec3comunicacion3 = $profesorcitore->pesocombasico($sec3com3, $sec3rv3);#Promedio Comunicacion III
$sec3comunicacion4 = $profesorcitore->pesocombasico($sec3com4, $sec3rv4);#Promedio Comunicacion IV
$sec3comunicacion = (round((($sec3comunicacion1 + $sec3comunicacion2 + $sec3comunicacion3 + $sec3comunicacion4)/4), 0));#Promedio Comunicacion

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3comunicacion, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3comunicacion, $fnsec3);

//Cta
$sec3cta1 = $profesorcitore->pesocta2014($sec3fisica1, $sec3quimica1, $sec3biologia1);#Promedio Cta I
$sec3cta2 = $profesorcitore->pesocta2014($sec3fisica2, $sec3quimica2, $sec3biologia2);#Promedio Cta II
$sec3cta3 = $profesorcitore->pesocta2014($sec3fisica3, $sec3quimica3, $sec3biologia3);#Promedio Cta III
$sec3cta4 = $profesorcitore->pesocta2014($sec3fisica4, $sec3quimica4, $sec3biologia4);#Promedio Cta IV
$sec3cta = (round((($sec3cta1 + $sec3cta2 + $sec3cta3 + $sec3cta4)/4), 0));#Promedio Cta

$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3cta, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3cta, $fnsec3);


$prcursocargosec3=$profesorcitore->cursocargonormalsec($sec3ing, $prcursocargosec3);
$fnsec3=$profesorcitore->fnsec($sec3ing, $fnsec3);

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

if($sec3rel=='-2'){
    $puntajereligion=0;
}else{
    $puntajereligion=$sec3rel;
}
$secpuntajealumno3=$profesorcitore->puntajealumnosec(round($sec3mat,0), round($sec3comunicacion,0), $sec3ing, round($sec3cta,0), $sec3hge,$sec3civ,$sec3ppff,$sec3ept,$sec3edufis,$sec3arte,$puntajereligion,$sec3inform);

if($sec3edufis==-2 || $sec3rel==-2) {
$promediante3=11; $secpuntajealumno3+=2;
}else{ 
$promediante3=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio3=$profesorcitore->promedioal($secpuntajealumno3,$promediante3);
IF($fnsec3 > 0){$promedio3 = 0;}

$mat3 = $profesorcitore->returnNota($sec3mat);
$cta3 = $profesorcitore->returnNota($sec3cta);
?>

<td><?=$mat3?></td>
<td><?=$profesorcitore->returnNota($sec3comunicacion);?></td>
<td><?=$profesorcitore->returnNota($sec3ing);?></td>
<td><?=$cta3?></td>
<td><?=$profesorcitore->returnNota($sec3hge);?></td>
<td><?=$profesorcitore->returnNota($sec3civ);?></td>
<td><?=$profesorcitore->returnNota($sec3ppff);?></td>
<td><?=$profesorcitore->returnNota($sec3ept);?></td>
<td><?=$profesorcitore->returnNota($sec3edufis);?></td>
<td><?=$profesorcitore->returnNota($sec3arte);?></td>
<td><?=$profesorcitore->returnNota($sec3rel);?></td>
<td><?=$profesorcitore->returnNota($sec3inform);?></td>
<td><?=$profesorcitore->returnNota($sec3condu);?></td>
<?php $sec3alg = round((($sec3alg1 + $sec3alg2 + $sec3alg3 + $sec3alg4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3alg);?></td>
<?php $sec3tri = round((($sec3tri1 + $sec3tri12 + $sec3tri13 + $sec3tri4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3tri);?></td>
<?php $promalgtri = round((($promalgtri1 + $promalgtri2 + $promalgtri3 + $promalgtri4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($promalgtri);?></td>
<?php $sec3geo = round((($sec3geo1 + $sec3geo2 + $sec3geo3 + $sec3geo4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3geo);?></td>
<?php $sec3com = round((($sec3com1 + $sec3com2 + $sec3com3 + $sec3com4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3com);?></td>
<?php $sec3rv = round((($sec3rv1 + $sec3rv2 + $sec3rv3 + $sec3rv4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3rv);?></td>
<?php $sec3fisica = round((($sec3fisica1 + $sec3fisica2 + $sec3fisica3 + $sec3fisica4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3fisica);?></td>
<?php $sec3quimica = round((($sec3quimica1 + $sec3quimica2 + $sec3quimica3 + $sec3quimica4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3quimica);?></td>
<?php $sec3biologia = round((($sec3biologia1 + $sec3biologia2 + $sec3biologia3 + $sec3biologia4)/4), 0); ?>
<td><?=$profesorcitore->returnNota($sec3biologia);?></td>

<td><?=$promedio3?></td>
<td><?=$secpuntajealumno3?></td>
<td><?=$prcursocargosec3?></td>
<td><?=$fnsec3?></td>
<?#reinicilializa
$fnsec3=0;$prcursocargosec3=0;$secpuntajealumno3=0;$promedio3=0;$sec3alg=0;$sec3tri=0;
$sec3geo=0;$mat3=0;$sec3com=0;$sec3ing=0;$sec3cta=0;$sec3quimica=0;$sec3fisica=0;
$sec3hge=0;$sec3civ=0;
$sec3ppff=0;$sec3ept=0;$sec3edufis=0;$sec3arte=0;$sec3rel=0;$sec3inform=0;$sec3condu=0;

?></tr><? }
?></table><? }

#---------------------------------------------

#---------------------4to grado
if($nivela==="SECUNDARIA" AND $grado==4){?>
<ul class='unstyled'>
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

<table class='table table-hover' id='Exportar_a_Excel'>
<tr class='gradeX'>
<th>N</th><th>ALUMNO</th> <th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
<th>05 HGE</th><th>06 CIV</th><th>07 PFR</th><th>08 EPT</th>
<th>09 EDFIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>
<th>Geo</th><th>Tri</th><th>Prom: Geo-Tri</th><th>Ra. Mat.</th>
<th>Com.</th><th>Raz. Ver</th>
<th>FIS</th><th>QUI</th><th>BIO</th>
<th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
</tr>

<?$alumnado_seccionSEC3A=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);$count_alumn=0;
#variables de notas aprobatorias
$sec4provmate=0;$sec4provcomunica=0;$sec4provingles=0;$sec4provcta=0;$sec4provhge=0;$sec4provcivica=0;$sec4provpersona=0;
$sec4provept=0;$sec4provfisica=0;$sec4provarte=0;$sec4provreligion=0;$sec4provpc=0;$sec4provconducta=0;
#variable la llevas
$prcursocargosec4=0;$fnsec4=0;
while ($sec4row = mysql_fetch_array($alumnado_seccionSEC3A)) {?>
<tr>
<td><?=$sec4row[1].' '.$sec4row[0]?></td>
<td><?=$sec4row[2].' '.$sec4row[3].' ,'.$sec4row[4]?></td>

<?$registroalumnosec4=$profesorcitore->LISTARANUAL_beta($sec4row[0]);

while ($sec4registro = mysql_fetch_array($registroalumnosec4)) {
    #matematicas
if($sec4registro[2]=='Matematica - Geometria'){
    $sec4geo;#geometria
    $sec4geo1 = $sec4registro[8];
    $sec4geo2 = $sec4registro[9];
    $sec4geo3 = $sec4registro[10];
    $sec4geo4 = $sec4registro[11];
}
if($sec4registro[2]=='Matematica - Trigonometria'){
    $sec4tri;#trigonometria
    $sec4tri1 = $sec4registro[8];
    $sec4tri2 = $sec4registro[9];
    $sec4tri3 = $sec4registro[10];
    $sec4tri4 = $sec4registro[11];
}
if($sec4registro[2]=='Matematica - R. Matematico'){
    $sec4ari;#Raz matematico
    $sec4ari1 = $sec4registro[8];
    $sec4ari2 = $sec4registro[9];
    $sec4ari3 = $sec4registro[10];
    $sec4ari4 = $sec4registro[11];
}
if($sec4registro[2]=='Comunicacion'){
    $sec4com;
    $sec4com1 = $sec4registro[8];
    $sec4com2 = $sec4registro[9];
    $sec4com3 = $sec4registro[10];
    $sec4com4 = $sec4registro[11];
}
if($sec4registro[2]=='Comunicacion - R. Verbal'){
    $sec4rv;
    $sec4rv1 = $sec4registro[8];
    $sec4rv2 = $sec4registro[9];
    $sec4rv3 = $sec4registro[10];
    $sec4rv4 = $sec4registro[11];
}
if($sec4registro[2]=='INGLES'){
    $sec4ing=$sec4registro[3];
}
if($sec4registro[2]=='BIOLOGIA'){
    $sec4biologia;
    $sec4biologia1 = $sec4registro[8];
    $sec4biologia2 = $sec4registro[9];
    $sec4biologia3 = $sec4registro[10];
    $sec4biologia4 = $sec4registro[11];
}
if($sec4registro[2]=='FISICA'){
    $sec4fisica;
    $sec4fisica1 = $sec4registro[8];
    $sec4fisica2 = $sec4registro[9];
    $sec4fisica3 = $sec4registro[10];
    $sec4fisica4 = $sec4registro[11];
}
if($sec4registro[2]=='QUIMICA'){
    $sec4quimica;
    $sec4quimica1 = $sec4registro[8];
    $sec4quimica2 = $sec4registro[9];
    $sec4quimica3 = $sec4registro[10];
    $sec4quimica4 = $sec4registro[11];
}
if($sec4registro[2]=='HGE'){
    $sec4hge=$sec4registro[3];
}
if($sec4registro[2]=='CIVICA'){
    $sec4civ=$sec4registro[3];
}
if($sec4registro[2]=='PP.FF.'){
    $sec4ppff=$sec4registro[3];
}
if($sec4registro[2]=='EPT'){
    $sec4ept=$sec4registro[3];
}
if($sec4registro[2]=='Edu. Fisica'){
    $sec4edufis=$sec4registro[3];
}
if($sec4registro[2]=='ARTE'){
    $sec4arte=$sec4registro[3];
}
if($sec4registro[2]=='RELIGION'){
    $sec4rel=$sec4registro[3];
}
if($sec4registro[2]=='INFORMATICA'){
    $sec4inform=$sec4registro[3];
}
if($sec4registro[2]=='CONDUCTA'){
    $sec4condu=$sec4registro[3];
}

}
#------------------------------------------------------------------curso a cargo

//Matematicas
$promgeotri1 = $profesorcitore->pesocta($sec4geo1, $sec4tri1);#Promedio Geo & Tri
$sec4mat1 = $profesorcitore->pesomatbasico($promgeotri1, $sec4ari1);#Promedio de Matemática
$promgeotri2 = $profesorcitore->pesocta($sec4geo2, $sec4tri2);
$sec4mat2 = $profesorcitore->pesomatbasico($promgeotri2, $sec4ari2);
$promgeotri3 = $profesorcitore->pesocta($sec4geo3, $sec4tri3);
$sec4mat3 = $profesorcitore->pesomatbasico($promgeotri3, $sec4ari3);
$promgeotri4 = $profesorcitore->pesocta($sec4geo4, $sec4tri4);
$sec4mat4 = $profesorcitore->pesomatbasico($promgeotri4, $sec4ari4);
$sec4mat = (round((($sec4mat1 + $sec4mat2 + $sec4mat3 + $sec4mat4)/4), 0));#Promedio de Matemática

$fnsec4=$profesorcitore->fnsec($sec4mat, $fnsec4);
$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4mat, $prcursocargosec4);


//Comunicacion
$sec4comunicacion1 = $profesorcitore->pesocombasico($sec4com1, $sec4rv1);#Promedio Comunicacion
$sec4comunicacion2 = $profesorcitore->pesocombasico($sec4com2, $sec4rv2);#Promedio Comunicacion
$sec4comunicacion3 = $profesorcitore->pesocombasico($sec4com3, $sec4rv3);#Promedio Comunicacion
$sec4comunicacion4 = $profesorcitore->pesocombasico($sec4com4, $sec4rv4);#Promedio Comunicacion
$sec4comunicacion = (round((($sec4comunicacion1 + $sec4comunicacion2 + $sec4comunicacion3 + $sec4comunicacion4)/4), 0));#Promedio Comunicacion

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4comunicacion, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4comunicacion, $fnsec4);

//Cta
$sec4cta1 = $profesorcitore->pesocta2014($sec4fisica1, $sec4quimica1, $sec4biologia1);#Promedio Cta
$sec4cta2 = $profesorcitore->pesocta2014($sec4fisica2, $sec4quimica2, $sec4biologia2);#Promedio Cta
$sec4cta3 = $profesorcitore->pesocta2014($sec4fisica3, $sec4quimica3, $sec4biologia3);#Promedio Cta
$sec4cta4 = $profesorcitore->pesocta2014($sec4fisica4, $sec4quimica4, $sec4biologia4);#Promedio Cta
$sec4cta = (round((($sec4cta1 + $sec4cta2 + $sec4cta3 + $sec4cta4)/4), 0));#Promedio Cta

$fnsec4=$profesorcitore->fnsec($sec4cta, $fnsec4);
$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4cta, $prcursocargosec4);

$prcursocargosec4=$profesorcitore->cursocargonormalsec($sec4ing, $prcursocargosec4);
$fnsec4=$profesorcitore->fnsec($sec4ing, $fnsec4);

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

if($sec4rel=='-2'){
    $reglareligion4=0;
}else{
    $reglareligion4=$sec4rel;
}

$secpuntajealumno4=$profesorcitore->puntajealumnosec(round($sec4mat,0), round($sec4comunicacion,0), $sec4ing, round($sec4cta,0), $sec4hge,$sec4civ,$sec4ppff,$sec4ept,$sec4edufis,$sec4arte,$reglareligion4,$sec4inform);

if($sec4edufis==-2 || $sec4rel==-2) {
$promediante4=11;
}else{ 
$promediante4=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio4=$profesorcitore->promedioal($secpuntajealumno4,$promediante4);

if($fnsec4 > 0){
    $promedio4 = 0;
}

$mat4 = $profesorcitore->returnNota($sec4mat);
$cta4 = $profesorcitore->returnNota($sec4cta);
?>

<td><?=$mat4?></td>
<td><?=$profesorcitore->returnNota($sec4comunicacion);?></td>
<td><?=$profesorcitore->returnNota($sec4ing);?></td>
<td><?=$cta4?></td>
<td><?=$profesorcitore->returnNota($sec4hge);?></td>
<td><?=$profesorcitore->returnNota($sec4civ);?></td>
<td><?=$profesorcitore->returnNota($sec4ppff);?></td>
<td><?=$profesorcitore->returnNota($sec4ept);?></td>
<td><?=$profesorcitore->returnNota($sec4edufis);?></td>
<td><?=$profesorcitore->returnNota($sec4arte);?></td>
<td><?=$profesorcitore->returnNota($sec4rel);?></td>
<td><?=$profesorcitore->returnNota($sec4inform);?></td>
<td><?=$profesorcitore->returnNota($sec4condu);?></td>

<?php $sec4geo = (round((($sec4geo1 + $sec4geo2 + $sec4geo3 + $sec4geo4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4geo);?></td>

<?php $sec4tri = (round((($sec4tri1 + $sec4tri2 + $sec4tri3 + $sec4tri4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4tri);?></td>

<?php $promgeotri = (round((($promgeotri1 + $promgeotri2 + $promgeotri3 + $promgeotri4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($promgeotri);?></td>

<?php $sec4ari = (round((($sec4ari1 + $sec4ari2 + $sec4ari3 + $sec4ari4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4ari);?></td>

<?php $sec4com = (round((($sec4com1 + $sec4com2 + $sec4com3 + $sec4com4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4com);?></td>

<?php $sec4rv = (round((($sec4rv1 + $sec4rv2 + $sec4rv3 + $sec4rv4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4rv);?></td>

<?php $sec4fisica = (round((($sec4fisica1 + $sec4fisica2 + $sec4fisica3 + $sec4fisica4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4fisica);?></td>

<?php $sec4quimica = (round((($sec4quimica1 + $sec4quimica2 + $sec4quimica3 + $sec4quimica4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4quimica);?></td>

<?php $sec4biologia = (round((($sec4biologia1 + $sec4biologia2 + $sec4biologia3 + $sec4biologia4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec4biologia);?></td>

<td><?=$promedio4?></td>
<td><?=$secpuntajealumno4?></td>
<td><?=$prcursocargosec4?></td>
<td><?=$fnsec4?></td>
<?php
#reinicilializa
$fnsec4=0;$prcursocargosec4=0;$secpuntajealumno4=0;$promedio4=0;$sec4ari=0;$sec4tri=0;
$sec4geo=0;$mat4=0;$sec4com=0;$sec4ing=0;$sec4cta=0;$sec4quimica=0;$sec4fisica=0;$sec4biologia=0;
$sec4hge=0;$sec4civ=0;
$sec4ppff=0;$sec4ept=0;$sec4edufis=0;$sec4arte=0;$sec4rel=0;$sec4inform=0;$sec4condu=0;
?>
</tr>   <?}?>
</table>    <?}


#---------------------------------------------
#---------------------5to grado
if($nivela==="SECUNDARIA" AND $grado==5){?>
<ul class='unstyled'>
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

<table class='table table-hover' id='Exportar_a_Excel'>
<tr class='gradeX'>
<th>N</th><th>ALUMNO</th><th>01 MAT</th><th>02 COM</th><th>03 ING</th><th>04 CTA</th>
<th>05 HGE</th><th>06 CIV</th><th>07 P.F.R.H</th><th>08 EPT</th>
<th>09 EDU.FIS</th><th>10 ART</th><th>11 REL</th><th>12 INF</th><th>13 COND</th>

<th>Tri</th><th>Alg</th><th>Prom Tri-Alg</th><th>Raz. Mat</th>
<th>Com</th><th>Raz. Ver.</th>
<th>Fis</th><th>Bio</th>

<th>PROM.</th><th>PUNT.</th><th>CUR. DES.</th><th> FN </th>
</tr>
<?
$alumnado_seccionSEC2=$profesorcitore->ALUMNOSDEMITUTORIA2($seccion);$count_alumn=0;
#variables de notas aprobatorias
$sec2provmate=0;$sec2provcomunica=0;$sec2provingles=0;$sec2provcta=0;$sec2provhge=0;$sec2provcivica=0;$sec2provpersona=0;
$sec2provept=0;$sec2provfisica=0;$sec2provarte=0;$sec2provreligion=0;$sec2provpc=0;$sec2provconducta=0;
#variable la llevas
$prcursocargosec2=0;$fnsec5=0;
while ($sec2row = mysql_fetch_array($alumnado_seccionSEC2)) {?>
<tr>
<td><?=$sec2row[1]?></td>
<td><?=$sec2row[2].' '.$sec2row[3].' ,'.$sec2row[4]?></td>

<?$registroalumnosec2=$profesorcitore->LISTARANUAL_beta($sec2row[0]);

while ($sec2registro = mysql_fetch_array($registroalumnosec2)) {
    #matematicas
    if($sec2registro[2]=='Matematica - Trigonometria'){
        $sec2tri; #Trigonometria
        $sec2tri1 = $sec2registro[8];
        $sec2tri2 = $sec2registro[9];
        $sec2tri3 = $sec2registro[10];
        $sec2tri4 = $sec2registro[11];
    }
    if($sec2registro[2]=='Matematica - Algebra'){
        $sec2alg;#Algebra
        $sec2alg1 = $sec2registro[8];
        $sec2alg2 = $sec2registro[9];
        $sec2alg3 = $sec2registro[10];
        $sec2alg4 = $sec2registro[11];
    }
    if($sec2registro[2]=='Matematica - R. Matematico'){
        $sec2geo;#Raz. Matematico
        $sec2geo1 = $sec2registro[8];
        $sec2geo2 = $sec2registro[9];
        $sec2geo3 = $sec2registro[10];
        $sec2geo4 = $sec2registro[11];
    }
    if($sec2registro[2]=='Comunicacion'){
        $sec2com;
        $sec2com1 = $sec2registro[8];
        $sec2com2 = $sec2registro[9];
        $sec2com3 = $sec2registro[10];
        $sec2com4 = $sec2registro[11];
    }
    if($sec2registro[2]=='Comunicacion - R. Verbal'){
        $sec2rv;
        $sec2rv1 = $sec2registro[8];
        $sec2rv2 = $sec2registro[9];
        $sec2rv3 = $sec2registro[10];
        $sec2rv4 = $sec2registro[11];
    }
    if($sec2registro[2]=='INGLES'){
        $sec2ing=$sec2registro[3];
    }
    if($sec2registro[2]=='FISICA'){
        $sec2ccaa;
        $sec2ccaa_1 = $sec2registro[8];
        $sec2ccaa_2 = $sec2registro[9];
        $sec2ccaa_3 = $sec2registro[10];
        $sec2ccaa_4 = $sec2registro[11];
    }
    if($sec2registro[2]=='BIOLOGIA'){
        $sec2ccaa2;
        $sec2ccaa2_1 = $sec2registro[8];
        $sec2ccaa2_2 = $sec2registro[9];
        $sec2ccaa2_3 = $sec2registro[10];
        $sec2ccaa2_4 = $sec2registro[11];
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
###################################curso a cargo############################################
//Matemática
$promtrial1 = $profesorcitore->pesocta($sec2tri1, $sec2alg1);#Prom trigono & alg IB
$sec2mat1 = $profesorcitore->pesomatbasico($promtrial1, $sec2geo1);#Matematicas IB
$promtrial2 = $profesorcitore->pesocta($sec2tri2, $sec2alg2);#Prom trigono & alg IIB
$sec2mat2 = $profesorcitore->pesomatbasico($promtrial2, $sec2geo2);#Matematicas IIB
$promtrial3 = $profesorcitore->pesocta($sec2tri3, $sec2alg3);#Prom trigono & alg IB
$sec2mat3 = $profesorcitore->pesomatbasico($promtrial3, $sec2geo3);#Matematicas IB
$promtrial4 = $profesorcitore->pesocta($sec2tri4, $sec2alg4);#Prom trigono & alg IB
$sec2mat4 = $profesorcitore->pesomatbasico($promtrial4, $sec2geo4);#Matematicas IB

$sec2mat = (round((($sec2mat1 + $sec2mat2 + $sec2mat3 + $sec2mat4)/4), 0));
$prcursocargosec2 = $profesorcitore->cursocargonormalsec($sec2mat, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2mat, $fnsec5);

//Comunicacion
$sec2comunicacion1=$profesorcitore->pesocombasico($sec2com1, $sec2rv1);#Comunicacion
$sec2comunicacion2=$profesorcitore->pesocombasico($sec2com2, $sec2rv2);#Comunicacion
$sec2comunicacion3=$profesorcitore->pesocombasico($sec2com3, $sec2rv3);#Comunicacion
$sec2comunicacion4=$profesorcitore->pesocombasico($sec2com4, $sec2rv4);#Comunicacion
$sec2comunicacion = (round((($sec2comunicacion1 + $sec2comunicacion2 + $sec2comunicacion3 + $sec2comunicacion4)/4), 0));#Comunicacion

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2comunicacion, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2comunicacion, $fnsec5);

//CTA
$sec2promcta1 = $profesorcitore->pesocta($sec2ccaa_1, $sec2ccaa2_1);#Ciencias & Ambiente
$sec2promcta2 = $profesorcitore->pesocta($sec2ccaa_2, $sec2ccaa2_2);#Ciencias & Ambiente
$sec2promcta3 = $profesorcitore->pesocta($sec2ccaa_3, $sec2ccaa2_3);#Ciencias & Ambiente
$sec2promcta4 = $profesorcitore->pesocta($sec2ccaa_4, $sec2ccaa2_4);#Ciencias & Ambiente
$sec2promcta = (round((($sec2promcta1 + $sec2promcta2 + $sec2promcta3 + $sec2promcta4)/4), 0));#Ciencias & Ambiente

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2promcta, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2promcta, $fnsec5);

$prcursocargosec2=$profesorcitore->cursocargonormalsec($sec2ing, $prcursocargosec2);
$fnsec5=$profesorcitore->fnsec($sec2ing, $fnsec5);

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

if($sec2rel=='-2'){
    $valorreligion5=0;
}else{
    $valorreligion5=$sec2rel;
}

$secpuntajealumno2=$profesorcitore->puntajealumnosec(round($sec2mat,0), round($sec2comunicacion,0), $sec2ing, round($sec2promcta,0), $sec2hge, $sec2civ, $sec2ppff, $sec2ept, $sec2edufis, $sec2arte, $valorreligion5,$sec2inform);

if($sec2edufis==-2 || $sec2rel==-2) {
$promediante2=11;
}else{ 
$promediante2=12;
};#si hay exonerados que se divida entre 8
#$promedio1=round($secpuntajealumno1/$promediante1,2);
$promedio2=$profesorcitore->promedioal($secpuntajealumno2,$promediante2);

if($fnsec5 > 0){
    $promedio2 = 0;
}

$mat2 = $profesorcitore->returnNota($sec2mat); ?>

<td><?=$mat2?></td>
<td><?=$profesorcitore->returnNota($sec2comunicacion);?></td>
<td><?=$profesorcitore->returnNota($sec2ing);?></td>
<td><?=$profesorcitore->returnNota($sec2promcta);?></td>
<td><?=$profesorcitore->returnNota($sec2hge);?></td>
<td><?=$profesorcitore->returnNota($sec2civ);?></td>
<td><?=$profesorcitore->returnNota($sec2ppff);?></td>
<td><?=$profesorcitore->returnNota($sec2ept);?></td>
<td><?=$profesorcitore->returnNota($sec2edufis);?></td>
<td><?=$profesorcitore->returnNota($sec2arte);?></td>
<td><?=$profesorcitore->returnNota($sec2rel);?></td>
<td><?=$profesorcitore->returnNota($sec2inform);?></td>
<td><?=$profesorcitore->returnNota($sec2condu);?></td>
    
<?php $sec2tri = (round((($sec2tri1 + $sec2tri2 + $sec2tri3 + $sec2tri4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec2tri);?></td>

<?php $sec2alg = (round((($sec2alg1 + $sec2alg2 + $sec2alg3 + $sec2alg4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec2alg);?></td>

<?php $promtrial = (round((($promtrial1 + $promtrial2 + $promtrial3 + $promtrial4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($promtrial);?></td>

<?php $sec2geo = (round((($sec2geo1 + $sec2geo2 + $sec2geo3 + $sec2geo4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec2geo);?></td>

<?php $sec2com = (round((($sec2com1 + $sec2com2 + $sec2com3 + $sec2com4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec2com);?></td>

<?php $sec2rv = (round((($sec2rv1 + $sec2rv2 + $sec2rv3 + $sec2rv4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec2rv);?></td>

<?php $sec2ccaa = (round((($sec2ccaa_1 + $sec2ccaa_2 + $sec2ccaa_3 + $sec2ccaa_4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec2ccaa);?></td>

<?php $sec2ccaa2 = (round((($sec2ccaa2_1 + $sec2ccaa2_2 + $sec2ccaa2_3 + $sec2ccaa2_4)/4), 0)); ?>
<td><?=$profesorcitore->returnNota($sec2ccaa2);?></td>

<td><?=$promedio2?></td>
<td><?=$secpuntajealumno2?></td>
<td><?=$prcursocargosec2?></td>
<td><?=$fnsec5?></td>
<?php
#reinicilializa
$fnsec5=0;$prcursocargosec2=0;$secpuntajealumno2=0;$promedio2=0;$sec2tri=0;$sec2alg=0;
$sec2geo=0;$mat2=0;$sec2com=0;$sec2ing=0;$sec2ccaa=0;$sec2ccaa2=0;$sec2promcta=0;$sec2hge=0;$sec2civ=0;
$sec2ppff=0;$sec2ept=0;$sec2edufis=0;$sec2arte=0;$sec2rel=0;$sec2inform=0;$sec2condu=0;
?>
</tr>
<?}?></table><?}
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