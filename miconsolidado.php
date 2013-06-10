<?php 
session_start();
$dnidocenteactual=$_SESSION['dni'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Mi Consolidado De Notas</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</head>
<body>
<?php
require_once 'Includes/navegador.php';
include_once 'Class/Docente.php';
$profesorcito=new Docente();
        ?>
        <div class="row-fluid">
            <div class="accordion" id="miconsolidado">
<!---------------------------------------------------------------- I Bimestre-->
<div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle"  data-toggle="collapse" data-parent="#miconsolidado" href="#Ibimestre">
                        <center>CONSOLIDADOS DEL I BIMESTRE</center>
                    </a>
                </div>
                <div style="height: 0px;" id="Ibimestre" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <div class="texto" style="text-align: justify;">
                            <!-- CONTENIDO -->
                             <a>Secci&oacute;n  :</a><br>
                             <a>Tutor  :</a><br>
                                    <!--CORRESPONDE A INICIAL-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Personal Social</li>
                                        <li style="float: left;"><code>04</code>=Ciencia Y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th>01</th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                        </tr>
                                    </table>
                                    <br>
                                    <!--CORRESPONDE A PRIMARIA-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Arte</li>
                                        <li style="float: left;"><code>04</code>=Personal Social</li>
                                        <li style="float: left;"><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>06</code>=Ciencia y Ambiente</li>
                                        <li style="float: left;"><code>07</code>=Educaci&oacute;n Religiosa</li>
                                        <li style="float: left;"><code>08</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>09</code>=Computaci&oacute;n</li>
                                        <li style="float: left;"><code>10</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
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
                                        </tr>
                                    </table>
                                    <br>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
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
                                            <th>11</th>
                                            <th>12</th>
                                        </tr>
                                    </table>
                                    <br>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------- II Bimestre-->
<div class="accordion-group" style="display: none;">
                <div class="accordion-heading">
                    <a class="accordion-toggle"  data-toggle="collapse" data-parent="#miconsolidado" href="#IIbimestre">
                        <center>CONSOLIDADOS DEL II BIMESTRE</center>
                    </a>
                </div>
                <div style="height: 0px;" id="IIbimestre" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <div class="texto" style="text-align: justify;">
                            <!-- CONTENIDO -->
                             <a>Secci&oacute;n  :</a><br>
                             <a>Tutor  :</a><br>
                                    <!--CORRESPONDE A INICIAL-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Personal Social</li>
                                        <li style="float: left;"><code>04</code>=Ciencia Y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th>01</th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                        </tr>
                                    </table>
                                    <br>
                                    <!--CORRESPONDE A PRIMARIA-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Arte</li>
                                        <li style="float: left;"><code>04</code>=Personal Social</li>
                                        <li style="float: left;"><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>06</code>=Ciencia y Ambiente</li>
                                        <li style="float: left;"><code>07</code>=Educaci&oacute;n Religiosa</li>
                                        <li style="float: left;"><code>08</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>09</code>=Computaci&oacute;n</li>
                                        <li style="float: left;"><code>10</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
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
                                        </tr>
                                    </table>
                                    <br>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
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
                                            <th>11</th>
                                            <th>12</th>
                                        </tr>
                                    </table>
                                    <br>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------- III Bimestre-->
<div class="accordion-group" style="display: none;">
                <div class="accordion-heading">
                    <a class="accordion-toggle"  data-toggle="collapse" data-parent="#miconsolidado" href="#IIIbimestre">
                        <center>CONSOLIDADOS DEL III BIMESTRE</center>
                    </a>
                </div>
                <div style="height: 0px;" id="IIIbimestre" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <div class="texto" style="text-align: justify;">
                            <!-- CONTENIDO -->
                             <a>Secci&oacute;n  :</a><br>
                             <a>Tutor  :</a><br>
                                    <!--CORRESPONDE A INICIAL-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Personal Social</li>
                                        <li style="float: left;"><code>04</code>=Ciencia Y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th>01</th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                        </tr>
                                    </table>
                                    <br>
                                    <!--CORRESPONDE A PRIMARIA-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Arte</li>
                                        <li style="float: left;"><code>04</code>=Personal Social</li>
                                        <li style="float: left;"><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>06</code>=Ciencia y Ambiente</li>
                                        <li style="float: left;"><code>07</code>=Educaci&oacute;n Religiosa</li>
                                        <li style="float: left;"><code>08</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>09</code>=Computaci&oacute;n</li>
                                        <li style="float: left;"><code>10</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
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
                                        </tr>
                                    </table>
                                    <br>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
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
                                            <th>11</th>
                                            <th>12</th>
                                        </tr>
                                    </table>
                                    <br>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------- IV Bimestre-->
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle"  data-toggle="collapse" data-parent="#miconsolidado" href="#VIbimestre">
                        <center>CONSOLIDADOS DEL VI BIMESTRE</center>
                    </a>
                </div>
                <div style="height: 0px;" id="VIbimestre" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <div class="texto" style="text-align: justify;">
                            <!-- CONTENIDO -->
<?php
$datosaula=$profesorcito->Datosdemiaulacargo($dnidocenteactual);
while ($secciondate = mysql_fetch_array($datosaula)) {
    $codigoseccion=$secciondate[0];
    $niveldelaula=$secciondate[1];
    $gradodelaula=$secciondate[2];
    $nombresecciondelaula=$secciondate[3];
    $codigodocenteaula=$secciondate[4];
    $profeesaula=$secciondate[5].$secciondate[6]." ,".$secciondate[7];
    $dnidocentedelaula=$secciondate[8];
}
?>
<!--CORRESPONDE A INICIAL-->
<?php
    if($niveldelaula=="INICIAL"){
?>
<a>Periodo: 4to. Bimestre SECCI&Oacute;N  :<?php echo "[".$gradodelaula.$nombresecciondelaula."] NIVEL:[".$niveldelaula."]"; ?>
                             TUTOR  :<?php echo $profeesaula;?></a><br><br>
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Personal Social</li>
                                        <li style="float: left;"><code>04</code>=Ciencia Y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
<table class="display">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th>01</th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                        </tr>
<?php
$whoisalumnostutorini=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
while ($alumnodateini = mysql_fetch_array($whoisalumnostutorini)) {
    echo "
        <tr>
            <td>$alumnodateini[1]</td>
            <td>$alumnodateini[2] $alumnodateini[3] ,$alumnodateini[4]</td>";
            $registronotaini=$profesorcito->NOTASCONSOLIDADOTUTORIAINiCIAL($alumnodateini[0]);
            while ($notaporalumnoini = mysql_fetch_array($registronotaini)) {


                $matematicaini;
                #Matematica
                if(strpos($notaporalumnoini[2],'Matem')!==FALSE){
                    $matematicaini=$notaporalumnoini[3];
                }
                #Comunicacion
                $comunicacionini;
                if(strpos($notaporalumnoini[2],'Comunicaci')!==FALSE){
                    $comunicacionini=$notaporalumnoini[3];
                }
                #Personal Social
                $personalsociini;
                if(strpos($notaporalumnoini[2],'Social')!==FALSE){
                    $personalsociini=$notaporalumnoini[3];
                }
                #Ciencia y Ambiente
                $ccaaini;
                if(strpos($notaporalumnoini[2],'Ambiente')!==FALSE){
                    $ccaaini=$notaporalumnoini[3];
                }
                #Conducta
                $conductaini;
                if(strpos($notaporalumnoini[2],'onducta')!==FALSE){
                    $conductaini=$notaporalumnoini[3];
                }

if($notaporalumnoini[3]==-1){
    $notaporalumnoini[3]="R";
}
#nota que se muestra
echo "<td>$notaporalumnoini[3]</td>";
        }
}
?>
</table>
<?php
    }
?>
<br>

<?php    if($niveldelaula=="PRIMARIA"){?>
}
<!-------------CORRESPONDE A PRIMARIA------------------------------------------>
<div id="primaria4to">
<a>
Periodo: 4to. Bimestre SECCI&Oacute;N  :<?php echo "[".$gradodelaula.$nombresecciondelaula."] NIVEL:[".$niveldelaula."]"; ?>
TUTOR  :<?php echo $profeesaula;?></a><br><br>

<ul class="unstyled">
    <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
    <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
    <li style="float: left;"><code>03</code>=Arte</li>
    <li style="float: left;"><code>04</code>=Personal Social</li>
    <li style="float: left;"><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
    <li style="float: left;"><code>06</code>=Ciencia y Ambiente</li>
    <li style="float: left;"><code>07</code>=Educaci&oacute;n Religiosa</li>
    <li style="float: left;"><code>08</code>=Ingl&eacute;s</li>
    <li style="float: left;"><code>09</code>=Computaci&oacute;n</li>
    <li style="float: left;"><code>10</code>=Conducta</li>
</ul>
<br>
<table class="display" id="Exportar_a_Excel">
    <tr class="gradeX">
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
<?php
$whoisalumnostutorpri=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
#Cantidad de Alumnos
$totalalumnopri=0;
$cantidadalumpri=0;
#aprobados por areas
$apromatepri=0;
$aprocomunipri=0;
$aproartepri=0;
$apropersocialpri=0;
$aproedufisicapri=0;
$aproccaapri=0;
$aproedurelipri=0;
$aproinglpri=0;
$aprocomputapri=0;
$aproconductapri=0;
#exonerados en educ. fisica
$exofisicapri=0;
#exonerados en religion
$exoreligionpri=0;
#---------------------
while ($alumnodatepri = mysql_fetch_array($whoisalumnostutorpri)) {
$totalalumnopri=$totalalumnopri+1;
$cursocargo=0;#variable que cuenta los cursos a cargo
    echo "
        <tr>
            <td>$alumnodatepri[1]</td>
            <td>$alumnodatepri[2] $alumnodatepri[3] ,$alumnodatepri[4]</td>";
            $registronotapri=$profesorcito->NOTASCONSOLIDADOTUTORIA($alumnodatepri[0]);
            while ($notaporalumnopri = mysql_fetch_array($registronotapri)) {
                $matematicapri=0;
                #Matematica
                if(strpos($notaporalumnopri[2],'MATEMATICA')!==FALSE){
                    $matematicapri=$notaporalumnopri[3];
                    #sumo aprobados en matematica
                    if($matematicapri>12){
                        $apromatepri=$apromatepri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Comunicacion
                $comunicacionpri=0;
                if(strpos($notaporalumnopri[2],'COMUNICACION')!==FALSE){
                    $comunicacionpri=$notaporalumnopri[3];
                    #sumo aprobados en comunicacion
                    if($comunicacionpri>12){
                        $aprocomunipri=$aprocomunipri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Arte
                $artepri=0;
                if(strpos($notaporalumnopri[2],'Talleres')!==FALSE or strpos($notaporalumnopri[2],'arte')!==FALSE){
                    $artepri=$notaporalumnopri[3];
                    #sumo aprobados en arte
                    if($artepri>10){
                        $aproartepri=$aproartepri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Personal Social
                $personalsocipri=0;
                if(strpos($notaporalumnopri[2],'P.Social')!==FALSE){
                    $personalsocipri=$notaporalumnopri[3];
                    #sumo aprobados en personalsocial
                    if($personalsocipri>12){
                        $apropersocialpri=$apropersocialpri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Educacion Fisica
                $educfisicapri=0;
                if(strpos($notaporalumnopri[2],'E.Fisica')!==FALSE){
                    $educfisicapri=$notaporalumnopri[3];
                    #exonerado en fisica
                    if($educfisicapri==-2){
                        $exofisicapri=$exofisicapri+1;
                    }
                    #sumo aprobados en educ. fisica
                    if($educfisicapri>10){
                        $aproedufisicapri=$aproedufisicapri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Ciencia y Ambiente
                $ccaapri=0;
                if(strpos($notaporalumnopri[2],'C.Ambiente')!==FALSE){
                    $ccaapri=$notaporalumnopri[3];
                   #sumo aprobados en CC.AA
                    if($ccaapri>12){
                        $aproccaapri=$aproccaapri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Educ Religiosa
                $edureligiosapri=0;
                if(strpos($notaporalumnopri[2],'Religion')!==FALSE){
                    $edureligiosapri=$notaporalumnopri[3];
                    #exonerado en religion
                    if($edureligiosapri==-2){
                        $exoreligionpri=$exoreligionpri+1;
                    }
                    #sumo aprobados en Religion
                    if($edureligiosapri>10){
                        $aproedurelipri=$aproedurelipri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Ingles
                $inglespri;
                if(strpos($notaporalumnopri[2],'Ingles')!==FALSE){
                    $inglespri=$notaporalumnopri[3];
                    #sumo aprobados en Ingles
                    if($inglespri>10){
                        $aproinglpri=$aproinglpri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Computacion
                $eptpri;
                if(strpos($notaporalumnopri[2],'Computacion')!==FALSE){
                    $eptpri=$notaporalumnopri[3];
                    #sumo aprobados en Computacion
                    if($eptpri>10){
                        $aprocomputapri=$aprocomputapri+1;
                    }else{
                        $cursocargo=$cursocargo+1;
                    }
                }
                #Conducta
                $conductapri;
                if(strpos($notaporalumnopri[2],'Conducta')!==FALSE){
                    $conductapri=$notaporalumnopri[3];
                    #sumo aprobados en Conducta
                    if($conductapri>12){
                        $aproconductapri=$aproconductapri+1;
                    }
                }

$cantidadadividir=9;

if($edureligiosapri==-2){
 $edureligiosapri=0;
}

$puntajesumapri= $matematicapri+$comunicacionpri+$artepri+$personalsocipri+$educfisicapri+$ccaapri+$edureligiosapri+$inglespri+$eptpri;
if($edureligiosapri==0){
    $cantidadadividir=8;
}
$ponderadopri=round(($puntajesumapri/$cantidadadividir),2);
                                           if($notaporalumnopri[3]==-1){
                                               $notaporalumnopri[3]="R";
                                           }
                                           if($notaporalumnopri[3]==-2){
                                               $notaporalumnopri[3]="EX";
                                           }
                                           $letra="";
                                           switch ($notaporalumnopri[3]) {
                                               case 1: $letra="C";break;
                                               case 2: $letra="C";break;
                                               case 3: $letra="C";break;
                                               case 4: $letra="C";break;
                                               case 5: $letra="C";break;
                                               case 6: $letra="C";break;
                                               case 7: $letra="C";break;
                                               case 8: $letra="C";break;
                                               case 9: $letra="C";break;
                                               case 10: $letra="C";break;
                                               case 11: $letra="B";break;
                                               case 12: $letra="B";break;
                                               case 13: $letra="A";break;
                                               case 14: $letra="A";break;
                                               case 15: $letra="A";break;
                                               case 16: $letra="A";break;
                                               case 17: $letra="AD";break;
                                               case 18: $letra="AD";break;
                                               case 19: $letra="AD";break;
                                               case 20: $letra="AD";break;
                                           }

                                            echo "<td>$notaporalumnopri[3] $letra</td>";
                                            }
                                            if($puntajesumapri<0){
                                                $puntajesumapri="R";
                                            }
                                            echo "<td>$puntajesumapri</td>";
                                            if($ponderadopri<0){
                                                $ponderadopri="R";
                                            }
                                            
                                            echo"<td>$ponderadopri</td>";
                                            $cursocargo;
                                            if($cursocargo>0){
                                                $escribe=$cursocargo;
                                            }else{
                                                $escribe="";
                                            }

                                            echo "<td>$escribe</td>";
                                            echo "</tr>";
                                            $cursocargo=0;

                                            if($ponderadopri==R){

                                            }else{
                                                $cantidadalumpri=$cantidadalumpri+1;
                                            }
                                        }
                                        ?>
                                    </table>
                                    <br>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<center>
<table  style="width: 60%;">
    <tr>
        <td>...</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
    </tr>
    <tr>
        <td>Alumnos Evaluados</td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
        <td><?php echo $cantidadalumpri; ?></td>
    </tr>
    <tr>
        <td>Cant. Aprobados</td>
        <td><?php echo $apromatepri; ?></td>
        <td><?php echo $aprocomunipri; ?></td>
        <td><?php echo $aproartepri; ?></td>
        <td><?php echo $apropersocialpri; ?></td>
        <td><?php echo $aproedufisicapri; ?></td>
        <td><?php echo $aproccaapri; ?></td>
        <td><?php echo $aproedurelipri; ?></td>
        <td><?php echo $aproinglpri; ?></td>
        <td><?php echo $aprocomputapri; ?></td>
        <td><?php echo $aproconductapri; ?></td>
    </tr>
    <tr>
        <td>Cant. Desaprobados</td>
        <td><?php echo $cantidadalumpri-$apromatepri; ?></td>
        <td><?php echo $cantidadalumpri-$aprocomunipri; ?></td>
        <td><?php echo $cantidadalumpri-$aproartepri; ?></td>
        <td><?php echo $cantidadalumpri-$apropersocialpri; ?></td>
        <td><?php echo $cantidadalumpri-$aproedufisicapri; ?></td>
        <td><?php echo $cantidadalumpri-$aproccaapri; ?></td>
        <td><?php echo $cantidadalumpri-$aproedurelipri; ?></td>
        <td><?php echo $cantidadalumpri-$aproinglpri; ?></td>
        <td><?php echo $cantidadalumpri-$aprocomputapri; ?></td>
        <td><?php echo $cantidadalumpri-$aproconductapri; ?></td>
    </tr>
    <tr>
        <td>Exonerados</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><?php echo $exofisicapri; ?></td>
        <td>-</td>
        <td><?php echo $exoreligionpri; ?></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Retirados</td>
        <td colspan="10"><center><?php echo $totalalumnopri-$cantidadalumpri;?></center></td>
    </tr>
</table>
</center>
<?php
echo "
<br><br>
<center>
------------------------------------------------
<br><a style='color:black;font-size: 11px;'>Profesor tutor: $profeesaula<br>
    Impreso el ".date("d-F-Y")."
    </a>
    </center>";
echo "</div>";
?>
<a class="button" href="javascript:imprSelec('primaria4to')">IMPRIMIR LA PAGINA</a>
<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
    <p>Exportar a Excel  <img src="Css/images/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>
<?php
    }
?>
<?php
    if($niveldelaula=="SECUNDARIA"){
?>
<a>Periodo: 4to. Bimestre SECCI&Oacute;N  :<?php echo "[".$gradodelaula.$nombresecciondelaula."] NIVEL:[".$niveldelaula."]"; ?>
                             TUTOR  :<?php echo $profeesaula;?></a><br><br>
<!--SOLO PARA 1ERO Y 2DO DE SECUNDARIA-->                           
<?php
if($gradodelaula==1 || $gradodelaula==2){
?>
<!--CORRESPONDE A SECUNDARIA-->
<ul class="unstyled">
    <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
    <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
    <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
    <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
    <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
    <li style="float: left;"><code>06</code>=C&iacute;vica</li>
    <li style="float: left;"><code>07</code>=Persona y Familia</li>
    <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
    <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
    <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
    <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
    <li style="float: left;"><code>12</code>=Conducta</li>
</ul>
<br>
<table class="display">
    <tr class="gradeX">
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
        <th>11</th>
        <th>12</th>
        <th>Promedio</th>
        <th>Puntaje</th>
        <th>Areas Desaprobadas</th>
    </tr>
    <?php
    $sumapuntaje=0;
    $cantidadadividirsecu=0;
    $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
    while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
        echo "
            <tr>
                <td>$alumnodatesecu[1]</td>
                <td>$alumnodatesecu[2].$alumnodatesecu[3].$alumnodatesecu[4]</td>";

        $registronotasecu=$profesorcito->NOTASSECUNDARIAIV($alumnodatesecu[0]);
        $cursoscargosecu=0;
        $sedivideentresecu=11;
        while ($notasecu = mysql_fetch_array($registronotasecu)) {
            #exonerado
            if ($notasecu[3]==-2){
                $notasecu[3]="EX";
                $sedivideentresecu=10;
            }
            #retirado
            if ($notasecu[3]==-1){
                $notasecu[3]="R";
            }
            #sumaloscursosacargo
            if($notasecu<11){
                $cursoscargosecu[3]++;
            }
            #nota_del_area
            echo "<td>$notasecu[3]</td>";

            #suma del puntaje
            if(strpos($notasecu[2],'Matem')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'Ingl')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'CC.NN.')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'HGE')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'vica')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'PP.FF.')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'EPT')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'sica')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'Arte')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
            if(strpos($notasecu[2],'Religi')!==FALSE){
                $sumapuntaje=$sumapuntaje+$notasecu[3];
            }
        }
        $promedio=round($sumapuntaje/$sedivideentresecu,2);
        echo "<td>$promedio</td>";
        echo "<td>$sumapuntaje</td>";
        if($cursoscargosecu==0){
            $cursoscargosecu="";
        }
        echo "<td>$cursoscargosecu</td>";
        echo "</tr>";
        $sumapuntaje=0;#inicio la variable nuevamente
    }
    ?>
</table>
<?php
    }
?>
<!--SOLO PARA 3ERO DE SECUNDARIA-->
<?php
if($gradodelaula==3){
?>
<ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                            <th>06</th>
                                            <th>07</th>
                                            <th>08</th>
                                            <th>09</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>MAT</th>
                                            <th>Promedio</th>
                                            <th>Puntaje</th>
                                            <th>Areas Desaprobadas</th>
                                        </tr>
                                        <?php

                                        $matematicas=0;
                                        #cursos a cargo
                                        $cargomate=0;$cargocomu=0;$cargoingles=0;
                                        $cargocta=0;$cargohge=0;$cargocivica=0;
                                        $cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                        $cargoarte=0;$cargoreligion=0;

                                        $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
                                        while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
                                            echo "
                                                <tr>
                                                    <td>$alumnodatesecu[1]</td>
                                                    <td>$alumnodatesecu[2] $alumnodatesecu[3] $alumnodatesecu[4]</td>";

                                            $registronotasecu=$profesorcito->NOTASSECUNDARIAIV($alumnodatesecu[0]);
                                            $puntajesumasecu=0;
                                            $cursocargo=0;#cursos a cargo
                                            while ($notasecu = mysql_fetch_array($registronotasecu)) {

                                                #exonerado
                                                if ($notasecu[3]==-2){
                                                    $notasecu[3]="EX";

                                                }
                                                #retirado
                                                if ($notasecu[3]==-1){
                                                    $notasecu[3]="R";
                                                }
                                                #sumaloscursosacargo

                                                #nota_del_area

                                                if(strpos($notasecu[2],'Algebra')!==FALSE){
                                                    $algebra3ero=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Trigonometr')!==FALSE){
                                                    $trigo3ro=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Geometr')!==FALSE){
                                                    $geome3ro=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                #matematicas promedio
                                                $matematicas=($algebra3ero*3)+($geome3ro*2)+($trigo3ro*2);
                                                $prommate=round($matematicas/7);
                                                if($prommate<11){
                                                    $cargomate=1;
                                                }else{$cargomate=0;}

                                                if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                                                    $comunicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocomu=1;
                                                    }else{$cargocomu=0;}

                                                }
                                                if(strpos($notasecu[2],'Ingl')!==FALSE){
                                                    $inglessecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoingles=1;
                                                    }else{$cargoingles=0;}
                                                }
                                                if(strpos($notasecu[2],'sica')!==FALSE){
                                                    $quimicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocta=1;
                                                    }else{$cargocta=0;}

                                                }
                                                if(strpos($notasecu[2],'HGE')!==FALSE){
                                                    $hgesecu=$notasecu[3];
                                                 if($notasecu[3]<11){
                                                        $cargohge=1;
                                                    }else{$cargohge=0;}
                                                }
                                                if(strpos($notasecu[2],'vica')!==FALSE){
                                                    $civicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocivica=1;
                                                    }else{$cargocivica=0;}
                                                }
                                                if(strpos($notasecu[2],'PP.FF')!==FALSE){
                                                    $ppffsecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoppff=1;
                                                    }else{$cargoppff=0;}
                                                }
                                                if(strpos($notasecu[2],'EPT')!==FALSE){
                                                    $eptsecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoept=1;
                                                    }else{$cargoept=0;}
                                                }

                                                if(strpos($notasecu[2],'Edu.')!==FALSE){
                                                    $edufisicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoedufisica=1;
                                                    }else{$cargoedufisica=0;}
                                                }
                                                if(strpos($notasecu[2],'Arte')!==FALSE){
                                                    $artesecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoarte=1;
                                                    }else{$cargoarte=0;}
                                                }
                                                if(strpos($notasecu[2],'Religi')!==FALSE){
                                                    if($notasecu[3]>0){
                                                    $religionsecu=$notasecu[3];
                                                    }
                                                    if($notasecu[3]<11 and $notasecu[3]>0){
                                                        $cargoreligion=1;
                                                    }else{$cargoreligion=0;}
                                                }

                                                echo "<td>$notasecu[3]</td>";
                                            }
                                            echo "<td>$prommate</td>";
                                            $puntajesumasecu=
                                                            $prommate+
                                                            $comunicasecu+
                                                            $inglessecu+
                                                            $quimicasecu+
                                                            $hgesecu
                                                            +$civicasecu+
                                                            $ppffsecu+
                                                            $eptsecu+
                                                            $edufisicasecu+
                                                            $artesecu+
                                                            $religionsecu;

                                            $promedio5to=round(($puntajesumasecu/11),2);
                                            echo "<td>$promedio5to</td>";
                                            #puntaje

                                            echo "<td>$puntajesumasecu</td>";
                                            #reinicia valores
                                            $matematicas=0;$prommate=0;$comunicasecu=0;
                                            $inglessecu=0;$quimicasecu=0;$hgesecu=0;
                                            $civicasecu=0;$ppffsecu=0;$eptsecu=0;
                                            $edufisicasecu=0;$artesecu=0;$religionsecu=0;


                                            $acargo=$cargomate+$cargocomu+$cargoingles+$cargocta+$cargohge+
                                            $cargocivica+$cargoppff+$cargoept+$cargoedufisica+$cargoarte+$cargoreligion;

                                            if($acargo==0){$acargo=" ";}
                                            echo "<td>$acargo</td>";
                                            $cargomate=0;$cargocomu=0;$cursocargo=0;$cargoingles=0;$cargocta=0;
                                            $cargohge=0;$cargocivica=0;$cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                            $cargoarte=0;$cargoreligion=0;
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
<?php
    }
?>





<!--SOLO PARA 4 de secundaria-->
<?php
if($gradodelaula==4){
?>
<ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                            <th>06</th>
                                            <th>07</th>
                                            <th>08</th>
                                            <th>09</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>MAT</th>
                                            <th>Promedio</th>
                                            <th>Puntaje</th>
                                            <th>Areas Desaprobadas</th>
                                        </tr>
                                        <?php

                                        $matematicas=0;
                                        #cursos a cargo
                                        $cargomate=0;$cargocomu=0;$cargoingles=0;
                                        $cargocta=0;$cargohge=0;$cargocivica=0;
                                        $cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                        $cargoarte=0;$cargoreligion=0;

                                        $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
                                        while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
                                            echo "
                                                <tr>
                                                    <td>$alumnodatesecu[1]</td>
                                                    <td>$alumnodatesecu[2].$alumnodatesecu[3].$alumnodatesecu[4]</td>";

                                            $registronotasecu=$profesorcito->NOTASSECUNDARIAIV($alumnodatesecu[0]);
                                            $puntajesumasecu=0;
                                            $cursocargo=0;#cursos a cargo
                                            while ($notasecu = mysql_fetch_array($registronotasecu)) {

                                                #exonerado
                                                if ($notasecu[3]==-2){
                                                    $notasecu[3]="EX";

                                                }
                                                #retirado
                                                if ($notasecu[3]==-1){
                                                    $notasecu[3]="R";
                                                }
                                                #sumaloscursosacargo

                                                #nota_del_area

                                                if(strpos($notasecu[2],'Aritm')!==FALSE){
                                                    $algebra3ero=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Trigonometr')!==FALSE){
                                                    $trigo3ro=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Geometr')!==FALSE){
                                                    $geome3ro=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                #matematicas promedio
                                                $matematicas=($algebra3ero*2)+($geome3ro*3)+($trigo3ro*2);
                                                $prommate=round($matematicas/7);
                                                if($prommate<11){
                                                    $cargomate=1;
                                                }else{$cargomate=0;}

                                                if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                                                    $comunicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocomu=1;
                                                    }else{$cargocomu=0;}

                                                }
                                                if(strpos($notasecu[2],'Ingl')!==FALSE){
                                                    $inglessecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoingles=1;
                                                    }else{$cargoingles=0;}
                                                }
                                                if(strpos($notasecu[2],'Biolog')!==FALSE){
                                                    $quimicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocta=1;
                                                    }else{$cargocta=0;}

                                                }
                                                if(strpos($notasecu[2],'HGE')!==FALSE){
                                                    $hgesecu=$notasecu[3];
                                                 if($notasecu[3]<11){
                                                        $cargohge=1;
                                                    }else{$cargohge=0;}
                                                }
                                                if(strpos($notasecu[2],'vica')!==FALSE){
                                                    $civicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocivica=1;
                                                    }else{$cargocivica=0;}
                                                }
                                                if(strpos($notasecu[2],'PP.FF')!==FALSE){
                                                    $ppffsecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoppff=1;
                                                    }else{$cargoppff=0;}
                                                }
                                                if(strpos($notasecu[2],'EPT')!==FALSE){
                                                    $eptsecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoept=1;
                                                    }else{$cargoept=0;}
                                                }

                                                if(strpos($notasecu[2],'Edu.')!==FALSE){
                                                    $edufisicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoedufisica=1;
                                                    }else{$cargoedufisica=0;}
                                                }
                                                if(strpos($notasecu[2],'Arte')!==FALSE){
                                                    $artesecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoarte=1;
                                                    }else{$cargoarte=0;}
                                                }
                                                if(strpos($notasecu[2],'Religi')!==FALSE){
                                                    if($notasecu[3]>0){
                                                    $religionsecu=$notasecu[3];
                                                    }
                                                    if($notasecu[3]<11 and $notasecu[3]>0){
                                                        $cargoreligion=1;
                                                    }else{$cargoreligion=0;}
                                                }

                                                echo "<td>$notasecu[3]</td>";
                                            }
                                            echo "<td>$prommate</td>";
                                            $puntajesumasecu=
                                                            $prommate+
                                                            $comunicasecu+
                                                            $inglessecu+
                                                            $quimicasecu+
                                                            $hgesecu
                                                            +$civicasecu+
                                                            $ppffsecu+
                                                            $eptsecu+
                                                            $edufisicasecu+
                                                            $artesecu+
                                                            $religionsecu;

                                            $promedio5to=round(($puntajesumasecu/11),2);
                                            echo "<td>$promedio5to</td>";
                                            #puntaje

                                            echo "<td>$puntajesumasecu</td>";
                                            #reinicia valores
                                            $matematicas=0;$prommate=0;$comunicasecu=0;
                                            $inglessecu=0;$quimicasecu=0;$hgesecu=0;
                                            $civicasecu=0;$ppffsecu=0;$eptsecu=0;
                                            $edufisicasecu=0;$artesecu=0;$religionsecu=0;


                                            $acargo=$cargomate+$cargocomu+$cargoingles+$cargocta+$cargohge+
                                            $cargocivica+$cargoppff+$cargoept+$cargoedufisica+$cargoarte+$cargoreligion;

                                            if($acargo==0){$acargo=" ";}
                                            echo "<td>$acargo</td>";
                                            $cargomate=0;$cargocomu=0;$cursocargo=0;$cargoingles=0;$cargocta=0;
                                            $cargohge=0;$cargocivica=0;$cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                            $cargoarte=0;$cargoreligion=0;
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
<?php
}
?>






