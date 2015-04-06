<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="Css/images/favicon.ico"><link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/><title>LNCC ONLINE--IMPRIME TU REGISTRO DOCENTE</title>
        <?php
        require_once 'Class/Usuario.php';
        if (!isset($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario) {
            session_destroy();
            echo "<script>window.location = 'index.php'</script>";
            exit;
        }
        ?>
    </head>
    <body><div id="todo" name="todo">
            <?php
            require_once 'Class/Component.php';
            require_once 'Class/Indicador.php';
            require_once 'Class/RegistroAlumno.php';
            $INDICAXD = new Indicador();
            $REGISTROALUMNO = new RegistroAlumno();
            ?>
            <center><a style='color:black;font-size: 11px;'><b>REGISTRO DE NOTAS DEL III BIMESTRE-2014 EN LETRAS</b></a></center>
            <?php
            $asina = $_GET['sinatura'];
            $seccion = $_GET['seccion'];
            $registro = $_GET['registro'];
            $responsable = $REGISTROALUMNO->Nom_res_registr($registro);

            if ($rowgeneral = mysql_fetch_array($responsable)) {
                $variable1 = $rowgeneral['codigodocente'];
                $docentevalor = $REGISTROALUMNO->docentevalor($variable1);
            }
            if ($rowdocente = mysql_fetch_array($docentevalor)) {
                $paternodocente = $rowdocente['paterno'];
                $maternodocente = $rowdocente['materno'];
                $nombresdocente = $rowdocente['nombres'];
            }
            $COMPO = new Component();
            $mysql = $COMPO->ListarDatosAsignatura($asina);
            if ($rowgeneral = mysql_fetch_array($mysql)) {
                $variable1 = $rowgeneral['grado'];
                $variable2 = $rowgeneral['nomnivel'];
                $variable3 = $rowgeneral['asinatura'];
            }
            $datitossecciones = $COMPO->SECCIONAME($seccion);
            if ($namesection = mysql_fetch_array($datitossecciones)) {
                $nombredelaseccion = $namesection[1];
            }
            echo '<a style=\'color:black;font-size: 10px;\'>Nivel:[' . $variable2 . ']-Aula: [' . $variable1 . $nombredelaseccion . ']- Profesor:[' . $paternodocente . ' ' . $maternodocente . ' ,' . $nombresdocente . ']- Asignatura:[' . $variable3 . ']</a>';
            ?>
            <table>
                <?php
                $COMPONENTE = new Component();
                $listar = $COMPONENTE->LISTAR3($asina);
                while ($row = mysql_fetch_array($listar)) {
                    ?>
                    <tr></tr>
                    <?php
                    $lista = $INDICAXD->LISTAR($row[0]);
                    while ($row2 = mysql_fetch_array($lista)) {
                        echo '<tr><td class=\'center\' style=\'font-size:7px\'><a style=\'color:black;font-size: 8px;\'>[' . $row[1] . '.' . $row2[3] . ']</a></td><td style=\'font-size:7px\'><a style=\'color:black;font-size: 8px;\'>' . $row2[2] . '</a></td></tr>';
                    }
                }
                ?></table>
            <form name="frmregistro" method="post" action="">
                <center><table class='table'>
                        <thead><tr><td><a style='color:black;font-size: 10px;'><b>N &#176;</b></a></td><td style="width: 32%;"><a style='color:black;font-size: 10px;'><b>ALUMNO</b></a></td>
                                <?php
                                $th = $COMPONENTE->LISTAR3($asina);
                                while ($roth = mysql_fetch_array($th)) {
                                    $listath = $INDICAXD->LISTAR($roth[0]);
                                    while ($rowth = mysql_fetch_array($listath)) {
                                        echo '<td style=\'font-size:9px\' class=\'center\' width:2%;>' . $roth[1] . '.' . $rowth[3] . '</td>';
                                    }
                                    echo '<td><a style=\'color:black;font-size: 11px;\'><b>P' . $roth[1] . '</b></a></td>';
                                }
                                ?>
                                <td style='font-size:11px;color:black;'><b>PB</b></td>
                            </tr>
                        </thead>
                        <?php
                        $reAl = new RegistroAlumno();
                        $listaalumnado = $reAl->ListaAlumnoSeccion($seccion);
                        $count = 0;
                        $retirado = 0;
                        $cantexonerado = 0;
                        $cantidaddead = 0;
                        $cantidaddea = 0;
                        $cantidaddeb = 0;
                        $cantidaddec = 0;

                        while ($alumno = mysql_fetch_array($listaalumnado)) {
                            $count = $count + 1;
                            ?>

                            <tr>
                                <td style='font-size:10px'><?php echo $alumno[0] ?></td>
                                <td style='font-size:10px'><?php echo $alumno[1] . ' ' . $alumno[2] . ' ,' . $alumno[3]; ?></td>
                                <?php
                                $td = $COMPONENTE->LISTAR3($asina);
                                while ($ro = mysql_fetch_array($td)) {
                                    $lista = $INDICAXD->LISTAR($ro[0]);
                                    while ($row22 = mysql_fetch_array($lista)) {
                                        $listadice = RegistroAlumno::LISTAR3($alumno[4] . $seccion . $asina);
                                        while ($row11 = mysql_fetch_array($listadice)) {
                                            $exonerado = $row11['3p11'];
                                            $valorcelda = $ro[1] . $row22[3];
                                            $valueespacio = $row11["3p$valorcelda"];
                                            $pbb = $row11['11'];
                                            $promedio = round($row11["3promedio$ro[1]"]);
                                        }
                                        switch ($valueespacio) {
                                            case 0:$notita = "FN";
                                                break;
                                            case '-1': $notita = 'R';
                                                break;
                                            case '-2': $notita = 'EX';
                                                break;
                                            case $valueespacio > 0 and $valueespacio < 11: $notita = 'C';
                                                break;
                                            case $valueespacio > 10 and $valueespacio < 13: $notita = 'B';
                                                break;
                                            case $valueespacio > 12 and $valueespacio < 17: $notita = 'A';
                                                break;
                                            case $valueespacio > 16: $notita = 'AD';
                                                break;
                                            default:
                                                break;
                                        }
                                        ?>
                                        <td><a style='color:black;font-size: 10px;'><? echo $notita ?></a></td>
                                        <?php
                                    }

                                    switch ($promedio) {
                                        case 0:$promedio = "FN";
                                            break;
                                        case '-1': $promedio = 'R';
                                            break;
                                        case '-2': $promedio = 'EX';
                                            break;
                                        case $promedio > 0 and $promedio < 11: $promedio = 'C';
                                            break;
                                        case $promedio > 10 and $promedio < 13: $promedio = 'B';
                                            break;
                                        case $promedio > 12 and $promedio < 17: $promedio = 'A';
                                            break;
                                        case $promedio > 16: $promedio = 'AD';
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                    <td><a style='color:black;font-size: 10px;'><b><?php echo $promedio ?></b></a></td>
                                <?php
                                }

                                if ($pbb == '')
                                    $pb = 'FN';
                                if ($pbb == '-1')
                                    $pb = 'R';
                                if ($pbb == '-2')
                                    $pb = 'EX';
                                if ($pbb > 16 && $pbb < 21) {
                                    $pb = "AD";
                                }
                                if ($pbb > 12 && $pbb < 17) {
                                    $pb = "A";
                                }
                                if ($pbb == 11 || $pbb == 12) {
                                    $pb = "B";
                                }
                                if ($pbb > 0 && $pbb < 11) {
                                    $pb = "C";
                                }
                                ?>
                                <td><a style='color:black;font-size: 11px;'><b><?php echo $pb; ?></b></a></td>
                            </tr>
                            <?php
                            if ($exonerado == '-1') {
                                $retirado = $retirado + 1;
                            }
                            if ($exonerado == '-2') {
                                $cantexonerado = $cantexonerado + 1;
                            }
                            if ($pb == 'AD') {
                                $cantidaddead = $cantidaddead + 1;
                            }
                            if ($pb == 'A') {
                                $cantidaddea = $cantidaddea + 1;
                            }
                            if ($pb == 'B') {
                                $cantidaddeb = $cantidaddeb + 1;
                            }
                            if ($pb == 'C') {
                                $cantidaddec = $cantidaddec + 1;
                            }
                        }
                        ?>
                    </table>
                </center>
            </form>


            <?php
            $evaluados = $count - ($retirado + $cantexonerado);
            $porcentajeaprobado = round((($cantidaddea + $cantidaddead) * 100) / $evaluados, 2);
            $desaprobadosinicial = $cantidaddeb + $cantidaddec;
            $porcentajedesaprobado = round(($desaprobadosinicial * 100) / $evaluados, 2);
            $aprobados = $cantidaddea + $cantidaddead;
            echo "
    <a style='color:black;font-size: 11px;'>Matriculados: $count Retirados:$retirado Exonerados:$cantexonerado Evaluados:$evaluados</a><br>
    <a style='color:black;font-size: 11px;'>Nota Minima Aprobatoria: [A] Aprobados:$aprobados ($porcentajeaprobado%) Desaprobados:$desaprobadosinicial ($porcentajedesaprobado%)
    Rendimiento: AD=$cantidaddead; A=$cantidaddea; B=$cantidaddeb; C=$cantidaddec</a>

    <br><br>
    <center>
    -------------------------------------------<br><a style='color:black;font-size: 9px;'>Prof: $paternodocente $maternodocente ,$nombresdocente<br>
    Impreso el " . date("d-F-Y") . "  .  Id.Registro:$registro
    </a>
    </center>";
            ?>
        </div>
        <a class="button" href="javascript:imprSelec('todo')">IMPRIMIR LA PAGINA</a>
    </body>
    <script type="text/javascript" src="Js/js.js"></script>
</html>