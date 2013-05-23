<?php session_start();    ?>
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
<?php 
              require_once 'Includes/navegador.php'; 
              require_once 'Class/Indicador.php';
              //variables locales
              $compo = $_GET['componente'];
              $ordendendicador=$_GET['orden'];
              $indicadorvalue=$_GET['indicador'];
              $codeindicador=$_GET['codeindi'];
                $INDICA= new Indicador();
                
                #CUANTOS HAY-------------------------
                $cantidad=$INDICA->LISTGENERAL($compo);
                $numero=  mysql_num_rows($cantidad);
                $codigoi;
                $uno=1;
                $nrocriterio;
                if($ordendendicador!=0){
                 $nrocriterio=$ordendendicador;   
                }  else {
                    $nrocriterio=$numero+$uno;
                }
                if($indicadorvalue!=""){
                    $criterio=$indicadorvalue;
                }  else {
                    $criterio;
                }
                if($codeindicador!=0){
                    $codigoi=$codeindicador;
                }  else {
                    $codigoi;
                }
               
                $peso=1;
                #---------------------------------------
        /*--------------------------------------MANTENIMIENTO-----------------------------------*/
    if(isset($_REQUEST['GRABAR'])){
        if(isset($_REQUEST['txtcodigo']) && isset($_REQUEST['txtcomponente']) 
        ){
            $INDICA->setCODIGO($_REQUEST['txtcodigo']);
            $INDICA->setIDCOMPONENTE($_REQUEST['txtcomponente']);
            $INDICA->setNRO_CRITERIO($_REQUEST['txtfiu']);
            $INDICA->setCRITERIO($_REQUEST['txtcriterio']);
            $INDICA->setPESO($_REQUEST['txtpeso']);
            $INDICA->GRABAR();
            echo "<script languaje='javascript' type='text/javascript'>
                 opener.document.location.reload(); 
            window.close();</script>";
        }
    }       
    /*---------------------------------------------------------------------------------------*/  
        ?>
    <body>    
        <div id="main">
            <?php 
            echo "<form name='frmindica' method='post' action='regindicador.php?GRABAR='".$codigoi."'>"; 
            ?>
            <fieldset>
                <center><legend>INDICADORES</legend></center>
                
                    <table id="tableseccion" class="table">
                        <caption>MANTENIMIENTO</caption>
                        <tbody>
                        <tr>
                            <td style="display: none;"><a>CODIGO: </a><input type='text' id='txtcodigo' name='txtcodigo' <?php echo "value='".$codigoi."'";?>></td>
                            <td style="display: none;"><a>COMPONENTE: </a><input type='text' id='txtcomponente' name='txtcomponente' <?php echo "value='".$compo."'";?>></td>
                        </tr>
                        <tr>
                            <td style="display:none;"><a>N° Indicador :</a><input class="input-xlarge" id="txtfiu" name="txtfiu" type="text"  <?php echo "value='".$nrocriterio."';"?></td>
                        <tr>
                            <td><a>Criterio :<input type='text' id='txtcriterio' name='txtcriterio' style='width: 95%'<?php echo "value='".$criterio."'"; ?>/></a></td>
                        </tr>
                        <tr>
                            <td style="display:none;"><a>Peso<input type='text' id='txtpeso' name='txtpeso'<?php echo "value='".$peso."'"; ?>/></a></td>
                        </tr>
                        </tbody>
                    </table>
            </fieldset>
                        <center>
                        <div class="form-actions">
                            <button style="" type="submit"class="btn btn-primary" id="btnsave" name="btnsave">AGREGAR/EDITAR INDICADOR</button>
                        </div>        
            <?php 
            echo "</form>"
            ?>
        </div>
<?php require_once 'Includes/modal-footer.php';?>
    </body>
    <?php }?>    
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