<!--SOLO PARA 5 de secundaria-->
<?php
if($gradodelaula==5){
?>
<ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                            <th>06</th>
                                            <th>07</th>
                                            <th>08</th>
                                            <th>09</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>MAT</th>
                                            <th>Promedio</th>
                                            <th>Puntaje</th>
                                            <th>Areas Desaprobadas</th>
                                        </tr>
                                        <?php

                                        $matematicas=0;
                                        #cursos a cargo
                                        $cargomate=0;$cargocomu=0;$cargoingles=0;
                                        $cargocta=0;$cargohge=0;$cargocivica=0;
                                        $cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                        $cargoarte=0;$cargoreligion=0;

                                        $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
                                        while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
                                            echo "
                                                <tr>
                                                    <td>$alumnodatesecu[1]</td>
                                                    <td>$alumnodatesecu[2].$alumnodatesecu[3].$alumnodatesecu[4]</td>";

                                            $registronotasecu=$profesorcito->NOTASSECUNDARIAIV($alumnodatesecu[0]);
                                            $puntajesumasecu=0;
                                            $cursocargo=0;#cursos a cargo
                                            while ($notasecu = mysql_fetch_array($registronotasecu)) {

                                                #exonerado
                                                if ($notasecu[3]==-2){
                                                    $notasecu[3]="EX";

                                                }
                                                #retirado
                                                if ($notasecu[3]==-1){
                                                    $notasecu[3]="R";
                                                }
                                                #sumaloscursosacargo

                                                #nota_del_area

                                                if(strpos($notasecu[2],'Algebra')!==FALSE){
                                                    $algebra3ero=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Trigonometr')!==FALSE){
                                                    $trigo3ro=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Geometr')!==FALSE){
                                                    $geome3ro=$notasecu[3];
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                #matematicas promedio
                                                $matematicas=($algebra3ero*2)+($geome3ro*2)+($trigo3ro*3);
                                                $prommate=round($matematicas/7);
                                                if($prommate<11){
                                                    $cargomate=1;
                                                }else{$cargomate=0;}

                                                if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                                                    $comunicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocomu=1;
                                                    }else{$cargocomu=0;}

                                                }
                                                if(strpos($notasecu[2],'Ingl')!==FALSE){
                                                    $inglessecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoingles=1;
                                                    }else{$cargoingles=0;}
                                                }
                                                if(strpos($notasecu[2],'sica')!==FALSE){
                                                    $quimicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocta=1;
                                                    }else{$cargocta=0;}

                                                }
                                                if(strpos($notasecu[2],'HGE')!==FALSE){
                                                    $hgesecu=$notasecu[3];
                                                 if($notasecu[3]<11){
                                                        $cargohge=1;
                                                    }else{$cargohge=0;}
                                                }
                                                if(strpos($notasecu[2],'vica')!==FALSE){
                                                    $civicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargocivica=1;
                                                    }else{$cargocivica=0;}
                                                }
                                                if(strpos($notasecu[2],'PP.FF')!==FALSE){
                                                    $ppffsecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoppff=1;
                                                    }else{$cargoppff=0;}
                                                }
                                                if(strpos($notasecu[2],'EPT')!==FALSE){
                                                    $eptsecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoept=1;
                                                    }else{$cargoept=0;}
                                                }

                                                if(strpos($notasecu[2],'Edu.')!==FALSE){
                                                    $edufisicasecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoedufisica=1;
                                                    }else{$cargoedufisica=0;}
                                                }
                                                if(strpos($notasecu[2],'Arte')!==FALSE){
                                                    $artesecu=$notasecu[3];
                                                    if($notasecu[3]<11){
                                                        $cargoarte=1;
                                                    }else{$cargoarte=0;}
                                                }
                                                if(strpos($notasecu[2],'Religi')!==FALSE){
                                                    if($notasecu[3]>0){
                                                    $religionsecu=$notasecu[3];
                                                    }
                                                    if($notasecu[3]<11 and $notasecu[3]>0){
                                                        $cargoreligion=1;
                                                    }else{$cargoreligion=0;}
                                                }

                                                echo "<td>$notasecu[3]</td>";
                                            }
                                            echo "<td>$prommate</td>";
                                            $puntajesumasecu=
                                                            $prommate+
                                                            $comunicasecu+
                                                            $inglessecu+
                                                            $quimicasecu+
                                                            $hgesecu
                                                            +$civicasecu+
                                                            $ppffsecu+
                                                            $eptsecu+
                                                            $edufisicasecu+
                                                            $artesecu+
                                                            $religionsecu;

                                            $promedio5to=round(($puntajesumasecu/11),2);
                                            echo "<td>$promedio5to</td>";
                                            #puntaje

                                            echo "<td>$puntajesumasecu</td>";
                                            #reinicia valores
                                            $matematicas=0;$prommate=0;$comunicasecu=0;
                                            $inglessecu=0;$quimicasecu=0;$hgesecu=0;
                                            $civicasecu=0;$ppffsecu=0;$eptsecu=0;
                                            $edufisicasecu=0;$artesecu=0;$religionsecu=0;


                                            $acargo=$cargomate+$cargocomu+$cargoingles+$cargocta+$cargohge+
                                            $cargocivica+$cargoppff+$cargoept+$cargoedufisica+$cargoarte+$cargoreligion;

                                            if($acargo==0){$acargo=" ";}
                                            echo "<td>$acargo</td>";
                                            $cargomate=0;$cargocomu=0;$cursocargo=0;$cargoingles=0;$cargocta=0;
                                            $cargohge=0;$cargocivica=0;$cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                            $cargoarte=0;$cargoreligion=0;
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
<?php
}
?>



