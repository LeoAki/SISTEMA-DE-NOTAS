<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LNCC ONLINE--Registra tus notas</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
</head>
    <body>
<?php
require_once 'Includes/navegador.php';
require_once 'Class/Docente.php';
$Doce= new Docente();
$dnidocente=$_GET['dnidocente'];
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
    session_destroy();
    echo "<script>window.location = 'index.php'</script>";
}else {
?>
        <div style="margin-left: 8%;margin-right: 8%;">
            <center><h3 style="color: green">Registro De Notas</h3></center>
            <form >
                <fieldset>
                    <div class='alert alert-success'>Ver <i class='icon-eye-open'></i>---> Primaria & Secundaria</div>
                    <div class='alert alert-danger'>I <i class='icon-hand-up'></i> ----> Inicial</div>
                    <table class="table table-hover">
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
                            $lista=$Doce->RegistroDocente($dnidocente);
                            while ($row = mysql_fetch_array($lista)) {
                                echo "
                                    <tr>
                                        <td>REGISTRO N&#176; ".$row[0]."</td>
                                        <td>".$row[2]." ".$row[3]." DE ".$row[1]."</td>
                                        <td>".$row[7]."</td>
                                        <td>
                                     <a id='unover' TARGET = '_blank' href='imprimir_reg.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>
                                        	 Ver <i class='icon-eye-open'></i>
                                     </a>
                                     <a id='dosver' TARGET = '_blank' href='imprimir_reginicial.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>
                                        	 I <i class='icon-hand-up'></i>
                                     </a>
                                        </td>
                                        <td><i class='icon-eye-close'></i></td>
                                        <td><i class='icon-eye-close'></i></td>
                                        <td><i class='icon-eye-close'></i></td>
                                        <td><i class='icon-eye-close'></i></td>
                                    </tr>
                                    ";
                            }
                            ?>
                        </tbody>
                    </table>
                </fieldset>
            </form>
            
                <ul class="pager">
    <li><a href="busdocente.php">Volver</a></li>
    <li><a href="vistadegrados.php">Lista_Indicadores</a></li>
    </ul>
            
        </div>
        
<br><br><br><br><br><br>
        <?php require_once 'Includes/modal-footer.php';?>
    </body>
    <?php }?>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
<script type="text/javascript">
	$('#unover').tooltip({title:"Primaria o Secundaria",placement:'left'});
	$('#dosver').tooltip({title:"Inicial",placement:'right'});
</script>
</html>