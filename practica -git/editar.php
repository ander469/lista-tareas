<?php

include('con_db.php');
// consulta sql para obtener la tarea a editar
$tablas = "tareas";
$sql = "SELECT * FROM $tablas";
$resulado = mysqli_query($conex, $sql);

?>