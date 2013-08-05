<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35064220-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Sistema de notas del Liceo Naval Capitan De Corbeta Manuel Clavero Muga">
        <meta name="author" content="Oficina De Sistemas Clavero">
        <meta name="keywords" content="LNCC, Ventanilla, clavero, 'LNCC - Liceo Naval Capitán de Corbeta Manuel Clavero Muga', liceo naval" />
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
        <!----------------------------------BOOTSTRAP---------------------------------------------------->
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <link rel="stylesheet" href="Css/mistyle.css" type="text/css" media="screen" />
        <title>LICEO NAVAL CAPIT&Aacute;N DE CORBETA "MANUEL CLAVERO MUGA" ONLINE</title>
    </head>
        <?php
    require_once 'Class/Usuario.php';
    require_once 'Class/Validador.php';
    if(isset ($_REQUEST["validando"]) && isset ($_REQUEST["usuario"]) && isset ($_REQUEST["contrasena"])){
        $v=$_REQUEST["validando"];
        $user=$_REQUEST["usuario"];
        $contra=$_REQUEST["contrasena"];
        if((int) $v === 1){
            if(Validador::esValido($user) && Validador::esValido($contra)){
                $usuariolncc= new Usuario();
                if($usuariolncc->Validar($user, $contra)>0){
                    $_SESSION['USERLNCCNOTAS']=$usuariolncc;
                    $_SESSION['codigo']=$usuariolncc->getCODIGO();
                    $_SESSION['usuario']=$usuariolncc->getUSUARIO();
                    $_SESSION['contrasena']=$usuariolncc->getCONTRASENA();
                    $_SESSION['definemenu']=$usuariolncc->getIDPERFIL();
                    $_SESSION['tipodeusuario']=$usuariolncc->getESTADO();
                    $_SESSION['idpersona']=$usuariolncc->getIDPERSONA();
                    $_SESSION['niveldeuser']=$usuariolncc->getNIVEL();
                    $_SESSION['fechainicio']=$usuariolncc->getINSCRIPCION();
                    $_SESSION['ultimavez']=$usuariolncc->getULTIMASESION();
                    
                    $idpersonaview=$usuariolncc->getIDPERSONA();#cogeridpersona
                    $dnifound=$usuariolncc->verdnisesion($idpersonaview);#consulta en la clase
                    if ($rowuserfound = mysql_fetch_array($dnifound)) {
                        $_SESSION['dni']=$rowuserfound[0];
                    }
                    
                    $users=$_SESSION['usuario'];
                    $usuariolncc->SESIONBEGIN($user);
                    
                    if($_SESSION['niveldeuser']==1){
                        echo "<script>window.location = 'regnota.php'</script>";
                    }
                    if($_SESSION['niveldeuser']==2){
                        echo "<script>window.location = 'regnota.php'</script>";
                    }
                    if($_SESSION['niveldeuser']==3){
                        echo "<script>window.location = 'regnota.php'</script>";
                    }            
                    if($_SESSION['niveldeuser']==9){
                        echo "<script>window.location = 'regnota.php'</script>";
                    }                               
                    if($_SESSION['niveldeuser']==4){
                        echo "<script>window.location = 'inicio.php'</script>";
                    }    
                    if($_SESSION['niveldeuser']==5){
                        echo "<script>window.location = 'inicio.php'</script>";
                    }                             
                    if($_SESSION['niveldeuser']==6){
                        echo "<script>window.location = 'inicio.php'</script>";
                    }                             
                    if($_SESSION['niveldeuser']==7){
                        echo "<script>window.location = 'inicio.php'</script>";
                    }                             
                    if($_SESSION['niveldeuser']==8){
                        echo "<script>window.location = 'inicio.php'</script>";
                    }  
                    if($_SESSION['niveldeuser']==0){
                        echo "<script>window.location = 'inicio.php'</script>";
                    }                                                                                                                           
                }
                }else {
                session_destroy();
                header('Location: index.php');
                
                echo "<script type='text/javascript'>alert('NO SE PUDO CONECTAR');</script>";
                echo "Contraseña Inválida";
                }
            }
        
    }else if (isset($_REQUEST['close'])) {
        session_destroy();
        header('Location: index.php');
    }
    ?>
    <body>
        <span class="pk">
            Bienvenidos al Sistema De Notas Del<br>Liceo Naval Capitan De Corbeta<br>
            Manuel clavero muga

        </span>
            <div id="main1">
                                <h2 class="leo">INICIAR SESION</h2>
                            <form action='index.php?validando=1' method='post' name='formulario'>
                                    <table>
                                        <tr>
                                            
                                            <td><input class="inp1" id='usuario' name='usuario' placeholder="USUARIO" type='text'/></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="inp1" id='contrasena' name='contrasena' type='password' placeholder="PASSWORD"/>
                                                <button type="submit"class="btn btn-info" id="btnlogin" name="btnsave">INGRESAR</button>
                                            </td>
                                        </tr>                      
                                    </table>                           
                            </form>
            </div>  
        <div class="modal-footer">
            <direction>
                <center><em>LICEO NAVAL CAPIT&Aacute;N DE CORBETA "MANUEL CLAVERO MUGA"</em><br>
                            DIRECCION - VENTANILLA<br>
                            TEL&Eacute;FONOS:  (051-1) 464-3814 / 577-6258<br>
                            CORREO:<a href="mailto:sistemas@lncc.edu.pe">sistemas@lncc.edu.pe</a>
                </center>
            </direction>
        </div>
    </body>
</html>