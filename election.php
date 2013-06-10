<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else
{
?>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
    </head>
    <body>
<?php require_once 'Includes/navegador.php';?>
<center>
<div style="width: 60%;text-align: center;">
    <br><br>
    <i class="info">Eliga el nivel que le corresponda para que ingrese la calificaci&oacute;n a los PP.FF.</i>
    <br><br><br><br>
    <a href="regmnsji.php" class="btn btn-large btn-block btn-primary" type="button">INICIAL</a>
    <a href="regmnsjps.php" class="btn btn-large btn-block btn-primary" type="button">PRIMARIA & SECUNDARIA</a>
</div>
</center>

<?php require_once 'Includes/modal-footer.php';?>
    </body>
<?php
}
?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
</html>
