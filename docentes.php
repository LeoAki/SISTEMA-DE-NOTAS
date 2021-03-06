<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
        <script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP---------------------------------------------------->
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
        <script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
        <script type="text/javascript" src="Js/bootstrap-popover.js"></script>
        <script type="text/javascript" src="Js/bootstrap-tab.js"></script>
        <script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<!----------------------------------DATA-TABLE--------------------------------------------------->
        <link href="Include/data-table/css/jquery.dataTables.css" rel="stylesheet"/>
        <link href="Include/data-table/css/jquery.dataTables_themeroller.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_table_jui.css" rel="stylesheet"/>
        <script type="text/javascript" src="Include/data-table/js/jquery.dataTables.js"></script>
<!----------------------------------------------------------------------------------------------->
        <script type="text/javascript" charset="utf-8">
        /* Define two custom functions (asc and desc) for string sorting */
			jQuery.fn.dataTableExt.oSort['string-case-asc']  = function(x,y) {
				return ((x < y) ? -1 : ((x > y) ?  1 : 0));
			};

			jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x,y) {
				return ((x < y) ?  1 : ((x > y) ? -1 : 0));
			};

			$(document).ready(function() {
				/* Build the DataTable with third column using our custom sort functions */
				$('#listadocentes').dataTable( {
					"aaSorting": [ [0,'asc'], [1,'asc'] ],
					"aoColumnDefs": [
						{ "sType": 'string-case', "aTargets": [ 2 ] }
					]
				} );
			} );
        </script>
        <title>LNCC OnLine- Docente</title>
    </head>
    <?php require_once 'Class/Docente.php'; ?>
    <body>
        <?php require_once 'Includes/navegador.php';
        //Variables Locales
        $codigo=0;
        $paterno="";
        $materno="";
        $nombres="";
        $dni="";
        $codigopersona=0;
        $tipoprofe=0;
        $DOCENTE= new Docente();
        /*--------------------------------------MANTENIMIENTO-----------------------------------*/
    
        ?>
        <div>
            <?php echo "<form name='frmdocente' id='frmdocente' method='post' action='docente.php?GRABAR='".$codigo."'>"; ?>

                        <center>
                        <div class="form-actions">
                            <button type="submit"class="btn btn-primary" id="btnsave" name="btnsave">GRABAR</button>
                            <button type="button" id="btnlist" name="btnlist" class="btn btn-danger">EXPORTAR A EXCEL</button>
                        </div>
                        </center>
            <fieldset>
                <legend>LISTA DE DOCENTES</legend>
                <table id='listadocentes' name='listadocentes' class="display">
                    <thead>
                        <tr class="gradeU">
                            <th>CODIGO</th>
                            <th>PATERNO</th>
                            <th>MATERNO</th>
                            <th>NOMBRES</th>
                            <th>DNI</th>
                            <th>TIPO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $lista=$DOCENTE->LISTAR();
                        while ($row1 = mysql_fetch_array($lista)) {
                            echo "
                                <tr class='gradeA'>
                                    <td class='center'><a href='docente?search=". '"' .$row1[0]. '"' . "'>" . $row1[0]. "</a></td>
                                    <td>".$row1[1]."</td>
                                    <td>".$row1[2]."</td>
                                    <td>".$row1[3]."</td>
                                    <td>".$row1[4]."</td>
                                    <td>".$row1[5]."</td>
                                </tr>
                                ";
                        }
                        ?>
                    </tbody>
                </table>
            </fieldset>
            <?php echo "</form>";?>
        </div>

        <?php require_once 'Includes/modal-footer.php';?>
    </body>
</html>
