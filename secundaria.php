<?php session_start();
    $dni=$_SESSION['dni'];
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>SECUNDARIA</title>
        <?php 
        require_once 'Class/Conection.php';
        require_once 'Class/Niveles.php';
        $Niveles=new Niveles();
        ?>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
<!-------------------------------------------------------------------------------------------------->

    </head>
    <body>
<?php require_once 'Includes/navegador.php'; ?>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span1">
                    
                    <h3>NIVEL SECUNDARIA</h3>

                    <ul>
                        <li><a style="color: #1a1a1a" onclick="Aulaspornivel(3,4)">1er GRADO</a><br><br></li>
                        <li><a style="color: #1a1a1a" onclick="Aulaspornivel(3,5)">2do GRADO</a><br><br></li>
                        <li><a style="color: #1a1a1a" onclick="Aulaspornivel(3,6)">3er GRADO</a><br><br></li>
                        <li><a style="color: #1a1a1a" onclick="Aulaspornivel(3,7)">4to GRADO</a><br><br></li>
                        <li><a style="color: #1a1a1a" onclick="Aulaspornivel(3,8)">5to GRADO</a><br><br></li>
                    </ul>
                </div>
                <div class="span11" id="divaulas" style="background-color: pink;">
                    <br><br><br>
                    <center>
                        <h1>Elija un grado del men&uacute; de la izquierda.</h1>
                        <h3>para ver su descripci&oacute;n</h3>
                    </center>
                    <br><br><br>
                </div>
            </div>
        </div>
<?php require_once 'Includes/modal-footer.php'; ?>
    </body>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<script type="text/javascript" src="Js/ajax.js"></script>
<!----------------------------------BOOTSTRAP--js--------------------------------------------------->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
<script type="text/javascript" src="Js/bootstrap-collapse.js"></script>
    <?php ?>
</html>
