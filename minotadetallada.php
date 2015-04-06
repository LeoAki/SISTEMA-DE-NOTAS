<?php session_start();?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Mis Notas Detalladas</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else
{ ?>
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><link href="Include/data-table/css/demo_page.css" rel="stylesheet"/><link href="Include/data-table/css/demo_table.css" rel="stylesheet"/></head>
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
    <li><a href="#dos" data-toggle="tab"><i class=" icon-bullhorn"></i>II BIMESTRE</a></li>
    <li class="active"><a href="#tres" data-toggle="tab"><i class=" icon-bullhorn"></i>III BIMESTRE</a></li>
    <li><a href="#cuatro" data-toggle="tab"><i class=" icon-bullhorn"></i>IV BIMESTRE</a></li>
</ul>
<!---------------------BEGIN CONTENT------------------------------------------------------------>
<div id="myTabContent" class="tab-content">
    <!--CONTENT I-->
<div class="tab-pane fade" id="uno">

<fieldset>
<center><legend style="color: peru">MIRA TUS NOTAS DEL I BIMESTRE</legend>
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
<div class="tab-pane fade" id="dos">
<fieldset>
<center><legend style="color: peru">MIRA TUS NOTAS DEL II BIMESTRE</legend>
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
<div id="divcompo2"></div><br><br><br><br><br><br>
</center>
</fieldset>
</div>

<!--CONTENT III-->
<div class="tab-pane fade in active" id="tres">
<fieldset>
<center><legend style="color: peru">MIRA TUS NOTAS DEL <strong>III</strong> BIMESTRE</legend>
<form>
<select name="iibi" onchange="MostrarComponen3(this.value,<?php echo $codeidsec;?>,<?php echo $idperson; ?>)">
<option value="">Elige un curso</option>
<?php
$sinagene3=$SINATURAGENERAL->ListaDescriptiva($gradoedu, $niveledu);
while ($rowsinaturegene = mysql_fetch_array($sinagene3)) {
echo "<option value='".$rowsinaturegene[0]."'>".$rowsinaturegene[4]."</option>";
}
?>
</select>
</form>
<div id="divcompo3"></div><br><br><br><br><br><br>
</center>
</fieldset>
</div>


    <!--CONTENT IV-->
<div class="tab-pane fade" id="cuatro">
    <fieldset>
    <center><legend style="color: peru">MIRA EL AVANCE DE TUS NOTAS DEL <strong>IV</strong> BIMESTRE</legend>
    <form>
    <select name="iiibi" onchange="MostrarComponen4(this.value,<?=$codeidsec;?>,<?=$idperson; ?>)">
    <option value="">Elige un curso</option>
    <?php
    $sinagene4=$SINATURAGENERAL->ListaDescriptiva($gradoedu, $niveledu);
    while ($rowsinaturegene4 = mysql_fetch_array($sinagene4)) {
    echo "<option value='".$rowsinaturegene4[0]."'>".$rowsinaturegene4[4]."</option>";
    }
    ?>
    </select>
    </form>
    <div id="divcompo4leo"></div><br><br><br><br><br><br>
    </center>
    </fieldset>
</div>
</div>
<!----------------------END CONTENT------------------------------------------------------------>
</div>
</center>
<?php require_once 'Includes/modal-footer.php'; ?>
    </body>
<?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<!--<script type="text/javascript" src="Js/jquery.innerfade.js"></script>--><script type="text/javascript" src="Js/ajax.js"></script>
</html>