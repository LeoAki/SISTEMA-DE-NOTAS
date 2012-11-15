<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--PRIMEROS PUESTOS EN EL GRADO</title>
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
        <?php
        require_once 'Includes/navegador.php';
        include_once 'Class/Conection.php';
        ?>
        <div style="margin-left: 15%;margin-right: 15%;" id="primer">
            <center><h3 style="color: green">Escriba el comentario u observación sobre el desempeño de sus alumnos de tutor&iacute;a en el presente Bimestre.</h3></center>
            <br><a href="javascript:imprSelec('primer')"><i class="icon-print"></i>Imprimir Registro De Observaciones</a>
            <form id="frmmensaje" method="post" action="regmensaje">
                <fieldset>
                    <legend>A mis Alumnos:</legend>
                    <table class="display">
                        <tr class="gradeU">
                            <td style="width: 8%;">N° &Oacute;rden</td>
                            <td style="width: 46%;">Alumno</td>
                            <td>Observaci&oacute;n</td>
                        </tr>
<?php
$cone=new Conection();
$cone->CONECT();
$lista=  mysql_query("Call Listar_ALumnos_Seccion(131);");
while ($row = mysql_fetch_array($lista)) {
    echo "
        <tr>
        <td>".$row[0]."</td>
        <td>".$row[1]."  ".$row[2]."  ,".$row[3]."</td>
        <td><input type='text' style='width:90%'/></td>
        </tr>
        ";
//    print_r($row[0].$row[1]."  ".$row[2]."  ,".$row[3]);echo "<br>";
}
?>
                    </table>
                </fieldset>
            </form>

        </div>
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
