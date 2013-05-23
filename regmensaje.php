<?php session_start();
$dnidocenteusario=$_SESSION['dni'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Dirigite a tus alumno</title>
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
<?php
require_once 'Includes/navegador.php';
include_once 'Class/Conection.php';
include_once 'Class/Docente.php';
include_once 'Class/ALUMNO_SECCION.php';
$DOCENTE=new Docente();
$ALUMNOSECCION= new ALUMNO_SECCION();
$whoisdocente=$DOCENTE->DOCENTE_USUARIO($dnidocenteusario);
if($filasiencuentra=  mysql_fetch_array($whoisdocente)){
    $codigodocentenow=$filasiencuentra[0];
    $apellidosdocentenow=$filasiencuentra[1]." ".$filasiencuentra[2]." ,".$filasiencuentra[3];
}
/*--------------------------------------MANTENIMIENTO-----------------------------------*/
//Listar registros
#BUCLE REPETITIVO
if(isset($_REQUEST['GRABAR'])){ // se envio el formulario?
for($x =1 ; $x <= 35; $x++){//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite
    $ALUMNOSECCION->setMSN1(htmlentities($_REQUEST['txtmensaje'.$x],ENT_QUOTES,"UTF-8"));
    $ALUMNOSECCION->UPDATE($_REQUEST['txtcodigo'.$x]);
}
    echo "<script>window.location = 'regmensaje.php'</script>";
}
/*--------------------------------------------------------------------------------------*/

        ?>
<div style="margin-left: 5%;margin-right: 5%;" id="primer">
<center><h3 style="color: green">Escriba el comentario u observaci&oacute;n sobre el desempe&ntilde;o de sus alumnos de tutor&iacute;a en el presente Bimestre.</h3></center>
            <?php
            $generalseccion=$DOCENTE->NAMESECCIOMICARGO($codigodocentenow);
            if($filanamesection=  mysql_fetch_array($generalseccion)){
                $gradoname=$filanamesection[0];
                $nameseccionnow=$filanamesection[1];
                $nomnivelsection=$filanamesection[2];
            }
            echo "<center><h4 style='color: peru'>SECCION: ".$gradoname." ".$nameseccionnow." ".$nomnivelsection."</h4>
                    <h5 style='color: peru'>TUTOR: ".$apellidosdocentenow."</h5>
                  </center>";
            ?>

<?php echo "<a TARGET = '_blank' href='printmesaje.php' class='btn btn-primary'>Ver como impresión</a>";?>
<br>
            <form id="frmmensaje" method="post" action="regmensaje.php?GRABAR=0">
                <fieldset>
                    <legend>A mis Alumnos:</legend>
                    <table class="table table-hover">
                        <tr class="gradeU">
                            <td style="display: none;"></td>
                            <td style="width: 3%;color: peru;text-transform: uppercase;"><b>N</b></td>
                            <td style="width: 30%;color: peru;text-transform: uppercase;"><b>Alumno</b></td>
                            <td style="width: 56%;color: peru;text-transform: uppercase;"><b>Observaci&oacute;n</b></td>
                        </tr>              
<?php
$whoisalumno=$DOCENTE->ALUMNOSDEMITUTORIA($codigodocentenow);
while ($row = mysql_fetch_array($whoisalumno)) {
                echo "
                    <tr>
                    <td style='display:none;'><input type='text' value='$row[0]' id='txtcodigo$row[1]' name='txtcodigo$row[1]'/></td>
                    <td><b>$row[1]</b></td>
                    <td><b>$row[2] $row[3] ,</b>$row[4]</td>
                    <td><input type='text' style='width:100%' value='$row[5]' id='txtmensaje$row[1]' name='txtmensaje$row[1]'/></td>
                    </tr>
                ";
}
        echo $row[6];
?>                      
                    </table>
                </fieldset>
                        <center>
                        <div class="form-actions">
                            <button type="submit"class="btn btn-primary">GRABAR/ACTUALIZAR LOS MENSAJES</button>
                        </div>
                        </center>
<br>                        <br><br><br>
            </form>

        </div>
<?php require_once 'Includes/modal-footer.php'; ?>
    </body>
    <?php }?>    
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>