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
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>

<body>
<?php
require_once 'Includes/navegador.php';
require_once 'Class/Component.php';
require_once 'Class/Indicador.php';
require_once 'Class/RegistroAlumnoInicial.php';
$INDICAXD= new Indicador();
$REGISTROALUMNO= new RegistroAlumnoInicial();
?>
<center><h3 style="color: green">Registro De Notas por asignatura- II BIMESTRE</h3></center>
<?PHP
$asina = $_GET['sinatura'];
$seccion = $_GET['seccion'];
$registro=$_GET['registro'];

/*--------------------------------------MANTENIMIENTO-----------------------------------*/
//Listar registros
#BUCLE REPETITIVO
if(isset($_REQUEST['GRABAR'])){ // se envio el formulario?
$queryalu=$REGISTROALUMNO->ListaAlumnoSeccion($seccion);

while ($rowgeneral = mysql_fetch_array($queryalu)) {
    $count=$count+1;
}

for($x =1 ; $x <= 35; $x++){//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite

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
       $REGISTROALUMNO->setP111($_REQUEST[$x.'p111']);     $REGISTROALUMNO->setP112($_REQUEST[$x.'p112']);
       $REGISTROALUMNO->setP113($_REQUEST[$x.'p113']);     $REGISTROALUMNO->setP114($_REQUEST[$x.'p114']);

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

       $REGISTROALUMNO->GRABAR2();
}

echo "
<script languaje='javascript' type='text/javascript'>
window.close();
</script>";
}
/*--------------------------------------FIN DEL MANTENIMIENTO-----------------------------------*/
?>

<?php
$COMPO = new Component();
$mysql=$COMPO->ListarDatosAsignatura($asina);
if($rowgeneral=  mysql_fetch_array($mysql)){
    $variable1=$rowgeneral['grado'];    $variable2=$rowgeneral['nomnivel'];    $variable3=$rowgeneral['asinatura'];
}
?>

<table class="display">
<?php
$COMPONENTE=new Component();
$listar=$COMPONENTE->LISTAR2($asina);
while ($row = mysql_fetch_array($listar)) {
echo "
<tr class='gradeX'>
</tr>";
    $lista=$INDICAXD->LISTAR($row[0]);
    while ($row2 = mysql_fetch_array($lista)) {
        echo "
            <tr class='gradeA'>
                <td class='center'><a>$row[1].$row2[3]</a></td>
                <td>".$row2[2]."</td>
             </tr>
            ";
    }
}
?>
</table>

<?php
echo
"<center><h4> $variable1 $variable2 ASIGNATURA: $variable3 </h4></center>";
?>
<form name="frmregistro" method="post" action="registrainicial2.php?GRABAR=0">
<center>
<table class="">
<thead>
<tr class="">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>N</td>
    <td>Alumno</td>
<?php
$th=$COMPONENTE->LISTAR2($asina);
    while ($roth = mysql_fetch_array($th)) {
        $listath=$INDICAXD->LISTAR($roth[0]);
        while ($rowth = mysql_fetch_array($listath)) {
    echo "<td class='center' width:2%;> $roth[1] . $rowth[3] </td>";
        }
    echo "<td style='color:peru;'>P".$roth[1]."</td>";
    }
?>
    <td style="color:peru;">PB</td>
</tr>
</thead>
<?php
$reAl = new RegistroAlumnoInicial();
$listaalumnado=$reAl->ListaAlumnoSeccion($seccion);

while ($alumno = mysql_fetch_array($listaalumnado)) {
echo "
<tr>
<td><td><input type='hidden' name='txtregistro' id='txtregistro' value='".$registro."'/></td></td>
<td><input type='hidden' name='".$alumno[0]."txtidalumno' id='".$alumno[0]."txtidalumno' value='".$alumno[4]."'/></td>
<td><input type='hidden' name='".$alumno[0]."txtalumnoregistro' id='".$alumno[0]."txtalumnoregistro' value='".$alumno[4].$seccion.$asina."'/></td>
<td style='width:3%;'>$alumno[0]</td>
<td style='width:25%;'>$alumno[1] $alumno[2] ,$alumno[3]</td>";

$td=$COMPONENTE->LISTAR2($asina);
    while ($ro = mysql_fetch_array($td)) {
        $lista=$INDICAXD->LISTAR($ro[0]);
        while ($row22 = mysql_fetch_array($lista)) {
$listadice=  RegistroAlumnoInicial::LISTAR_2($alumno[4].$seccion.$asina);
while ($row11 = mysql_fetch_array($listadice)) {

    $valorcelda=$ro[1].$row22[3];
    $valueespacio=$row11["p$valorcelda"];
    $valorpromedio=$row11["promedio".$ro[1]];
    $pb=$row11["pb"];
}
echo "<td class='center' width:3%;>
        <input tabindex='$row22[0]' placeholder='FN' type='text' id='$alumno[0]p.$ro[1]$row22[3]' name='$alumno[0]p$ro[1]$row22[3]' value='$valueespacio' style='width:89%;' maxlength=2; />
      </td>";
}

echo "<td>
        <input type='text' style='width:80%;'  value='$valorpromedio' id='$alumno[0]promedio$ro[1]' name='$alumno[0]promedio$ro[1]'/>
      </td>";
    }

echo "<td><input type='text' style='width:80%;' id='$alumno[0]pb' name='$alumno[0]pb'  value='$pb' /></td>";
echo "</tr>";
}
?>
</table>
</center>
<br><br>
<center>
<br><br>
<div class="form-actions">
<button style="" type="submit"class="btn btn-primary" id="btnsavea" name="btnsavea">GRABAR O ACTUALIZAR NOTAS</button>
</div>
</center>
</form>
<?php  }?>
</body>
</html>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>