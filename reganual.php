<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--REGISTRA ANUAL</title>
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
require_once 'Class/RegistraAnual.php';
$REGISTROALUMNO= new RegistraAnual();

$asina = $_GET['sinatura'];
$seccion = $_GET['seccion'];
$registro=$_GET['registro'];

/*--------------------------------------MANTENIMIENTO-----------------------------------*/
//Listar registros
#BUCLE REPETITIVO
if(isset($_REQUEST['GRABAR'])){ // se envio el formulario?
$queryalu=$REGISTROALUMNO->ListaAlumnoSeccion($seccion);


for($x =1 ; $x <= 35; $x++){//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite

    
}

echo "<script languaje='javascript' type='text/javascript'>

            window.close();</script>";
}

/*--------------------------------------FIN DEL MANTENIMIENTO-----------------------------------*/
?>
<?php
$COMPO = new Component();
$mysql=$COMPO->ListarDatosAsignatura($asina);
if($rowgeneral=  mysql_fetch_array($mysql)){
    $variable1=$rowgeneral['grado'];
    $variable2=$rowgeneral['nomnivel'];
    $variable3=$rowgeneral['asinatura'];
}
    echo "<center><h4>".$variable1." Grado de " .$variable2."    "." Asignatura: ".$variable3." </h4></center>";
?>

<form name="frmreganual" method="post" action="reganual.php?GRABAR=0"><!--?sinatura=68&seccion=212&registro=412-->
    <center>
        <div style="width: 65%;">
<table>
<tr>
    <th style='width:5%;display: none;'></th>
    <th style='width:5%;display: none;'></th>
    <th style='width:5%;display: none;'></th>
    <th style='width:5%;'><a style="color: green">N°</a></th>
    <th style='width:40%;'><a style="color: green">Alumno</a></th>
    <th><a style="color: green">I bimestre</a></th>
    <th><a style="color: green">II bimestre</a></th>
    <th><a style="color: green">III bimestre</a></th>
    <th><a style="color: green">IV bimestre</a></th>
    <th><a style="color: green">ANUAL</a></th>
    <th><a style="color: green">Exonerado</a></th>
</tr>

<?php
$reAl = new RegistraAnual();
$listaalumnado=$reAl->ListaAlumnoSeccion($seccion);

while ($alumno = mysql_fetch_array($listaalumnado)) {
echo "
<tr>
    <td style='display:none;'><input type='hidden' name='txtregistro' id='txtregistro' value='".$registro."'/></td>
    <td style='display:none;'><input type='hidden' name='".$alumno[0]."txtidalumno' id='".$alumno[0]."txtidalumno' value='".$alumno[4]."'/></td>
    <td style='display:none;'><input type='hidden' name='".$alumno[0]."txtalumnoregistro' id='".$alumno[0]."txtalumnoregistro' value='".$alumno[4].$seccion.$asina."'/></td>
    <td>".$alumno[0]."</td>
    <td>".$alumno[1]."  ".$alumno[2]."   ,".$alumno[3]."</td>
    <td><input type='text' name='$alumno[0]b1' id='$alumno[0]b1' style='width:79%;' maxlength=2/></td>
    <td><input type='text' name='$alumno[0]b2' id='$alumno[0]b2' style='width:79%;' maxlength=2/></td>
    <td><input type='text' name='$alumno[0]b3' id='$alumno[0]b3' style='width:79%;' maxlength=2/></td>
    <td><input type='text' name='$alumno[0]b4' id='$alumno[0]b4' style='width:79%;' maxlength=2/></td>
    <td><input type='text' name='$alumno[0]anual' id='$alumno[0]anual' style='width:79%;' maxlength=2/></td>
    <td><input type='text' name='$alumno[0]exonerado' id='$alumno[0]exonerado' style='width:79%;' maxlength=2/></td>
</tr>
";
}
?>
</table>
</div>                    
</center>
<center>
<div class="form-actions">
<button type="submit"class="btn btn-primary" id="btnsavea" name="btnsavea">GRABAR O ACTUALIZAR NOTAS</button>
</div>
</center>
</form>


<?php
require_once 'Includes/modal-footer.php';?>
<?php
        }
?>
    </body>
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


     $("input[type='text']").focusout(function () {
        referencia = this.id;
        fila = referencia.substring(0,referencia.indexOf('b'));
        indicador = referencia.substring(referencia.indexOf('b')+1,referencia.indexOf('p')+2);
        tnota = referencia.substring(0,referencia.indexOf('b')+2);    
        /*************************PROMEDIO POR COMPONENTE**************************/        
        $("#"+fila+"promedio"+indicador).val(Math.round(get_promedio(tnota)));
        /**************************************************************************/    
        /*************************PROMEDIO POR BIMESTRE****************************/
        $("#"+fila+"pb").val(Math.round(get_promedio(fila+"promedio")));
        /**************************************************************************/
     });
    function get_promedio(tnota){
      var promedio=0; var suma = 0; var notas = 0;
      $('input[name^="'+tnota+'"]').each( function(){
          notas = notas +1;
          suma = suma + parseInt($.trim($(this).val()) == '' ? 0 : $(this).val());      
        });
        promedio = (suma == 0) ? 0 : suma / notas;
        return promedio;
    }
</script>
</html>