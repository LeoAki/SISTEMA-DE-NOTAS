<?php

require_once 'Class/Indicador.php';
$INDICA = new Indicador();

$criterio = $_GET['acriterio'];
$codigo = $_GET['acodigo'];
$componente = $_GET['acomponente'];
$num = $_GET['anumero'];
$peso = $_GET['apeso'];

#CUANTOS HAY-------------------------
$cantidad = $INDICA->LISTGENERAL($compo);
$numero = mysql_num_rows($cantidad);
$codigoi;
$uno = 1;
$nrocriterio;
if ($num != 0) {
    $nrocriterio = $num;
} else {
    $nrocriterio = $numero + $uno;
}

$INDICA->setCODIGO($codigo);
$INDICA->setIDCOMPONENTE($componente);
$INDICA->setNRO_CRITERIO($num);
$INDICA->setCRITERIO(htmlentities($criterio, ENT_QUOTES, "UTF-8"));
$INDICA->setPESO($peso);
$INDICA->GRABAR();
echo 'Todo salió excelente';
?>
