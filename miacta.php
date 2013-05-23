<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Mi Acta</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>

    </head>
    <body>
        <?php require_once 'Includes/navegador.php';    ?>
	<div class="row-fluid">
            <div class="accordion" id="Bimestresacor">

<!---------------------------------------------------------------- I Bimestre-->
		<div class="accordion-group">
		  <div class="accordion-heading">
			<a class="accordion-toggle"  data-toggle="collapse" data-parent="#Bimestresacor" href="#Ibimestre">
                            <center>VER ACTAS DEL I BIMESTRE</center>
			</a>
		  </div>
		  <div style="height: 0px;" id="Ibimestre" class="accordion-body collapse">
			<div class="accordion-inner"><!-- CONTENIDO -->
                             <div class="texto" style="text-align: justify;">
                                 <!-- CONTENIDO -->
                                 <center><a><h4>Acta De Evaluaci&oacute;n Bimestral</h4></a></center>
                                 <br>
                                 <a>Secci&oacute;n  :</a><br>
                                 <a>Id De Secci&oacute;n  :</a>
                                    <!--CORRESPONDE A INICIAL-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
                                                                             <th>01</th>
                                                                             <th>02</th>
                                                                             <th>03</th>
                                                                             <th>04</th>
                                                                             <th>05</th>
                                                                         </tr>
                                                                     </table>
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Personal Social</li>
                                        <li><code>04</code>=Ciencia Y Ambiente</li>
                                        <li><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A PRIMARIA-->
                                    <table class="table">
                                         <tr>
                                             <th>N° Alumno</th>
                                             <th>Alumno</th>
                                             <th>Promedio</th>
                                             <th>Puesto</th>
                                             <th>Tercio Sup.</th>
                                             <th>5to Sup.</th>
                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Arte</li>
                                        <li><code>04</code>=Personal Social</li>
                                        <li><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>06</code>=Ciencia Y Ambiente</li>
                                        <li><code>07</code>=Educaci&oacute;n Religiosa</li>
                                        <li><code>08</code>=Ingl&eacute;s</li>
                                        <li><code>09</code>=Computaci&oacute;n</li>
                                        <li><code>10</code>=Conducta</li>
                                    </ul>

                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Ingl&eacute;s</li>
                                        <li><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li><code>06</code>=C&iacute;vica</li>
                                        <li><code>07</code>=Persona y Familia</li>
                                        <li><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li><code>11</code>=Religi&oacute;n</li>
                                        <li><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                             </div>
			</div>
		  </div>
		</div>
<!---------------------------------------------------------------- II Bimestre-->
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="#Bimestresacor" href="#IIbimestre">
                            <center>VER ACTAS DEL II BIMESTRE</center>
                        </a>
                    </div>
                    <div style="height: 0px;" id="IIbimestre" class="accordion-body collapse">
			<div class="accordion-inner"><!-- CONTENIDO -->
                             <div class="texto" style="text-align: justify;">
                                 <!-- CONTENIDO -->
                                 <center><a><h4>Acta De Evaluaci&oacute;n Bimestral</h4></a></center>
                                 <br>
                                 <a>Secci&oacute;n  :</a><br>
                                 <a>Id De Secci&oacute;n  :</a>
                                    <!--CORRESPONDE A INICIAL-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
                                                                             <th>01</th>
                                                                             <th>02</th>
                                                                             <th>03</th>
                                                                             <th>04</th>
                                                                             <th>05</th>
                                                                         </tr>
                                                                     </table>
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Personal Social</li>
                                        <li><code>04</code>=Ciencia Y Ambiente</li>
                                        <li><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A PRIMARIA-->
                                    <table class="table">
                                         <tr>
                                             <th>N° Alumno</th>
                                             <th>Alumno</th>
                                             <th>Promedio</th>
                                             <th>Puesto</th>
                                             <th>Tercio Sup.</th>
                                             <th>5to Sup.</th>
                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Arte</li>
                                        <li><code>04</code>=Personal Social</li>
                                        <li><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>06</code>=Ciencia Y Ambiente</li>
                                        <li><code>07</code>=Educaci&oacute;n Religiosa</li>
                                        <li><code>08</code>=Ingl&eacute;s</li>
                                        <li><code>09</code>=Computaci&oacute;n</li>
                                        <li><code>10</code>=Conducta</li>
                                    </ul>

                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Ingl&eacute;s</li>
                                        <li><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li><code>06</code>=C&iacute;vica</li>
                                        <li><code>07</code>=Persona y Familia</li>
                                        <li><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li><code>11</code>=Religi&oacute;n</li>
                                        <li><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                             </div>
			</div>
		  </div>
                </div>
