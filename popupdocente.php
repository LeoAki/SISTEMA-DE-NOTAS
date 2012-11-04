<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
<!----------------------------------BOOTSTRAP---------------------------------------------------->
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<!----------------------------------DATA-TABLE--------------------------------------------------->
        <link href="Include/data-table/css/jquery.dataTables.css" rel="stylesheet"/>
        <link href="Include/data-table/css/jquery.dataTables_themeroller.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
        <link href="Include/data-table/css/demo_table_jui.css" rel="stylesheet"/>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/bootstrap/bootstrap.js"></script>        
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
function seleccionar(codigo,valor){
    formulario=opener.document.getElementById('frmsecciones');
    formulario.txttutornombre.value=valor;
    formulario.txttutorid.value=codigo;
    close();
}          
        </script>
        <title>Listado</title>
    </head>
<?php
require_once 'Class/Docente.php';
$DOCENTE= new Docente();
?>
<body>
    <div>
        <table id="lista">
            <thead>
                <tr>
                    <td>C&oacute;digo</td>
                    <td>Docente</td>
                    <td>Dni</td>
                    <td>Tipo</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $lista=$DOCENTE->LISTAR();
                    while ($row = mysql_fetch_array($lista)) {
                        echo "
                            <tr>
                            <td class='center'><a href='javascript: seleccionar(\"$row[0]\",\".$row[1].".$row[2].".".$row[3]."\")'>" . $row[0]. "</a></td>
                            <td>".$row[1].$row[2].$row[3]."</td>
                            <td>".$row[4]."</td>
                            <td>".$row[5]."</td>
                            </tr>
                            ";
                    }
                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>
