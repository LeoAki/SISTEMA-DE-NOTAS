<?php
session_start();
$dnidocenteusario = $_SESSION['dni'];
?>
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <link rel="icon" href="Css/images/favicon.ico"><title>LNCC ONLINE--Dirigite al PP.FF</title>
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_page.css" rel="stylesheet"/><link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
    </head>
    <?php
    require_once 'Class/Usuario.php';
    if (!isset($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario) {
        session_destroy();
        echo '<script>window.location = \'index.php\'</script>';
    } else {
        ?>
        <body>
            <?php
            require_once 'Includes/navegador.php';
            include_once 'Class/Conection.php';
            include_once 'Class/Docente.php';
            $DOCENTE = new Docente();
            include_once 'Class/ALUMNO_SECCION.php';
            $ALUMNOSECCION = new ALUMNO_SECCION();
            include_once 'Class/Alumno_Seccion_Pf.php';
            $AlSECIONPF = new Alumno_Seccion_Pf();

            $whoisdocente = $DOCENTE->DOCENTE_USUARIO($dnidocenteusario);
            if ($filasiencuentra = mysql_fetch_array($whoisdocente))
                $codigodocentenow = $filasiencuentra[0]; $apellidosdocentenow = $filasiencuentra[1] . ' ' . $filasiencuentra[2] . ' ,' . $filasiencuentra[3];

//--------------------------------------------MANTENIMIENTO--------------------------
#BUCLE REPETITIVO
            if (isset($_REQUEST['GRABAR'])) { // se envio el formulario?
                for ($x = 1; $x <= 35; $x++) {//recorremos todos los alumnos,se recuperan cada uno de los datos del form siempre y cuando se hayan enviado, de lo contrario los omite
                    $AlSECIONPF->setCODIGO($_REQUEST['txtcodigo' . $x]);
                    $AlSECIONPF->setCODIGOAS($_REQUEST['txtcodigo' . $x]);
                    $AlSECIONPF->setCPF1($_REQUEST['txtnota1' . $x]);
                    $AlSECIONPF->setCPF2($_REQUEST['txtnota2' . $x]);
                    $AlSECIONPF->setCPF3($_REQUEST['txtnota3' . $x]);
                    $AlSECIONPF->setCPF4($_REQUEST['txtnota4' . $x]);
                    $AlSECIONPF->setCPF5($_REQUEST['txtnota5' . $x]);
                    $AlSECIONPF->setCPF6($_REQUEST['txtnota6' . $x]);
                    $AlSECIONPF->setCPF7($_REQUEST['txtnota7' . $x]);
                    $AlSECIONPF->setCPF8($_REQUEST['txtnota8' . $x]);
                    $AlSECIONPF->setCPF9($_REQUEST['txtnota9' . $x]);

                    $AlSECIONPF->GRABAR();
                }
                echo '<script>window.location = \'regmnsji.php\'</script>';
            }
//-------------------------------------------------------------------------------------
            ?>
            <div style="margin-left: 3%;margin-right: 3%;" id="primer"> <center><h4 style="color: green">Escriba las observaciones y recomendaciones a los PP.FF. ::: IVB</h4></center>
                <article><section>1. <i>Asiste puntualmente a las reuniones y entrevistas del aula.</i></section><section>2. <i>Se esmera en la presentacion e higiene personal del ni&ntilde;o.</i></section><section>3. <i>Participaci&oacute;n de los cuenta cuentos.</i></section><section>4. <i>Incentiva la participaci&oacute;n de su ni&ntilde;o en las diferentes actividades.</i></section><section>5. <i>Se interesa en el avance y progreso de su ni&ntilde;o.</i></section><section>6. <i>Colabora con las necesidades del aula.</i></section><section>7. <i>Firma diaramente la Bit&aacute;cora.</i></section><section>8. <i>Recoge el informe del progreso del ni&ntilde;o en la fecha indicada.</i></section><section>9. <i>Participaci&oacute;n de los PP.FF, en el Congreso de Familias.</i></section></article>
                <?php
                $generalseccion = $DOCENTE->NAMESECCIOMICARGO($codigodocentenow);
                if ($filanamesection = mysql_fetch_array($generalseccion))
                    $gradoname = $filanamesection[0];$nameseccionnow = $filanamesection[1];
                $nomnivelsection = $filanamesection[2];
                echo '<h5 style=\'color: peru\'>SECCION: ' . $gradoname . ' ' . $nameseccionnow . ' ' . $nomnivelsection . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTOR: ' . $apellidosdocentenow . '</h5>';
                ?>
                <form id="frmmensaje" method="post" action="regmnsji.php?GRABAR=1">
                    <fieldset>
                        <table class="table table-hover">
                            <tr class="gradeU"><td style="display: none;"></td>
                                <td style="width: 3%;color: peru;text-transform: uppercase;"><b>N &#176;</b></td><td style="width: 30%;color: peru;text-transform: uppercase;"><b>Alumno</b></td>
                                <td style="width: 7%;color: peru;text-transform: uppercase;"><b>1</b></td><td style="width: 7%;color: peru;text-transform: uppercase;"><b>2</b></td><td style="width: 7%;color: peru;text-transform: uppercase;"><b>3</b></td><td style="width: 7%;color: peru;text-transform: uppercase;"><b>4</b></td>
                                <td style="width: 7%;color: peru;text-transform: uppercase;"><b>5</b></td><td style="width: 7%;color: peru;text-transform: uppercase;"><b>6</b></td><td style="width: 7%;color: peru;text-transform: uppercase;"><b>7</b></td><td style="width: 7%;color: peru;text-transform: uppercase;"><b>8</b></td>
                                <td style="width: 7%;color: peru;text-transform: uppercase;"><b>9</b></td>
                                <?php
                                $whoisalumno = $AlSECIONPF->ALUMNOSDEMITUTORIA($codigodocentenow);
                                while ($row = mysql_fetch_array($whoisalumno)) {
                                    ?>
                                <tr>
                                    <td style='display:none;'> <?php echo '<input type=\'text\' value=\'' . $row[0] . '\' id=\'txtcodigo' . $row[1] . '\' name=\'txtcodigo' . $row[1] . '\'/>'; ?></td>
        <?= '<td><b>' . $row[1] . '</b></td><td><b>' . $row[2] . ' ' . $row[3] . ' ,</b>' . $row[4] . '</td>'; ?>
                                    <td><input type='text' value='<?= $row[29] ?>' id='txtnota1<?= $row[1] ?>' name='txtnota1<?= $row[1] ?>' placeholder='FN' style='width:100%;' maxlength=2/></td>      <td><input type='text' value='<?= $row[30] ?>' id='txtnota2<?= $row[1] ?>' name='txtnota2<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>
                                    <td><input type='text' value='<?= $row[31] ?>' id='txtnota3<?= $row[1] ?>' name='txtnota3<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>       <td><input type='text' value='<?= $row[32] ?>' id='txtnota4<?= $row[1] ?>' name='txtnota4<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>
                                    <td><input type='text' value='<?= $row[33] ?>' id='txtnota5<?= $row[1] ?>' name='txtnota5<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>       <td><input type='text' value='<?= $row[34] ?>' id='txtnota6<?= $row[1] ?>' name='txtnota6<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>
                                    <td><input type='text' value='<?= $row[35] ?>' id='txtnota7<?= $row[1] ?>' name='txtnota7<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>       <td><input type='text' value='<?= $row[36] ?>' id='txtnota8<?= $row[1] ?>' name='txtnota8<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>
                                    <td><input type='text' value='<?= $row[38] ?>' id='txtnota9<?= $row[1] ?>' name='txtnota9<?= $row[1] ?>' placeholder='FN'style='width:100%;' maxlength=2/></td>
                                </tr> <? } ?>
                        </table></fieldset>
                    <center><div class="form-actions"><button type="submit"class="btn btn-primary"><i>GRABAR/ACTUALIZAR LOS MENSAJES</i></button></div></center>
                </form></div></body>
<?php } ?>
    <script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="Js/js.js"></script>

    <script type="text/javascript" src="Js/bootstrap-dropdown.js"></script><script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="Js/bootstrap-popover.js"></script><script type="text/javascript" src="Js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
    <script type="text/javascript">
        $('input:text').change(function() {
            $(this).val(this.value.toUpperCase());
        });
    </script>
</html>