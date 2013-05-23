<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="Css/images/favicon.ico">
<title>LICEO NAVAL CAPIT&Aacute;N DE CORBETA "MANUEL CLAVERO MUGA" ONLINE--BIENVENIDOS</title>
<?php
require_once 'Class/Usuario.php';
$userclass=new Usuario();
if(!isset ($_SESSION['USERLNCCNOTAS']) && !$_SESSION['USERLNCCNOTAS'] instanceof Usuario){
    #DT06862637
session_destroy();
echo "<script>window.location = 'index.php'</script>";
}else 
{
$dniviewchange=$_SESSION['contrasena'];
?>
<!--css bootstrap-->
<link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
<link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
</head>
    <body>     
<?php
$enviado=$_POST['enviado'];
if(isset($_POST['enviar'])){
    $newcontrasena=$_REQUEST['passwordNew1'];
    $userclass->changepassid($_SESSION['idpersona'], $newcontrasena);
    $mensajelieg="La contrasena ha sido cambiada";
}
require_once 'Includes/navegador.php';
?>
        <br><br>
<center>
<div style="width: 60%;">
<form name="formName" action="" method="POST">
        <div id="epasswordNew1" style="color:#f00;" class="alert-danger"></div>
        <div>Nueva Contrase&ntilde;a: <input type="text" name="passwordNew1" placeholder="Nueva Contrasena" onblur="return validate_password()"/></div>
        <div>Repite Nueva Contrase&ntilde;a: <input type="text" name="passwordNew2" placeholder="Repite nueva contrasena" class="input-medium" onblur="return validate_password()"/></div>
        <div id="mensaje-ok" class="alert-success"></div>
        <div>haz clic para habilitar el boton<input type="checkbox" name="ckb1" id="ckb1" style="width: 25px;" onclick="ver()"></div>
        <div><input type="submit" name="enviar" value="Cambiar contrase&ntilde;a" disabled /></div>
        <div id="mejj" class="alert-success"><?php echo $mensajelieg; ?></div>
</form>
</div>
</center>
<?php 
if($_POST['enviado']==='1'){
    echo "
        <div>Hola</div>
    ";
}
echo $enviado;
?>
<?php
require_once 'Includes/modal-footer.php';
?>
    </body>
<?php }?>
<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="Js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="Js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="Js/bootstrap-popover.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<script type="text/javascript">   
    
function ver(){
    if(validate_password()){
    document.formName.enviar.disabled=!document.formName.enviar.disabled;}
}

function validate_password()
{
	//Cogemos los valores actuales del formulario
	pasNew1=document.formName.passwordNew1;
	pasNew2=document.formName.passwordNew2;
	//Cogemos los id's para mostrar los posibles errores
	id_epassNew=document.getElementById("epasswordNew1");
        id_message=document.getElementById("mensaje-ok");

	//Patron para los numeros
	var patron1=new RegExp("[0-9]+");
	//Patron para las letras
	var patron2=new RegExp("[a-zA-Z]+");

	if(pasNew1.value==pasNew2.value && 
           pasNew1.value.length>=6 &&
           pasNew1.value.search(patron1)>=0 && 
           pasNew1.value.search(patron2)>=0
          ){
		//Todo correcto!!!
                id_message.innerHTML="Todo excelente";
                id_epassNew.innerHTML="";
		return true;
                

	}else{
                         
		if(pasNew1.value.length<6){
                    
                        id_message.innerHTML="";
			id_epassNew.innerHTML="La longitud mínima tiene que ser de 6 caracteres";
                        
                }else if(pasNew1.value!=pasNew2.value){
                    
                        id_message.innerHTML="";
			id_epassNew.innerHTML="La copia de la nueva contraseña no coincide";
                        
                }else if(pasNew1.value.search(patron1)<0 || pasNew1.value.search(patron2)<0){
                        
                        id_message.innerHTML="";
			id_epassNew.innerHTML="La contraseña tiene que tener numeros y letras";
                        
                }else {
                        id_epassNew.innerHTML="";
                }
               
                
		return false;
	}
}
</script>

</html>
