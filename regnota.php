<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Registra La Asistencia de tus Secciones</title>
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
        <?php require_once 'Includes/navegador.php';    ?>
        <div style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">Registro De Notas Por Bimestre:</h3></center>
            <form >
                <fieldset>
                    <legend>Bimestre Actual:IV</legend>
                    <table class="display">
                        <thead>
                            <tr>
                                <th style="width: 5%;">Registro</th>
                                <th style="width: 10%;">Secci&oacute;n</th>
                                <th style="width: 40%">Asignatura</th>
                                <th style="width: 8%;">I</th>
                                <th style="width: 8%;">II</th>
                                <th style="width: 8%;">III</th>
                                <th style="width: 8%;">IV</th>
                                <th style="width: 8%;">Anual</th>
                            </tr>
                        </thead>
                    </table>
                </fieldset>
            </form>
        </div>
        <?php require_once 'Includes/modal-footer.php';?>
    </body>
</html>
