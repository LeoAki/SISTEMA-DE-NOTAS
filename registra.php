<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--REGISTRA LAS NOTAS DOCENTE</title>
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
<script type="text/javascript">
    function cambiaColor(){
    var i
    for (i=0;i<document.frmregistro.group1.length;i++){
       if (document.frmregistro.group1[i].checked)
          break;
    }
    valorcombonavegacion=document.frmregistro.group1[i].value;
    alert('has elegido llenar registros de manera: '+ valorcombonavegacion);
    document.cookie='valuecombix='+valorcombonavegacion;
}
</script>
</head>
    <body>
<?php
require_once 'Includes/navegador.php';
require_once 'Class/Component.php';
require_once 'Class/Indicador.php';
require_once 'Class/RegistroAlumno.php';
$INDICAXD= new Indicador();
$REGISTROALUMNO= new RegistroAlumno();
$_COOKIE["valuecombix"];
?>
<center><h3 style="color: green">Registro De Notas por asignatura- IV BIMESTRE</h3>
    <h4>Indicadores</h4>
<?PHP
$asina = $_GET['sinatura'];
$seccion = $_GET['seccion'];
$registro=$_GET['registro'];


/*--------------------------------------MANTENIMIENTO-----------------------------------*/
//Listar registros
#BUCLE REPETITIVO
if(isset($_REQUEST['GRABAR'])){ // se envio el formulario?
$queryalu=$REGISTROALUMNO->ListaAlumnoSeccion($seccion);

while ($rowgeneral = mysql_fetch_array($queryalu)) {
    $count=$count+1;
}

for($x =1 ; $x <= 35; $x++){//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite

       $REGISTROALUMNO->setAlumnoregistro($_REQUEST[$x.'txtalumnoregistro']);
       $REGISTROALUMNO->setRegistro($_REQUEST['txtregistro']);
       $REGISTROALUMNO->setAlumnoseccion($_REQUEST[$x.'txtidalumno']);
       $REGISTROALUMNO->setSituacion();
       $REGISTROALUMNO->setPromedio1($_REQUEST[$x.'promedio1']);
       $REGISTROALUMNO->setPromedio2($_REQUEST[$x.'promedio2']);
       $REGISTROALUMNO->setPromedio3($_REQUEST[$x.'promedio3']);
       $REGISTROALUMNO->setPromedio4($_REQUEST[$x.'promedio4']);
       $REGISTROALUMNO->setPromedio5($_REQUEST[$x.'promedio5']);
       $REGISTROALUMNO->setPb($_REQUEST[$x.'pb']);

       $REGISTROALUMNO->setP11($_REQUEST[$x.'p11']);       $REGISTROALUMNO->setP12($_REQUEST[$x.'p12']);
       $REGISTROALUMNO->setP13($_REQUEST[$x.'p13']);       $REGISTROALUMNO->setP14($_REQUEST[$x.'p14']);
       $REGISTROALUMNO->setP15($_REQUEST[$x.'p15']);       $REGISTROALUMNO->setP16($_REQUEST[$x.'p16']);
       $REGISTROALUMNO->setP17($_REQUEST[$x.'p17']);       $REGISTROALUMNO->setP18($_REQUEST[$x.'p18']);
       $REGISTROALUMNO->setP19($_REQUEST[$x.'p19']);       $REGISTROALUMNO->setP110($_REQUEST[$x.'p110']);

       $REGISTROALUMNO->setP21($_REQUEST[$x.'p21']);       $REGISTROALUMNO->setP22($_REQUEST[$x.'p22']);
       $REGISTROALUMNO->setP23($_REQUEST[$x.'p23']);       $REGISTROALUMNO->setP24($_REQUEST[$x.'p24']);
       $REGISTROALUMNO->setP25($_REQUEST[$x.'p25']);       $REGISTROALUMNO->setP26($_REQUEST[$x.'p26']);
       $REGISTROALUMNO->setP27($_REQUEST[$x.'p27']);       $REGISTROALUMNO->setP28($_REQUEST[$x.'p28']);
       $REGISTROALUMNO->setP29($_REQUEST[$x.'p29']);       $REGISTROALUMNO->setP210($_REQUEST[$x.'p210']);

       $REGISTROALUMNO->setP31($_REQUEST[$x.'p31']);       $REGISTROALUMNO->setP32($_REQUEST[$x.'p32']);
       $REGISTROALUMNO->setP33($_REQUEST[$x.'p33']);       $REGISTROALUMNO->setP34($_REQUEST[$x.'p34']);
       $REGISTROALUMNO->setP35($_REQUEST[$x.'p35']);       $REGISTROALUMNO->setP36($_REQUEST[$x.'p36']);
       $REGISTROALUMNO->setP37($_REQUEST[$x.'p37']);       $REGISTROALUMNO->setP38($_REQUEST[$x.'p38']);
       $REGISTROALUMNO->setP39($_REQUEST[$x.'p39']);       $REGISTROALUMNO->setP310($_REQUEST[$x.'p310']);

       $REGISTROALUMNO->setP41($_REQUEST[$x.'p41']);       $REGISTROALUMNO->setP42($_REQUEST[$x.'p42']);
       $REGISTROALUMNO->setP43($_REQUEST[$x.'p43']);       $REGISTROALUMNO->setP44($_REQUEST[$x.'p44']);
       $REGISTROALUMNO->setP45($_REQUEST[$x.'p45']);       $REGISTROALUMNO->setP46($_REQUEST[$x.'p46']);
       $REGISTROALUMNO->setP47($_REQUEST[$x.'p47']);       $REGISTROALUMNO->setP48($_REQUEST[$x.'p48']);
       $REGISTROALUMNO->setP49($_REQUEST[$x.'p49']);       $REGISTROALUMNO->setP410($_REQUEST[$x.'p410']);

       $REGISTROALUMNO->setP51($_REQUEST[$x.'p51']);       $REGISTROALUMNO->setP52($_REQUEST[$x.'p52']);
       $REGISTROALUMNO->setP53($_REQUEST[$x.'p53']);       $REGISTROALUMNO->setP54($_REQUEST[$x.'p54']);
       $REGISTROALUMNO->setP55($_REQUEST[$x.'p55']);       $REGISTROALUMNO->setP56($_REQUEST[$x.'p56']);
       $REGISTROALUMNO->setP57($_REQUEST[$x.'p57']);       $REGISTROALUMNO->setP58($_REQUEST[$x.'p58']);
       $REGISTROALUMNO->setP59($_REQUEST[$x.'p59']);       $REGISTROALUMNO->setP510($_REQUEST[$x.'p510']);

       $REGISTROALUMNO->GRABAR();
}

echo "<script languaje='javascript' type='text/javascript'>

            window.close();</script>";
}

