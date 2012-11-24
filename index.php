<?php session_start(); ?>
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
                    $_SESSION['dni']=$usuariolncc->getCONTRASENA();
                    $_SESSION['definemenu']=$usuariolncc->getIDPERFIL();
                    $_SESSION['idpersona']=$usuariolncc->getIDPERSONA();
                    $_SESSION['fechainicio']=$usuariolncc->getINSCRIPCION();
                    $_SESSION['niveldeuser']=$usuariolncc->getNIVEL();
                    $_SESSION['ultimavez']=$usuariolncc->getULTIMASESION();
                    $_SESSION['usuario']=$usuariolncc->getUSUARIO();
                    $_SESSION['tipodeusuario']=$usuariolncc->getESTADO();
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
    <body style="background:white;color: #000;font-family: Helvetica,Arial;font-size:16px;">
        <div id="main" style="position: absolute; 
             left: 50%;
             top: 20%;
             height: 200px;
             margin-top: -100px;
             width: 300px;
             margin-left: -150px;
             
             ">
        <div id="insinia">
            <center><img src="Css/images/insignia.jpg" alt="INICIAR SESION"/></center>
        </div>
        <div>
            <h2 style="text-align: center;text-shadow: 5px 5px 10px rgba(0,0,0,0,5); color: red;">INICIAR SESION</h2>
            <br>
            <form action='index.php?validando=1' method='post' name='formulario'>
                  <center>
                    <table>
                        <tr>
                            <td style="color: green;">USUARIO</td><td><input id='usuario' name='usuario' placeholder="usuario" type='text' style="border-color: red;"/></td>
                        </tr>
                        <tr>
                            <td style="color: green;">CONTRASEÑA</td><td><input id='contrasena' name='contrasena' type='password' placeholder="contraseña" style="border-color: red;"/></td>
                        </tr>                      
                    </table>
                  </center>
                <center><button type="submit"class="btn btn-info" id="btnlogin" name="btnsave" style="background: #51a351;">Ingresar</button></center>
            </form>
        </div>
        </div>
    </body>
    
    </body>
</html>