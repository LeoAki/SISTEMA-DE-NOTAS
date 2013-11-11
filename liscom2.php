<?php
require_once 'Class/Component.php';
$componew= new Component();
require_once 'Class/Indicador.php';
$indicadornew= new Indicador();
require_once 'Class/Alumn.php';
$alumnnew= new Alumn();
require_once 'Class/Asinatura.php';
$asinaturenew=new Asinatura();
require_once 'Class/RegistroAlumnoInicial.php';
$regininew=new RegistroAlumnoInicial();
require_once 'Class/RegistroAlumno.php';
$regalumsecprinew=new RegistroAlumno();
require_once 'Class/Seccion.php';
$secview=new Seccion();

$idsinata=$_GET['idsinau'];#idasignatura
$idsectionz=$_GET['idsecc'];#idseccion
$idpersxy=$_GET['idpersonast'];#idpersona

if($idsinata==""){
    echo "Elige un curso";
    echo "<img src='Css/images/nofoundcurso.jpeg' style='width: 208px;height: 243px;'/>";
}else{
#inicio
$secviewnivel=$secview->viewNivel($idsectionz);
if($rownivelview=mysql_fetch_array($secviewnivel)){
    $viewniveluser=$rownivelview[0];#nivel:INICIAL/PRIMARIA/SECUNDARIA
}

$formalu=$alumnnew->UserAlumSeccion($idpersxy);
while ($rowalupersona = mysql_fetch_array($formalu)) {
    $alumno_seccionm=$rowalupersona[1];#alumnoseccion
}

echo "
    <h3 style='color:peru;'>Descripci&oacute;n del &Aacute;rea:</h3>";
$worksina=$asinaturenew->describesinatu($idsectionz, $idsinata);

while ($rowworksina = mysql_fetch_array($worksina)) {
echo
"<a style='text-align:left;'><i class='alert'><b>IdRegistro:</b>$rowworksina[0]<b>Profesor(a):</b>[$rowworksina[1] $rowworksina[2] ,$rowworksina[3]]</i>
<br><br><i class='alert alert-success'><b>Asignatura:</b>$rowworksina[5]-2doBimestre</i>
</a>";}

echo "<table class='table table-hover'>";
echo "<thead><tr class='gradeX'>
        <td><strong><h4 style='color:green;'>N</strong></h4></td>
        <td><strong><h4 style='color:green;'>CRITERIOS DE EVALUACI&Oacute;N</strong></h4></td>
        <td><strong><h4 style='color:green;'>NOTA</h4></td></tr></thead>";
$liscompte =$componew->LISTAR($idsinata);
while ($rowcompte = mysql_fetch_array($liscompte)) {
    $lisindidor=$indicadornew->LISTAR($rowcompte[0]);
    while ($rowindidorr = mysql_fetch_array($lisindidor)) {
        echo "<tr class='gradeA'>
                <td><b>$rowcompte[1]</b>.$rowindidorr[3] </td>
                <td> $rowindidorr[2] </td>";
        #empieza ver notas
            if($viewniveluser=="INICIAL"){
                $viewregin=$regininew->LISTAR_2($alumno_seccionm.$idsectionz.$idsinata);
                while ($rowviewnotas = mysql_fetch_array($viewregin)) {
                    $valuecel=$rowcompte[1].$rowindidorr[3];
                    echo "<td>".$showno=$rowviewnotas["p$valuecel"] ."</td>";
                    $valorpromedioview=$rowviewnotas["promedio".$rowcompte[1]];
                    $pbview=$rowviewnotas["pb"];
                }
            }
            if($viewniveluser!="INICIAL"){
                $viewregi2=$regalumsecprinew->LISTAR2($alumno_seccionm.$idsectionz.$idsinata);
                while ($rowviewnotas2 = mysql_fetch_array($viewregi2)) {
                    $valuecel2=$rowcompte[1].$rowindidorr[3];
                    $showno2=$rowviewnotas2["2p$valuecel2"];
                    if($showno2=="0"){
                        $showno2="FN";
                    }
                    echo "<td><i>".$showno2."</i></td>" ;
                    $valorpromedioview2=$rowviewnotas2["2promedio".$rowcompte[1]];
                    $pbview2=$rowviewnotas2["2pb"];
                }
            }
echo "</tr>";
    }
echo "<tr><td></td>";

        if($viewniveluser=="INICIAL"){
            echo "<td><b><i>PROMEDIO DEL COMPONENTE:$rowcompte[1] $rowcompte[3]</i></b></td>
            <td><h4>$valorpromedioview</h4></td></tr>";
        }
        if($viewniveluser!="INICIAL"){
            echo "<td><b><i>PROMEDIO DEL COMPONENTE:$rowcompte[1] $rowcompte[3]</i></b></td>";
            $redovalorpro2=  round($valorpromedioview2);
            if($redovalorpro2==0) $redovalorpro2="FN";
            echo "<td><h4>$redovalorpro2</h4></td></tr>";
        }
}
echo "<tr><td></td><td><b><i><h3>PROMEDIO DEL AREA</h3></i></b></td>";

if($pbview=="") $pbview="FN";
if($pbview2==0) $pbview2="FN";

if($viewniveluser=="INICIAL")echo "<td><h3>$pbview</h3></td></tr>";
if($viewniveluser!="INICIAL")echo "<td><h3>$pbview2</h3></td></tr>";
echo "</table>";
echo "<a href='#arriba'>IR HACIA ARRIBA<i class='icon-arrow-up'></i></a>";
}#fin del if

?>
