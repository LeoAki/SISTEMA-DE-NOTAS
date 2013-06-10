<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Registro De Notas</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>

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
                    echo "<script>window.location = 'index.php'</script>";
}else {
        ?>
        <div style="margin-left: 6%;margin-right: 6%;">
            <center>
            <h3 style="color: green">Registro De Notas</h3></center>
<img src="Css/images/libro.jpeg" style="width:100px;" class="img-circle"/>
            <?php echo "<i class='alert'>si eres profesora de inicial, haz clic <a href='regnotainicial.php' class='btn btn-warning'>AQU&Iacute;</a> y obvie lo de abajo</i>";?>    
            
            
            <form >
                <fieldset>
                    <legend>Bimestre Actual:I</legend>
                    <i class=''>Revisen la lista del alumnado, asi como los registros que aparecen, en caso encuentren equivocaciones comunicar a la Subdireccion correspondiente o acercarse a la Subdireccion General- Oficina De Sistemas </i>
                    <table class="table table-hover">
                            <tr class="success">
                                <th style="width: 14%;">Registro</th>
                                <th style="width: 18%;">Secci&oacute;n</th>
                                <th style="width: 13%">Asignatura</th>
                                <th style="width: 11%;"><center>I</center></th>
                                <th style="width: 11%;"><center>II</center></th>
                                <th style="width: 11%;"><center>III</center></th>
                                <th style="width: 11%;"><center>IV</center></th>
                                <th style="width: 11%;"><center>ANUAL</center></th>
                            </tr>
                            <?php 
                            $lista=$Doce->RegistroDocente($dni);
                            while ($row = mysql_fetch_array($lista)) {
                                echo "
<tr>
  <td><b>REGISTRO N&#176;</b> ".$row[0]."</td>
  <td>".$row[2]." ".$row[3]." DE <b>".$row[1]."</b></td>
  <td>".$row[7]."</td>
  <td>
  	<center>
  	<a  TARGET = '_blank' href='imprimir_reg.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Ver<i class='icon-print'></i></a>
  	<a  TARGET = '_blank' href='imprimir_reg.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Ver<i class='icon-print'></i></a>
  	</center>
  </td>
  <td>
  	<center>
  	<a  TARGET = '_blank' href='registra1.php?sinatura=".$row[8]."&seccion=".$row[9]."&registro=".$row[0]."'>Registrar<i class='icon-file'></i></a>
  	</center>
  </td>
  <td>
  	<center>
  	<i class='icon-file'></i>
  	<i class='icon-print'></i>
  	</center>
  </td>
  <td>
  	<center>
  	<i class='icon-file'></i>
  	<i class='icon-print'></i>
  	</center>
  </td>
  <td>
  	<center>
  	<i class='icon-print'></i>
  	</center>
  </td>
</tr>
  ";
                            }
                            ?>
                    </table>
                </fieldset>
            </form>
        </div>

<center>        <em>NOTA:</em> 
		<i class='icon-file'></i>Abrir Registro
		<i class='icon-print'></i>Vista Previa
</center>
        <br><br><br><br><br><br><br>
        <?php require_once 'Includes/modal-footer.php';?>
    </body>
    <?php }?>    
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
</html>