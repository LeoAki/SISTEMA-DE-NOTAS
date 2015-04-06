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

<? $registroalumno=$profesorcitore->NOTASCONSOLIDADOTUTORIA4($prrow[0]);

while ($prregistro = mysql_fetch_array($registroalumno)):

#matematicas
if($prregistro[1]=='MATEMATICA'):
$prmate=$prregistro[3];
$prprovmate=$profesorcitore->aprobadoareanormal($prmate, $prprovmate);
endif;

#raz mat
if($prregistro[1]=='R. MATEMATICO'):
$prrm=$prregistro[3];
$prprovrm=$profesorcitore->aprobadoareanormal($prrm, $prprovrm);
endif;

#comunicacion
if($prregistro[1]=="COMUNICACION"):
$prcomuni=$prregistro[3];
$prprovcomunica=$profesorcitore->aprobadoareanormal($prcomuni, $prprovcomunica);
endif;

#raz verbal
if($prregistro[1]=='R. VERBAL'):
$prrv=$prregistro[3];
$prprovrv=$profesorcitore->aprobadoareanormal($prrv, $prprovrv);
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

$prmatematicabasica=$profesorcitore->pesomatbasico($prmate, $prrm);
$prcomunicabasica=$profesorcitore->pesomatbasico($prcomuni, $prrv);

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
#leoaki?>

<!--matematica-->
<td><?=$profesorcitore->returnLetraNota($prmatematicabasica);?></td>

<!--comunicacion-->
<td><?=$profesorcitore->returnLetraNota($prcomunicabasica);?></td>

<!--arte3-->
<td><?=$profesorcitore->returnLetraNota($prarte);?></td>

<!--personal social-->
<td><?=$profesorcitore->returnLetraNota($prpersoc);?></td>

<!--educacion fisica-->
<td><?=$profesorcitore->returnLetraNota($predufis);?></td>

<!--ciencia y ambiente-->
<td><?=$profesorcitore->returnLetraNota($prccaa);?></td>

<!--educacion religiosa-->
<td><?=$profesorcitore->returnLetraNota($predurel);?></td>

<!--ingles-->
<td><?=$profesorcitore->returnLetraNota($pring);?></td>

<!--computacion-->
<td><?=$profesorcitore->returnLetraNota($prcomp);?></td>

<? $prprmd=$profesorcitore->promedioal($prpuntajealumno,$promediante);
if($prfaltanotas > 0){$prprmd = 0;}
?>

<td><?=$prprmd?></td>
<td><?=$prpuntajealumno?></td>

<!--matematica1-->
<td><?=$profesorcitore->returnLetraNota($prmate);?></td>

<!--Raz Mat1-->
<td><?=$profesorcitore->returnLetraNota($prrm);?></td>

<!--comunicacion2-->
<td><?=$profesorcitore->returnLetraNota($prcomuni);?></td>

<!--Raz Ver2-->
<td><?=$profesorcitore->returnLetraNota($prrv);?></td>

<!--conducta-->
<td><?=$profesorcitore->returnLetraNota($prcond);?></td>

<td><?=$prcursocargo?></td>
<td><?=$prfaltanotas?></td>
</tr>
<?
$prcursocargo=0;#reinicio la variable
$prfaltanotas=0;
}
echo '</table>';
}

##############################################################FIN##########################################################
###########################################################################################################################
if($nivela==="PRIMARIA" and ($grado==4 || $grado==5 || $grado==6) ){?>
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
#####################################################################################

#variable la llevas######
$prcursocargo2=0;        #
$prfaltanotas2=0;        #
#########################

while ($prrow2 = mysql_fetch_array($alumnado_seccion2)) {
$count_alumn2=$count_alumn2+1;?>
<tr>
<td style='font-size: 13px;'><?=$prrow2[1]?></td><td style='font-size: 13px;'><?=$prrow2[2].' '.$prrow2[3].', '.$prrow2[4];?></td>

<? $registroalumno2=$profesorcitore->NOTASCONSOLIDADOTUTORIA4($prrow2[0]);

while ($prregistro2 = mysql_fetch_array($registroalumno2)):

#Aritmetica
if($prregistro2[1]=='ARITMETICA'):
$praritmetica2=$prregistro2[3]; $prprovarit2=$profesorcitore->aprobadoareanormal($praritmetica2, $prprovarit2);
endif;

#Algebra&Geometria
if($prregistro2[1]=='ALGEBRA Y GEOMETRIA'):
$pralgebra2=$prregistro2[3];    $prprovalg2=$profesorcitore->aprobadoareanormal($pralgebra2, $prprovalg2);
endif;

#razonamiento matematico
if($prregistro2[1]=='R. MATEMATICO'):
$prrazmate2=$prregistro2[3];    $prprovrm2=$profesorcitore->aprobadoareanormal($prrazmate2, $prprovrm2);
endif;

#comunicacion
if($prregistro2[1]=="COMUNICACION"):
$prcomunicacion2=$prregistro2[3];   $prprovcomunica2=$profesorcitore->aprobadoareanormal($prcomunicacion2, $prprovcomunica2);
endif;

#raz verbal
if($prregistro2[1]=='R. VERBAL'):
$prrazverbal2=$prregistro2[3];      $prprovrve2=$profesorcitore->aprobadoareanormal($prrazverbal2, $prprovrve2);
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

$prmatematicaaritalg2=$profesorcitore->pesocta($praritmetica2, $pralgebra2);#Promedio de Aritmetica & Algebra

$prmatematicas2=$profesorcitore->pesomatbasico($prmatematicaaritalg2, $prrazmate2);#Promedio de Matematicas

$prcursocargo2=$profesorcitore->cursocargonormalpr($prmatematicas2, $prcursocargo2);
$prfaltanotas2=$profesorcitore->fnpr($prmatematicas2, $prfaltanotas2);

$prcomunicacionpromedio=$profesorcitore->pesomatbasico($prcomunicacion2, $prrazverbal2);#Promedio Comunicacion

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
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prmatematicas2);?></td>

<!--COMUNICACION-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prcomunicacionpromedio);?></td>

<!--ARTE-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prarte2);?></td>

<!--Personal Social-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prpersoc2);?></td>

<!--Educacion Física-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($preducfisica2);?></td>

<!--Ciencia y ambiente-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prccaa2);?></td>

<!--Educacion religiosa-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($preducreligiosa2);?></td>

<!--Ingles-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($pringles2);?></td>

<!--Computacion-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prcomputacion2);?></td>

<?
$prprmd2=$profesorcitore->promedioal($prpuntajealumno2,$promediante2);
if($prfaltanotas2 > 0){ $prprmd2 = 0; }
?>

<td style='font-size: 14px;'><strong><?=$prprmd2?></strong></td>
<td style='font-size: 14px;'><strong><?=$prpuntajealumno2?></strong></td>

<!--aritmetica-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($praritmetica2);?></td>

<!--algebra & geometria-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($pralgebra2);?></td>

<!--Promedio algebra & geometria-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prmatematicaaritalg2);?></td>

<!--Raz Matematico-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prrazmate2);?></td>

<!--comunicacion-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prcomunicacion2);?></td>

<!--Raz Verbal-->
<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prrazverbal2);?></td>

<td style='font-size: 14px;'><?=$profesorcitore->returnLetraNota($prconducta2);?></td>
<td style='font-size: 14px;'><?=$prcursocargo2?></td>
<td style='font-size: 14px;'><?=$prfaltanotas2?></td>
</tr>
<?
$prcursocargo2=0;#reinicio la variable
$prfaltanotas2=0;
}
echo '</table>';
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