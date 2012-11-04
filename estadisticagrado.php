<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--ESTAD&Iacute;STICAS POR GRADO</title>
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
<script type="text/javascript">
function A(t)
{
for(var q=0;q<t.length;q++) {document.write(t.charAt(q)+"<br>");}
document.close();
}
</script>
    </head>
    <body>
        <?php require_once 'Includes/navegador.php';
        ?>
        <center><h3 style="color: green">RENDIMIENTO ACAD&Eacute;MICO POR TUTOR&Iacute;A</h3>
            <h4>Correspondiente al SECCION</h4>
            <br>
        <!---------------------------------------------------------------------------------------------->
        <!--BEGIN ENCABEZADO-->
        <div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#uno" data-toggle="tab"><i class="white icon-thumbs-up"></i>1er Bimestre</a></li>
                <li><a href="#dos" data-toggle="tab"><i class=" icon-bullhorn"></i>2do Bimestre</a></li>
                <li><a href="#tres" data-toggle="tab"><i class=" icon-bullhorn"></i>3er Bimestre</a></li>
                <li><a href="#cuatro" data-toggle="tab"><i class=" icon-bullhorn"></i>4to Bimestre</a></li>
                <li><a href="#anual" data-toggle="tab"><i class=" icon-bullhorn"></i>Anual</a></li>
            </ul>
        <!--END ENCABEZADO-->
        <!---------------------BEGIN CONTENT------------------------------------------------------------>
        <div id="myTabContent" class="tab-content">
            <!----------------------UNO---------------------->
            <div class="tab-pane fade in active" id="uno">
                <h3 style="color: green">I BIMESTRE</h3>
                    <table class="display">
                        <tr style="width: 60%;">
                            <th style="width: 8%">Puesto-En-El-Grado</th>
                            <th style="width: 8%">Secci&oacute;n</th><!--Secci&oacute;n<script>A("Puesto En El Grado");</script>-->
                            <th style="width: 8%">Promedio Ponderado</th>
                            <th style="width: 8%">Invictos</th>
                            <th style="width: 8%">1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">M&aacute;s de 1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">N° Alumnos En El 3° Superior</th>
                            <th style="width: 8%">Evaluados</th>
                            <th style="width: 8%">Alumnos sin nota</th>
                            <th style="width: 28%">Tutor</th>
                        </tr>
                        <tr class="gradeU">
                            <td colspan="10">
                                PROMEDIO PONDERADO DEL GRADO:
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td colspan="10">
                                <code>Nota:</code>Al Completar las notas de los Alumnos que no han sido evaluados por razones de fuerza mayor, la informaci&oacute;n de este cuadro podr&iacute;a verse afectada.
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td colspan="10">
                                <center>Fecha y hora del &uacute;ltimo Proceso:<?php echo date("d-m-Y H:i:s"); ?></center>
                            </td>
                        </tr>
                    </table>
                <div>
                    <iframe src="http://localhost/NOTAS/graficas" style="width: 640px;height: 480px;"></iframe>
<!--                    <div id="holder"></div>-->
                </div>
            </div>
            <!----------------------DOS----------------------->
            <div class="tab-pane fade" id="dos">
                <h3 style="color: green">II BIMESTRE</h3>
                    <table class="display">
                        <tr style="width: 60%;">
                            <th style="width: 8%">Puesto-En-El-Grado</th>
                            <th style="width: 8%">Secci&oacute;n</th><!--Secci&oacute;n<script>A("Puesto En El Grado");</script>-->
                            <th style="width: 8%">Promedio Ponderado</th>
                            <th style="width: 8%">Invictos</th>
                            <th style="width: 8%">1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">M&aacute;s de 1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">N° Alumnos En El 3° Superior</th>
                            <th style="width: 8%">Evaluados</th>
                            <th style="width: 8%">Alumnos sin nota</th>
                            <th style="width: 28%">Tutor</th>
                        </tr>
                        <tr class="gradeU">
                            <td colspan="10">
                                PROMEDIO PONDERADO DEL GRADO:
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td colspan="10">
                                <code>Nota:</code>Al Completar las notas de los Alumnos que no han sido evaluados por razones de fuerza mayor, la informaci&oacute;n de este cuadro podr&iacute;a verse afectada.
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td colspan="10">
                                <center>Fecha y hora del &uacute;ltimo Proceso:<?php echo date("d-m-Y H:i:s"); ?></center>
                            </td>
                        </tr>
                    </table>
            </div>
            <!----------------------TRES----------------------->
            <div class="tab-pane fade" id="tres">
                <h3 style="color: green">III BIMESTRE</h3>
                    <table class="display">
                        <tr style="width: 60%;">
                            <th style="width: 8%">Puesto-En-El-Grado</th>
                            <th style="width: 8%">Secci&oacute;n</th><!--Secci&oacute;n<script>A("Puesto En El Grado");</script>-->
                            <th style="width: 8%">Promedio Ponderado</th>
                            <th style="width: 8%">Invictos</th>
                            <th style="width: 8%">1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">M&aacute;s de 1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">N° Alumnos En El 3° Superior</th>
                            <th style="width: 8%">Evaluados</th>
                            <th style="width: 8%">Alumnos sin nota</th>
                            <th style="width: 28%">Tutor</th>
                        </tr>
                        <tr class="gradeU">
                            <td colspan="10">
                                PROMEDIO PONDERADO DEL GRADO:
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td colspan="10">
                                <code>Nota:</code>Al Completar las notas de los Alumnos que no han sido evaluados por razones de fuerza mayor, la informaci&oacute;n de este cuadro podr&iacute;a verse afectada.
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td colspan="10">
                                <center>Fecha y hora del &uacute;ltimo Proceso:<?php echo date("d-m-Y H:i:s"); ?></center>
                            </td>
                        </tr>
                    </table>
            </div>
            <!---------------------CUATRO---------------------->
            <div class="tab-pane fade" id="cuatro">
                <h3 style="color: green">IV BIMESTRE</h3>
                    <table class="display">
                        <tr style="width: 60%;">
                            <th style="width: 8%">Puesto-En-El-Grado</th>
                            <th style="width: 8%">Secci&oacute;n</th><!--Secci&oacute;n<script>A("Puesto En El Grado");</script>-->
                            <th style="width: 8%">Promedio Ponderado</th>
                            <th style="width: 8%">Invictos</th>
                            <th style="width: 8%">1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">M&aacute;s de 1 &aacute;rea Desaprobada</th>
                            <th style="width: 8%">N° Alumnos En El 3° Superior</th>
                            <th style="width: 8%">Evaluados</th>
                            <th style="width: 8%">Alumnos sin nota</th>
                            <th style="width: 28%">Tutor</th>
                        </tr>
                        <tr class="gradeU">
                            <td colspan="10">
                                PROMEDIO PONDERADO DEL GRADO:
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td colspan="10">
                                <code>Nota:</code>Al Completar las notas de los Alumnos que no han sido evaluados por razones de fuerza mayor, la informaci&oacute;n de este cuadro podr&iacute;a verse afectada.
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td colspan="10">
                                <center>Fecha y hora del &uacute;ltimo Proceso:<?php echo date("d-m-Y H:i:s"); ?></center>
                            </td>
                        </tr>
                    </table>
            </div>
            <!----------------------ANUAL----------------------->
            <div class="tab-pane fade" id="anual">
                año
            </div>
        </div>
        <!----------------------END CONTENT------------------------------------------------------------>
        <!---------------------------------------------------------------------------------------------->
        </div>
        
        
        </center>
        <div id="holder"></div>
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
