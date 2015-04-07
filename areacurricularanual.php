<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
        <script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
        <!----------------------------------BOOTSTRAP---------------------------------------------------->
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <script type="text/javascript" src="Js/bootstrap/bootstrap.js"></script>
        <!----------------------------------DATA-TABLE--------------------------------------------------->
        <link href="Include/data-table/css/jquery.dataTables.css" rel="stylesheet"/>
        <link href="Include/data-table/css/jquery.dataTables_themeroller.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_table_jui.css" rel="stylesheet"/>
        <script type="text/javascript" src="Include/data-table/js/jquery.dataTables.js"></script>
        <!----------------------------------------------------------------------------------------------->
        <title>AREA CURRICULAR</title>
    </head>
    <body>
        <?php
        require_once 'Class/AreaCurricular.php';
        $AREACURRI = new AreaCurricular();
        ?>
    <center><h1><a>AREA CURRICULAR GENERAL 2015</a></h1></center>
    <div id="general">
        <center>
            <table id="tablegeneral" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>CURSO</th>
                        <th>NIVEL</th>
                        <th>POSICI&Oacute;N</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $resultset = $AREACURRI->LISTAR_AREAS_CURRICULARES();
                    while ($row = mysql_fetch_array($resultset)) {
                        ?>
                        <tr>        
                            <td><?php echo $row[1] ?></td>
                            <td class="center"><?php echo $row[2] ?></td>
                            <td class="center"><?php echo $row[3] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tbody></tbody>
            </table>
        </center>
    </div>
    <br>
    <br>
    <center>
        <table>
            <tr>
                <td>
                    <div id="inicial">
                        <center>
                            <fieldset>
                                <legend>INICIAL</legend>
                                <table id="tablegeneral" class="table-striped" border="1">
                                    <thead>
                                        <tr>
                                            <th>CURSO</th>
                                            <th>NIVEL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $inicial = $AREACURRI->LISTAR_AREAS_INICIAL();
                                        while ($row = mysql_fetch_array($inicial)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row[0] ?></td>
                                                <td class='center'><?php echo $row[1] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tbody></tbody>
                                </table>
                            </fieldset>
                        </center>
                    </div>
                </td>
                <td>
                    <div id="primaria">
                        <center>
                            <fieldset>
                                <legend>PRIMARIA</legend>
                                <table id="tablegeneral" class="table-striped" border="1">
                                    <thead>
                                        <tr>
                                            <th>CURSO</th>
                                            <th>NIVEL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $primaria = $AREACURRI->LISTAR_AREAS_PRIMARIA();
                                        while ($row1 = mysql_fetch_array($primaria)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row1[0] ?></td>
                                                <td class='center'><?php echo $row1[1] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tbody></tbody>
                                </table>
                            </fieldset>
                        </center>        
                    </div>
                </td>
                <td>
                    <div id="secundaria">
                        <center>
                            <fieldset>
                                <legend>SECUNDARIA</legend>
                                <table id="tablegeneral" class="table-striped" border="1">
                                    <thead>
                                        <tr>
                                            <th>CURSO</th>
                                            <th>NIVEL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $secundaria = $AREACURRI->LISTAR_AREAS_SECUNDARIA();
                                        while ($row2 = mysql_fetch_array($secundaria)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row2[0] ?></td>
                                                <td class='center'><?php echo $row2[1] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tbody></tbody>
                                </table>
                            </fieldset>
                        </center>        
                    </div>
                </td>              
            </tr>
        </table>
    </center>
</body>
</html>