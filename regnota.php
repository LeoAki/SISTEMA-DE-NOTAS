<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Registro De Notas</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>

<link rel="stylesheet" href="Include/jquery.innerfade/css/reset.css"  type="text/css" media="all" />
<style type="text/css" media="screen, projection">
    @import url(Include/jquery.innerfade/css/jq_fade.css);
</style>
</head>
<body>
<?php
require_once 'Includes/navegador.php';require_once 'Class/Docente.php';
$Doce= new Docente();
$dni=$_SESSION['dni'];
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo "<script>window.location = 'index.php'</script>";
}else {
?>
<div style="margin-left: 2%;margin-right: 2%;">
<ul id="news">
    <li><a class="txtleoaki" href="#n1"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 1. Subir al sistema, las &uacute;ltimas notas de proceso de &aacute;reas b&aacute;sicas hasta el indicador
        de actitudes del registro, quedando pendiente s&oacute;lo la nota Final Bimestral. <strong>HASTA 17/07/2013</strong></a></li>
    <li><a class="txtleoaki" href="#n2"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 2. Subir al sistema, NOTAS FINALES de &aacute;reas que no ingresan al rol de ex&aacute;menes bimestrales,
        logrando el promedio bimestral, firmar, imprimir y entregar a la jefatura correspondiente un original y una copia. <strong>HASTA 22/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n3"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 3. Cronograma de ex&aacute;menes bimestrales de Areas b&aacute;sicas en primaria y secundaria.
        <strong>Del 18/07/2013 HASTA 24/07/2013.</strong> </a></li>
    <li><a class="txtleoaki" href="#n4"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 4. Subir al sistema de Notas de ex&aacute;menes bimestrales logrando el promedio bimestral, FIRMAR, IMPRIMIR el registro
        y entregar a la jefatura correspondiente un original y una copia. <strong>Hasta el 26/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n5"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 5. Comentario y observaci&oacute;n del desempe&ntilde;o de los alumnos. Inasistencias y tardanzas de alumnos
        <strong>HASTA 26/7/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n6"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 6. Entrega de unidades, sesiones de aprendizaje y temarios III Bimestre. <strong>HASTA 26/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n7"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 7. Supervici&oacute;n y valoraci&oacute;n a los docentes que han cumplido con subir las notas y entrega de los registros
        impresos en los plazos establecidos. <strong>26/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n8"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 8. Elaboraci&oacute;n e impresi&oacute;n de los consolidados. <strong>30/07/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n9"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 9. Impresi&oacute;n de boletas de notas y estad&iacute;stica del rendimiento acad&eacute;mico II Bimestre.
        <strong>13/08/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n10"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 10. D&iacute;a del logro y entrega de boletas de notas a los PP.FF.
        <strong>16/08/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n11"><strong>CUMPLA CON LAS FECHAS DEL CRONOGRAMA.</strong></a></li>
</ul>
<img src="Css/images/libro.jpeg" style="width:100px;" class="img-circle"/><i class='alert'>Si eres profesora de inicial, haz clic <a href='regnotainicial.php' class='btn btn-warning'>AQU&Iacute;</a> y obvie lo de abajo</i>
<br>
</div>
<div id="lista" style="margin-left: 2%;margin-right: 2%;"></div>
<br><br><br><br><br><br><br>

<div  style="margin-left: 15%;margin-right: 15%;">
    <h3>Hola profesor, espere un momento a que carguen sus notas</h3>
    <h4>Sab&iacute;a que estamos renovando el sistema de notas, utilizando tecnolog&iacute;a moderna; si utiliza Internet
        Explorer su experiencia en la web no ser&aacute; la mejor, le recomendamos navegadores modernos
        tales como:<br>
        <a href="https://www.google.com/intl/es/chrome/browser/?hl=es" TARGET='_blank'>CHROME</a><br>
        <a href="http://www.mozilla.org/es-ES/firefox/new/" target="_blank">FIREFOX</a>
    </h4>
    <br><br>
    <h3><a style="color: green;" href="regnotaie.php">Si usa Internet Explore mejor haga click aqu&iacute;</a></h3>
</div>
<br><br><br><br>

<?php require_once 'Includes/modal-footer.php';?>
</body>
    <?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<script type="text/javascript" src="Js/ajax.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>

<script type="text/javascript" src="Include/jquery.innerfade/js/jquery.innerfade.js"></script>
<script type="text/javascript">
$(document).ready(
                function(){
                        $('#news').innerfade({
                                animationtype: 'slide',
                                speed: 1000,
                                timeout: 8000,
                                type: 'sequence',
                                containerheight: '1em'
                        });
        });
</script>
<script>
$(document).ready(function(){
window.onload=(function(evento){
evento.preventDefault();
$("#lista").load("procesa2.php");
});
})
function cargar()
{
$('#lista').load('procesa2.php');
}
</script>
</html>