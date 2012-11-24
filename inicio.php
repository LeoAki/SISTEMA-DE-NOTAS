<?php 
session_start();
?>
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
#    header('Location: index.php');
                    echo "<script>window.location = 'index.php'</script>";
}else {
?>
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
<?php require_once 'Includes/navegador.php';
?>
        
        <span class="input-xlarge uneditable-input"><?php echo $_SESSION['usuario']?></span>
<script type="text/javascript">
            jQuery(document).ready(function(){
                    jQuery('ul#fcabecera').innerfade({
				speed: 1000,
				timeout: 3000,
				type: 'random',
				containerheight: '200px'
			});
});
</script>        
        <center>
        <code>BIENVENIDOS AL SISTEMA DE NOTAS ONLINE DEL COLEGIO LICEO NAVAL C. DE CORBETA<BR>
            <em>"MANUEL CLAVERO MUGA"</em></code>
        </center> 
        <div>
            <center><legend><em>Clavero "Siempre Primero"</em></legend></center>
        </div>

    <br>
    <!--TABS DE BIENVENIDA-->
    <div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><i class="white icon-thumbs-up"></i>BIENVENIDOS</a></li>
                <li><a href="#profile" data-toggle="tab"><i class=" icon-bullhorn"></i>COMUNICADOS RECIENTES</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bookmark"></i>NUESTRA GENTE<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="#dropdown1" data-toggle="tab"><i class="icon-star"></i>ALUMNO DEL MES</a></li>
                      <li><a href="#dropdown2" data-toggle="tab"><i class="icon-star"></i>SAL&Oacute;N DE MEJOR RENDIMIENTO</a></li>
                  </ul>
                </li>
            </ul>        
        <!---------------------BEGIN CONTENT------------------------------------------------------------>
        <div id="myTabContent" class="tab-content">
            <!--CONTENT BIENVENIDOS-->
            <div class="tab-pane fade in active" id="home">
                Tengan todos ustedes una cordial bienvenida al Sistema De Notas On-Line de nuestra institución...
                <br>
                <code>Nota:</code> Si tienes problemas para ver este sitio, significa que estas usando un navegador como IE, Te recomendamos instalar mejores navegadores:<ul><li><a target="_blank" href="http://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li><li><a target="_blank" href="https://www.google.com/intl/es/chrome/browser/?hl=es">Chrome</a></li>
                </ul>
            </div>
            <!--CONTENT COMUNICADOS RECIENTES-->
            <div class="tab-pane fade" id="profile">
                <h3>COMUNICADOS RECIENTES</h3>
                <fieldset>
                    <center><legend>Comunicado N°94</legend></center>
                    <p>DSCTO. BIT&Aacute;CORA</p>
                    

Se&ntilde;or Padre de Familia:<br>

Tengo el agrado de dirigirme a usted para saludarlo cordialmente y a su vez comunicarle que con la finalidad de contar con los recursos necesarios para programar la adquisici&oacute;n de las bit&aacute;coras e impresos y material relacionado al mejoramiento de la calidad educativa correspondiente al a&ntilde;o acad&eacute;mico 2013; la Direcci&oacute;n de Bienestar a trav&eacute;s del Departamento de Educaci&oacute;n ha visto por conveniente hacer llegar a usted el cronograma de pagos y/o descuentos a efectuarse en los mes de Noviembre, Diciembre del presente a&ntilde;o y Enero 2013, se considerar&aacute; los pagos por tesorer&iacute;a y/o descuento por planilla de haberes OGA-CPMP<br>
                </fieldset>
                <em>Puedes ver todos los comunicados en nuestra web <a href="http://www.lncc.edu.pe/index.php/noticias/comunicados" target="_blank"><i class="icon-globe"></i></a></em>
            </div>  
            <!--CONTENT ALUMNO DEL MES-->            
            <div class="tab-pane fade" id="dropdown1">
                <p>El alumno del mes es:</p>
                <img src="Css/images/insignia.jpg"/>
            </div>
            <!--CONTENT SALON DEL MES-->            
            <div class="tab-pane fade" id="dropdown2">
              <p>
                  El sal&oacute;n con mejor rendimiento es:
              </p>
            </div>                
        </div>        
        <!----------------------END CONTENT------------------------------------------------------------>
    </div>
        <?php
        require_once 'Includes/modal-footer.php';
        ?>
    </body>
    <?php }?>
</html>