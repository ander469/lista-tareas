<?php
// Conexión a la base de datos
$conex = mysqli_connect("localhost","root","","tareas");
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tareas';

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);

    echo "conexion exitosa"; 

    //consulta a la base de datos
    $sql = "SELECT * FROM tareas";

    //ejecutar la consulta
    $resultado = $conexion->query($sql);

    //verificar si hay resultados
    if ($resultado->num_rows > 0) {
        //mostrar los datos de cada fila
        while($fila = $resultado->fetch_assoc()) {
            echo "id: " . $fila["id"]. " - Título: " . $fila["titulo"]. " - Descripción: " . $fila["descripcion"]. "<br>";
        }
    } else {
        echo "0 resultados";
    }


}
?>