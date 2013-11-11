<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LICEO NAVAL CAPIT&Aacute;N DE CORBETA "MANUEL CLAVERO MUGA" ONLINE ::: BIENVENIDOS</title>
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

<!-- Skitter Styles -->
<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
</head>
<body style="background-color: white;">
<?php require_once 'Includes/navegador.php';?>
        <div id="page" style="margin: 0 auto; width: 800px; background: #fff; padding:40px; margin-top: 20px; margin-bottom: 20px;box-shadow: #999 1px 1px 3px;">
		<center>
		<small>BIENVENIDOS AL SISTEMA DE NOTAS ONLINE DEL LICEO NAVAL C. DE CORBETA <em>"MANUEL CLAVERO MUGA"</em></small>
		<legend><em>Con f&eacute;, lealtad y disciplina "Clavero Siempre Primero"</em></legend>
		</center>
		<div id="content">
			<div class="border_box">
				<div class="box_skitter box_skitter_large">
					<ul>
                                            <li><a href="#cube"><img src="images/example/001.jpg" class="cube" /></a><div class="label_text"><p>Visita del presidente Ollanta Humala</p></div></li>
						<li><a href="#cubeRandom"><img src="images/example/002.jpg" class="cubeRandom" /></a><div class="label_text"><p>Visita de la congresista Leyla Chiguan</p></div></li>
						<li><a href="#block"><img src="images/example/003.jpg" class="block" /></a><div class="label_text"><p>Aniversario 49°</p></div></li>
						<li><a href="#cubeStop"><img src="images/example/004.jpg" class="cubeStop" /></a><div class="label_text"><p>Ganadores del Debate y Mesa Redonda</p></div></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<a href="#myModal" role="button" class="btn btn-success" data-toggle="modal">NOTA</a>
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
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>    
<script type="text/javascript" src="Js/bootstrap-modal.js"></script>

<!-- Skitter JS -->
<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
            $('.box_skitter_large').skitter({
                    theme: 'clean',
                    numbers_align: 'center',
                    progressbar: true,
                    dots: true,
                    preview: true
            });
    });
</script>
</html>