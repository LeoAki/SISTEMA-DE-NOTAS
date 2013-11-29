<?php
require_once 'Class/Registro.php';
$regg=new Registro();
$code=$_GET['codigo'];
if($code!=0 and $code!=""){
$regg->Updateregistro4($code);
}else{
    echo "Hubo un error inesperado";
}
?>
