<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Mi Boleta De Notas</title>
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
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>    
    </head>
    <body>
        <?php require_once 'Includes/navegador.php';    ?>
        
        <div id="miboleta">
            <center><h3 style="color: green">BOLETA DE NOTAS</h3></center>
            <a>Secci&oacute;n:</a><br>
            <a>Alumno:</a>
            <center>
            <table class="display">
                <thead>
                    <tr class="gradeX">
                        <th colspan="2">Asignatura</th>
                        <th>1er Bimestre</th>
                        <th>2do Bimestre</th>
                        <th>3er Bimestre</th>
                        <th>4to Bimestre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">Cursos Desprobados</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
                <a href="javascript:imprSelec('miboleta')"><i class="icon-print"></i>Imprimir</a>
            </center>
            
        </div>
        
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
