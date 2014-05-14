<?php
require_once 'Class/Registro.php';
$regg=new Registro();
$code=$_GET['codigo'];
if($code!=0 and $code!=""){
$regg->Updateregistro1($code);
}else{
    echo "no se acepta ese numero de registro";
}
?>
