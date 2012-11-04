<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--PRIMEROS PUESTOS EN EL GRADO</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<!--<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>-->
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

    </head>
    <body>
        <?php require_once 'Includes/navegador.php';    ?>
        <div style="margin-left: 15%;margin-right: 15%;" id="primer">
            <center><h3 style="color: green">PRIMEROS PUESTOS POR TUTOR&Iacute;A</h3>
            <a>Correspondiente al ...</a></center>
            <center>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>AULA</th>
                        <th>ALUMNO</th>
                        <th>PROMEDIO</th>
                        <th>Pto. EN EL AULA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                    <tr class="info">
                        <td colspan="4">
                            <code>Nota  :</code> Al complementar las notas de los alumnos que NO han sido evaluados por razones de fuerza mayor(accidente, enfermedad, duelo o caso justificable),la imformaci&oacute;n de este cuadro se puede ver afectada.
                        </td>
                    </tr>
                    <tr class="success">
                        <td colspan="4">
                            <center>Fecha y Hora del &uacute;ltimo proceso: <?php echo date("d-m-Y H:i:s"); ?></center>
                        </td>
                    </tr>
                </tbody>
            </table>
            
                <a href="javascript:imprSelec('primer')"><i class="icon-print"></i>Imprimir</a>
                </center>
        </div>
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>


<!--
		/*Animación de Banner Informes Tecnicos*/
		var gallery2 = new slideGallery($$("#gallery2"), {
			steps: 1,
			mode: "callback",
			/*direction: "vertical",*/
			autoplay: false,
			paging: false,
			onStart: function() { },
			onPlay: function() { this.fireEvent("start"); }
		});

<div class="contenedorInformeTecnico">
                	<div class="tituloBloqueHome lineaDerechaTituloBloqueHome">BOLETINES</div>
                	<div class="gallery2" id="gallery2">
                	<div class="holder">
                		<ul>
                			<li><a href="#"><img src="elementos/imagenes/home/img-informe-tecnico-1.jpg"/><br /><br />CONDICIONES<br />DE VIDA</a></li>
                			<li><a href="#"><img src="elementos/imagenes/home/img-informe-tecnico-2.jpg"/><br /><br />ESTADÍSTICAS AMBIENTALES</a></li>
                			<li><a href="#"><img src="elementos/imagenes/home/img-informe-tecnico-3.jpg"/><br /><br />ÍNDICE<br />DE PRECIOS</a></li>
                			<li><a href="#"><img src="elementos/imagenes/home/img-informe-tecnico-4.jpg"/><br /><br />EXPORTACIONES E IMPORTACIONES</a></li>
                			<li><a href="#"><img src="elementos/imagenes/home/img-informe-tecnico-5.jpg"/><br /><br />ÍNDICE<br />DE EMPLEO</a></li>
                		</ul>
                	</div>
                	<div class="controlHome">
                		<a href="#" class="prev" title="ver más">prev</a>
                		<a href="#" class="next" title="ver más">next</a>
                	</div>
					</div>
					<div class="contenidoInformeTecnico">Revise los informes técnicos de los indicadores económicos y sociales para mantenerse informado de las últimas estadísticas oficiales producidas por el Sistema Estadístico Nacional.</div>
					<div class="pieInformeTecnico"><a href="#"><img src="elementos/imagenes/home/btnSuscribase.jpg"/></a></div>
                </div>
                <!-- fin INFORMES -->

