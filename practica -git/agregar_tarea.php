<?php
    //conexion a la base de datos
$include = include("con_db.php");
    if ($include) {
        $consulta = "SELECT * FROM tareas";
        $resultado = mysqli_query($conex, $consulta);
    } 

    //variables para capturar los datos del formulario
    if (isset($_POST['tarea-agregar'])) {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        //insertar datos en la base de datos
        $insertar = "INSERT INTO tareas(titulo, descripcion) VALUES ('$titulo', '$descripcion')";
        $ejecutar = mysqli_query($conex, $insertar);

        if ($ejecutar) {
            echo "<h3>Tarea agregada correctamente</h3>";
        } else {
            echo "<h3>Error al agregar la tarea</h3>";
        }
    }
?>