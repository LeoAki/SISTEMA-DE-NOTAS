<?php

include_once 'Class/Usuario.php';
$dni = $_POST['dni'];
$user = new Usuario();
$data = $user->listarDetalle($dni);
if (count($data) < 1) {
    echo 'No se encontraron registros con ese Usuario o DNI';
} else {
    while ($row = mysql_fetch_array($data)) {
        echo 'El usuario ' . $row['usuario'] . ' tiene las siguientes características:<br>
        Nombre y Apellidos: ' . $row['paterno'] . ' ' . $row['materno'] . ', ' . $row['nombre'] . '<br>
        Contraseña:' . $row['passwd'];
    }
}