/*--------------------------------------FIN DEL MANTENIMIENTO-----------------------------------*/
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
<?php echo "<a TARGET = '_blank' href='imprimir_reg.php?sinatura=".$asina."&seccion=".$seccion."&registro=".$registro."' class='btn btn-primary'>Ver como impresión</a>";?>
<?php
$miVariable =  $_COOKIE["valuecombix"];
echo
"
    <center>
    <h4>".$variable1." Grado De " .$variable2."    "." Asignatura: ".$variable3." </h4>
    </center>    ";
?>
<center><h3 style="color: green">Lista De Alumnos</h3></center>
<form name="frmregistro" method="post" action="registra.php?GRABAR=0"><!--?sinatura=68&seccion=212&registro=412-->
<div style="background-color: greenyellow;">
<center>
<b>LLENAR REGISTROS DE MANERA: </b>
<input type="Radio" name="group1"  value="horizontal" checked> Horizontal
<input type="Radio" name="group1"  value="vertical" >Vertical
<br>
<input type="Button" name="" value="Cambiar forma de navegación" onclick="cambiaColor();window.location.reload()">
<br>
<a>SE LLENARAN LOS REGISTROS DE MANERA : <b><?php echo $miVariable; ?></b></a><BR>
<a>DOCENTE USA LA TECLA TAB PARA LA NAVEGACI&Oacute;N PORFAVOR</a>
</center>
</div>    
<br>
<center>
<table class="">
<thead>
<tr class="">
    <td></td>
    <td></td>
    <td></td>
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
<td><td><input type='hidden' name='txtregistro' id='txtregistro' value='".$registro."'/></td></td>
<td><input type='hidden' name='".$alumno[0]."txtidalumno' id='".$alumno[0]."txtidalumno' value='".$alumno[4]."'/></td>
<td><input type='hidden' name='".$alumno[0]."txtalumnoregistro' id='".$alumno[0]."txtalumnoregistro' value='".$alumno[4].$seccion.$asina."'/></td>
<td style='width:3%;'>".$alumno[0]."</td>
<td style='width:25%;'>".$alumno[1]."  ".$alumno[2]."   ,".$alumno[3]."</td>
"

    ;