<!--FIN DE SECUNDARIA-->
<?php
    }
?>
                                    <br>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------- ANUAL-->
<?php
    if($niveldelaula=="SECUNDARIA"){
?>
<div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle"  data-toggle="collapse" data-parent="#miconsolidado" href="#anual">
                        <center>CONSOLIDADOS ANUAL</center>
                    </a>
                </div>
                <div style="height: 0px;" id="anual" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <div class="texto" style="text-align: justify;">
<a>Periodo: ANUAL SECCI&Oacute;N  :<?php echo "[".$gradodelaula.$nombresecciondelaula."] NIVEL:[".$niveldelaula."]"; ?>
                             TUTOR  :<?php echo $profeesaula;?></a><br><br>
<!--SOLO PARA 1ERO Y 2DO DE SECUNDARIA-->                           
<?php
if($gradodelaula==1 || $gradodelaula==2){
?>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                    <ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display" id="Exportar_a_Excel">
                                        <tr class="gradeX">
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
                                            <th>11</th>
                                            <th>12</th>
                                            <th>Promedio</th>
                                            <th>Puntaje</th>
                                            <th>Areas Desaprobadas</th>
                                        </tr>
                                        <?php
                                        $sumapuntaje=0;
                                        $cantidadadividirsecu=0;
                                        $notadesaprobatoria=0;
                                        $cursoscargosecu=0;
                                        $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
                                        while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
                                            echo "
                                                <tr>
                                                    <td>$alumnodatesecu[1]</td>
                                                    <td>$alumnodatesecu[2].$alumnodatesecu[3].$alumnodatesecu[4]</td>";
                                                
                                            $registronotasecu=$profesorcito->NOTASSECUNDARIAANUAL($alumnodatesecu[0]);
                                            
                                            $sedivideentresecu=11;
                                            while ($notasecu = mysql_fetch_array($registronotasecu)) {
                                                #exonerado
                                                if ($notasecu[3]==-2){
                                                    $notasecu[3]="EX";
                                                    $sedivideentresecu=10;
                                                }
                                                #retirado
                                                if ($notasecu[3]==-1){
                                                    $notasecu[3]="R";
                                                }
                                                $notasecu[3]=round($notasecu[3]);
                                                if($notasecu[3]==0){
                                                    $notasecu[3]="EX";
                                                }
                                                echo "<td>$notasecu[3]</td>";
                                                
                                                #suma del puntaje
                                                if(strpos($notasecu[2],'Matem')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Ingl')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'CTA')!==FALSE or strpos($notasecu[2],'CC.NN.')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'HGE')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'vica')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'PP.FF.')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'EPT')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'sica')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Arte')!==FALSE){
                                                    if(round($notasecu[3])<11){
                                                    $cursoscargosecu++;
                                                }
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Religi')!==FALSE){
                                                    $sumapuntaje=$sumapuntaje+$notasecu[3];
                                                    if(round($notasecu[3])<11 and round($notasecu[3])>0){
                                                    $cursoscargosecu++;
                                                }
                                                }
                                            }
                                            $promedio=round($sumapuntaje/$sedivideentresecu,2);
                                            echo "<td>$promedio</td>";
                                            echo "<td>$sumapuntaje</td>";
                                            if($cursoscargosecu==0){
                                                $cursoscargosecu="";
                                            }
                                            echo "<td>$cursoscargosecu</td>";
                                            echo "</tr>";
                                            $cursoscargosecu=0;
                                            $sumapuntaje=0;#inicio la variable nuevamente
                                        }
                                        ?>
                                    </table>
