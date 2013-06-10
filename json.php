<?php
require_once 'Class/Docente.php';
$DOCENTE= new Docente();
$lista=$DOCENTE->LISTAR();
//Manera1
//Forma de principiante
//while ($row1 = mysql_fetch_object($lista)) {
//
//    $arr[] = array('Codigo' => $row1->codigo,
//                   'Paterno' => utf8_encode($row1->paterno),
//                   'Materno' => $row1->materno,
//                   'Nombres' => $row1->nombres,
//                   'Dni' => $row1->dni,
//                   'Cargo' => $row1->tipo,
//        );
//}
//echo '' . json_encode($arr) . '';

//Manera2
//$rows = array();
//while($r = mysql_fetch_assoc($lista)) {
//  $rows[] = $r;
//}
//echo json_encode($rows);

//manera3
//Level rock
$rows = array();
   while($r = mysql_fetch_assoc($lista)) {
     $rows['aaData'][] = $r;
   }

 print json_encode($rows);

?>