$td=$COMPONENTE->LISTAR($asina);
    while ($ro = mysql_fetch_array($td)) {
        $lista=$INDICAXD->LISTAR($ro[0]);
        while ($row22 = mysql_fetch_array($lista)) {


$listadice=RegistroAlumno::LISTAR($alumno[4].$seccion.$asina);

while ($row11 = mysql_fetch_array($listadice)) {
    $cuenta;
                $valorcelda=$ro[1].$row22[3];
                $valueespacio=$row11["p$valorcelda"];

                $suma+=$valueespacio ;
                $cuenta=$cuenta+1;
                #$compromedio=$row11["promedio$valorcelda"]=($suma/$cuenta);
                if ($valueespacio==0){
                    $valueespacio="";
                }
                $pbb=$row11['9'];
}
if($miVariable=="vertical"){
    $index=0;
}else{
    $index=1;
}


            echo "
<td class='center' width:3%;><input tabindex='".$row22[$index]."' placeholder='FN' type='text' id='".$alumno[0]."p".$ro[1].$row22[3]."' name='".$alumno[0]."p".$ro[1].$row22[3]."' value='".$valueespacio."' style='width:89%;' maxlength=2 onkeypress='mover(this, event);tabular(event,this); return justNumbers(event);' onChange='validaNum(this.value,5,20)'; /></td>
                ";
        }
$compromedio=$row["promedio$valorcelda"]=round(($suma/$cuenta));
        echo "<td><input type='text' style='width:80%;'  value=".$compromedio." id='".$alumno[0]."promedio".$ro[1]."' name='".$alumno[0]."promedio".$ro[1]."' readonly/></td>";
$suma=0;
$cuenta=0;
    }
    $suma=0;
    $cuenta=0;
echo "<td><input type='text' style='width:80%;' id='".$alumno[0]."pb' value=".$pbb."  name='".$alumno[0]."pb' readonly/></td>";
echo "
</tr>
";
}
?>
</table>
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

     $("input[type='text']").focusout(function () {
        referencia = this.id;
        fila = referencia.substring(0,referencia.indexOf('p'));
        indicador = referencia.substring(referencia.indexOf('p')+1,referencia.indexOf('p')+2);
        tnota = referencia.substring(0,referencia.indexOf('p')+2);    
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
  frmregistro.elements[i+1].focus();
  return false;
}

function validaNum(n,mini,maxi)
{
n = parseInt(n)
if ( n<mini || n>maxi )
alert("El valor debe ser entre 05 y 20");
n.value()=0;
}

function sumar(n,orden,compo) {
n=parseInt(n);
var suma=n+n;
var orden=orden;
var compone=compo;
var sumado=orden+""+compone;
document.frmregistro.sumado.value=suma/2;
}

</script>
<script type="text/javascript">
function mover(campo, event)
{
//sacamos en la variable enterCodigo el código de tecla
//40 abajo
//39 derecha
//37 izquierda
//38 arriba
//alert(enterCodigo);
var enterCodigo = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;

var i;
var anchura = 3;//número de elementos del formulario en horizontal
var altura = 4;//número de elementos del formulario en vertical

//sacamos el campo que tiene el foco y guardamos su orden en la variable "i"
for (i = 0; i < campo.frmregistro.elements.length; i++)
if (campo == campo.frmregistro.elements)
break;

//Un alert para saber en qué número de campo está, va de 0 al número de campos -1
//alert(i);
if (enterCodigo == 40)
{
//pulsa el cursor de abajo
if (i >= (anchura * (altura - 1)))//está en la última fila y hay que subirlo a la primera
{
i = i - (anchura * (altura - 1));
}//fin del i>=
else
{//está en la primera o segunda fila
i = i + anchura;//avanzamos de fila
}//fin del else
}//fin del if enterCodigo == 40
else if (enterCodigo == 38)
{
//pulsa el cursor de arriba
if (i <= (anchura - 1))//está en la primera fila y hay que bajarlo a la última
{
i = i + (anchura * (altura - 1));
}//fin del i>=
else
{//está en la segunda o tercera fila
i = i - anchura;//retrocedemos de fila
}//fin del else
}//fin del if enterCodigo == 38
else if (enterCodigo == 37)
{
//pulsa el cursor de izquierda
if (i % anchura == 0)//está en la primera columna y hay que desplazarlo a la última
{
i = i + (anchura - 1);
}//fin del i%
else
{//está en la segunda o tercera columna
i = i - 1;//retrocedemos de fila
}//fin del else
}//fin del if enterCodigo == 37
else if (enterCodigo == 39)
{
//pulsa el cursor de derecha
if (i % anchura == (anchura - 1))//está en la última columna y hay que desplazarlo a la primera
{
i = i - (anchura - 1);
}//fin del i%
else
{//está en la primera o segunda columna
i = i + 1;//retrocedemos de fila
}//fin del else
}//fin del if enterCodigo == 39

// Ponemos el foco al elemento de formulario
campo.frmregistro.elements.focus();
}
</script>