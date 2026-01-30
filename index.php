<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Lista De Tareas</title>
</head>
<body>
<div class="container">
        <h1>📝 Lista de Tareas</h1>

        <form class="form-1" action="agregar_tarea.php" method="POST" >
            <div class="input-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
            </div>
            <button type="submit">Agregar Tarea</button>
        </form>
    </div>
</body>
</html>