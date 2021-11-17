<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9</title>
</head>
<body>
    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <label for="calificacion">Ingresa tu calificacion:</label>
        <input type="text" name="calificacion" id="calificacion">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>