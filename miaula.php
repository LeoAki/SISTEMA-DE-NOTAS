<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Mis amigos de clase"><meta name="author" content="Oficina De Sistemas Clavero"><meta name="keywords" content="LNCC, Ventanilla, clavero, 'LNCC - Liceo Naval Capitán de Corbeta Manuel Clavero Muga', liceo naval" /><link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><title>Mi aula, mi seccion claverina</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else 
{ require_once 'Class/RegistroAlumno.php';$RALU=new RegistroAlumno();
?></head><body>
<?php require_once 'Includes/navegador.php';require_once 'Includes/infoalumno.php';?>
<div class="container-fluid">
<div class="row-fluid"><div class="span2" style="background-color: #51a351;">
    <div id="directora"><h5>DIRECTORA:<br><small style="color: white;">Mg. Tania Elsa, Flores Morante</small></h5><img src="Css/images/direcora.jpg" class="img-polaroid"/></div>
    <div id="subgeneral"><h5>SUB DIRECTOR GENERAL:<br><small style="color: white;">Lic. Rosendo Zapana Quisca</small></h5><img src="Css/images/subdirector.jpg" class="img-polaroid"/></div>
    <div id="subnivel"><h5>SUB DIRECTORA DEL NIVEL:<br><small style="color: white;">
<?php
if($niveledu=='INICIAL'){
    echo 'Lic. Yshioly Zavaleta Espinoza';echo '<img src=\'Css/images/inicial.jpg\' class=\'img-polaroid\'/>';
}elseif ($niveledu=="PRIMARIA") {
    echo 'Lic. Catherine Solis Ward';echo '<img src=\'Css/images/primaria.jpg\' class=\'img-polaroid\'/>';
}  else {
    echo 'Lic. Margot Estrada Virhuez';echo '<img src=\'Css/images/secundaria.jpg\' class=\'img-polaroid\'/>';
}
?></small></h5></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
<div class="span10" style="background-color: pink;"><h3><a style="color: #0489B1;">Mis compa&ntilde;eros de clase:</a></h3>
<?php     echo '<small><em>'.$gradoedu.''.$namesec.'||'.$niveledu.'</em></small>';?>
<div id="alumlist">

</div>
</div></div></div>
<?php require_once 'Includes/modal-footer.php';?> </body>
<?php } ?>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>    
<script type="text/javascript" src="Js/ajax.js"></script>
<script type="text/javascript">
    window.onload=function(){
        Mostraralumnosseccion(<?php echo $codeidsec; ?>);
    }
</script>
</html>