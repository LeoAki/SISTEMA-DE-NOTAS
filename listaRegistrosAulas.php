<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <title>MANTENIMIENTO DE REGISTROS</title>
        <style>
            .comboregistro{
                width: 120%;
            }
        </style>
    </head>
    <body>
        <?php
        require_once 'Includes/navegador.php';
        $aula = $_GET['seccion'];
        include_once 'Class/Registro.php';
        $Class_Registro = new Registro();
        $data = $Class_Registro->listar_por_Seccion($aula);

        include_once 'Class/Seccion.php';
        $Class_Seccion = new Seccion();
        $detailsAula = $Class_Seccion->detallesSeccion($aula);

        if ($MiAula = mysql_fetch_array($detailsAula)) {
            $nomsecc = $MiAula['nombreseccion'];
            $grade = $MiAula['grado'];
            $nomlevel = $MiAula['nomnivel'];
        }
        ?>
        <h3 class="text-info text-center">Registros de la sección: <?php echo $nomsecc . ' ' . $grade; ?>  del Nivel <?php echo $nomlevel; ?></h3>
        <div style="margin:0 auto 0 auto; width:90%;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 8%">CODIGO</th>
                        <th style="width: 25%">DOCENTE</th>
                        <th style="width: 25%">ASIGNATURA</th>
                        <th style="width: 8%">I B</th>
                        <th style="width: 8%">II B</th>
                        <th style="width: 8%">III B</th>
                        <th style="width: 8%">VI B</th>
                        <th style="width: 10%">Más Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($_dataRow = mysql_fetch_array($data)) { ?>
                        <tr>
                            <td><?php echo $_dataRow['0'] ?></td>
                            <td><?php echo '<b>' . $_dataRow['4'] . '</b> ' . $_dataRow['5'] . ', ' . $_dataRow['6'] ?></td>
                            <td><?php echo '<b>' . $_dataRow['8'] . '</b>' ?></td>
                            <td>
                                <select id="1combo_<?php echo $_dataRow['0'] ?>" class="comboregistro">
                                    <option value="0" <?php echo $_dataRow['9'] == 0 ? 'Selected' : '' ?>>Cerrado</option>
                                    <option value="1" <?php echo $_dataRow['9'] == 1 ? 'Selected' : '' ?>>Abierto</option>
                                    <option value="3" <?php echo $_dataRow['9'] == 3 ? 'Selected' : '' ?>>Concluído</option>
                                    <option value="2" <?php echo $_dataRow['9'] == 4 ? 'Selected' : '' ?>>Verificado</option>
                                </select>
                            </td>
                            <td>
                                <select id="2combo_<?php echo $_dataRow['0'] ?>" class="comboregistro">
                                    <option value="0" <?php echo $_dataRow['10'] == 0 ? 'Selected' : '' ?>>Cerrado</option>
                                    <option value="1" <?php echo $_dataRow['10'] == 1 ? 'Selected' : '' ?>>Abierto</option>
                                    <option value="3" <?php echo $_dataRow['10'] == 3 ? 'Selected' : '' ?>>Concluído</option>
                                    <option value="2" <?php echo $_dataRow['10'] == 4 ? 'Selected' : '' ?>>Verificado</option>
                                </select>
                            </td>
                            <td>
                                <select id="3combo_<?php echo $_dataRow['0'] ?>" class="comboregistro">
                                    <option value="0" <?php echo $_dataRow['11'] == 0 ? 'Selected' : '' ?>>Cerrado</option>
                                    <option value="1" <?php echo $_dataRow['11'] == 1 ? 'Selected' : '' ?>>Abierto</option>
                                    <option value="3" <?php echo $_dataRow['11'] == 3 ? 'Selected' : '' ?>>Concluído</option>
                                    <option value="2" <?php echo $_dataRow['11'] == 4 ? 'Selected' : '' ?>>Verificado</option>
                                </select>
                            </td>
                            <td>
                                <select id="4combo_<?php echo $_dataRow['0'] ?>" class="comboregistro">
                                    <option value="0" <?php echo $_dataRow['12'] == 0 ? 'Selected' : '' ?>>Cerrado</option>
                                    <option value="1" <?php echo $_dataRow['12'] == 1 ? 'Selected' : '' ?>>Abierto</option>
                                    <option value="3" <?php echo $_dataRow['12'] == 3 ? 'Selected' : '' ?>>Concluído</option>
                                    <option value="2" <?php echo $_dataRow['12'] == 4 ? 'Selected' : '' ?>>Verificado</option>
                                </select>
                            </td>
                            <td><a href="#">Mas detalles</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br><br><br><br>
        </div>
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>