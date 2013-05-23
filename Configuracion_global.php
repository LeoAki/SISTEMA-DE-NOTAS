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
        <title>Configuracion Global</title>
    </head>
    <?php 
    require_once 'Class/Globales.php';
    $CONFIGURACION=new Globales();
    $ano="";
    $bimestre=0;
    if(isset($_REQUEST['ACTUALIZAR'])){
        if(isset($_REQUEST['txtanoescolar']) && isset($_REQUEST['txtbimestre'])){
//            $CONFIGURACION->setANOESCOLAR($_REQUEST['txtanoescolar']);
//            $CONFIGURACION->setBIMESTRE($_REQUEST['txtbimestre']);
            $ano=$_REQUEST['txtanoescolar'];
            $bimestre=$_REQUEST['txtbimestre'];
            $CONFIGURACION->ACTUALIZAR($ano, $bimestre);
            header("Location:Configuracion_global.php");
        }
    }
    if(isset($_REQUEST['search'])){
        
    }
    ?>
    <body>
        <?php
        // put your code here
        ?>
        <div id="main">
            <h2><em>CONFIGURACION-GLOBAL</em></h2>
            <?php echo "<form action='Configuracion_global.php?ACTUALIZAR=".$ano."' method='post' name='frmglobal' id='frmglobal'>"?>
                <center>
                <fieldset>
                    <legend><small>AVISO: </small>Esta informaci&oacute;n es vital para el desempe&ntilde;o del sistema</legend>
                <table>
                <tr>
                    <td><a>A&Ntilde;O ESCOLAR: </a></td>
                    <td><?php echo "<input type='text' id='txtanoescolar' value='".$ano."'/>";?></td>
                </tr>
                <tr>
                    <td><a>BIMESTRE: </a></td>
                    <td><?php echo "<input type='text' id='txtbimestre' value='".$bimestre."'/>";?></td>
                </tr>                
                </table>
                </fieldset>
                    </center>
                <center>
                    <div class="form-actions">
                        <button type="submit"class="btn btn-primary" id="btnupdate" name="btnupdate">ACTUALIZAR</button>
                    </div>
                </center>
            <fieldset>
                <center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>A&Ntilde;O ESCOLAR</th>
                                <th>BIMESTRE EN CURSO</th>
                            </tr>
                        </thead>
                        <?php 
                        $listado=$CONFIGURACION->LISTAR();
                        while ($row = mysql_fetch_array($listado)) {
                            echo "
                            <tr>
                                <td><a href='Configuracion_global.php?search=". '"' .$row[0]. '"' . "'>" . $row[0]. "</a></td>
                                <td>".$row[1]."</td>                                
                            </tr>
                            ";
                        }
                        ?>
                </table>
                </center>
            </fieldset>
           <?php echo "</form>";?>
        </div>
    </body>
</html>
