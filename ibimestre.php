<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--I BIMESTRE</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
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
        <?php require_once 'Includes/navegador.php';
         require_once 'Class/Seccion.php';
         $SEC=new Seccion();?>
<center><h3 style="color: green">VISTA GENERAL AL I BIMESTRE</h3></center>
<table>
    <thead>
        <tr>
            <td>GRADO</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $iniciales=$SEC->ListarGradosDiferentes('INICIAL');
        while ($row = mysql_fetch_array($iniciales)) {
            echo "
                <tr>
                    <td>".$row[0]."</td>
                </tr>
                ";
        }
        ?>
    </tbody>
</table>
<!---------------------------------------------------------------------------------------------->
<!--BEGIN ENCABEZADO-->
<div class="bs-docs-example">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#uno" data-toggle="tab"><i class="white icon-thumbs-up"></i>INICIAL</a></li>
        <li><a href="#dos" data-toggle="tab"><i class=" icon-bullhorn"></i>PRIMARIA</a></li>
        <li><a href="#tres" data-toggle="tab"><i class=" icon-bullhorn"></i>SECUNDARIA</a></li>
    </ul>
<!--END ENCABEZADO-->
<!---------------------BEGIN CONTENT------------------------------------------------------------>
<!---------------------------------------------------------------------------------------------->
<div id="myTabContent" class="tab-content">
<!---------------------------------------------------------------------------------------------->
    <div class="tab-pane fade in active" id="uno">
        <fieldset>
            <center><legend>Datos En Inicial</legend>
            <table class="table-striped">
                <thead>
                    <tr>
                        <th style="padding: 6px;">Grado</th>
                        <th style="padding: 6px;">Total De<br>Aulas</th>
                        <th style="padding: 6px;">Alumnos<br>Matriculados</th>
                        <th colspan="3" style="padding: 6px;">Rendimiento y Eficiencia<br>Acad&eacute;mica</th>
                        <th style="padding: 6px;">Tercio<br>Superior</th>
                        <th style="padding: 6px;">Primeros<br>Puestos</th>
                        <th style="padding: 6px;">Alumnos Sin<br>Prom.Bim.</th>
                        <th style="padding: 6px;">Criterios<br>De Evaluaci&oacute;n</th>
                        <th colspan="2" style="padding: 6px;">Procesos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="info">
                        <td>3° INICIAL</td>
                        <td></td>
                        <td></td>
                        <td>Secciones</td>
                        <td>&Aacute;reas</td>
                        <td>Eficiencia</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Procesar</td>
                    </tr>
                    <tr class="info">
                        <td>4° INICIAL</td>
                        <td></td>
                        <td></td>
                        <td>Secciones</td>
                        <td>&Aacute;reas</td>
                        <td>Eficiencia</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Procesar</td>
                    </tr>
                    <tr class="info">
                        <td>5° INICIAL</td>
                        <td></td>
                        <td></td>
                        <td>Secciones</td>
                        <td>&Aacute;reas</td>
                        <td>Eficiencia</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Procesar</td>
                    </tr>
                    <tr>
                        <td>TOTAL</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </center>
        </fieldset>
    </div>
    <div class="tab-pane fade" id="dos">
            <fieldset>
            <center><legend>Datos En Primaria</legend>
            <table class="table-striped">
                <thead>
                    <tr>
                        <th style="padding: 6px;">Grado</th>
                        <th style="padding: 6px;">Total De<br>Aulas</th>
                        <th style="padding: 6px;">Alumnos<br>Matriculados</th>
                        <th colspan="3" style="padding: 6px;">Rendimiento y Eficiencia<br>Acad&eacute;mica</th>
                        <th style="padding: 6px;">Tercio<br>Superior</th>
                        <th style="padding: 6px;">Primeros<br>Puestos</th>
                        <th style="padding: 6px;">Alumnos Sin<br>Prom.Bim.</th>
                        <th style="padding: 6px;">Criterios<br>De Evaluaci&oacute;n</th>
                        <th colspan="2" style="padding: 6px;">Procesos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="info">
                        <td>1ero</td>
                        <td></td>
                        <td></td>
                        <td>Secciones</td>
                        <td>&Aacute;reas</td>
                        <td>Eficiencia</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Procesar</td>
                    </tr>
                    <tr class="info">
                        <td>2do</td>
                        <td></td>
                        <td></td>
                        <td>Secciones</td>
                        <td>&Aacute;reas</td>
                        <td>Eficiencia</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Procesar</td>
                    </tr>
                    <tr class="info">
                        <td>3ero</td>
                        <td></td>
                        <td></td>
                        <td>Secciones</td>
                        <td>&Aacute;reas</td>
                        <td>Eficiencia</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Procesar</td>
                    </tr>
                    <tr>
                        <td>TOTAL</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </center>
        </fieldset>
    </div>
<!---------------------------------------------------------------------------------------------->
</div>
<!-----------------------END CONTENT------------------------------------------------------------>
</div>
<!---------------------------------------------------------------------------------------------->
        <?php require_once 'Includes/modal-footer.php';    ?>
    </body>
</html>