<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
        <!----------------------------------BOOTSTRAP---------------------------------------------------->
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <!----------------------------------DATA-TABLE--------------------------------------------------->
        <style type="text/css">
            @import "Include/DataTables-1.9.4/media/css/demo_table.css";
            @import "Include/DataTables-1.9.4/media2/css/ColReorder.css";
            @import "Include/DataTables-1.9.4/extras/ColVis/media/css/ColVis.css";
            thead input { width: 100% }
            input.search_init { color: #999 }
            .leoaki{width: 97%;}
        </style>
        <title>LNCC OnLine- Docente</title>
    </head>
    <?php
    require_once 'Class/Docente.php';
    require_once 'Class/Usuario.php';
    if (!isset($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario) {
        session_destroy();
        echo "<script>window.location = 'index.php'</script>";
    } else {
        ?>
        <body style="background-color: #ffffff">
            <?php
            require_once 'Includes/navegador.php';
            $DOCENTE = new Docente();
            ?>
        <center>
            <div class="leoaki">
                <fieldset>
                    <table id='listadocentes' name='listadocentes' class="table table-hover">
                        <thead>
                            <tr class="gradeU"><th>CODIGO</th><th>DOCENTE</th><th>DNI</th><th>TIPO</th><th>CARGO</th><th>Ver Registros</th></tr>
                        </thead>
                        <tbody>
                            <?php $lista = $DOCENTE->LISTAR(); ?>
                            <?php while ($row1 = mysql_fetch_array($lista)): ?>
                                <tr class='gradeA'>
                                    <td class=center'><a><?php echo $row1[0] ?></a></td>
                                    <td><?php echo $row1[1] . ' ' . $row1[2] . ' ,' . $row1[3] ?></td>
                                    <td><?php echo $row1[4] ?></td>
                                    <td><?php echo $row1[5] ?></td>
                                    <td><?php echo $row1[6] ?></td>
                                    <td><a target='_blank'  href='listreg.php?dnidocente=<?php echo $row1[4] ?>'>Ver Registros</a></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                        <tfoot><tr><th>CODIGO</th><th>DOCENTE</th><th>DNI</th><th>TIPO</th><th>CARGO</th><th>Ver Registros</th></tr></tfoot>
                    </table>
                </fieldset>
            </div>
        </center>
        <br><br><br><br><br><br>
    </body>
<?php } ?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Include/DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="Include/DataTables-1.9.4/media2/js/ColReorder.js"></script>
<script type="text/javascript" src="Include/DataTables-1.9.4/extras/ColVis/media/js/ColVis.js"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        var oTable;

        /* Add the events etc before DataTables hides a column */
        $("thead input").keyup(function () {
            /* Filter on the column (the index) of this element */
            oTable.fnFilter(this.value, oTable.oApi._fnVisibleToColumnIndex(
                    oTable.fnSettings(), $("thead input").index(this)));
        });

        /*
         * Support functions to provide a little bit of 'user friendlyness' to the textboxes
         */
        $("thead input").each(function (i) {
            this.initVal = this.value;
        });

        $("thead input").focus(function () {
            if (this.className == "search_init")
            {
                this.className = "";
                this.value = "";
            }
        });

        $("thead input").blur(function (i) {
            if (this.value == "")
            {
                this.className = "search_init";
                this.value = this.initVal;
            }
        });

        oTable = $('#listadocentes').dataTable({
            "sDom": 'RC<"clear">lfrtip',
//            "aoColumnDefs": [
//                {"bVisible": false, "aTargets": [5, 6]}
//            ],
            "oLanguage": {
                "sSearch": "Filtra el docente:"
            },
            "bSortCellsTop": true
        });
    });
</script>
</html>