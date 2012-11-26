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

        require_once 'Class/Usuario.php';
        if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
    session_destroy();
#    header('Location: index.php');
                    echo "<script>window.location = 'index.php'</script>";
}else {
        
        ?>
        <div style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">Registro De Notas Por Bimestre:</h3></center>
            <?php echo "<i>si eres profesora de inicial, haz clic <a href='regnotainicial.php' class='btn btn-primary'>AQU&Iacute;</a> y obvie lo de abajo</i>";?>    
            
            
            <form >
                <fieldset>
                    <legend>Bimestre Actual:IV</legend>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 15%;">Registro</th>
                                <th style="width: 22%;">Secci&oacute;n</th>
                                <th style="width: 23%">Asignatura</th>
                                <th style="width: 8%;"><center>I</center></th>
                                <th style="width: 8%;"><center>II</center></th>
                                <th style="width: 8%;"><center>III</center></th>
                                <th style="width: 8%;"><center>IV</center></th>
                                <th style="width: 8%;"><center>Anual</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $lista=$Doce->RegistroDocente($dni);
                            while ($row = mysql_fetch_array($lista)) {
                                echo "
                                    <tr>
                                        <td>REGISTRO N&#176; ".$row[0]."</td>
                                        <td>".$row[2]." ".$row[3]." DE ".$row[1]."</td>
                                        <td>".$row[7]."</td>
                                        <td><a href='#'><center><i class='icon-eye-open'></i></center></a></td>
                                        <td><a href='#'><center><i class='icon-eye-open'></i></center></a></td>
                                        <td><a href='#'><center><i class='icon-eye-open'></i></center></a></td>
                                        <td><a TARGET = '_blank' href='registra.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Registrar</a></td>
                                        <td><a TARGET = '_blank' href='reganual.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'><center><i class='icon-eye-open'></i></center></a></td>
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
    <?php }?>    
</html>
