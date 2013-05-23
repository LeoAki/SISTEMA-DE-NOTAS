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
				$('#listacursos').dataTable( {
					"aaSorting": [ [0,'asc'], [1,'asc'] ],
					"aoColumnDefs": [
						{ "sType": 'string-case', "aTargets": [ 2 ] }
					]
				} );
			} );
        </script>

        <title>CURSOS GENERALES</title>
    </head>
    <?php 
    require_once 'Class/CursoGeneral.php';
    $cursogeneral=new CursoGeneral();
    $codigo;$curso;
    /*--------------------------------------MANTENIMIENTO-----------------------------------*/
    if(isset ($_REQUEST['GRABAR'])){
        if(isset ($_REQUEST['txtcodigo']) && isset ($_REQUEST['txtcurso'])){
            $cursogeneral->setCODE($_REQUEST['txtcodigo']);
            $cursogeneral->setCURSO($_REQUEST['txtcurso']);
            $cursogeneral->GRABAR();
            header("Location:cursosgenerales");
        }
    }
    /*---------------------------------------------------------------------------------------*/
    if(isset ($_REQUEST['search'])){
        $cursogeneral=CursoGeneral::SEARCH($_REQUEST['search']);
        $codigo=$cursogeneral->getCODE();
        $curso=$cursogeneral->getCURSO();
        unset ($cursogeneral);
    }
    /*---------------------------------------------------------------------------------------*/
    ?>
    <body>
        <div id="main">
        <?php echo "<form name='frmcursosgenerales' method='post' action='cursosgenerales.php?GRABAR='".$codigo."'>"; ?>
            <fieldset>
                <center><legend>CURSOS</legend></center>

                <center>
                <table id="tablecursos">
                    <h3>Mantenimiento De Cursos</h3>
                    <tbody>
                        <tr style="display:none;">
                            <?php echo "<td><input type='text' name='txtcodigo' id='txtcodigo' value='".$codigo."'/></td>"; ?>
                        </tr>
                        <tr>
                            <td>CURSO:</td>
                            <td><?php echo "<input type='text' name='txtcurso' id='txtcurso' value='".$curso."'/>"; ?></td>
                        </tr>
                    </tbody>
                </table>
                </center>
            </fieldset>

                        <center>
                        <div class="form-actions">
                            <button type="submit"class="btn btn-primary" id="btnsave" name="btnsave">GRABAR</button>
                            <button type="button" id="btnlist" name="btnlist" class="btn btn-danger">EXPORTAR A EXCEL</button>
                        </div>
                        </center>

        <div id="divlist">
            <fieldset>
                <legend>LISTA DE CURSOS GENERALES</legend>
                <table id="listacursos" name="listacursos" class="display">
                    <thead>
                        <tr class="gradeU">
                            <th>CODIGO</th>
                            <th>CURSO</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $resultadolista=CursoGeneral::LISTAR();
                        while ($row = mysql_fetch_array($resultadolista,MYSQL_NUM)) {
                            echo "
                                <tr class='gradeA'>
                                    <td class='center'><a href='cursosgenerales?search=". '"' .$row[0]. '"' . "'>" . $row[0]. "</a></td>
                                    <td>".$row[1]."</td>
                                    <td class='center'>Eliminar</td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </fieldset>
        </div>
        <?php echo "</form>"; ?>
        </div>
    </body>
</html>
