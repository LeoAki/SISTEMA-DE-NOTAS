<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>Falta notas Nivel Secundaria</title>
        <?php
        require_once 'Class/Usuario.php';
        if (!isset($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario) {
            session_destroy();
            header('Location: index.php');
        } else {
            ?>
            <!----------------------------------BOOTSTRAP--css-------------------------------------------------->
            <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
            <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        </head>
        <body style="background-color: linen;">
            <?php
            require_once 'Includes/navegador.php'; #steelblue
            require_once 'Class/FaltaNotas.php';
            $fnnotas = new FaltaNotas();
            ?>
        <center><h3 style="color: green">SELECCIONE EL BIMESTRE PARA VER LOS FN</h3></center>
        <div style="margin-left: 10%;margin-right: 10%;">

            <!-----DIRECTOR-SUBDIRECTOR GENERAL--->
            <?php
            if ($_SESSION['niveldeuser'] == '4' or $_SESSION['niveldeuser'] == '5') {
                ?>

                <!---------------------------------------------------------------------------------------------->
                <!--BEGIN ENCABEZADO--mediumturquoise-->
                <div class="bs-docs-example" style="background-color:#E3F6CE;">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#inicial" data-toggle="tab"><i class="white icon-thumbs-up"></i>I BIMESTRE</a></li>
                        <li><a href="#primaria" data-toggle="tab"><i class=" icon-bullhorn"></i>II BIMESTRE</a></li>
                        <li><a href="#secundaria" data-toggle="tab"><i class=" icon-bullhorn"></i>III BIMESTRE</a></li>
                        <li><a href="#secundaria2" data-toggle="tab"><i class=" icon-bullhorn"></i>IV BIMESTRE</a></li>
                    </ul>
                    <!--END ENCABEZADO-->
                    <!---------------------BEGIN CONTENT------------------------------------------------------------>
                    <!---------------------------------------------------------------------------------------------->
                    <div id="myTabContent" class="tab-content">
                        <!---------------------------------------------------------------------------------------------->
                        <div class="tab-pane fade in active" id="inicial">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID REGISTRO</th>
                                        <th>DOCENTE</th>
                                        <th>ASIGNATURA</th>
                                        <th>ALUMNO</th>
                                        <th>AULA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result = $fnnotas->fn_i(2);
                                    while ($value = mysql_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value['idregistro'] ?></td>
                                            <td><?php echo $value['DOCENTE'] ?></td>
                                            <td><?php echo $value['asinatura'] ?></td>
                                            <td><?php echo $value['ALUMNO'] ?></td>
                                            <td><?php echo $value['AULA'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="primaria">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID REGISTRO</th>
                                        <th>DOCENTE</th>
                                        <th>ASIGNATURA</th>
                                        <th>ALUMNO</th>
                                        <th>AULA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result1 = $fnnotas->fn_ii(2);
                                    while ($value1 = mysql_fetch_array($result1)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value1['idregistro'] ?></td>
                                            <td><?php echo $value1['DOCENTE'] ?></td>
                                            <td><?php echo $value1['asinatura'] ?></td>
                                            <td><?php echo $value1['ALUMNO'] ?></td>
                                            <td><?php echo $value1['AULA'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="secundaria">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID REGISTRO</th>
                                        <th>DOCENTE</th>
                                        <th>ASIGNATURA</th>
                                        <th>ALUMNO</th>
                                        <th>AULA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result2 = $fnnotas->fn_iii(2);
                                    while ($value2 = mysql_fetch_array($result2)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value2['idregistro'] ?></td>
                                            <td><?php echo $value2['DOCENTE'] ?></td>
                                            <td><?php echo $value2['asinatura'] ?></td>
                                            <td><?php echo $value2['ALUMNO'] ?></td>
                                            <td><?php echo $value2['AULA'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="secundaria2">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID REGISTRO</th>
                                        <th>DOCENTE</th>
                                        <th>ASIGNATURA</th>
                                        <th>ALUMNO</th>
                                        <th>AULA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result2 = $fnnotas->fn_iv(2);
                                    while ($value2 = mysql_fetch_array($result2)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value2['idregistro'] ?></td>
                                            <td><?php echo $value2['DOCENTE'] ?></td>
                                            <td><?php echo $value2['asinatura'] ?></td>
                                            <td><?php echo $value2['ALUMNO'] ?></td>
                                            <td><?php echo $value2['AULA'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!---------------------------------------------------------------------------------------------->
                    </div>
                    <!-----------------------END CONTENT------------------------------------------------------------>
                </div>
            <?php } ?>
        </div>
        <!---------------------------------------------------------------------------------------------->
        <?php
    }
    ?>
</body>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
</html>