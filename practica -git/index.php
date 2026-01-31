<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Lista De Tareas</title>
</head>
<body>
<div class="container">
        <h1>📝 Lista de Tareas</h1>
       <! -- formulario para agregar tareas -->
        <form action="agregar_tarea.php" method="POST" name="form-1" >
            <div class="input-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
            </div>
            <button type="submit" name="tarea-agregar">Agregar Tarea</button>


            <! -- botones de editar -->

            <button type="button" class="btn-editar" data-tooltip="Editar Tarea">
            <a href="editar.php">Editar tarea</a>
            </button>

              <! -- botones de eliminar -->

            <button type="button" class="btn-eliminar" data-tooltip="Eliminar Tarea">
            <a href="eliminar.php">Eliminar tarea</a>
            </button>

             <! -- botones lista de tareas -->

            <button type="button" class="btn-lista" data-tooltip="Lista de Tareas">
            <a href="lista-tareas.php">Lista De Tareas</a>
        </form>
    </div>
</body>
</html>