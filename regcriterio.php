<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Registra Los Criterios Del Curso</title>
<?php
require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
session_destroy();
                    echo "<script>window.location = 'index.php'</script>";
}else {
?>        
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
    </head>
    <body>
<?php 
require_once 'Includes/navegador.php'; 
require_once 'Class/Component.php';
require_once 'Class/Indicador.php';
$INDICAXD= new Indicador();
?>
        
<center><h3 style="color: green">DEFINICION DE LOS CRITERIOS DE EVALUACI&Oacute;N</h3>
<?PHP
$asina = $_GET['asinatura'];
?>
<table>
<?php
$COMPO = new Component();
$mysql=$COMPO->ListarDatosAsignatura($asina);
if($rowgeneral=  mysql_fetch_array($mysql)){
    $variable1=$rowgeneral['grado'];
    $variable2=$rowgeneral['nomnivel'];
    $variable3=$rowgeneral['asinatura'];
}
?>
</table>
<?php echo 
"<h4>".$variable1." Grado De " .$variable2."<br>"." Asignatura: ".$variable3." </h4>"?>
</center>
    
<form action="regcomponent" method="get">
    <table class="display">
    <?php 
    $COMPONENTE=new Component();
    $listar=$COMPONENTE->LISTAR($asina);
    while ($row = mysql_fetch_array($listar)) {
        echo "
            <form id='".$row[1]."' name='".$row[1]."' method='post' action='f'>
                <tr class='gradeX'>
                    <td style='width:10%'><h4>".$row[1]."</h4></td>
                    <td><h4>".$row[3]."</h4></td>
                </tr>";
        echo "
            <tr>
            <td colspan=2><a href='regindicador.php?componente=".$row[0]."' TARGET = '_blank'>AGREGAR<i class='con-user'></i></a></td>
            </tr>
            ";
                            $lista=$INDICAXD->LISTAR($row[0]);
                            while ($row2 = mysql_fetch_array($lista)) {
                                echo "
                                    <tr class='gradeA'>
                                        <td class='center'><a href='regindicador.php?componente=".$row[0]."&orden=".$row2[3]."&indicador=".$row2[2]."&codeindi=".$row2[0]."' TARGET = '_blank'>" .$row[1].".". $row2[3]. "</a></td>
                                        <td>".$row2[2]."</td>
                                     </tr>
                                    ";
                            }
        echo "
        </form>
            ";

    }
    ?>
    </table>
 <?php require_once 'Includes/modal-footer.php';?>
<?php
        }
?>    
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
