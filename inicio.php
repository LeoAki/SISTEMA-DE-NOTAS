<?php session_start();#DT25735742?>
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
    header('Location: index.php');
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
        <center>
                    <div class="td-header">
                        <ul id="fcabecera" style="list-style: none;">
                            <li><img src="Css/images/fade1.JPG" alt="" /></li>
                            <li><img src="Css/images/fade2.JPG" alt="" /></li>
                            <li><img src="Css/images/fade1.JPG" alt="" /></li>
                            <li><img src="Css/images/fade2.JPG" alt="" /></li>
                        </ul>
                    </div>
        </center>
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
                <code>Nota:</code> Si tienes problemas para ver este sitio, significa que estas usando un navegador como IE, Te recomendamos instalar mejores navegadores:<ul><li><a href="">Mozilla Firefox</a></li><li><a href="">Chrom</a></li>
                </ul>
            </div>
            <!--CONTENT COMUNICADOS RECIENTES-->
            <div class="tab-pane fade" id="profile">
                <h3>COMUNICADOS RECIENTES</h3>
                <fieldset>
                    <center><legend>Comunicado N°90</legend></center>
                    <p>bla bla bla</p>
                </fieldset>
                <em>Puedes ver todos los comunicados en nuestra web <a href="http://lncc.edu.pe" target="_blank"><i class="icon-globe"></i></a></em>
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
