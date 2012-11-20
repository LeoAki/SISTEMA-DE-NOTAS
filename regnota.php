<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Registra La Asistencia de tus Secciones</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
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

    </head>
    <body>
        <?php 
        require_once 'Includes/navegador.php';    
        require_once 'Class/Docente.php';
        $Doce= new Docente();
        $dni=$_SESSION['dni'];
        ?>
        <div style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">Registro De Notas Por Bimestre:</h3></center>
            
            
            <?php 
            if($dni==08690825 or $dni==06777861 or $dni==10618561 or $dni==22083058 or
               $dni==09461579 or $dni==25704169 or $dni==25684322 or $dni==25748449 or $dni==25818987
                    ){?>
            <div id="soloinicial">
            <?php echo "PROFESORA DE INICIAL HAGA CLIC  <a href='regnotainicial.php' class='btn btn-primary'>AQU&Iacute;</a> Y OBVIE LO DE ABAJO";?>    
                
            </div>
            <?php }?>
            
            
            <form >
                <fieldset>
                    <legend>Bimestre Actual:IV</legend>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 15%;">Registro</th>
                                <th style="width: 22%;">Secci&oacute;n</th>
                                <th style="width: 23%">Asignatura</th>
                                <th style="width: 8%;">I</th>
                                <th style="width: 8%;">II</th>
                                <th style="width: 8%;">III</th>
                                <th style="width: 8%;">IV</th>
                                <th style="width: 8%;">Anual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $lista=$Doce->RegistroDocente($dni);
                            while ($row = mysql_fetch_array($lista)) {
                                echo "
                                    <tr>
                                        <td>REGISTRO N° ".$row[0]."</td>
                                        <td>".$row[2]." ".$row[3]." DE ".$row[1]."</td>
                                        <td>".$row[7]."</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a  TARGET = '_blank' href='registra.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Registrar</a></td>
                                        <td></td>
                                    </tr>
                                    ";
                            }
                            ?>
                        </tbody>
                    </table>
                </fieldset>
            </form>
        </div>
        <?php require_once 'Includes/modal-footer.php';?>
    </body>
</html>
<!--ABELLA ANDERSON-->