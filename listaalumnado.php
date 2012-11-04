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
				$('#lista').dataTable( {
					"aaSorting": [ [0,'asc'], [1,'asc'] ],
					"aoColumnDefs": [
						{ "sType": 'string-case', "aTargets": [ 2 ] }
					]
				} );
			} );
        </script>
        <title>LNCC ON LINE--ALUMNO</title>
    </head>
        <?php
        require_once 'Class/Alumno.php';
        $ALUMNO=new Alumno();
        ?>
    <body>
        <center><h1><a>LISTA DE ALUMNOS</a></h1></center>
        <div>
            <table class="display" id="lista">
                <thead class="succes">
                    <tr class='gradeU'>
                        <th>CODIGO-ALUMNO</th>
                        <th>CODIGO_SECCION</th>
                        <th>NIVEL</th>
                        <th>SECCION</th>
                        <th>PATERNO</th>
                        <th>MATERNO</th>
                        <th>NOMBRES</th>
                        <th>DNI</th>
                        <th>DOMICILIO</th>
                        <th>CELULAR/FIJO</th>
                        <th>EMAIL</th>
                        <th>COLEGIO PROCEDENTE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $respuesta=$ALUMNO->LISTAR();
                    while ($row = mysql_fetch_array($respuesta)) {
                        echo "
                        <tr class='gradeA'>
                        <td class='center'><a href='alumno?search=". '"' .$row[0]. '"' . "'>" . $row[0]. "</a></td>
                        <td class='center'>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td>
                        <td>".$row[6]."</td>
                        <td>".$row[7]."</td>
                        <td>".$row[8]."</td>
                        <td>".$row[9]."</td>
                        <td>".$row[10]."</td>
                        <td>".$row[11]."</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>