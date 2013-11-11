<?php
session_start();
$dnidocenteactual=$_SESSION['dni'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Mi Consolidado De Notas</title>

<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/><link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>

<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>

<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script><script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</head>
<body>
<?php
require_once 'Includes/navegador.php';include_once 'Class/Docente.php';$profesorcito=new Docente();

$datosaula=$profesorcito->Datosdemiaulacargo($dnidocenteactual);
while ($secciondate = mysql_fetch_array($datosaula)) {
    $codigoseccion=$secciondate[0];#codigo de seccion
    $niveldelaula=$secciondate[1];#nivel de educacion
    $gradodelaula=$secciondate[2];#grado del aula
    $nombresecciondelaula=$secciondate[3];
    $codigodocenteaula=$secciondate[4];
    $profeesaula=$secciondate[5].$secciondate[6]." ,".$secciondate[7];
    $dnidocentedelaula=$secciondate[8];
}

?>
<div>
    <ul id="myTab" class="nav nav-tabs">
    <li><a href="#uno" data-toggle="tab"><i class="white icon-thumbs-up"></i>I BIMESTRE</a></li>
    <li><a href="#dos" data-toggle="tab"><i class=" icon-bullhorn"></i>II BIMESTRE</a></li>
    <li class="active"><a href="#tres" data-toggle="tab"><i class=" icon-bullhorn"></i>III BIMESTRE</a></li>
    <li><a href="#cuatro" data-toggle="tab"><i class=" icon-bullhorn"></i>IV BIMESTRE</a></li>
</ul>
</div>

<div id="myTabContent" class="tab-content">
<!------------------------------------------------CONTENT I bimestre----------------------------------------------->
<div class="tab-pane fade" id="uno">
<h1>CONSOLIDADO I B</h1>

<h5>SECCI&Oacute;N  :<?php echo "[".$gradodelaula.$nombresecciondelaula."] ||| NIVEL:[".$niveldelaula."] ||| "; ?>TUTOR  :<?php echo $profeesaula;?></h5>

    <div id="divtext">Si no puede visualizar el consolidado, 
clic <a href="consolidadoajax.php?niveldelaula=<?php echo $niveldelaula ?>&codigoseccion=<?php echo $codigoseccion?>&gradodelaula=<?php echo $gradodelaula?>">AQUI</a>
    </div>

    <div id="divconsolidado">

    </div>
</div>

<!------------------------------------------------CONTENT II bimestre----------------------------------------------->

<div class="tab-pane fade" id="dos">
    
<h1>CONSOLIDADO II B</h1>
<h5>SECCI&Oacute;N  :<?php echo "[".$gradodelaula.$nombresecciondelaula."] ||| NIVEL:[".$niveldelaula."] ||| "; ?>TUTOR  :<?php echo $profeesaula;?></h5>

    <div id="divtext"><h3>Si no puede visualizar el consolidado, 
clic <a  target='_blanck' href="consolidadoajax2.php?niveldelaula=<?php echo $niveldelaula ?>&codigoseccion=<?php echo $codigoseccion?>&gradodelaula=<?php echo $gradodelaula?>">AQUI</a></h3>
    </div>

    <div id="diviibimestre">

    </div>
    
    
</div>

<!------------------------------------------------CONTENT III bimestre---------------------------------------------->
<div class="tab-pane fade in active" id="tres">
    
<h1>CONSOLIDADO III B</h1>
<h5>SECCI&Oacute;N  :<?php echo "[".$gradodelaula.$nombresecciondelaula."] ||| NIVEL:[".$niveldelaula."] ||| "; ?>TUTOR  :<?php echo $profeesaula;?></h5>

    <div id="divtext"><h3>Si no puede visualizar el consolidado, 
clic <a  target='_blanck' href="consolidadoajax3.php?niveldelaula=<?php echo $niveldelaula ?>&codigoseccion=<?php echo $codigoseccion?>&gradodelaula=<?php echo $gradodelaula?>">AQUI</a></h3>
    </div>
</div>

<!--CONTENT IV-->
    <div class="tab-pane fade" id="cuatro">
        <fieldset></fieldset>
    </div>
</div>
    <br><br><br><br><br><br>
<!----------------------END CONTENT------------------------------------------------------------>
</body>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/ajax.js"></script>
<script type="text/javascript">
    window.onload=function(){

        Mostrarconsolidado(<?php echo $codigoseccion; ?>,'<?PHP echo $niveldelaula; ?>',<?php echo $gradodelaula; ?>);
        Mostrarconsolidadoiibimestre(<?php echo $codigoseccion; ?>,'<?PHP echo $niveldelaula; ?>',<?php echo $gradodelaula; ?>);
            
    }
</script>
</html>
