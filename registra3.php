<?php session_start();?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE ::: Registra Notas</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();echo "<script>window.location = 'index.php'</script>";
}else {
?>
<!---BOOTSTRAP-CSS---->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><link href="Include/data-table/css/demo_page.css" rel="stylesheet"/><link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
<script type="text/javascript">
    function cambiaColor(){
    var i
    for (i=0;i<document.frmregistro.group1.length;i++){
       if (document.frmregistro.group1[i].checked)
          break;
    }
    valorcombonavegacion=document.frmregistro.group1[i].value;alert('has elegido llenar registros de manera: '+ valorcombonavegacion);document.cookie='valuecombix='+valorcombonavegacion;
}
</script>
</head>
<body>
<?php require_once 'Class/Component.php';require_once 'Class/Indicador.php';require_once 'Class/RegistroAlumno.php';
$INDICAXD= new Indicador();$REGISTROALUMNO= new RegistroAlumno();$_COOKIE["valuecombix"]; ?> <center><h3 style="color: green">Registro De Notas por asignatura- III BIMESTRE</h3>
<?PHP
$asina = $_GET['sinatura'];$seccion = $_GET['seccion'];$registro=$_GET['registro'];
/*----MANTENIMIENTO-----*/
if(isset($_REQUEST['GRABAR'])){
$queryalu=$REGISTROALUMNO->ListaAlumnoSeccion($seccion);
for($x =1 ; $x <= 35; $x++){
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
       $REGISTROALUMNO->setP111($_REQUEST[$x.'p111']);     $REGISTROALUMNO->setP112($_REQUEST[$x.'p112']);
       $REGISTROALUMNO->setP113($_REQUEST[$x.'p113']);

       $REGISTROALUMNO->setP21($_REQUEST[$x.'p21']);       $REGISTROALUMNO->setP22($_REQUEST[$x.'p22']);
       $REGISTROALUMNO->setP23($_REQUEST[$x.'p23']);       $REGISTROALUMNO->setP24($_REQUEST[$x.'p24']);
       $REGISTROALUMNO->setP25($_REQUEST[$x.'p25']);       $REGISTROALUMNO->setP26($_REQUEST[$x.'p26']);
       $REGISTROALUMNO->setP27($_REQUEST[$x.'p27']);       $REGISTROALUMNO->setP28($_REQUEST[$x.'p28']);
       $REGISTROALUMNO->setP29($_REQUEST[$x.'p29']);       $REGISTROALUMNO->setP210($_REQUEST[$x.'p210']);
       $REGISTROALUMNO->SETP211($_REQUEST[$x.'p211']);     $REGISTROALUMNO->SETP212($_REQUEST[$x.'p212']);

       $REGISTROALUMNO->setP31($_REQUEST[$x.'p31']);       $REGISTROALUMNO->setP32($_REQUEST[$x.'p32']);
       $REGISTROALUMNO->setP33($_REQUEST[$x.'p33']);       $REGISTROALUMNO->setP34($_REQUEST[$x.'p34']);
       $REGISTROALUMNO->setP35($_REQUEST[$x.'p35']);       $REGISTROALUMNO->setP36($_REQUEST[$x.'p36']);
       $REGISTROALUMNO->setP37($_REQUEST[$x.'p37']);       $REGISTROALUMNO->setP38($_REQUEST[$x.'p38']);
       $REGISTROALUMNO->setP39($_REQUEST[$x.'p39']);       $REGISTROALUMNO->setP310($_REQUEST[$x.'p310']);
       $REGISTROALUMNO->SETP311($_REQUEST[$x.'p311']);     $REGISTROALUMNO->SETP312($_REQUEST[$x.'p312']);
       $REGISTROALUMNO->SETP313($_REQUEST[$x.'p313']);

       $REGISTROALUMNO->setP41($_REQUEST[$x.'p41']);       $REGISTROALUMNO->setP42($_REQUEST[$x.'p42']);
       $REGISTROALUMNO->setP43($_REQUEST[$x.'p43']);       $REGISTROALUMNO->setP44($_REQUEST[$x.'p44']);
       $REGISTROALUMNO->setP45($_REQUEST[$x.'p45']);       $REGISTROALUMNO->setP46($_REQUEST[$x.'p46']);
       $REGISTROALUMNO->setP47($_REQUEST[$x.'p47']);       $REGISTROALUMNO->setP48($_REQUEST[$x.'p48']);
       $REGISTROALUMNO->setP49($_REQUEST[$x.'p49']);       $REGISTROALUMNO->setP410($_REQUEST[$x.'p410']);
       $REGISTROALUMNO->SETP411($_REQUEST[$x.'p411']);     $REGISTROALUMNO->SETP412($_REQUEST[$x.'p412']);

       $REGISTROALUMNO->setP51($_REQUEST[$x.'p51']);       $REGISTROALUMNO->setP52($_REQUEST[$x.'p52']);
       $REGISTROALUMNO->setP53($_REQUEST[$x.'p53']);       $REGISTROALUMNO->setP54($_REQUEST[$x.'p54']);
       $REGISTROALUMNO->setP55($_REQUEST[$x.'p55']);       $REGISTROALUMNO->setP56($_REQUEST[$x.'p56']);
       $REGISTROALUMNO->setP57($_REQUEST[$x.'p57']);       $REGISTROALUMNO->setP58($_REQUEST[$x.'p58']);
       $REGISTROALUMNO->setP59($_REQUEST[$x.'p59']);       $REGISTROALUMNO->setP510($_REQUEST[$x.'p510']);
       $REGISTROALUMNO->SETP511($_REQUEST[$x.'p511']);     $REGISTROALUMNO->SETP512($_REQUEST[$x.'p212']);

       $REGISTROALUMNO->GRABAR3();
}
echo '<script languaje=\'javascript\' type=\'text/javascript\'>window.close();</script>';}
/*--FIN DEL MANTENIMIENTO----*/
?>
<table>
<?php
$COMPO = new Component();$mysql=$COMPO->ListarDatosAsignatura($asina);
if($rowgeneral=  mysql_fetch_array($mysql)){
    $variable1=$rowgeneral['grado'];$variable2=$rowgeneral['nomnivel'];$variable3=$rowgeneral['asinatura'];}
$datitossecciones=$COMPO->SECCIONAME($seccion);
if($namesection=  mysql_fetch_array($datitossecciones)) $nombredelaseccion=$namesection[1];
?> </table></center>
<table class="display">
<?php $COMPONENTE=new Component();$listar=$COMPONENTE->LISTAR3($asina);
while ($row = mysql_fetch_array($listar)) {
echo '<tr class=\'gradeX\'></tr>';$lista=$INDICAXD->LISTAR($row[0]);
    while ($row2 = mysql_fetch_array($lista)) {
    echo '<tr class=\'gradeA\'><td class=\'center\'><a>'.$row[1].'.'.$row2[3].'</a></td><td>'.$row2[2].'</td></tr>';}}
?></table>
<?php
$miVariable =  $_COOKIE["valuecombix"]; echo'<center><h4>AULA['.$variable1.$nombredelaseccion.'] NIVEL['.$variable2.'] [Asignatura:'.$variable3.']</h4></center>';
?>
<form name="frmregistro" method="post" action="registra3.php?GRABAR=0">
<div style="background-color: greenyellow;"><center><b>LLENAR REGISTROS DE MANERA:</b><input type="Radio" name="group1"  value="horizontal" checked>Horizontal <input type="Radio" name="group1"  value="vertical" >Vertical<br><input type="Button" name="" value="Cambiar forma de navegaci&oacute;n" onclick="cambiaColor();window.location.reload()"><br><a>SE LLENARAN LOS REGISTROS DE MANERA : <b><?php echo $miVariable; ?></b></a><br><a>DOCENTE USA LA TECLA TAB PARA LA NAVEGACI&Oacute;N PORFAVOR</a></center>
</div><br>
<center><table class=""><thead><tr class=""><td></td><td></td><td></td><td></td><td>N&#176;</td><td>Alumno</td>
<?php
$th=$COMPONENTE->LISTAR3($asina);
while ($roth = mysql_fetch_array($th)) {
$listath=$INDICAXD->LISTAR($roth[0]);
    while ($rowth = mysql_fetch_array($listath)) {echo '<td class=\'center\' width:2%;>'.$roth[1].'.'.$rowth[3].'</td>';}
    echo '<td style=\'color:peru;\'>P'.$roth[1].'</td>';}
?><td style="color:peru;">PB</td></tr></thead>
<?php
$reAl = new RegistroAlumno();$listaalumnado=$reAl->ListaAlumnoSeccion($seccion);
while ($alumno = mysql_fetch_array($listaalumnado)) {?>
<tr><td><td><input type='hidden' name='txtregistro' id='txtregistro' value='<?php echo $registro;?>'/></td></td><td><input type='hidden' name='<?php echo $alumno[0].'txtidalumno';?>' id='<?php echo $alumno[0].'txtidalumno';?>' value='<?php echo $alumno[4];?>'/></td><td><input type='hidden' name='<?php echo $alumno[0].'txtalumnoregistro';?>' id='<?php echo $alumno[0].'txtalumnoregistro';?>' value='<?php echo $alumno[4].$seccion.$asina;?>'/></td><td style='width:3%;'><?php echo $alumno[0];?></td>
<?php echo '<td style=\'width:25%;\'>'.$alumno[1].' '.$alumno[2].','.$alumno[3].'</td>';

$td=$COMPONENTE->LISTAR3($asina);
while ($ro = mysql_fetch_array($td)) {
$lista=$INDICAXD->LISTAR($ro[0]);
    while ($row22 = mysql_fetch_array($lista)) {
    $listadice=RegistroAlumno::LISTAR3($alumno[4].$seccion.$asina);
    while ($row11 = mysql_fetch_array($listadice)) {
        $valorcelda=$ro[1].$row22[3];$valueespacio=$row11["3p$valorcelda"];#valor de la celda
        $promedio=round($row11["3promedio$ro[1]"]);#promedio por componente
        $pbb=$row11['9'];#promedio final
        if ($valueespacio==0) $valueespacio="";#si no hay valor a espacio en blanco
    }
    #--navegador horizontal-vertical--#
    if($miVariable=="vertical"){
        $index=0;
    }else{
        $index=1;
    }
#--fin navegador horizontal-vertical--#
echo '<td class=\'center\' width:3%;><input tabindex=\''.$row22[$index].'\' placeholder=\'FN\' type=\'text\' id=\''.$alumno[0].'p'.$ro[1].$row22[3].'\' name=\''.$alumno[0].'p'.$ro[1].$row22[3].'\' value=\''.$valueespacio.'\' style=\'width:89%;\' maxlength=\'2\'></td>';}
echo '<td><input type=\'text\' style=\'width:80%;\'  value='.$promedio.' id=\''.$alumno[0].'promedio'.$ro[1].'\' name=\''.$alumno[0].'promedio'.$ro[1].'\' readonly/></td>';}
echo '<td><input type=\'text\' id=\''.$alumno[0].'pb\' name=\''.$alumno[0].'pb\' value=\''.$pbb.'\' style=\'width:80%;\' readonly/></td></tr>';}
?></table>
<div class="form-actions"><button style="" type="submit"class="btn btn-primary" id="btnsavea" name="btnsavea">GRABAR/ACTUALIZAR</button></div></center>
</form> <?php         } ?></body></html>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>
<script type="text/javascript">
 $("input[type='text']").focusout(function () {
referencia = this.id;
fila = referencia.substring(0,referencia.indexOf('p'));
indicador = referencia.substring(referencia.indexOf('p')+1,referencia.indexOf('p')+2);
tnota = referencia.substring(0,referencia.indexOf('p')+2);
/*************************PROMEDIO POR COMPONENTE**************************/
$("#"+fila+"promedio"+indicador).val(get_promedio(tnota));
/**************************************************************************/
/*************************PROMEDIO POR BIMESTRE****************************/
$("#"+fila+"pb").val(get_promedio(fila+"promedio"));
/**************************************************************************/
});
function get_promedio(tnota){
var promedio=0; var suma = 0; var notas = 0; var notas_validas=true;
$('input[name^="'+tnota+'"]').each( function(){
notas = notas +1;
if($.trim($(this).val()) == ''){
notas_validas = false;
}
if($.trim($(this).val()) == 0){
notas_validas = false;
}
suma = suma + parseInt($.trim($(this).val()) == '' ? 0 : $(this).val());
});
if(notas_validas){
promedio = (suma == 0) ? 0 : Math.round(suma / notas);
}else{
promedio = '';
}
return promedio;
}

function justNumbers(e)
{
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
    return true;

    return /\d/.test(String.fromCharCode(keynum));
}
</script>