<?php
}
?>
<!-- SOLO PARA 3 SECUNDARIA -->





<?php
if($gradodelaula==3){
?>
<ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display" id="Exportar_a_Excel">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                            <th>06</th>
                                            <th>07</th>
                                            <th>08</th>
                                            <th>09</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>MAT</th>
                                            <th>Promedio</th>
                                            <th>Puntaje</th>
                                            <th>Areas Desaprobadas</th>
                                        </tr>
                                        <?php

                                        $matematicas=0;
                                        #cursos a cargo
                                        $cargomate=0;$cargocomu=0;$cargoingles=0;
                                        $cargocta=0;$cargohge=0;$cargocivica=0;
                                        $cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                        $cargoarte=0;$cargoreligion=0;

                                        $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
                                        while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
                                            echo "
                                                <tr>
                                                    <td>$alumnodatesecu[1]</td>
                                                    <td>$alumnodatesecu[2].$alumnodatesecu[3].$alumnodatesecu[4]</td>";

                                            $registronotasecu=$profesorcito->NOTASSECUNDARIAANUAL($alumnodatesecu[0]);
                                            $puntajesumasecu=0;
                                            $cursocargo=0;#cursos a cargo
                                            while ($notasecu = mysql_fetch_array($registronotasecu)) {

                                                #exonerado
                                                if ($notasecu[3]==-2){
                                                    $notasecu[3]="EX";

                                                }
                                                #retirado
                                                if ($notasecu[3]==-1){
                                                    $notasecu[3]="R";
                                                }
                                                #sumaloscursosacargo

                                                #nota_del_area

                                                if(strpos($notasecu[2],'Algebra')!==FALSE){
                                                    $algebra3ero=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Trigonometr')!==FALSE){
                                                    $trigo3ro=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Geometr')!==FALSE){
                                                    $geome3ro=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                #matematicas promedio
                                                $matematicas=($algebra3ero*3)+($geome3ro*2)+($trigo3ro*2);
                                                $prommate=round($matematicas/7);
                                                if($prommate<11){
                                                    $cargomate=1;
                                                }else{$cargomate=0;}

                                                if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                                                    $comunicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocomu=1;
                                                    }else{$cargocomu=0;}

                                                }
                                                if(strpos($notasecu[2],'Ingl')!==FALSE){
                                                    $inglessecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoingles=1;
                                                    }else{$cargoingles=0;}
                                                }
                                                if(strpos($notasecu[1],'CTA')!==FALSE){
                                                    $quimicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocta=1;
                                                    }else{$cargocta=0;}

                                                }
                                                if(strpos($notasecu[2],'HGE')!==FALSE){
                                                    $hgesecu=round($notasecu[3]);
                                                 if(round($notasecu[3])<11){
                                                        $cargohge=1;
                                                    }else{$cargohge=0;}
                                                }
                                                if(strpos($notasecu[2],'vica')!==FALSE){
                                                    $civicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocivica=1;
                                                    }else{$cargocivica=0;}
                                                }
                                                if(strpos($notasecu[2],'PP.FF')!==FALSE){
                                                    $ppffsecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoppff=1;
                                                    }else{$cargoppff=0;}
                                                }
                                                if(strpos($notasecu[2],'EPT')!==FALSE){
                                                    $eptsecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoept=1;
                                                    }else{$cargoept=0;}
                                                }

                                                if(strpos($notasecu[2],'Edu.')!==FALSE){
                                                    $edufisicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoedufisica=1;
                                                    }else{$cargoedufisica=0;}
                                                }
                                                if(strpos($notasecu[2],'Arte')!==FALSE){
                                                    $artesecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoarte=1;
                                                    }else{$cargoarte=0;}
                                                }
                                                if(strpos($notasecu[2],'Religi')!==FALSE){
                                                    if($notasecu[3]>0){
                                                    $religionsecu=round($notasecu[3]);
                                                    }
                                                    if(round($notasecu[3])<11 and round($notasecu[3])>0){
                                                        $cargoreligion=1;
                                                    }else{$cargoreligion=0;}
                                                }
                                                  $notasecu[3]=round($notasecu[3]);

                                                  if($notasecu[3]==0){$notasecu[3]="EX";}
                                                  if($notasecu[3]==-1){$notasecu[3]="R";}

                                                echo "<td>$notasecu[3]</td>";
                                            }
                                            echo "<td>$prommate</td>";
                                            $puntajesumasecu=
                                                            $prommate+
                                                            $comunicasecu+
                                                            $inglessecu+
                                                            $quimicasecu+
                                                            $hgesecu
                                                            +$civicasecu+
                                                            $ppffsecu+
                                                            $eptsecu+
                                                            $edufisicasecu+
                                                            $artesecu+
                                                            $religionsecu;

                                            $promedio5to=round(($puntajesumasecu/11),2);
                                            echo "<td>$promedio5to</td>";
                                            #puntaje

                                            echo "<td>$puntajesumasecu</td>";
                                            #reinicia valores
                                            $matematicas=0;$prommate=0;$comunicasecu=0;
                                            $inglessecu=0;$quimicasecu=0;$hgesecu=0;
                                            $civicasecu=0;$ppffsecu=0;$eptsecu=0;
                                            $edufisicasecu=0;$artesecu=0;$religionsecu=0;


                                            $acargo=$cargomate+$cargocomu+$cargoingles+$cargocta+$cargohge+
                                            $cargocivica+$cargoppff+$cargoept+$cargoedufisica+$cargoarte+$cargoreligion;

                                            if($acargo==0){$acargo=" ";}
                                            echo "<td>$acargo</td>";
                                            $cargomate=0;$cargocomu=0;$cursocargo=0;$cargoingles=0;$cargocta=0;
                                            $cargohge=0;$cargocivica=0;$cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                            $cargoarte=0;$cargoreligion=0;
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
<?php
}
?>










