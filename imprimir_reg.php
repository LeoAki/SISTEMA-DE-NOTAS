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
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->

</head>
    <body>
        <div>
<?php

require_once 'Class/Component.php';
require_once 'Class/Indicador.php';
require_once 'Class/RegistroAlumno.php';
$INDICAXD= new Indicador();
$REGISTROALUMNO= new RegistroAlumno();
?>
            <center><a style="font-size: 12px;">Registro De Notas por asignatura- IV BIMESTRE</a>
    <br>
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
echo "<a style='font-size:11px;'>Profesor Responsable: ".$paternodocente.$maternodocente." ,".$nombresdocente."</a>";

/*--------------------------------------MANTENIMIENTO-----------------------------------*/
//Listar registros
#BUCLE REPETITIVO
if(isset($_REQUEST['GRABAR'])){ // se envio el formulario?
$queryalu=$REGISTROALUMNO->ListaAlumnoSeccion($seccion);

while ($rowgeneral = mysql_fetch_array($queryalu)) {
    $count=$count+1;
}

for($x =1 ; $x <= 34; $x++){//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite

       $REGISTROALUMNO->setAlumnoregistro($_REQUEST[$x.'txtalumnoregistro']);
       $REGISTROALUMNO->setRegistro($_REQUEST['txtregistro']);
       $REGISTROALUMNO->setAlumnoseccion($_REQUEST[$x.'txtidalumno']);
       $REGISTROALUMNO->setSituacion();
       $REGISTROALUMNO->setPromedio1($_REQUEST[$x.'promedio1']);
       $REGISTROALUMNO->setPromedio2($_REQUEST[$x.'promedio2']);
       $REGISTROALUMNO->setPromedio3($_REQUEST[$x.'promedio3']);
       $REGISTROALUMNO->setPromedio4($_REQUEST[$x.'promedio4']);
       $REGISTROALUMNO->setPromedio5($_REQUEST[$x.'promedio5']);
       $REGISTROALUMNO->setPb($_REQUEST[$x.'pb']);
       
       $REGISTROALUMNO->setP11($_REQUEST[$x.'p11']);       $REGISTROALUMNO->setP12($_REQUEST[$x.'p12']);
       $REGISTROALUMNO->setP13($_REQUEST[$x.'p13']);       $REGISTROALUMNO->setP14($_REQUEST[$x.'p14']);
       $REGISTROALUMNO->setP15($_REQUEST[$x.'p15']);       $REGISTROALUMNO->setP16($_REQUEST[$x.'p16']);
       $REGISTROALUMNO->setP17($_REQUEST[$x.'p17']);       $REGISTROALUMNO->setP18($_REQUEST[$x.'p18']);
       $REGISTROALUMNO->setP19($_REQUEST[$x.'p19']);       $REGISTROALUMNO->setP110($_REQUEST[$x.'p110']);
       
       $REGISTROALUMNO->setP21($_REQUEST[$x.'p21']);       $REGISTROALUMNO->setP22($_REQUEST[$x.'p22']);
       $REGISTROALUMNO->setP23($_REQUEST[$x.'p23']);       $REGISTROALUMNO->setP24($_REQUEST[$x.'p24']);
       $REGISTROALUMNO->setP25($_REQUEST[$x.'p25']);       $REGISTROALUMNO->setP26($_REQUEST[$x.'p26']);
       $REGISTROALUMNO->setP27($_REQUEST[$x.'p27']);       $REGISTROALUMNO->setP28($_REQUEST[$x.'p28']);
       $REGISTROALUMNO->setP29($_REQUEST[$x.'p29']);       $REGISTROALUMNO->setP210($_REQUEST[$x.'p210']);
       
       $REGISTROALUMNO->setP31($_REQUEST[$x.'p31']);       $REGISTROALUMNO->setP32($_REQUEST[$x.'p32']);
       $REGISTROALUMNO->setP33($_REQUEST[$x.'p33']);       $REGISTROALUMNO->setP34($_REQUEST[$x.'p34']);
       $REGISTROALUMNO->setP35($_REQUEST[$x.'p35']);       $REGISTROALUMNO->setP36($_REQUEST[$x.'p36']);
       $REGISTROALUMNO->setP37($_REQUEST[$x.'p37']);       $REGISTROALUMNO->setP38($_REQUEST[$x.'p38']);
       $REGISTROALUMNO->setP39($_REQUEST[$x.'p39']);       $REGISTROALUMNO->setP310($_REQUEST[$x.'p310']);
       
       $REGISTROALUMNO->setP41($_REQUEST[$x.'p41']);       $REGISTROALUMNO->setP42($_REQUEST[$x.'p42']);
       $REGISTROALUMNO->setP43($_REQUEST[$x.'p43']);       $REGISTROALUMNO->setP44($_REQUEST[$x.'p44']);
       $REGISTROALUMNO->setP45($_REQUEST[$x.'p45']);       $REGISTROALUMNO->setP46($_REQUEST[$x.'p46']);
       $REGISTROALUMNO->setP47($_REQUEST[$x.'p47']);       $REGISTROALUMNO->setP48($_REQUEST[$x.'p48']);
       $REGISTROALUMNO->setP49($_REQUEST[$x.'p49']);       $REGISTROALUMNO->setP410($_REQUEST[$x.'p410']);
       
       $REGISTROALUMNO->setP51($_REQUEST[$x.'p51']);       $REGISTROALUMNO->setP52($_REQUEST[$x.'p52']);
       $REGISTROALUMNO->setP53($_REQUEST[$x.'p53']);       $REGISTROALUMNO->setP54($_REQUEST[$x.'p54']);
       $REGISTROALUMNO->setP55($_REQUEST[$x.'p55']);       $REGISTROALUMNO->setP56($_REQUEST[$x.'p56']);
       $REGISTROALUMNO->setP57($_REQUEST[$x.'p57']);       $REGISTROALUMNO->setP58($_REQUEST[$x.'p58']);
       $REGISTROALUMNO->setP59($_REQUEST[$x.'p59']);       $REGISTROALUMNO->setP510($_REQUEST[$x.'p510']);
       
       $REGISTROALUMNO->GRABAR();
}
   
echo "<script languaje='javascript' type='text/javascript'>
                 
            window.close();</script>";        
}
    
