<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LICEO NAVAL CAPIT&Aacute;N DE CORBETA "MANUEL CLAVERO MUGA" ONLINE--VISTA GENERAL DE GRADOS</title>
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
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</head>
    <body>
        <?php require_once 'Includes/navegador.php';
         require_once 'Class/Seccion.php';
         $SEC=new Seccion();?>
<center><h3 style="color: green">SELECCIONE EL GRADO PARA VER SUS AREAS</h3></center>
<div style="margin-left: 35%;margin-right: 35%;">

<!-----DIRECTOR-SUBDIRECTOR GENERAL--->
<?php
if($_SESSION['niveldeuser']=='4' or $_SESSION['niveldeuser']=='5'){
?>

<!---------------------------------------------------------------------------------------------->
<!--BEGIN ENCABEZADO-->
<div class="bs-docs-example" style="background-color:#E3F6CE;">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#inicial" data-toggle="tab"><i class="white icon-thumbs-up"></i>INICIAL</a></li>
        <li><a href="#primaria" data-toggle="tab"><i class=" icon-bullhorn"></i>PRIMARIA</a></li>
        <li><a href="#secundaria" data-toggle="tab"><i class=" icon-bullhorn"></i>SECUNDARIA</a></li>
    </ul>
<!--END ENCABEZADO-->
<!---------------------BEGIN CONTENT------------------------------------------------------------>
<!---------------------------------------------------------------------------------------------->
<div id="myTabContent" class="tab-content">
<!---------------------------------------------------------------------------------------------->
    <div class="tab-pane fade in active" id="inicial">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>GRADO</th>
                <th>VER</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>3° a&ntilde;os</td>
                <td><a TARGET="_blank" href="versinaturas.php?nivel='inicial'&grado=3">Ver &Aacute;reas</a></td>
            </tr>
            <tr>
                <td>4° a&ntilde;os</td>
                <td><a TARGET="_blank" href="versinaturas.php?nivel='inicial'&grado=4">Ver &Aacute;reas</a></td>
            </tr>
            <tr>
                <td>5° a&ntilde;os</td>
                <td><a TARGET="_blank" href="versinaturas.php?nivel='inicial'&grado=5">Ver &Aacute;reas</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="primaria">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>GRADO</th>
                    <th>VER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=1">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>2° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=2">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>3° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=3">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>4° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=4">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>5° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=5">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>6° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=6">Ver &Aacute;reas</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="secundaria">
         <table class="table table-hover">
            <thead>
                <tr>
                    <th>GRADO</th>
                    <th>VER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=1">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>2° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=2">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>3° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=3">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>4° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=4">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>5° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=5">Ver &Aacute;reas</a></td>
                </tr>
            </tbody>
         </table>
    </div>
<!---------------------------------------------------------------------------------------------->
</div>
<!-----------------------END CONTENT------------------------------------------------------------>
</div>
<?php }?>


<?php
if($_SESSION['niveldeuser']=='6'){
?>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>GRADO</th>
                <th>VER</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>3° a&ntilde;os</td>
                <td><a TARGET="_blank" href="versinaturas.php?nivel='inicial'&grado=3">Ver &Aacute;reas</a></td>
            </tr>
            <tr>
                <td>4° a&ntilde;os</td>
                <td><a TARGET="_blank" href="versinaturas.php?nivel='inicial'&grado=4">Ver &Aacute;reas</a></td>
            </tr>
            <tr>
                <td>5° a&ntilde;os</td>
                <td><a TARGET="_blank" href="versinaturas.php?nivel='inicial'&grado=5">Ver &Aacute;reas</a></td>
            </tr>
            </tbody>
        </table>
<?php
}
?>


<?php
if($_SESSION['niveldeuser']=='7'){
?>
        <table class="table">
            <thead>
                <tr>
                    <th>GRADO</th>
                    <th>VER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=1">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>2° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=2">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>3° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=3">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>4° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=4">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>5° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=5">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>6° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='primaria'&grado=6">Ver &Aacute;reas</a></td>
                </tr>
            </tbody>
        </table>
<?php
}
?>


<?php
if($_SESSION['niveldeuser']=='8'){
?>
         <table class="table table-hover">
            <thead>
                <tr>
                    <th>GRADO</th>
                    <th>VER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=1">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>2° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=2">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>3° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=3">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>4° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=4">Ver &Aacute;reas</a></td>
                </tr>
                <tr>
                    <td>5° grado</td>
                    <td><a TARGET="_blank" href="versinaturas.php?nivel='secundaria'&grado=5">Ver &Aacute;reas</a></td>
                </tr>
            </tbody>
         </table>
<?php
}
?>
</div>
<!---------------------------------------------------------------------------------------------->
        <?php require_once 'Includes/modal-footer.php';
}
        ?>
    </body>
</html>