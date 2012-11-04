<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
    <!--<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>-->
<!----------------------------------BOOTSTRAP---------------------------------------------------->
    <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
    <!--<script type="text/javascript" src="Js/bootstrap/bootstrap.js"></script>-->
<!----------------------------------DATA-TABLE--------------------------------------------------->
    <link href="Include/data-table/css/jquery.dataTables.css" rel="stylesheet"/>
    <link href="Include/data-table/css/jquery.dataTables_themeroller.css" rel="stylesheet"/>
    <link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
    <link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
    <link href="Include/data-table/css/demo_table_jui.css" rel="stylesheet"/>
<!--        <script type="text/javascript" src="Include/data-table/js/jquery.dataTables.js"></script>-->
<!----------------------------------------------------------------------------------------------->
<title>MANTENIMIENTO DE SECCIONES</title>
</head>
<body>
<?php 
require_once 'Includes/navegador.php';    
$codigo=0;
$codigoseccion=$_REQUEST['txtidseccion'];
$codigodocente=$_REQUEST['txttutorid'];
$codigoasinatura=$_REQUEST['txtsinatureid'];
require_once 'Class/Registro.php';
$REGISTRO=new Registro();
/*--------------------------------------MANTENIMIENTO-----------------------------------*/
if(isset($_REQUEST['GRABAR'])){
    $REGISTRO->setCODIGO($_REQUEST['txtcodigo']);
    $REGISTRO->setCODIGOSECCION($codigoseccion);
    $REGISTRO->setCODIGODOCENTE($_REQUEST['txttutorid']);
    $REGISTRO->setCODIGOASINATURA($_REQUEST['txtsinatureid']);
    $REGISTRO->GRABAR();
    header('Location:registros.php');
}
?>
<div style="margin-left: 15%;margin-right: 15%;">
<?php echo "<form name='frmsecciones' id='frmsecciones' method='post' action='registros.php?GRABAR='".$codigo."'>"; ?>
<fieldset>
    <center><legend>REGISTROS 2012</legend>
    <caption><code>ADMINISTRACI&Oacute;N DE REGISTROS</code></caption>
    </center>
    <table id="tableregistro" class="table">
        <tr>
            <td>
                    <a>REGISTRO:</a>
            </td>
            <td>
                    <input type="text" id="txtcodigo" <?php echo "value='".$codigo."'"; ?>/>
            </td>
        </tr>
        <tr>
            <td>
                    <a>SECCION:</a>
            </td>
            <td>
                    <input type="text" id="txtseccion"/>
                    <input type="text" id="txtidseccion" name="txtidseccion" style="display: none;"/>
                    <button type="button" class="btn btn-primary"onclick="javascript:Abrir_ventana('popupseccion.php')">BUSCAR</button>
            </td>
        </tr>
        <tr>
            <td>
                    <a>DOCENTE:</a>
            </td>
            <td>
                    <input type="text" id="txttutornombre" class="input-xxlarge"/>
                    <input type="text" id="txttutorid" name="txttutorid" style="display: none;"/>
                <button type="button" class="btn btn-primary" onclick="javascript:Abrir_ventana('popupdocente.php')">BUSCAR</button>
            </td>
        </tr>
        <tr>
            <td>
                    <a>AREA:</a>
            </td>
            <td>
                    <input type="text" id="txtsinaturevalue" class="input-xxlarge"/>
                    <input type="text" id="txtsinatureid" name="txtsinatureid" style="display: none;"/>
            <button type="button" class="btn btn-primary" onclick="javascript:Abrir_ventana('popupsinatura.php')"</button>BUSCAR</button>
            </td>
        </tr>
    </table>
</fieldset>
    
    
<center>
<div class="form-actions">
    <button type="submit"class="btn btn-danger" id="btnsave" name="btnsave">GRABAR/ACTUALIZAR REGISTRO</button>
</div>
</center>    
    
<div>
    <fieldset>
        <legend>LISTA DE REGISTROS</legend>
        <table id="listaregistros" name="listaregistros" class="display">
            <thead>
                <tr>
                    <th style="width: 10%;">N° Registro</th>
                    <th>Secci&oacute;n</th>
                    <th>Docente</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
        </table>
    </fieldset>
</div>    
<?php 
echo "</form>";
?>
</div>        
<?php require_once 'Includes/modal-footer.php';    ?>
</body>
</html>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>

<script type="text/javascript" src="Include/data-table/js/jquery.dataTables.js"></script>
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
                        $('#listaregistros').dataTable( {
                                "aaSorting": [ [0,'asc'], [1,'asc'] ],
                                "aoColumnDefs": [
                                        { "sType": 'string-case', "aTargets": [ 2 ] }
                                ]
                        } );
                } );
function Abrir_ventana (pagina) {
    window.open(pagina,'','width=480,height=480,menubar=no,scrollbars=yes,toolbar=no,location=no,directories=no,resizable=no,top=0,left=0');
}
</script>
