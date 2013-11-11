<?php
$idperson=$_SESSION['idpersona'];require_once 'Class/Alumn.php';$ALUMNO= new Alumn();
?>
<div class="text-center">
<?php
$infoal=$ALUMNO->InfoAlumno($idperson);
if ($filainf = mysql_fetch_array($infoal)) {
$codigo=$filainf[0];
$nombre=$filainf[1].' '.$filainf[2].' ,'.$filainf[3];
$sex=$filainf[4];$codeidsec=$filainf[5];$niveledu=$filainf[6];$gradoedu=$filainf[7];$namesec=$filainf[8];$tuto=$filainf[9];$aux=$filainf[10];}
echo '<p class=\'text-success\'><b>AULA:</b><i>'.$gradoedu.' &#176;'. $namesec.' </i><b>NIVEL: </b><i>'.$niveledu.'</i><br><b>TUTOR: </b><i>'.$tuto.'</i><br><b>AUXILIAR: </b><i>'.$aux.'</i></p>';
?></div>