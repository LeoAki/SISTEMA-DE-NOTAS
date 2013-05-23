<?php
$idperson=$_SESSION['idpersona'];
require_once 'Class/Alumn.php';
$ALUMNO= new Alumn();
?>
<div class="bs-docs-example" style="background-color: #0489B1;">
<?php
$infoal=$ALUMNO->InfoAlumno($idperson);
if ($filainf = mysql_fetch_array($infoal)) {
        $codigo=$filainf[0];
        $nombre=$filainf[1]." ".$filainf[2]." ,".$filainf[3];
        $sex=$filainf[4];
        $codeidsec=$filainf[5];
        $niveledu=$filainf[6];
        $gradoedu=$filainf[7];
        $namesec=$filainf[8];
        $tuto=$filainf[9];
        $aux=$filainf[10];   
}
echo "<a style='color:white;'><b>GRADO:</b><i>".$gradoedu."° </i>
         <b>SECCION:</b>'<i>".$namesec."' </i>
         <b>NIVEL:</b><i>".$niveledu."||||||||||</i>
         <b>TUTOR:</b><i>".$tuto."|</i>
         <b>AUXILIAR:</b><i>".$aux."</i>
             </a>";
?>
</div>