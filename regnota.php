<?php session_start();?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Registro De Notas</title>

<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><link rel="stylesheet" href="Include/jquery.innerfade/css/reset.css"  type="text/css" media="all" />
<style type="text/css" media="screen, projection"> @import url(Include/jquery.innerfade/css/jq_fade.css);</style></head>
<body>
<?php
require_once 'Includes/navegador.php';require_once 'Class/Docente.php';$Doce= new Docente();$dni=$_SESSION['dni'];require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo '<script>window.location = \'index.php\'</script>';
}else {
?>
<div style="margin-left: 2%;margin-right: 2%;">
    <ul id="news" style="display: none;">
    <li><a class="txtleoaki" href="#n1"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 1. Verificar: Usuario, Contrase&ntilde;a(no dni), Registros de evaluaciones con sus indicadores ingresando a la web CLAVERO EN LINEA. luego informar la conformidad a la jefatura correspondiente. <strong>DEL 21/10/2013 HASTA 23/10/2013</strong></a></li>
    <li><a class="txtleoaki" href="#n2"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 2. Completar notas de alumnos que se han ausentado a las evaluaciones del II bimestre. Entregar los promedios, bimestrales a las subdirecciones correspondientes. <strong>HASTA 18/10/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n3"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 3. Registrar resultados de evaluaciones de proceso de todas las &aacute;reas. en el sistema de acuerdo con el avance program&aacute;tico. <strong>Del 24/08/2013 HASTA 06/11/2013.</strong> </a></li>
    <li><a class="txtleoaki" href="#n4"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 4. Visualizaci&oacute;n de notas parciales de todas las &aacute;reas por los Padres De Familia. <strong>A PARTIR DEL 07/11/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n5"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 5. Subir al sistema, las &uacute;ltimas notas de proceso de &aacute;reas b&aacute;sicas hasta el indicador de actitudes del registro, quedando pendiente s&oacute;lo la NOTA FINAL BIMESTRAL<strong>HASTA 29/11/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n6"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 6. Subir al sistema, NOTAS FINALES de &Aacute;reas que no ingresan al rol de ex&aacute;menes bimestrales, logrando el promedio bimestral, firmar, imprimir y entregar a la jefatura correspondiente u original y una copia<strong>HASTA 04/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n7"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 7. Cronograma de ex&aacute;menes bimestrales de AREAS BASICAS en Primaria y Secundaria. <strong>DEL 02/12/2013 HASTA 06/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n8"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 8. Subir al sistema de Notas, ex&aacute;menes bimestrales logrando el promedio bimestral, firmar, imprimir el registro y entregar a la jefatura correspondiente un original y una copia. <strong>HASTA 09/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n9"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 9. Comentarios y observaciones del desempe&ntilde;o de los alumnos sin errores(bajo responsabilidad). Inasistencias y tardanzas de alumnos. <strong>HASTA 10/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n10"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 10. Elaboraci&oacute;n, impresi&oacute;n y verificaci&oacute;n de consolidados <strong>11/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n11"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 11. Elaboraci&oacute;n, impresi&oacute;n y verificaci&oacute;n de las BOLETAS DE NOTAS <strong>12/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n12"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 12. Elaboraci&oacute;n, e impresi&oacute;n de la Estad&iacute;stica del RENDIMIENTO ESCOLAR Y DETERMINACI&Oacute;N de los PRIMEROS PUESTOS y EXCELENCIA ACAD&Eacute;MICA;<strong>13/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n13"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 13. Elevar el cuadro de orden de m&eacute;ritos del RENDIMIENTO de los alumnos a la JEFATURA DE EDUCACI&Oacute;N. <strong>16/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n14"><strong>CRONOGRAMA DE ACTIVIDADES</strong> 14. ENTREGA DE BOLETAS DE NOTAS A LOS PADRES DE FAAMILIA DE LOS TRES NIVELES. <strong>20/12/2013</strong> </a></li>
    <li><a class="txtleoaki" href="#n15"><strong>CUMPLA CON LAS FECHAS DEL CRONOGRAMA. ESTE A&Ntilde;O DEBE SALIR TODO PERFECTO :D</strong></a></li>
    </ul>

<img src="Css/images/libro.jpeg" style="width:100px;" class="img-circle"/><i class='alert'>Si eres profesora de inicial, haz clic <a href='regnotainicial.php' class='btn btn-warning'>AQU&Iacute;</a> y obvie lo de abajo</i><br></div>
<div id="lista" style="margin-left: 2%;margin-right: 2%;"></div><br><br><br><br><br><br><br>

<div  style="margin-left: 15%;margin-right: 15%;">
<h3>Hola profesor, espere un momento a que carguen sus notas</h3><h4>Sab&iacute;a que estamos renovando el sistema de notas, utilizando tecnolog&iacute;a moderna; si utiliza Internet Explorer su experiencia en la web no ser&aacute; la mejor, le recomendamos navegadores modernos tales como:<br>
<a href="https://www.google.com/intl/es/chrome/browser/?hl=es" TARGET='_blank'>CHROME</a><br><a href="http://www.mozilla.org/es-ES/firefox/new/" target="_blank">FIREFOX</a></h4><br><br><h3><a style="color: green;" href="regnotaie.php">Si usa Internet Explore mejor haga click aqu&iacute;</a></h3></div><br><br><br><br>
<?php require_once 'Includes/modal-footer.php';?>
</body>
    <?php }?>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script><script type="text/javascript" src="Js/ajax.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
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