<!--SOLO PARA 4 de secundaria-->
<?php
if($gradodelaula==4){
?>
<ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display" id="Exportar_a_Excel">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                            <th>06</th>
                                            <th>07</th>
                                            <th>08</th>
                                            <th>09</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>MAT</th>
                                            <th>Promedio</th>
                                            <th>Puntaje</th>
                                            <th>Areas Desaprobadas</th>
                                        </tr>
                                        <?php

                                        $matematicas=0;
                                        #cursos a cargo
                                        $cargomate=0;$cargocomu=0;$cargoingles=0;
                                        $cargocta=0;$cargohge=0;$cargocivica=0;
                                        $cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                        $cargoarte=0;$cargoreligion=0;

                                        $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
                                        while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
                                            echo "
                                                <tr>
                                                    <td>$alumnodatesecu[1]</td>
                                                    <td>$alumnodatesecu[2].$alumnodatesecu[3].$alumnodatesecu[4]</td>";

                                            $registronotasecu=$profesorcito->NOTASSECUNDARIAANUAL($alumnodatesecu[0]);
                                            $puntajesumasecu=0;
                                            $cursocargo=0;#cursos a cargo
                                            while ($notasecu = mysql_fetch_array($registronotasecu)) {

                                                #exonerado
                                                if ($notasecu[3]==-2){
                                                    $notasecu[3]="EX";

                                                }
                                                #retirado
                                                if ($notasecu[3]==-1){
                                                    $notasecu[3]="R";
                                                }
                                                #sumaloscursosacargo

                                                #nota_del_area

                                                if(strpos($notasecu[2],'Aritm')!==FALSE){
                                                    $algebra3ero=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Trigonometr')!==FALSE){
                                                    $trigo3ro=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Geometr')!==FALSE){
                                                    $geome3ro=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                #matematicas promedio
                                                $matematicas=($algebra3ero*2)+($geome3ro*3)+($trigo3ro*2);
                                                $prommate=round($matematicas/7);
                                                if($prommate<11){
                                                    $cargomate=1;
                                                }else{$cargomate=0;}

                                                if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                                                    $comunicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocomu=1;
                                                    }else{$cargocomu=0;}

                                                }
                                                if(strpos($notasecu[2],'Ingl')!==FALSE){
                                                    $inglessecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoingles=1;
                                                    }else{$cargoingles=0;}
                                                }
                                                if(strpos($notasecu[2],'sica')!==FALSE){
                                                    $quimicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocta=1;
                                                    }else{$cargocta=0;}

                                                }
                                                if(strpos($notasecu[2],'HGE')!==FALSE){
                                                    $hgesecu=round($notasecu[3]);
                                                 if(round($notasecu[3])<11){
                                                        $cargohge=1;
                                                    }else{$cargohge=0;}
                                                }
                                                if(strpos($notasecu[2],'vica')!==FALSE){
                                                    $civicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocivica=1;
                                                    }else{$cargocivica=0;}
                                                }
                                                if(strpos($notasecu[2],'PP.FF')!==FALSE){
                                                    $ppffsecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoppff=1;
                                                    }else{$cargoppff=0;}
                                                }
                                                if(strpos($notasecu[2],'EPT')!==FALSE){
                                                    $eptsecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoept=1;
                                                    }else{$cargoept=0;}
                                                }

                                                if(strpos($notasecu[2],'Edu.')!==FALSE){
                                                    $edufisicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoedufisica=1;
                                                    }else{$cargoedufisica=0;}
                                                }
                                                if(strpos($notasecu[2],'Arte')!==FALSE){
                                                    $artesecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoarte=1;
                                                    }else{$cargoarte=0;}
                                                }
                                                if(strpos($notasecu[2],'Religi')!==FALSE){
                                                    if($notasecu[3]>0){
                                                    $religionsecu=round($notasecu[3]);
                                                    }
                                                    if(round($notasecu[3])<11 and $notasecu[3]>0){
                                                        $cargoreligion=1;
                                                    }else{$cargoreligion=0;}
                                                }
                                                $notasecu[3]=round($notasecu[3]);
                                                echo "<td>$notasecu[3]</td>";
                                            }
                                            echo "<td>$prommate</td>";
                                            $puntajesumasecu=
                                                            $prommate+
                                                            $comunicasecu+
                                                            $inglessecu+
                                                            $quimicasecu+
                                                            $hgesecu
                                                            +$civicasecu+
                                                            $ppffsecu+
                                                            $eptsecu+
                                                            $edufisicasecu+
                                                            $artesecu+
                                                            $religionsecu;

                                            $promedio4to=round(($puntajesumasecu/11),2);
                                            echo "<td>$promedio4to</td>";
                                            #puntaje

                                            echo "<td>$puntajesumasecu</td>";
                                            #reinicia valores
                                            $matematicas=0;$prommate=0;$comunicasecu=0;
                                            $inglessecu=0;$quimicasecu=0;$hgesecu=0;
                                            $civicasecu=0;$ppffsecu=0;$eptsecu=0;
                                            $edufisicasecu=0;$artesecu=0;$religionsecu=0;


                                            $acargo=$cargomate+$cargocomu+$cargoingles+$cargocta+$cargohge+
                                            $cargocivica+$cargoppff+$cargoept+$cargoedufisica+$cargoarte+$cargoreligion;

                                            if($acargo==0){$acargo=" ";}
                                            echo "<td>$acargo</td>";
                                            $cargomate=0;$cargocomu=0;$cursocargo=0;$cargoingles=0;$cargocta=0;
                                            $cargohge=0;$cargocivica=0;$cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                            $cargoarte=0;$cargoreligion=0;
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
<?php
}
?>









