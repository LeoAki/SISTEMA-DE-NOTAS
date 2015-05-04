<?php
require_once 'Class/Niveles.php';
$nivl = new Niveles();

$level = $_GET['nv'];
$grade = $_GET['gr'];

if ($level == 1) {
    $level2 = "INICIAL";
} else if ($level == 2) {
    $level2 = "PRIMARIA";
} else {
    $level2 = "SECUNDARIA";
}

switch ($grade) {
    case 4: $grade2 = 1;
        break;
    case 5: $grade2 = 2;
        break;
    case 6: $grade2 = 3;
        break;
    case 7: $grade2 = 4;
        break;
    case 8: $grade2 = 5;
        break;
    case 9: $grade2 = 6;
        break;
    default: $grade2 = 0;
        break;
}

$listaulas = $nivl->Aulasnivel($level, $grade);
?>
<table class='table table-bordered'>
    <tr>
        <td colspan='2'><strong><center>AULA</center></strong></td>
        <td><strong><center>TUTOR</center></strong></td>
        <td><strong><center>AUXILIAR</center></strong></td>
        <td colspan='4'><center><strong>MENSAJES</strong></center></td>
<td colspan='4'><center><strong>PP.FF</strong></center></td>
<td><center><strong>Asis.</strong><br>IV B</center></td>
<td colspan='5'><center><strong>CONSOLIDADOS</strong></center></td>
<td><strong><center>Registros</center></strong></td>
</tr>
<? while ($row = mysql_fetch_row($listaulas)) { ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1] . ' ' . $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><a target='_blank' href='msjbim.php?sendcode=<?php echo $row[5] ?>'>I B</a></td>
        <td><a target='_blank' href='msjbim2.php?sendcode=<?php echo $row[5] ?>'>II B</a></td>
        <td><a target='_blank' href='msjbim3.php?sendcode=<?php echo $row[5] ?>'>III B</a></td>
        <td><a target='_blank' href='msjbim4.php?sendcode=<?php echo $row[5] ?>'>IV B</a></td>
        <td><a target='_blank' href='mnsjppff.php?profcode=<?php echo $row[5] ?>'>I B</a></td>
        <td><a target='_blank' href='mnsjppff2.php?profcode=<?php echo $row[5] ?>'>II B</a></td>
        <td><a target='_blank' href='mnsjppff3.php?profcode=<?php echo $row[5] ?>'>III B</a></td>
        <td><a target='_blank' href='mnsjppff2.php?profcode=<?php echo $row[5] ?>'>IV B</a></td>

        <td><a target='_blank' href='stnc.php?seccionauxi=<?php echo $row[0] ?>&bimestre=1&ut=<?php echo $row[5] ?>'>ver</a></td>

        <td><a target='_blank' href='cons1.php?codigoseccion=<?php echo $row[0] ?>&niveldelaula=<?php echo $level2 ?>&gradodelaula=<?php echo $grade2 ?>'>I B</a></td>
        <td><a target='_blank' href='cons2.php?codigoseccion=<?php echo $row[0] ?>&niveldelaula=<?php echo $level2 ?>&gradodelaula=<?php echo $grade2 ?>'>II B</a></td>
        <td><a target='_blank' href='cons3.php?codigoseccion=<?php echo $row[0] ?>&niveldelaula=<?php echo $level2 ?>&gradodelaula=<?php echo $grade2 ?>'>III B</a></td>
        <td>
            <a target='_blank' href='cons4.php?codigoseccion=<?php echo $row[0] ?>&niveldelaula=<?php echo $level2 ?>&gradodelaula=<?php echo $grade2 ?>'>IV B</a><br><br>
            <?php echo $level2 == 'PRIMARIA' ? "<i><a target='_blank' href='cons4Letras.php?codigoseccion=$row[0]&niveldelaula=$level2&gradodelaula=$grade2'><b>IV LETRAS B</b></a></i>" : ''; ?>
        </td>
        <td><a target='_blank' href='anual.php?codigoseccion=<?php echo $row[0] ?>&niveldelaula=<?php echo $level2 ?>&gradodelaula=<?php echo $grade2 ?>'>FINAL</a></td>

        <td><a target="_blank" href="listaRegistrosAulas.php?seccion=<?php echo $row[0] ?>">Ver registros</a></td>
    </tr>
<?php } ?>
</table>
<br><br><br><br><br>