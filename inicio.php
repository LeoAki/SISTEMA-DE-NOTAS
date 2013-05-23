<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LICEO NAVAL CAPIT&Aacute;N DE CORBETA "MANUEL CLAVERO MUGA" ONLINE--BIENVENIDOS</title>
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
<?php require_once 'Includes/navegador.php';
require_once 'Includes/identif.php';
?>
<center>
<small>BIENVENIDOS AL SISTEMA DE NOTAS ONLINE DEL LICEO NAVAL C. DE CORBETA <em>"MANUEL CLAVERO MUGA"</em></small>
<legend><em>Con f&eacute;, lealtad y disciplina "Clavero Siempre Primero"</em></legend>
</center>         
<a href="#myModal" role="button" class="btn btn-success" data-toggle="modal">NOTA</a>
<center>
<div class="bs-docs-example" style="width: 60%;">
    <div id="myCarousel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
    <div class="active item" id="0">
        <img src="Css/images/FADE1.JPG" alt="">
        <div class="carousel-caption">
                      <h4>INICIAL</h4>
                      <p>Ceremonia de clausura de inicial 2012</p>
        </div>
    </div>
    <div class="item" id="1">
        <img src="Css/images/FADE2.jpg" alt="">
        <div class="carousel-caption">
                      <h4>BOSQUE DE GALLARDETE</h4>
                      <p>Nuestro alumnos demostrando el civ&iacute;smo y mostrando nuestro bosque de gallardete</p>
        </div>
    </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
</center>
<br><br><br><br>

<!-- Button to trigger modal -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Nota:</h3>
  </div>
  <div class="modal-body">
    <p>Si tienes problemas para ver este sitio, significa que estas usando un navegador como Internet Explorer, te recomendamos instalar mejores navegadores:</p>
    <ul>
    <li><a target="_blank" href="http://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li>
    <li><a target="_blank" href="https://www.google.com/intl/es/chrome/browser/?hl=es">Chrome</a></li>
    </ul>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
<?php
        require_once 'Includes/modal-footer.php';
?>
    </body>
<?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>    
<script type="text/javascript" src="Js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="Js/bootstrap-modal.js"></script>
<script type="text/javascript">
    $('#myCarousel').carousel({
    interval: 2000
        }
    );
    $('#myModal').modal(options)
</script>
</html>