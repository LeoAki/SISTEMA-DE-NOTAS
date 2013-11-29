<?php session_start();
$dnidocenteusario=$_SESSION['dni'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Dirigite al PP.FF</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>
<body>
        <?php require_once 'Includes/navegador.php';?>
    <center>
    <div style="width: 30%;text-align: center;">
        <span><i class="info"><code>TUTOR: </code>Elige el nivel que te corresponde</i></span>
        <br><br>
        <a class="btn btn-large btn-block btn-primary" type="button" href="regmnsji.php">INICIAL</a>
        <a class="btn btn-small btn-block btn-danger" type="button" href="messagepc.php">DEL DOCENTE DE COMPUTO</a>
        <a class="btn btn-small btn-block btn-danger" type="button" href="messageneuro.php">DEL DOCENTE DE NEUROFISICA</a>
        <a class="btn btn-small btn-block btn-danger" type="button" href="messageedufi.php">DEL DOCENTE DE EDUCA. FISICA</a>
        <a href="regmsjview.php" target="_blank">Imprime Inicial</a><br><br>
        <a class="btn btn-large btn-block btn-primary" type="button" href="regmnsjps.php">PRIMARIA</a>
        <a class="btn btn-large btn-block btn-primary" type="button" href="regmnsjps.php">SECUNDARIA</a>
        <br>
        <section>
            <img class="img-circle" src="Css/images/alumno.jpg"/>
        </section>
    </div>
    </center>
        <?php require_once 'Includes/modal-footer.php';?>
</body>
<?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>