<!---------------------------------------------------------------- III Bimestre-->
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="#Bimestresacor" href="#IIIbimestre">
                            <center>VER ACTAS DEL III BIMESTRE</center>
                        </a>
                    </div>
                    <div style="height: 0px;" id="IIIbimestre" class="accordion-body collapse">
			<div class="accordion-inner"><!-- CONTENIDO -->
                             <div class="texto" style="text-align: justify;">
                                 <!-- CONTENIDO -->
                                 <center><a><h4>Acta De Evaluaci&oacute;n Bimestral</h4></a></center>
                                 <br>
                                 <a>Secci&oacute;n  :</a><br>
                                 <a>Id De Secci&oacute;n  :</a>
                                    <!--CORRESPONDE A INICIAL-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
                                                                             <th>01</th>
                                                                             <th>02</th>
                                                                             <th>03</th>
                                                                             <th>04</th>
                                                                             <th>05</th>
                                                                         </tr>
                                                                     </table>
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Personal Social</li>
                                        <li><code>04</code>=Ciencia Y Ambiente</li>
                                        <li><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A PRIMARIA-->
                                    <table class="table">
                                         <tr>
                                             <th>N° Alumno</th>
                                             <th>Alumno</th>
                                             <th>Promedio</th>
                                             <th>Puesto</th>
                                             <th>Tercio Sup.</th>
                                             <th>5to Sup.</th>
                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Arte</li>
                                        <li><code>04</code>=Personal Social</li>
                                        <li><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>06</code>=Ciencia Y Ambiente</li>
                                        <li><code>07</code>=Educaci&oacute;n Religiosa</li>
                                        <li><code>08</code>=Ingl&eacute;s</li>
                                        <li><code>09</code>=Computaci&oacute;n</li>
                                        <li><code>10</code>=Conducta</li>
                                    </ul>

                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Ingl&eacute;s</li>
                                        <li><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li><code>06</code>=C&iacute;vica</li>
                                        <li><code>07</code>=Persona y Familia</li>
                                        <li><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li><code>11</code>=Religi&oacute;n</li>
                                        <li><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                             </div>
			</div>
		  </div>
                </div>
<!---------------------------------------------------------------- IV Bimestre-->
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="#Bimestresacor" href="#VIbimestre">
                            <center>VER ACTAS DEL VI BIMESTRE</center>
                        </a>
                    </div>
                    <div style="height: 0px;" id="VIbimestre" class="accordion-body collapse">
			<div class="accordion-inner"><!-- CONTENIDO -->
                             <div class="texto" style="text-align: justify;">
                                 <!-- CONTENIDO -->
                                 <center><a><h4>Acta De Evaluaci&oacute;n Bimestral</h4></a></center>
                                 <br>
                                 <a>Secci&oacute;n  :</a><br>
                                 <a>Id De Secci&oacute;n  :</a>
                                    <!--CORRESPONDE A INICIAL-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
                                                                             <th>01</th>
                                                                             <th>02</th>
                                                                             <th>03</th>
                                                                             <th>04</th>
                                                                             <th>05</th>
                                                                         </tr>
                                                                     </table>
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Personal Social</li>
                                        <li><code>04</code>=Ciencia Y Ambiente</li>
                                        <li><code>05</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A PRIMARIA-->
                                    <table class="table">
                                         <tr>
                                             <th>N° Alumno</th>
                                             <th>Alumno</th>
                                             <th>Promedio</th>
                                             <th>Puesto</th>
                                             <th>Tercio Sup.</th>
                                             <th>5to Sup.</th>
                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Arte</li>
                                        <li><code>04</code>=Personal Social</li>
                                        <li><code>05</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>06</code>=Ciencia Y Ambiente</li>
                                        <li><code>07</code>=Educaci&oacute;n Religiosa</li>
                                        <li><code>08</code>=Ingl&eacute;s</li>
                                        <li><code>09</code>=Computaci&oacute;n</li>
                                        <li><code>10</code>=Conducta</li>
                                    </ul>

                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                                    <br>
                                    <!--CORRESPONDE A SECUNDARIA-->
                                                                    <table class="table">
                                                                         <tr>
                                                                             <th>N° Alumno</th>
                                                                             <th>Alumno</th>
                                                                             <th>Promedio</th>
                                                                             <th>Puesto</th>
                                                                             <th>Tercio Sup.</th>
                                                                             <th>5to Sup.</th>
                                                                             <th>TAD</th>
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
                                    <em>Donde:</em>
                                    <ul>
                                        <li><code>01</code>=Matem&aacute;tica</li>
                                        <li><code>02</code>=Comunicaci&oacute;n</li>
                                        <li><code>03</code>=Ingl&eacute;s</li>
                                        <li><code>04</code>=Ciencia, Tecnolog&iacute;a y Ambiente</li>
                                        <li><code>05</code>=Historia, Geograf&iacute;a y Econom&iacute;a</li>
                                        <li><code>06</code>=C&iacute;vica</li>
                                        <li><code>07</code>=Persona y Familia</li>
                                        <li><code>08</code>=Educaci&oacute;n Para El Trabajo</li>
                                        <li><code>09</code>=Educaci&oacute;n F&iacute;sica</li>
                                        <li><code>10</code>=Educaci&oacute;n Art&iacute;stica</li>
                                        <li><code>11</code>=Religi&oacute;n</li>
                                        <li><code>12</code>=Conducta</li>
                                    </ul>
                                    <br>
                                    <fieldset>
                                        <legend>Resultados:</legend>
                                    <table class="table-bordered">
                                        <tr>
                                            <th>Alumnos Evaluados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Aprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>N° De Desaprobados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos que les faltan Notas</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Retirados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Alumnos Exonerados</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </fieldset>
                             </div>
			</div>
		  </div>
                </div>
            </div>
        </div>
		<!-- FIN QUE ES EL REMATE -->
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
