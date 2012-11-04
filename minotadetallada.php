<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="Css/images/favicon.ico">
        <title>LNCC ONLINE--Mis Notas Detalladas</title>
<!----------------------------------BOOTSTRAP--css-------------------------------------------------->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_page.css" rel="stylesheet"/>
<link href="Include/data-table/css/demo_table.css" rel="stylesheet"/>
<!-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<!----------------------------------BOOTSTRAP--js-------------------------------------------------->
<!--<script type="text/javascript" src="Js/bootstrap.js"></script>-->
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/bootstrap-tab.js"></script>
<script type="text/javascript" src="Js/jquery.innerfade.js"></script>
    </head>
    <body>
        <?php require_once 'Includes/navegador.php';    ?>
        <center><h3 style="color: green">PROCESO DE NOTAS</h3></center>
        <a>Secci&oacute;n   :   </a><label></label><br>
        <a>Alumno   :   </a><label></label><br>
        <!--TABS DE BIENVENIDA-->
    <div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#uno" data-toggle="tab"><i class="white icon-thumbs-up"></i>I BIMESTRE</a></li>
                <li><a href="#dos" data-toggle="tab"><i class=" icon-bullhorn"></i>II BIMESTRE</a></li>
                <li><a href="#tres" data-toggle="tab"><i class=" icon-bullhorn"></i>III BIMESTRE</a></li>
                <li><a href="#cuatro" data-toggle="tab"><i class=" icon-bullhorn"></i>IV BIMESTRE</a></li>
            </ul>
        <!---------------------BEGIN CONTENT------------------------------------------------------------>
        <div id="myTabContent" class="tab-content">
            <!--CONTENT I-->
            <div class="tab-pane fade in active" id="uno">
                <form>
                    <fieldset>
                        <center>
                        <legend style="color: peru">ELIGE EL CURSO Y MIRA EL I BIMESTRE</legend>
                        <table>
                            <tr>
                                <td>
                                    <select name="txtuno">
                                        <option value="">Elige Curso</option>
                                    </select>
                                </td>
                                <td><button class="btn btn-success">Ver Notas</button></td>
                            </tr>
                        </table>
                            <br>
                        <table class="display">
                            <tr class="gradeX">
                                <td><strong>Criterios De Evaluaci&oacute;n</strong></td>
                                <td><strong>Notas</strong></td>
                            </tr>
                        </table>
                        </center>
                    </fieldset>
                </form>
            </div>
            <!--CONTENT II-->
            <div class="tab-pane fade" id="dos">
                <form>
                    <fieldset>
                        <center>
                        <legend style="color: peru">ELIGE EL CURSO Y MIRA EL II BIMESTRE</legend>
                        <table>
                            <tr>
                                <td>
                                    <select name="txtuno">
                                        <option value="">Elige Curso</option>
                                    </select>
                                </td>
                                <td><button class="btn btn-success">Ver Notas</button></td>
                            </tr>
                        </table>
                            <br>
                        <table class="display">
                            <tr class="gradeX">
                                <td><strong>Criterios De Evaluaci&oacute;n</strong></td>
                                <td><strong>Notas</strong></td>
                            </tr>
                        </table>
                        </center>
                    </fieldset>
                </form>
            </div>
            <!--CONTENT III-->
            <div class="tab-pane fade" id="tres">
                <form>
                    <fieldset>
                        <center>
                        <legend style="color: peru">ELIGE EL CURSO Y MIRA EL III BIMESTRE</legend>
                        <table>
                            <tr>
                                <td>
                                    <select name="txtuno">
                                        <option value="">Elige Curso</option>
                                    </select>
                                </td>
                                <td><button class="btn btn-success">Ver Notas</button></td>
                            </tr>
                        </table>
                            <br>
                        <table class="display">
                            <tr class="gradeX">
                                <td><strong>Criterios De Evaluaci&oacute;n</strong></td>
                                <td><strong>Notas</strong></td>
                            </tr>
                        </table>
                        </center>
                    </fieldset>
                </form>
            </div>
            <!--CONTENT IV-->
            <div class="tab-pane fade" id="cuatro">
                <form>
                    <fieldset>
                        <center>
                        <legend style="color: peru">ELIGE EL CURSO Y MIRA EL IV BIMESTRE</legend>
                        <table>
                            <tr>
                                <td>
                                    <select name="txtuno">
                                        <option value="">Elige Curso</option>
                                    </select>
                                </td>
                                <td><button class="btn btn-success">Ver Notas</button></td>
                            </tr>
                        </table>
                            <br>
                        <table class="display">
                            <tr class="gradeX">
                                <td><strong>Criterios De Evaluaci&oacute;n</strong></td>
                                <td><strong>Notas</strong></td>
                            </tr>
                        </table>
                        </center>
                    </fieldset>
                </form>
            </div>
        </div>
        <!----------------------END CONTENT------------------------------------------------------------>
    </div>
        <?php require_once 'Includes/modal-footer.php'; ?>
    </body>
</html>
