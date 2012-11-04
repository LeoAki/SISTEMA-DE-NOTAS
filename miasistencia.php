<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Mi Asistencia</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
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
<center>
    <div id="print_a">
    <h3 style="color: green">CONSOLIDADO DEL REGISTRO DE ASISTENCIA</h3>
    <table class="table">
        <tr class="info">
            <td colspan="2"><center>Alumno</center></td>
            <td colspan="3">1er Bimestre</td>
            <td colspan="3">2do Bimestre</td>
            <td colspan="3">3er Bimestre</td>
            <td colspan="3">4to Bimestre</td>
        </tr>
        <tr class="error"><!--alert-->
            <td>N°</td>
            <td class="">Alumno</td>
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td>
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td>
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td>
            <td>F.J</td>
            <td>F.I</td>
            <td>T</td>            
        </tr>
        <tr class="alert">
            <td></td>
            <td class=""></td>
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
    </div>
    <a href="javascript:imprSelec('print_a')"><i class="icon-print"></i>Imprimir</a>
</center>
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
