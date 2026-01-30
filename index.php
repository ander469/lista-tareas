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
        </form>
    </div>
    <br>
    
</body>
</html>