<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Mis Notas Detalladas</title>
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
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
<body style="background-color: oldlace">
<?php 
require_once 'Includes/navegador.php';
echo '<div id="arriba">';
require_once 'Includes/infoalumno.php';
echo '</div>';
require_once 'Class/Asinatura.php';
$SINATURAGENERAL=new Asinatura();
?>
<!--TABS DE BIENVENIDA-->
<center>
<div class="bs-docs-example" style="width: 80%;text-align: center;">
<ul id="myTab" class="nav nav-tabs">
    <li><a href="#uno" data-toggle="tab"><i class="white icon-thumbs-up"></i>I BIMESTRE</a></li>
    <li class="active"><a href="#dos" data-toggle="tab"><i class=" icon-bullhorn"></i>II BIMESTRE</a></li>
    <li><a href="#tres" data-toggle="tab"><i class=" icon-bullhorn"></i>III BIMESTRE</a></li>
    <li><a href="#cuatro" data-toggle="tab"><i class=" icon-bullhorn"></i>IV BIMESTRE</a></li>
</ul>
<!---------------------BEGIN CONTENT------------------------------------------------------------>
<div id="myTabContent" class="tab-content">
    <!--CONTENT I-->
<div class="tab-pane fade" id="uno">

<fieldset>
<center><legend style="color: peru">MIRA EL AVANCE DE TUS NOTAS DEL I BIMESTRE</legend>
<form>
<select onchange="MostrarComponen(this.value,<?php echo $codeidsec;?>,<?php echo $idperson; ?>)">
<option value="">Elige un curso</option>
<?php
$sinagene=$SINATURAGENERAL->ListaDescriptiva($gradoedu, $niveledu);
while ($rowsinaturegene = mysql_fetch_array($sinagene)) {
echo "<option value='".$rowsinaturegene[0]."'>".$rowsinaturegene[4]."</option>";
}
?>
</select>
</form>
<div id="divcompo"></div><br><br><br><br><br><br>
</center>
</fieldset>

</div>

    <!------------------CONTENT II-->
    <div class="tab-pane fade in active" id="dos">
<fieldset>
<center><legend style="color: peru">MIRA EL AVANCE DE TUS NOTAS DEL II BIMESTRE</legend>
<form>
<select name="iibi" onchange="MostrarComponen2(this.value,<?php echo $codeidsec;?>,<?php echo $idperson; ?>)">
<option value="">Elige un curso</option>
<?php
$sinagene=$SINATURAGENERAL->ListaDescriptiva($gradoedu, $niveledu);
while ($rowsinaturegene = mysql_fetch_array($sinagene)) {
echo "<option value='".$rowsinaturegene[0]."'>".$rowsinaturegene[4]."</option>";
}
?>
</select>
</form>
<div id="divcompo2"></div><br><br><br><br><br><br><br><br><br><br><br>
</center>
</fieldset>
    </div>

    <!--CONTENT III-->
    <div class="tab-pane fade" id="tres">
        <form>
            <fieldset>
                <center>
                <legend style="color: peru">ELIGE EL CURSO Y MIRA EL III BIMESTRE</legend>
                <table>
                    <tr>
                        <td>
                            <select name="txtuno">
                                <option value="">Elige Curso</option>
                            </select>
                        </td>
                        <td><button class="btn btn-success">Ver Notas</button></td>
                    </tr>
                </table>
                    <br>
                <table class="display">
                    <tr class="gradeX">
                        <td><strong>Criterios De Evaluaci&oacute;n</strong></td>
                        <td><strong>Notas</strong></td>
                    </tr>
                </table>
                </center>
            </fieldset>
        </form>
    </div>
    <!--CONTENT IV-->
    <div class="tab-pane fade" id="cuatro">
        <form>
            <fieldset>
                <center>
                <legend style="color: peru">ELIGE EL CURSO Y MIRA EL IV BIMESTRE</legend>
                <table>
                    <tr>
                        <td>
                            <select name="txtuno">
                                <option value="">Elige Curso</option>
                            </select>
                        </td>
                        <td><button class="btn btn-success">Ver Notas</button></td>
                    </tr>
                </table>
                    <br>
                <table class="display">
                    <tr class="gradeX">
                        <td><strong>Criterios De Evaluaci&oacute;n</strong></td>
                        <td><strong>Notas</strong></td>
                    </tr>
                </table>
                </center>
            </fieldset>
        </form>
    </div>
</div>
<!----------------------END CONTENT------------------------------------------------------------>
</div>
</center>
        <?php require_once 'Includes/modal-footer.php'; ?>
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
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/ajax.js"></script>
</html>
