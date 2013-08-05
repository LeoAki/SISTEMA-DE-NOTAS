<?php session_start();
$dni=$_SESSION['dni'];?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE</title>
        <?php
        require_once 'Class/Usuario.php';
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario)
        {
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
<?php require_once 'Includes/navegador.php';
      require_once 'Class/Conection.php';
?>
<a>2do Bimestre</a>
<!--WELCOME TO THE INICIAL-------------------------------------------------INICIAL---------------------------------------------------------------->
        <?php
        if($dni=='09855255'){
        ?>
<!---------------------------------------------------------------------------------------------->
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
        <?php
}
?>


<!--WELCOME TO THE PRIMARIA-------------------------------------------PRIMARIA---------------------------------------------------------------->
<?php
        if($dni=='25748449'){
?>
        <div id="divprimariaprimer"style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL NIVEL PRIMARIA</h3>
                <h4>Correspondiente al 1er Grado</h4>
                <table class="table">
                            <?php
                            $cone= new Conection;
                            $cone->CONECT();
                            $query=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='primaria' and  grado='1' and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row = mysql_fetch_array($query)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row[0]."'>" . $row[0]. "</a></td>
                                    <td>".$row[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                 </table>
            </center>
        </div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='25579387'){
?>
        <div id="divprimariasegundo"style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL NIVEL PRIMARIA</h3>
                <h4>Correspondiente al 2do Grado</h4>
                <table class="table table-hover">
                            <?php
                            $cone2= new Conection;
                            $cone2->CONECT();
                            $query2=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='primaria' and  grado='2' and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row2 = mysql_fetch_array($query2)) {
                                echo "
                                    <tr>
                                        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row2[0]."'>" . $row2[0]. "</a></td>
                                        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row2[0]."'>" . $row2[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                 </table>
            </center>
        </div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='25687567'){
?>
        <div id="divprimariatercero"style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL NIVEL PRIMARIA</h3>
                <h4>Correspondiente al 3er Grado</h4>
                <table class="table">
                            <?php
                            $cone3= new Conection;
                            $cone3->CONECT();
                            $query3=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='primaria' and  grado='3' and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row3 = mysql_fetch_array($query3)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row3[0]."'>" . $row3[0]. "</a></td>
                                    <td>".$row3[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                 </table>
            </center>
        </div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='08016450'){
?>
        <div id="divprimariacuarto"style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL NIVEL PRIMARIA</h3>
                <h4>Correspondiente al 4to Grado</h4>
                <table class="table table-hover">
                            <?php
                            $cone4= new Conection;
                            $cone4->CONECT();
                            $query4=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='primaria' and  grado='4' and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row4 = mysql_fetch_array($query4)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row4[0]."'>" . $row4[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$row4[0]."'>" . $row4[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                 </table>
            </center>
        </div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='25580449'){
?>
        <div id="divprimariaquinto"style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL NIVEL PRIMARIA</h3>
                <h4>Correspondiente al 5to Grado</h4>
                <table class="table">
                            <?php
                            $cone5= new Conection;
                            $cone5->CONECT();
                            $query5=  mysql_query(" select codigo,asinatura from descripcionsinature where nomnivel='primaria' and  grado='5' and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row5 = mysql_fetch_array($query5)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row5[0]."'>" . $row5[0]. "</a></td>
                                    <td>".$row5[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                 </table>
            </center>
        </div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='10389799'){
?>
        <div id="divprimariasexto"style="margin-left: 15%;margin-right: 15%;">
            <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL NIVEL PRIMARIA</h3>
                <h4>Correspondiente al 6to Grado</h4>
                <table class="table table-hover">
                            <?php
                            $cone6= new Conection;
                            $cone6->CONECT();
                            $query6=  mysql_query("select codigo,asinatura from descripcionsinature where nomnivel='primaria' and  grado='6' and (asinatura like ('%Matem%') or asinatura like ('%Comunicaci%') or asinatura like ('%Personal Social%') or asinatura like ('%Ciencia%'));");
                            while ($row6 = mysql_fetch_array($query6)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row6[0]."'>" . $row6[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$row6[0]."'>" . $row6[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                 </table>
            </center>
        </div>
<?php
        }
?>
<!-WELCOME TO THE SECUNDARIA------------------------------------------------------------------------------------------>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
if($dni=='07175880'){
?>
<div id="divsecundaria"style="margin-left: 15%;margin-right: 15%;">
    <center>
    <h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA DE MATEM&Aacute;TICA</h3>
    <h4>Correspondiente al NIVEL SECUNDARIA</h4>
    <br>
    <!---------------------------------------------------------------------------------------->
    <!--BEGIN ENCABEZADO-->
    <div class="bs-docs-example">
        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#mat1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
            <li><a href="#mat2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
            <li><a href="#mat3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
            <li><a href="#mat4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
            <li><a href="#mat5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
        </ul>
        <!--END ENCABEZADO-->
        <!---------------------BEGIN CONTENT------------------------------------------------------------>
        <div id="myTabContent" class="tab-content">

            <div class="tab-pane fade in active" id="mat1">
                <table class="display">
                <?php
                $cone7= new Conection;
                $cone7->CONECT();
                $query7=  mysql_query("select codigo,asinatura
                from descripcionsinature where nomnivel='secundaria' and grado=1 and curso like ('%MATEM%');");
                while ($row7 = mysql_fetch_array($query7)) {
                echo "
                <tr>
                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row7[0]."'>" . $row7[0]. "</a></td>
                <td>".$row7[1]."</td>
                </tr>
                ";
                }
                ?>
                </table>
            </div>

            <div class="tab-pane fade" id="mat2">
            <table class="table">
            <?php
            $cone8= new Conection;
            $cone8->CONECT();
            $query8=  mysql_query("select codigo,asinatura
            from descripcionsinature where nomnivel='secundaria' and grado=2 and curso like ('%MATEM%');");
            while ($row8 = mysql_fetch_array($query8)) {
            echo "
            <tr>
            <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row8[0]."'>" . $row8[0]. "</a></td>
            <td>".$row8[1]."</td>
            </tr>
            ";
            }
            ?>
            </table>
            </div>
            <div class="tab-pane fade" id="mat3">
            <table class="table">
            <?php
            $cone9= new Conection;
            $cone9->CONECT();
            $query9=  mysql_query("select codigo,asinatura
            from descripcionsinature where nomnivel='secundaria' and grado=3 and curso like ('%MATEM%');");
            while ($row9 = mysql_fetch_array($query9)) {
            echo "
            <tr>
            <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row9[0]."'>" . $row9[0]. "</a></td>
            <td>".$row9[1]."</td>
            </tr>
            ";
            }
            ?>
            </table>
            </div>
            <div class="tab-pane fade" id="mat4">
            <table class="table">
            <?php
            $cone10= new Conection;
            $cone10->CONECT();
            $query10=  mysql_query("select codigo,asinatura
            from descripcionsinature where nomnivel='secundaria' and grado=4 and curso like ('%MATEM%');");
            while ($row10 = mysql_fetch_array($query10)) {
            echo "
            <tr>
            <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row10[0]."'>" . $row10[0]. "</a></td>
            <td>".$row10[1]."</td>
            </tr>
            ";
            }
            ?>
            </table>
            </div>
            <div class="tab-pane fade" id="mat5">
            <table class="table">
            <?php
            $cone11= new Conection;
            $cone11->CONECT();
            $query11=  mysql_query("select codigo,asinatura
            from descripcionsinature where nomnivel='secundaria' and grado=5 and curso like ('%MATEM%');");
            while ($row11 = mysql_fetch_array($query11)) {
            echo "
            <tr>
            <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$row11[0]."'>" . $row11[0]. "</a></td>
            <td>".$row11[1]."</td>
            </tr>
            ";
            }
            ?>
            </table>
            </div>
        </div>
    </div>
    </center>
</div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='10199819'){
?>
<div id="divsecundariacomunicacion"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA DE COMUNICACI&Oacute;N</h3>
                <h4>Correspondiente al NIVEL SECUNDARIA</h4>
                <br>
            <!---------------------------------------------------------------------------------------->
            <!--BEGIN ENCABEZADO-->
            <div class="bs-docs-example">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#comu1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
                    <li><a href="#comu2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
                    <li><a href="#comu3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
                    <li><a href="#comu4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
                    <li><a href="#comu5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
                </ul>
            <!--END ENCABEZADO-->
            <!---------------------BEGIN CONTENT------------------------------------------------------------>
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade in active" id="comu1">
                <table class="table table-hover">
                            <?php
                            $conec= new Conection;
                            $conec->CONECT();
                            $queryc=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and grado=1 and curso like ('%COMUNIC%');");
                            while ($rowc = mysql_fetch_array($queryc)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc[0]."'>" . $rowc[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc[0]."'>" . $rowc[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
                <div class="tab-pane fade" id="comu2">
                <table class="table table-hover">
                            <?php
                            $conec2= new Conection;
                            $conec2->CONECT();
                            $queryc2=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and grado=2 and curso like ('%COMUNIC%');");
                            while ($rowc2 = mysql_fetch_array($queryc2)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc2[0]."'>" . $rowc2[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc2[0]."'>" . $rowc2[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="comu3">
                <table class="table table-hover">
                            <?php
                            $conec3= new Conection;
                            $conec3->CONECT();
                            $queryc3=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and grado=3 and curso like ('%COMUNIC%');");
                            while ($rowc3 = mysql_fetch_array($queryc3)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc3[0]."'>" . $rowc3[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc3[0]."'>" . $rowc3[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="comu4">
                    <table class="table table-hover">
                                <?php
                                $conec4= new Conection;
                                $conec4->CONECT();
                                $queryc4=  mysql_query("select codigo,asinatura
                                    from descripcionsinature where nomnivel='secundaria' and grado=4 and curso like ('%COMUNIC%');");
                                while ($rowc4 = mysql_fetch_array($queryc4)) {
                                    echo "
                                        <tr>
                                        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc4[0]."'>" . $rowc4[0]. "</a></td>
                                        <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc4[0]."'>" . $rowc4[1]. "</a></td>
                                        </tr>
                                        ";
                                }
                                ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="comu5">
                    <table class="table table-hover">
                            <?php
                            $conec5= new Conection;
                            $conec5->CONECT();
                            $queryc5=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and grado=5 and curso like ('%COMUNIC%');");
                            while ($rowc5 = mysql_fetch_array($queryc5)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc5[0]."'>" . $rowc5[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowc5[0]."'>" . $rowc5[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                     </table>
                </div>
    </div>
            </center>
</div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='08806831'){
?>
<div id="divsecundariaccss"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA DE CIENCIAS SOCIALES</h3>
                <h4>Correspondiente al NIVEL SECUNDARIA</h4>
                <br>
            <!---------------------------------------------------------------------------------------->
            <!--BEGIN ENCABEZADO-->
            <div class="bs-docs-example" style="background-color: #FAC596;">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#ccss1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
                    <li><a href="#ccss2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
                    <li><a href="#ccss3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
                    <li><a href="#ccss4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
                    <li><a href="#ccss5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
                </ul>
            <!--END ENCABEZADO-->
            <!---------------------BEGIN CONTENT------------------------------------------------------------>
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade in active" id="ccss1">
                <table>
                            <?php
                            $coneccss= new Conection;
                            $coneccss->CONECT();
                            $queryccss=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='1' and
                                (abreviatura like('%HGE%') or
                                abreviatura like('%vica%') or
                                abreviatura like('%PP.FF%'));
                                ");
                            while ($rowccss = mysql_fetch_array($queryccss)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowccss[0]."'>" . $rowccss[0]. "</a></td>
                                    <td>".$rowccss[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
                <div class="tab-pane fade" id="ccss2">
                <table>
                            <?php
                            $coneccss2= new Conection;
                            $coneccss2->CONECT();
                            $queryccss2=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='2' and
                                (abreviatura like('%HGE%') or
                                abreviatura like('%vica%') or
                                abreviatura like('%PP.FF%'));
                                ");
                            while ($rowccss2 = mysql_fetch_array($queryccss2)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowccss2[0]."'>" . $rowccss2[0]. "</a></td>
                                    <td>".$rowccss2[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="ccss3">
                <table>
                            <?php
                            $coneccss3= new Conection;
                            $coneccss3->CONECT();
                            $queryccss3=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='3' and
                                (abreviatura like('%HGE%') or
                                abreviatura like('%vica%') or
                                abreviatura like('%PP.FF%'));
                                ");
                            while ($rowccss3 = mysql_fetch_array($queryccss3)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowccss3[0]."'>" . $rowccss3[0]. "</a></td>
                                    <td>".$rowccss3[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="ccss4">
                <table>
                            <?php
                            $coneccss4= new Conection;
                            $coneccss4->CONECT();
                            $queryccss4=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='4' and
                                (abreviatura like('%HGE%') or
                                abreviatura like('%vica%') or
                                abreviatura like('%PP.FF%'));
                                ");
                            while ($rowccss4 = mysql_fetch_array($queryccss4)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowccss4[0]."'>" . $rowccss4[0]. "</a></td>
                                    <td>".$rowccss4[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="ccss5">
                <table>
                            <?php
                            $coneccss5= new Conection;
                            $coneccss5->CONECT();
                            $queryccss5=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='5' and
                                (abreviatura like('%HGE%') or
                                abreviatura like('%vica%') or
                                abreviatura like('%PP.FF%'));
                                ");
                            while ($rowccss5 = mysql_fetch_array($queryccss5)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowccss5[0]."'>" . $rowccss5[0]. "</a></td>
                                    <td>".$rowccss5[1]."</td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
    </div>
            </center>
</div>
</div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='25484368'){
?>
<div id="divsecundariacta"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA CTA</h3>
                <h4>Correspondiente al NIVEL SECUNDARIA</h4>
                <br>
            <!---------------------------------------------------------------------------------------->
            <!--BEGIN ENCABEZADO-->
            <div class="bs-docs-example">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#cta1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
                    <li><a href="#cta2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
                    <li><a href="#cta3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
                    <li><a href="#cta4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
                    <li><a href="#cta5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
                </ul>
            <!--END ENCABEZADO-->
            <!---------------------BEGIN CONTENT------------------------------------------------------------>
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade in active" id="cta1">
                <table class="table table-hover">
                            <?php
                            $conecta= new Conection;
                            $conecta->CONECT();
                            $querycta=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='1' and asinatura like('%CTA -%');
                                ");
                            while ($rowcta = mysql_fetch_array($querycta)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta[0]."'>" . $rowcta[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta[0]."'>" . $rowcta[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
                <div class="tab-pane fade" id="cta2">
                <table class="table table-hover">
                            <?php
                            $conecta2= new Conection;
                            $conecta2->CONECT();
                            $querycta2=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='2' and asinatura like('%CTA -%');
                                ");
                            while ($rowcta2 = mysql_fetch_array($querycta2)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta2[0]."'>" . $rowcta2[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta2[0]."'>" . $rowcta2[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="cta3">
                <table class="table table-hover">
                            <?php
                            $conecta3= new Conection;
                            $conecta3->CONECT();
                            $querycta3=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='3' and asinatura like('%CTA -%');
                                ");
                            while ($rowcta3 = mysql_fetch_array($querycta3)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta3[0]."'>" . $rowcta3[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta3[0]."'>" . $rowcta3[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="cta4">
                <table class="table table-hover">
                            <?php
                            $conecta4= new Conection;
                            $conecta4->CONECT();
                            $querycta4=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='4' and asinatura like('%CTA -%');
                                ");
                            while ($rowcta4 = mysql_fetch_array($querycta4)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta4[0]."'>" . $rowcta4[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta4[0]."'>" . $rowcta4[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="cta5">
                <table class="table table-hover">
                            <?php
                            $conecta5= new Conection;
                            $conecta5->CONECT();
                            $querycta5=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='5' and asinatura like('%CTA -%');
                                ");
                            while ($rowcta5 = mysql_fetch_array($querycta5)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta5[0]."'>" . $rowcta5[0]. "</a></td>
                                    <td class='center'><a style='color:#585858;' TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta5[0]."'>" . $rowcta5[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
    </div>
            </center>
</div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='07168034'){
?>
<div id="divsecundariaingles"style="margin-left: 15%;margin-right: 15%;">
<center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA DE INGL&Eacute;S</h3></center>
<div class="row-fluid">
<div class="accordion" id="ingleslncc">
<!---------------------------------------------------------------- PRIMARIA-->
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle"  data-toggle="collapse" data-parent="#ingleslncc" href="#primariaingles">
<center>PRIMARIA</center>
</a>
</div>
<div style="height: 0px;" id="primariaingles" class="accordion-body collapse">
<!--BEGIN ENCABEZADO-->
<div class="bs-docs-example">
<ul id="myTab" class="nav nav-tabs">
<li class="active"><a href="#inglespri1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Primaria</a></li>
<li><a href="#inglespri2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Primaria</a></li>
<li><a href="#inglespri3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Primaria</a></li>
<li><a href="#inglespri4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Primaria</a></li>
<li><a href="#inglespri5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Primaria</a></li>
<li><a href="#inglespri6" data-toggle="tab"><i class=" icon-bullhorn"></i>6to De Primaria</a></li>
</ul>
<!--END ENCABEZADO-->
<!---------------------BEGIN CONTENT------------------------------------------------------------>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade in active" id="inglespri1">
<table class="display">
<?php
$coneingpri= new Conection;
$coneingpri->CONECT();
$queryingpri=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='primaria' and
grado='1' and asinatura like('%ingl%');
");
while ($rowingpri = mysql_fetch_array($queryingpri)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowingpri[0]."'>" . $rowingpri[0]. "</a></td>
<td>".$rowingpri[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="inglespri2">
<table class="display">
<?php
$coneingpri2= new Conection;
$coneingpri2->CONECT();
$queryingpri2=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='primaria' and
grado='2' and asinatura like('%ingl%');
");
while ($rowingpri2 = mysql_fetch_array($queryingpri2)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowingpri2[0]."'>" . $rowingpri2[0]. "</a></td>
<td>".$rowingpri2[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="inglespri3">
<table class="display">
<?php
$coneingpri3= new Conection;
$coneingpri3->CONECT();
$queryingpri3=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='primaria' and
grado='3' and asinatura like('%ingl%');
");
while ($rowingpri3 = mysql_fetch_array($queryingpri3)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowingpri3[0]."'>" . $rowingpri3[0]. "</a></td>
<td>".$rowingpri3[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="inglespri4">
<table class="display">
<?php
$coneingpri4= new Conection;
$coneingpri4->CONECT();
$queryingpri4=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='primaria' and
grado='4' and asinatura like('%ingl%');
");
while ($rowingpri4 = mysql_fetch_array($queryingpri4)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowingpri4[0]."'>" . $rowingpri4[0]. "</a></td>
<td>".$rowingpri4[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="inglespri5">
<table class="display">
<?php
$coneingpri5= new Conection;
$coneingpri5->CONECT();
$queryingpri5=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='primaria' and
grado='5' and asinatura like('%ingl%');
");
while ($rowingpri5 = mysql_fetch_array($queryingpri5)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowingpri5[0]."'>" . $rowingpri5[0]. "</a></td>
<td>".$rowingpri5[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="inglespri6">
<table class="display">
<?php
$coneingpri6= new Conection;
$coneingpri6->CONECT();
$queryingpri6=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='primaria' and
grado='6' and asinatura like('%ingl%');
");
while ($rowingpri6 = mysql_fetch_array($queryingpri6)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowingpri6[0]."'>" . $rowingpri6[0]. "</a></td>
<td>".$rowingpri6[1]."</td>
</tr>
";
}
?>
</table>
</div>
</div>
</div>
</div>
</div>
<!----------------------------------------------------------------SECUNDARIA-->
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle"  data-toggle="collapse" data-parent="#ingleslncc" href="#secundariaingles">
<center>SECUNDARIA</center>
</a>
</div>
<div style="height: 0px;" id="secundariaingles" class="accordion-body collapse">
<h4>Correspondiente al NIVEL SECUNDARIA</h4>
<br>
<!---------------------------------------------------------------------------------------->
<!--BEGIN ENCABEZADO-->
<div class="bs-docs-example">
<ul id="myTab" class="nav nav-tabs">
<li class="active"><a href="#in1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
<li><a href="#in2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
<li><a href="#in3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
<li><a href="#in4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
<li><a href="#in5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
</ul>
<!--END ENCABEZADO-->
<!---------------------BEGIN CONTENT------------------------------------------------------------>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade in active" id="in1">
<table class="display">
<?php
$conein= new Conection;
$conein->CONECT();
$queryin=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='secundaria' and
grado='1' and asinatura like('%Ingl%');
");
while ($rowin = mysql_fetch_array($queryin)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowin[0]."'>" . $rowin[0]. "</a></td>
<td>".$rowin[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="in2">
<table class="display">
<?php
$conein2= new Conection;
$conein2->CONECT();
$queryin2=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='secundaria' and
grado='2' and asinatura like('%Ingl%');
");
while ($rowin2 = mysql_fetch_array($queryin2)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowin2[0]."'>" . $rowin2[0]. "</a></td>
<td>".$rowin2[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="in3">
<table class="display">
<?php
$conein3= new Conection;
$conein3->CONECT();
$queryin3=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='secundaria' and
grado='3' and asinatura like('%Ingl%');
");
while ($rowin3 = mysql_fetch_array($queryin3)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowin3[0]."'>" . $rowin3[0]. "</a></td>
<td>".$rowin3[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="in4">
<table class="display">
<?php
$conein4= new Conection;
$conein4->CONECT();
$queryin4=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='secundaria' and
grado='4' and asinatura like('%Ingl%');
");
while ($rowin4 = mysql_fetch_array($queryin4)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowin4[0]."'>" . $rowin4[0]. "</a></td>
<td>".$rowin4[1]."</td>
</tr>
";
}
?>
</table>
</div>
<div class="tab-pane fade" id="in5">
<table class="display">
<?php
$conein5= new Conection;
$conein5->CONECT();
$queryin5=  mysql_query("select codigo,asinatura
from descripcionsinature where nomnivel='secundaria' and
grado='5' and asinatura like('%Ingl%');
");
while ($rowin5 = mysql_fetch_array($queryin5)) {
echo "
<tr>
<td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowin5[0]."'>" . $rowin5[0]. "</a></td>
<td>".$rowin5[1]."</td>
</tr>
";
}
?>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
if($dni=='08163931'){
?>
<div id="divsecundariarlg"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA DE RELIGI&Oacute;N</h3></center>
    <div class="row-fluid">
        <div class="accordion" id="religionlncc">
        <!---------------------------------------------------------------- PRIMARIA-->
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle"  data-toggle="collapse" data-parent="#religionlncc" href="#primariareligion">
                    <center>PRIMARIA</center>
                    </a>
                </div>
                <div style="height: 0px;" id="primariareligion" class="accordion-body collapse">
                    <!--BEGIN ENCABEZADO-->
                    <div class="bs-docs-example">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#rlgpri1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Primaria</a></li>
                            <li><a href="#rlgpri2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Primaria</a></li>
                            <li><a href="#rlgpri3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Primaria</a></li>
                            <li><a href="#rlgpri4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Primaria</a></li>
                            <li><a href="#rlgpri5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Primaria</a></li>
                            <li><a href="#rlgpri6" data-toggle="tab"><i class=" icon-bullhorn"></i>6to De Primaria</a></li>
                        </ul>
                        <!--END ENCABEZADO-->
                        <!---------------------BEGIN CONTENT------------------------------------------------------------>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="rlgpri1">
                                <table class="display">
                                <?php
                                $conerlgpri= new Conection;
                                $conerlgpri->CONECT();
                                $queryrlgpri=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='primaria' and
                                grado='1' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlgpri = mysql_fetch_array($queryrlgpri)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlgpri[0]."'>" . $rowrlgpri[0]. "</a></td>
                                    <td>".$rowrlgpri[1]."</td>
                                    </tr>
                                    ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlgpri2">
                                <table class="display">
                                <?php
                                $conerlgpri2= new Conection;
                                $conerlgpri2->CONECT();
                                $queryrlgpri2=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='primaria' and
                                grado='2' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlgpri2 = mysql_fetch_array($queryrlgpri2)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlgpri2[0]."'>" . $rowrlgpri2[0]. "</a></td>
                                <td>".$rowrlgpri2[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlgpri3">
                                <table class="display">
                                <?php
                                $conerlgpri3= new Conection;
                                $conerlgpri3->CONECT();
                                $queryrlgpri3=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='primaria' and
                                grado='3' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlgpri3 = mysql_fetch_array($queryrlgpri3)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlgpri3[0]."'>" . $rowrlgpri3[0]. "</a></td>
                                <td>".$rowrlgpri3[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlgpri4">
                                <table class="display">
                                <?php
                                $conerlgpri4= new Conection;
                                $conerlgpri4->CONECT();
                                $queryrlgpri4=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='primaria' and
                                grado='4' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlgpri4 = mysql_fetch_array($queryrlgpri4)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlgpri4[0]."'>" . $rowrlgpri4[0]. "</a></td>
                                <td>".$rowrlgpri4[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlgpri5">
                                <table class="display">
                                <?php
                                $conerlgpri5= new Conection;
                                $conerlgpri5->CONECT();
                                $queryrlgpri5=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='primaria' and
                                grado='5' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlgpri5 = mysql_fetch_array($queryrlgpri5)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlgpri5[0]."'>" . $rowrlgpri5[0]. "</a></td>
                                <td>".$rowrlgpri5[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlgpri6">
                                <table class="display">
                                <?php
                                $conerlgpri6= new Conection;
                                $conerlgpri6->CONECT();
                                $queryrlgpri6=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='primaria' and
                                grado='6' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlgpri6 = mysql_fetch_array($queryrlgpri6)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlgpri6[0]."'>" . $rowrlgpri6[0]. "</a></td>
                                <td>".$rowrlgpri6[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!---------------------------------------------------------------- SECUNDARIA-->
            <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="#religionlncc" href="#secundariareligion">
                        <center>SECUNDARIA</center>
                        </a>
                </div>
                <div style="height: 0px;" id="secundariareligion" class="accordion-body collapse">
                        <h4>Correspondiente al NIVEL SECUNDARIA</h4>
                        <br>
                        <!---------------------------------------------------------------------------------------->
                        <!--BEGIN ENCABEZADO-->
                    <div class="bs-docs-example">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#rlg1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
                            <li><a href="#rlg2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
                            <li><a href="#rlg3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
                            <li><a href="#rlg4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
                            <li><a href="#rlg5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
                        </ul>
                        <!--END ENCABEZADO-->
                        <!---------------------BEGIN CONTENT------------------------------------------------------------>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="rlg1">
                                <table class="display">
                                <?php
                                $conerlg= new Conection;
                                $conerlg->CONECT();
                                $queryrlg=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='1' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlg = mysql_fetch_array($queryrlg)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlg[0]."'>" . $rowrlg[0]. "</a></td>
                                <td>".$rowrlg[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlg2">
                                <table class="display">
                                <?php
                                $conerlg2= new Conection;
                                $conerlg2->CONECT();
                                $queryrlg2=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='2' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlg2 = mysql_fetch_array($queryrlg2)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlg2[0]."'>" . $rowrlg2[0]. "</a></td>
                                <td>".$rowrlg2[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlg3">
                                <table class="display">
                                <?php
                                $conerlg3= new Conection;
                                $conerlg3->CONECT();
                                $queryrlg3=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='3' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlg3 = mysql_fetch_array($queryrlg3)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlg3[0]."'>" . $rowrlg3[0]. "</a></td>
                                <td>".$rowrlg3[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlg4">
                                <table class="display">
                                <?php
                                $conerlg4= new Conection;
                                $conerlg4->CONECT();
                                $queryrlg4=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='4' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlg4 = mysql_fetch_array($queryrlg4)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlg4[0]."'>" . $rowrlg4[0]. "</a></td>
                                <td>".$rowrlg4[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="rlg5">
                                <table class="display">
                                <?php
                                $conerlg5= new Conection;
                                $conerlg5->CONECT();
                                $queryrlg5=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='5' and asinatura like('%Religiosa%');
                                ");
                                while ($rowrlg5 = mysql_fetch_array($queryrlg5)) {
                                echo "
                                <tr>
                                <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowrlg5[0]."'>" . $rowrlg5[0]. "</a></td>
                                <td>".$rowrlg5[1]."</td>
                                </tr>
                                ";
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
if($dni=='25866548'){
?>
<div id="divsecundariaedf"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA DE EDUCACI&Oacute;N F&Iacute;SICA</h3>
                <h4>Correspondiente al NIVEL SECUNDARIA</h4>
                <br></center>
    <div class="row-fluid">
        <div class="accordion" id="educfisicalncc">
        <!---------------------------------------------------------------- PRIMARIA-->
        <div class="accordion-group">
        <div class="accordion-heading">
        <a class="accordion-toggle"  data-toggle="collapse" data-parent="#educfisicalncc" href="#primariaeducfisica">
        <center>PRIMARIA</center>
        </a>
        </div>
        <div style="height: 0px;" id="primariaeducfisica" class="accordion-body collapse">
        <!--BEGIN ENCABEZADO-->
        <div class="bs-docs-example" style="background-color:#FAC596;">
        <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#edfpri1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Primaria</a></li>
        <li><a href="#edfpri2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Primaria</a></li>
        <li><a href="#edfpri3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Primaria</a></li>
        <li><a href="#edfpri4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Primaria</a></li>
        <li><a href="#edfpri5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Primaria</a></li>
        <li><a href="#edfpri6" data-toggle="tab"><i class=" icon-bullhorn"></i>6to De Primaria</a></li>
        </ul>
        <!--END ENCABEZADO-->
        <!---------------------BEGIN CONTENT------------------------------------------------------------>
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="edfpri1">
        <table class="display">
        <?php
        $conedfpri= new Conection;
        $conedfpri->CONECT();
        $queryedfpri=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='primaria' and
        grado='1' and asinatura like('%sica%');
        ");
        while ($rowedfpri = mysql_fetch_array($queryedfpri)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedfpri[0]."'>" . $rowedfpri[0]. "</a></td>
        <td>".$rowedfpri[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edfpri2">
        <table class="display">
        <?php
        $conedfpri2= new Conection;
        $conedfpri2->CONECT();
        $queryedfpri2=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='primaria' and
        grado='2' and asinatura like('%sica%');
        ");
        while ($rowedfpri2 = mysql_fetch_array($queryedfpri2)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedfpri2[0]."'>" . $rowedfpri2[0]. "</a></td>
        <td>".$rowedfpri2[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edfpri3">
        <table class="display">
        <?php
        $conedfpri3= new Conection;
        $conedfpri3->CONECT();
        $queryedfpri3=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='primaria' and
        grado='3' and asinatura like('%sica%');
        ");
        while ($rowedfpri3 = mysql_fetch_array($queryedfpri3)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedfpri3[0]."'>" . $rowedfpri3[0]. "</a></td>
        <td>".$rowedfpri3[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edfpri4">
        <table class="display">
        <?php
        $conedfpri4= new Conection;
        $conedfpri4->CONECT();
        $queryedfpri4=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='primaria' and
        grado='4' and asinatura like('%sica%');
        ");
        while ($rowedfpri4 = mysql_fetch_array($queryedfpri4)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedfpri4[0]."'>" . $rowedfpri4[0]. "</a></td>
        <td>".$rowedfpri4[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edfpri5">
        <table class="display">
        <?php
        $conedfpri5= new Conection;
        $conedfpri5->CONECT();
        $queryedfpri5=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='primaria' and
        grado='5' and asinatura like('%sica%');
        ");
        while ($rowedfpri5 = mysql_fetch_array($queryedfpri5)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedfpri5[0]."'>" . $rowedfpri5[0]. "</a></td>
        <td>".$rowedfpri5[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edfpri6">
        <table class="display">
        <?php
        $conedfpri6= new Conection;
        $conedfpri6->CONECT();
        $queryedfpri6=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='primaria' and
        grado='6' and asinatura like('%sica%');
        ");
        while ($rowedfpri6 = mysql_fetch_array($queryedfpri6)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedfpri6[0]."'>" . $rowedfpri6[0]. "</a></td>
        <td>".$rowedfpri6[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        </div>
        </div>
        </div>
        <!---------------------------------------------------------------- SECUNDARIA-->
        <div class="accordion-group">
        <div class="accordion-heading">
        <a class="accordion-toggle"  data-toggle="collapse" data-parent="#educfisicalncc" href="#secundariaeducfisica">
        <center>SECUNDARIA</center>
        </a>
        </div>
        <div style="height: 0px;" id="secundariaeducfisica" class="accordion-body collapse">
        <!---------------------------------------------------------------------------------------->
        <!--BEGIN ENCABEZADO-->
        <div class="bs-docs-example">
        <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#edf1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
        <li><a href="#edf2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
        <li><a href="#edf3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
        <li><a href="#edf4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
        <li><a href="#edf5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
        </ul>
        <!--END ENCABEZADO-->
        <!---------------------BEGIN CONTENT------------------------------------------------------------>
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="edf1">
        <table class="display">
        <?php
        $conedf= new Conection;
        $conedf->CONECT();
        $queryedf=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='secundaria' and
        grado='1' and asinatura like('%sica%');
        ");
        while ($rowedf = mysql_fetch_array($queryedf)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedf[0]."'>" . $rowedf[0]. "</a></td>
        <td>".$rowedf[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edf2">
        <table class="display">
        <?php
        $conedf2= new Conection;
        $conedf2->CONECT();
        $queryedf2=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='secundaria' and
        grado='2' and asinatura like('%sica%');
        ");
        while ($rowedf2 = mysql_fetch_array($queryedf2)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedf2[0]."'>" . $rowedf2[0]. "</a></td>
        <td>".$rowedf2[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edf3">
        <table class="display">
        <?php
        $conedf3= new Conection;
        $conedf3->CONECT();
        $queryedf3=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='secundaria' and
        grado='3' and asinatura like('%Educacion Fisica%');
        ");
        while ($rowedf3 = mysql_fetch_array($queryedf3)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedf3[0]."'>" . $rowedf3[0]. "</a></td>
        <td>".$rowedf3[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edf4">
        <table class="display">
        <?php
        $conedf4= new Conection;
        $conedf4->CONECT();
        $queryedf4=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='secundaria' and
        grado='4' and asinatura like('%Educacion Fisica%');
        ");
        while ($rowedf4 = mysql_fetch_array($queryedf4)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedf4[0]."'>" . $rowedf4[0]. "</a></td>
        <td>".$rowedf4[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        <div class="tab-pane fade" id="edf5">
        <table class="display">
        <?php
        $conedf5= new Conection;
        $conedf5->CONECT();
        $queryedf5=  mysql_query("select codigo,asinatura
        from descripcionsinature where nomnivel='secundaria' and
        grado='5' and asinatura like('%sica%') and asinatura like ('%educa%');
        ");
        while ($rowedf5 = mysql_fetch_array($queryedf5)) {
        echo "
        <tr>
        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowedf5[0]."'>" . $rowedf5[0]. "</a></td>
        <td>".$rowedf5[1]."</td>
        </tr>
        ";
        }
        ?>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
<?php
        }
?>
<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='25693041'){
?>
<div id="divsecundariatall"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DE LOS TALLERES</h3>


        <div class="row-fluid">
            <div class="accordion" id="tallereslncc">

<!---------------------------------------------------------------- PRIMARIA-->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle"  data-toggle="collapse" data-parent="#tallereslncc" href="#primariatc">
                            <center>PRIMARIA</center>
            </a>
          </div>
                  <div style="height: 0px;" id="primariatc" class="accordion-body collapse">
                            <h4>Correspondiente al NIVEL PRIMARIA</h4>
                            <br>
                        <!---------------------------------------------------------------------------------------->
                        <!--BEGIN ENCABEZADO-->
                                <div class="bs-docs-example" style="background-color: #FAC596;">
                                    <ul id="myTab" class="nav nav-tabs">
                                        <li class="active"><a href="#tll1p" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Primaria</a></li>
                                        <li><a href="#tll2p" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Primaria</a></li>
                                        <li><a href="#tll3p" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Primaria</a></li>
                                        <li><a href="#tll4p" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Primaria</a></li>
                                        <li><a href="#tll5p" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Primaria</a></li>
                                        <li><a href="#tll6p" data-toggle="tab"><i class=" icon-bullhorn"></i>6to De Primaria</a></li>
                                    </ul>
                                <!--END ENCABEZADO-->
                        <!---------------------BEGIN CONTENT------------------------------------------------------------>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="tll1p">
                                        <table class="table table-hover">
                                        <?php
                                        $tllcone= new Conection();
                                        $tllcone->CONECT();
                                        $tllquery=  mysql_query("select codigo,asinatura,nomnivel   from descripcionsinature where  asinatura like('%art%') and  nomnivel='PRIMARIA' and grado =1;");
                                        while ($rowtllpri = mysql_fetch_array($tllquery)) {
                                            echo "
                                            <tr>
                                     <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri[0]."'>" . $rowtllpri[0]. "</a></td>
                                     <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri[0]."'>" . $rowtllpri[1]. "</a></td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tll2p">
                                        <table class="table table-hover">
                                        <?php
                                        $tllcone2= new Conection();
                                        $tllcone2->CONECT();
     $tllquery2=  mysql_query("select codigo,asinatura,nomnivel from descripcionsinature where  asinatura like('%art%') and  nomnivel='PRIMARIA' and grado =2;");
                                        while ($rowtllpri2 = mysql_fetch_array($tllquery2)) {
                                            echo "
                                                <tr>
                                 <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri2[0]."'>" . $rowtllpri2[0]. "</a></td>
                                 <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri2[0]."'>" . $rowtllpri2[1]. "</a></td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tll3p">
                                        <table class="table table-hover">
                                        <?php
                                        $tllcone3= new Conection();
                                        $tllcone3->CONECT();
                                        $tllquery3=  mysql_query("select codigo,asinatura,nomnivel   from descripcionsinature where  asinatura like('%art%') and  nomnivel='PRIMARIA' and grado =3;");
                                        while ($rowtllpri3 = mysql_fetch_array($tllquery3)) {
                                            echo "
                                                <tr>
                                  <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri3[0]."'>" . $rowtllpri3[0]. "</a></td>
                                  <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri3[0]."'>" . $rowtllpri3[1]. "</a></td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tll4p">
                                        <table class="table table-hover">
                                        <?php
                                        $tllcone4= new Conection();
                                        $tllcone4->CONECT();
                                        $tllquery4=  mysql_query("select codigo,asinatura,nomnivel   from descripcionsinature where  asinatura like('%art%') and  nomnivel='PRIMARIA' and grado =4;");
                                        while ($rowtllpri4 = mysql_fetch_array($tllquery4)) {
                                            echo "
                                                <tr>
                                   <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri4[0]."'>" . $rowtllpri4[0]. "</a></td>
                                   <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri4[0]."'>" . $rowtllpri4[1]. "</a></td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tll5p">
                                        <table class="table table-hover">
                                        <?php
                                        $tllcone5= new Conection();
                                        $tllcone5->CONECT();
                                        $tllquery5=  mysql_query("select codigo,asinatura,nomnivel   from descripcionsinature where  asinatura like('%art%') and  nomnivel='PRIMARIA' and grado =5;");
                                        while ($rowtllpri5 = mysql_fetch_array($tllquery5)) {
                                            echo "
                                                <tr>
                                 <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri5[0]."'>" . $rowtllpri5[0]. "</a></td>
                                 <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri5[0]."'>" . $rowtllpri5[1]. "</a></td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tll6p">
                                        <table class="table table-hover">
                                        <?php
                                        $tllcone6= new Conection();
                                        $tllcone6->CONECT();
                                        $tllquery6=  mysql_query("select codigo,asinatura,nomnivel   from descripcionsinature where  asinatura like('%art%') and  nomnivel='PRIMARIA' and grado =6;");
                                        while ($rowtllpri6 = mysql_fetch_array($tllquery6)) {
                                            echo "
                                                <tr>
                             <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri6[0]."'>" . $rowtllpri6[0]. "</a></td>
                             <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowtllpri6[0]."'>" . $rowtllpri6[1]. "</a></td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                        </table>
                                    </div>
                                </div>
                        <!---------------------END CONTENT------------------------------------------------------------>
                                </div>
                  </div>
                </div>
<!---------------------------------------------------------------- SECUNDARIA-->
                <div class="accordion-group">
                    <div class="accordion-heading">
            <a class="accordion-toggle"  data-toggle="collapse" data-parent="#tallereslncc" href="#secundariatc">
                            <center>SECUNDARIA</center>
            </a>
          </div>
                  <div style="height: 0px;" id="secundariatc" class="accordion-body collapse">
                <h4>Correspondiente al NIVEL SECUNDARIA</h4>
                <br>
            <!---------------------------------------------------------------------------------------->
            <!--BEGIN ENCABEZADO-->
            <div class="bs-docs-example">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#all1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
                    <li><a href="#all2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
                    <li><a href="#all3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
                    <li><a href="#all4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
                    <li><a href="#all5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
                </ul>
            <!--END ENCABEZADO-->
            <!---------------------BEGIN CONTENT------------------------------------------------------------>
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade in active" id="all1">
                <table class="table table-hover">
                            <?php
                            $coneall= new Conection;
                            $coneall->CONECT();
                            $queryall=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='1' and asinatura like('%art%');
                                ");
                            while ($rowall = mysql_fetch_array($queryall)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall[0]."'>" . $rowall[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall[0]."'>" . $rowall[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="all2">
                <table class="table table-hover">
                            <?php
                            $coneall2= new Conection;
                            $coneall2->CONECT();
                            $queryall2=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='2' and asinatura like('%art%');
                                ");
                            while ($rowall2 = mysql_fetch_array($queryall2)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall2[0]."'>" . $rowall2[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall2[0]."'>" . $rowall2[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="all3">
                <table class="table table-hover">
                            <?php
                            $coneall3= new Conection;
                            $coneall3->CONECT();
                            $queryall3=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='3' and asinatura like('%art%');
                                ");
                            while ($rowall3 = mysql_fetch_array($queryall3)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall3[0]."'>" . $rowall3[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall3[0]."'>" . $rowall3[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="all4">
                <table class="table table-hover">
                            <?php
                            $coneall4= new Conection;
                            $coneall4->CONECT();
                            $queryall4=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='4' and asinatura like('%art%');
                                ");
                            while ($rowall4 = mysql_fetch_array($queryall4)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall4[0]."'>" . $rowall4[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall4[0]."'>" . $rowall4[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="all5">
                <table class="table table-hover">
                            <?php
                            $coneall5= new Conection;
                            $coneall5->CONECT();
                            $queryall5=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='5' and asinatura like('%art%');
                                ");
                            while ($rowall5 = mysql_fetch_array($queryall5)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall5[0]."'>" . $rowall5[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowall5[0]."'>" . $rowall5[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
    </div>
            </div>
                </div>
                </div>
            </center>
</div>
<?php
        }
?>
<!-----------------------------LEOAKI----------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->

<?php
        if($dni=='06862637'){
?>
<div id="divsecundariacta"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA INFORMATICA</h3>
                <h4>Correspondiente al NIVEL SECUNDARIA</h4>
                <br>
            <!---------------------------------------------------------------------------------------->
            <!--BEGIN ENCABEZADO-->
            <div class="bs-docs-example">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#cta11" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
                    <li><a href="#cta21" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
                    <li><a href="#cta31" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
                    <li><a href="#cta41" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
                    <li><a href="#cta51" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
                </ul>
            <!--END ENCABEZADO-->
            <!---------------------BEGIN CONTENT------------------------------------------------------------>
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade in active" id="cta11">
                <table class="table table-hover">
                            <?php
                            $conectaINFO= new Conection;
                            $conectaINFO->CONECT();
                            $queryctaINFO=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='1' and asinatura like('%INFORMAT%');
                                ");
                            while ($rowctaINFO = mysql_fetch_array($queryctaINFO)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowctaINFO[0]."'>" . $rowctaINFO[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowctaINFO[0]."'>" . $rowctaINFO[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
                <div class="tab-pane fade" id="cta21">
                <table class="table table-hover">
                            <?php
                            $conecta2INFO= new Conection;
                            $conecta2INFO->CONECT();
                            $querycta2INFO=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='2' and asinatura like('%INFORMAT%');
                                ");
                            while ($rowcta2INFO = mysql_fetch_array($querycta2INFO)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta2INFO[0]."'>" . $rowcta2INFO[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta2INFO[0]."'>" . $rowcta2INFO[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="cta31">
                <table class="table table-hover">
                            <?php
                            $conecta3INFO= new Conection;
                            $conecta3INFO->CONECT();
                            $querycta3INFO=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='3' and asinatura like('%INFORMAT%');
                                ");
                            while ($rowcta3INFO = mysql_fetch_array($querycta3INFO)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta3INFO[0]."'>" . $rowcta3INFO[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta3INFO[0]."'>" . $rowcta3INFO[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="cta41">
                <table class="table table-hover">
                            <?php
                            $conecta4INFO= new Conection;
                            $conecta4INFO->CONECT();
                            $querycta4INFO=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='4' and asinatura like('%INFORMAT%');
                                ");
                            while ($rowcta4INFO = mysql_fetch_array($querycta4INFO)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta4INFO[0]."'>" . $rowcta4INFO[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta4INFO[0]."'>" . $rowcta4INFO[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
                <div class="tab-pane fade" id="cta51">
                <table class="table table-hover">
                            <?php
                            $conecta5INFO= new Conection;
                            $conecta5INFO->CONECT();
                            $querycta5INFO=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='5' and asinatura like('%INFORMAT%') ;
                                ");
                            while ($rowcta5INFO = mysql_fetch_array($querycta5INFO)) {
                                echo "
                                    <tr>
                                    <td></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta5INFO[0]."'>" . $rowcta5INFO[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowcta5INFO[0]."'>" . $rowcta5INFO[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
                </div>
    </div>
            </center>
</div>
<?php
        }
?>


<!---------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------->
<?php
        if($dni=='06862637'){
?>
<div id="divsecundariapc"style="margin-left: 15%;margin-right: 15%;">
    <center><h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA DE COMPUTACI&Oacute;N</h3>


    <div class="row-fluid">
            <div class="accordion" id="Bimestresacor">

<!---------------------------------------------------------------- PRIMARIA-->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle"  data-toggle="collapse" data-parent="#Bimestresacor" href="#primariapc">
                            <center>PRIMARIA</center>
            </a>
          </div>
                  <div style="height: 0px;" id="primariapc" class="accordion-body collapse">
                            <h4>Correspondiente al NIVEL PRIMARIA</h4>
                            <br>
                        <!---------------------------------------------------------------------------------------->
                        <!--BEGIN ENCABEZADO-->
                                <div class="bs-docs-example">
                                    <ul id="myTab" class="nav nav-tabs">
                                        <li class="active"><a href="#pc1p" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Primaria</a></li>
                                        <li><a href="#pc2p" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Primaria</a></li>
                                        <li><a href="#pc3p" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Primaria</a></li>
                                        <li><a href="#pc4p" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Primaria</a></li>
                                        <li><a href="#pc5p" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Primaria</a></li>
                                        <li><a href="#pc6p" data-toggle="tab"><i class=" icon-bullhorn"></i>6to De Primaria</a></li>
                                    </ul>
                                <!--END ENCABEZADO-->
                        <!---------------------BEGIN CONTENT------------------------------------------------------------>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="pc1p">
                                        <table class="table table-hover">
                                            <?php
                                            $conepcpr=new Conection();
                                            $conepcpr->CONECT();
                                            $consultapcpr=  mysql_query("select codigo,asinatura from descripcionsinature where  asinatura like('%computa%') and nomnivel='PRIMARIA' and grado='1';");
                                            while ($rowpcpr = mysql_fetch_array($consultapcpr)) {
                                                echo "
                                                    <tr>
                                      <td class='center'><a  TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr[0]."'>" . $rowpcpr[0]. "</a></td>
                                      <td class='center'><a  TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr[0]."'>" . $rowpcpr[1]. "</a></td>
                                                    </tr>
                                                    ";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pc2p">
                                            <table class="table table-hover">
                                            <?php
                                            $conepcpr2=new Conection();
                                            $conepcpr2->CONECT();
                                            $consultapcpr2=  mysql_query("select codigo,asinatura from descripcionsinature where  asinatura like('%computa%') and nomnivel='PRIMARIA' and grado='2';");
                                            while ($rowpcpr2 = mysql_fetch_array($consultapcpr2)) {
                                                echo "
                                                    <tr>
                                     <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr2[0]."'>" . $rowpcpr2[0]. "</a></td>
                                     <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr2[0]."'>" . $rowpcpr2[1]. "</a></td>
                                                    </tr>
                                                    ";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pc3p">
                                        <table class="table table-hover">
                                            <?php
                                            $conepcpr3=new Conection();
                                            $conepcpr3->CONECT();
                                            $consultapcpr3=  mysql_query("select codigo,asinatura from descripcionsinature where  asinatura like('%computa%') and nomnivel='PRIMARIA' and grado='3';");
                                            while ($rowpcpr3 = mysql_fetch_array($consultapcpr3)) {
                                                echo "
                                                    <tr>
                                      <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr3[0]."'>" . $rowpcpr3[0]. "</a></td>
                                      <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr3[0]."'>" . $rowpcpr3[1]. "</a></td>
                                                    </tr>
                                                    ";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pc4p">
                                        <table class="table table-hover">
                                            <?php
                                            $conepcpr4=new Conection();
                                            $conepcpr4->CONECT();
                                            $consultapcpr4=  mysql_query("select codigo,asinatura from descripcionsinature where  asinatura like('%computa%') and nomnivel='PRIMARIA' and grado='4';");
                                            while ($rowpcpr4 = mysql_fetch_array($consultapcpr4)) {
                                                echo "
                                                    <tr>
                                        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr4[0]."'>" . $rowpcpr4[0]. "</a></td>
                                        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr4[0]."'>" . $rowpcpr4[1]. "</a></td>
                                                    </tr>
                                                    ";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pc5p">
                                        <table class="table table-hover">
                                            <?php
                                            $conepcpr5=new Conection();
                                            $conepcpr5->CONECT();
                                            $consultapcpr5=  mysql_query("select codigo,asinatura from descripcionsinature where  asinatura like('%computa%') and nomnivel='PRIMARIA' and grado='5';");
                                            while ($rowpcpr5 = mysql_fetch_array($consultapcpr5)) {
                                                echo "
                                                    <tr>
                                        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr5[0]."'>" . $rowpcpr5[0]. "</a></td>
                                        <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr5[0]."'>" . $rowpcpr5[1]. "</a></td>
                                                    </tr>
                                                    ";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pc6p">
                                        <table class="table table-hover">
                                            <?php
                                            $conepcpr6=new Conection();
                                            $conepcpr6->CONECT();
                                            $consultapcpr6=  mysql_query("select codigo,asinatura from descripcionsinature where  asinatura like('%computa%') and nomnivel='PRIMARIA' and grado='6';");
                                            while ($rowpcpr6 = mysql_fetch_array($consultapcpr6)) {
                                                echo "
                                                    <tr>
                                      <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr6[0]."'>" . $rowpcpr6[0]. "</a></td>
                                      <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpcpr6[0]."'>" . $rowpcpr6[1]. "</a></td>
                                                    </tr>
                                                    ";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                                </div>
                  </div>
<!---------------------------------------------------------------- SECUNDARIA-->
                <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle"  data-toggle="collapse" data-parent="#Bimestresacor" href="#secundariapc">
                            <center>SECUNDARIA</center>
            </a>
          </div>
                    <div style="height: 0px;" id="secundariapc" class="accordion-body collapse">

                <h4>Correspondiente al nivel Secundaria, no tiene nada que llenar :D </h4>
            <!---------------------------------------------------------------------------------------->
            <!--BEGIN ENCABEZADO-->

            </center>
</div>
                    </div>
                </div>
            </div>
        </div>

<?php
        }
?>





<?php
        if($dni=='25693041'){
?>
<center>
    <h3 style="color: green">REGISTRO DE CRITERIOS DEL AREA EPT</h3>
<div class="bs-docs-example" style="width:70%;background-color: #FAC596;">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#pc1" data-toggle="tab"><i class="white icon-thumbs-up"></i>1ero De Secundaria</a></li>
                    <li><a href="#pc2" data-toggle="tab"><i class=" icon-bullhorn"></i>2do De Secundaria</a></li>
                    <li><a href="#pc3" data-toggle="tab"><i class=" icon-bullhorn"></i>3ero De Secundaria</a></li>
                    <li><a href="#pc4" data-toggle="tab"><i class=" icon-bullhorn"></i>4to De Secundaria</a></li>
                    <li><a href="#pc5" data-toggle="tab"><i class=" icon-bullhorn"></i>5to De Secundaria</a></li>
                </ul>
            <!--END ENCABEZADO-->
            <!---------------------BEGIN CONTENT------------------------------------------------------------>
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade in active" id="pc1">
                <table class="table table-hover">
                            <?php
                            $conepc= new Conection;
                            $conepc->CONECT();
                            $querypc=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='1' and asinatura like('%Educacion para el%');
                                ");
                            while ($rowpc = mysql_fetch_array($querypc)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc[0]."'>" . $rowpc[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc[0]."'>" . $rowpc[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="pc2">
                <table class="table table-hover">
                            <?php
                            $conepc2= new Conection;
                            $conepc2->CONECT();
                            $querypc2=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='2' and asinatura like('%Educacion para el%');
                                ");
                            while ($rowpc2 = mysql_fetch_array($querypc2)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc2[0]."'>" . $rowpc2[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc2[0]."'>" . $rowpc2[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="pc3">
                <table class="table table-hover">
                            <?php
                            $conepc3= new Conection;
                            $conepc3->CONECT();
                            $querypc3=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='3' and asinatura like('%Educacion para el%');
                                ");
                            while ($rowpc3 = mysql_fetch_array($querypc3)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc3[0]."'>" . $rowpc3[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc3[0]."'>" . $rowpc3[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="pc4">
                <table class="table table-hover">
                            <?php
                            $conepc4= new Conection;
                            $conepc4->CONECT();
                            $querypc4=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='4' and asinatura like('%Educacion para el%');
                                ");
                            while ($rowpc4 = mysql_fetch_array($querypc4)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc4[0]."'>" . $rowpc4[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc4[0]."'>" . $rowpc4[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
               <div class="tab-pane fade" id="pc5">
                <table class="table table-hover">
                            <?php
                            $conepc5= new Conection;
                            $conepc5->CONECT();
                            $querypc5=  mysql_query("select codigo,asinatura
                                from descripcionsinature where nomnivel='secundaria' and
                                grado='5' and asinatura like('%Educacion para el%');
                                ");
                            while ($rowpc5 = mysql_fetch_array($querypc5)) {
                                echo "
                                    <tr>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc5[0]."'>" . $rowpc5[0]. "</a></td>
                                    <td class='center'><a TARGET = '_blank' href='regcriterio.php?asinatura=".$rowpc5[0]."'>" . $rowpc5[1]. "</a></td>
                                    </tr>
                                    ";
                            }
                            ?>
                </table>
               </div>
    </div>
<!--end content-->
</div>
</center>


<?php
        }
?>
<br><br><br><br>
<div style="text-align:center;">
<code style="font-size:20px;">NOTA:</code><a style="font-size:17px;">Si existiese algun error de asignaturas que no les corresponda enviar un mensaje a: sistemas@lncc.edu.pe</a>
</div>
<?php
require_once 'Includes/modal-footer.php';?>
<?php }?>
</body>
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