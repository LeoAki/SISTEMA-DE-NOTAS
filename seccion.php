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
				$('#listasecciones').dataTable( {
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
        <title>MANTENIMIENTO DE SECCIONES</title>
    </head>
    <?php require_once 'Class/Seccion.php'; ?>
    <body>
        <?php
        // variables locales
        $codigo=0;
        $anoescolar=0;
        $nivel=0;
        $grado=0;
        $seccion='';
        $tutor;$auxiliar;$asistencia;$psicologo;
        $SECCIONGENERAL= new Seccion;
        /*--------------------------------------MANTENIMIENTO-----------------------------------*/
    if(isset($_REQUEST['GRABAR'])){
        if(isset($_REQUEST['txtcodigo']) && isset($_REQUEST['txtgrado']) &&
        isset($_REQUEST['txtname']) && isset($_REQUEST['txtnivel'])
        ){
            $SECCIONGENERAL->setCODIGO($_REQUEST['txtcodigo']);
            $SECCIONGENERAL->setANO_ESCOLAR("2012");
            $SECCIONGENERAL->setCODIGO_NIVEL($_REQUEST['txtnivel']);
            $SECCIONGENERAL->setCODIGO_GRADO($_REQUEST['txtgrado']);
            $SECCIONGENERAL->setNOMBRESECCION($_REQUEST['txtname']);
            $SECCIONGENERAL->setCODIGOTUTOR($_REQUEST['txttutorid']);
            $SECCIONGENERAL->setAUXILIAR($_REQUEST['txtauxiliarid']);
            $SECCIONGENERAL->setREGISTROASISTENCIA($_REQUEST['txtasistenciaid']);
            $SECCIONGENERAL->setPSICOLOGO($_REQUEST['txtpsicoloid']);
            $SECCIONGENERAL->GRABAR();
            header("Location:seccion");
        }
    }
    #---------------------------------------------------------------------------
    if(isset ($_REQUEST['search'])){
            $SECCIONGENERAL= Seccion::BUSCAR($_REQUEST['search']);
            $codigo=$SECCIONGENERAL->getCODIGO();
            $anoescolar=$SECCIONGENERAL->getANO_ESCOLAR();
            $nivel=$SECCIONGENERAL->getNIVEL();
            $grado=$SECCIONGENERAL->getGRADO();
            $seccion=$SECCIONGENERAL->getNOMBRESECCION();
            $tutor=$SECCIONGENERAL->getCODIGOTUTOR();
            $auxiliar=$SECCIONGENERAL->getAUXILIAR();
            $asistencia=$SECCIONGENERAL->getREGISTROASISTENCIA();
            $psicologo=$SECCIONGENERAL->getPSICOLOGO();
    }
        ?>
        <div>
            <?php echo "<form name='frmsecciones' id='frmsecciones' method='post' action='seccion.php?GRABAR='".$codigo."'>"; ?>
            <fieldset>
                <center><legend>SECCIONES 2012</legend>
                    <table id="tableseccion" class="table">
                        <caption>..:SECCIONES:...</caption>
                    <center><h3>Mantenimiento De Secciones</h3></center>
                    <tr>
                        <td style="display: none;"><a>CODIGO: </a><input type='text' id='txtcodigo' name='txtcodigo' <?php echo "value='".$codigo."'";?>></td>
                        <td><a>NIVEL: </a>
                            <select name='txtnivel' id='txtnivel'>
                                <option value="">--ELIGE--</option>
                                <?php 
                                $filas=$SECCIONGENERAL->LISTARNIVELES();
                                while ($row = mysql_fetch_array($filas)) {
                                    echo "
                                    <option value='".$row[0]."'>".$row[1]."</option>
                                    ";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><a> GRADO : </a>
                            <select name='txtgrado' id='txtgrado'>
                                <option value="">--ELIGE--</option>
                                 <?php 
                                $filagrado=$SECCIONGENERAL->LISTARGRADOS();
                                while ($rowgrado = mysql_fetch_array($filagrado)) {
                                    echo "
                                    <option value='".$rowgrado[0]."'>".$rowgrado[1]."</option>
                                    ";
                                }
                                ?>
                            </select>
                        </td>
                        <td><a>NOMBRE DE LA SECCION:</a><input type='text' name='txtname' id='txtname' <?php echo " value='".$seccion."'"; ?>/></td>
                    </tr>
                </table>
                </center>
            </fieldset>
            <fieldset>
                <table id="encargados" class="table">
                    <caption>ENCARGADOS DEL AULA</caption>
                    <tr>
                        <td style="width: 20%;"><a>TUTOR:</a></td>
                        <td style="width: 60%;"><input type='text' id='txttutornombre' name='txttutornombre' style="width: 100%;"/></td>
                        <td style="display: none;"><input type='text' id='txttutorid' name='txttutorid' style="width: 100%;"/></td>
                        <td style="width: 20%;"><button type="button"class="btn btn-primary" id="buscatutor" name="buscatutor" onclick="javascript:Abrir_ventana('popuptutor.php')">BUSCAR</button></td>
                    </tr>
                    <tr>
                        <td style="width: 20%;"><a>AUXILIAR:</a></td>
                        <td style="width: 60%;"><input type='text' id='txtauxiliarnombre' name='txtauxiliarnombre' style="width: 100%;"/></td>
                        <td style="display: none;"><input type='text' id='txtauxiliarid' name='txtauxiliarid' style="width: 100%;"/></td>
                        <td style="width: 20%;"><button type="button"class="btn btn-primary" id="buscaauxiliar" name="buscaauxiliar" onclick="javascript:Abrir_ventana('popupauxiliar.php')">BUSCAR</button></td>
                    </tr>
                    <tr>
                        <td style="width: 20%;"><a>REGISTRO DE ASISTENCIA:</a></td>
                        <td style="width: 60%;"><input type='text' id='txtasistencianombre' name='txtasistencianombre' style="width: 100%;"/></td>
                        <td style="display: none;"><input type='text' id='txtasistenciaid' name='txtasistenciaid' style="width: 100%;"/></td>
                        <td style="width: 20%;"><button type="button"class="btn btn-primary" id="buscaasistencia" name="buscaasistencia" onclick="javascript:Abrir_ventana('popupasistencia.php')">BUSCAR</button></td>
                    </tr>
                    <tr>
                        <td style="width: 20%;"><a>PSICOLOGO:</a></td>
                        <td style="width: 60%;"><input type='text' id='txtpsicolonombre' name='txtpsicolonombre' style="width: 100%;"/></td>
                        <td style="display: none;"><input type='text' id='txtpsicoloid' name='txtpsicoloid' style="width: 100%;"/></td>
                        <td style="width: 20%;"><button type="button"class="btn btn-primary" id="buscapsicologo" name="buscapsicologo" onclick="javascript:Abrir_ventana('popuppsico.php')">BUSCAR</button></td>
                    </tr>                    
                </table>
            </fieldset>
                        <center>
                        <div class="form-actions">
                            <button type="submit"class="btn btn-primary" id="btnsave" name="btnsave">GRABAR</button>
                            <button type="button" id="btnlist" name="btnlist" class="btn btn-danger">EXPORTAR A EXCEL</button>
                        </div>
                        </center>           
            <div id="divlist">
                <fieldset>
                        <legend>LISTA DE SECCIONES</legend>
                    <table id='listasecciones' name='listasecciones' class="display">
                        <thead>
                            <tr class="gradeU">
                                <th>CODIGO</th>
                                <th>NIVEL</th>
                                <th>GRADO</th>
                                <th>SECCION</th>
                                <th>TUTOR</th>
                                <th>AUXILIAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $lista=$SECCIONGENERAL->LISTAR();
                            while ($row2 = mysql_fetch_array($lista)) {
                                echo "
                                    <tr class='gradeA'>
                                        <td class='center'><a href='seccion.php?search=". '"' .$row2[0]. '"' . "'>" . $row2[0]. "</a></td>
                                        <td>".$row2[2]."</td>
                                        <td>".$row2[3]."</td>
                                        <td>".$row2[4]."</td>
                                        <td>".$row2[5]."</td>
                                        <td>".$row2[6]."</td>
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
