<?php
require_once 'Class/Indicador.php';
$lista1=new Indicador();
$componenteregind=$_GET['compind'];

$lista=$lista1->LISTAR($componenteregind);
while ($row2 = mysql_fetch_array($lista)) {
    echo "
<table>
<tr class='gradeA'>
    
    <td class='center'>
    <a href='regindicador.php?componente= $componenteregind &orden= $row2[3] &indicador=$row2[2] &codeindi= $row2[0]' TARGET = '_blank' title='Edita el indicador'>
    $row[1] $row2[3]
    <i class='icon icon-edit'></i>
    </a>
    </td>
    
    <td>".$row2[2]."</td>
        
</tr>
</table>
";
}
?>
