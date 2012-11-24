<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Registra Los Criterios Del Curso</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else {
?>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
</head>
    <body>
<?php
require_once 'Includes/navegador.php';
require_once 'Class/Component.php';
require_once 'Class/Indicador.php';
require_once 'Class/RegistroAlumno.php';
$INDICAXD= new Indicador();
$REGISTROALUMNO= new RegistroAlumno();
/*--------------------------------------MANTENIMIENTO-----------------------------------*/


?>
<center><h3 style="color: green">Registro De Notas por asignatura- IV BIMESTRE</h3>
    <h4>Indicadores</h4>
<?PHP
$asina = $_GET['sinatura'];
$seccion = $_GET['seccion'];
$registro=$_GET['registro'];
?>
<table>
<?php
$COMPO = new Component();
$mysql=$COMPO->ListarDatosAsignatura($asina);
if($rowgeneral=  mysql_fetch_array($mysql)){
    $variable1=$rowgeneral['grado'];
    $variable2=$rowgeneral['nomnivel'];
    $variable3=$rowgeneral['asinatura'];
}
?>
</table>
</center>

<table class="display">
<?php
$COMPONENTE=new Component();
$listar=$COMPONENTE->LISTAR($asina);
while ($row = mysql_fetch_array($listar)) {
echo "
<tr class='gradeX'>      
</tr>";
    $lista=$INDICAXD->LISTAR($row[0]);
    while ($row2 = mysql_fetch_array($lista)) {
        echo "
            <tr class='gradeA'>
                <td class='center'><a>" .$row[1].".". $row2[3]. "</a></td>
                <td>".$row2[2]."</td>
             </tr>
            ";
    }
}
?>
</table>
<?php
echo
"
    <center>
    <h4>".$variable1." Grado De " .$variable2."    "." Asignatura: ".$variable3." </h4>
    </center>    ";
?>
<center><h3 style="color: green">Lista De Alumnos</h3></center>
<form name="frmregistro" method="post" action="registra.php?sinatura=<?php echo $asina;?>&seccion=<?php echo $seccion;?>&registro=<?php echo $registro;?>"><!--?sinatura=68&seccion=212&registro=412-->
<center>
<table class="table">
<thead>
<tr class="">
    <td></td>
    <td>N°</td>
    <td>Alumno</td>
<?php
$th=$COMPONENTE->LISTAR($asina);
    while ($roth = mysql_fetch_array($th)) {
        $listath=$INDICAXD->LISTAR($roth[0]);
        while ($rowth = mysql_fetch_array($listath)) {
            echo "
    <td class='center' width:2%;>" .$roth[1].".". $rowth[3]. "</td>
                ";
        }
echo "
    <td style='color:peru;'>P".$roth[1]."</td>";
    }
?>
    <td style="color:peru;">PB</td>
</tr>
</thead>
<?php
$reAl = new RegistroAlumno();
$listaalumnado=$reAl->ListaAlumnoSeccion($seccion);
while ($alumno = mysql_fetch_array($listaalumnado)) {
echo "
<tr>
<td><input type='hidden' name='".$alumno[0]."txtalumno' id='txtalumno' value='".$alumno[4]."'/></td>
<td style='width:3%;'>".$alumno[0]."</td>
<td style='width:25%;'>".$alumno[1]."".$alumno[2]."   ,".$alumno[3]."</td>
"
#<td style='width:25%;'>".$alumno[1]."   ".$alumno[2]."   ,".$alumno[3]."</td>
    ;

$td=$COMPONENTE->LISTAR($asina);
    while ($ro = mysql_fetch_array($td)) {
        $lista=$INDICAXD->LISTAR($ro[0]);
        while ($row22 = mysql_fetch_array($lista)) {
            echo "
<td class='center' width:3%;><input type='text' id='".$alumno[0]."p".$ro[1].$row22[3]."' name='".$alumno[0]."p".$ro[1].$row22[3]."' style='width:89%;' maxlength=2 onkeypress='tabular(event,this); return justNumbers(event);' onChange='validaNum(this.value,5,20)'; /></td>
                ";
        }
        echo "<td><input type='text' style='width:80%;' id='".$alumno[0]."promedio".$ro[1]."' name='".$alumno[0]."promedio".$ro[1]."' readonly/></td>";
    }
echo "<td><input type='text' style='width:80%;' id='".$alumno[0]."pb' name='".$alumno[0]."pb' readonly/></td>";
echo "
</tr>
";
}
?>
</table>
</center>
<center>
<div class="form-actions">
<button type="submit"class="btn btn-primary" id="btnsave" name="btnsave">GRABAR</button>
<button type="button" id="btnlist" name="btnlist" class="btn btn-danger">EXPORTAR A EXCEL</button>
</div>
</center>           
</form>


<?php
require_once 'Includes/modal-footer.php';?>
<?php
        }
?>
    </body>
</html>
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

<script type="text/javascript">
function justNumbers(e)
{
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
    return true;
     
    return /\d/.test(String.fromCharCode(keynum));
}

function tabular(e,obj) {
  tecla=(document.all) ? e.keyCode : e.which;
  if(tecla!=13) return;
  frm=obj.form;
  for(i=0;i<frm.elements.length;i++)
    if(frm.elements[i]==obj) {
      if (i==frm.elements.length-1) i=-1;
      break }
  frm.elements[i+1].focus();
  return false;
}

function validaNum(n,mini,maxi)
{
n = parseInt(n)
if ( n<mini || n>maxi )
alert("El valor debe ser entre 05 y 20");
n.value()=0;
}

</script>
<!---laura tolentino del 5to G informada en nominas- ->