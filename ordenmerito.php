<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--ORDEN DE MERITO EN MI AULA</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<!--<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>-->
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
        <center><h3 style="color: green">CUADRO DE &Oacute;RDEN DE M&Eacute;RITO AL CIERRE DEL BIMESTRE</h3></center><br>
        <a>Peri&oacute;do   :</a><br>
        <a>Secci&oacute;n   :</a><br>
        <a>Id de Secci&oacute;n  :</a><br>
        <a>Tutor    :</a> <br>
        
        <table class="table">
            <tr>
                <th>N°</th>
                <th>Alumno</th>
                <th>Prom.</th>
                <th>3°<i class="icon-upload"></i></th>
                <th>5°<i class="icon-upload"></i></th>
                <th>TAD</th>
            </tr>
        </table>

        </div>
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
