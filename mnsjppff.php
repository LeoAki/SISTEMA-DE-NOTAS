<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>Mensaje Pp.ff.</title>
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
    </head>
    <?php
    require_once 'Class/Usuario.php';
    if (!isset($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario) {
        session_destroy();
        echo "<script>window.location = 'index.php'</script>";
    } else {
        ?>
        <body>
            <?php
            include_once 'Class/Docente.php';
            $DOCENTE = new Docente();
            include_once 'Class/ALUMNO_SECCION.php';
            $ALUMNOSECCION = new ALUMNO_SECCION();
            include_once 'Class/Niveles.php';
            $AlSECIONPF = new Niveles();

            $codigoprofesor = $_GET['profcode'];
            ?>
            <div style="margin-left: 5%;margin-right: 5%;" id="primer">
                <center><h4 style="color: green">Escriba las observaciones y recomendaciones a los PP.FF.</h4></center>
                <article>
                    <section>1. <i>Indicador1</i></section>
                    <section>2. <i>Indicador2</i></section>
                    <section>3. <i>Indicador3</i></section>
                    <section>4. <i>Indicador4</i></section>
                </article>
                <?php
                $generalseccion = $DOCENTE->NAMESECCIOMICARGO($codigoprofesor);
                if ($filanamesection = mysql_fetch_array($generalseccion)) {
                    $gradoname = $filanamesection[0];
                    $nameseccionnow = $filanamesection[1];
                    $nomnivelsection = $filanamesection[2];
                }
                ?>
                <h5 style='color: peru'>SECCION: "<?= $gradoname . ' ' . $nameseccionnow . ' ' . $nomnivelsection ?></h5>
                <div id="divmsnj">
                    <fieldset>
                        <table class="table table-hover">
                            <tr class="gradeU">
                                <td style="display: none;"></td>
                                <td style="width: 3%;color: peru;text-transform: uppercase;"><b>N°</b></td>
                                <td style="width: 30%;color: peru;text-transform: uppercase;"><b>Alumno</b></td>
                                <td style="width: 8%;color: peru;text-transform: uppercase;"><b>1</b></td>
                                <td style="width: 8%;color: peru;text-transform: uppercase;"><b>2</b></td>
                                <td style="width: 8%;color: peru;text-transform: uppercase;"><b>3</b></td>
                                <td style="width: 8%;color: peru;text-transform: uppercase;"><b>4</b></td>
                            </tr>
                            <?php
                            $whoisalumno = $AlSECIONPF->mensajes_al($codigoprofesor);
                            while ($row = mysql_fetch_array($whoisalumno)) {
                                ?>
                                <tr>
                                    <td style='display:none;'><input type='text' value='<?= $row[0] ?>'/></td>
                                    <td><b><?= $row[1] ?></b></td>
                                    <td><b><?= $row[2] . ' ' . $row[3] . ' ,</b>' . $row[4] ?></td>
                                    <td><?= $row[5] ?></td>
                                    <td><?= $row[6] ?></td>
                                    <td><?= $row[7] ?></td>
                                    <td><?= $row[8] ?></td>
                                </tr>
                            <? } ?>
                        </table>
                    </fieldset>
                </div>
            </div>
        </body>
    <?php } ?>
    <script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="Js/js.js"></script>
    <!----------------------------------BOOTSTRAP--js--------------------------------------------------->
    <script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="Js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="Js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="Js/jquery.innerfade.js"></script>
    <script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>