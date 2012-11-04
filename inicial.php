<?php session_start();
    $dni=$_SESSION['dni'];
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Registra Los Criterios Del Curso</title>
        <?php 
        require_once 'Class/Conection.php';
        if($dni==25704169){
        ?>
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
        <div id="divinicial"style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">REGISTRO DE CRITERIOS</h3>
                <h4>Correspondiente al NIVEL INICIAL</h4>
                <br>            
            <!---------------------------------------------------------------------------------------->
            <!--BEGIN ENCABEZADO-->
            <div class="bs-docs-example">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#tres" data-toggle="tab"><i class="white icon-thumbs-up"></i>Criterios De 3 años</a></li>
                    <li><a href="#cuatro" data-toggle="tab"><i class=" icon-bullhorn"></i>Criterios De 4 años</a></li>
                    <li><a href="#cinco" data-toggle="tab"><i class=" icon-bullhorn"></i>Criterios De 5 años</a></li>
                </ul>
            <!--END ENCABEZADO-->
            <!---------------------BEGIN CONTENT------------------------------------------------------------>
            <div id="myTabContent" class="tab-content">
                <!----------------------3 años---------------------->
                <div class="tab-pane fade in active" id="tres">
                    <div class="row-fluid">
                        <h4><a>3 a&ntilde;os-AREAS CURRICULARES</a></h4>
                        <table class="table">
                            <?php
                            $cone3an= new Conection;
                            $cone3an->CONECT();
                            $query3anos=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='inicial' and  grado like ('%3%') and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row = mysql_fetch_array($query3anos)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row[0]."'>" . $row[0]. "</a></td>
                                    <td>".$row[1]."</td>
                                    </tr>
                                    ";    
                            }
                            ?>
                        </table>                        
                    </div>
                    
                </div>
                <!----------------------4 años---------------------->
                <div class="tab-pane fade" id="cuatro">
                    <div class="row-fluid">
                        <h4><a>4 a&ntilde;os-AREAS CURRICULARES</a></h4>
                        <table class="table">
                            <?php
                            $cone4an= new Conection;
                            $cone4an->CONECT();
                            $query4anos=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='inicial' and  grado like ('%4%') and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row = mysql_fetch_array($query4anos)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row[0]."'>" . $row[0]. "</a></td>
                                    <td>".$row[1]."</td>
                                    </tr>
                                    ";    
                            }
                            ?>
                        </table> 
                    </div>
                </div>
                <!----------------------5 años---------------------->
                <div class="tab-pane fade" id="cinco">
                    <div class="row-fluid">
                        <h4><a>5 a&ntilde;os-AREAS CURRICULARES</a></h4>
                        <table class="table">
                            <?php
                            $cone5an= new Conection;
                            $cone5an->CONECT();
                            $query5anos=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='inicial' and  grado like ('%5%') and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row = mysql_fetch_array($query5anos)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row[0]."'>" . $row[0]. "</a></td>
                                    <td>".$row[1]."</td>
                                    </tr>
                                    ";    
                            }
                            ?>
                        </table>
                    </div>
                </div>                
            </div>
            </div>
            </center>
        </div>
    </body>
    <?php }?>
</html>
