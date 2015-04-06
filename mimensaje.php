<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Mi Mensaje</title>
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
    </head>
    <body>
<?php require_once 'Includes/navegador.php';    ?>
<div id="mensajito">
<table class="display">
<tr>
<td><a style="font-style: oblique"><h4>De:</h4></a></td>
<td></td>
</tr>
<tr>
<td><a style="font-style: oblique"><h4>Para:</h4></a></td>
<td></td>
</tr>
<tr>
<td><a style="font-style: oblique"><h4>Mensaje:</h4></a></td>
<td></td>
</tr>
</table>
</div>
<center><a href="javascript:imprSelec('mensajito')"><i class="icon-print"></i>Imprimir</a></center>
<?php require_once 'Includes/modal-footer.php'; ?>
</body>
</html>