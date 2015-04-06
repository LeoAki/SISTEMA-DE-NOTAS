<?php session_start();?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Registra tus notas</title>
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
</head>
<body>
<?
require_once 'Includes/navegador.php';
require_once 'Class/Docente.php';$Doce= new Docente();$dnidocente=$_GET['dnidocente'];
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
    session_destroy();
    echo "<script>window.location = 'index.php'</script>";
}else {
?>
<div style="margin-left: 2%;margin-right: 2%;">
<center><h3 style="color: green">Registro De Notas</h3></center>
    <fieldset>
    <div class='alert alert-success'><i class='icon-user'></i><i class='icon-user'></i>---> Primaria & Secundaria</div><div class='alert alert-danger'><i class='icon-user'></i> ----> Inicial</div>

    <table class="table table-bordered">
    <thead>
    <tr><th style="width: 8%;">Registro</th><th style="width: 15%;">Secci&oacute;n</th><th style="width: 15%">Asignatura</th><th style="width: 15%;"><center>I Bimestre</center></th><th style="width: 15%;"><center>II Bimestre</center></th><th style="width: 15%;"><center>III Bimestre</center></th><th style="width: 15%;"><center>IV Bimestre</center></th><th style="width: 14%;"><center>ANUAL</center></th></tr>
    </thead>
    <tbody>
<?
$lista=$Doce->RegistroDocente($dnidocente);
while ($row = mysql_fetch_array($lista)):
$estado="";$estado1="";

if($row[10]==0) $estado1='<a style=\'color:green;font-size:11px;\'>[COMPLETO]</a>';
if($row[10]==1) $estado1='<a style=\'color:peru;font-size:11px;\'>[PROCESO]</a>';
if($row[10]==2) $estado1='<a style=\'color:green;font-size:11px;\'>[COMPLETO]</a>';
if($row[10]==3) $estado1='<a style=\'color:blue;font-size:11px;\'>[POR REVISAR]</a>';

if($row[11]==0) $estado='<a style=\'color:red;font-size:11px;\'>[DEBE NOTA]</a>';
if($row[11]==1) $estado='<a style=\'color:peru;font-size:11px;\'>[PROCESO]</a>';
if($row[11]==2) $estado='<a style=\'color:green;font-size:11px;\'>[COMPLETO]</a>';
if($row[11]==3) $estado='<a style=\'color:blue;font-size:11px;\'>[POR REVISAR]</a>';

if($row[12]==0) $estado3='<a style=\'color:red;font-size:11px;\'>[DEBE NOTA]</a>';
if($row[12]==1) $estado3='<a style=\'color:peru;font-size:11px;\'>[PROCESO]</a>';
if($row[12]==2) $estado3='<a style=\'color:green;font-size:11px;\'>[COMPLETO]</a>';
if($row[12]==3) $estado3='<a style=\'color:blue;font-size:11px;\'>[POR REVISAR]</a>';

if($row[13]==0) $estado4='<a style=\'color:red;font-size:11px;\'>[DEBE NOTA]</a>';
if($row[13]==1) $estado4='<a style=\'color:peru;font-size:11px;\'>[PROCESO]</a>';
if($row[13]==2) $estado4='<a style=\'color:green;font-size:11px;\'>[COMPLETO]</a>';
if($row[13]==3) $estado4='<a style=\'color:blue;font-size:11px;\'>[POR REVISAR]</a>';
?>
<tr><td>Reg. N&#176; <?=$row[0]?></td><td><?=$row[2].' '.$row[3].' DE '.$row[1]?></td><td><?=$row[7]?></td>


<td><center>
<a id='unover' TARGET = '_blank' href='imprimir_reg.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i><i class='icon-user'></i>]</a>&nbsp;&nbsp;-&nbsp;&nbsp;
<a id='dosver' TARGET = '_blank' href='imprimir_reginicial.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i>]</a>&nbsp;&nbsp;-
<?=$estado1?></center></td>


<td><center>
<a id='unover' TARGET = '_blank' href='imprimir_reg2.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i><i class='icon-user'></i>]</a>&nbsp;&nbsp;-&nbsp;&nbsp;
<a id='dosver' TARGET = '_blank' href='imprimir_reginicial2.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i>]</a>&nbsp;&nbsp;-
<?=$estado?></center></td>


<td><center>
<a id='unover' TARGET = '_blank' href='imprimir_reg3.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i><i class='icon-user'></i>]</a>&nbsp;&nbsp;-&nbsp;&nbsp;
<a id='dosver' TARGET = '_blank' href='imprimir_reginicial3.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i>]</a>&nbsp;&nbsp;-
<?=$estado3?>
    <?php if($row[1]==='PRIMARIA'){ ?><br> <a  TARGET = '_blank' href='letras3_reg.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>EN LETRAS<i class='icon icon-ok'></i></a><?php } ?>
</center></td>


<td><center>
<a id='unover' TARGET = '_blank' href='imprimir_reg4.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i><i class='icon-user'></i>]</a>&nbsp;&nbsp;-&nbsp;&nbsp;
<a id='dosver' TARGET = '_blank' href='imprimir_reginicial4.php?sinatura=<?=$row[8]?>&seccion=<?=$row[9]?>&registro=<?=$row[0]?>'>[<i class='icon-user'></i>]</a>&nbsp;&nbsp;-
<?=$estado4?></center></td>


<td><center><i class='icon-eye-close'></i></center></td></tr>
<?
endwhile;
?>
                </tbody>
            </table>
        </fieldset>

</div>

<br><br><br><br><br><br>
        <?php require_once 'Includes/modal-footer.php';?>
    </body>
    <?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
<script type="text/javascript">
	$('#unover').tooltip({title:"Primaria o Secundaria",placement:'left'});
	$('#dosver').tooltip({title:"Inicial",placement:'right'});
</script>
</html>