<!--SOLO PARA 5 de secundaria-->
<?php
if($gradodelaula==5){
?>
<ul class="unstyled">
                                        <li style="float: left;"><code>01</code>=Matem&aacute;tica</li>
                                        <li style="float: left;"><code>02</code>=Comunicaci&oacute;n</li>
                                        <li style="float: left;"><code>03</code>=Ingl&eacute;s</li>
                                        <li style="float: left;"><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li style="float: left;"><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li style="float: left;"><code>06</code>=C&iacute;vica</li>
                                        <li style="float: left;"><code>07</code>=Persona y Familia</li>
                                        <li style="float: left;"><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li style="float: left;"><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li style="float: left;"><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li style="float: left;"><code>11</code>=Religi&oacute;n</li>
                                        <li style="float: left;"><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <table class="display" id="Exportar_a_Excel">
                                        <tr class="gradeX">
                                            <th>N°</th>
                                            <th>ALUMNO</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>02</th>
                                            <th>03</th>
                                            <th>04</th>
                                            <th>05</th>
                                            <th>06</th>
                                            <th>07</th>
                                            <th>08</th>
                                            <th>09</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>MAT</th>
                                            <th>Promedio</th>
                                            <th>Puntaje</th>
                                            <th>Areas Desaprobadas</th>
                                        </tr>
                                        <?php

                                        $matematicas=0;
                                        #cursos a cargo
                                        $cargomate=0;$cargocomu=0;$cargoingles=0;
                                        $cargocta=0;$cargohge=0;$cargocivica=0;
                                        $cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                        $cargoarte=0;$cargoreligion=0;

                                        $whoisalumnostutorsecundaria=$profesorcito->ALUMNOSDEMITUTORIA($codigodocenteaula);
                                        while ($alumnodatesecu = mysql_fetch_array($whoisalumnostutorsecundaria)) {
                                            echo "
                                                <tr>
                                                    <td>$alumnodatesecu[1]</td>
                                                    <td>$alumnodatesecu[2].$alumnodatesecu[3].$alumnodatesecu[4]</td>";

                                            $registronotasecu=$profesorcito->NOTASSECUNDARIAANUAL($alumnodatesecu[0]);
                                            $puntajesumasecu=0;
                                            $cursocargo=0;#cursos a cargo
                                            while ($notasecu = mysql_fetch_array($registronotasecu)) {

                                                #exonerado
                                                if ($notasecu[3]==-2){
                                                    $notasecu[3]="EX";

                                                }
                                                #retirado
                                                if ($notasecu[3]==-1){
                                                    $notasecu[3]="R";
                                                }
                                                #sumaloscursosacargo

                                                #nota_del_area

                                                if(strpos($notasecu[2],'Algebra')!==FALSE){
                                                    $algebra3ero=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Trigonometr')!==FALSE){
                                                    $trigo3ro=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                if(strpos($notasecu[2],'Geometr')!==FALSE){
                                                    $geome3ro=round($notasecu[3]);
                                                    #$matematicas=$matematicas+$notasecu[3];
                                                }
                                                #matematicas promedio
                                                $matematicas=($algebra3ero*2)+($geome3ro*2)+($trigo3ro*3);
                                                $prommate=round($matematicas/7);
                                                if($prommate<11){
                                                    $cargomate=1;
                                                }else{$cargomate=0;}

                                                if(strpos($notasecu[2],'Comunicaci')!==FALSE){
                                                    $comunicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocomu=1;
                                                    }else{$cargocomu=0;}

                                                }
                                                if(strpos($notasecu[2],'Ingl')!==FALSE){
                                                    $inglessecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoingles=1;
                                                    }else{$cargoingles=0;}
                                                }
                                                if(strpos($notasecu[2],'sica')!==FALSE){
                                                    $quimicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocta=1;
                                                    }else{$cargocta=0;}

                                                }
                                                if(strpos($notasecu[2],'HGE')!==FALSE){
                                                    $hgesecu=round($notasecu[3]);
                                                 if(round($notasecu[3])<11){
                                                        $cargohge=1;
                                                    }else{$cargohge=0;}
                                                }
                                                if(strpos($notasecu[2],'vica')!==FALSE){
                                                    $civicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargocivica=1;
                                                    }else{$cargocivica=0;}
                                                }
                                                if(strpos($notasecu[2],'PP.FF')!==FALSE){
                                                    $ppffsecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoppff=1;
                                                    }else{$cargoppff=0;}
                                                }
                                                if(strpos($notasecu[2],'EPT')!==FALSE){
                                                    $eptsecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoept=1;
                                                    }else{$cargoept=0;}
                                                }

                                                if(strpos($notasecu[2],'Edu.')!==FALSE){
                                                    $edufisicasecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoedufisica=1;
                                                    }else{$cargoedufisica=0;}
                                                }
                                                if(strpos($notasecu[2],'Arte')!==FALSE){
                                                    $artesecu=round($notasecu[3]);
                                                    if(round($notasecu[3])<11){
                                                        $cargoarte=1;
                                                    }else{$cargoarte=0;}
                                                }
                                                if(strpos($notasecu[2],'Religi')!==FALSE){
                                                    if($notasecu[3]>0){
                                                    $religionsecu=round($notasecu[3]);
                                                    }
                                                    if(round($notasecu[3])<11 and $notasecu[3]>0){
                                                        $cargoreligion=1;
                                                    }else{$cargoreligion=0;}
                                                }
                                                $notasecu[3]=round($notasecu[3]);

                                                echo "<td>$notasecu[3]</td>";
                                            }
                                            echo "<td>$prommate</td>";
                                            $puntajesumasecu=
                                                            $prommate+
                                                            $comunicasecu+
                                                            $inglessecu+
                                                            $quimicasecu+
                                                            $hgesecu
                                                            +$civicasecu+
                                                            $ppffsecu+
                                                            $eptsecu+
                                                            $edufisicasecu+
                                                            $artesecu+
                                                            $religionsecu;

                                            $promedio5to=round(($puntajesumasecu/11),2);
                                            echo "<td>$promedio5to</td>";
                                            #puntaje
                                            
                                            echo "<td>$puntajesumasecu</td>";
                                            #reinicia valores
                                            $matematicas=0;$prommate=0;$comunicasecu=0;
                                            $inglessecu=0;$quimicasecu=0;$hgesecu=0;
                                            $civicasecu=0;$ppffsecu=0;$eptsecu=0;
                                            $edufisicasecu=0;$artesecu=0;$religionsecu=0;
                                            
                                            
                                            $acargo=$cargomate+$cargocomu+$cargoingles+$cargocta+$cargohge+
                                            $cargocivica+$cargoppff+$cargoept+$cargoedufisica+$cargoarte+$cargoreligion;

                                            if($acargo==0){$acargo=" ";}
                                            echo "<td>$acargo</td>";
                                            $cargomate=0;$cargocomu=0;$cursocargo=0;$cargoingles=0;$cargocta=0;
                                            $cargohge=0;$cargocivica=0;$cargoppff=0;$cargoept=0;$cargoedufisica=0;
                                            $cargoarte=0;$cargoreligion=0;
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
<?php
}
?>
<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
    <p>Exportar a Excel  <img src="Css/images/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>
                        </div>
                    </div>
                </div>
            </div>
<!----------------------------------------------------------------------------->
            </div>
        </div>
            <br><br><br><br><br><br><br>
        <?php 
    }
        require_once 'Includes/modal-footer.php'; ?>
    </body>
    <script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script language="javascript">
$(document).ready(function() {
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
});
</script>
</html>
