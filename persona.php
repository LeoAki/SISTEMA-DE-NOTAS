<?php session_start();?>
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
        </script>
        <title>MANTENIMIENTO DE DATOS DE PERSONAS </title>
    </head>
    <?php
    require_once 'Class/Persona.php';
    require_once 'Class/Usuario.php';
        if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
    session_destroy();
    header('Location: index.php');
}else {
    ?>
    <body>
        <?php
        // variables locales
        $codigo=0;
        $paterno;
        $materno;
        $nombres;
        $dni_persona;
        $sexo;
        $email;
        $PERSONA=new Persona();
        /*--------------------------------------MANTENIMIENTO-----------------------------------*/
    if(isset($_REQUEST['GRABAR'])){
        if(isset($_REQUEST['txtcodigo'])
        ){
            $PERSONA->setCODIGO($_REQUEST['txtcodigo']);
            $PERSONA->setPATERNO($_REQUEST['txtpaterno']);
            $PERSONA->setMATERNO($_REQUEST['txtmaterno']);
            $PERSONA->setNOMBRES($_REQUEST['txtnombres']);
            $PERSONA->setDNI($_REQUEST['txtdni']);
            $PERSONA->setSEXO($_REQUEST['txtsexo']);
            $PERSONA->setEMAIL($_REQUEST['txtemail']);
            $PERSONA->GRABAR();
            header("Location:persona.php");
        }
    }
    #---------------------------------------------------------------------------
    if(isset ($_REQUEST['search'])){
            $PERSONA= Persona::BUSCAR($_REQUEST['search']);
            $codigo=$PERSONA->getCODIGO();
            $paterno=$PERSONA->getPATERNO();
            $materno=$PERSONA->getMATERNO();
            $nombres=$PERSONA->getNOMBRES();
            $dni_persona=$PERSONA->getDNI();
            $sexo=$PERSONA->getSEXO();
            $email=$PERSONA->getEMAIL();
    }
        ?>
        <div>
            <?php echo "<form name='frmsecciones' id='frmsecciones' method='post' action='persona.php?GRABAR='".$codigo."'>"; ?>
            <center>
            <div style="width: 50%">
            <fieldset>
                
                    <table id="tableseccion" class="table">
                        
                    <center><h3>EDITAR DATOS DE PERSONAS</h3></center>
                    <tr>
                                <td style="display: none;"><a>CODIGO: </a><input type='text' id='txtcodigo' name='txtcodigo' <?php echo "value='".$codigo."'";?>></td>
                                <td><a>PATERNO: </a><input type="text" name="txtpaterno" id="txtpaterno" <?php echo "value='".$paterno."'";?>/></td>
                    </tr>
                    <tr>
                                <td><a>MATERNO: </a><input type="text" name="txtmaterno" id="txtmaterno" <?php echo "value='".$materno."'";?>/></td>
                    </tr>
                    <tr>
                                <td><a>NOMBRES: </a><input type="text" name="txtnombres" id="txtnombres" <?php echo "value='".$nombres."'";?>/></td>
                    </tr>
                    <tr>
                                <td><a>DNI: </a><input type="text" name="txtdni" id="txtdni" <?php echo "value='".$dni_persona."'";?>/></td>
                    </tr>
                    <tr>
                                <td><a>SEXO: </a><input type="text" name="txtsexo" id="txtsexo" <?php echo "value='".$sexo."'";?>/></td>
                    </tr>
                    <tr>
                                <td><a>EMAIL: </a><input type="text" name="txtemail" id="txtemail" <?php echo "value='".$email."'";?>/></td>
                    </tr>
                </table>
            </fieldset>
            </div>
            </center>
                        <center>
                        <div class="form-actions">
                            <button type="submit"class="btn btn-primary" id="btnsave" name="btnsave">GRABAR</button>
                        </div>
                        </center>           
            <div id="divlist">
                <fieldset>
                        <legend>LISTA DE SECCIONES</legend>
                    <table id='listasecciones' name='listasecciones' class="display">
                        <thead>
                            <tr class="gradeU">
                                <th>CODIGO</th>
                                <th>PATERNO</th>
                                <th>MATERNO</th>
                                <th>NOMBRES</th>
                                <th>DNI</th>
                                <th>SEXO</th>
                                <th>EMAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $lista=$PERSONA->Listar();
                            while ($row2 = mysql_fetch_array($lista)) {
                                echo "
                                    <tr class='gradeA'>
                                        <td class='center'><a href='persona.php?search=". '"' .$row2[0]. '"' . "'>" . $row2[0]. "</a></td>
                                        <td>".$row2[1]."</td>
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
    <?php }?>
</html>