/*--------------------------------------FIN DEL MANTENIMIENTO-----------------------------------*/
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
?>
</table>
</center>

<table class="display">
<?php
$COMPONENTE=new Component();
$listar=$COMPONENTE->LISTAR($asina);
while ($row = mysql_fetch_array($listar)) {
echo "
<tr class='gradeX'>      
</tr>";
    $lista=$INDICAXD->LISTAR($row[0]);
    while ($row2 = mysql_fetch_array($lista)) {
        echo "
            <tr class='gradeA'>
                <td class='center' style='font-size:10px'><a>" .$row[1].".". $row2[3]. "</a></td>
                <td style='font-size:10px'>".$row2[2]."</td>
             </tr>
            ";
    }
}
?>
</table>
<?php
echo
"
    <center>
    <a style='font-size: 12px;'>".$variable1." grado de " .$variable2."    "." Asignatura: ".$variable3." </a>
    </center>    ";
?>
<form name="frmregistro" method="post" action="registra.php?GRABAR=0"><!--?sinatura=68&seccion=212&registro=412-->
<center>
<table class="">
<thead>
<tr class="">
    <td><a style='font-size: 12px;'>N°</a></td>
    <td style="width: 25%;"><a style="font-size: 12px;">Alumno</a></td>
<?php
$th=$COMPONENTE->LISTAR($asina);
    while ($roth = mysql_fetch_array($th)) {
        $listath=$INDICAXD->LISTAR($roth[0]);
        while ($rowth = mysql_fetch_array($listath)) {
            echo "
    <td style='font-size:10px' class='center' width:2%;>" .$roth[1].".". $rowth[3]. "</td>
                ";
        }
echo "
    <td style='font-size:10px'><b>P".$roth[1]."</b></td>";
    }
?>
    <td style="font-size:10px">PB</td>
</tr>
</thead>
<?php
$reAl = new RegistroAlumno();
$listaalumnado=$reAl->ListaAlumnoSeccion($seccion);

while ($alumno = mysql_fetch_array($listaalumnado)) {
echo "
<tr>
<td style='font-size:10px'>".$alumno[0]."</td>
<td style='font-size:10px'>".$alumno[1]." ".$alumno[2]."   ,".$alumno[3]."</td>
"

    ;

$td=$COMPONENTE->LISTAR($asina);
    while ($ro = mysql_fetch_array($td)) {
        $lista=$INDICAXD->LISTAR($ro[0]);
        while ($row22 = mysql_fetch_array($lista)) {

            
$listadice=RegistroAlumno::LISTAR($alumno[4].$seccion.$asina);

while ($row11 = mysql_fetch_array($listadice)) {
    $cuenta;
                $valorcelda=$ro[1].$row22[3];
                $valueespacio=$row11["p$valorcelda"];
                
                $suma+=$valueespacio ;
                $cuenta=$cuenta+1;
                #$compromedio=$row11["promedio$valorcelda"]=($suma/$cuenta);
}
if($valueespacio==0){
    $notita="FN";
}  else {
    $notita=$valueespacio;
}
            echo "
<td class='' style='font-size:10px'>$notita</td>
                ";            
        }       
$compromedio=$row["promedio$valorcelda"]=round(($suma/$cuenta));        
        echo "<td style='font-size:10px'><b>$compromedio</b></td>";
$suma=0;
$cuenta=0;
    }
    $suma=0;
    $cuenta=0;
echo "<td style='font-size:10px'>FN</td>";
echo "
</tr>
";
}
?>
</table>
</center>
</form>


<?php
echo "<a style='font-size:11px;'>Fecha: ".date("d-m-Y")."  & Hora: ". date("H:i:s")."</a>";
        }
?>
            </div>
    </body>
</html>